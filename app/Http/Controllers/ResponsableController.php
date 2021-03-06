<?php

namespace App\Http\Controllers;

use App\Estado;
use App\ImageManipulator;
use App\Responsable;
use App\Rol;
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
        $responsables = Responsable::where('id', '!=', Auth::user()->id,'and')
            ->where('is_deleted', '0')
            ->get();

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
        $rol = Rol::all()->pluck('tipo', 'id_rol');
        $responsable = null;

        return view('respon.create', compact('estados', 'responsable','rol'));
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
        return redirect()->route('responsable.index')->with('success', "Empresa cargada con ??xito. Id de la operaci??n <strong>{$responsable->id_responsable}</strong>");


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
        $rol = Rol::all()->pluck('tipo', 'id_rol');


        return view('respon.edit', compact('responsable', 'estados','rol'));
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

        return redirect()->route('responsable.index')->with('success', "Usurio actualizado con ??xito. Id de la operaci??n <strong>{$responsable->id_responsable}</strong>");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Responsable $responsable
     * @return RedirectResponse|Response
     */
    public function destroy(Responsable $responsable)
    {
        $responsable->update(['is_deleted' => '1']);

        return redirect()->route('responsable.index')->with('success', "Usuario eliminado con ??xito.");
    }
}
