@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <!-- start popular games -->
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
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
    <!-- end popular games -->

    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex items-start px-6 py-6">
                    <div class="relative inline-block flex-none">
                        <a href="#">
                            <img src="warzone.jpg" alt="Game Cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <div class="ml-6 lg:ml-12">
                        <a href="#" class="block text-large font-semibold leading-tight hover:test-gray-400 mt-4">Call of Duty: Warzone</a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                        <p class="text-gray-400 mt-6 hidden lg:block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 mt-12 lg:mt-0">
            <div class="most-anticipated">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="warzone.jpg" alt="Game Cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coming-soon mt-20">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Coming Soon</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="warzone.jpg" alt="Game Cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
