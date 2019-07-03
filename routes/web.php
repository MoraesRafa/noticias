<?php

Route::get('/',function(){
    return view('home.index');
});
Route::get('/noticias',function(){
    return view('home.noticias');
});
Route::get('/noticias/visualizar',function(){
    return view('home.visualizar');
});
Route::get('/contato',function(){
    return view('home.contato');
});
Route::get('/admin', function(){
    return view('admin.home.index');
});
Route::get('/admin/noticias', function(){
    return view('admin.noticias.index');
});
Route::get('/admin/noticias/cadastrar', function(){
    return view('admin.noticias.cadastrar');
});
Route::get('/admin/noticias/editar', function(){
    return view('admin.noticias.editar');
});
Route::get('/admin/noticias/visualizar', function(){
    return view('admin.noticias.visualizar');
});

