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

<div class="my-6 mx-auto w-auto max-w-7xl space-y-8">
    <div class="flex flex-row justify-between items-center">
        <h1 class="text-white font-bold text-2xl">Update Driver</h1>

        <a href="{{ route('driver') }}" class="text-gray-200 font-bold text-md bg-gray-600 hover:text-gray-400 hover:bg-gray-800 transition ease-in-out duration-200 px-2 py-1 rounded-xs">Kembali</a> 
    </div>

    <div class="bg-gray-600 p-3 rounded-sm text-white">
        <form action="{{ route('putDriver', $driver->id) }}" method="POST">

            @csrf
            @method('PUT')
            
            <div class="flex flex-col my-2 space-y-2">
                <label for="kd_driver" class="font-bold tracking-wider">Driver Code</label>
                <input type="text" value="{{ old('kd_driver', $driver->kd_driver) }}" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1.5 focus:border-b-2 focus:border-white" name="kd_driver" id="kd_driver" required>

            </div>
            <div class="flex flex-col my-2 space-y-2">
                <label for="name" class="font-bold tracking-wider">Name</label>
                <input type="text" value="{{ old('name', $driver->name) }}" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1 focus:border-b-2 focus:border-white" name="name" id="name" required>

            </div>
            <div class="flex flex-col my-2 space-y-2">
                <label for="phone" class="font-bold tracking-wider">Phone</label>
                <input type="text" value="{{ old('phone', $driver->phone) }}" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1 focus:border-b-2 focus:border-white" name="phone" id="phone" required>

            </div>
            <div class="flex flex-col my-2 space-y-2">
                <label for="order_num" class="font-bold tracking-wider">Order Number</label>
                <input type="text" value="{{ old('order_num', $driver->order_num) }}" class="border-b-2 border-[#7A8BA2] rounded-md px-2 py-1 focus:border-b-2 focus:border-white" name="order_num" id="order_num" required>

            </div>

            <button class="cursor-pointer my-2 px-2 py-1 rounded-md bg-teal-700 hover:bg-teal-600 transition ease-in-out duration-200 font-bold tracking-wide" type="submit">Update</button>
        </form>
    </div>
</div>

@extends('partials.footer')