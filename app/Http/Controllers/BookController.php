<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{

    use ApiResponser;

    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Obtener los autores
     */
    public function index()
    {
    }

    /**
     * Crear autor
     */
    public function store(Request $request)
    {
    }

    /**
     * Obtener un autor
     */
    public function show($Book)
    {
    }

    /**
     * Actualizar un autor
     */
    public function update(Request $request, $Book)
    {
    }

    /**
     * Eliminar un autor
     */
    public function destroy($Book)
    {
    }
}
