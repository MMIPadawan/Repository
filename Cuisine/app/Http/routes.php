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

//----------------USER---------------//
 
use App\User; // Référence à la classe utilisateur
use App\Recette; // Référence à la classe Recette 
use Illuminate\Http\Request;





Route::any('valid_inscription',function(Request $request)
{
	$utilisateur=new User();
	$utilisateur->nom= $request->nom;
	$utilisateur->prenom=$request->prenom;
	$utilisateur->pseudo=$request->pseudo;
	$utilisateur->password=$request->password;
	$utilisateur->email=$request->email;
	$utilisateur->iduser=$request->iduser;
	if($utilisateur->save())
		return view('indexAppli');
	else
		return view('indexAppli');
});




 //use App\User;
 
 //Vérification des données de connexion
Route::post('connexion', function(Request $request){
	 if(Auth::attempt(['pseudo'=>$request->pseudo,'password'=>$request->password]))
		 return view('indexAppli', ['Message'=>'Vous êtes bien connecté !']);//['message'=>'Vous etes maintenant connecte'.Auth::user()];
	 else
		 return view('indexAppli', ['Message'=>'Echec connexion']);
 }); 
 
 //Deconnexion
 Route::any('deconnexion',function(){
	 Auth::logout();
	 return view('indexAppli');
 });


 



Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/liste', function(){
	// Récupération de la liste des recette en utilisant la méthode get de l'ORM Eloquent
	$recettes = Recette::get();
	//Affichage des recettes en mode debug
	//foreach ($recettes as $recette) var_dump($recette->NOM);
		# code...
	return view('liste_recettes',['recettes'=>$recettes]);

});

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
	$recette->iduser=$request->iduser;
	$recette->photo=$request->photo;
	if($recette->save())
		return view('indexAppli');
	else
		return view('indexAppli');
});

Route::get('inscription',function()
{
	return view('inscription');
}
);

