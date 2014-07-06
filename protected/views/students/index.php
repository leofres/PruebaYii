<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<p>Mensaje desde parrafo</p>
<p><?= $mensaje?></p>
<table>
<? foreach($alumnos as $alumno):?>
            <tr>
        <? foreach($alumno as $celda):?>
    <td> <?=$celda?> </td>
        <? endforeach;?>
    </tr>
<? endforeach; ?>
</table>
