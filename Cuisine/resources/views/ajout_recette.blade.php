 @extends('indexAppli')

@section('section') <!-- contenu = liste des recettes -->

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

  @stop