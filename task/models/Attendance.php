<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property int $student_id
 * @property int $subject_id
 * @property string $date
 * @property string $value
 * @property int $teacher_id
 *
 * @property StudentsGroups $student
 * @property TeachersGroups $subject
 * @property TeachersGroups $teacher
 */
class Attendance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'subject_id', 'date', 'teacher_id'], 'required'],
            [['student_id', 'subject_id', 'teacher_id'], 'integer'],
            [['date'], 'safe'],
            [['value'], 'string', 'max' => 255],
            [['student_id', 'subject_id', 'date'], 'unique', 'targetAttribute' => ['student_id', 'subject_id', 'date']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudentsGroups::className(), 'targetAttribute' => ['student_id' => 'student_id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => TeachersGroups::className(), 'targetAttribute' => ['subject_id' => 'subject_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => TeachersGroups::className(), 'targetAttribute' => ['teacher_id' => 'teacher_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'subject_id' => 'Subject ID',
            'date' => 'Date',
            'value' => 'Value',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(StudentsGroups::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(TeachersGroups::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(TeachersGroups::className(), ['teacher_id' => 'teacher_id']);
    }
}
