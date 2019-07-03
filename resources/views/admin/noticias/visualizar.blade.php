@extends('layout.admin')

@section('conteudo')
            <div class="container">
                <div class="row mt-4 ml-auto">
                    <div class="col-12">
                        <h2>Visualizar Notícia</h2>

                        <table class="table table-striped" >
                                <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Título</th>
                                        <td>Flamengo ganhou do corinthias</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">subtitulo</th>
                                        <td>Tem jogo de volta</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Descrição</th>
                                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore quibusdam veniam delectus. Provident consequuntur numquam placeat? Maxime doloremque, sequi, mollitia minus voluptas eos accusantium, quibusdam odio commodi repudiandae omnis soluta.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>Não Publicado</td>
                                    </tr>   
    
                                </tbody>
                        </table>

                        <p>
                            <a href="#" class="btn btn-danger">Editar Notícia</a>
                           <a href="#" class="btn btn-secondary">Cancelar</a>
                        
                        </p>
                    </div>
                </div>
            </div>


@endsection
       