<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storea(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required',
            'demande' => 'required'
        ]);

        $request = new Request([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'mail' => $request->get('email'),
            'telephone' => $request->get('phone'),
            'secteur_activite' => $request->get('activite'),
            'demande' => $request->get('message')
        ]);

        var_dump($request);

        $request->save();
        return redirect('/request')->with('success', 'Votre demande a bien ete envoyee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
