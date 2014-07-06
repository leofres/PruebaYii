<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->Matricula=>array('view','id'=>$model->Matricula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'View Alumnos', 'url'=>array('view', 'id'=>$model->Matricula)),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Update Alumnos <?php echo $model->Matricula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>