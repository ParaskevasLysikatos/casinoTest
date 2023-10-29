<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\CasinoGame;
use App\Models\Category;
use App\Models\Theme;
use App\Models\Feature;
use Illuminate\Http\Request;

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


Route::get('/', function (Request $data)
{
    $categories=Category::query()->select('title')->whereNotNull('title')->distinct()->get();
    $themes=Theme::query()->select('title')->whereNotNull('title')->distinct()->get();
    $features=Feature::query()->select('title')->whereNotNull('title')->distinct()->get();

    $term = $data['search'];

    $casino_games = CasinoGame::query();

    $new_casino_games=CasinoGame::query()->with('categories')->whereHas('categories', function ($q){
        $q->where('title','New');
    })->get();

    if ($term) {
        $casino_games = $casino_games->where('name', 'like', "%" . $term . "%");
    }

    $termCat = $data['categories'];
     $termThm = $data['themes'];
     $termFeat = $data['features'];
     if($termCat || $termThm || $termFeat){
        $casino_games = $casino_games->whereHas('categories', function ($q) use ($termCat){
        $q->where('title',$termCat);
        })->orWhereHas('themes', function ($q) use ($termThm){
        $q->where('title',$termThm);
        })->orWhereHas('features', function ($q) use ($termFeat){
        $q->where('title', $termFeat);
        });
     }


       $casino_games=$casino_games->where('active',1)->get();

    return view('welcome', ['categories' => $categories,
                            'themes'=>$themes,
                            'features'=>$features,
                            'casino_games'=>$casino_games,
                            'new_games'=>$new_casino_games]);

})->name('welcome');

//Route::get('/search', [Controller::class, 'welcomePage'])->name('search');