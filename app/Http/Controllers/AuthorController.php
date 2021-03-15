<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        return $this->successResponse($this->authorService->obtainAuthors());
    }

    /**
     * Crear autor
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->authorService->createAuthor($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Obtener un autor
     */
    public function show($author)
    {
        return $this->successResponse($this->authorService->obtainAuthor($author));
    }

    /**
     * Actualizar un autor
     */
    public function update(Request $request, $author)
    {
        return $this->successResponse($this->authorService->editAuthor($request->all(),$author));
    }

    /**
     * Eliminar un autor
     */
    public function destroy($author)
    {
        return $this->successResponse($this->authorService->deleteAuthor($author));
    }
}
