<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>G1 - Sistema de Noticias </title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

    </head>

    <body>

        <header id="cabecalho">
            <div class="corVermelhoClaro">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-md-3">
                            <img src="{{asset('img/logo.jpg')}}" alt="Logo G1" class="img-fluid" width="60">
                        </div>
                        <div class="col-8">
                            <div id="Pesquisa" class="form-group">
                                
                               <input type="search" class="form-control " placeholder="Pesquisar...">
                                        
                            </div>
                        </div>
                        
                        <div class="col-2 d-md-none"> 
                                <span class="btn-collapse-menu">
                                     <i class="fas fa-bars"></i>
                                </span>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="corVermelhoEscuro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 collapse-menu">
                             <nav id="menu" >
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="tecnologia.html">Tecnologia</a></li>
                                    <li><a href="#">Esportes</a></li>
                                    <li><a href="#">Cinema</a></li>
                                    <li><a href="contato.html">Contato</a></li>
                                </ul>
                             </nav>
                        </div>
                        
                    
                    </div>
                </div>
                    

                
            </div>

       </header>

        <main>

       @yield('conteudo')

        </main>
        <footer id="rodape" class="corVermelhoClaro mt-4">
            
            <div class="row">
                    <div class="col-md-12">
                        <p>&copy; 2019 ou 2019 - Todos os direito são reservados</p>
                    </div>
            </div>
           

        </footer>

        <script src="<?php echo asset('js/jquery-3.4.1.min.js')?>"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>


</html>
