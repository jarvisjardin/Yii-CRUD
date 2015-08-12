<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $id
 * @property string $email
 * @property integer $expectedcalories
 * @property string $password_hash
 * @property integer $isactive
 * @property string $datecreated
 * @property string $dateupdated
 *
 * The followings are the available model relations:
 * @property Mealtracking[] $mealtrackings
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('datecreated, dateupdated', 'required'),
			array('expectedcalories, isactive', 'numerical', 'integerOnly'=>true),
			array('email, password_hash', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, expectedcalories, password_hash, isactive, datecreated, dateupdated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'mealtrackings' => array(self::HAS_MANY, 'Mealtracking', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'expectedcalories' => 'Expectedcalories',
			'password_hash' => 'Password Hash',
			'isactive' => 'Isactive',
			'datecreated' => 'Datecreated',
			'dateupdated' => 'Dateupdated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('expectedcalories',$this->expectedcalories);
		$criteria->compare('password_hash',$this->password_hash,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('datecreated',$this->datecreated,true);
		$criteria->compare('dateupdated',$this->dateupdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
