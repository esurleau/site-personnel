<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\RecipeStep;
use App\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        
        return view('recipes.index',compact('recipes'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('recipes.create',compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $recipe=new Recipe();
        $recipe->title=$data['title'];
        $recipe->description=$data['description'];
        $recipe->user_id=Auth::user()->id;
        $recipe->save();
        
        if(($request->get('steptitle')!=null) && ($request->get('steptitle')!=null)){
            $steps;
            foreach ($request->get('steptitle') as $k =>$steptitle) {
                $steps[$k]=new RecipeStep();
                $steps[$k]->title=$steptitle;
            }
            foreach ($request->get('stepcontent') as $l =>$stepcontent) {
                $steps[$l]->step=$l;
                $steps[$l]->content=$stepcontent;
            }
            $recipe->steps()->saveMany($steps);
        }
        if(($request->get('ingredient')!=null)&&($request->get('quantity')!=null)){
            $ingredients;
            $quantities;
            foreach ($request->get('ingredient') as $m =>$ingredient) {
                $ingredients[$m]=Ingredient::firstOrCreate(['name'=>$ingredient]);
            }
            foreach ($request->get('quantity') as $n =>$quantity) {
                $quantities[$n]=$quantity;
            }
            foreach ($ingredients as $key => $ingredient) {
                $recipe->ingredients()->attach($ingredient->id,['quantity'=>$quantities[$key]]);
            }
        }
        
        
        
        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $ingredients=$recipe->ingrec;
        return view('recipes.show',compact('recipe','ingredients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->steps()->delete();
        $recipe->ingredients()->detach();
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
}
