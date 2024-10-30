<?php

namespace App\Controllers;

use App\Models\Album;

class AlbumController
{
    //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $albums = Album::getAll();

        //pasem les pelis a la vista
        return view('albums/index', ['albums' => $albums]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('albums/create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Album::create($data);
        //retornar a la vista principal
        header('location: /albums');
        exit;
    }

    //funcio per a la vista edit
    public function edit($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /albums');
            exit;
        }

        //busquem la peli
        $album = Album::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$album) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('albums/edit', ['album' => $album]);
    }

    public function show($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /albums');
            exit;
        }

        //busquem la peli
        $album = Album::find($id);

        //si no ens passen cap peli mostrar 404
        if (!$album) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        //retornem la vista i li passem la peli indicada
        return view('albums/show', ['album' => $album]);
    }

    //funcio update per a modificar la peli a la base de dades
    public function update($id, $data)
    {
        //modifiquem
        Album::update($id, $data);

        //retonem a la pàgina principal
        header('location: /albums');
        exit;
    }

    //funcio per anar a la vista delete
    public function delete($id)
    {
        //si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /albums');
            exit;
        }

        //busquem la peli
        $album = Album::find($id);
        //retornem la vista en la peli
        return view('albums/delete', ['album' => $album]);

    }

    //funcio per eliminar la peli de la base de dades
    public function destroy($id)
    {
        //utilizem la funcio delete del model
        Album::delete($id);

        //retornar a la vista
        header('location: /albums');
    }


}