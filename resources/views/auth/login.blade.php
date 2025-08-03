@extends('Layouts.auth')

@section('content')
<div class="bg-white shadow-md rounded px-8 py-6">
    <h2 class="text-2xl font-semibold text-center mb-4">Admin Login</h2>

    @if (session('error'))
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Email or Username</label>
            <input type="text" name="login" value="{{ old('login') }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('login')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label>

        <div class="flex items-center justify-between">
            <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</button>
        </div>
    </form>
</div>
@endsection
