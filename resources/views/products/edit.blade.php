@extends('layouts.app')

@section('title', 'Sửa Sản Phẩm')

@section('contents')
    <h1 class="mb-0">Sửa Sản Phẩm</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <form action="{{ route('admin/products/update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Tên Sản Phẩm</label>
                    <div class="mt-2">
                        <input type="text" name="title" id="title" value="{{ $product->title }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Giá</label>
                    <div class="mt-2">
                        <input id="price" name="price" type="text" value="{{ $product->price }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Mã Sản Phẩm</label>
                    <div class="mt-2">
                        <input id="product_code" name="product_code" value="{{ $product->product_code }}" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Mô Tả Sản Phẩm</label>
                    <div class="mt-2">
                        <textarea name="description" placeholder="Descriptoin" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    {{ $product->description }}
                    </textarea>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Hình Ảnh</label>
                    <div class="mt-2">
                        <input id="image" name="image" type="file" value="{{ $product->image }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Kiểu Sản Phẩm</label>
                    <div class="mt-2">
                        <select id="type_products" name="type_products" value="{{ $product->type_products }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">Chọn kiểu sản phẩm</option>
                            <option value="Điện Thoại">Điện Thoại</option>
                            <option value="Máy Tính">Máy Tính</option>
                            <option value="Tivi">Tivi</option>
                        </select>
                    </div>
                    </di>
                    <button type="submit"
                        class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cập Nhật</button>
            </form>
        </div>
    </div>
@endsection
