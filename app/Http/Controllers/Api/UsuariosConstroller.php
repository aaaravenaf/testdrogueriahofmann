<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UsuariosConstroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('https://test.drogueriahofmann.cl/usuarios/ListTableUsers');
        $getUsers = Http::get('https://test.drogueriahofmann.cl/usuarios/GetUsers');
        return view('welcome', [
            'response' => $response->json(),
            'getUsers' => $getUsers->json()
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $request->all();
        //return Http::dd()->post('https://test.drogueriahofmann.cl/usuarios/SendUser',[
        //$elid = $request->code;
        $monto = str_replace(".","",$request->amount);
        $fechaM = $request->date;
        $fechaM = \Carbon\Carbon::parse($fechaM)->format('Y-m-d');

        $response = Http::post('https://test.drogueriahofmann.cl/usuarios/SendUser',[
            'id' => $id,
            'code' => $request->code,
            'amount' => (int) $monto,
            'date' => $fechaM,
            'github' => "https://github.com/aaaravenaf"
        ]);

        if($response->successful()){
            return ['mensaje' => 'status 200 OK'];
        }else{
            return ['mensaje' => 'Error al enviar'];
        }
    }


}
