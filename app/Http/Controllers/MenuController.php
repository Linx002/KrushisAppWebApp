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

    /*
     /+/+/+/+/+/+/+/+/+/+/+/+
     STORE
     /+/+/+/+/+/+/+/+/+/+/+/+
     */
    public function store(Request $request)
    {
        request()->validate(Menu::$rules);

        $menu = new menu;

        $fileNameWithExt = $request->file('platilloImagen')->getClientOriginalName();

        //tomar solo el nombre del archivo
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        $fileName = strtok($fileName, " ");
        //tomar extension
        $extension = $request->file('platilloImagen')->getClientOriginalExtension();

        //Nombre del archivo con extension, nombre unico para la base de datos
        $finalFileName = $fileName . '_' . time() . '.' . $extension;
        $path = $request->file('platilloImagen')->storeAs('photos/img', $finalFileName);

        $menu->platilloTitulo = $request->input('platilloTitulo');
        $menu->platilloDescripcion = $request->input('platilloDescripcion');
        $menu->platilloPrecio = $request->input('platilloPrecio');
        if ($request->input('platilloOferta') == "" || $request->input('platilloOferta') == "0") {
            $menu->platilloOferta = "0";
        } else {
            $menu->platilloOferta = $request->input('platilloOferta');
        }

        // $menu->platilloStatus = $request->boolean('platilloStatus');
        if ($request->input('platilloStatus') == "true" || $request->input('platilloStatus') == "1" || $request->input('platilloStatus') == TRUE) {
            $menu->platilloStatus = "1";
        } else {
            $menu->platilloStatus = "0";
        }

        //$menu->platilloTipo = $request->input('platilloTipo');
        if ($request->input('platilloTipo') == "0") {
            //"Appetizers", "Main Dishes", "Desserts", "Drinks","Sides"
            $menu->platilloTipo = "Appetizers";
        } elseif ($request->input('platilloTipo') == "1") {
            $menu->platilloTipo = "Main Dishes";
        } elseif ($request->input('platilloTipo') == "2") {
            $menu->platilloTipo = "Desserts";
        } elseif ($request->input('platilloTipo') == "3") {
            $menu->platilloTipo = "Drinks";
        } elseif ($request->input('platilloTipo') == "4") {
            $menu->platilloTipo = "Sides";
        }

        $menu->platilloImagen = $finalFileName;

        /*
        $menu = Menu::create($request->all());
        */

        $menu->save();

        return redirect()->route('menu.index')
            ->with('success', 'Dish added succesfully.');
    }
    /*
     /+/+/+/+/+/+/+/+/+/+/+/+
     STORE
     /+/+/+/+/+/+/+/+/+/+/+/+
     */
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

    /*
     *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
     UPDATE
     *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
     */
    public function update(Request $request, Menu $menu)
    {
        request()->validate(Menu::$rules);

        $menu = new menu;

        if ($request->hasFile('platilloImagen') == null) {
            $finalFileName = $menu->platilloImagen;
        } else {
            $fileNameWithExt = $request->file('platilloImagen')->getClientOriginalName();

            //tomar solo el nombre del archivo
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $fileName = strtok($fileName, " ");
            //tomar extension
            $extension = $request->file('platilloImagen')->getClientOriginalExtension();

            //Nombre del archivo con extension, nombre unico para la base de datos
            $finalFileName = $fileName . '_' . time() . '.' . $extension;
        }
        $path = $request->file('platilloImagen')->storeAs('public/photos/img/', $finalFileName);

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
        //$menu->platilloTipo = $request->input('platilloTipo');
        switch ($menu->platilloTipo) {
                //"Appetizers", "Main Dishes", "Desserts", "Drinks","Sides"
            case "0":
                $menu->platilloTipo = "Appetizers";
                break;
            case "1":
                $menu->platilloTipo = "Main Dishes";
                break;
            case "2":
                $menu->platilloTipo = "Desserts";
                break;
            case "3":
                $menu->platilloTipo = "Drinks";
                break;
            case "4":
                $menu->platilloTipo = "Sides";
                break;
        }

        //$menu->update($request->all());

        return redirect()->route('menu.index')
            ->with('success', 'Dish updated successfully');
    }
    /*
     *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
     UPDATE
     *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-
     */

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
