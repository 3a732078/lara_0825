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

$p = Post::find(1);
$p ->title = 'update to title';
$p ->content = 'update to content';
$p ->is_feature = '1';
$p->save();

$p = Post::find(2);
$p->delete();
