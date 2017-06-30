<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */

$this->breadcrumbs=array(
	'Surat Keluars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SuratKeluar', 'url'=>array('index')),
	array('label'=>'Create SuratKeluar', 'url'=>array('create')),
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

<h1>Manage Surat Keluars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
		'id',
		'nomor_surat',
		'tanggal_surat_keluar',
		'perihal_surat',
		'tujuan_surat',
		'file_surat',
		/*
		'keterangan',
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
