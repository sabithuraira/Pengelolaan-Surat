<?php
/* @var $this SkController */
/* @var $model DataSk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'nomor_sk'); ?>
		<?php echo $form->textField($model,'nomor_sk',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tentang'); ?>
		<?php echo $form->textArea($model,'tentang',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_penetapan'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'berlaku'); ?>
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