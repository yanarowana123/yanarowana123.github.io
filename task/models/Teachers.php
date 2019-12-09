<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $teacher_id
 * @property string $teacher_fname
 * @property string $teacher_sname
 *
 * @property TeachersGroups[] $teachersGroups
 * @property Groups[] $groups
 * @property TeachersSubjects[] $teachersSubjects
 * @property Subjects[] $subjects
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_fname', 'teacher_sname'], 'required'],
            [['teacher_fname', 'teacher_sname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'teacher_fname' => 'Teacher Fname',
            'teacher_sname' => 'Teacher Sname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachersGroups()
    {
        return $this->hasMany(TeachersGroups::className(), ['teacher_id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['group_id' => 'group_id'])->viaTable('teachers_groups', ['teacher_id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachersSubjects()
    {
        return $this->hasMany(TeachersSubjects::className(), ['teacher_id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subjects::className(), ['subject_id' => 'subject_id'])->viaTable('teachers_subjects', ['teacher_id' => 'teacher_id']);
    }
}
