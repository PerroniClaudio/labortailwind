<?php include('../components/head.php'); ?>

<?php include('../components/pdo.php'); ?>

<div class="container px-8 lg:px-16 mx-auto">
    <?php include('../components/navbar.php'); ?>
</div>

<div class="flex gap-8 container px-8 lg:px-16 mx-auto min-h-screen">

    <aside class="flex-[1_1_0%] h-screen  lg:sticky top-0 pt-10">
        <section class="w-full h-full flex flex-col p-4 gap-4">
            <ul class="pt-2 space-y-4 text-base lg:text-xl">

              <li>

                <a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=FAD&sincrona=0" class="corsi-sidenav-component group <?php echo ( $_GET['category'] == "FAD" ) && ( $_GET['sincrona'] == "0" ) ? "shadow-inner" : "shadow-lg" ?>">
                
                    <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300">
                        <i class="fas fa-laptop "></i> 
                    </div>
                    
                    <span>Corsi <span class="text-sky-500">FAD</span></span>
                
                </a>
                
              </li>

              <li>

                <a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=FAD&sincrona=1" class="corsi-sidenav-component group  <?php echo ( $_GET['category'] == "FAD" ) && ( $_GET['sincrona'] == "1" ) ? "shadow-inner" : "shadow-lg" ?>">

                    <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300">
                        <i class="fas fa-webcam "></i> 
                    </div>
                    
                    <span>Corsi <span class="text-sky-500">FAD</span> sincrona</span>

                </a>
                    
              </li>

              <li>

                <a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=RES" class="corsi-sidenav-component group <?php echo $_GET['category'] == "RES" ? "shadow-inner" : "shadow-lg" ?>">

                    <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300">
                        <i class="fas fa-building "></i> 
                    </div>
                    
                    <span>Corsi <span class="text-sky-500">RES</span></span>

                </a>
                
              </li>

              <li>

                <a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=BLENDED" class="corsi-sidenav-component group <?php echo $_GET['category'] == "BLENDED" ? "shadow-inner" : "shadow-lg" ?>">

                    <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300">
                        <i class="far fa-users-class "></i>
                    </div>
                    
                    <span>Corsi <span class="text-sky-500">Blended</span></span>

                </a>
                
              </li>

              <li>
                
                <a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=FSC" class="corsi-sidenav-component group <?php echo $_GET['category'] == "FSC" ? "shadow-inner" : "shadow-lg" ?>">

                    <div class="corsi-sidenav-icon-box group-hover:bg-slate-50 group-hover:text-slate-300">
                        <i class="fas fa-user-hard-hat "></i> 
                    </div>
                    
                    <span>Corsi con formazione <span class="text-sky-500">sul campo</span></span>
                </a>
                
              </li>

            </ul>

        </section>
    </aside>

    <main class="flex-[3_1_0%] flex flex-col pt-10">

        <section class="flex flex-col items-stretch w-full px-4">
            <h1 class="text-5xl font-bold text-center lg:text-left h-full">Catalogo corsi</h1>
        </section>

        <section class="flex flex-col p-4 w-full"> 

            <?php 

                if($_GET['category'] == "FAD") {

                    $sql = "SELECT * FROM courses WHERE ctg = :ctg AND state = :state AND sincrona = :sincrona AND (STR_TO_DATE(crsddate,'%Y-%m-%d') >= CURRENT_TIMESTAMP AND STR_TO_DATE(ecmddate,'%Y-%m-%d') >= CURRENT_TIMESTAMP) ORDER BY STR_TO_DATE(crsddate,'%Y-%m-%d') DESC ";
                    $statement = $db->prepare($sql);
                    $statement->execute(array("ctg" => $_GET['category'], "state" => 0, "sincrona" => $_GET['sincrona']));

                } else {

                    $sql = "SELECT * FROM courses WHERE ctg = :ctg AND state = :state AND STR_TO_DATE(crsddate,'%Y-%m-%d')>=CURRENT_TIMESTAMP ORDER BY STR_TO_DATE(crsddate,'%Y-%m-%d') ASC";
                    $statement = $db->prepare($sql);
                    $statement->execute(array("ctg" => $_GET['category'], "state" => 0));

                }

                if($statement->rowCount() > 0) {

                    while($course = $statement->fetch()) { ?>

                        <article class="bg-slate-50 p-4 w-full rounded shadow-md flex flex-col items-center md:items-stretch md:flex-row gap-4 mb-2">

                            <img src="https://labormedical.it/courses/<?= $course['crsno'] ?>/crsdet.jpg" class="w-3/4 md:w-1/4 rounded shadow-md" alt="">

                            <section class="flex-1 flex flex-col gap-2 justify-between ">
                                <div>
                                    <p class="text-xs text-sky-500">Corso <?= $course['ctg'] ?></p>
                                    <!-- <h3 class="text-base lg:text-xl font-bold"><?= $course['crsname'] ?></h3> -->
                                    
                                    
                                    <h3 class="text-base lg:text-xl font-bold">
                                        <?= $course['crsname'] ?>
                                        <?php if($course['ecm'] != 0) { ?>
                                            <span class="bg-sky-200 text-sky-500 text-sm rounded-full py-1 px-2"><i class="far fa-tags"></i><span> ECM <?= $course['ecmsave'] ?></span></span>
                                        <?php } else { ?>
                                            <span class="bg-green-200 text-green-500 text-sm rounded-full py-1 px-2"><i class="far fa-times-circle"></i><span> NON ECM</span></span>
                                        <?php } ?>
                                    </h3>
                                    
                                </div>
<!-- 
                                <?php if($course['ecm'] != 0) { ?>

                                    <span class="text-sky-500 font-bold">ECM <?= $course['ecmsave'] ?></span>

                                <?php } ?> -->

                                <a href="./dettaglio.php?crsno=<?= $course['crsno'] ?>" class="btn bg-sky-500 hover:bg-sky-600 text-sky-50 text-center p-2 font-semibold rounded w-full md:w-1/3 shadow-md">Dettagli</a>
                            </section>

                        </article>


                    <?php

                    }

                } else {

                    ?>

                    <article class="bg-slate-50 p-4 w-full rounded shadow-md flex flex-row items-center justify-center md:items-stretch md:flex-row gap-4 mb-2">

                        <h1 class="text-slate-300 text-2xl font-semibold ">Nessun corso disponibile</h1>

                    </article>
                    
                    <?php 

                }

            ?>

        </section>

    </main>
</div>

<?php include('../components/footer.php'); ?>