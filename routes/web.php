<?php

use Illuminate\Support\Facades\Route;

$basePath = 'App\Http\Controllers\\';

Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', function (){

});

Route::post('contato', function (){

});

Route::put('contato', function (){

});

Route::delete('contato', function (){

});

//Utilizar mais de um método http em uma rota
Route::match(['get', 'post'], 'sobre', function(){

});

//Utilizar todos os métodos http
Route::any('todos', function(){
    //Gerar uma url
    $url = url('nova');
    return "Todos!" .$url;
});

//Receber parâmetros via rota
Route::get('artigo/{id}', function ($id){
    return "Artigo id: {$id}";
});

//Receber parâmetros opcionais via rota
Route::get('produto/{id}', function ($id = null){
    return "Artigo id: {$id}";
});

//Apelidos para rotas
Route::get('teste', ['as' => 'detalhe', function (){
    return "Teste";
}]);

//Links
Route::get('link', ['as' => 'link', function (){
    return 'Link <a href="'.route('detalhe').'">Detalhe</a>';
}]);

//Grupo de rotas
Route::group(['prefix'=>'admin'], function(){
    Route::get('contato', function (){
        return 'Admin contato';
    });

    Route::get('sobre', function (){

    });
});

//Definindo Rota que passa pelo Controller (@nome do método da Controller)
Route::get('aluno', $basePath.'Aluno\AlunoController@index');

//Definindo apelido para a rota do Controller
Route::get('livro/lista',['uses'=> $basePath.'LivroController@index', 'as'=>'livro.index']);

Route::get('home', function() {
    $usuarios = array(
        ["nome"=> "Gustavo"],
        ["nome"=> "Ana"],
        ["nome"=> "Cecilia"],
        ["nome"=> "Rodrigo"],
    );

    $livros = [];

    return view('home', compact('usuarios', 'livros'));
});

Route::get('/produto', $basePath.'ProdutoController@getIndex');

Route::get('usuario', ['uses'=>$basePath.'UsuarioController@index', 'as'=>'usuario']);



