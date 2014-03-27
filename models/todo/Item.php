<?php

namespace app\models\todo;

use Yii;

/**
 * This is the model class for table "Item".
 *
 * @property string $idItem
 * @property string $title
 * @property string $text
 * @property string $status
 */
class Item extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE     = 1;
    const STATUS_COMPLETE   = 2;
    const STATUS_CANCELED   = 3;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 64],
            [['text'], 'string'],
            [['status'], 'in', 'range'=>[
                self::STATUS_ACTIVE,
                self::STATUS_COMPLETE,
                self::STATUS_CANCELED,
            ]],
            [['title','text','status'],'safe']
        ];
    }

    public function fields()
    {
        return [
            'idItem',
            'title',
            'text',
            'status',
        ];
    }

}