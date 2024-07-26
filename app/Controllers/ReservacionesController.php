<?php

namespace App\Controllers;

use App\Models\ReservacionesModel;


class ReservacionesController extends BaseController
{
    public function index(): string
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->findAll();
        return view('reservaciones', $datos);
    }

    public function agregarReservacion()
    {
        $reservaciones = new ReservacionesModel();
        $datos = [

            'reservacion_id' => $this->request->getVar('txtReservacionId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];

        if ($reservaciones->insert($datos)) {
            return redirect()->to('ver_reservaciones')->with('exito', 'Reservación agregada correctamente');
        } else {
            // Manejar error de inserción
            return redirect()->to('ver_reservaciones')->with('exito', 'Reservación agregada correctamente');
        }
    }

    public function eliminarReservacion($id = null)
    {
        $reservaciones = new ReservacionesModel();
        $reservaciones->delete(['reservacion_id' => $id]);
    
        return redirect()->route('ver_reservaciones');
    }
}
