<?php

namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{

    /**
     * Displays homepage.
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionExplore()
    {
        return $this->render('explore');
    }

    public function actionProduct()
    {
        return $this->render('product');
    }

    public function actionBrand_story()
    {
        return $this->render('brand_story');
    }

    public function actionStory()
    {
        return $this->render('story');
    }

    public function actionJia()
    {
        return $this->render('jia');
    }

    public function actionQixi()
    {
        return $this->render('qixi');
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

}
