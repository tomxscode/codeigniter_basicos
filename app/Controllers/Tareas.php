<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Tareas extends Controller {
    public function index() {
        return view('tareas/index');
    }
}