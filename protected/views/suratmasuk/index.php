<?php
/* @var $this SuratmasukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surat Masuks',
);

$this->menu=array(
	array('label'=>'Create SuratMasuk', 'url'=>array('create')),
	array('label'=>'Manage SuratMasuk', 'url'=>array('admin')),
);
?>

<h1>Surat Masuks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
