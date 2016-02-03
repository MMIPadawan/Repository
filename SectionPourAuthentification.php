 <!DOCTYPE HTML>
 <html>
    <head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<?php
/*@extends('index')
@section('section')
*/
@if(Auth:;user())
?>
	<form action="deconnexion" class="row s12">
		<div class="row col s3 offset s3"
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button class="btn waves-effect waves-light" type="submit" name="action"><i class="large material-icons">lock_open</i></button>
		</div>
	</form>
<?php @else ?>
	
	<div class="row">
		<form action="connexion" class="row s12">
		<div class="row">
        <div class="input-field col s3 offset s6">
          <input id="text" type="text" name="name" class="validate">
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