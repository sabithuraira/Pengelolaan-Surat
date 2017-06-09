<?php
/* @var $this SkController */
/* @var $data DataSk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sk')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tentang')); ?>:</b>
	<?php echo CHtml::encode($data->tentang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_penetapan')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_penetapan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berlaku')); ?>:</b>
	<?php echo CHtml::encode($data->berlaku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tt')); ?>:</b>
	<?php echo CHtml::encode($data->tt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_file')); ?>:</b>
	<?php echo CHtml::encode($data->upload_file); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_time')); ?>:</b>
	<?php echo CHtml::encode($data->created_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_time')); ?>:</b>
	<?php echo CHtml::encode($data->updated_time); ?>
	<br />

	*/ ?>

</div>