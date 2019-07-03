@extends('layout.app')

@section('conteudo')    
   <div class="container">
            <div class="row">
                <div class="col-10 ml-auto mt-5">
                    <form action="#" method="POST">
                        <h2>Contato</h2>
                        <p>Faça sua sugestão, criticas ou tire suas duvidas sobre algum conteudo publicado</p>

                        <div class="form-group">
                            <label for="Nome">Nome</label>
                            <input type="text" class="form-control" id="Nome" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <label for="Email">E-mail</label>
                            <input type="email" class="form-control" id="Email" placeholder="Digite o seu E-mail">
                        </div>

                        <div class="form-group">
                            <label for="Telefone">Telefone</label>
                            <input type="tel" class="form-control" id="Telefone" placeholder="(00)0000-0000">
                        </div>


                        <div class="form-group">
                            <label for="Assunto">Assunto</label>
                            <input type="text" class="form-control" id="Assunto" placeholder="Digite o Assunto">
                        </div>

                        <div class="form-group">
                            <label for="Mensagem">Mensagem</label>
                            <textarea class="form-control" id="Mensagem" placeholder="Digite a Mensagen" cols="30" rows="2"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-danger">Enviar</button>
    
    
    



                    </form>
                </div>
            </div>
        </div>
@endsection
        