<?php
/* @var $this SuratmasukController */
/* @var $data SuratMasuk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_surat')); ?>:</b>
	<?php echo CHtml::encode($data->kode_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_terima')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_terima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_surat')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perihal_surat')); ?>:</b>
	<?php echo CHtml::encode($data->perihal_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_surat_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_surat_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asal_surat')); ?>:</b>
	<?php echo CHtml::encode($data->asal_surat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('file_surat')); ?>:</b>
	<?php echo CHtml::encode($data->file_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket')); ?>:</b>
	<?php echo CHtml::encode($data->ket); ?>
	<br />

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