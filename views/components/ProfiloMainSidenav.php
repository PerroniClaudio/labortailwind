<section class="w-full h-screen bg-gray-900 shadow-lg flex flex-col justify-between p-4">
            
    <div class="flex flex-col gap-4">

                <ul class="space-y-2">
                    <li>
                        <a class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box">
                                <i class="fas fa-laptop "></i> 
                            </div>
                            
                            <span>I miei corsi</span></span>
                        </a>
                    </li>
                    <li>
                        <a class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box">
                                <i class="fas fa-file-certificate "></i> 
                            </div>
                            
                            <span>I miei attestati</span></span>
                        </a>
                    </li>
                    <li>
                        <a class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box">
                                <i class="fas fa-file-invoice "></i> 
                            </div>
                            
                            <span>Le mie fatture</span></span>
                        </a>
                    </li>
                    <li>
                        <a class="profilo-sidenav-component group">
                            <div class="profilo-sidenav-icon-box">
                                <i class="fas fa-user "></i> 
                            </div>
                            
                            <span>Il mio profilo</span></span>
                        </a>
                    </li>
                </ul>

    </div>
           

    <div class="flex flex-col gap-4">

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

    

</section>