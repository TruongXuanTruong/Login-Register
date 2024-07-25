@extends('layouts.app')

@section('title', 'Trang Chủ Danh Sách Sản Phẩm')

@section('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Trang Chủ Danh Sách Sản Phẩm</h1>
        <a href="{{ route('admin/products/create') }}"
            class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Thêm Sản Phẩm</a>
        <hr />
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">STT</th>
                    <th scope="col" class="px-6 py-3">Tiêu Đề</th>
                    <th scope="col" class="px-6 py-3">Giá</th>
                    <th scope="col" class="px-6 py-3">Mã Sản Phẩm</th>
                    <th scope="col" class="px-6 py-3">Miêu Tả</th>
                    <th scope="col" class="px-6 py-3">Hình Ảnh</th>
                    <th scope="col" class="px-6 py-3">Kiểu Sản Phẩm</th>
                    <th scope="col" class="px-6 py-3">Hoạt Động</th>
                </tr>
            </thead>
            <tbody>
                @if ($product->count() > 0)
                    @foreach ($product as $rs)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td>
                                {{ $rs->title }}
                            </td>
                            <td>
                                {{ $rs->price }}
                            </td>
                            <td>
                                {{ $rs->product_code }}
                            </td>
                            <td>
                                {{ $rs->description }}
                            </td>
                            <td>
                                {{ $rs->image }}
                            </td>
                            <td>
                                {{ $rs->type_products }}
                            </td>
                            <td class="w-36">
                                <div class="h-14 pt-5">
                                    <a href="{{ route('admin/products/show', $rs->id) }}" class="text-blue-800">Chi Tiết</a>
                                    |
                                    <a href="{{ route('admin/products/edit', $rs->id) }}"
                                        class="text-green-800 pl-2">Sửa</a> |
                                    <form action="{{ route('admin/products/destroy', $rs->id) }}" method="POST"
                                        onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                        @csrf
                                        @method('DELETE')
                                        <button>Xóa</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Sản Phẩm Không Tồn Tại !</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
