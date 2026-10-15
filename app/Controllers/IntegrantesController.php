<?php

namespace App\Controllers;
use App\Models\IntegrantesModel;

class IntegrantesController extends BaseController

{
    public function index(): string
    {
        $integrantes = new IntegrantesModel();
        $datos ['datos'] =$integrantes->findall();

        return view('integrantes',$datos);
    }
    public function insertar()
    {
        /*crar un array con los datos del formulario*/
        $datos = [
            'integrante_id' => $this->request->getPost('txt_integrantes'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nacimiento' => $this->request->getPost('txt_nacimiento'),
            'fecha_muerte' => $this->request->getPost('txt_muerte'),
            'web_oficial' => $this->request->getPost('txt_web'),
            'pais_nacimiento' => $this->request->getPost('txt_pais'),
            

        ];
        // crear un objeto 
        $integrantes = new IntegrantesModel();
        // utilizar el objeto para insertar
        $integrantes->insert($datos);
        //llamar al metodo index (realiza la busqueda y carga datos)
         return $this->index();


    }
    public function eliminar($codigo)

    {
        $integrantes = new IntegrantesModel();
        $integrantes->delete($codigo);
        return $this->index();
    }
    public function buscar($codigo)
    {
        $integrantes = new IntegrantesModel();
        $datos['datos']= $integrantes->find($codigo);
        return view ('form_modificar_integrantes',$datos);
    }
    public function modificar()
    {
        $integrantes = new IntegrantesModel();
        //id del registro a modificar
        $codigo=$this->request->getPost('txt_integrantes');
        //recibir datos del formulario
        $datos=[
            

             
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nacimiento' => $this->request->getPost('txt_nacimiento'),
            'fecha_muerte' => $this->request->getPost('txt_muerte'),
            'web_oficial' => $this->request->getPost('txt_web'),
            'pais_nacimiento' => $this->request->getPost('txt_pais'),

        ];
        $integrantes->update($codigo,$datos);
        return $this->index();
        

    }
}
