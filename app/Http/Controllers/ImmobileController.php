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
    	$immobile = new Immobile();

    	if($request->hasFile('immobile_image') && $request->file('immobile_image')->isValid()) {
    		if($immobile->immobile_image)
    			$name = $immobile->immobile_image;
    		else 
    			$name = $request->immobile_code;
    		
    		$extension = $request->immobile_image->extension();
    		$fileName = $name.'.'.$extension;
    		$upload = $request->file('immobile_image')->storeAs('images', $fileName);

    		if(!$upload)
    			return redirect('imoveis/novo')->with('error', 'Falha ao fazer upload da imagem.');
 
    	}

    	$immobile = $immobile->insert($request->except(['_token']));
    	return redirect('imoveis/novo')->with('success', 'Imóvel cadastrado com sucesso!');
    }

    function edit($id) {
    	$immobile = Immobile::findOrFail($id); 
    	return view('immobiles.create-editImmobile', ['immobile' => $immobile]);					
   							
    }

    function update($id, Request $request) {
    	$immobile = Immobile::findOrFail($id);

    	if($request->hasFile('immobile_image') && $request->file('immobile_image')->isValid()) {
    		if($immobile->immobile_image)
    			$name = $immobile->immobile_image;
    		else 
    			if($immobile->immobile_code == $request->immobile_code)
    				$name = $immobile->immobile_code;
    			else 
    				$name = $request->immobile_code;

    		$extension = $request->immobile_image->extension();
    		$fileName = $name.'.'.$extension;
    		$upload = $request->file('immobile_image')->storeAs('images', $fileName);

    		if(!$upload)
    			return redirect('imoveis/novo')->with('error', 'Falha ao fazer upload da imagem.');
 
    	}

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
    		return redirect()
    					->back()
    					->with('error', 'Falhar ao excluir imóvel...');	
    }
}
