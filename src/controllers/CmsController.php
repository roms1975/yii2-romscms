<?php

namespace roms\cms\controllers;
use Yii;
use yii\web\Controller;
use roms\cms\models\PagesSearch;

class CmsController extends Controller
{
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \roms\cms\CmsAssetsBundle::register($this->view);
        $data = PagesSearch::getpage();
        return $this->render('index', [
            'data' => $data,
        ]);
    }
}