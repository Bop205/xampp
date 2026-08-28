<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product = [
            [
                "id" => 1,
                "name" => "Laptop Asus",
                "price" => 50000
            ],
            [
                "id" => 2,
                "name" => "Laptop Asus Vivobook",
                "price" => 40000
            ],
            [
                "id" => 3,
                "name" => "Laptop Dell",
                "price" => 45000
            ],
            [
                "id" => 4,
                "name" => "Laptop HP",
                "price" => 35000
            ]
        ];

        return response()->json($product);
    }

    public function show($id)
    {
        $product = [
            [
                "id" => 1,
                "name" => "Laptop Asus",
                "price" => 50000
            ],
            [
                "id" => 2,
                "name" => "Laptop Asus Vivobook",
                "price" => 40000
            ],
            [
                "id" => 3,
                "name" => "Laptop Dell",
                "price" => 45000
            ],
            [
                "id" => 4,
                "name" => "Laptop HP",
                "price" => 35000
            ]
        ];


        foreach ($product as $item) {

            if ($item["id"] == $id) {
                return response()->json($item);
            }
        }


        return response()->json([
            "message" => "Không tìm thấy sản phẩm"
        ], 404);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            "message" => "Cập nhật sản phẩm thành công",
            "id" => $id,
            "data" => $request->all()
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            "message" => "Xóa sản phẩm thành công",
            "id" => $id
        ]);
    }
}
