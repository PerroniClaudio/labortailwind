<?php 

    // switch($_GET['tipo']) {
    //     case 'personali': 
    //             $personali_selected = "selected";
    //         break;
    //     case 'recapito': 
    //             $recapito_selected = "selected";
    //         break;
    //     case 'accesso': 
    //             $accesso_selected = "selected";
    //         break;
    //     case 'professionali': 
    //             $professionali_selected = "selected";
    //         break;
    //     case 'privacy': 
    //             $privacy_selected = "selected";
    //         break;
    // }

?>


<section class="w-full h-screen bg-slate-200 shadow-md hidden lg:flex lg:flex-col  p-4">

    <ul class="space-y-2">
        
        <?php 
        
            $anno = date("Y");

            for($i = $anno; $i >= $anno - 4; $i--) {

                $selected = $i == $_GET['anno'] ? "selected" : "";

                ?>

                <li>
                    <a class="profilo-sub-component <?= $selected ?> group" href="https://dev.labormedical.it/labortailwind/views/utente/fatture.php?anno=<?= $i ?>">

                        <div class="profilo-sub-icon-box <?= $selected ?>">
                            <i class="fas fa-id-card"></i>
                        </div>
                            
                        <span>Anno <?= $i ?></span>
                    </a>
                </li>

                <?php 

            }
                
        ?>
    </ul>

</section>
