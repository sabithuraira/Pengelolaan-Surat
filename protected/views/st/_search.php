<?php
/* @var $this StController */
/* @var $model DataSt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nomor_st'); ?>
		<?php echo $form->textField($model,'nomor_st',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dasar_st'); ?>
		<?php echo $form->textArea($model,'dasar_st',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tujuan'); ?>
		<?php echo $form->textArea($model,'tujuan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lama'); ?>
		<?php echo $form->textArea($model,'lama',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_tugas'); ?>
		<?php //echo $form->textField($model,'tgl_tugas'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_petugas'); ?>
		<?php echo $form->textField($model,'nama_petugas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tt'); ?>
		<?php echo $form->textField($model,'tt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->