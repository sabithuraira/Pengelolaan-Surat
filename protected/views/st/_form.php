<?php
/* @var $this StController */
/* @var $model DataSt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-st-form',
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
		<?php echo $form->labelEx($model,'nomor_st'); ?>
		<?php echo $form->textField($model,'nomor_st',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nomor_st'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dasar_st'); ?>
		<?php echo $form->textArea($model,'dasar_st',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dasar_st'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->textArea($model,'tujuan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lama'); ?>
		<?php echo $form->textArea($model,'lama',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_tugas'); ?>
		<?php //echo $form->textField($model,'tgl_tugas'); ?><?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            	'model'	=>$model,
                'attribute'	=>'tgl_tugas',
                'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                ),
            ));
		?>
		<?php echo $form->error($model,'tgl_tugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_petugas'); ?>
		<?php echo $form->textField($model,'nama_petugas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_petugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jabatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tt'); ?>
		<?php echo $form->textField($model,'tt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upload_file'); ?>
		<?php echo $form->fileField($model,'upload_file',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'upload_file'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->