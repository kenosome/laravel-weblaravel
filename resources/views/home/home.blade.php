<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/estilos.css')}}" >
  </head>
  <body>
    <div class="container">
        <div class="content">
            <div class="title">
              Welcome Home!<br>
              {{isset($id)?$id:"Default"}}<br>
              {{$id or "Universidad Autonoma de Occidente"}}

            </div>
            @include("hija")
        </div>
    </div>
  </body>
</html>
