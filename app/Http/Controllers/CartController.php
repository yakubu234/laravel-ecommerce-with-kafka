<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItemsToCart()
    {
    }

    public function removeItemsFromCart()
    {
    }

    public function getAllItems()
    {
        $cartItems = CartItems::inRandomOrder()->limit(20)->get();
    }
}
