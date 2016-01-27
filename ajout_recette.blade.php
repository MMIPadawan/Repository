 <!DOCTYPE html>
  <html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

	 <body class= "teal lighten-4">
	<header>	
	<nav>
    <div class="nav-wrapper grey lighten-4">
      <a href="#" class="brand-logo black-text">Logo</a>
	   <a href="#" data-activates="mobile-demo" class="button-collapse red darken-3"><i class="material-icons">menu</i></a>
	   
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html" class="black-text">Les recettes</a></li>
        <li><a href="badges.html" class="black-text">Mon frigo</a></li>
        <li><a href="collapsible.html" class="black-text">Ajouter une recette</a></li>
         <li><a href="mobile.html" class="black-text">Mon compte</a></li>
      <li><form>
        <div class="input-field orange">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>
      </ul>
    
	 <ul class="side-nav" id="mobile-demo">
	 <li><form>
        <div class="input-field orange">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></li>
        <li><a href="sass.html">Les recettes</a></li>
        <li><a href="badges.html">Mon frigo</a></li>
       <a href="mobile.html"><li class="large material-icons">add</li>Ajouter une recette</a>
        <a href="mobile.html"><li class="large material-icons">perm_identity</li>Mon compte</a>
      </ul>
	  </nav>
	  </div>
	</header>

      
	

	<h3>Ajout d'une recette</h3>
	
	<div class="row">
		<form action="valid_ajout" method="post" class="col s12">
			<div class="row">
				<div class="input-field col s12 ">
					<input name="nom" id="nom" type="text" class="validate">
					<label for="nom">Nom</label>
				</div>
				<div class="input-field col s6"> 
					<input id="temps" type="text" name="temps" class="validate">
					<label for="temps">Temps de préparation</label>
				</div>
				<div class="input-field col s6"> 
				<input id="prix" type="text" name="prix" class="validate">
				<label for="prix">Prix</label>
				</div>
				
				<div class="input-field col s12"> 
				<textarea id="description" name="description" class="materialize-textarea"></textarea>
				<label for="description">Description</label>
				</div>
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<input type="hidden" name="iduser" value="1"/>
			<input type="hidden" name="photo" value="patate.jpg"/>
				<div class="col s6 offset s3">
		 <button class="btn waves-effect waves-light col" type="submit" name="action">Ajouter
			<i class="material-icons right">send</i>
		</button>
			</div>
		</div>
		</form>
	</div>
</div>
		
	  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
		
		})
	</script>
	  </body>
  </html>