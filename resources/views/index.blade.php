@extends('layouts.index')

@section('content')

    <x-category-nav />
    <h1 class="text-3xl font-bold mb-8">Welcome to the Homepage</h1>

    @include('section.top-news', ['topPosts' => $topPosts])
    @include('section.trending', ['trendingPosts' => $trendingPosts])
    @include('section.latest', ['posts' => $latestPosts])

@endsection