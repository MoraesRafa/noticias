@extends('layout.admin')

@section('conteudo')
 <div class="container">
               <div class="row mt-4">
                   <div class="col-12">
                       <h2>Notícia  <a href="#"  class="btn btn-danger float-right"><i class="fas fa-plus"></i>
                           Adicionar</a></h2>


                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Subtitulo</th>
                                    <th scope="col">Data Publicação</th>
                                    <th scope="col">Ação</th>

                                </tr>
                            
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</th>
                                    <td>Palmeiras não tem mundial</th>
                                    <td>Palmeiras não tem mundial</th>
                                    <td>14/05/2019 22:18</th>
                                    <td><a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </th>
                                </tr>
                            </tbody>

                        </table>

                        <div class="row">
                            <div class="col-12">
                                    <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                              <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                  <span aria-hidden="true">&laquo;</span>
                                                </a>
                                              </li>
                                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                                             <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                  <span aria-hidden="true">&raquo;</span>
                                                </a>
                                              </li>
                                            </ul>
                                          </nav>
                            </div>
                        </div>



                        
                   </div>
               </div>
           </div>


@endsection