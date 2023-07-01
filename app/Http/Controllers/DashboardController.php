<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembroModel;
use App\Models\SancaoModel;
use App\Models\ParoquiaModel;
use App\Models\OfertaModel;
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
        $data['grafico'] = OfertaModel::getGrafico();

        if (Auth::user()->user_type == 1) {
            return view('admin.dashboard', $data);
        } else if (Auth::user()->user_type == 2) {
            return view('secretario.dashboard', $data);
        } else if (Auth::user()->user_type == 3) {
            return view('tesoureiro.dashboard', $data);
        }
    }
}
