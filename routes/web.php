<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

$p = new Post();
$p->title = 'test title';
$p->content = 'test content';
$p->is_feature = 1;
$p->save();

$p = Post::all();
dd($p);

$p = Post::find(1);
dd($p);

$p = Post::where('id', '<', 10)
    ->orderBy('id', 'DESC')
    ->get();
dd($p);
