<?php

namespace App\Controllers;
use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->findAll();
        return view('hoteles', $datos);
    }

    public function agregarHotel(){

        $hoteles = new HotelesModel();
        $datos=[

            'hotel_id'=>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudadId'),
            'categoria_id'=>$this->request->getVar('txtCategoriaId'),
            'usuario_id'=>$this->request->getVar('txtUsuarioId')
        ];

        if ($hoteles->insert($datos)) {
            // Agregar parámetro para mensaje de éxito
            return redirect()->to('ver_hoteles')->with('exito', 'Hotel agregado correctamente');
        } else {
            // Manejar error de inserción (opcional)
            return redirect()->to('ver_hoteles')->with('error', 'No se pudo agregar el hotel, intentelo de nuevo');
        } 

    }
    
    public function eliminarHotel($id=null){
        echo $id;
        $hoteles = new HotelesModel();
        $hoteles->delete(['hotel_id'=>$id]);
        return redirect()->route('ver_hoteles');

    }



    public function buscarHotel($id=null){ 

       
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->where('hotel_id', $id)->first();
        return view('form_modificar_hoteles', $datos);
    }
    
    public function modificarHotel(){
        
        $datos=[
            'hotel_id'=>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudad'),
            'categoria_id'=>$this->request->getVar('txtCategoria'),
            'usuario_id'=>$this->request->getVar('txtUsuario')
        ];

        $hoteles = new HotelesModel();
        $hoteles->update($datos['hotel_id'], $datos);
        return redirect()->route('ver_hoteles');
    }
}
