<nav class="container flex flex-row justify-between items-center lg:px-4" id="main-nav">

    <a href="https://dev.labormedical.it/labortailwind/views/home.php"><img src="https://labormedical.it/img/logo.png?v=1.1" alt="logo" class="h-[84px] w-[250px] "></a>

    <ul class="hidden lg:flex flex-row gap-6 items-center">
        <li class="text-lg font-semibold cursor-pointer hover:text-sky-600"><a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=FAD&sincrona=0">Corsi</a></li>
        <li class="text-lg font-semibold cursor-pointer hover:text-sky-600">In onda</li>
        <li class="text-lg font-semibold cursor-pointer hover:text-sky-600"><a href="https://dev.labormedical.it/labortailwind/views/home.php#chi-siamo">Chi siamo</a></li>
        <li class="text-lg font-semibold cursor-pointer hover:text-sky-600">Notizie</li>
        <li class="">
            <a href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FAD&sincrona=0" class="bg-sky-600 hover:bg-sky-500 w-full text-slate-50 p-2 rounded">Accedi</a>
        </li>
    </ul>

    <a href="#" class="lg:hidden  flex flex-col items-center justify-center cursor-pointer " id="sidenav-opener">
        <i class="fas fa-bars"></i>
    </a>

</nav>

<section class="w-0 fixed z-50 inset-0 lg:hidden" id="sidenav-container">

    <div id="sidenav" class="hidden fixed inset-0 bg-white/20 backdrop-blur-sm">
        <div class="fixed top-4 right-4 w-full max-w-xs bg-white rounded-lg shadow-lg p-6 text-base font-semibold text-slate-900 ">

            <button type="button" id="sidenav-dismiss" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-slate-600 " tabindex="0">
                <i class="fas fa-times    "></i>
                <span class="sr-only">Close navigation</span>
            </button>

            <ul class="space-y-6">
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=FAD&sincrona=0">Corsi</a></li>
                <li><a href="https://tailwindui.com/?ref=top" class="hover:text-sky-600 ">In Onda</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/home.php#chi-siamo">Chi siamo</a></li>
                <li><a class="hover:text-sky-600 " href="#">Notizie</a></li>
                <li class="">
                    <a href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FAD&sincrona=0" class="bg-sky-600 hover:bg-sky-500 w-full text-slate-50 p-2 rounded">Accedi</a>
                </li>
            </ul>

        </div>
    </div>

</section>

<script>

    sidenavModal("sidenav")

</script>