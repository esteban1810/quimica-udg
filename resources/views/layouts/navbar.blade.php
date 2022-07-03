<nav class="h-[12vh] flex justify-between items-center px-4 py-2">
    <div class="h-full flex items-center">
        <div class="h-full">
            <img class="h-full object-contain" src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="hidden md:inline-block text-primary ml-4">
            <h5 class="tailwind">Licenciatura en Química</h5>
            <span class="tailwind block font-bold text-center text-2xl">CUCEI</span>
        </div>
    </div>


    <div class="h-1/2 md:hidden">
        <img class="h-full object-contain" src="{{asset('img/menu-bar.png')}}" alt="">
    </div>


                        

    <div class="h-5/6 hidden md:inline-block">

        @if (Auth::user())
            <!-- Authentication -->
            <form class="h-full object-contain" method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <img class="h-full object-contain" src="{{asset('img/user-icon.png')}}" alt="">
                </a>
            </form>
        @else
            <a href="{{route('login')}}">
                <img class="h-full object-contain" src="{{asset('img/user-icon.png')}}" alt="">
            </a> 
        @endif
    </div>
</nav>