<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HolaMundo extends Controller {
    public function index() {
        $data['mensaje_p'] = 'Hola desde una variable en CodeIgniter';
        return view('hola_mundo/index', $data);
    }
}