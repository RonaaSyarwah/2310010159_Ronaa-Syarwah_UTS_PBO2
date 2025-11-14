<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
        return agenda::all();
    }

    public function store(Request $request) {
        return agenda::create($request->all());
    }

    public function show($id) {
        return agenda::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $agenda = agenda::findOrFail($id);
        $agenda->update($request->all());
        return $agenda;
    }

    public function destroy($id) {
        return agenda::destroy($id);
    }
}