<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = [
            [
                "id" => 1,
                "name" => "Pizza",
                "price" => 50000
            ],
            [
                "id" => 2,
                "name" => "Hamburger",
                "price" => 40000
            ],
            [
                "id" => 3,
                "name" => "Coca Cola",
                "price" => 15000
            ]
        ];

        return response()->json($foods);
    }

    public function show($id)
    {
        $foods = [
            [
                "id" => 1,
                "name" => "Pizza",
                "price" => 50000
            ],
            [
                "id" => 2,
                "name" => "Hamburger",
                "price" => 40000
            ],
            [
                "id" => 3,
                "name" => "Coca Cola",
                "price" => 15000
            ]
        ];


        foreach ($foods as $food) {

            if ($food["id"] == $id) {
                return response()->json($food);
            }
        }


        return response()->json([
            "message" => "Food not found"
        ], 404);
    }
    public function update(Request $request, $id)
    {
        return response()->json([
            "message" => "Food updated successfully",
            "id" => $id,
            "data" => $request->all()
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            "message" => "Food deleted successfully",
            "id" => $id
        ]);
    }
}
