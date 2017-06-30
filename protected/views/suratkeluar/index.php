<?php
/* @var $this SuratkeluarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surat Keluars',
);

$this->menu=array(
	array('label'=>'Create SuratKeluar', 'url'=>array('create')),
	array('label'=>'Manage SuratKeluar', 'url'=>array('admin')),
);
?>

<h1>Surat Keluars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
