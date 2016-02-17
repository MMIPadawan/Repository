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
use App\Ingredient; // Référence à la classe Ingrédient 
use App\Compose; // Référence à la classe Compose, qui permet la liaison entre Ingrédient et Recette 
use Illuminate\Http\Request; // permet d'utiliser l'objet request pour récupérer les données



// Inscription

Route::any('valid_inscription',function(Request $request)
{
	$utilisateur=new User();
	$utilisateur->nom= $request->nom;
	$utilisateur->prenom=$request->prenom;
	$utilisateur->pseudo=$request->pseudo;
	$utilisateur->password=Hash::make($request->password);
	$utilisateur->email=$request->email;
	$utilisateur->iduser=$request->iduser;
	if($utilisateur->save())
		return view('indexAppli');
	else
		return view('indexAppli');
});



 

 
 //Vérification des données de connexion
Route::post('connexion', function(Request $request){
	echo $request->pseudo;
	echo $request->password;
	 if(Auth::attempt(['pseudo'=>$request->pseudo,'password'=>$request->password])){
		 ActiveSession();
		 return view('indexAppli', ['Message'=>'Vous êtes bien connecté !']);//['message'=>'Vous etes maintenant connecte'.Auth::user()];
	 }
	 else{
		 return view('indexAppli', ['Message'=>'Echec connexion']);
	 }
 }); 
 
 //Deconnexion
 Route::any('deconnexion',function(){
	 Auth::logout();
	 return view('indexAppli');
 });

function ActiveSession(){
	echo "sessionPUT";
Session::put('pseudo', 'password');
}




Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Liste des recettes 
Route::get('/liste', function(){
	// Récupération de la liste des recette en utilisant la méthode get de l'ORM Eloquent
	$recettes = Recette::get();
	//Affichage des recettes en mode debug
	//foreach ($recettes as $recette) var_dump($recette->NOM);
		# code...

	$recettes=Recette::paginate(2);
	
	// permet d'éviter que l'on ne trouve pas l'URL
	$recettes->setPath('');

	return view('liste_recettes',['recettes'=>$recettes]);

});

// Vue de l'ajout d'une recette

Route::get('ajout',function()
{
	return view('ajout_recette');
}
);


// quand on clique sur le bouton d'ajout 
Route::any('valid_ajout',function(Request $request)

{
	$recette=new Recette();
	$recette->nom= $request->nomR;
	$recette->temps=$request->temps;
	$recette->prix=$request->prix;
	$recette->description=$request->description;
	$recette->iduser=$request->iduser;

	//On récupère le fichier photo dans un objet file
	$request->file('photo');

	//chemin du fichier
	$path = Input::file('photo')->getRealPath();

	
	$destinationPath='images';

	$name = Input::file('photo')->getClientOriginalName();


	Input::file('photo')->move($destinationPath, $name);



	$recette->photo=$name;

	if($recette->save()) {
		return view('indexAppli');
	};

	$idrecette = DB::table('recettes')->where('nom', $recette->nom)->pluck('idrecette');

	/* Quand aucune case n'est cochée, à améliorer 
	if($request->has('nom')==false){
				//return view('indexAppli', ['Message'=>'il y a eu un problème dans la base de données !']);
					return view('indexAppli');
	}*/

	foreach($request->input('nom') as $valeur){
		$ingredient=new Ingredient();
		$ingredient->nom=$valeur;
		$iding = DB::table('ingredient')->where('nom', $valeur)->pluck('iding');
		
		
		$ingredient->save();
		
		$compose= new Compose();
		$compose->idrecette=$idrecette;
		$compose->iding=$iding;
		$compose->save();

	}
	

	




});


Route::get('inscription',function()
{
	return view('inscription');
}
);

