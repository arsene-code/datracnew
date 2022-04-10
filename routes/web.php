<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('index')->middleware('checkPerson');

Route::get('/home', function () {
    return view('home');
})->name('index');

/**
** Dashboard Assurance
 **/
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardAssurance')->middleware('role');

Route::get('/dashboard/utilisateurs', function () {
    return view('utilisateurs');
})->name('users');

Route::get('/dashboard/assure/{id}', function ($id) {
    $assure = \App\Assure::where('id', $id)->first();
    $assureProfil = \App\User::where('id', $assure->user_id)->first();
    return view('dashboard/assurances/assures/assuresone')->with(compact('assure'))->with(compact('assureProfil'));
})->name('assures-list')->middleware('role');


Route::get('/dashboard/assures', function () {
    $assures = \App\Assure::all();
    return view('dashboard/assurances/assures/assures')->with(compact('assures'));
})->name('assures-list')->middleware('role');

Route::get('/dashboard/add-assure', function () {
    $villes = \App\Ville::all();
    $assurances = \App\Assurance::all();
    return view('dashboard/assurances/assures/add-assure')
        ->with(compact('assurances'))
        ->with(compact('villes'));
})->name('assure-add')->middleware('role');

Route::post('/dashboard/add-assure', 'AssureController@store')->name('add-assure-post')->middleware('role');


/**
 ** Dashboard Super Admin
 **/
Route::get('/dashboard-superadmin', function () {
    $medicaments = \App\Medicament::all();
    $users = \App\User::all();
    $appareillages = \App\Appareillage::all();
    $actes = \App\Acte::all();
    $etablissements = \App\Etablissement::all();
    $prestations = \App\Prestation::all();

    return view('dashboard-superadmin', compact(['medicaments', 'users', 'appareillages', 'actes', 'etablissements', 'prestations']));
})->name('dashboardSuperAdmin')->middleware('role');


Route::get('/dashboard-superadmin/affections', function () {
    return view('/superadmin/affections');
})->name('affections-manage')->middleware('role');


Route::get('/dashboard-superadmin/users-modifier/{id}', function ($id) {
    $users = \App\User::where('id', $id)->first();
    return view('/dashboard/superadmin/users/users-modify')->with(compact('users'));
})->name('users-manage')->middleware('role');

Route::get('/dashboard/superadmin/users/users-liste', function () {
    $users = \App\User::all();
    return view('/dashboard/superadmin/users/users-liste')->with(compact('users'));
})->name('users-manage')->middleware('role');

Route::get('/dashboard/superadmin/affections/affections-liste', function () {
    $affections = \App\Affection::all();
    return view('/dashboard/superadmin/affections/affections-liste')->with(compact('affections'));
})->name('affections-liste')->middleware('role');

Route::get('/dashboard/caisiere', function () {
    return view('search');
})->name('search');

Route::get('/caisse', function () {
    return view('caisse/index');
});

Route::get('/assures/search', 'AssureController@search');

Route::get('/villes', 'VilleController@index');

Route::get('/doctor', function () {
    return view('doctor/index');
});

Route::get('/suivi-patient', function () {
    return view('doctor/suivi-patient');
});

Route::get('/doctor-chat', function () {
    return view('doctor/doctor-chat');
});

Route::get('/rendez-vous', function () {
    return view('doctor/rendez-vous');
});

Route::get('/rendezvous', function () {
    return view('caisse/rendezvous');
});

Route::get('/paiement', function () {
    return view('caisse/paiement');
});

Route::get('/add-paiement', function () {
    return view('caisse/add-paiement');
});

Route::get('/add-doctor', function () {
    return view('admin/add-doctor');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
