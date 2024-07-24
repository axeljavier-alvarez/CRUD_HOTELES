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

        $clientes->insert($datos);
        echo "<br>Datos guardados";
        echo "<br><a href='ver_clientes'>Regresar</a>";
    }
}
?>