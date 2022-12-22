<?php 

    switch($_GET['tipo']) {

        case 'FAD': 

                if($_GET['sincrona'] == 0) {
                    $fad_selected = "selected";
                } else {
                    $fad_sincrona_selected = "selected";
                }
            
            break;
        case 'RES': 
                $res_selected = "selected";
            break;
        case 'BLENDED': 
                $blended_selected = "selected";
            break;
        case 'FSC': 
                $fsc_selected = "selected";
            break;

    }

?>


<section class="w-full h-screen bg-slate-200 shadow-md hidden lg:flex lg:flex-col  p-4">

    <ul class="space-y-2">
        <li>
            <a class="profilo-sub-component <?= $fad_sincrona_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FAD&sincrona=1">

                <div class="profilo-sub-icon-box <?= $fad_sincrona_selected ?> relative  ">
                    <i class="fas fa-webcam "></i> 
                    <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                </div>
                    
                <span>Corsi FAD Sincrona</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $fad_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FAD&sincrona=0">

                <div class="profilo-sub-icon-box <?= $fad_selected ?>">
                    <i class="fas fa-laptop "></i> 
                </div>
                    
                <span>Corsi FAD</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $res_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=RES">

                <div class="profilo-sub-icon-box <?= $res_selected ?>">
                    <i class="fas fa-building "></i> 
                </div>
                    
                <span>Corsi RES</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $blended_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=BLENDED">

                <div class="profilo-sub-icon-box <?= $blended_selected ?>">
                    <i class="fas fa-users-class "></i> 
                </div>
                    
                <span>Corsi BLENDED</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $fsc_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FSC">

                <div class="profilo-sub-icon-box <?= $fsc_selected ?>">
                    <i class="fas fa-user-hard-hat "></i> 
                </div>
                    
                <span>Corsi FSC</span>
            </a>
        </li>
    </ul>

</section>
