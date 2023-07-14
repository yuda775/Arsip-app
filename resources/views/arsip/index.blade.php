<!-- resources/views/arsip/index.blade.php -->
@extends('arsip.layout.main')

@section('content')
    <div class="w-2/5 bg-white px-4 py-3 rounded drop-shadow-md h-max">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <label for="category_name" class="mb-2 text-2xl font-bold text-gray-700">Document Categories</label>
            <div class="gap-2 mt-4">
                <input type="text" id="category_name" name="category_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400 mb-1"
                    placeholder="Category Name" autocomplete="off" required>
                <input type="text" id="category_code" name="category_code"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                    placeholder="Category Code" autocomplete="off" required>

                <div class="flex justify-end">
                    <button class="bg-blue-600 text-white font-bold px-4 py-1 mt-2 rounded hover:bg-blue-700"
                        type="submit">
                        Add Category
                    </button>
                </div>
            </div>
        </form>

        @yield('categories')

    </div>
@endsection
