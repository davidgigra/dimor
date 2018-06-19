<?php

namespace dimor\Http\Controllers;

use Illuminate\Http\Request;

use dimor\Http\Requests;
use dimor\Http\Controllers\Controller;
use dimor\User;
use dimor\Butget;
use dimor\Bulding;
use Illuminate\Suppot\Facades\redirect;


class dashboardController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('in.dashboard');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();

        
        $butget = new Butget();

        if ($request->all()['dato']=="Terreno") {
            $butget->totalProyecto = (int)$datos['valor']*10;
        } elseif ($request->all()['dato']=="Costo Directo") {
            $butget->totalProyecto = (int)$datos['valor']*2;
        }elseif ($request->all()['dato']=="Costo Indirecto") {
            $butget->totalProyecto = (int)$datos['valor']*5;
        }elseif ($request->all()['dato']=="Urbanismo") {
            $butget->totalProyecto = (int)$datos['valor']*10;
        }
        
        $butget->otros = (int)$datos['otros'];
        $butget->save();
        $bulding = new Bulding();
        $bulding->name=$datos['name'];
        $bulding->city=$datos['ciudad'];
        $bulding->client=$datos['cliente'];
        $bulding->butget_id=$butget->id;
        $bulding->save();
        \Auth::user()->buldings()->attach($bulding->id);
        return redirect()->route('in.dashboard');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('dashboard',['cont'=>1]);
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

    public function view($id)
    {
        $butget = Butget::find($id);
        return view('butget',['butget'=>$butget]);
    }
}
