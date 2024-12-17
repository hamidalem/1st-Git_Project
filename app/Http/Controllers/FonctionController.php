<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fonction;
use App\Exports\FonctionsExport;
use Maatwebsite\Excel\Facades\Excel;

class FonctionController extends Controller
{
    public function index()
{

    $listfonction = Fonction::all();

  // $listfonction = Fonction::with('fonction')->get();


    return view('fonctions.index', ["listfonction"=>$listfonction]);
}

public function create(){
    $listfonction=Fonction::all();


    return view('fonctions.create',["listfonction"=>$listfonction]);
}


public function store(){

    $validateData = request()->validate([

        'Fonction' =>'required',

    ]);
    Fonction::create($validateData);
    return redirect()->route('fonctions.index');
}


public function edit($idfonction){
    $listfonction=Fonction::all();
        $fonction = Fonction::findOrFail($idfonction);

    return view('fonctions.edit',["fonction"=>$fonction,"listfonction"=>$listfonction]);
}


public function update(Request $request,$idfonction){
    $fonction = Fonction::find($idfonction);
    $validateData = request()->validate([

        'Fonction' =>'required',

    ]);
    $fonction->update($validateData);
    return redirect()->route('fonctions.index');

}

public function destroy($idfonction){

    $fonction = Fonction::findOrFail($idfonction);
    $fonction->delete();
    return redirect()->route('fonctions.index');
}

public function export()
{
    return Excel::download(new FonctionsExport, 'fonctions.xlsx');
}



}
