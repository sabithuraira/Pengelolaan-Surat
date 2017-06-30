<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuk'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Surat Masuk', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#surat-masuk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Surat Masuk</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'surat-masuk-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'kode_surat',
		'tgl_terima',
		'nomor_surat',
		'perihal_surat',
		'tgl_surat_masuk',
		//'file_surat',
		array(
			'name'	=>'file_surat',
			'type'	=>'raw',
			'value'	=>'CHtml::link("Download File",Yii::app()->baseUrl."/file/in/".$data->file_surat)'
		),
		/*
		'asal_surat',
		'ket',
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
