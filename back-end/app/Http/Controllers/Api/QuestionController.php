<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        return Question::paginate(10);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = Question::create([
            'libelle' => $request->get('libelle'),
            'type_question' => $request->get('type_question'),
            'ordre' => $request->get('ordre'),
        ]);

        return $request->json($data);
    }


    public function show($id)
    {
        $item = Question::find($id);
        return !empty($item) ? $item : array('message' => 'Aucune donnée trouvé');
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $item = Question::find($id);
        $item->update([
            'libelle' => $request->get('libelle'),
            'type_question' => $request->get('type_question'),
            'ordre' => $request->get('ordre'),
        ]);
        return $request->json($item);
    }


    public function destroy($id)
    {
        //
    }
}
