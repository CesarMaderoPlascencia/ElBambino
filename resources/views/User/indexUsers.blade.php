@extends('layouts.app')

@section('titulo')
    Sellers
@endsection

@section('contenido')
   <div class="flex flex-col justify-center gap-10 items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 w-8/12 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">
            <a href="{{route('user.new')}}" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
                <div class="flex items-baseline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                        <g fill="none">
                        <path fill="url(#f578id0)" d="M27.48 10.841c.34-.73.53-1.54.52-2.4a5.527 5.527 0 0 0-5.38-5.44a5.499 5.499 0 0 0-5.57 4.73c-.02.15-.15.27-.31.27h-1.49c-.16 0-.29-.12-.31-.27a5.49 5.49 0 0 0-5.56-4.73c-2.95.07-5.34 2.48-5.38 5.43c-.01.86.18 1.68.52 2.4c.15.33.1.72-.13 1A10.495 10.495 0 0 0 2 18.501c0 5.8 4.7 10.5 10.5 10.5h7c5.8 0 10.5-4.7 10.5-10.5c0-2.53-.9-4.85-2.39-6.67a.939.939 0 0 1-.13-.99Z" />
                        <path fill="url(#f578id1)" d="M27.48 10.841c.34-.73.53-1.54.52-2.4a5.527 5.527 0 0 0-5.38-5.44a5.499 5.499 0 0 0-5.57 4.73c-.02.15-.15.27-.31.27h-1.49c-.16 0-.29-.12-.31-.27a5.49 5.49 0 0 0-5.56-4.73c-2.95.07-5.34 2.48-5.38 5.43c-.01.86.18 1.68.52 2.4c.15.33.1.72-.13 1A10.495 10.495 0 0 0 2 18.501c0 5.8 4.7 10.5 10.5 10.5h7c5.8 0 10.5-4.7 10.5-10.5c0-2.53-.9-4.85-2.39-6.67a.939.939 0 0 1-.13-.99Z" />
                        <path fill="url(#f578id2)" d="M27.48 10.841c.34-.73.53-1.54.52-2.4a5.527 5.527 0 0 0-5.38-5.44a5.499 5.499 0 0 0-5.57 4.73c-.02.15-.15.27-.31.27h-1.49c-.16 0-.29-.12-.31-.27a5.49 5.49 0 0 0-5.56-4.73c-2.95.07-5.34 2.48-5.38 5.43c-.01.86.18 1.68.52 2.4c.15.33.1.72-.13 1A10.495 10.495 0 0 0 2 18.501c0 5.8 4.7 10.5 10.5 10.5h7c5.8 0 10.5-4.7 10.5-10.5c0-2.53-.9-4.85-2.39-6.67a.939.939 0 0 1-.13-.99Z" />
                        <path fill="#F8D41E" d="M9.5 12a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7Z" />
                        <path fill="url(#f578id3)" d="M9.5 11a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5Z" />
                        <path fill="#F8D41E" d="M22.5 12a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7Z" />
                        <path fill="url(#f578id4)" d="M22.5 11.001a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5Z" />
                        <path fill="#30223D" d="M17.5 14.001a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Zm-3 0a.5.5 0 1 0 0-1a.5.5 0 0 0 0 1Z" />
                        <path fill="url(#f578id5)" d="M27.57 20.391c-1.18 0-2.27-.4-3.15-1.06a13.432 13.432 0 0 0-8.43-2.95c-3.22 0-6.17 1.12-8.49 3v-.01a5.19 5.19 0 0 1-3.1 1.02H2.17c.89 4.9 5.18 8.61 10.33 8.61h7c5.15 0 9.44-3.71 10.33-8.61h-2.26Z" />
                        </g>
                        <defs>
                        <radialGradient id="f578id0" cx="0" cy="0" r="1" gradientTransform="matrix(-21.625 1.12424 -1.21066 -23.28735 22.375 16)" gradientUnits="userSpaceOnUse">
                            <stop offset=".131" stop-color="#63F6AE" />
                            <stop offset="1" stop-color="#4EB883" />
                        </radialGradient>
                        <radialGradient id="f578id1" cx="0" cy="0" r="1" gradientTransform="matrix(1.5 -2.65625 3.88918 2.19624 11.125 7.781)" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#60EEA4" />
                            <stop offset="1" stop-color="#60EEA4" stop-opacity="0" />
                        </radialGradient>
                        <radialGradient id="f578id2" cx="0" cy="0" r="1" gradientTransform="rotate(-67.109 18.416 -13.6) scale(4.57938 6.00348)" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#60EEA4" />
                            <stop offset="1" stop-color="#60EEA4" stop-opacity="0" />
                        </radialGradient>
                        <radialGradient id="f578id3" cx="0" cy="0" r="1" gradientTransform="matrix(-3.18751 2.06249 -1.0725 -1.6575 12 7.125)" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#5E5764" />
                            <stop offset="1" stop-color="#3C2A4F" />
                        </radialGradient>
                        <radialGradient id="f578id4" cx="0" cy="0" r="1" gradientTransform="matrix(-3.18751 2.06249 -1.0725 -1.6575 25 7.126)" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#5E5764" />
                            <stop offset="1" stop-color="#3C2A4F" />
                        </radialGradient>
                        <linearGradient id="f578id5" x1="16" x2="16" y1="41.875" y2="18.125" gradientUnits="userSpaceOnUse">
                            <stop offset=".513" stop-color="#FF95F4" />
                            <stop offset=".605" stop-color="#FA946C" />
                            <stop offset="1" stop-color="#FFE55D" />
                        </linearGradient>
                        </defs>
                    </svg>
                    <div class="-mr-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/></svg>
                    </div>
                </div>
                  <p class="uppercase font-bold text-2xl">Nuevo</p>
            </a>

        </div>
   </div>
@endsection