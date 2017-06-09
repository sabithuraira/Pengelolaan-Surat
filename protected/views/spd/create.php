<?php
/* @var $this SpdController */
/* @var $model DataSpd */

$this->breadcrumbs=array(
	'Data SPD'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Data SPD', 'url'=>array('index')),
);
?>

<h1>Create Data SPD</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>