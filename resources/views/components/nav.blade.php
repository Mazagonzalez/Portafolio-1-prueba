<div id="navbar" class="fixed top-0 left-0 w-full backdrop-blur-xl p-[20px] z-[2]" style="transition: top 0.3s">
    <div class="max-w-4xl mx-auto">
        <ul class="items-center justify-center gap-10 text-sm font-light text-white row">
            <li><a href="#container-princial">{{ __('Start') }}</a></li>
            <li><a href="#skills">{{ __('Skill') }}</a></li>
            <li><a href="#experiencie">{{ __('Experiencie') }}</a></li>
            <li>{{ __('About Me') }}</li>
            <li>{{ __('Contact Me') }}</li>

            {{-- Traducción --}}
            <li class="gap-2 row">
                <a href="{{ url('locale/en') }}">EN</a>
                <span>/</span>
                <a href="{{ url('locale/es') }}">ES</a>
            </li>
        </ul>
    </div>
</div>

<a id="foot-up" href="#container-princial" class="fixed p-3 border-2 border-white cursor-pointer stroke-white bottom-5 right-5 hover:bg-white hover:stroke-black">
    <div class="w-5 h-5 rotate-180">
        <x-utils.icons.arrow/>
    </div>
</a>

<script>
    // Obtén la barra de navegación
    const navbar = document.getElementById("navbar");

    // Variable para rastrear la posición anterior del scroll
    let prevScrollPos = window.pageYOffset;

    // Función para manejar el evento de desplazamiento
    window.onscroll = function() {
        const currentScrollPos = window.pageYOffset;

        // Si el desplazamiento hacia abajo es mayor de 50 píxeles, oculta la barra de navegación
        if (prevScrollPos < currentScrollPos && currentScrollPos > 50) {
            navbar.style.top = "-100px";
        } else {
            navbar.style.top = "0";
        }

        prevScrollPos = currentScrollPos;
    }
</script>

