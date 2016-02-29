
@extends('indexAppli')

@section('section') <!-- contenu = recher des recettes en fonction des ingrédients -->

</div class="container"><CENTER><h2>Recherche</h2></CENTER></div>


<form action="valider_recherche" method="post" >

<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Fruits & légumes de saison !</div>
      <div class="collapsible-body teal lighten-5"><p>





    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="épinards" value="épinards" name="ingredient[]" />
      <label for="épinards">épinards</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="potimarron" value="potimarron" name="ingredient[]"/>
      <label for="potimarron">potimarron</label>
    </p>
   </div>

   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="blette" value="blette" name="ingredient[]" />
        <label for="blette">blette</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="poireaux" value="poireaux" name="ingredient[]" />
      <label for="poireau">poireau</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="asperge" value="asperge" name="ingredient[]" />
      <label for="asperge">asperge</label>
    </p>
   </div>



</p></div>
    </li>
  </ul>


<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Entrées</div>
      <div class="collapsible-body teal lighten-5"><p><div class="input-field col s6">       
      <p>
        <input type="checkbox" class="filled-in" id="sel" value="sel" name="ingredient[]" />
        <label for="sel">sel</label>
      </p>
   </div>





    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="poivre" value="poivre" name="ingredient[]"/>
      <label for="poivre">poivre</label>
    </p>
   </div>

   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="poulet" value="poulet" name="ingredient[]" />
        <label for="poulet">poulet</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="boeuf" value="boeuf" name="ingredient[]" />
      <label for="boeuf">boeuf</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="patates" value="patates" name="ingredient[]" />
      <label for="patates">patates</label>
    </p>
   </div>



    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="huile" value="huile" name="ingredient[]"/>
      <label for="huile">huile</label>
    </p>
   </div>

   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="ours polaire" value="ours polaire" name="ingredient[]" />
        <label for="ours polaire">ours polaire</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="gruyere" value="gruyere" name="ingredient[]" />
      <label for="gruyere">gruyere</label>
    </p>
   </div>



</p></div>
    </li>
  </ul>

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Plats</div>
      <div class="collapsible-body teal lighten-5"><p>

  <div class="input-field col s6">      
   <p>
        <input type="checkbox" class="filled-in" id="oeufs " value="oeufs " name="ingredient[]" />
        <label for="oeufs ">oeufs </label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="creme fraiche " value="creme fraiche " name="ingredient[]" />
      <label for="creme fraiche ">creme fraiche </label>
    </p>
   </div>





    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="poivre" value="poivre" name="ingredient[]"/>
      <label for="poivre">poivre</label>
    </p>
   </div>

   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="poulet" value="poulet" name="ingredient[]" />
        <label for="poulet">poulet</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="boeuf" value="boeuf" name="ingredient[]" />
      <label for="boeuf">boeuf</label>
    </p>
   </div>




   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="tomates" value="tomates" name="ingredient[]" />
        <label for="tomates">tomates</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="patates" value="patates" name="ingredient[]" />
      <label for="patates">patates</label>
    </p>
   </div>



    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="salade" value="salade" name="ingredient[]" />
      <label for="salade">salade</label>
    </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="huile" value="huile" name="ingredient[]"/>
      <label for="huile">huile</label>
    </p>
   </div>

   <div class="input-field col s6">       


      <p>
        <input type="checkbox" class="filled-in" id="ours polaire" value="ours polaire" name="ingredient[]" />
        <label for="ours polaire">ours polaire</label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="gruyere" value="gruyere" name="ingredient[]" />
      <label for="gruyere">gruyere</label>
    </p>
   </div>



    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="mouton" value="mouton" name="ingredient[]" />
      <label for="mouton">mouton</label>
    </p>
   </div>
</p></div>
    </li>
  </ul>

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Desserts</div>
      <div class="collapsible-body teal lighten-5"><p><div class="input-field col s6">       
      <p>
        <input type="checkbox" class="filled-in" id="beurre" value="beurre" name="ingredient[]" />
        <label for="beurre">beurre</label>
      </p>
   </div>

  <div class="input-field col s6">      
   <p>
        <input type="checkbox" class="filled-in" id="chocolat " value="chocolat " name="ingredient[]" />
        <label for="chocolat ">chocolat </label>
      </p>
   </div>


    <div class="input-field col s6">        
    <p>
      <input type="checkbox" class="filled-in" id="creme fraiche " value="creme fraiche " name="ingredient[]" />
      <label for="creme fraiche ">creme fraiche </label>
    </p>
   </div>




    
</p></div>
    </li>
  </ul>




  

     <button class="btn waves-effect waves-light col red darken-4" type="submit" name="recherchebtn">Rechercher
      <i class="material-icons right">send</i>
    </button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

@stop