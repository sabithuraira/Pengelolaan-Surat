<?php

/**
 * This is the model class for table "surat_keluar".
 *
 * The followings are the available columns in table 'surat_keluar':
 * @property integer $id
 * @property string $nomor_surat
 * @property string $tanggal_surat_keluar
 * @property string $perihal_surat
 * @property string $tujuan_surat
 * @property string $file_surat
 * @property string $keterangan
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_time
 * @property string $updated_time
 */
class SuratKeluar extends HelpAr
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'surat_keluar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor_surat, tanggal_surat_keluar, perihal_surat, tujuan_surat, created_by, updated_by, created_time, updated_time', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('file_surat', 'file', 'types'=>'jpg, gif, png, pdf, doc, docx,xls,xlsx'),
			array('nomor_surat, file_surat', 'length', 'max'=>255),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nomor_surat, tanggal_surat_keluar, perihal_surat, tujuan_surat, file_surat, keterangan, created_by, updated_by, created_time, updated_time', 'safe', 'on'=>'search'),
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
			'nomor_surat' => 'Nomor Surat',
			'tanggal_surat_keluar' => 'Tanggal Surat Keluar',
			'perihal_surat' => 'Perihal Surat',
			'tujuan_surat' => 'Tujuan Surat',
			'file_surat' => 'File Surat',
			'keterangan' => 'Keterangan',
			'created_by' => 'Created By',
			'updated_by' => 'Updated By',
			'created_time' => 'Dibuat pada',
			'updated_time' => 'Terakhir diperbaharui pada',
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
		$criteria->compare('nomor_surat',$this->nomor_surat,true);
		$criteria->compare('tanggal_surat_keluar',$this->tanggal_surat_keluar,true);
		$criteria->compare('perihal_surat',$this->perihal_surat,true);
		$criteria->compare('tujuan_surat',$this->tujuan_surat,true);
		$criteria->compare('file_surat',$this->file_surat,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('created_time',$this->created_time,true);
		$criteria->compare('updated_time',$this->updated_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SuratKeluar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
