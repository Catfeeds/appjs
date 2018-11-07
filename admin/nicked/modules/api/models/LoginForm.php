<?php
/**
 * User: Xany <762632258@qq.com>
 * Date: 2017/7/1
 * Time: 16:52
 */

namespace app\modules\api\models;


use app\models\Setting;
use app\models\Share;
use app\models\User;
use Curl\Curl;
use EasyWeChat\Factory;

class LoginForm extends Model
{
    public $wechat_app;

    public $code;
    public $user_info;
    public $encrypted_data;
    public $iv;
    public $signature;

    public $store_id;
    public $avatarUrl;
    public $nickName;
    public $gender;
    public $country;
    public $province;
    public $city;
    public $language;

    public function rules()
    {
        return [
            [['wechat_app', 'code', 'user_info', 'encrypted_data', 'iv', 'signature',], 'required'],
            [['avatarUrl','nickName','gender','country','province','city','language'],'trim']
        ];
    }

    public function login()
    {
        if (!$this->validate())
            return $this->getModelError();
        $res = $this->getOpenid($this->code);
        if (!$res || empty($res['openid'])) {
            return [
                'code' => 1,
                'msg' => '获取用户OpenId失败',
                'data' => $res,
            ];
        }
        //$session_key = $res['session_key'];
        $user_info = $this->user_info;
        if ($res['openid']) {
            //$data = json_decode($data, true);
            $user = User::findOne(['wechat_open_id' => $res['openid'], 'store_id' => $this->store_id]);
            if (!$user) {
                $user = new User();
                $user->type = 1;
                $user->username = $res['openid'];
                $user->password = \Yii::$app->security->generatePasswordHash(\Yii::$app->security->generateRandomString());
                $user->auth_key = \Yii::$app->security->generateRandomString();
                $user->access_token = \Yii::$app->security->generateRandomString();
                $user->addtime = time();
                $user->is_delete = 0;
                $user->wechat_open_id = $res['openid'];
                $user->wechat_union_id = isset($res['unionid']) ? $res['unionid'] : '';
                //$user->nickname = $data['nickName'];
                $user->nickname = isset($user_info['nickName']) ? preg_replace('/[\xf0-\xf7].{3}/', '', $user_info['nickName']) : 'Naked-'.rand(100000,999999);
                $user->avatar_url = isset($user_info['avatarUrl']) ? $user_info['avatarUrl'] : '';
                $user->store_id = $this->store_id;
                $user->save();
                $same_user = User::find()->select('id')->where([
                    'AND',
                    [
                        'store_id' => $this->store_id,
                        'wechat_open_id' => $res['openid'],
                        'is_delete' => 0,
                    ],
                    ['<', 'id', $user->id],
                ])->one();
                if ($same_user) {
                    $user->delete();
                    $user = null;
                    $user = $same_user;
                }
            }
            //更改用户信息
            if($this->avatarUrl and $this->avatarUrl !== $user->avatar_url){
                $user->avatar_url = $this->avatarUrl ? $this->avatarUrl : '';
                $user->save();
            }
            if($this->nickName and $this->nickName !== $user->nickname){
                $user->nickname = $this->nickName ? $this->nickName : '';
                $user->save();
            }
            // 分销商
            $share = Share::findOne(['user_id' => $user->parent_id]);
            $parent = '总店';
            if (!empty($share)) {
                $share_user = User::findOne(['id' => $share->user_id]);
                $parent = $share->name ? $share->name : $share_user->nickname;
            }

            return [
                'code' => 0,
                'msg' => 'success',
                'data' => (object)[
                    'access_token' => $user->access_token,
                    'nickname' => $user->nickname,
                    'avatar_url' => $user->avatar_url,
                    'is_distributor' => $user->is_distributor ? $user->is_distributor : 0,
                    'parent' => $parent,
                    'id' => $user->id,
                    'is_clerk' => $user->is_clerk,
                    'integral' => $user->integral,
                ],
            ];
        } else {
            return [
                'code' => 1,
                'msg' => '登录失败',
            ];
        }
    }

    private function getOpenid($code)
    {
        $api = "https://api.weixin.qq.com/sns/jscode2session?appid={$this->wechat_app->app_id}&secret={$this->wechat_app->app_secret}&js_code={$code}&grant_type=authorization_code";
        $curl = new Curl();
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->get($api);
        $res = $curl->response;
        $res = json_decode($res, true);
        return $res;
    }
}