<?php 

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController {

    // ver los datos
    public function index(): string
    {
        $cliente = new ClientesModel();
        $datos['datos'] = $cliente->findAll();
        return view('clientes', $datos);
    }

    public function nuevoCliente() {
        return view('clientes_nuevos');   
    }

    public function agregarCliente(){

        $clientes = new ClientesModel();
        $datos=[

            'cliente_id'=>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'contrasenia'=>$this->request->getVar('txtPassword')
        ];

        if ($clientes->insert($datos)) {
            // Agregar parámetro para mensaje de éxito
            return redirect()->to('ver_clientes')->with('exito', 'Cliente agregado correctamente');
        } else {
            // Manejar error de inserción (opcional)
            return redirect()->to('ver_clientes')->with('error', 'No se pudo agregar al cliente, intentelo de nuevo');
        } 

    }

    
    
}
?>