<?php
/* @var $this SkController */
/* @var $model DataSk */

$this->breadcrumbs=array(
	'Data SK'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Data SK', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-sk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Data SK</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-sk-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		'nomor_sk',
		'tentang',
		array(
			'name'	=>'tgl_penetapan',
			'type'	=>'raw',
			'value'	=>'date("d M Y",strtotime($data->tgl_penetapan))'
		),
		array(
			'name'	=>'berlaku',
			'type'	=>'raw',
			'value'	=>'date("d M Y",strtotime($data->berlaku))'
		),
		'tt',
		array(
			'name'	=>'upload_file',
			'type'	=>'raw',
			'value'	=>'CHtml::link("Download File",Yii::app()->baseUrl."/file/sk/".$data->upload_file)'
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
