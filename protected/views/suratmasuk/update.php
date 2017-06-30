<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */

$this->breadcrumbs=array(
	'Surat Masuks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SuratMasuk', 'url'=>array('index')),
	array('label'=>'Create SuratMasuk', 'url'=>array('create')),
	array('label'=>'View SuratMasuk', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SuratMasuk', 'url'=>array('admin')),
);
?>

<h1>Update SuratMasuk <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>