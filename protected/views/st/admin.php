<?php
/* @var $this StController */
/* @var $model DataSt */

$this->breadcrumbs=array(
	'Data Surat Tugas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Data Surat Tugas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#data-st-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Data Surat Tugas</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-st-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'nomor_st',
		'dasar_st',
		'tujuan',
		'lama',
		array(
			'name'	=>'tgl_tugas',
			'type'	=>'raw',
			'value'	=>'date("d M Y",strtotime($data->tgl_tugas))'
		),
		'nama_petugas',
		'jabatan',
		'tt',
		array(
			'name'	=>'upload_file',
			'type'	=>'raw',
			'value'	=>'CHtml::link("Download File",Yii::app()->baseUrl."/file/st/".$data->upload_file)'
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
