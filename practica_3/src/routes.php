<?php

require_once "../src/controllers/usuarios_controller.php";


$method = $_SERVER["REQUEST_METHOD"];

$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], '/') : '';

$segmentos = explode("/", $path);

$queryString = $_SERVER['QUERY_STRING'];

parse_str($queryString, $queryParams);



// Endpoint //


if($path == "usuarios")
{
    $usuarioscontroller = new usuarios_controller();
    switch($method) {
        case  'GET':
                $id = isset($queryParams['id']) ? $queryParams['id'] : null;
                
                if($id != null)
                {
                    $usuarioscontroller->ObtenerPorId($id);
                }
                else
                {
                    $usuarioscontroller->ObtenerTodos();
                }
                break;
            default:
                echo json_encode(["Error" => "Metodo no implementado todavia para usuarios." ]);
    }
    
}

?>
