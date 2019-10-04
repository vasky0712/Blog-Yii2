<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arcticle".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property string $author
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arcticle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
             [['title'], 'required',],
             [['date'], 'date', 'format'=>'php:Y-m-d'], 
             [['date'], 'default', 'value'=>date('Y-m-d')],
             [['title'],'string', 'max'=>255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'content' => 'Content',
            'user_id' => 'User ID',
            'author' => 'Author',
        ];
    }
}
