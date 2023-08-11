            <!-- Sidebar bg-gradient-to-br from-indigo-900 to-green-900 -->
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gradient-to-br from-indigo-900 to-green-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex gap-y-2 flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row shadow-xl items-center mt-1 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Front-End</div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'JavaScript']) }}">
                                <div class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer transition">
                                    <img class="w-6" src="{{asset('img/icons/javascript.svg')}}"
                                    alt="" />
                                    <div>
                                        <span>JavaScript</span>
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Angular']) }}">
                                    <div class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer transition">
                                        <img class="w-6"
                                            src="data:image/svg+xml,%3C?xml version='1.0' encoding='utf-8'?%3E %3C!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E %3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 80 80' style='enable-background:new 0 0 80 80;' xml:space='preserve'%3E %3Cstyle type='text/css'%3E .st0%7Bfill:%23DD0031;%7D .st1%7Bfill:%23C3002F;%7D .st2%7Bfill:%23FFFFFF;%7D %3C/style%3E %3Cg%3E %3Cpolygon class='st0' points='40,0 40,0 40,0 2.8,13.3 8.4,62.5 40,80 40,80 40,80 71.6,62.5 77.2,13.3 '/%3E %3Cpolygon class='st1' points='40,0 40,8.9 40,8.8 40,49.4 40,49.4 40,80 40,80 71.6,62.5 77.2,13.3 '/%3E %3Cpath class='st2' d='M40,8.8L16.7,61l0,0h8.7l0,0l4.7-11.7h19.8L54.5,61l0,0h8.7l0,0L40,8.8L40,8.8L40,8.8L40,8.8L40,8.8z M46.8,42.2H33.2L40,25.8L46.8,42.2z'/%3E %3C/g%3E %3C/svg%3E"
                                            alt="" />
                                        <div>
                                            <span>Angular</span>
                                            {{-- <span class="text-xs text-blue-300 block">Typescript</span> --}}
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                        </div>
                                    </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'React']) }}">
                                    <div
                                        class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer transition">
                                        <img class="w-6"
                                            src="data:image/svg+xml,%3C?xml version='1.0' encoding='utf-8'?%3E %3C!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E %3Csvg version='1.1' id='Layer_2_1_' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 80 80' style='enable-background:new 0 0 80 80;' xml:space='preserve'%3E %3Cstyle type='text/css'%3E .st0%7Bfill:%2361DAFB;%7D %3C/style%3E %3Cg%3E %3Cpath class='st0' d='M80,40c0-5.3-6.6-10.3-16.8-13.4c2.3-10.4,1.3-18.6-3.3-21.3c-1.1-0.6-2.3-0.9-3.7-0.9V8 c0.8,0,1.4,0.1,1.9,0.4c2.2,1.3,3.2,6.1,2.4,12.3c-0.2,1.5-0.5,3.1-0.8,4.8c-3.2-0.8-6.7-1.4-10.4-1.8c-2.2-3-4.5-5.8-6.8-8.2 C47.9,10.7,52.9,8,56.3,8V4.4l0,0c-4.5,0-10.4,3.2-16.3,8.7C34,7.6,28.2,4.4,23.7,4.4v3.6c3.4,0,8.4,2.7,13.7,7.6 c-2.3,2.4-4.6,5.1-6.7,8.1c-3.7,0.4-7.2,1-10.4,1.8c-0.4-1.6-0.7-3.2-0.8-4.7c-0.8-6.2,0.2-11.1,2.4-12.4c0.5-0.3,1.1-0.4,1.9-0.4 V4.5l0,0c-1.4,0-2.6,0.3-3.7,0.9c-4.6,2.6-5.6,10.9-3.2,21.2C6.6,29.7,0,34.7,0,40c0,5.3,6.6,10.3,16.8,13.4 c-2.3,10.4-1.3,18.6,3.3,21.3c1.1,0.6,2.3,0.9,3.7,0.9c4.5,0,10.4-3.2,16.3-8.7c5.9,5.5,11.8,8.7,16.3,8.7c1.4,0,2.6-0.3,3.7-0.9 c4.6-2.6,5.6-10.9,3.2-21.2C73.4,50.3,80,45.3,80,40z M58.8,29.1c-0.6,2.1-1.4,4.3-2.2,6.4c-0.7-1.3-1.4-2.6-2.1-3.9 c-0.8-1.3-1.5-2.6-2.3-3.8C54.4,28.2,56.6,28.6,58.8,29.1z M51.3,46.5c-1.3,2.2-2.6,4.3-3.9,6.2c-2.4,0.2-4.9,0.3-7.4,0.3 c-2.5,0-4.9-0.1-7.3-0.3c-1.4-1.9-2.7-4-3.9-6.2c-1.2-2.1-2.4-4.3-3.4-6.5c1-2.2,2.2-4.4,3.4-6.5c1.3-2.2,2.6-4.3,3.9-6.2 c2.4-0.2,4.9-0.3,7.4-0.3c2.5,0,4.9,0.1,7.3,0.3c1.4,1.9,2.7,4,3.9,6.2c1.2,2.1,2.4,4.3,3.4,6.5C53.7,42.2,52.5,44.4,51.3,46.5z M56.6,44.4c0.9,2.2,1.6,4.4,2.3,6.5c-2.1,0.5-4.4,1-6.7,1.3c0.8-1.3,1.6-2.5,2.3-3.9C55.2,47,55.9,45.7,56.6,44.4z M40,61.8 c-1.5-1.6-3-3.3-4.5-5.2c1.5,0.1,3,0.1,4.5,0.1c1.5,0,3,0,4.5-0.1C43.1,58.5,41.5,60.2,40,61.8z M27.9,52.2 c-2.3-0.3-4.5-0.8-6.7-1.3c0.6-2.1,1.4-4.3,2.2-6.4c0.7,1.3,1.4,2.6,2.1,3.9C26.3,49.7,27.1,50.9,27.9,52.2z M40,18.2 c1.5,1.6,3,3.3,4.5,5.2c-1.5-0.1-3-0.1-4.5-0.1c-1.5,0-3,0-4.5,0.1C36.9,21.5,38.5,19.8,40,18.2z M27.9,27.8 c-0.8,1.3-1.6,2.5-2.3,3.9c-0.8,1.3-1.5,2.6-2.1,3.9c-0.9-2.2-1.6-4.4-2.3-6.5C23.3,28.6,25.6,28.2,27.9,27.8z M13.1,48.3 c-5.8-2.5-9.5-5.7-9.5-8.3c0-2.6,3.7-5.8,9.5-8.3c1.4-0.6,2.9-1.1,4.5-1.6c0.9,3.2,2.2,6.5,3.7,9.9c-1.5,3.4-2.7,6.7-3.6,9.9 C16.1,49.4,14.6,48.9,13.1,48.3z M21.9,71.6c-2.2-1.3-3.2-6.1-2.4-12.3c0.2-1.5,0.5-3.1,0.8-4.8c3.2,0.8,6.7,1.4,10.4,1.8 c2.2,3,4.5,5.8,6.8,8.2C32.1,69.3,27.1,72,23.8,72C23,72,22.4,71.8,21.9,71.6z M60.6,59.1c0.8,6.2-0.2,11.1-2.4,12.4 c-0.5,0.3-1.1,0.4-1.9,0.4c-3.4,0-8.4-2.7-13.7-7.6c2.3-2.4,4.6-5.1,6.7-8.1c3.7-0.4,7.2-1,10.4-1.8C60.1,56,60.4,57.6,60.6,59.1z M66.9,48.3c-1.4,0.6-2.9,1.1-4.5,1.6c-0.9-3.2-2.2-6.5-3.7-9.9c1.5-3.4,2.7-6.7,3.6-9.9c1.6,0.5,3.1,1.1,4.6,1.7 c5.8,2.5,9.5,5.7,9.5,8.3C76.4,42.6,72.6,45.8,66.9,48.3z'/%3E %3Cpath class='st0' d='M23.7,4.4L23.7,4.4L23.7,4.4z'/%3E %3Ccircle class='st0' cx='40' cy='40' r='7.5'/%3E %3Cpath class='st0' d='M56.2,4.4L56.2,4.4L56.2,4.4z'/%3E %3C/g%3E %3C/svg%3E"
                                            alt="" />
                                        <div>
                                            <span>React</span>
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                        </div>
                                    </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'VueJS']) }}">
                                <div
                                    class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer transition">
                                    <img class="w-6"
                                        src="data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='36px' height='30px' viewBox='0 0 36 30' version='1.1' xmlns='http://www.w3.org/2000/svg'%3E %3Ctitle%3EUntitled%3C/title%3E %3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Crect id='Rectangle' fill='%231389FD' x='15' y='21' width='21' height='7' rx='3.5'%3E%3C/rect%3E %3Ctext id='BETA' font-family='Roboto-Medium, Roboto' font-size='5' font-weight='400' fill='%23FFFFFF'%3E %3Ctspan x='22' y='26'%3EBETA%3C/tspan%3E %3C/text%3E %3Cg id='vue' fill-rule='nonzero'%3E %3Cg id='Group' transform='translate(18.000000, 15.000000) scale(-1, 1) rotate(-180.000000) translate(-18.000000, -15.000000) translate(-0.000000, -0.000000)'%3E %3Cg transform='translate(0.010406, 0.001744)' fill='%2341B883' id='Path'%3E %3Cpolygon points='20.9853249 29.8255814 17.053785 22.9772093 13.1222451 29.8255814 0.0296569468 29.8255814 17.053785 0.170930233 34.0779131 29.8255814'%3E%3C/polygon%3E %3C/g%3E %3Cg transform='translate(6.774271, 11.862209)' fill='%2334495E' id='Path'%3E %3Cpolygon points='14.2214599 17.9651163 10.28992 11.1167442 6.35838003 17.9651163 0.0754431103 17.9651163 10.28992 0.172674419 20.5043968 17.9651163'%3E%3C/polygon%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/svg%3E"
                                        alt="" />
                                    <div>
                                        <span>VUE</span>
                                        {{-- <span class="text-xs text-blue-300 block">Typescript</span> --}}
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'TypeScript']) }}">
                                <div
                                    class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer transition">
                                   <img class="w-6" src="{{asset('img/icons/typescript.svg')}}" alt="">
                                    <div>
                                        <span>TypeScript</span>
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Flutter']) }}">
                                <div  class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                    <img class="w-6" src="{{asset('img/icons/flutter.svg')}}" alt="">
                                    <div>
                                        <span>Flutter</span>
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Desarrollo Web']) }}">
                                <div
                                    class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                    <img class="w-6" src="{{asset('img/icons/desarrolloweb.svg')}}" alt="">
                                    <div>
                                        <span>DesarrolloWeb</span>
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Html5']) }}">
                                <div
                                    class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                    <img class="w-6" src="{{asset('img/icons/html5.svg')}}" alt="">
                                    <div>
                                        <span>HTML5</span>
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Css3']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/css3.svg')}}" alt="">
                               
                                <div>
                                    <span>CSS3</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row shadow-xl items-center mt-1 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Back-End</div>
                            </div>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'NodeJS']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/python.svg')}}" alt="">
                               
                                <div>
                                    <span>NodeJS</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Python']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/nodejs.svg')}}" alt="">
                                
                                <div>
                                    <span>Python</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Java']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/java.svg')}}" alt="">
                                <div>
                                    <span>JAVA</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Php']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/php.svg')}}" alt="">
                                <div>
                                    <span>PHP</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="{{ route('coupons.search_discount_es', ['course_search' => 'C#']) }}">-->
                        <!--        <div class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">-->
                        <!--            <img class="w-6" src="{{asset('img/icons/csharp.svg')}}" alt="">-->
                                    
                        <!--            <div>-->
                        <!--                <span>C Sharp</span>-->
                        <!--            </div>-->
                        <!--            <div>-->
                        <!--                <i-->
                        <!--                    class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--    <a href="{{ route('coupons.search_discount_es', ['course_search' => 'C++']) }}">-->
                        <!--        <div-->
                        <!--            class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">-->
                        <!--            <img class="w-6" src="{{asset('img/icons/cmasmas.svg')}}" alt="">-->
                                    
                        <!--            <div>-->
                        <!--                <span>C++</span>-->
                        <!--            </div>-->
                        <!--            <div>-->
                        <!--                <i-->
                        <!--                    class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'Kotlin']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/kotlin.svg')}}" alt="">
                                <div>
                                    <span>KOTLIN</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row shadow-xl items-center mt-1 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Otros</div>
                            </div>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('search.courses_discount_es', ['course_search' => 'sql']) }}">
                            <div
                                class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                <img class="w-6" src="{{asset('img/icons/database.svg')}}" alt="">
                                
                                <div>
                                    <span>DATABASES</span>
                                </div>
                                <div>
                                    <i
                                        class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                </div>
                            </div>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('coupons.search_discount_es', ['course_search' => 'MongoDB']) }}">
                                <div
                                    class="group flex items-center gap-5 px-2 py-1 rounded-lg mx-2 cursor-pointer hover:bg-opacity-100 transition">
                                    <img class="w-6" src="{{asset('img/icons/mongodb.svg')}}" alt="">
                                    <div>
                                        <span>MongoDB</span>
                                    </div>
                                    <div>
                                        <i
                                            class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center mt-5 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                            </div>
                        </li> --}}

                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright cursosdev @2022</p>
                </div>
            </div>
            <!-- ./Sidebar -->