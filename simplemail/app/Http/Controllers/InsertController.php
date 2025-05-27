<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    public function insertIntoDB(Request $req)
    {
        $name = $req->name;
        $age = $req->age;

        DB::table('insert')->insert(
            [
                'name' => $name,
                'age' => $age,
            ]
        );

        return view('insert');
    }
}
