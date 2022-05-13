<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoreController extends Controller
{
    public function getAll()
    {
        $response = Http::get('https://fakestoreapi.com/products');
        return $response->json();
    }
    public function getSingle($id)
    {
        $response = Http::get('https://fakestoreapi.com/products/' . $id);
        return $response->json();
    }
    public function getLimit($limit)
    {
        $response = Http::get('https://fakestoreapi.com/products?limit=' . $limit);
        return $response->json();
    }
    public function getLimitSort($limit, $sort)
    {
        $response = Http::get('https://fakestoreapi.com/products?limit=' . $limit . '&&sort=' . $sort);
        return $response->json();
    }
    public function addProduct(Request $request)
    {
        $response = Http::post('https://fakestoreapi.com/products', [
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
        ]);
        return $response->json();
    }
}
