<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentsController
 *
 * @author Eric
 */
class StudentsController extends Controller{
    public function actionIndex(){
        $alumnos = CActiveRecord::model('Alumnos')->findAll();
        $this->render('index', array('mensaje' => 'Hola mundo', 'alumnos' => $alumnos));
    }
}
