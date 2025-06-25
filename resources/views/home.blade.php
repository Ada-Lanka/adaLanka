<!-- resources/views/home.blade.php -->
@extends('layouts.MainLayout')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8 text-center">Welcome to Ada Lanka</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 transition-colors duration-200">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">About Us</h2>
            <p class="text-gray-600 dark:text-gray-300">Learn more about Ada Lanka and our mission to provide excellent services.</p>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 transition-colors duration-200">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Our Services</h2>
            <p class="text-gray-600 dark:text-gray-300">Discover the wide range of services we offer to meet your needs.</p>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-700 transition-colors duration-200">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Contact</h2>
            <p class="text-gray-600 dark:text-gray-300">Get in touch with us for any inquiries or support you may need.</p>
        </div>
    </div>

    <div class="bg-gradient-to-r from-purple-500 to-pink-500 dark:from-purple-700 dark:to-pink-700 p-8 rounded-lg text-white text-center transition-colors duration-200">
        <h2 class="text-2xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="mb-6">Join us today and experience the difference Ada Lanka can make.</p>
        <button class="bg-white text-purple-600 dark:bg-gray-800 dark:text-purple-400 px-6 py-2 rounded-md font-semibold hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
            Learn More
        </button>
    </div>
</div>
@endsection