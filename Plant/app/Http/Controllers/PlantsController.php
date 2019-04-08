<?php

namespace App\Http\Controllers;



use App\plant;

class PlantsController extends Controller
{
    public function index() 
    {

        $plants = plant::all();

        

        return view ('plants.index', compact('plants'));


    }
}

