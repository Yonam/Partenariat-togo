<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create()
    {
    	return view('request_form');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required'
    	] , [
    		'name.required' => 'veuillez renseigner votre nom',
    		'email.required' => 'veuillez fournir une adresse email'
    	]);

    	$input = $request->all();
    	$soumission = Soumission::create($input)
    }
}
