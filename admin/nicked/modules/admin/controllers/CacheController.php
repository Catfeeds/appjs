<?php
/**
 * User: Xany <762632258@qq.com>
 * Date: 2017/11/9
 * Time: 11:54
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\CacheCleanForm;

class CacheController extends Controller
{
    public function actionIndex()
    {
        if (\Yii::$app->request->isPost) {
            $form = new CacheCleanForm();
            $form->attributes = \Yii::$app->request->post();
            return $this->renderJson($form->save());
        } else {
            return $this->render('index');
        }
    }
}