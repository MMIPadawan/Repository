 @extends('indexAppli')

@section('section') <!-- contenu = liste des recettes -->

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
				<label for="description">Description (entrez les ingrédients indispensables à la recette et leurs quantités respectives)</label>
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

<p><span class="teal-text darken-3">Veuillez <strong>cocher</strong> les ingrédients présents dans votre recette </span></p></br>

<div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="ail" value="ail" name="nom[]" />
        <label for="ail">ail</label>
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
      <input type="checkbox" class="filled-in" id="topinambours" value="topinambours" name="nom[]"/>
      <label for="topinambours">topinambours</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="ail" value="ail" name="nom[]" />
        <label for="ail">ail</label>
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
      <input type="checkbox" class="filled-in" id="topinambours" value="topinambours" name="nom[]"/>
      <label for="topinambours">topinambours</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="ail" value="ail" name="nom[]" />
        <label for="ail">ail</label>
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
      <input type="checkbox" class="filled-in" id="topinambours" value="topinambours" name="nom[]"/>
      <label for="topinambours">topinambours</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="ail" value="ail" name="nom[]" />
        <label for="ail">ail</label>
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
      <input type="checkbox" class="filled-in" id="topinambours" value="topinambours" name="nom[]"/>
      <label for="topinambours">topinambours</label>
    </p>
   </div>

   <div class="input-field col s6">			  


      <p>
        <input type="checkbox" class="filled-in" id="ail" value="ail" name="nom[]" />
        <label for="ail">ail</label>
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
      <input type="checkbox" class="filled-in" id="topinambours" value="topinambours" name="nom[]"/>
      <label for="topinambours">topinambours</label>
    </p>
   </div>





			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<input type="hidden" name="iduser" value="1"/>
		

		<div class="col s6 offset s3">
		
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