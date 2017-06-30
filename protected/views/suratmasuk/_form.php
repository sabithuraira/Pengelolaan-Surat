<?php
/* @var $this SuratmasukController */
/* @var $model SuratMasuk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surat-masuk-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_surat'); ?>
		<?php echo $form->textField($model,'kode_surat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kode_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_terima'); ?>
		<?php echo $form->textField($model,'tgl_terima'); ?>
		<?php echo $form->error($model,'tgl_terima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_surat'); ?>
		<?php echo $form->textField($model,'nomor_surat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nomor_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perihal_surat'); ?>
		<?php echo $form->textArea($model,'perihal_surat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perihal_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_surat_masuk'); ?>
		<?php echo $form->textField($model,'tgl_surat_masuk'); ?>
		<?php echo $form->error($model,'tgl_surat_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_surat'); ?>
		<?php echo $form->textArea($model,'asal_surat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'asal_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_surat'); ?>
		<?php echo $form->textField($model,'file_surat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket'); ?>
		<?php echo $form->textArea($model,'ket',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_time'); ?>
		<?php echo $form->textField($model,'created_time'); ?>
		<?php echo $form->error($model,'created_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_time'); ?>
		<?php echo $form->textField($model,'updated_time'); ?>
		<?php echo $form->error($model,'updated_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->