<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers_groups".
 *
 * @property int $teacher_id
 * @property int $group_id
 * @property int $subject_id
 *
 * @property Attendance[] $attendances
 * @property Attendance[] $attendances0
 * @property Groups $group
 * @property TeachersSubjects $subject
 * @property TeachersSubjects $teacher
 */
class TeachersGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id', 'group_id', 'subject_id'], 'required'],
            [['teacher_id', 'group_id', 'subject_id'], 'integer'],
            [['teacher_id', 'group_id', 'subject_id'], 'unique', 'targetAttribute' => ['teacher_id', 'group_id', 'subject_id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'group_id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => TeachersSubjects::className(), 'targetAttribute' => ['subject_id' => 'subject_id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => TeachersSubjects::className(), 'targetAttribute' => ['teacher_id' => 'teacher_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'group_id' => 'Group ID',
            'subject_id' => 'Subject ID',
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
    public function getAttendances0()
    {
        return $this->hasMany(Attendance::className(), ['teacher_id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['group_id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(TeachersSubjects::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(TeachersSubjects::className(), ['teacher_id' => 'teacher_id']);
    }
}
