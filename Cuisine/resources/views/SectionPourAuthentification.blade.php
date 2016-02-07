

@extends('index')
@section('section')

@if(Auth::user())

	<form action="deconnexion" class="row s12">
		<div class="row col s3 offset s3"
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button class="btn waves-effect waves-light" type="submit" name="action"><i class="large material-icons">lock_open</i></button>
		</div>
	</form>
@else
	
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
	
@stop

<!-- à rajouter en bout de code sur les trucs ou on a besoin d'être connecté -->