<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auxiliares\AuxiliarPessoalModel;
use App\Models\Pessoal\ServidorModel;

class DownloadController extends Controller
{
    public function download($nomeArquivo)
    {
        switch ($nomeArquivo) {
            case 'Plano2014-2017':
                $file_path = public_path('Arquivos/ppa/Plano Plurianual 2014-2017.pdf');
                return response()->download($file_path);
            break;
            case 'Plano2010-2013':
                $file_path = public_path('Arquivos/ppa/Plano Plurianual 2010-2013.pdf');
                return response()->download($file_path);
            break;
            case 'Plano2010a2013':
                $file_path = public_path('Arquivos/ppa/Plano Plurianual 2010 a 2013 - Manual de Elaboração.pdf');
                return response()->download($file_path);
            break;
            case 'ldo2017':
                $file_path = public_path('Arquivos/ldo/LDO 2017.pdf');
                return response()->download($file_path);
            break;
            case 'metodologia2017':
                $file_path = public_path('Arquivos/ldo/Metodologia Ldo 2017.pdf');
                return response()->download($file_path);
            break;
            case 'ldo2016':
                $file_path = public_path('Arquivos/ldo/LDO 2016.pdf');
                return response()->download($file_path);
            break;
            case 'metodologia2016':
                $file_path = public_path('Arquivos/ldo/Metodologia Ldo 2016.pdf');
                return response()->download($file_path);
            break;
            case 'lei2015':
                $file_path = public_path('Arquivos/ldo/Lei 7228 Altera LDO 2015.pdf');
                return response()->download($file_path);
            break;
            case 'metodologia2015':
                $file_path = public_path('Arquivos/ldo/Metodologia LDO 2015.pdf');
                return response()->download($file_path);
            break;
            case 'ldo2015':
                $file_path = public_path('Arquivos/ldo/LDO 2015.pdf');
                return response()->download($file_path);
            break;
            case 'ldo2014':
                $file_path = public_path('Arquivos/ldo/LDO 2014.pdf');
                return response()->download($file_path);
            break;
            case 'ldo2013':
                $file_path = public_path('Arquivos/ldo/LDO 2013.pdf');
                return response()->download($file_path);
            break;
            case 'metodologia2013':
                $file_path = public_path('Arquivos/ldo/Metodologia LDO 2013.pdf');
                return response()->download($file_path);
            break;
        }
    }
}
