@extends('layout.admin')

@section('conteudo')
           
           <div class="container">
               <div class="row mt-4">
                   <div class="col-12 ">
                       <h2>Cadastrar Notícia</h2>

                       <form action="#" method="POST"class="mt-4" >
                               
                           <div class="form-group row">
                               <label for="titulo" class="col-1 col-form-label text-right" >Titulo</label>
                                   <div class="col-8">
                                       <input type="text" class="form-control" id="titulo" >
                                   </div>
                           </div>

                           <div class="form-group row">
                                   <label for="subtitulo" class="col-1 col-form-label text-right" >Subtitulo</label>
                                       <div class="col-8">
                                           <input type="text" class="form-control" id="subtitulo" >
                                       </div>
                           </div>                               
                           
                           <div class="form-group row">
                                   <label for="descricao" class="col-1 col-form-label text-right">Descrição</label>
                                       <div class="col-8">
                                           <textarea class="form-control" name="Descricao" id="descricao" cols="30" rows="2" ></textarea>
                                       </div>
                           </div>

                           <div class="form-group row">
                                   <label for="status" class="col-1 col-form-label text-right">Status</label>
                                       <div class="col-4">
                                           <select id="status" class="form-control">
                                               <option>Não Publicado</option>
                                             </select>
                                       </div>
                           </div>                       

                                
                           <p>
                               <button type="submit" class="btn btn-danger">Enviar</button>
                              <button type="button" class="btn btn-secondary">Cancelar</button>
                           
                           </p>
                           
                       </form>

                   </div>
               </div>
           </div>

@endsection