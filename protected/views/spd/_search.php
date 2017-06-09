<?php
/* @var $this SpdController */
/* @var $model DataSpd */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nomor_spd'); ?>
		<?php echo $form->textField($model,'nomor_spd',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textArea($model,'nama',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan'); ?>
		<?php echo $form->textArea($model,'jabatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berangkat_dari'); ?>
		<?php echo $form->textArea($model,'berangkat_dari',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tujuan'); ?>
		<?php echo $form->textArea($model,'tujuan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lama'); ?>
		<?php echo $form->textField($model,'lama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_berangkat'); ?>
		<?php //echo $form->textField($model,'tgl_berangkat'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_kembali'); ?>
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
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->