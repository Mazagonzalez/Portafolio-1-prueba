<div>
    {{-- Selección positiva --}}
    <div id="answer-yes" class="absolute col w-[500px] transition-all" style="transform: scale(0.0);">
        <div class="font-light col">
            <p class="rotate-12">{{ __('wow seriously?') }}</p>
            <p class="-rotate-[2deg] mb-6 text-xl">{{ __("I'm glad we have something in common,") }}</p>
            <p class="text-4xl rotate-[5deg] font-bold">{{ __('the universe is the most impressive thing there is without a doubt') }}</p>

            <div class="flex mt-16">
                <a href="#skills" class="px-4 py-2 border-2 border-white hover:bg-white hover:text-black">
                    <button>{{ __("Let's continue") }} :D</button>
                </a>
            </div>
        </div>
    </div>

    {{-- Selección negativa --}}
    <div id="answer-not" class="absolute col w-[500px] transition-all" style="transform: scale(0.0);">
        <div class="font-light col">
            <p class="rotate-12">{{ __('Oh really?') }}</p>
            <p class="-rotate-[2deg] mb-4">{{ __('how can you not like') }}</p>
            <p class="text-4xl rotate-[5deg]">{{ __('something so') }} <span class="font-bold">{{ __('enigmatic') }}</span> {{ __('and at the same time') }} <span class="font-bold">{{ __('perfect...') }}</span></p>
            <p>{{ __('are you sure?') }}</p>

            <div class="flex mt-16">
                <a href="#skills" class="px-4 py-2 border-2 border-white hover:bg-white hover:text-black">
                    <button>{{ __('We better continue') }}</button>
                </a>
            </div>
        </div>
    </div>

    <script>
        function Yes () {
            document.getElementById('answer-yes').style = "transform: scale(1.0); position: relative; animation: levitar2 6s ease-in-out infinite alternate;";
            document.getElementById('container-question').style = "transform: scale(0.0); position: absolute;";
        }

        function Not () {
            document.getElementById('answer-not').style = "transform: scale(1.0); position: relative; animation: levitar2 6s ease-in-out infinite alternate;";
            document.getElementById('container-question').style = "transform: scale(0.0); position: absolute;";
        }
    </script>
</div>
