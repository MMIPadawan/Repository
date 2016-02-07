

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


<body class="teal lighten-4"> 

  
@if(Auth::user())

  <form action="deconnexion" method="post" class="row s12" >
    <div class="row col s3 offset s3"
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <button class="btn waves-effect waves-light" type="submit" name="action"><i class="large material-icons">lock_open</i></button>
    </div>
  </form>
@else
  
  <div class="row">
    <form action="connexion" method="post" class="row s12" >
    <div class="row">
        <div class="input-field col s3 offset s6">
          <input id="text" type="text" name="pseudo" class="validate">
          <label for="text">Pseudo</label>
    </div>
    </div>
    <div class="row">
    <div class="input-field col s3 offset s6">
          <input id="passwo" type="password" name="mdp" class="validate">
          <label for="text">Mot de passe</label>
    </div>
    </div>
      <div class="input-field col s3 offset s3">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
      <button class="btn waves-effect waves-light col" type="submit" name="action">Connexion</button>
    </div>
    </form>
  </div>
@endif

  @section('section')



  @show

  


  </body>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
		
		})
	</script>
	  
  </html>