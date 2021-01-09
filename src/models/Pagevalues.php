<?php

namespace roms\models;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

class Pagevalues extends ActiveRecord
{	
	public function rules()
	{
		return [
		    [['id', 'obj_id'], 'integer'],
		    [['alt_name', 'title', 'description', 'keywords', 'menu_pic'], 'string'],
		];
	}

	public static function tableName()
	{
		return 'mc_page_values';
	}

	public function getPages() 
	{
		return $this->hasOne(Pages::className(), ['id' => 'id']);
	}
}
