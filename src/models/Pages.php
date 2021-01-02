<?php

namespace roms\cms\models;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

class Author extends ActiveRecord
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
