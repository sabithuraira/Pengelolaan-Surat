<?php
/* @var $this SpdController */
/* @var $model DataSpd */

$this->breadcrumbs=array(
	'Data SPD'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Data SPD', 'url'=>array('index')),
	array('label'=>'Create Data SPD', 'url'=>array('create')),
	array('label'=>'View Data SPD', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Data SPD', 'url'=>array('admin')),
);
?>

<h1>Update Data SPD <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>