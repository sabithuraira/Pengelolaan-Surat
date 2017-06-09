<?php
/* @var $this StController */
/* @var $data DataSt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_st')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_st); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dasar_st')); ?>:</b>
	<?php echo CHtml::encode($data->dasar_st); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan')); ?>:</b>
	<?php echo CHtml::encode($data->tujuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama')); ?>:</b>
	<?php echo CHtml::encode($data->lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_tugas')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_tugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_petugas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tt')); ?>:</b>
	<?php echo CHtml::encode($data->tt); ?>
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