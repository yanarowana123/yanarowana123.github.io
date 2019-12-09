<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property int $group_id
 * @property string $group_title
 * @property int $group_status
 *
 * @property StudentsGroups[] $studentsGroups
 * @property Students[] $students
 * @property TeachersGroups[] $teachersGroups
 * @property Teachers[] $teachers
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_title'], 'required'],
            [['group_status'], 'integer'],
            [['group_title'], 'string', 'max' => 255],
            [['group_title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'group_id' => 'Group ID',
            'group_title' => 'Group Title',
            'group_status' => 'Group Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsGroups()
    {
        return $this->hasMany(StudentsGroups::className(), ['group_id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['student_id' => 'student_id'])->viaTable('students_groups', ['group_id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachersGroups()
    {
        return $this->hasMany(TeachersGroups::className(), ['group_id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teachers::className(), ['teacher_id' => 'teacher_id'])->viaTable('teachers_groups', ['group_id' => 'group_id']);
    }
}
