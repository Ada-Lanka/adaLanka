@extends('layouts.MainLayout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Welcome to Ada Lanka</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Feature 1</h2>
            <p class="text-gray-600 dark:text-gray-300">This is a sample feature description. The navbar should be visible at the top of the page.</p>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Feature 2</h2>
            <p class="text-gray-600 dark:text-gray-300">Test the mobile menu by resizing your browser window or viewing on mobile.</p>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Dark Mode</h2>
            <p class="text-gray-600 dark:text-gray-300">Click the moon/sun icon in the navbar to toggle dark mode.</p>
        </div>
    </div>
    
    <div class="mt-8 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
        <h3 class="text-lg font-medium text-blue-900 dark:text-blue-100 mb-2">Test Instructions:</h3>
        <ul class="text-blue-800 dark:text-blue-200 space-y-1">
            <li>• On desktop: Social links and dark mode toggle are visible in the navbar</li>
            <li>• On mobile: Menu button and dark mode toggle are visible</li>
            <li>• Click the menu button (☰) to open the mobile side menu</li>
            <li>• Click the dark mode button to toggle between light and dark themes</li>
        </ul>
    </div>
</div>
@endsection
