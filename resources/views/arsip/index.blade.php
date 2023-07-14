<!-- resources/views/arsip/index.blade.php -->
@extends('arsip.layout.main')

@section('content')
    <div class="w-80 bg-white px-4 py-3 rounded drop-shadow-md">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <label for="category_name" class="mb-2 text-2xl font-bold text-gray-700">Document Categories</label>
            <div class="flex gap-2 mt-4">
                <input type="category_name" id="category_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-gray-400"
                    placeholder="Add Category" required>
                <button type="submit">
                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        stroke="#ffffff">

                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22ZM12 8.25C12.4142 8.25 12.75 8.58579 12.75 9V11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H12.75L12.75 15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V12.75H9C8.58579 12.75 8.25 12.4142 8.25 12C8.25 11.5858 8.58579 11.25 9 11.25H11.25L11.25 9C11.25 8.58579 11.5858 8.25 12 8.25Z"
                                fill="#4d69c7" />
                        </g>

                    </svg>
                </button>
            </div>
        </form>



        <div class="relative overflow-x-auto sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-gray-700 uppercase bg-gray-700 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Category name
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white hover:bg-gray-50 dark:hover:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-gray-700">
                            Surat kerja
                        </th>
                        <td class="px-6 py-4 text-right flex gap-3">
                            <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-blue-600 text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-white hover:bg-gray-50 dark:hover:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-gray-700">
                            Surat kerja
                        </th>
                        <td class="px-6 py-4 text-right flex gap-3">
                            <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-blue-600 text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-white hover:bg-gray-50 dark:hover:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-gray-700">
                            Surat kerja
                        </th>
                        <td class="px-6 py-4 text-right flex gap-3">
                            <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-blue-600 text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
@endsection
