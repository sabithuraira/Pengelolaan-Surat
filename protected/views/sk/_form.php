<?php
/* @var $this SkController */
/* @var $model DataSk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-sk-form',
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
		<?php echo $form->labelEx($model,'nomor_sk'); ?>
		<?php echo $form->textField($model,'nomor_sk',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nomor_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tentang'); ?>
		<?php echo $form->textArea($model,'tentang',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tentang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_penetapan'); ?>
		<?php //echo $form->textField($model,'tgl_penetapan'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            	'model'	=>$model,
                'attribute'	=>'tgl_penetapan',
                'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                ),
            ));
		?>
		<?php echo $form->error($model,'tgl_penetapan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berlaku'); ?>
		<?php //echo $form->textField($model,'berlaku'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            	'model'	=>$model,
                'attribute'	=>'berlaku',
                'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                ),
            ));
		?>
		<?php echo $form->error($model,'berlaku'); ?>
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