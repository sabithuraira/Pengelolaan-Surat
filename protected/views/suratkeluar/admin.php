<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluar'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Daftar Surat Keluar', 'url'=>array('index')),
	array('label'=>'Tambah Surat Keluar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#surat-keluar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Surat Keluar</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'surat-keluar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'nomor_surat',
		'tanggal_surat_keluar',
		'perihal_surat',
		'tujuan_surat',
		//'file_surat',
		array(
			'name'	=>'file_surat',
			'type'	=>'raw',
			'value'	=>'CHtml::link("Download File",Yii::app()->baseUrl."/file/out/".$data->file_surat)'
		),
		'keterangan',
		/*
		'created_by',
		'updated_by',
		'created_time',
		'updated_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
