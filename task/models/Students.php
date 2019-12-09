<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $student_id
 * @property string $student_fname
 * @property string $student_sname
 * @property int $status
 *
 * @property Attendance[] $attendances
 * @property StudentsGroups[] $studentsGroups
 * @property Groups[] $groups
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_fname', 'student_sname'], 'required'],
            [['status'], 'integer'],
            [['student_fname', 'student_sname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_fname' => 'Student Fname',
            'student_sname' => 'Student Sname',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsGroups()
    {
        return $this->hasMany(StudentsGroups::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['group_id' => 'group_id'])->viaTable('students_groups', ['student_id' => 'student_id']);
    }
}
