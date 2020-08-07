@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <div class="game-details border-b-grey-800 pb-12 flex flex-col lg:flex-row">
        <div class="flex-none">
            <img src="warzone.jpg" alt="Game Cover">
        </div>
        <div class="lg:ml-12 lg:mr-64">
            <h2 class="font-semibold text-4xl leading-tight mt-1">
                Call of Duty: Warzone
            </h2>
            <div class="text-gray-400">
                <span>Shooter</span>
                &middot;
                <span>Activition</span>
                &middot;
                <span>Playstation 4</span>
            </div>
        </div>
            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                    </div>
                    <div class="ml-4 text-xs">Member<br> score</div>
                </div>
                <div class="flex items-center ml-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">55%</div>
                    </div>
                    <div class="ml-4 text-xs">Critic<br> score</div>
                </div>
                <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="#" class="hover:text-gray-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                        <a href="#" class="hover:text-gray-400">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.44,0H3.56A3.57,3.57,0,0,0,0,3.56V20.44A3.57,3.57,0,0,0,3.56,24H20.44A3.57,3.57,0,0,0,24,20.44V3.56A3.57,3.57,0,0,0,20.44,0ZM22,20.44A1.56,1.56,0,0,1,20.44,22H3.56A1.56,1.56,0,0,1,2,20.44V3.56A1.56,1.56,0,0,1,3.56,2H20.44A1.56,1.56,0,0,1,22,3.56Z"></path><path d="M12,6a6,6,0,1,0,6,6A6,6,0,0,0,12,6Zm0,10a4,4,0,1,1,4-4A4,4,0,0,1,12,16Z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <p class="mt-12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="mt-12">
                <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                    <svg class="w-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
    </div><!-- end game details -->

    <div class="images-container border-b border-gray-800 pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
            <div>
                <a href="#">
                    <img src="/screenshot1.jpg" alt="Screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
        </div>
    </div><!-- end images container -->

    <div class="similar-games-container pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
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
    </div><!-- end similar games -->
</div>

@endsection
