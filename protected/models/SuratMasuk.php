<?php

/**
 * This is the model class for table "surat_masuk".
 *
 * The followings are the available columns in table 'surat_masuk':
 * @property integer $id
 * @property string $kode_surat
 * @property string $tgl_terima
 * @property string $nomor_surat
 * @property string $perihal_surat
 * @property string $tgl_surat_masuk
 * @property string $asal_surat
 * @property string $file_surat
 * @property string $ket
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_time
 * @property string $updated_time
 */
class SuratMasuk extends HelpAr
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'surat_masuk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_surat, tgl_terima, nomor_surat, perihal_surat, tgl_surat_masuk, asal_surat, created_by, updated_by, created_time, updated_time', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('file_surat', 'file', 'types'=>'jpg, gif, png, pdf, doc, docx,xls,xlsx'),
			array('kode_surat', 'length', 'max'=>20),
			array('nomor_surat, file_surat', 'length', 'max'=>255),
			array('ket', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_surat, tgl_terima, nomor_surat, perihal_surat, tgl_surat_masuk, asal_surat, file_surat, ket, created_by, updated_by, created_time, updated_time', 'safe', 'on'=>'search'),
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
			'kode_surat' => 'Kode Surat',
			'tgl_terima' => 'Tanggal Terima',
			'nomor_surat' => 'Nomor Surat',
			'perihal_surat' => 'Perihal Surat',
			'tgl_surat_masuk' => 'Tanggal Surat Masuk',
			'asal_surat' => 'Asal Surat',
			'file_surat' => 'File Surat',
			'ket' => 'Keterangan',
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
		$criteria->compare('kode_surat',$this->kode_surat,true);
		$criteria->compare('tgl_terima',$this->tgl_terima,true);
		$criteria->compare('nomor_surat',$this->nomor_surat,true);
		$criteria->compare('perihal_surat',$this->perihal_surat,true);
		$criteria->compare('tgl_surat_masuk',$this->tgl_surat_masuk,true);
		$criteria->compare('asal_surat',$this->asal_surat,true);
		$criteria->compare('file_surat',$this->file_surat,true);
		$criteria->compare('ket',$this->ket,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('created_time',$this->created_time,true);
		$criteria->compare('updated_time',$this->updated_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function KodeSurat(){
		return array(
			'001' => '001 - Pusat',
			'002' => '002 - Provinsi',
			'003' => '003 - Kota',
			'004' => '004 - Kabupaten',
			'005' => '005 - Vertikal/Umum',
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SuratMasuk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
