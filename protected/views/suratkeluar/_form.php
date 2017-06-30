<?php
/* @var $this SuratkeluarController */
/* @var $model SuratKeluar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surat-keluar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_surat'); ?>
		<?php echo $form->textField($model,'nomor_surat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nomor_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_surat_keluar'); ?>
		<?php //echo $form->textField($model,'tanggal_surat_keluar'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            	'model'	=>$model,
                'attribute'	=>'tanggal_surat_keluar',
                'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                ),
            ));
		?>
		<?php echo $form->error($model,'tanggal_surat_keluar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perihal_surat'); ?>
		<?php echo $form->textArea($model,'perihal_surat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perihal_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tujuan_surat'); ?>
		<?php echo $form->textArea($model,'tujuan_surat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tujuan_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_surat'); ?>
		<?php echo $form->fileField($model,'file_surat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->