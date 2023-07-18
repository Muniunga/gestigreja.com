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
use Dompdf\Dompdf;


class RelatorioController extends Controller
{
    //
    public function gerarpdf()
    {
        $data['header_title'] = 'Relatorio';
        $data['getAllMembro'] = MembroModel::all()->count();
        $data['getAllSancao'] = SancaoModel::all()->count();
        $data['getAllParoquia'] = ParoquiaModel::all()->count();
        $data['getAllOferta'] = OfertaModel::all()->count();
        $data['getAllDizimo'] = DizimoModel::all()->count();
        $data['getRecord'] = MembroModel::getRecord();
        $data['getParoquia']= ParoquiaModel::getRecord();
        $data['getOferta']= OfertaModel::getRecord();
        $data['getDizimo'] = DizimoModel::getRecord();
        $data['getSancao'] = SancaoModel::getRecord();
       
        // Renderize a view do relatório em uma variável
        $html = view('admin/relatorio/relatorio', $data);

        // Crie uma instância do Dompdf
        $dompdf = new Dompdf();

        // Carregue o HTML no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        // Retorne o PDF como uma resposta para download ou visualização
        return $dompdf->stream('relatorio.pdf');
        
    }
}
