<?php
/**
 * User: Xany <762632258@qq.com>
 * Date: 2017/7/15
 * Time: 13:40
 */

namespace app\modules\api\models;


use app\models\Cart;
use app\models\Goods;
use yii\helpers\VarDumper;

class UpdateCartForm extends Model
{
    public $cart_goods;
    public $store_id;
    public $user_id;
    public $num;

    public function rules()
    {
        return [
            [['cart_goods'], 'required'],
        ];
    }

    public function save()
    {
        if (!$this->validate())
            return $this->getModelError();

        $this->cart_goods = json_decode($this->cart_goods, true);
        $t = \Yii::$app->db->beginTransaction();
        try{
            foreach ($this->cart_goods as $item) {
                $cart = Cart::findOne(['id'=>$item['cart_id']]);
                $cart->num = $item['num'];
                $cart->save();
            }
            $t->commit();
            return [
                'code' => 0,
                'msg' => '成功',
            ];
        }catch (\Exception $e){
            $t->rollBack();
            return [
                'code' => 1,
                'msg' => '失败',
            ];
        }
    }
}