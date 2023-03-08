<?php

namespace app\SpaceItfip\Controladores;

class BienesItfipControlador
{

	/**
	 * [obtenerTodos description]
	 * @return [type] [description]
	 */
    public static function obtenerTodos()
    {
        /**
         * [$base_de_datos description]
         * @var [type]
         */
        $base_de_datos = BaseDeDatos::obtener();
        /**
         * [$estamento description]
         * @var [type]
         */
        $estamento = $base_de_datos->query("SELECT * FROM bienes_itfip");
        return $estamento->fetchAll();
    }

}
