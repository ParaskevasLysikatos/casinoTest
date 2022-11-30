<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\CasinoGame;
use App\Models\Category;
use App\Models\Theme;
use App\Models\Feature;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcomePage(Request $data)
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

   }

}