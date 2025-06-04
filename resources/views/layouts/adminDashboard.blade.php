<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-...your-integrity-hash..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('assets/img/tlc.png') }}" type="image/png">
    @stack('ckeditor')
    <title>@yield('title', 'TLC')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body>
    <header>
        <nav
            class="fixed top-0 z-50 w-full bg-gradient-to-r from-blue-700 to-indigo-800 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">

                    {{-- logo TLC start --}}
                    <div class="flex items-center justify-start rtl:justify-end">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-kuning focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="#ffffff" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <a href="#"
                            class="flex items-center justify-center bg-white w-8 h-8 rounded-md shadow-lg ms-2 md:me-24">
                            <img src="{{ asset('images/logoTlcPng.png') }}" class="h-8" alt="FlowBite Logo" />
                        </a>
                        {{-- <span class="self-center hidden text-xl font-bold text-white md:block whitespace-nowrap">Testing</span> --}}
                    </div>
                    {{-- logo TLC end --}}

                    <div class="flex items-center">
                        <div class="flex items-center ms-3">
                            {{-- user foto start --}}
                            <div class="pr-2">
                                <button type="button"
                                    class="flex items-center space-x-2 py-1 px-2 text-sm bg-gray-800 rounded-md hover:bg-gray-700 focus:ring-4 focus:ring-indigo-500 dark:focus:ring-gray-600 transition-all duration-300 ease-in-out"
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <!-- Image Profile -->
                                    @if (auth()->user()->hasRole('admin') && auth()->user()->adminsProfile && auth()->user()->adminsProfile->profile_image)
                                        <img src="{{ asset('storage/' . auth()->user()->adminsProfile->profile_image) }}"
                                            class="w-[40px] h-[40px] rounded-full object-cover shadow-md border-2 border-indigo-500 transform transition-all duration-300 ease-in-out hover:scale-105">
                                    @else
                                        <img src="{{ asset('img/blank_profile.png') }}"
                                            class="w-[40px] h-[40px] rounded-full object-cover shadow-md border-2 border-gray-500 transform transition-all duration-300 ease-in-out hover:scale-105">
                                    @endif
                                    <!-- User Email -->
                                    <div class="text-left">
                                        <p class="text-sm text-white">
                                            <span>Welcome,</span>
                                            {{ auth()->user()->name }}
                                        </p>
                                    </div>
                                </button>
                            </div>
                            {{-- user foto end --}}

                            {{-- toggle user menu start --}}
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                                id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                        {{ auth()->user()->email }}
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="{{ route('admin.settings.edit') }}"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 font-medium hover:bg-gray-100"
                                            role="menuitem">
                                            <i class="fa-solid fa-gear mr-2 text-gray-500"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="flex items-center w-full text-left px-4 py-2 text-sm text-red-400 font-medium hover:bg-gray-100"
                                                role="menuitem">
                                                <i class="fa-solid fa-right-from-bracket mr-2 text-red-500"></i>
                                                Log Out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            {{-- toggle user menu end --}}
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-700 border-gray-200"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-700">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FBCB04" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button
                        class="flex items-center w-full p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" type="button">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FBCB04" viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex justify-start ms-3 whitespace-nowrap">Users</span>
                        <div class="ml-auto">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </button>

                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('admin.asesi.index') }}"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-user-graduate"></i>
                                <p>Asesi</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.asesor.index') }}"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-chalkboard-teacher"></i>
                                <p>Asesor</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.admins.index') }}"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-user-shield"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li>
                    <button
                        class="flex items-center w-full p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group"
                        aria-controls="dropdown-level" data-collapse-toggle="dropdown-level" type="button">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FBCB04"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex justify-start ms-3 whitespace-nowrap">Levels</span>
                        <div class="ml-auto">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </button>

                    <ul id="dropdown-level" class="hidden py-2 space-y-2">
                        {{-- Level A --}}
                        <li>
                            <a href="{{ route('admin.level.a.index') }}"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-layer-group"></i>
                                <p>A</p>
                            </a>
                        </li>
                        {{-- Level B --}}
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-layer-group"></i>
                                <p>B</p>
                            </a>
                        </li>

                        {{-- Level C --}}
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-layer-group"></i>
                                <p>C</p>
                            </a>
                        </li>

                        {{-- Settings --}}
                        <li>
                            <a href="{{ route('admin.level.settings.index') }}"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-solid fa-gear"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button
                        class="flex items-center w-full p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group"
                        aria-controls="dropdown-payment" data-collapse-toggle="dropdown-payment" type="button">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FBCB04"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex justify-start ms-3 whitespace-nowrap">Payments</span>
                        <div class="ml-auto">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </button>

                    <ul id="dropdown-payment" class="hidden py-2 space-y-2">

                        {{-- Transaksi --}}
                        <li>
                            <a href="{{ route('admin.payments.index') }}"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-money-check-dollar"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>

                        {{-- Price --}}
                        <li>
                            <a href="#  "
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-sack-dollar"></i>
                                <p>Price</p>
                            </a>
                        </li>

                        {{-- Settings --}}
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-red-500 hover:text-kuning dark:text-white dark:hover:bg-gray-700">
                                <i class="mr-2 fa-solid fa-gear"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ Route('admin.resulta.index') }}"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="#FBCB04" viewBox="0 0 24 24">
                            <path d="M3 3h7v7H3V3zm11 0h7v7h-7V3zM3 14h7v7H3v-7zm11 0h7v7h-7v-7z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Result Exam A</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.questions.index') }}"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="#FBCB04" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2a10 10 0 100 20 10 10 0 000-20zm.25 15a1.25 1.25 0 11-2.5 0 1.25 1.25 0 012.5 0zm-1-3.5a1 1 0 01-1-1v-.25c0-.66.26-1.3.73-1.77l.84-.84a1.73 1.73 0 10-2.45-2.45 1 1 0 11-1.41-1.41 3.73 3.73 0 115.27 5.27l-.84.84a.75.75 0 00-.22.53V12a1 1 0 01-1 1z"
                                clip-rule="evenodd" />
                        </svg>


                        <span class="flex-1 ms-3 whitespace-nowrap">Questions</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="#FBCB04" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M3 11h18M3 15h18m-9-4v8m-8 0h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Certificate</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-gray-800">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FBCB04"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Dashboard Image</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.news.index') }}"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-gray-800">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FBCB04"
                            viewBox="0 0 24 24">
                            <path
                                d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm-9 12V8l6 4-6 4z" />
                            <path d="M4 7h16v2H4zm0 4h5v2H4zm0 4h5v2H4z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Portal Berita</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#FBCB04"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main>
        <!-- main content here -->
        <div class="p-4 mt-8">
            @yield('content')
        </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @stack('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts()
</body>

</html>
