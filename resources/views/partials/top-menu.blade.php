<!-- Top menu -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <ul class="nav navbar-nav navbar-right navbar-new">

                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="btn top-btns navbar-btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                        <a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="btn top-btns navbar-btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Log Out
                            </a>
                        </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn top-btns navbar-btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="btn top-btns navbar-btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
            @endif

            </ul>
        </div>
        <hr>
        <div class="toppad">
            <div class="navbar-header logomar">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="#">Daols</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="topnav-hom active">
                        <a href="#"><span aria-hidden="true" class="header-icon home"></span>HOME</a>
                    </li>
                    <li class="topnav-othr ">
                        <a href="#"><span aria-hidden="true" class="header-icon about"></span>ABOUT</a>
                    </li>
                    <li class="topnav-othr ">
                        <a href="#&"><span aria-hidden="true" class="header-icon contact"></span>CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {
        //$("#countries").msDropdown();
        $(function() {
            $(".datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
    })
</script>
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js.php');
    }
</script>