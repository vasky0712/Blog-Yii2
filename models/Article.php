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
            [['date'], 'safe'],
            [['user_id'], 'integer'],
            [['title', 'content', 'author'], 'string', 'max' => 255],
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
