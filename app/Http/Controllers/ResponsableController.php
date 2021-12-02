<?php

namespace App\Http\Controllers;

use App\Estado;
use App\ImageManipulator;
use App\Responsable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ResponsableController extends Controller
{
    private $imageStorePath = 'images/responsable';
    private $thumbnailsImageStorePath = 'images/responsable/thumbnails';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $responsables = Responsable::where('id', '!=', Auth::user()->id)->get();

        return view('respon.index', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $estados = Estado::where('tipo', 'Usuario')->get()->pluck('nombre_estado', 'id_estado');

        return view('respon.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:users',
        ]);

        if ($request->file('tmp_file')) {
            $path = Storage::disk('public_uploads')->put($this->imageStorePath, $request->file('tmp_file'));

            $request->request->add(['image' => $path]);
        }

        $password = bcrypt('password');
        $request->request->add(['password' => $password]);

        $responsable = Responsable::create($request->except(['tmp_file', 'files']));
        return redirect()->route('responsable.index')->with('success', "Empresa cargada con éxito. Id de la operación <strong>{$responsable->id_responsable}</strong>");


    }

    /**
     * Display the specified resource.
     *
     * @param Responsable $responsable
     * @return Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Responsable $responsable
     * @return Application|Factory|Response|View
     */
    public function edit(Responsable $responsable)
    {
        $estados = Estado::where('tipo', 'Usuario')->get()->pluck('nombre_estado', 'id_estado');

        return view('respon.edit', compact('responsable', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Responsable $responsable
     * @return RedirectResponse|Response
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
     * @param Responsable $responsable
     * @return Response
     */
    public function destroy(Responsable $responsable)
    {
        //
    }
}
