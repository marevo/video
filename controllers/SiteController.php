<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        // return 'VideoSchool';
        return $this->render('index');
    }
}