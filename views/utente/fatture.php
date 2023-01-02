<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>

<?php include('../components/SidenavModal.php'); ?>

<?php 

    $uid = 9689;

    $sql = "SELECT * FROM users WHERE uid = :uid";
    $statement = $db->prepare($sql);
    $statement->execute(array("uid" => $uid));
    $user = $statement->fetch();

    $initials = substr($user['name'],0,1) . substr($user['surname'],0,1);
    $fullname = ucfirst(strtolower($user['name'])) . " " . ucfirst(strtolower($user['surname']));

?>


<div class="flex">

    <aside class="lg:flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloMainSidenav.php'); ?>
       
    </aside>

    <aside class="lg:flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloFattureSidenav.php'); ?>
       
    </aside>

    <main class="flex-[3_1_0%]">

        <section class="flex flex-col gap-4 p-4 min-h-screen">
            
            <?php include('../components/navbar.php'); ?>

            <?php 

                $orders = 0;

                $order_ids = [];
                for($i = 0; $i <= 5; $i++) {
                    $order_ids[] = random_int(111, 999);
                }

                rsort($order_ids);

                do {

                ?>

                    <article class="w-full bg-white shadow p-4 rounded">

                        <section class="flex items-center gap-2 w-full">

                            <h3 class="text-2xl flex-1">Ordine #<?= $order_ids[$orders] ?></h3>

                            <div class="text-white bg-sky-500 hover:bg-sky-600  p-2 rounded w-10 h-10 flex items-center justify-center cursor-pointer">
                                <i class="fas fa-file-pdf"></i>
                            </div>

                            <div class="text-white bg-sky-500 hover:bg-sky-600  p-2 rounded w-10 h-10 flex items-center justify-center cursor-pointer">
                                <i class="fas fa-file-code"></i>
                            </div>
                            
                        </section>

                        <section class="p-4">

                            <ul class="list-disc">
                                <li class="text-sm">Corso CRS-1425 - LA GESTIONE DELLA PRIVACY IN AMBITO SANITARIO</li>
                                <li class="text-sm">Corso CRS-1378 - GESTIONE CLINICO ASSISTENZIALE DEL PAZIENTE FRAGILE </li>
                                <li class="text-sm">Corso CRS-1277 - FINE VITA E DAT: DALL'ASPETTO CLINICO A QUELLO NORMATIVO</li>
                            </ul>

                        </section>

                        

                    </article>

                <?php 

                    $orders ++;

                } while($orders < 5);
            
            ?>
                    
        </section>

        <?php include('../components/footer.php'); ?>

    </main>

</div>