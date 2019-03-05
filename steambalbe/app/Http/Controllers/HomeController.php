<?php

namespace App\Http\Controllers;

use App\Games;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index')->with('arrayJuegos',Games::all());
    }
    
    public function search($search){
        $search = urldecode($search);
        $juegos = Games::select()
                ->where('name','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->get();
        
        if (count($juegos) == 0){
            return View('searchForm.search')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else{
            return View('searchForm.search')
            ->with('juegos', $juegos)
            ->with('search', $search);
        }
    }
}
