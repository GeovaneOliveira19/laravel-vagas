<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Vagas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Todas as vagas
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Vagas::all()
    ]);
});

//Mostrar unica vaga
Route::get('/vagas/{id}', function($id){
    return view('vagas',[
        'vaga' => Vagas::find($id)
    ]);
});

Route::get('/hello', function (){
    return response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id){
    ddd($id);
    return response('Post '.$id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request){
    dd($request->name);
});