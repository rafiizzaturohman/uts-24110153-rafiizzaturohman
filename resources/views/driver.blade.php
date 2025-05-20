@extends('partials.header')

<nav class="bg-gray-700 text-white font-bold py-4 px-[20rem]">
        <div class="flex flex-row justify-between items-center">
            <a href="/" class="text-2xl">Laravel</a>

            <div class="flex flex-row space-x-3 p-3 items-center font-semibold">
                <a href="{{ route('login') }}"
                    class="hover:text-blue-300 tracking-wide font-semibold transition ease-in-out duration-600">Log
                    In</a>
                <a href="{{ route('register') }}"
                    class="hover:text-amber-500 tracking-wide font-semibold transition ease-in-out duration-600">Register</a>
            </div>
        </div>
    </nav>

<div class="max-w-7xl w-auto m-auto min-h-screen">
    <div class="my-6 mx-auto space-y-8">
        <div class="flex flex-row justify-between items-center text-white">
            <h1 class="text-white font-bold text-2xl">Data Driver</h1>
    
            <a href="{{ route('createDriver') }}" class="text-gray-200 font-bold text-md bg-gray-600 hover:text-gray-400 hover:bg-gray-800 transition ease-in-out duration-200 px-2 py-1 rounded-xs">Add Data</a>
        </div>
    </div>

    <div class="bg-gray-600 p-2">
        <table class="w-full text-md text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Driver Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                phone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Order Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @foreach ($drivers as $items)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $items->kd_driver }} 
                                </th>
                                <td class="px-6 py-4">
                                    {{ $items->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $items->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $items->order_num }}
                                </td>
                                <td class="px-6 py-4 space-x-2 flex flex-row">
                                    <a href="{{ route('editDriver', $items->id) }}"
                                    class="hover:text-emerald-500 tracking-wide font-semibold transition ease-in-out duration-600">Edit</a>
                                    
                                    <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('destroy', $items->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="{{ $items->id }}-delete-btn"
                                            class="hover:text-red-500 tracking-wide font-semibold transition ease-in-out duration-600 cursor-pointer">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (session('success'))
                    <div class="my-4 text-center">
                        <p class="font-semibold text-emerald-400 tracking-wide">{{ session('success') }}</p>
                    </div>
                @else
                    <div class="my-4 text-center">
                        <p class="font-semibold text-red-400 tracking-wide">{{ session('failed') }}</p>
                    </div>              
                @endif
    </div>
</div>

@extends('partials.footer')
