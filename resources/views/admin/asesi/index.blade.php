@extends('layouts.adminDashboard')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg shadow-sm mb-6">
        <div class="w-full">
            <div class="mb-4">
                <!-- Breadcrumb -->
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-indigo-600 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Asesi
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#" class="ml-1 text-gray-700 hover:text-indigo-600 transition-colors md:ml-2">
                                    Asesor
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-700 font-semibold md:ml-2" aria-current="page">
                                    Admin
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <!-- Action Bar -->
            <div class="sm:flex justify-between items-center">
                <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                    <!-- Search Box -->
                    <form class="relative" action="#" method="GET">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" name="search" id="users-search"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 p-2.5 transition-all"
                                placeholder="Search for users" value="{{ request('search') }}">
                        </div>
                    </form>

                    <!-- User Stats -->
                    <div class="bg-white py-2 px-4 rounded-lg shadow-sm border border-indigo-100 flex items-center">
                        <div class="w-2 h-8 bg-indigo-500 rounded-full mr-3"></div>
                        <div>
                            <p class="text-xs text-gray-500 uppercase">Total Users</p>
                            <p class="text-xl font-bold text-indigo-700">{{ $userCount['user'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('admin.asesi.create') }}">
                        <button class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 transition-colors shadow-sm"
                            data-popover-target="popover-addUser" data-popover-placement="bottom">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Add user
                        </button>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:ring-indigo-300 transition-colors shadow-sm"
                        data-popover-target="popover-export" data-popover-placement="bottom">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path>
                        </svg>
                        Export
                    </a>
                    <div class="relative">
                        <button class="p-2 text-gray-600 bg-white rounded-lg hover:bg-gray-50 hover:text-gray-900 border border-gray-300 focus:ring-4 focus:ring-indigo-300 transition-colors shadow-sm"
                            data-dropdown-toggle="dropdownUser">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                            </svg>
                        </button>
                    </div>
                    <button class="p-2 text-red-600 bg-white rounded-lg hover:bg-red-50 hover:text-red-700 border border-gray-300 focus:ring-4 focus:ring-red-300 transition-colors shadow-sm"
                        data-popover-target="popover-delete" data-popover-placement="bottom"
                        data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- User Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gradient-to-r from-indigo-600 to-blue-500">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            No HP
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Instansi
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Created At
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Last Seen
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-4 py-3 text-xs font-medium text-left text-white uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($userProfile as $index => $user)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <!-- Row Number -->
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $loop->iteration }}
                            </td>

                            <!-- User Info -->
                            <td class="px-4 py-3 whitespace-nowrap">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover border-2 border-indigo-100" 
                                            src="{{ asset('/storage/' . $user->profile_image) }}" 
                                            alt="Profile image">
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $user->user->name }}</div>
                                        <div class="text-xs text-gray-500">{{ $user->user->email }}</div>
                                    </div>
                                </div>
                            </td>

                            <!-- Phone -->
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $user->no_wa }}
                            </td>

                            <!-- Institution -->
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 max-w-xs truncate">
                                {{ $user->instansi }}
                            </td>

                            <!-- Gender -->
                            <td class="px-4 py-3 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->jenis_kelamin === 'L' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                    {{ $user->jenis_kelamin === 'L' ? 'Laki Laki' : 'Perempuan' }}
                                </span>
                            </td>

                            <!-- Created At -->
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $user->user->created_at->format('d-m-Y') }}
                            </td>

                            <!-- Last Seen -->
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ $user->user->last_seen ? $user->user->last_seen->diffForHumans() : 'Never logged in' }}
                            </td>

                            <!-- Status -->
                            <td class="px-4 py-3 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>

                            <!-- Actions -->
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex space-x-2">
                                    <!-- View -->
                                    <a href="#" class="p-2 text-amber-600 bg-amber-50 rounded-md hover:bg-amber-100 transition-colors" title="View Details">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    
                                    <!-- Edit -->
                                    <a href="#" class="p-2 text-indigo-600 bg-indigo-50 rounded-md hover:bg-indigo-100 transition-colors" title="Edit User">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>
                                    
                                    <!-- Delete -->
                                    <a href="#" class="p-2 text-red-600 bg-red-50 rounded-md hover:bg-red-100 transition-colors" 
                                       title="Delete User" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $userProfile->links() }}
    </div>

    <!-- Delete Modal -->
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow-lg">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="mb-5 text-lg font-medium text-gray-800">Apakah anda yakin ingin delete all asesi?</h3>
                    <p class="mb-5 text-sm text-gray-500">Tindakan ini tidak dapat dikembalikan dan akan menghapus semua data pengguna secara permanen.</p>
                    <div class="flex justify-center space-x-3">
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors">
                            <a href="#">
                                Yes, Saya yakin
                            </a>
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-700 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 border border-gray-300 rounded-lg text-sm font-medium px-5 py-2.5 focus:z-10 transition-colors">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Statistics Dropdown -->
    <div id="dropdownUser" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-48 border border-gray-200">
        <div class="px-4 py-3 text-sm text-gray-900 border-b">
            <div class="font-medium">User Statistics</div>
        </div>
        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between items-center">
                        <span>Non Level</span>
                        <span class="font-semibold text-indigo-600">42</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between items-center">
                        <span>Level A</span>
                        <span class="font-semibold text-indigo-600">24</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between items-center">
                        <span>Level B</span>
                        <span class="font-semibold text-indigo-600">18</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                    <div class="flex justify-between items-center">
                        <span>Level C</span>
                        <span class="font-semibold text-indigo-600">9</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- Popovers -->
    <div data-popover id="popover-delete" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
        <div class="px-3 py-2 bg-red-50 border-b border-gray-200 rounded-t-lg">
            <h3 class="font-semibold text-red-600">Delete All Users</h3>
        </div>
        <div class="px-3 py-2">
            <p><strong class="text-red-500">Warning!!</strong> Tindakan ini akan menghapus semua pengguna dari sistem.</p>
        </div>
        <div data-popper-arrow></div>
    </div>

    <div data-popover id="popover-addUser" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
        <div class="px-3 py-2 bg-indigo-50 border-b border-gray-200 rounded-t-lg">
            <h3 class="font-semibold text-indigo-600">Add Users</h3>
        </div>
        <div class="px-3 py-2">
            <p>Tindakan ini akan menambahkan users baru kedalam database.</p>
        </div>
        <div data-popper-arrow></div>
    </div>

    <div data-popover id="popover-export" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
        <div class="px-3 py-2 bg-blue-50 border-b border-gray-200 rounded-t-lg">
            <h3 class="font-semibold text-blue-600">Export Asesi</h3>
        </div>
        <div class="px-3 py-2">
            <p>Tindakan ini akan membuat file excel dari data asesi.</p>
        </div>
        <div data-popper-arrow></div>
    </div>
    {{-- popOver Delete --}}
    {{-- <x-popover title="Delete All Users" id="popover-delete">
        <strong class="text-red-500">Warning!!</strong>
        <p>Tindakan Ini akan menghapus semua pengguna dari sistem.</p>
    </x-popover> --}}

    {{-- popOver addUser --}}
    {{-- <x-popover title="Add Users" id="popover-addUser">
        <p>Tindakan Ini akan menambahkan users baru kedalam database.</p>
    </x-popover> --}}

    {{-- popOver Export --}}
    {{-- <x-popover title="Export Asesi" id="popover-export">
        <p>Tindakan Ini akan membuat file excel dari data asesi.</p>
    </x-popover> --}}
@endsection
