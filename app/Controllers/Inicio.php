<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Inicio extends BaseController
{
    public function index()
    {
        // Creamos un objeto del modelo AlumnosModel
        // El modelo se encarga de trabajar con la base de datos
         $model = new AlumnosModel();
         // Llamamos al método getAlumnos() del modelo
        // Esto normalmente trae los registros de la tabla alumnos
        // y los guardamos en la variable $datos
         $datos = $model->getAlumnos();


        echo view('layout/header');
        
        // Cargamos la vista donde se muestra el listado de alumnos
        // compact('datos') envía la variable $datos a la vista para poder usarla allí
        echo view('alumnos/listado', compact('datos'));
        echo view('layout/footer');
    }

    public function add(){

        if($_POST){
            print_r($_POST);exit;
        }

        echo view('/layout/header');
        echo view('/alumnos/add',);
        echo view('/layout/footer');
    }


}
