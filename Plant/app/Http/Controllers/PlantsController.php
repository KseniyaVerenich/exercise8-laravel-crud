<?php

namespace App\Http\Controllers;



use App\plant;

class PlantsController extends Controller
{
    public function index() 
    {

        $plants = Plant::all();

        

        return view ('plants.index', compact('plants'));


    }

    public function create()
    { 
        return view ('plants.create');
    
    }

    public function store() 
    {
        $plant = new Plant();

        $plant->common = request ("common");
        $plant->genus = request ("genus");
        $plant->species = request ("species");
        $plant->description = request ("description");

        $plant->save();

        return redirect('plants');    
    }

    public function edit($id)
    {
       

        $plant = Plant::findOrFail($id);

        return view('plants.edit', ['plant' => $plant]);
    }

    public function update($id)
    {
        $plant = Plant::findOrFail($id);

        $plant->common = request('common');
        $plant->genus = request('genus');
        $plant->species = request('species');
        $plant->description = request('description');

        $plant->save();

        return redirect('/plants');

    }

    public function destroy($id)
    {
        $plant = Plant::findOrFail($id)->delete();
        return redirect('/plants');
    }

    


}
