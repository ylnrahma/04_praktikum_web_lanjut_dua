<?php

namespace App\Http\Controllers;
 
use App\Models\Healing;
use Illuminate\Http\Request;


class WishlistController extends Controller
{
    public function index(){
        $wishlist = healing::all();
        return view('wishlist', compact('wishlist'));
    }
}
