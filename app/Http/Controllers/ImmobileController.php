<?php

namespace App\Http\Controllers;

use App\Immobile;
use Illuminate\Http\Request;

class ImmobileController extends Controller
{
    function index() {
    	$immobile = Immobile::get();

    	return view('immobiles.list', ['immobile' => $immobile]);
    }

    function new() {
    	return view('immobiles.create-editImmobile');
    }

    function save(Request $request) {
    	$immoble = new Immobile();

    	$immoble = $immoble->insert($request->except(['_token']));

    	//\Session::flash('success', 'Imóvel cadastrado com sucesso!')

    	return redirect('imoveis/novo')->with('success', 'Imóvel cadastrado com sucesso!');
    }

    function edit($id) {
    	$immobile = Immobile::findOrFail($id); 

    	return view('immobiles.create-editImmobile', ['immobile' => $immobile]);					
   							
    }

    function update($id, Request $request) {
    	$immobile = Immobile::findOrFail($id); 

    	$immobile = $immobile->update($request->except(['_token']));

    	if($immobile) 
	    	return view('immobiles.create-editImmobile', ['immobile' => $immobile])
	    						->with('success', 'Imóvel atualizado com sucesso!');
	    else 
	    	return view('immobiles.create-editImmobile', ['immobile' => $immobile])
	   							->with('error', 'Falha ao atualizar...');

    }

    function delete($id) {
    	$immobile = Immobile::findOrFail($id);

    	$delete = $immobile->delete();

    	if($delete)
    		return redirect('imoveis')
    					->with('success', 'Imóvel excluído com sucesso!');
    	else
    		return back()->with('error', 'Falhar ao excluir imóvel...');	
    }
}