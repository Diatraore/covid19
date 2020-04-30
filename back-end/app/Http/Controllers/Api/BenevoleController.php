<?php

namespace App\Http\Controllers\Api;

use App\Benevole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BenevoleController extends Controller
{

    public function index(Request $request)
    {
        return Benevole::paginate(10);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

      $data = Benevole::create([
           'nom' => $request->get('nom'),
           'prenom' => $request->get('prenom'),
           'ville' => $request->get('ville'),
           'telephone' => $request->get('telephone'),
           'civilite' => $request->get('civilite'),
           'date_naissance' => $request->get('date_naissance'),
           'fonction' => $request->get('fonction'),
       ]);

       return $request->json($data);
    }


    public function show($id)
    {
        $item = Benevole::find($id);
        return !empty($item) ? $item : array('message' => 'Aucune donnée trouvé');
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
       $data = Benevole::findOrFail($id);
       $data->update([
           'nom' => $request->get('nom'),
           'prenom' => $request->get('prenom'),
           'ville' => $request->get('ville'),
           'telephone' => $request->get('telephone'),
           'civilite' => $request->get('civilite'),
           'date_naissance' => $request->get('date_naissance'),
           'fonction' => $request->get('fonction'),
       ]);

       return $request->json($data);
    }


    public function destroy($id)
    {
        //
    }
}
