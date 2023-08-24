<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Tareas extends Controller {
    public function index() {
        return view('tareas/index');
    }

    public function obtenerTarea() {
        $tarea = $this->request->getPost('tarea-input');
        
        header('Content-Type: application/json');
        echo json_encode(array('tarea' => $tarea));
    }
}