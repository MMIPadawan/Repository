<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
use App\Recette;
//référence à la classe Livre
use Illuminate\Http\Request;

Route::get('ajout',function()
{
	return view('ajout_recette');
}
);


Route::any('valid_ajout',function(Request $request)
{
	$recette=new Recette();
	$recette->nom= $request->nom;
	$recette->temps=$request->temps;
	$recette->prix=$request->prix;
	$recette->description=$request->description;
	$recette->idsuser=$request->idsuser;
	$recette->photo=$request->photo;
	if($recette->save())
		return view('index_site');
	else
		return view('index_site');
});

