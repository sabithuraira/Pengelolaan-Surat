<?php
/* @var $this SpdController */
/* @var $data DataSpd */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_spd')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_spd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berangkat_dari')); ?>:</b>
	<?php echo CHtml::encode($data->berangkat_dari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan')); ?>:</b>
	<?php echo CHtml::encode($data->tujuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama')); ?>:</b>
	<?php echo CHtml::encode($data->lama); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_berangkat')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_berangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_kembali')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_kembali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_file')); ?>:</b>
	<?php echo CHtml::encode($data->upload_file); ?>
	<br />

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