<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>
<?php include('../components/AccordionItem.php'); ?>
<?php include('../components/SidenavModal.php'); ?>

<?php 

    $sql = "SELECT * FROM courses WHERE crsno = :crsno";
    $statement = $db->prepare($sql);
    $statement->execute(array("crsno" => $_GET['crsno']));
    $course = $statement->fetch();
    
?>

    <div class="container px-8 lg:px-16 mx-auto">
        <?php include('../components/navbar.php'); ?>
    </div>


    <main class="container grid grid-cols-12 lg:gap-4 px-8 lg:px-16 mx-auto min-h-screen">

        <aside class="self-start lg:sticky top-0 col-span-12 lg:col-span-3 py-4">
            <section class="w-full flex flex-col bg-white shadow-lg rounded p-4 gap-4 mb-3">

                <img src="https://labormedical.it/courses/<?= $_GET['crsno'] ?>/crsdet.jpg" class="w-full rounded shadow-md" alt="">

                <h3 class="font-bold text-4xl"><?= $course['pricebase'] ?> €</h3>

                <button class="btn bg-sky-500 hover:bg-sky-600 cursor-pointer text-2xl text-sky-50 rounded w-full p-4">Aggiungi al carrello</button>

                <div>
                    <p class="text-base font-bold">Questo corso include:</p>
                    <ul class="pt-2 space-y-4 text-base">
                        <li class="flex items-center gap-2 font-semibold">
                            <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-desktop-alt text-sky-500"></i> 
                            </div>
                            <span><?= $course['duration'] ?> ore di contenuti</span>
                        </li>
                        <li class="flex items-center gap-2 font-semibold">
                            <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-book text-sky-500"></i> 
                            </div>
                            <span>Materiale didattico</span>
                        </li>
                        <li class="flex items-center gap-2 font-semibold">
                            <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-file-certificate text-sky-500"></i> 
                            </div>
                            <span>Attestato di superamento</span>
                        </li>
                        <li class="flex items-center gap-2 font-semibold">
                            <div class="bg-sky-200 p-2 rounded w-10 h-10 flex items-center justify-center">
                                <i class="far fa-tags text-sky-500"></i> 
                            </div>
                            <span><?= $course['ecmsave'] ?> Crediti ecm</span>
                        </li>
                    </ul>
                </div>

                <hr class="my-2 h-px bg-slate-200 border-0">

                <section id="didattica">

                    <p class="text-base font-bold mb-2">Didattica:</p>

                    <?php 

                        switch($course['ctg']) {
                            case "FAD": 

                                    if($course['sincrona'] == 1) { ?>

                                        <div class="flex items-center gap-2 font-semibold">
                                            <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300"><i class="fas fa-webcam "></i> </div>
                                            <span><span class="text-sky-500">FAD</span> sincrona</span>
                                        </div>

                                    <?php } else {  ?>

                                        <div class="flex items-center gap-2 font-semibold">
                                            <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300"><i class="fas fa-webcam "></i> </div>
                                            <span><span class="text-sky-500">FAD</span></span>
                                        </div>
                                        
                                    <?php }
                                
                                break;
                            case "RES": 
                                
                                break;
                            case "BLENDED": 
                                
                                break;
                            case "FSC": 
                                
                                break;
                        }
                    
                    ?>

                </section>

            </section>

            <section id="calendario" class="w-full flex flex-col bg-white shadow-lg rounded p-4">
                    <p class="text-base font-bold mb-2">Calendario:</p>
                    <article class="max-h-48 overflow-y-scroll p-2">
                        <?= $course['calendario']; ?>
                    </article>
            </section>
        </aside>
                    
        <section class="col-span-12 lg:col-span-9 py-4 flex flex-col gap-8">
           
            <div>
                <p class="text-sky-500 text-xs"><?= $course['crsno'] ?></p>
                <h1 class="text-5xl font-bold"><?= $course['crsname'] ?></h1>
            </div>

            <section class="accordion flex flex-col gap-8" id="course-content-accordion">

                <?php 

                    echo accordionItem("presentazione-corso", "Presentazione del corso", preg_replace('/<[^>]*>/', '', $course['desc']), true );
                    echo accordionItem("destinatari", "Destinatari", $course['dest'], false );
                    echo accordionItem("obiettivi", "Obiettivi", $course['obj'], false );
                    echo accordionItem("faculty", "Faculty", $course['resp'] . " <br> " .  $course['doc'], false );
                    echo accordionItem("programma", "Programma", $course['prg'], false );
                    echo accordionItem("requisiti-acquisizione", "Requisiti per l'acquisizione dei crediti ECM", $course['acquisizione'], false ); 

                ?>

            </section>
   
            
        </section>

    </main>



<?php include('../components/footer.php'); ?>
<?php include('../components/accordion.php'); ?>
