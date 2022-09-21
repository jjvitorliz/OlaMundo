<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() {
        $data["titulo"] = "Minha Página de Contato dinâmica.";
        return view("contato", $data);
    }
}
