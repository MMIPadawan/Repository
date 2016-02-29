
@extends('indexAppli')

@section('section') <!-- contenu = liste des recettes -->

{{$message or ""}}


<body>
<form action="valid_inscription" method="post" class="col s12">

<div class="row col s12">
<h3>Inscription</h3>

      <div class="input-field col s6">
        <input id="nom" name="nom" type="text" class="validate">
        <label for="nom">Nom</label>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="prenom" name="prenom" type="text" class="validate">
          <label for="prenom">Prénom</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="Placeholder" id="pseudo" name="pseudo" type="text" class="validate">
          <label for="pseudo">Pseudo</label>
        </div>

      </div>
     <div class="row">
        <div class="input-field col s12">
          <input id="mdp" type="email" name="email" class="validate">
          <label for="mdp">E-mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mdp" type="password" name="password" class="validate">
          <label for="mdp">Mot de passe</label>
        </div>
      </div>
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<!--<input type="hidden" name="iduser" value="5"/>-->


		<button class="btn waves-effect waves-light col" type="submit" name="action">Ajouter
			<i class="material-icons right">send</i>
		</button>
    </form>
  </div>



  
        	  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
	<!--<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
		
		})

	</script>-->
	  </body>
  </html>

  @stop