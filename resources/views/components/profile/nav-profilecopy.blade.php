<nav>
        
    <div class="fixed top-0 left-0 w-1/5 h-screen pl-4 pb-4 pt-32 shadow-md dark:shadow-[0_0_10px_theme(colors.primary.700/50%)]">
        <ul class="space-y-1">
                <li>
               
        <a href="{{ route('profile.personalData', Auth::id())}}" class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1"
            id="informacion-personal">
            <svg class="w-7 h-7 mr-2 inline-block hover:fill-light-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
</svg>

            
            Información Personal
        </a>
                </li>
            

            <li>
            <a href="{{route('work_experiences.index')}}"
  class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1"</a>
   
    <svg class="w-7 h-7 mr-2 inline-block hover:fill-light-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
</svg>

    Experiencia Laboral
</a>

            </li>
                <li>
                
                <a href="{{ url('subscriptionInfo') }}" class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1"
            id="suscripciones">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="100.000000pt"
                viewBox="0 0 100.000000 100.000000" class="w-7 h-7 mr-2 inline-block  hover:fill-light-100 "
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0,100) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                    <!-- Cambia fill a currentColor -->

                    <path d="M406 907 c-59 -54 -78 -78 -73 -90 10 -27 22 -21 90 43 36 33 70 60
                                            77 60 6 0 50 -35 96 -77 l85 -78 -223 -5 -223 -5 0 -215 0 -214 125 -78 c68
                                                        -43 131 -78 140 -78 9 0 72 35 140 78 l125 78 3 211 2 211 -125 113 c-70 63
                                                                -134 115 -143 117 -10 1 -52 -30 -96 -71z m322 -374 l-3 -177 -108 -68 c-59
                                                    -37 -112 -68 -117 -68 -5 0 -58 31 -117 68 l-108 68 -3 177 -2 177 230 0 230
                                            0 -2 -177z" />
                    <path d="M470 600 c-17 -34 -26 -41 -60 -46 -22 -4 -43 -11 -46 -16 -4 -5 8
                                        -25 26 -43 27 -28 31 -37 25 -68 -10 -52 0 -60 46 -37 l39 20 39 -20 c46 -23
                                        55 -16 45 35 -5 30 -2 40 25 71 35 39 33 54 -7 54 -36 0 -66 22 -82 60 -7 16
                                        -16 30 -21 30 -5 0 -18 -18 -29 -40z" />
                    <path d="M230 215 c0 -38 3 -45 20 -45 17 0 20 7 20 45 0 38 -3 45 -20 45 -17
                                        0 -20 -7 -20 -45z" />
                    <path d="M730 215 c0 -38 3 -45 20 -45 17 0 20 7 20 45 0 38 -3 45 -20 45 -17
                                        0 -20 -7 -20 -45z" />
                    <path d="M354 167 c-3 -8 -4 -30 -2 -49 2 -25 8 -33 23 -33 17 0 20 7 20 45 0
                                        35 -4 45 -18 48 -9 2 -20 -3 -23 -11z" />
                    <path d="M604 157 c-3 -8 -4 -30 -2 -49 2 -25 8 -33 23 -33 17 0 20 7 20 45 0
                                        35 -4 45 -18 48 -9 2 -20 -3 -23 -11z" />
                    <path d="M487 104 c-4 -4 -7 -27 -7 -51 0 -37 3 -43 21 -43 18 0 20 5 17 47
                                        -3 44 -15 62 -31 47z" />
                </g>
            </svg>
            Subcripciones

        </a>

                </li>
                <li>
                <a href="{{ route('profile.publicaciones')}}" class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="100.000000pt"
                    viewBox="0 0 100.000000 100.000000" class="w-7 h-7 mr-2 inline-block hover:fill-light-100 "
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0,100) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                        <path d="M384 860 c-25 -10 -74 -66 -74 -86 0 -7 -45 -82 -100 -164 -110 -167
                            -117 -190 -83 -278 12 -32 13 -46 5 -54 -18 -18 -48 16 -61 68 -6 24 -16 44
                            -21 44 -20 0 -41 -47 -34 -76 11 -46 42 -101 66 -118 25 -18 74 -21 83 -6 3 6
                            21 10 39 10 33 0 34 -1 38 -51 7 -73 22 -83 124 -88 129 -5 149 8 156 99 3 34
                            4 35 43 33 22 -1 63 -4 90 -8 43 -6 54 -4 79 16 34 27 56 75 56 125 l0 36 45
                            -6 c36 -6 46 -4 51 9 4 9 4 18 1 22 -14 13 -182 41 -194 31 -17 -14 -5 -36 20
                            -40 46 -6 29 -132 -19 -144 -55 -14 -95 5 -169 79 -108 108 -174 254 -175 385
                            0 149 94 161 224 29 59 -60 70 -67 83 -55 29 30 -92 151 -184 184 -44 15 -60
                            16 -89 4z m94 -683 c2 -10 1 -30 -2 -43 -6 -24 -8 -25 -94 -22 l-87 3 -3 43
                            -3 43 93 -3 c81 -3 93 -5 96 -21z" />
                        <path d="M646 839 c-16 -23 -11 -49 9 -49 17 0 45 33 45 53 0 24 -36 21 -54
                            -4z" />
                        <path d="M750 659 c-86 -47 -85 -45 -50 -122 43 -95 85 -86 45 10 -20 48 -20
                            48 25 68 46 21 75 49 65 64 -10 17 -26 13 -85 -20z" />
                        <path d="M465 605 c-30 -29 -31 -56 -6 -110 17 -39 72 -95 92 -95 45 0 99 63
                            99 115 0 93 -123 153 -185 90z" />
                        <path d="M943 364 c-3 -8 -1 -20 5 -26 15 -15 43 8 35 28 -7 19 -32 18 -40 -2z" />
                    </g>
                </svg>

                Publicaciones
            </a>
                </li>
           <li>
           <a href="{{ url('applicationHistory') }}"  class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="100.000000pt"
                    viewBox="0 0 100.000000 100.000000" class="w-7 h-7 mr-2 inline-block hover:fill-light-100 "
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0,100) scale(0.1,-0.1)" fill="currentColor" stroke="none">
                        <path d="M322 833 c3 -106 6 -128 18 -128 12 0 16 20 18 108 l3 107 179 0 180
                            0 0 -100 0 -100 100 0 100 0 0 -280 0 -279 -137 -3 c-115 -3 -138 -6 -138 -18
                            0 -13 25 -15 158 -18 l157 -3 0 313 0 313 -108 108 -107 107 -213 0 -213 0 3
                            -127z m558 -65 c0 -4 -27 -8 -60 -8 l-60 0 0 67 0 67 60 -59 c33 -33 60 -63
                            60 -67z" />
                        <path d="M264 661 c-57 -26 -73 -64 -72 -176 1 -54 6 -96 13 -105 29 -36 57
                            -99 53 -121 -2 -19 -17 -29 -75 -54 -89 -37 -134 -79 -136 -126 l-2 -34 295 0
                            295 0 -2 34 c-2 47 -47 89 -136 126 -62 27 -72 34 -75 58 -2 16 1 34 7 41 41
                            49 57 103 59 190 2 106 -5 121 -78 159 -61 32 -90 33 -146 8z m128 -43 c24
                            -12 46 -27 50 -32 4 -6 6 -47 4 -91 -3 -81 -22 -141 -50 -165 -9 -7 -16 -27
                            -16 -46 0 -24 -5 -34 -20 -39 -37 -12 -60 3 -60 39 0 20 -8 40 -20 51 -11 10
                            -20 24 -20 30 0 7 -6 18 -13 24 -20 16 -17 191 3 216 33 39 82 44 142 13z
                            m-73 -422 c10 -12 8 -26 -6 -65 l-18 -51 -102 0 c-65 0 -103 4 -103 10 0 21
                            51 58 110 79 32 12 62 26 65 31 9 15 41 12 54 -4z m96 4 c3 -5 33 -19 65 -31
                            59 -21 110 -58 110 -79 0 -6 -38 -10 -104 -10 l-103 0 -17 43 c-9 23 -16 47
                            -16 53 0 27 51 46 65 24z" />
                    </g>
                </svg>

                Postulaciones
            </a>
           </li>
            <li>
            <a href="{{ url('messageHistory') }}" class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1">
                <svg class="w-7 h-7 mr-2 inline-block hover:fill-light-100" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z" />
                </svg>

                Mensajes
            </a>
            </li>
            <li>
            <a href="{{ url('/notificationSettings') }}"
   class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1"</a>
    
    <svg class="w-7 h-7 mr-2 inline-block hover:fill-light-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"/>
</svg>

    Notificaciones
</a>





            </li>
           
            
           
            
            
           


            <li>
            <a href="{{ url('/notificationSettings') }}"
            class="block  text-normal text-lg hover:bg-primary-800 hover:text-light-200 rounded-full rounded-r-none pl-2 py-1">
    
    <svg class="w-7 h-7 mr-2 inline-block hover:fill-light-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>

    Configuración
</a>

            </li>
            

           
           
           
            
         
            
        </ul>
            <div class="border border-dark-400 dark:border-light-700 "></div>


    </div>

</nav>