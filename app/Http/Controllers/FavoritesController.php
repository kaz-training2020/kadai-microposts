<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //
    // お気に入りに追加
    public function store($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }

    // お気に入りを外す
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
}
