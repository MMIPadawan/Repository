 @extends('indexAppli')

@section('section') <!-- contenu = ajout des recettes -->

	<h3>Ajout d'une recette</h3>
	



	<div class="row">
		<form action="valid_ajout" method="post" class="col s12" enctype="multipart/form-data">
			<div class="row">
				<div class="input-field col s12 ">
					<input name="nomR" id="nom" type="text" class="validate">
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
				<textarea id="description" name="description" class="materialize-textarea" ></textarea>
				<label for="description">  <a class="btn tooltipped" data-position="right" data-delay="50" data-tooltip="(entrez les ingrédients indispensables à la recette et leurs quantités respectives)">Description</a>
  </label>
				
        </div>

 



			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<input type="hidden" name="iduser" value="1"/>
			<!--<input type="hidden" name="photo" value="patate.jpg"/>-->

    <div class="file-field input-field">
      <div class="btn red darken-4">
        <span>Photo</span>
        <input type="file" name="photo">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

<p><span class="teal-text darken-3">Veuillez <strong>cocher</strong> les ingrédients principaux présents dans votre recette </span></p></br>

<div class="input-field col s6">		


<!-- Checkboxes des ingrédients -->

      <p>
        <input type="checkbox" class="filled-in" id="farine" value="farine" name="nom[]" />
        <label for="farine">farine</label>
      </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="sucre" value="sucre" name="nom[]" />
      <label for="sucre">sucre</label>
    </p>
   </div>



  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="beurre" value="beurre" name="nom[]" />
      <label for="beurre">beurre</label>
    </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="oeufs" value="oeufs" name="nom[]"/>
      <label for="oeufs">œufs</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="chocolat " value="chocolat " name="nom[]" />
        <label for="chocolat ">chocolat </label>
      </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="creme fraiche " value="creme fraiche " name="nom[]" />
      <label for="creme fraiche ">creme fraiche </label>
    </p>
   </div>



  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="sel" value="sel" name="nom[]" checked="checked" />
      <label for="sel">sel</label>
    </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="poivre" value="poivre" name="nom[]"/>
      <label for="poivre">poivre</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="pate" value="poulet" name="nom[]" />
        <label for="pate">pâte brisée</label>
      </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="lait" value="lait" name="nom[]" />
      <label for="lait">lait</label>
    </p>
   </div>





  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="riz" value="riz" name="nom[]"/>
      <label for="riz">riz</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="tomates" value="tomates" name="nom[]" />
        <label for="tomates">tomates</label>
      </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="patates" value="patates" name="nom[]" />
      <label for="patates">patates</label>
    </p>
   </div>



  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="salade" value="salade" name="nom[]" />
      <label for="salade">salade</label>
    </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="huile" value="huile" name="nom[]"/>
      <label for="huile">huile</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="oignons" value="oignons" name="nom[]" />
        <label for="oignons">oignons</label>
      </p>
   </div>


  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="gruyere" value="gruyere" name="nom[]" />
      <label for="gruyere">gruyere</label>
    </p>
   </div>



  	<div class="input-field col s6">			  
    <p>
      <input type="checkbox" class="filled-in" id="pates" value="pates" name="nom[]" />
      <label for="pates">pates</label>
    </p>
   </div>

    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="bouillon" value="bouillon" name="nom[]" />
      <label for="bouillon">bouillon</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="épinards" value="épinards" name="nom[]" />
      <label for="épinards">épinards</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="potimarron" value="potimarron" name="nom[]"/>
      <label for="potimarron">potimarron</label>
    </p>
   </div>

   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="blette" value="blette" name="nom[]" />
        <label for="blette">blette</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="poireau" value="poireaux" name="nom[]" />
      <label for="poireaux">poireaux</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="asperge" value="asperge" name="nom[]" />
      <label for="asperge">asperge</label>
    </p>
   </div>


<!-- Rajout d'un ingrédient supplémentaire -->
    <div class="input-field col s6">
      <input name="nomIng" id="nomIng" type="text" class="validate">
      <label for="nomIng">Nouvel ingrédient</label>
    </div>




			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<input type="hidden" name="iduser" value="1"/>
		

		<div class="col s6 offset s3">
		<!-- bouton d'ajout -->
		</br>
		</br>
		 <button class="btn waves-effect waves-light col red darken-4" type="submit" name="action">Ajouter
			<i class="material-icons right">send</i>
		</button>
			</div>
      
	</form>

</div>



	  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
			$('select').material_select();
		});
	</script>
	  </body>
  </html>

  @stop