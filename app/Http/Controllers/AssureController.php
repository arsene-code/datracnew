<?php

namespace App\Http\Controllers;

use App\Assure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AssureController extends Controller
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
        //
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser($data)
    {
        return User::create([
            'name' => $data->nomAss,
            'surname' => $data->prenom,
            'email' => $data->email,
            'username' => $data->username,
            'profil_id' => 15,
            'password' => Hash::make($data->password),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $civilite = '';
        $done =  $this->createUser($request);

        $idUser = User::where('username', $request->username)->first();

        if (Auth::check() && $done) {
            Assure::create([
                'n_matricule' => $request->matricule,
                'civilite' => $request->civilite,
                'nom' => $request->nomAss,
                'prenom' => $request->prenom,
                'date_nais' => $request->naissance,
                'date_fin_con' => $request->fincontrat,
                'telephone' => $request->telephone,
                'adresse' => $request->adresse,
                'sexe' => $request->sexe,
//                'photo' => $request->sexe,
                'user_id' => $idUser->id,
                'type_assure_id' => $request->typeassure,
                'assurance_id' => $request->assurance,
                'ville_id' => $request->ville,
            ]);
        }
    }

    public function search(Request $request)
    {
        $member = $request->get('name');
        $data =  DB::table('assures')->where('nom','LIKE','%'.$member.'%')
            ->get();
        if ($data->count() > 0) {
            return json_encode([
                'status' => 200,
                'assures' => $data
            ]);
        } else {
            return json_encode([
                'status' => 202,
                'assures' => $data
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assure  $assure
     * @return \Illuminate\Http\Response
     */
    public function show(Assure $assure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assure  $assure
     * @return \Illuminate\Http\Response
     */
    public function edit(Assure $assure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assure  $assure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assure $assure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assure  $assure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assure $assure)
    {
        //
    }
}
