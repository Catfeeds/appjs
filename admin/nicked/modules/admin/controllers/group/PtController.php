<?php
/**
 * User: Xany <762632258@qq.com>
 * Date: 2017/11/24
 * Time: 11:32
 */

namespace app\modules\admin\controllers\group;


use app\models\Banner;
use app\modules\admin\models\group\BannerForm;

class PtController extends Controller
{
    /**
     * @return string
     * 拼团首页轮播
     */
    public function actionBanner()
    {
        $store = $this->store->id;
        $form = new BannerForm();
        $arr = $form->getList($store);
        return $this->render('slide', [
            'list' => $arr[0],
            'pagination' => $arr[1],
        ]);
    }

    /**
     * 拼团幻灯片添加修改
     */
    public function actionSlideEdit($id = 0)
    {
        $banner = Banner::findOne(['id' => $id]);
        if (!$banner) {
            $banner = new Banner();
        }
        $form = new BannerForm();
        if (\Yii::$app->request->isPost) {
            $model = \Yii::$app->request->post('model');
            $model['store_id'] = $this->store->id;
            $form->attributes = $model;
            $form->banner = $banner;
            return json_encode($form->save(), JSON_UNESCAPED_UNICODE);
        }
        return $this->render('slide-edit', [
            'list' => $banner
        ]);
    }

    /**
     * 拼团幻灯片删除
     * @param int $id
     */
    public function actionSlideDel($id = 0)
    {
        $dishes = Banner::findOne(['id' => $id, 'is_delete' => 0, 'type' => 2]);
        if (!$dishes) {
            $this->renderJson([
                'code' => 1,
                'msg' => '幻灯片不存在或已经删除'
            ]);
        }
        $dishes->is_delete = 1;
        if ($dishes->save()) {
            $this->renderJson([
                'code' => 0,
                'msg' => '成功'
            ]);
        } else {
            foreach ($dishes->errors as $errors) {
                $this->renderJson([
                    'code' => 1,
                    'msg' => $errors[0],
                ]);
            }
        }
    }


}