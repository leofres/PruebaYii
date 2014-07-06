<?php
/* @var $this AlumnosController */
/* @var $data Alumnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Matricula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Matricula), array('view', 'id'=>$data->Matricula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoMaterno); ?>
	<br />


</div>