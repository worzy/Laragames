@extends('layouts.app')

@section('content')
<!-- start popular games -->
<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="warzone.jpg" alt="Game Cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px;">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
                </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:test-gray-400 mt-8">Call of Duty: Warzone</a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
    </div>
</div>
<!-- end popular games -->
@endsection
