<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    // método para mostrar la página principal de los cursos
    public function index() {
        return view('cursos.index');
    }
    
    // método para mostrar el formulario para crear un nuevo curso
    public function create() {
        return view('cursos.create');
    }
    
    // método para mostrar la información de un curso en específico
    public function show($curso) {
        return view('cursos.show', compact('curso'));
    }
}