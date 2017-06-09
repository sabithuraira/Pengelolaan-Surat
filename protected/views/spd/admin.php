<?php
/* @var $this SpdController */
/* @var $model DataSpd */

$this->breadcrumbs=array(
	'Data SPD'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Data SPD', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-spd-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Data SPD</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-spd-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'nomor_spd',
		'nama',
		'jabatan',
		'berangkat_dari',
		'tujuan',
		'lama',
		array(
			'name'	=>'tgl_berangkat',
			'type'	=>'raw',
			'value'	=>'date("d M Y",strtotime($data->tgl_berangkat))'
		),
		array(
			'name'	=>'tgl_kembali',
			'type'	=>'raw',
			'value'	=>'date("d M Y",strtotime($data->tgl_kembali))'
		),
		array(
			'name'	=>'upload_file',
			'type'	=>'raw',
			'value'	=>'CHtml::link("Download File",Yii::app()->baseUrl."/file/spd/".$data->upload_file)'
		),
		/*
		'upload_file',
		'created_by',
		'created_time',
		'updated_by',
		'updated_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
