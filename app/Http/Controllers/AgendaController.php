<?php

namespace App\Http\Controllers;
use App\Agenda;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AgendaController extends BaseController
{
    public function show($id = null) {
        return empty($id)
            ? response()->json(Agenda::all())
            : response()->json(Agenda::find($id));
    }

    public function add(Request $req) {
        $newAgenda = Agenda::create($req->all());
        return $newAgenda;
    }

    public function edit($id, Request $req) {
        $agenda = Agenda::findOrFail($id);
        $agenda->update($req->all());
        return response()->json($agenda, 200);
    }

    public function delete($id) {
        Agenda::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
