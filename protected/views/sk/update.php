<?php
/* @var $this SkController */
/* @var $model DataSk */

$this->breadcrumbs=array(
	'Data SK'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataSk', 'url'=>array('index')),
	array('label'=>'Create DataSk', 'url'=>array('create')),
	array('label'=>'View DataSk', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Data SK <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>