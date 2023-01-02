<section class="w-full h-screen bg-gray-900 shadow-lg flex flex-col justify-between p-4">
            
    <div class="flex flex-col gap-4">

                <ul class="space-y-2">
                    <li>
                        <a href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FAD&sincrona=0" class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box" id="sidenav-corsi-opener">
                                <i class="fas fa-laptop "></i> 
                            </div>
                            
                            <span class="hidden lg:block">I miei corsi</span>
                        </a>
                    </li>
                    <li>
                        <a class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box" id="sidenav-attestati-opener">
                                <i class="fas fa-file-certificate "></i> 
                            </div>
                            
                            <span class="hidden lg:block">I miei attestati</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://dev.labormedical.it/labortailwind/views/utente/fatture.php?anno=<?= date("Y") ?>" class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box">
                                <i class="fas fa-file-invoice "></i> 
                            </div>
                            
                            <span class="hidden lg:block">Le mie fatture</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://dev.labormedical.it/labortailwind/views/utente/profilo.php?tipo=personali" class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box">
                                <i class="fas fa-user "></i> 
                            </div>
                            
                            <span class="hidden lg:block">Il mio profilo</span>
                        </a>
                    </li>
                </ul>

    </div>
           
    <div class="hidden lg:flex lg:flex-col gap-4">

        <div class="flex items-center gap-2 ">

            <div class="rounded-full bg-sky-500 h-10 w-10 flex flex-col items-center justify-center">
                <span class="text-sky-50"><?= $initials ?></span>
            </div>

            <div>
                <h5 class="text-semibold text-sky-50 leading-4"><?= $fullname ?></h5>
                <p class="text-xs text-slate-500"><?= $user['username'] ?></p>
            </div>

        </div>

        <hr class="my-2 border-slate-500">

        <a class="text-red-500 cursor-pointer">
            <i class="fas fa-power-off"></i>
            <span>Effettua il logout</span>
        </a>

    </div>

    <div class="flex flex-col items-center gap-4 lg:hidden">

        <div class="flex items-center gap-2 ">
            <div class="rounded-full bg-sky-500 h-10 w-10 flex flex-col items-center justify-center">
                <span class="text-sky-50"><?= $initials ?></span>
            </div>
        </div>

        <hr class="my-2 w-full border-slate-500">

        <a class="text-red-500 cursor-pointer">
            <i class="fas fa-power-off"></i>
        </a>

    </div>

</section>

<!-- Sidenav corsi --> 

<section class="w-0 fixed z-50 inset-0 lg:hidden" id="sidenav-corsi-container">

    <div id="sidenav-corsi" class="hidden fixed inset-0 bg-white/20 backdrop-blur-sm">
        <div class="fixed top-4 right-4 w-full max-w-xs bg-white rounded-lg shadow-lg p-6 text-base font-semibold text-slate-900 ">

            <button type="button" id="sidenav-corsi-dismiss" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-slate-600 " tabindex="0">
                <i class="fas fa-times    "></i>
                <span class="sr-only">Close navigation</span>
            </button>

            <ul class="space-y-6">
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?category=FAD&sincrona=0">Corsi FAD</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?category=FAD&sincrona=1">Corsi FAD Sincrona</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?category=RES">Corsi RES</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?category=BLENDED">Corsi Blended</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?category=FSC">Corsi FSC</a></li>
            </ul>

        </div>
    </div>

</section>

<!-- Sidenav attestati --> 

<section class="w-0 fixed z-50 inset-0 lg:hidden" id="sidenav-attestati-container">

    <div id="sidenav-attestati" class="hidden fixed inset-0 bg-white/20 backdrop-blur-sm">
        <div class="fixed top-4 right-4 w-full max-w-xs bg-white rounded-lg shadow-lg p-6 text-base font-semibold text-slate-900 ">

            <button type="button" id="sidenav-attestati-dismiss" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center text-slate-500 hover:text-slate-600 " tabindex="0">
                <i class="fas fa-times    "></i>
                <span class="sr-only">Close navigation</span>
            </button>

            <ul class="space-y-6">
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/attestati.php?category=FAD&sincrona=0">Attestati FAD</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/attestati.php?category=FAD&sincrona=1">Attestati FAD Sincrona</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/attestati.php?category=RES">Attestati RES</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/attestati.php?category=BLENDED">Attestati Blended</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/attestati.php?category=FSC">Attestati FSC</a></li>
                <li><a class="hover:text-sky-600 " href="https://dev.labormedical.it/labortailwind/views/utente/attestati.php?category=Faculty">Attestati Faculty</a></li>
            </ul>

        </div>
    </div>

</section>

<script>

    sidenavModal("sidenav-corsi")
    sidenavModal("sidenav-attestati")

</script>