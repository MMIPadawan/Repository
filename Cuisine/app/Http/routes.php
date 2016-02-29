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

	 if(Auth::attempt(['pseudo'=>$request->pseudo,'password'=>$request->password]))
		 return view('indexAppli', ['message' =>'Vous êtes bien connecté !']);//['message'=>'Vous etes maintenant connecte'.Auth::user()];
	 else
		 return view('inscription', ['message' =>'Mauvais mot de passe ou pseudo ! Souhaitez vous vous inscrire ? ']);
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


// Liste des recettes 
Route::get('/liste', function(){
	$recettes = Recette::get();
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


// quand on clique sur le bouton d'ajout de la recette// Rajout d'ingrédient et de recette
Route::any('valid_ajout',function(Request $request)

{


	$recette=new Recette();
	$recette->nom= $request->nomR;
	$recette->temps=$request->temps;
	$recette->prix=$request->prix;
	$recette->description=$request->description;
	$recette->iduser=$request->iduser;

 	/*$ingredient=new Ingredient();
	$ingredient->nom=$request->nomIng;

	$ingredient->save();*/







	if (Input::hasFile('photo'))
	{	

		//On récupère le fichier photo dans un objet file
		$request->file('photo');

		//chemin du fichier
		$path = Input::file('photo')->getRealPath();
    	$destinationPath='images';

		$name = Input::file('photo')->getClientOriginalName();


		Input::file('photo')->move($destinationPath, $name);
		$recette->photo=$name;


	} 





	$recette->save();
	$idrecette = DB::table('recettes')->where('nom', $recette->nom)->pluck('idrecette');

	$ingredientNew=new Ingredient();
	$ingredientNew->nom=$request->nomIng;
	//echo $ingredientNew;
	$ingredientNew -> save();
	$idING = DB::table('ingredient')->where('nom', $ingredientNew->nom)->pluck('iding');

 		$composeNewing= new Compose();
		$composeNewing->idrecette=$idrecette;
		$composeNewing->iding=$idING;
		$composeNewing->save();


	//Quand aucune case n'est cochée, à améliorer 
	if($request->has('nom')==false){
				return view('indexAppli', ['message'=>'Aucune case cochée ! Veuillez cocher au moins une case']);
					//return view('indexAppli');
	} else {
		foreach($request->input('nom') as $valeur){
		$ingredient=new Ingredient();
		$ingredient->nom=$valeur;
		
		
		$ingredient->save();
		$iding = DB::table('ingredient')->where('nom', $valeur)->pluck('iding');

	
		$compose= new Compose();
		$compose->idrecette=$idrecette;
		$compose->iding=$iding;
		$compose->save();

	}

	}


	

	if($recette->save()) {
		return view('indexAppli', ['message' =>'Recette bien ajoutée !']);

	} else {
		return view('indexAppli', ['message' =>'Attention ! Il y a eu un problème dans ajout de la recette']);


	};



	

	




});


Route::get('inscription',function()
{
	return view('inscription');
}
);

// Vue de la recherche d'une recette

Route::get('compte',function()
{
	return view('compte');


}
);

// Vue de la recherche d'une recette

Route::get('recherche',function()
{
	return view('recherche');


}
);


// Recherche d'une recette en fonction des ingrédients 
Route::any('valider_recherche', function(Request $request)
{
    
	$ingredients = $request->input('ingredient');
	$boutRequetes = array();



	if (is_array($ingredients)) {
   		 foreach($ingredients as $ing){

     		array_push($boutRequetes,"ingredient.nom like '%".$ing."%'");

     		 }
   	 	}

   	 	// si il n'y a pas de cases cochées ou pas de correspondance 
	if(empty($boutRequetes)){
			return view('indexAppli', ['message' =>'Aucune recette ne correspond à votre recherche.. ']);

	} else {
		
		// Requête de recherche 
	$recettesDispo = DB::select(DB::raw('SELECT recettes.nom, recettes.temps, recettes.prix, recettes.photo, recettes.description
		FROM recettes 
		JOIN compose 
		ON recettes.idrecette = compose.idrecette
		JOIN ingredient
		ON compose.iding=ingredient.iding
		WHERE '.implode(' OR ',$boutRequetes)));
	

	$data=array('recettes'=>$recettesDispo);
	return view('resultat_recherche')->with($data);
	}
	

});

