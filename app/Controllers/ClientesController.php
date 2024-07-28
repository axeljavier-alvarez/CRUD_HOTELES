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

    public function eliminarCliente($id=null){
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id' =>$id]);
        return redirect()->route('ver_clientes');
    }

    public function buscarCliente($id=null){ 
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id', $id)->first();
        return view('form_modificar_cliente', $datos);
    }


    public function modificarCliente(){
        
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

        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'], $datos);
        return redirect()->route('ver_clientes');
    }

    
}
?>