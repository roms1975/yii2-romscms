<?php

namespace roms;

use yii\web\UrlManager;
use roms\models\Pages;
use roms\models\Pagevalues;

class RomsUrlManager extends UrlManager
{
	public function parseRequest($request)
	{
		$model = Pagevalues::find();
		$pathInfo = $request->getPathInfo();
		$path_arr = explode('/', $pathInfo);
		$parent = 1;
		
		if (empty($pathInfo))
			return ['cms/cms/index', []];

		foreach ($path_arr as $alt_name) {

//error_log(print_r($alt_name . "\n", true), 3, __DIR__ . "/../../../../log/roms3.log");	

			$data = $model->where(['alt_name' => $alt_name])->one();
			if (!$data)
				return false;

			$curr_parent = isset($data->pages['parent']) ? $data->pages['parent'] : '';
			if ($parent != $curr_parent)
				return false;

			$parent = $data->pages['id'];
		}

		return ['cms/cms/index', []];
	}
}