<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ToGo;

class ToGoController extends Controller
{
    public function index()
    {
        return ToGo::all();
    }
 
    public function show($id)
    {
        return ToGo::find($id);
    }

    public function store(Request $request)
    {
        return ToGo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $togo = ToGo::findOrFail($id);
        $togo->update($request->all());

        return $togo;
    }

    public function delete(Request $request, $id)
    {
        $togo = ToGo::findOrFail($id);
        $togo->delete();

        return 204;
    }
}
