<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kategorija;
use App\Preke;
use Illuminate\Support\Facades\DB;

class anketaController extends Controller
{
    public function index(){
        $allcategories=Kategorija::all();
        $items = Preke::all();
        $cate='null';

        $kr=session('krepselis');
//        dd($kr);

        if(session()->has('krepselis')) {
            $result = DB::table('krepselis')->where('krepselis.id_krepselis', '=', $kr)->leftJoin('preke_krepselis', 'id_krepselis', '=', 'preke_krepselis.fk_krepselis')
                ->leftJoin('preke', 'preke_krepselis.fk_preke', '=', 'id_preke')
                ->select('preke_krepselis.*', 'preke.kaina', 'preke.pavadinimas', 'preke.aprasymas', DB::raw('krepselis.kaina as kr_kaina'))->get();

        }

        return view('anketa', compact('allcategories','result', 'kr'));
    }
}
