<?php

namespace Model;

class Cita extends ActiveRecord
{
    //Base de atos
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuarioId'];

    public $id;
    public $fecha;
    public $hora;
    public $usurioId;

    public function __construct($args = [])
    {
        $this -> id = $args['id'] ?? null;
        $this -> fecha = $args['fecha'] ?? '';
        $this -> hora = $args['hora'] ?? '';
        $this -> usuarioId = $args['usuarioId'] ?? '';
    }
}