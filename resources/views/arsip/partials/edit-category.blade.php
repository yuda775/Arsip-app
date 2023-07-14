@extends('arsip.index')

@section('categories')
    <div class="mt-5 bg-white px-4 py-3 rounded drop-shadow-md">
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-4">
                <input type="text" name="category_name" id="category_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs font-medium rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 placeholder-gray-400"
                    autocomplete="off" value="{{ $category->category_name }}" required>
                <input type="text" name="category_code" id="category_code"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs font-medium rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 placeholder-gray-400 mt-1"
                    autocomplete="off" value="{{ $category->category_code }}" required>
            </div>
            <div class="form-group flex flex-column justify-end mt-2 gap-2">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white text-xs font-bold px-2 py-1 rounded">
                    Save
                </button>
                <a href="{{ route('category.index') }}"
                    class="bg-red-500 hover:bg-gray-600 text-white text-xs font-bold px-2 py-1 rounded">Cancel</a>
            </div>
        </form>
    </div>
@endsection
