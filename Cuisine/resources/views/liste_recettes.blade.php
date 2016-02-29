@extends('indexAppli')

@section('section') <!-- contenu = liste des recettes -->


<html>
  <body>

  <h1> Bienvenue sur CooKing ! </h1>
  </br>
@foreach($recettes as $recette)


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
<script type="text/javascript" src="js/script.js"></script>
</br>
@endforeach
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>


  
    </body>
  </html>
<center><?php echo $recettes->render(); ?></center>

@stop





