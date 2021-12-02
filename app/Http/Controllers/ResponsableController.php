<?php

namespace App\Http\Controllers;

use App\Estado;
use App\ImageManipulator;
use App\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ResponsableController extends Controller
{
    private $imageStorePath = 'images/responsable';
    private $thumbnailsImageStorePath = 'images/responsable/thumbnails';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $responsables = Responsable::all();

        return view('respon.index', compact('responsables'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $estados = Estado::where('tipo','Usuario')->get()->pluck('nombre_estado', 'id_estado');

        return view('respon.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($file = $request->file('tmp_file')) {
            $path = Storage::disk('public_uploads')->put($this->imageStorePath, $request->file('tmp_file'));

            $request->request->add(['image' => $path]);
        }
        $password = bcrypt('contrasena');
        $request->request->add(['contrasena' => $password]);

        $responsable = Responsable::create($request->except(['tmp_file', 'files']));
        return redirect()->route('responsable.index')->with('success', "Empresa cargada con éxito. Id de la operación <strong>{$responsable->id_responsable}</strong>");



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Responsable $responsable)
    {
        $estados = Estado::where('tipo','Usuario')->get()->pluck('nombre_estado', 'id_estado');

        return view('respon.edit',compact('responsable','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Responsable $responsable)
    {
        if (!$request->image) {
            $request->request->add(['image' => null]);
//            $request->request->add(['thumbnail_image' => null]);
        }

        if ($file = $request->file('tmp_file')) {
            $path = Storage::disk('public_uploads')->put($this->imageStorePath, $request->file('tmp_file'));
            $request->request->add(['image' => $path]);

        }
        $responsable->update($request->except(['tmp_file', 'files']));

        return redirect()->route('responsable.index')->with('success', "Proyecto actualizado con éxito. Id de la operación <strong>{$responsable->id_responsable}</strong>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsable $responsable)
    {
        //
    }
}
