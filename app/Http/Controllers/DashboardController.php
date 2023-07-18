<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembroModel;
use App\Models\SancaoModel;
use App\Models\ParoquiaModel;
use App\Models\OfertaModel;
use App\Models\DizimoModel;
use Auth;
use DB;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = 'Dashboard';
        $data['getMembro'] = MembroModel::all()->count();
        $data['getSancao'] = SancaoModel::all()->count();
        $data['getParoquia'] = ParoquiaModel::all()->count();
      
        $ofertas = OfertaModel::orderBy('data')->get(); // Recupera as ofertas ordenadas por data
    
        $valoresOfertas = $ofertas->pluck('valor'); // Array dos valores das ofertas
        $datasOfertas = $ofertas->pluck('data'); // Array das datas das ofertas

        $dizimos = DizimoModel::orderBy('data')->get(); // Recupera as dizimos ordenadas por data
    
        $valoresDizimos = $dizimos->pluck('valor'); // Array dos valores das dizimos
        $datasDizimos = $dizimos->pluck('data'); // Array das datas das dizimos

        

        if (Auth::user()->user_type == 1) {
            return view('admin.dashboard', $data)->with('valoresOfertas', $valoresOfertas)->with('datasOfertas', $datasOfertas)->with('valoresDizimos', $valoresDizimos)->with('datasDizimos', $datasDizimos);
        } else if (Auth::user()->user_type == 2) {
            return view('secretario.dashboard', $data);
        } else if (Auth::user()->user_type == 3) {
            return view('tesoureiro.dashboard', $data);
        }
    }
    public function graficoOfertasPorData()
    {
        
       
    }
}
