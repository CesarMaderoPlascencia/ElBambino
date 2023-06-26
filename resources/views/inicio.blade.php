@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
   <div class="flex flex-col justify-center gap-10 items-center">
        <div class="grid grid-cols-1 md:grid-cols-3 w-8/12 bg-gradient-to-br from-gray-300 to-green-100 p-6 rounded-lg shadow-2xl border-2 border-green-500 mt-6">
            <a href="{{route('user.index')}}" class="w-56 h-56 bg-white rounded-xl border-2 border-green-400 hover:border-green-600 hover:bg-green-100 hover:transition flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
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
                <p class="uppercase font-bold text-2xl">Usuarios</p>
            </a>

            <a href="" class="w-56 h-564 bg-white rounded-xl border border-green-400 hover:border-green-600 hover:bg-green-100 flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 36 36">
                    <path fill="currentColor" d="M15 8h9v2h-9z" class="clr-i-outline clr-i-outline-path-1"/>
                    <path fill="currentColor" d="M15 12h9v2h-9z" class="clr-i-outline clr-i-outline-path-2"/>
                    <path fill="currentColor" d="M15 16h9v2h-9z" class="clr-i-outline clr-i-outline-path-3"/>
                    <path fill="currentColor" d="M15 20h9v2h-9z" class="clr-i-outline clr-i-outline-path-4"/>
                    <path fill="currentColor" d="M15 24h9v2h-9z" class="clr-i-outline clr-i-outline-path-5"/>
                    <path fill="currentColor" d="M11 8h2v2h-2z" class="clr-i-outline clr-i-outline-path-6"/>
                    <path fill="currentColor" d="M11 12h2v2h-2z" class="clr-i-outline clr-i-outline-path-7"/>
                    <path fill="currentColor" d="M11 16h2v2h-2z" class="clr-i-outline clr-i-outline-path-8"/>
                    <path fill="currentColor" d="M11 20h2v2h-2z" class="clr-i-outline clr-i-outline-path-9"/>
                    <path fill="currentColor" d="M11 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-10"/>
                    <path fill="currentColor" d="M28 2H8a2 2 0 0 0-2 2v28a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2Zm0 30H8V4h20Z"
                    class="clr-i-outline clr-i-outline-path-11"/><path fill="none" d="M0 0h36v36H0z"/>
                </svg>
                <p class="uppercase font-bold text-2xl">Rutas</p>
            </a>
            <a href="" class="w-56 h-56 bg-white rounded-xl border border-green-400 hover:border-green-600 hover:bg-green-100 flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M11.861 2.39a3 3 0 0 1 3.275-.034L19.29 5H21a1 1 0 0 1 1 1v9a1 1 0
                     0 1-1 1h-1.52a2.65 2.65 0 0 1-1.285 2.449l-5.093 3.056a2 2 0 0 1-2.07-.008a2 2 0 0 
                     1-2.561.073l-5.14-4.039a2.001 2.001 0 0 1-.565-2.446A2 2 0 0 1 2 13.51V6a1 1 0 0 1 
                     1-1h4.947l3.914-2.61ZM4.173 13.646l.692-.605a3 3 0 0 1 4.195.24l2.702 2.972a3 3 0 0 1 .396 
                     3.487l5.008-3.005a.657.657 0 0 0 .279-.79l-4.427-6.198a1 1 0 0 0-1.101-.377l-2.486.745a3 3 0 0 
                     1-2.983-.752l-.293-.292A1.997 1.997 0 0 1 5.68 7H4v6.51l.173.135Zm9.89-9.602a1 1 0 0 
                     0-1.093.012l-5.4 3.6l.292.293a1 1 0 0 0 .995.25l2.485-.745a3 3 0 0 1 3.303 1.13L18.515 
                     14H20V7h-.709a2 2 0 0 1-1.074-.313l-4.155-2.644ZM6.181 14.545l-1.616 1.414l5.14 4.039l.705-1.232a1 
                     1 0 0 0-.129-1.169L7.58 14.625a1 1 0 0 0-1.398-.08Z"/>
                </svg>
                <p class="uppercase font-bold text-2xl">Clientes</p>
            </a>
            <a href="" class="w-56 h-56 bg-white rounded-xl border border-green-400 hover:border-green-600 hover:bg-green-100 flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7 18c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m10 0c1.1 0 2 .9 2 2s-.9 2-2 
                    2s-2-.9-2-2s.9-2 2-2m-9.8-3.2c0 .1.1.2.2.2H19v2H7c-1.1 0-2-.9-2-2c0-.4.1-.7.2-1l1.3-2.4L3 4H1V2h3.3l4.3 
                    9h7l3.9-7l1.7 1l-3.9 7c-.3.6-1 1-1.7 1H8.1l-.9 1.6v.2M9.4 1c.8 0 1.4.6 1.4 1.4s-.6 1.4-1.4 1.4S8 3.2 8 
                    2.4S8.7 1 9.4 1m5.2 8c-.8 0-1.4-.6-1.4-1.4s.6-1.4 1.4-1.4s1.4.6 1.4 1.4S15.3 9 14.6 9M9.2 9L8 7.8L14.8 
                    1L16 2.2L9.2 9"/>
                </svg>
                <p class="uppercase font-bold text-2xl">Ventas</p>
            </a>

            <a href="" class="w-56 h-56 bg-white rounded-xl border border-green-400 hover:border-green-600 hover:bg-green-100 flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 256 367">
                    <path fill="#34A853" d="M70.585 271.865a370.712 370.712 0 0 1 28.911 42.642c7.374 13.982 10.448 
                    23.463 15.837 40.31c3.305 9.308 6.292 12.086 12.714 12.086c6.998 0 10.173-4.726 
                    12.626-12.035c5.094-15.91 9.091-28.052 15.397-39.525c12.374-22.15 27.75-41.833 
                    42.858-60.75c4.09-5.354 30.534-36.545 42.439-61.156c0 0 14.632-27.035 
                    14.632-64.792c0-35.318-14.43-59.813-14.43-59.813l-41.545 11.126l-25.23 66.451l-6.242 9.163l-1.248 
                    1.66l-1.66 2.078l-2.914 3.319l-4.164 4.163l-22.467 18.304l-56.17 32.432l-9.344 54.337Z"/>
                    <path fill="#FBBC04" d="M12.612 188.892c13.709 31.313 40.145 58.839 58.031 
                    82.995l95.001-112.534s-13.384 17.504-37.662 17.504c-27.043 0-48.89-21.595-48.89-48.825c0-18.673 
                    11.234-31.501 11.234-31.501l-64.489 17.28l-13.225 75.08Z"/>
                    <path fill="#4285F4" d="M166.705 5.787c31.552 10.173 58.558 31.53 74.893 63.023l-75.925 
                    90.478s11.234-13.06 11.234-31.617c0-27.864-23.463-48.68-48.81-48.68c-23.969 0-37.735 
                    17.475-37.735 17.475v-57l76.343-33.68Z"/>
                    <path fill="#1A73E8" d="M30.015 45.765C48.86 23.218 82.02 0 
                    127.736 0c22.18 0 38.89 5.823 38.89 5.823L90.29 96.516H36.205l-6.19-50.75Z"/>
                    <path fill="#EA4335" d="M12.612 188.892S0 164.194 0 128.414c0-33.817 13.146-63.377 
                    30.015-82.649l60.318 50.759l-77.721 92.368Z"/>
                </svg>
                <p class="uppercase font-bold text-2xl">Mapas</p>
            </a>
            
            <a href="" class="w-56 h-56 bg-white rounded-xl border border-green-400 hover:border-green-600 hover:bg-green-100 flex flex-col justify-center items-center transition-all duration-300 ease-in-out transform hover:scale-105 m-6 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 72 72">
                    <defs>
                      <path id="openmojiAntennaBars0" d="M12 51h5v9h-5zm10.75-10h5v19h-5zM33.5 31h5v28.999h-5zm10.75-10h5v38.999h-5zM55 12h5v48h-5z"/>
                    </defs>
                    
                    <g fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2">
                      <use href="#openmojiAntennaBars0" fill="red" />
                      <use href="#openmojiAntennaBars0" fill="green" transform="translate(8, 0)" />
                      <use href="#openmojiAntennaBars0" fill="blue" transform="translate(16, 0)" />
                      <use href="#openmojiAntennaBars0" fill="yellow" transform="translate(24, 0)" />
                    </g>
                  </svg>
                <p class="uppercase font-bold text-2xl">Estadisticas</p>
            </a>
        </div>
   </div>
@endsection