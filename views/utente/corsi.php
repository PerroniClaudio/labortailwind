<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>
<?php include('../components/ProfiloCourseCard.php'); ?>

<?php 

    $sql = "SELECT * FROM users WHERE uid = :uid";
    $statement = $db->prepare($sql);
    $statement->execute(array("uid" => 150));
    $user = $statement->fetch();

    $initials = substr($user['name'],0,1) . substr($user['surname'],0,1);
    $fullname = ucfirst(strtolower($user['name'])) . " " . ucfirst(strtolower($user['surname']));

?>

<div class="flex">

    <aside class="flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloMainSidenav.php'); ?>
       
    </aside>

    <aside class="flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloCorsiSidenav.php'); ?>

    </aside>
    
    <main class="flex-[3_1_0%] flex flex-col gap-4 p-4">
        
        <?php 

            if($_GET['sincrona'] == 1) {
                $sql_courses_usr = "SELECT * FROM courses_usr, courses WHERE courses_usr.crsno = courses.crsno AND courses_usr.rdate > '2022-01-01' AND courses.sincrona = 1 AND courses.ctg = :ctg AND courses_usr.uid = :uid ORDER BY courses_usr.rdate DESC ";
            } else {
                $sql_courses_usr = "SELECT * FROM courses_usr, courses WHERE courses_usr.crsno = courses.crsno AND courses_usr.rdate > '2022-01-01' AND courses.sincrona = 0 AND courses.ctg = :ctg AND courses_usr.uid = :uid ORDER BY courses_usr.rdate DESC ";
            }

            $statement_courses_usr = $db->prepare($sql_courses_usr);
            $statement_courses_usr->execute(array("uid" => 150, "ctg" => $_GET['tipo']));
            
            while($course = $statement_courses_usr->fetch()) {

                echo ProfiloCourseCard($course);

            }
        
        
        ?>


    </main>

</div>