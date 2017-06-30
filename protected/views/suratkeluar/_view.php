<?php
/* @var $this SuratkeluarController */
/* @var $data SuratKeluar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_surat')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_surat_keluar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_surat_keluar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perihal_surat')); ?>:</b>
	<?php echo CHtml::encode($data->perihal_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan_surat')); ?>:</b>
	<?php echo CHtml::encode($data->tujuan_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_surat')); ?>:</b>
	<?php echo CHtml::encode($data->file_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_time')); ?>:</b>
	<?php echo CHtml::encode($data->created_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_time')); ?>:</b>
	<?php echo CHtml::encode($data->updated_time); ?>
	<br />

	*/ ?>

</div>