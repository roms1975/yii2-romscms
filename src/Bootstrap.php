<?php

namespace roms;
use Yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface {
    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {		
	//error_log(print_r($app, true), 3, __DIR__ . "/../../../../log/roms.log");

        $app->setModule('cms', 'roms\Module');
        \Yii::$app->setComponents([
            'urlManager' => [
                'class' => 'roms\\RomsUrlManager', 
                'enablePrettyUrl' => TRUE, 
                'showScriptName' => FALSE,  
                'rules' => [
                    '/' => 'cms/cms/index',
                    '<url:\w+>' => 'cms/cms/index',
                ]
            ]       
        ]);
/*
        $app->getUrlManager()->addRules([
            '/' => 'cms/cms/index',
            '<url:\w+>' => 'cms/cms/index',
        ], false);
*/
        $app->layoutPath = '@vendor/roms1975/yii2-romscms/src/views/layouts/';
        $app->layout = 'main';
    }
	
	
	
}