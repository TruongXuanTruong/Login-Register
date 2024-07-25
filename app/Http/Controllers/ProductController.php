<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('product'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) //kiểm tra xem trong $request có file hay không
        {
            $img = $request->image;
            //lấy tên file
            $imgNew =  $img->getClientOriginalName();
            $img->move('image/products', $imgNew); //upload file vào thư mục public/images
            // Lưu tên ảnh trên DB
            $input['image'] = $imgNew;
        } else {
            echo "Bạn chưa có file";
        }

        // dd($input);
        $prod = new Product();
        $prod->title = $input['title'];
        $prod->price = $input['price'];
        $prod->product_code = $input['product_code'];
        $prod->description = $input['description'];
        $prod->image = $input['image'];
        $prod->type_products = $input['type_products'];
        $prod->save();

        return redirect()->route('admin/products')->with('Thành Công', 'Đã thêm sản phẩm thành công');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }
    public function update(Request $request, string $id)
    {
        $input = $request->all();


        $product = Product::findOrFail($id);


        $product->title = $input['title'];
        $product->price = $input['price'];
        $product->product_code = $input['product_code'];
        $product->description = $input['description'];
        $product->image = $input['image'];
        $product->type_products = $input['type_products'];
        $product->update();

        return redirect()->route('admin/products')->with('Thành Công', 'Đã cập nhật sản phẩm thành công');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin/products')->with('success', 'Đã xóa sản phẩm thành công');
    }
}
