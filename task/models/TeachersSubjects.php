<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers_subjects".
 *
 * @property int $teacher_id
 * @property int $subject_id
 *
 * @property Subjects $subject
 * @property Teachers $teacher
 */
class TeachersSubjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers_subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'subject_id'], 'required'],
            [['teacher_id', 'subject_id'], 'integer'],
            [['teacher_id', 'subject_id'], 'unique', 'targetAttribute' => ['teacher_id', 'subject_id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject_id' => 'subject_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['teacher_id' => 'teacher_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'subject_id' => 'Subject ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subjects::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['teacher_id' => 'teacher_id']);
    }
}
