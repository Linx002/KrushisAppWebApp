<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class MenuController
 * @package App\Http\Controllers
 */
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CarpetaFotos = storage_path('photos');
        $menus = Menu::paginate();

        return view('menu.index', compact('menus'))
            ->with('i', (request()->input('page', 1) - 1) * $menus->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = new Menu();
        return view('menu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('platilloImagen')) {
            $fileNameWithExt = $request->file('platilloImagen')->getClientOriginalName();

            //tomar solo el nombre del archivo
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $fileName = strtok($fileName, " ");
            //tomar extension
            $extension = $request->file('platilloImagen')->getClientOriginalExtension();

            //Nombre del archivo con extension, nombre unico para la base de datos
            $finalFileName = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('platilloImagen')->storeAs('/photos/' . $request->input('id'), $finalFileName);
        } else {
            $CarpetaTemp = storage_path('/photos') . $request->input('id');
            $Logo = storage_path('/photos') . "/KrushisLogo.png";
            Storage::copy($Logo, $CarpetaTemp);
            $finalFileName = "KrushisLogo.png";
        }
        request()->validate(Menu::$rules);

        $menu = new menu;

        $menu->platilloTitulo = $request->input('platilloTitulo');
        $menu->platilloDescripcion = $request->input('platilloDescripcion');
        $menu->platilloPrecio = $request->input('platilloPrecio');
        if ($menu->platilloOferta == "" || $menu->platilloOferta == "0") {
            $menu->platilloOferta = "0";
        } else {
            $menu->platilloOferta = $request->input('platilloOferta');
        }
        if ($menu->platilloStatus == "true") {
            $menu->platilloStatus = "1";
        } else {
            $menu->platilloStatus = "0";
        }
        // $menu->platilloStatus = $request->boolean('platilloStatus');
        $menu->platilloImagen = $finalFileName;

        /*
        $menu = Menu::create($request->all());
        */

        $menu->save();

        return redirect()->route('menu.index')
            ->with('success', 'Dish added succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);

        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);

        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        request()->validate(Menu::$rules);

        if ($request->hasFile('platilloImagen')) {
            $fileNameWithExt = $request->file('platilloImagen')->getClientOriginalName();

            //tomar solo el nombre del archivo
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $fileName = strtok($fileName, " ");
            //tomar extension
            $extension = $request->file('platilloImagen')->getClientOriginalExtension();

            //Nombre del archivo con extension, nombre unico para la base de datos
            $finalFileName = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('platilloImagen')->storeAs('/photos/' . $request->input('id'), $finalFileName);
        }
        request()->validate(Menu::$rules);

        $menu = new menu;

        $menu->platilloTitulo = $request->input('platilloTitulo');
        $menu->platilloDescripcion = $request->input('platilloDescripcion');
        $menu->platilloPrecio = $request->input('platilloPrecio');
        if ($menu->platilloOferta == "" || $menu->platilloOferta == "0") {
            $menu->platilloOferta = "0";
        } else {
            $menu->platilloOferta = $request->input('platilloOferta');
        }
        $menu->platilloStatus = $request->boolean('platilloStatus');
        if ($request->hasFile('platilloImagen')) {
            $menu->platilloImagen = $finalFileName;
        }

        //$menu->update($request->all());

        return redirect()->route('menu.index')
            ->with('success', 'Dish updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $menu = Menu::find($id)->delete();

        return redirect()->route('menu.index')
            ->with('success', 'Dish deleted successfully');
    }
}
