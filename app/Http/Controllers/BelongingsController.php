<?php

namespace App\Http\Controllers;

use App\Belonging;
use App\Category;
use App\Type;
use App\Dependence;
use Illuminate\Http\Request;

class BelongingsController extends Controller
{
    public function index()
    {
        return view('bienes.index');
    }

    public function all()
    {
        $bienes = Belonging::select('id','category_id', 'type_id', 'dependence_id', 'correlative','complete_code', 'description', 'purchase_date', 'quantity', 'purchase_order', 'serial', 'origin', 'price')->get();
        $bienes = ['data'=>$bienes];
        return $bienes;
    }

    public function create()
    {
        $tcategorias = Category::all();
        $ttipos = Type::all();
        $tdependencias = Dependence::all();
        return view('bienes.create',compact('tcategorias','ttipos','tdependencias'));
    }

    public function store(Request $request)
    {
        $nuevo = Belonging::create($request->all());
        return Response()->json($nuevo);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
