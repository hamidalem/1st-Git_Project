<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fonction;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Http\Request;
use App\Exports\ClientsExport;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{


public function index()
{

    //$listclient = Client::all();
   // $fonctions=Fonction::all();
   $listclient = Client::with('fonction')->get();


    return view('clients.index', ["listclient"=>$listclient]);
}

    public function create(){
        $fonctions=Fonction::all();


        return view('clients.create',["fonctions"=>$fonctions]);
    }

    public function store(){

        $validateData = request()->validate([
            'FirstName' =>'required',
            'LastName' =>'required',
            'age'=>'required',
            'gender'=>'required',
            'idf' =>'required'

        ]);

        Client::create($validateData);
        return redirect()->route('clients.index');
    }


    public function edit($idclient){
        $fonctions=Fonction::all();
            $client = Client::findOrFail($idclient);

        return view('clients.edit',["client"=>$client,"fonctions"=>$fonctions]);
    }


    public function update(Request $request,$idclient){
        $client = Client::find($idclient);
        $validateData = request()->validate([
            'FirstName' =>'required',
            'LastName' =>'required',
            'age'=>'required',
            'gender'=>'required',
            'idf' =>'required'

        ]);
        $client->update($validateData);
        return redirect()->route('clients.index');

    }



    public function destroy($idclient){

         $client = Client::findOrFail($idclient);
         $client->delete();
         return redirect()->route('clients.index');
    }

    public function export()
    {
        return Excel::download(new ClientsExport, 'clients.xlsx');
    }

}
