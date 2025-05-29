<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $req)
    {
        $title = $req->title;
        $price = $req->price;
        $img = $req->image;

        $res = DB::table('products')->insert(
            [
                'title' => $title,
                'price' => $price,
                'imgurl' => $img
            ]
        );

        if ($res) {
            echo "Product Inserted Sucessfully";
        } else {
            echo "Failed";

        }
    }
    public function fetchProducts()
    {
        $res = DB::table('products')->get();
        if ($res) {
            return view('read', ['data' => $res]);
        } else {
            echo "Error";
        }
    }
    public function editProduct(Request $req, $id)
    {
        $title = $req->title;
        $price = $req->price;
        $img = $req->img;

        $res = DB::table('products')->where(
            'id',
            $id
        )->update([
                    'title' => $title,
                    'price' => $price,
                    'imgurl' => $img
                ]);
    }
}
