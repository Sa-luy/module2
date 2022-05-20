<?php
session_start();
if (isset($_REQUEST['controller'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
}
// var_dump($controller);
// die();
switch ($controller) {
    case 'population':
        include './Controller/PopulationsController.php';
        $obj = new PopulationController();
        break;

    default:
        # code...
        break;
}
switch ($action) {
    case 'index':
        $obj->index();
        break;
        case 'indexlimit':
            $obj->indexlimit();
            break;
    case 'show':
        $obj->show();
        break;
    case 'add':
        $obj->create();
        break;
    case 'delete':
        $obj->delete();
        break;
    case 'edit':
        $obj->edit();
        break;
    case 'search':
        $obj->search();
        break;

    default:
        # code...
        break;
}