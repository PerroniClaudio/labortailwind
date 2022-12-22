<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>
<?php include('../components/ProfiloCourseCard.php'); ?>
<?php include('../components/SidenavModal.php'); ?>


<?php 

    $uid = 6004;

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

        <?php include('../components/ProfiloCorsiSidenav.php'); ?>

    </aside>
    
    <main class="flex-[3_1_0%]">

        <section class="flex flex-col gap-4 p-4 min-h-screen">
            
        <?php include('../components/navbar.php'); ?>
        
        <?php 

            if($_GET['sincrona'] == 1) {
                $sql_courses_usr = "SELECT  * FROM courses_usr, courses WHERE courses_usr.crsno = courses.crsno AND courses_usr.rdate > '2021-01-01' AND courses.sincrona = 1 AND courses.ctg = :ctg AND courses_usr.uid = :uid ORDER BY courses_usr.rdate DESC ";
            } else {
                $sql_courses_usr = "SELECT * FROM courses_usr, courses WHERE courses_usr.crsno = courses.crsno AND courses_usr.rdate > '2022-01-01' AND courses.sincrona = 0 AND courses.ctg = :ctg AND courses_usr.uid = :uid ORDER BY courses_usr.rdate DESC ";
            }

            $statement_courses_usr = $db->prepare($sql_courses_usr);
            $statement_courses_usr->execute(array("uid" => $uid, "ctg" => $_GET['tipo']));

            if($statement_courses_usr->rowCount() > 0) {
                while($course = $statement_courses_usr->fetch()) {

                    echo ProfiloCourseCard($course);
    
                }
            } else {

                ?>

                <article class="bg-slate-50 p-4 w-full rounded shadow-md flex flex-col items-center gap-4 ">
                    <h3 class="text-base lg:text-xl font-bold">Nessun corso disponible</h3>
                    <a href="https://dev.labormedical.it/labortailwind/views/corsi/list.php?category=<?= $_GET['tipo'] ?>" class="text-sky-300">Visita il catalogo</a>
                </article>
                
                <?php 
            }

        ?>

        </section>

        <?php include('../components/footer.php'); ?>
    </main>

</div>

