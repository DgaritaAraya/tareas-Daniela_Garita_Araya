<?php

require_once '../src/models/usuarios.php';

class usuarios_controller{

    public function ObtenerTodos(){
        $modelousuario = new usuarios();
        echo json_encode(value: ["Resultado" =>   $modelousuario->getAll()]);
    }

    /**
     * 
     * @param int 
     *
     * @return void
     */
    public function ObtenerPorId($id){
        $modelousuario = new usuarios();
        echo json_encode(value: ["Resultado" =>   $modelousuario->getById($id)]);
    }
}

?>