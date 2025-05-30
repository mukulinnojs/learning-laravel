<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function fetchsingleproduct($id)
    {
        $res = DB::table('products')->where('id', $id)->get();
        return $res;
    }
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
            $res = DB::table('products')->get();
            return view('read', ['data' => $res]);
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

    public function editProduct(Request $req)
    {
        $validated = $req->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'imgurl' => 'nullable|url',
        ]);

        $title = $req->title;
        $price = $req->price;
        $img = $req->image;
        $id = $req->id;

        $res = DB::table('products')->where(
            'id',
            $id
        )->update([
                    'title' => $title,
                    'price' => $price,
                    'imgurl' => $img
                ]);

        if ($res) {
            $dt = DB::table('products')->get();
            return view('read', ['data' => $dt]);

        } else {
            echo "Failed";
        }
    }



    public function deleteProduct($id)
    {
        $res = DB::table('products')->where('id', $id)->delete();
        if ($res) {
            $dt = DB::table('products')->get();
            return view('read', ['data' => $dt]);
        } else {
            echo "Failed";
        }
    }
}
