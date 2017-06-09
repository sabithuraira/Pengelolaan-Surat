<?php
/* @var $this SpdController */
/* @var $model DataSpd */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-spd-form',
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
		<?php echo $form->labelEx($model,'nomor_spd'); ?>
		<?php echo $form->textField($model,'nomor_spd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nomor_spd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textArea($model,'nama',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan'); ?>
		<?php echo $form->textArea($model,'jabatan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'jabatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berangkat_dari'); ?>
		<?php echo $form->textArea($model,'berangkat_dari',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'berangkat_dari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->textArea($model,'tujuan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lama'); ?>
		<?php echo $form->textField($model,'lama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_berangkat'); ?>
		<?php //echo $form->textField($model,'tgl_berangkat'); ?><?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            	'model'	=>$model,
                'attribute'	=>'tgl_berangkat',
                'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                ),
            ));
		?>
		<?php echo $form->error($model,'tgl_berangkat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_kembali'); ?>
		<?php //echo $form->textField($model,'tgl_kembali'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            	'model'	=>$model,
                'attribute'	=>'tgl_kembali',
                'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeYear'=>true,
                    'changeMonth'=>true,
                ),
            ));
		?>
		<?php echo $form->error($model,'tgl_kembali'); ?>
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