@extends('arsip.index')

@section('categories')
    <div class="overflow-x-auto sm:rounded-sm mt-5 h-64">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-gray-700 uppercase bg-gray-700 text-white sticky top-0">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center block">
                        Category name
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="h-auto overflow-y-auto">
                @foreach ($categories as $category)
                    <tr class="bg-gray-200 hover:bg-gray-50 dark:hover:bg-gray-400">
                        <th scope="row" class="px-4 py-2 whitespace-nowrap">
                            <p class="font-bold text-gray-900">{{ $category->category_name }}</p>
                            <span class="text-xs font-normal">( {{ $category->category_code }} )</span>
                        </th>
                        <td class="px-3 py-4 text-right flex gap-2">
                            <form action="{{ route('category.edit', $category->id) }}" method="GET">
                                @csrf
                                <button type="submit"
                                    class="edit-button font-bold bg-amber-500 text-white p-1 rounded hover:underline">
                                    Edit
                                </button>
                            </form>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="delete-button font-bold text-blue-600 text-white bg-red-600 p-1 rounded hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
