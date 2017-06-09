<?php

/**
 * This is the model class for table "data_sk".
 *
 * The followings are the available columns in table 'data_sk':
 * @property integer $id
 * @property string $nomor_sk
 * @property string $tentang
 * @property string $tgl_penetapan
 * @property string $berlaku
 * @property string $tt
 * @property string $upload_file
 * @property integer $created_by
 * @property string $created_time
 * @property integer $updated_by
 * @property string $updated_time
 */
class DataSk extends HelpAr
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_sk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor_sk, tentang, tgl_penetapan, berlaku, tt, created_by, created_time, updated_by, updated_time', 'required'),
			array('upload_file', 'file', 'types'=>'jpg, gif, png, pdf, doc, docx,xls,xlsx'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('nomor_sk', 'length', 'max'=>45),
			array('tt', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nomor_sk, tentang, tgl_penetapan, berlaku, tt, created_by, created_time, updated_by, updated_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nomor_sk' => 'Nomor SK',
			'tentang' => 'Tentang',
			'tgl_penetapan' => 'Tanggal Penetapan',
			'berlaku' => 'Berlaku',
			'tt' => 'Tanda Tangan',
			'upload_file' => 'Upload File',
			'created_by' => 'Created By',
			'created_time' => 'Created Time',
			'updated_by' => 'Updated By',
			'updated_time' => 'Updated Time',
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
		$criteria->compare('nomor_sk',$this->nomor_sk,true);
		$criteria->compare('tentang',$this->tentang,true);
		$criteria->compare('tgl_penetapan',$this->tgl_penetapan,true);
		$criteria->compare('berlaku',$this->berlaku,true);
		$criteria->compare('tt',$this->tt,true);
		$criteria->compare('upload_file',$this->upload_file,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_time',$this->created_time,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_time',$this->updated_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataSk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
