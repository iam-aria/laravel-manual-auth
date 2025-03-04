@extends('layouts.app')

@section('content')
<div class="w-full lg:w-4/12 mx-auto py-40">
    <div class="bg-white shadow p-8 rounded-lg">
        <h1 class="font-medium text-xl mb-5">{{ $title }}</h1>

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="mb-5">
                <label for="name" class="text-sm mb-2 block font-medium">Name</label>
                <input type="text" name="name" id="name" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline">
                @error('name')
                <span class="mt-2 text-red-600 block text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="text-sm mb-2 block font-medium">Email</label>
                <input type="email" name="email" id="email" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline">
                @error('email')
                <span class="mt-2 text-red-600 block text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="text-sm mb-2 block font-medium">Password</label>
                <input type="password" name="password" id="password" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline">
                @error('password')
                <span class="mt-2 text-red-600 block text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="text-sm mb-2 block font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline">
            </div>

            <button type="submit" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white transition-colors duration-200">
                Register
            </button>
        </form>
    </div>
</div>
@endsection
