<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

       
        </style>
    </head>
    <body>
        <script type="text/javascript">
            function CargarVista(url) { 
                $('#todo').empty();
                $('#todo').load(url);
            }
            function peticiones(op) {
                /*
Route::post("libros/mostrar","LibroController@ShowLibros");
Route::post("libros/registrar","LibroController@CreateLibros");
Route::post("libros/obtener","LibroController@ReadLibros");
Route::post("libros/actualizar","LibroController@UpdateLibros");
Route::post("libros/eliminar","LibroController@DeleteLibros");
                */
                switch(op) {
                    case -1:
                        data = {

                        };

                        url = "/api/libros/mostrar";
                    break;

                    case 1:
                        data = {
                            codlib: document.getElementById("codlib").value,
                            titlib: document.getElementById("titlib").value,
                            codtem: document.getElementById("codtem").value,
                            codaut: document.getElementById("codaut").value
                        };
                        url = "/api/libros/registrar";
                    break;

                    case 2:
                        data = {
                            codlib: document.getElementById("codlib").value
                        };

                        url = "/api/libros/obtener";
                    break;

                    case 3:
                        data = {
                            codlib: document.getElementById("codlib").value,
                            titlib: document.getElementById("titlib").value,
                            codtem: document.getElementById("codtem").value,
                            codaut: document.getElementById("codaut").value
                        };

                        url = "/api/libros/actualizar";
                    break;

                    case 4:
                        data = {
                            codlib: document.getElementById("codlib").value
                        };

                        url = "/api/libros/eliminar";
                    break;

                    case 5:
                        CargarVista("/registrar");
                    break;

                    case 6:
                        CargarVista("/buscar");
                    break;

                    case 7:
                        CargarVista("/actualizar");
                    break;

                    case 8:
                        CargarVista("/eliminar");
                    break;
                }
            $.ajax({
                method: 'POST', 
                headers: {
                    'X-CSRF-TOKEN': "<?php echo csrf_token(); ?>"
                },
                url: url, 
                data: data,
                dataType: "json", 
                success: function(response){ 
                    console.log(response);
                    if (response.exito == false) {
                        alert(response.respuesta);
                    }
                    switch(op) {
                        case -1:
                            $("#todo").empty();
                            $("#todo").append("<table class='table table-dark'><thead><tr><th scope='col'>codlib</th><th scope='col'>titlib</th><th scope='col'>codtem</th><th scope='col'>codaut</th></tr></thead><tbody>");
                        

                            for (var i = response.respuesta.length - 1; i >= 0; i--) {
                                $("#todo").append("<tr><th scope='row'>"+response.respuesta[i].codaut+"</th><td>"+response.respuesta[i].codlib+"</td><td>"+response.respuesta[i].codtem+"</td><td>"+response.respuesta[i].titlib+"</td><td></td></tr>");
                            }

                            $("#todo").append("</tbody></table>");
                                
                        break;
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) { 
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        }

        $(document).ready(function(){
            peticiones(-1);
        });
        </script>
        <div class="flex-center">
            <div class="content">
                <div id="btns" class="btns"> 
                    <button onclick="peticiones(5)">registrar</button>
                    <button onclick="peticiones(6)">buscar</button>
                    <button onclick="peticiones(7)">actualizar</button>
                    <button onclick="peticiones(8)">eliminar</button>
                </div>
                <div id="todo" class="todo">
                  
                </div>
            </div>
        </div>
    </body>
</html>
