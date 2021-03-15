<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller

{

    use ApiResponser;

    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
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
    public function show($author)
    {
    }

    /**
     * Actualizar un autor
     */
    public function update(Request $request, $author)
    {
    }

    /**
     * Eliminar un autor
     */
    public function destroy($author)
    {
    }
}
