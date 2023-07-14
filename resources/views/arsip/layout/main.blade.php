<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body>

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <div class="profile flex items-center gap-4 mb-10">
                <img class="rounded-full" src="/images/pp.jpeg" alt="profile picture" width="80">
                <div class="text-white	">
                    <h1 class="font-bold text-xl">Welcome</h1>
                    <p>User!</p>
                </div>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/arsip"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/arsip/dokumen-masuk"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="20px" height="20px" viewBox="0 -0.5 17 17" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                            <g id="SVGRepo_iconCarrier">
                                <title>844</title>
                                <defs></defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(1.000000, 0.000000)">
                                        <path
                                            d="M5.198,4.256 L7.388,6.769 C7.703,7.083 8.214,7.083 8.531,6.769 L10.72,4.256 C11.034,3.941 11.083,3.38 10.769,3.066 L8.965,3.066 L8.965,1.144 C8.965,0.585 8.532,0.134 7.997,0.134 C7.462,0.134 7.028,0.585 7.028,1.144 L7.028,3.066 L5.247,3.066 C4.932,3.381 4.883,3.94 5.198,4.256 L5.198,4.256 Z"
                                            fill="currentColor"></path>
                                        <rect x="6" y="10" width="4.031" height="1.031"
                                            fill="currentColor"></rect>
                                        <path
                                            d="M13.993,1.006 L10.031,1.006 L10.031,1.981 L13.177,1.981 L14.54,9.01 L1.505,9.01 L2.912,1.981 L5.969,1.981 L5.969,1.006 L2.073,1.006 L0.013,9.761 L0.013,13.931 C0.013,15.265 0.485,15.959 1.817,15.959 L14.097,15.959 C15.343,15.959 15.982,15.432 15.982,13.848 L15.982,9.761 L13.993,1.006 L13.993,1.006 Z M10.016,11 L5.985,11 L5.985,9.969 L10.016,9.969 L10.016,11 L10.016,11 Z"
                                            fill="currentColor"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap">Incoming Documents</span>
                    </a>
                </li>
                <li>
                    <a href="/arsip/dokumen-keluar"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="20px" height="20px" viewBox="0 -0.5 17 17" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                            <g id="SVGRepo_iconCarrier">
                                <title>843</title>
                                <defs></defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(1.000000, 0.000000)">
                                        <path
                                            d="M10.768,2.757 L8.579,0.244 C8.264,-0.07 7.753,-0.07 7.436,0.244 L5.247,2.757 C4.932,3.072 4.884,3.633 5.198,3.947 L7,3.947 L7,5.869 C7,6.428 7.434,6.879 7.969,6.879 C8.504,6.879 8.938,6.428 8.938,5.869 L8.938,3.947 L10.719,3.947 C11.034,3.632 11.083,3.072 10.768,2.757 L10.768,2.757 Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M13.993,1.006 L10.703,1.006 L11.594,1.981 L13.177,1.981 L14.54,9.01 L1.505,9.01 L2.912,1.981 L4.594,1.981 L5.36,1.006 L2.073,1.006 L0.013,9.761 L0.013,13.931 C0.013,15.265 0.485,15.959 1.817,15.959 L14.097,15.959 C15.343,15.959 15.982,15.432 15.982,13.848 L15.982,9.761 L13.993,1.006 L13.993,1.006 Z M10.016,11 L5.985,11 L5.985,9.969 L10.016,9.969 L10.016,11 L10.016,11 Z"
                                            fill="currentColor"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap">Outgoung Documents</span>
                    </a>
                </li>
                <li>
                    <a href="/arsip/user"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="20px" height="20px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(1.000000, 0.000000)" fill="currentColor">
                                    <path
                                        d="M0.982,5.073 L2.007,15.339 C2.007,15.705 2.314,16 2.691,16 L10.271,16 C10.648,16 10.955,15.705 10.955,15.339 L11.98,5.073 L0.982,5.073 L0.982,5.073 Z M7.033,14.068 L5.961,14.068 L5.961,6.989 L7.033,6.989 L7.033,14.068 L7.033,14.068 Z M9.033,14.068 L7.961,14.068 L8.961,6.989 L10.033,6.989 L9.033,14.068 L9.033,14.068 Z M5.033,14.068 L3.961,14.068 L2.961,6.989 L4.033,6.989 L5.033,14.068 L5.033,14.068 Z"
                                        class="si-glyph-fill"></path>
                                    <path
                                        d="M12.075,2.105 L8.937,2.105 L8.937,0.709 C8.937,0.317 8.481,0 8.081,0 L4.986,0 C4.586,0 4.031,0.225 4.031,0.615 L4.031,2.011 L0.886,2.105 C0.485,2.105 0.159,2.421 0.159,2.813 L0.159,3.968 L12.8,3.968 L12.8,2.813 C12.801,2.422 12.477,2.105 12.075,2.105 L12.075,2.105 Z M4.947,1.44 C4.947,1.128 5.298,0.875 5.73,0.875 L7.294,0.875 C7.726,0.875 8.076,1.129 8.076,1.44 L8.076,2.105 L4.946,2.105 L4.946,1.44 L4.947,1.44 Z"
                                        class="si-glyph-fill"></path>
                                </g>
                            </g>
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap">Trash</span>
                    </a>
                </li>
                <li>
                    <a href="/arsip/sign-out"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 bg-slate-300" style="height: 100vh">
        @yield('content')


    </div>




    @stack('script')

</body>

</html>
