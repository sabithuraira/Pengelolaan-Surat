<?php

/**
 * This is the model class for table "data_spd".
 *
 * The followings are the available columns in table 'data_spd':
 * @property integer $id
 * @property string $nomor_spd
 * @property string $nama
 * @property string $jabatan
 * @property string $berangkat_dari
 * @property string $tujuan
 * @property string $lama
 * @property string $tgl_berangkat
 * @property string $tgl_kembali
 * @property string $upload_file
 * @property integer $created_by
 * @property string $created_time
 * @property integer $updated_by
 * @property string $updated_time
 */
class DataSpd extends HelpAr
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_spd';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor_spd, nama, jabatan, berangkat_dari, tujuan, lama, tgl_berangkat, tgl_kembali, created_by, created_time, updated_by, updated_time', 'required'),
			array('upload_file', 'file', 'types'=>'jpg, gif, png, pdf, doc, docx,xls,xlsx'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('nomor_spd', 'length', 'max'=>45),
			array('lama', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nomor_spd, nama, jabatan, berangkat_dari, tujuan, lama, tgl_berangkat, tgl_kembali, upload_file, created_by, created_time, updated_by, updated_time', 'safe', 'on'=>'search'),
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
			'nomor_spd' => 'Nomor SPD',
			'nama' => 'Nama',
			'jabatan' => 'Jabatan',
			'berangkat_dari' => 'Berangkat Dari',
			'tujuan' => 'Tujuan',
			'lama' => 'Lama',
			'tgl_berangkat' => 'Tanggal Berangkat',
			'tgl_kembali' => 'Tanggal Kembali',
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
		$criteria->compare('nomor_spd',$this->nomor_spd,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('berangkat_dari',$this->berangkat_dari,true);
		$criteria->compare('tujuan',$this->tujuan,true);
		$criteria->compare('lama',$this->lama,true);
		$criteria->compare('tgl_berangkat',$this->tgl_berangkat,true);
		$criteria->compare('tgl_kembali',$this->tgl_kembali,true);
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
	 * @return DataSpd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
