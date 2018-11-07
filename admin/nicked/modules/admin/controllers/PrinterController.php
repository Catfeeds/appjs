<?php
/**
 * User: Xany <762632258@qq.com>
 * Date: 2017/12/1
 * Time: 10:08
 */

namespace app\modules\admin\controllers;


use app\extensions\SendMail;
use app\models\Option;
use app\models\Printer;
use app\models\PrinterSetting;
use app\modules\admin\models\PrinterForm;
use app\modules\admin\models\PrinterListForm;
use app\modules\admin\models\PrinterSettingForm;
use app\extensions\PinterOrder;

class PrinterController extends Controller
{
    public function actionList()
    {
        $form = new PrinterListForm();
        $form->store_id = $this->store->id;
        $form->attributes = \Yii::$app->request->get();
        $arr = $form->search();
        return $this->render('list', [
            'list' => $arr['list'],
            'pagination' => $arr['pagination'],
            'row_count' => $arr['row_count']
        ]);
    }

    /**
     * 打印机编辑
     */
    public function actionEdit($id = null)
    {
        $model = Printer::findOne(['id' => $id, 'store_id' => $this->store->id, 'is_delete' => 0]);
        if (!$model) {
            $model = new Printer();
        } else {
            $model->printer_setting = json_decode($model->printer_setting, true);
        }
        if (\Yii::$app->request->isPost) {
            $form = new PrinterForm();
            $form->store_id = $this->store->id;
            $form->model = $model;
            $form->attributes = \Yii::$app->request->post();
            $this->renderJson($form->save());
        } else {
            return $this->render('edit', [
                'model' => $model
            ]);
        }
    }

    /**
     * 打印机删除
     */
    public function actionPrinterDel($id)
    {
        $model = Printer::findOne($id);
        if (!$model) {
            $this->renderJson([
                'code' => 1,
                'msg' => '打印机不存在，请刷新重试'
            ]);
        }
        if ($model->is_delete == 1) {
            $this->renderJson([
                'code' => 1,
                'msg' => '打印机已删除，请刷新重试'
            ]);
        }
        $model->is_delete = 1;
        if ($model->save()) {
            $this->renderJson([
                'code' => 0,
                'msg' => '成功'
            ]);
        } else {
            $this->renderJson([
                'code' => 1,
                'msg' => '网络异常'
            ]);
        }
    }

    /**
     * 打印机模板库
     */
    public function actionBoard()
    {
        return $this->render('board');
    }

    /**
     * 添加模板
     */
    public function actionBoardEdit($id = null)
    {
        $board_list = [
            [
                'name'=>'head',
                'value'=>'小票头部',
                'default'=>'小票头部',
                'is_center'=>'center',
                'is_font'=>'32px'
            ],
            [
                'name'=>'goods',
                'value'=>'商品列表',
                'default'=>'商品列表',
            ],
            [
                'name'=>'total_price',
                'name_1'=>'block',
                'default'=>'总计',
                'value'=>'总计'
            ]
        ];
        $board_list = json_encode($board_list,JSON_UNESCAPED_UNICODE);
        return $this->render('board-edit',[
            'board_list'=>$board_list
        ]);
    }
    /**
     * 打印设置
     */
    public function actionSetting()
    {
        $list = Printer::findAll(['store_id'=>$this->store->id,'is_delete'=>0]);
        $model = PrinterSetting::findOne(['store_id'=>$this->store->id]);
        if(!$model){
            $model = new PrinterSetting();
        }else{
            $model->type = json_decode($model->type,true);
        }
        if(\Yii::$app->request->post()){
            $form = new PrinterSettingForm();
            $form->store_id = $this->store->id;
            $form->model = $model;
            $form->attributes = \Yii::$app->request->post();
            $this->renderJson($form->save());
        }else{
            return $this->render('setting',[
                'list'=>$list,
                'model'=>$model
            ]);
        }
    }
}