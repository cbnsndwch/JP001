<?php

/**
 * This is the model class for table "jp_mc_item".
 *
 * The followings are the available columns in table 'jp_mc_item':
 * @property integer $id
 * @property string $author
 * @property string $creation_date
 * @property string $edit_date
 * @property string $publication_date
 * @property integer $listed
 * @property string $stem
 *
 * The followings are the available model relations:
 * @property McChoice[] $mcChoices
 * @property User $author0
 */
class MCItem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jp_mc_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('author, creation_date, edit_date', 'required'),
			array('listed', 'numerical', 'integerOnly'=>true),
			array('publication_date, stem', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, author, creation_date, edit_date, publication_date, listed, stem', 'safe', 'on'=>'search'),
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
			'mcChoices' => array(self::HAS_MANY, 'McChoice', 'mc_item_id'),
			'author0' => array(self::BELONGS_TO, 'User', 'author'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'author' => 'Author',
			'creation_date' => 'Creation Date',
			'edit_date' => 'Edit Date',
			'publication_date' => 'Publication Date',
			'listed' => 'Listed',
			'stem' => 'Stem',
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
		$criteria->compare('author',$this->author,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('edit_date',$this->edit_date,true);
		$criteria->compare('publication_date',$this->publication_date,true);
		$criteria->compare('listed',$this->listed);
		$criteria->compare('stem',$this->stem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MCItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
