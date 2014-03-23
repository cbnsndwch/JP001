<?php

/**
 * This is the model class for table "jp_mc_item_choice".
 *
 * The followings are the available columns in table 'jp_mc_item_choice':
 * @property integer $id
 * @property integer $mc_item_id
 * @property integer $correct
 * @property integer $original_position
 * @property integer $keep_position
 * @property string $choice
 *
 * The followings are the available model relations:
 * @property McItem $mcItem
 */
class MCItemChoice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jp_mc_item_choice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mc_item_id, correct, original_position', 'required'),
			array('mc_item_id, correct, original_position, keep_position', 'numerical', 'integerOnly'=>true),
			array('choice', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mc_item_id, correct, original_position, keep_position, choice', 'safe', 'on'=>'search'),
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
			'mcItem' => array(self::BELONGS_TO, 'McItem', 'mc_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mc_item_id' => 'Mc Item',
			'correct' => 'Correct',
			'original_position' => 'Original Position',
			'keep_position' => 'Keep Position',
			'choice' => 'Choice',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('mc_item_id',$this->mc_item_id);
		$criteria->compare('correct',$this->correct);
		$criteria->compare('original_position',$this->original_position);
		$criteria->compare('keep_position',$this->keep_position);
		$criteria->compare('choice',$this->choice,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MCItemChoice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
