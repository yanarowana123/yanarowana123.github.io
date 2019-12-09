<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property int $subject_id
 * @property string $subject_title
 *
 * @property Attendance[] $attendances
 * @property TeachersSubjects[] $teachersSubjects
 * @property Teachers[] $teachers
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_title'], 'required'],
            [['subject_title'], 'string', 'max' => 255],
            [['subject_title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'subject_title' => 'Subject Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachersSubjects()
    {
        return $this->hasMany(TeachersSubjects::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teachers::className(), ['teacher_id' => 'teacher_id'])->viaTable('teachers_subjects', ['subject_id' => 'subject_id']);
    }
}
