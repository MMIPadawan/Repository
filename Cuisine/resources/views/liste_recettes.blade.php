@extends('indexAppli')

@section('section') <!-- contenu = liste des recettes -->



@foreach($recettes as $recette)
  <!--<div class = "container">
    
      <div class="small card">
        
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="images/{{$recette->PHOTO}}">
              <span class="card-title">{{$recette->NOM}} </span>
            </div>
            <div class="card-content">
              <p>blablablabla test</p>
            </div>
            <div class="card-action">
              <a href="#">{{$recette->NOM}}  </br>   {{$recette->TEMPS}} </br>    {{$recette->PRIX}}</a>
            </div>
          </div>
        </div>
      
            
    </div>
  </div>-->

<div class = "container">
    
  <div class="small card">
  <div class = "row">
    <div class="col s12 m12 l12" style="
    background-size: cover;
">
  <div class="card" style="
    height: 300px;
">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/{{$recette->PHOTO}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{$recette->NOM}}  {{$recette->PRIX}}</br>   {{$recette->TEMPS}}    <i class="material-icons right">more_vert</i></span>
      
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$recette->NOM}}<i class="material-icons right">close</i></span>
      <p>{{$recette->DESCRIPTION}}</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

</br>
@endforeach
@stop



