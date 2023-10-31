<x-layout.app>
    <div class="overflow-x-hidden">
        <div id="container-princial" class="text-white bg-center bg-no-repeat bg-cover w-all-pantalla">
            <div class="w-full h-full">
                <div class="h-full w-x-defecto center-content">
                    <div class="relative col">
                        <p class="-m-8 text-3xl font-light text-center">{{ __('Hi, i am') }}</p>
                        <h1 class="font-bold text-[140px]">CARLOS MAZA</h1>
                        <p class="mb-10 -mt-10 font-mono text-2xl font-light text-center">{{ __('This is my portfolio WEB') }}</p>

                        <x-utils.name-skill/>

                        <div class="absolute flex justify-center left-1/2 translate-x-[-50%] -bottom-32">
                            <a href="#container-secundario" class="px-8 py-2 text-white border-2 border-white hover:bg-white hover:text-black">
                                <button>{{ __("Let's start") }}</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="container-secundario" class="text-white bg-black w-all-pantalla center-content">
            <div class="w-full h-full">
                <div class="gap-56 w-x-defecto row">
                    <div id="sun" class="relative mt-16 w-[200px] z-[1] h-[200px] rounded-full bg-right-top" style="background: radial-gradient(circle, #f43636 10%, #f67355 30%, #FFC86E 60%);">
                        <div id="light-sun" class="w-[200px] h-[200px] absolute rounded-full bg-right-top" style="background: radial-gradient(circle, #FF8D74 30%, #FFC86E 70%);"></div>
                    </div>

                    <div class="mt-44">
                        <div id="container-question" class="transition-transform col gap-28">
                            <div class="gap-0 col">
                                <p id="text-levitating-1" class="text-lg font-light">{{ __('answer something') }}</p>
                                <p id="text-levitating-2" class="text-5xl font-bold">{{ __('Do you like the universe?') }}</p>
                            </div>

                            <div class="center-content">
                                <div class="gap-10 text-xl font-light row -rotate-12">
                                    <button class="text-gray-500 hover:text-white hover:scale-105" onclick="Yes()">{{ __('Yes') }}</button>
                                    <button class="text-gray-500 hover:text-white hover:scale-105" onclick="Not()">{{ __('Not') }}</button>
                                </div>
                            </div>
                        </div>

                        <x-utils.question-universe/>
                    </div>
                </div>
            </div>
        </div>

        <div id="skills" class="text-white bg-black w-all-pantalla center-content">
            <div class="relative">
                <div class="gap-10 col w-x-defecto">
                    <h1 class="text-6xl font-bold text-center">{{ __('My Skills') }}</h1>
                    <div class="mx-20 border-2 border-white divide-x-2 divide-white row">
                        {{-- Diseño web reponsive --}}
                        <div class="w-1/3 col">
                            <div class="items-center gap-4 p-4 row">
                                <div class="w-[42px] h-[42px] stroke-white">
                                    <x-utils.icons.movil/>
                                </div>
                                <p class="text-lg font-semibold">{{ __('Design Web Responsive') }}</p>
                            </div>

                            <x-utils.etiqueta-h4>
                                {{ __('I am proud to say that I am highly skilled in mobile web design, focused on creating exceptional user experiences. My passion for aesthetics and usability is reflected in each project, ensuring that sites are intuitive, attractive and highly functional on any device.') }}
                            </x-utils.etiqueta-h4>
                        </div>

                        {{-- Desarrollo web --}}
                        <div class="w-1/3 col">
                            <div class="items-center gap-4 p-4 row">
                                <div class="w-[42px] h-[42px] stroke-white">
                                    <x-utils.icons.pc/>
                                </div>
                                <p class="text-lg font-semibold">{{ __('Web Development') }}</p>
                            </div>

                            <x-utils.etiqueta-h4>
                                {{ __('I have extensive experience in web design and use the following HTML, CSS and JavaScript tools, in addition to having experience in the use of technologies such as Laravel and Python. Additionally, I am familiar with popular frameworks such as Tailwind CSS, Alpine.js, and Node.js. My skill set allows me to create highly functional and visually appealing websites.') }}
                            </x-utils.etiqueta-h4>
                        </div>

                        {{-- ux/ui desing --}}
                        <div class="w-1/3 col">
                            <div class="items-center gap-4 p-4 row">
                                <div class="w-[42px] h-[42px] stroke-white">
                                    <x-utils.icons.pen/>
                                </div>
                                <p class="text-lg font-semibold">{{ __('UX/UI Design') }}</p>
                            </div>

                            <x-utils.etiqueta-h4>
                                {{ __('Although my main focus is not UX/UI design, I have solid knowledge in this field and can operate with confidence. I have skills in tools such as Figma, Photoshop and Adobe Illustrator, and I am easy to learn these types of tools, which allows me to create functional and attractive designs to improve the user experience in web projects.') }}
                            </x-utils.etiqueta-h4>
                        </div>
                    </div>
                </div>

                <div class="absolute -mt-5 left-1/2 translate-x-[-50%]">
                    <img src="{{ asset('dist/img/code.webp') }}" class="opacity-20 w-[580px] h-[290px]">
                </div>
            </div>
        </div>

        <div class="text-white bg-black w-all-pantalla center-content">
            <div>
                Cont #3
            </div>
        </div>
    </div>
</x-layout.app>
