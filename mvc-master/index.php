<?php

include_once "includes/autoload.php";
session_start();

$request = $_SERVER['QUERY_STRING'];

switch ($request) {
    case 'bienvenido':
        include_once "App/vistas/bienvenido.php";
        break;
    case 'asignar-curso':
        include_once "App/vistas/cursosAsignar.php";
        break;
    case 'guardar-usuario':
        include_once "App/vistas/uCrear.php";
        break;
    case 'crear-usuario':
        include_once "App/vistas/uCrear.php";
        break;   
    case 'crear-plan':
        include_once "App/vistas/planCrear.php";
        break;
    default:
        include_once "App/vistas/uLogin.php";
        break;
}