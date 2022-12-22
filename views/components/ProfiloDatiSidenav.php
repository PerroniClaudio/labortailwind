<?php 

    switch($_GET['tipo']) {
        case 'personali': 
                $personali_selected = "selected";
            break;
        case 'recapito': 
                $recapito_selected = "selected";
            break;
        case 'accesso': 
                $accesso_selected = "selected";
            break;
        case 'professionali': 
                $professionali_selected = "selected";
            break;
        case 'privacy': 
                $privacy_selected = "selected";
            break;
    }

?>


<section class="w-full h-screen bg-slate-200 shadow-md hidden lg:flex lg:flex-col  p-4">

    <ul class="space-y-2">
        <li>
            <a class="profilo-sub-component <?= $personali_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/profilo.php?tipo=personali">

                <div class="profilo-sub-icon-box <?= $personali_selected ?>">
                    <i class="fas fa-id-card"></i>
                </div>
                    
                <span>Dati personali</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $recapito_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/profilo.php?tipo=recapito">

                <div class="profilo-sub-icon-box <?= $recapito_selected ?>">
                    <i class="fas fa-map-marker-alt    "></i>
                </div>
                    
                <span>Dati di recapito</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $accesso_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/profilo.php?tipo=accesso">

                <div class="profilo-sub-icon-box <?= $accesso_selected ?>">
                    <i class="fas fa-lock-alt"></i>
                </div>
                    
                <span>Credenziali di acesso</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $professionali_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/profilo.php?tipo=professionali">

                <div class="profilo-sub-icon-box <?= $professionali_selected ?>">
                    <i class="fas fa-user-md    "></i>
                </div>
                    
                <span>Dati professionali</span>
            </a>
        </li>
        <li>
            <a class="profilo-sub-component <?= $privacy_selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/profilo.php?tipo=professionali">

                <div class="profilo-sub-icon-box <?= $privacy_selected ?>">
                    <i class="fas fa-user-shield    "></i>
                </div>
                    
                <span>Privacy</span>
            </a>
        </li>
    </ul>

</section>
