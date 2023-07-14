<!-- resources/views/arsip/index.blade.php -->
@extends('arsip.layout.main')

@section('content')
    <div class="bg-white px-4 py-5 rounded shadow-md h-full">

        <h1 class="text-2xl font-bold text-gray-700 mb-5">Incoming Documents</h1>

        <div class="flex justify-between align-items-center mb-3">
            <input type="text" id="table-search"
                class="p-2 pl-4 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 focus:ring-blue-500 focus:border-blue-500 bg-slate-200 border-gray-300 placeholder-gray-400 text-gray-600 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Search for items">

            <!-- Tombol untuk membuka modal -->
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded" onclick="openModal()">
                Add Incoming Document
            </button>

            <!-- Modal -->
            <div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-lg w-10/12 p-6">
                    <div class="modal-header border-b-2 pb-2 mb-2">
                        <h2 class="text-2xl font-bold text-gray-700">Add Incoming Document</h2>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <div class="mb-4">
                                    <label for="nomor_surat" class="block mb-1">Nomor Surat</label>
                                    <input type="text" id="nomor_surat" name="nomor_surat"
                                        class="w-full border border-gray-300 rounded p-2" required>
                                </div>
                                <div class="mb-4">
                                    <label for="judul_surat" class="block mb-1">Judul Surat</label>
                                    <input type="text" id="judul_surat" name="judul_surat"
                                        class="w-full border border-gray-300 rounded p-2" required>
                                </div>
                                <div class="mb-4">
                                    <label for="asal_surat" class="block mb-1">Asal Surat</label>
                                    <input type="text" id="asal_surat" name="asal_surat"
                                        class="w-full border border-gray-300 rounded p-2" required>
                                </div>
                                <div class="mb-4">
                                    <label for="keterangan" class="block mb-1">Keterangan</label>
                                    <textarea id="keterangan" name="keterangan" class="w-full border border-gray-300 rounded p-2" required></textarea>
                                </div>
                            </div>
                            <div>
                                <div class="mb-4">
                                    <label for="kategori" class="block mb-1">Kategori</label>
                                    <select id="kategori" name="kategori" class="w-full border border-gray-300 rounded p-2"
                                        required>
                                        <option value="kategori1">Kategori 1</option>
                                        <option value="kategori2">Kategori 2</option>
                                        <option value="kategori3">Kategori 3</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="tanggal_masuk" class="block mb-1">Tanggal Masuk</label>
                                    <input type="date" id="tanggal_masuk" name="tanggal_masuk"
                                        class="w-full border border-gray-300 rounded p-2" required>
                                </div>
                                <div class="mb-4">
                                    <label for="tanggal_diterima" class="block mb-1">Tanggal Diterima</label>
                                    <input type="date" id="tanggal_diterima" name="tanggal_diterima"
                                        class="w-full border border-gray-300 rounded p-2" required>
                                </div>
                                <div class="mb-4">
                                    <label for="file" class="block mb-1">Upload File</label>
                                    <input type="file" id="file" name="file"
                                        class="w-full border border-gray-300 rounded p-2" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-t-2 pt-4 flex justify-end">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="relative overflow-x-auto sm:rounded-lg h-5/6 bg-slate-200">
            <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                <thead class="text-xs text-gray-400 uppercase bg-gray-50 bg-gray-700 sticky top-0">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            <div class="flex items-center">
                                Document Name
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <div class="flex items-center">
                                Document Number
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <div class="flex items-center">
                                Category
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <div class="flex items-center">
                                Date
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="bg-slate-200	 border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Kerjasama PT.Lorem
                        </th>
                        <td class="px-4 py-4 text-gray-900">
                            SK/01/VII/2023
                        </td>
                        <td class="px-4 py-4 text-gray-900">
                            Kerjasama
                        </td>
                        <td class="px-4 py-4 text-gray-900">
                            14-07-2023
                        </td>
                        <td class="px-4 py-4 text-right flex justify-evenly">
                            <a href="#"
                                class="font-medium text-blue-600 text-blue-500 hover:underline mr-5">Edit</a>
                            <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection


@push('script')
    <!-- JavaScript untuk membuka dan menutup modal -->
    <script>
        function openModal() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('myModal').classList.add('hidden');
        }
    </script>
@endpush
