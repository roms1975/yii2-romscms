<?php

namespace roms\models;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

class Pages extends ActiveRecord
{	
	public function rules()
    {
        return [
            [['id', 'parent', 'template', 'ord'], 'integer'],
            [['domain'], 'string'],
            [['active', 'deleted', 'is_default'], 'boolean'],
            [['updated'], 'safe'],
        ];
    }
	
	public static function tableName()
    {
        return 'mc_pages';
    }
}
