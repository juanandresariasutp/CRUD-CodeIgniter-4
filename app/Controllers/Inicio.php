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

    public function add()
    {

        echo view('/layout/header');
        echo view('/alumnos/add');
        echo view('/layout/footer');
    }

    public function store()
    {

        $validacion = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);


        if ($_POST && $validacion) {
            //print_r($_POST);exit;
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'telefono' => $_POST['telefono'],
            ];

            $model = new AlumnosModel;
            $model->add($datos);


            session()->setFlashdata('mensaje', 'Registro guardado existosamente');
            return redirect()->to(base_url('inicio'));
        } else {
            $error = $this->validator->listErrors();

            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('inicio/add'));
        }
    }
    public function edit($id)
    {

        $model = new AlumnosModel();
        $dato = $model->getAlumno($id);

        echo view('/layout/header');
        echo view('/alumnos/edit', compact('dato'));
        echo view('/layout/footer');

    }

    public function update()
    {
        $validacion = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);


        if ($validacion) {
            //print_r($_POST);exit;

            $datos = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'telefono' => $_POST['telefono'],
            ];

            $id = $_POST['id'];

            $model = new AlumnosModel;
            $model->updateDatos($id, $datos);


            session()->setFlashdata('mensaje', 'Registro Editado existosamente');
            return redirect()->to(base_url('inicio'));
        } else {
            $error = $this->validator->listErrors();
            $id = $_POST['id'];
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('inicio/edit/'.$id));
        }
    }

    public function delete($id)
    {
        $model = new AlumnosModel();
        $model->delete($id);

        session()->setFlashdata('mensaje', 'Registro Eliminado');
        return redirect()->to(base_url('inicio'));



    }


}
