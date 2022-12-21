<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>

<?php 

    $sql = "SELECT * FROM users WHERE uid = :uid";
    $statement = $db->prepare($sql);
    $statement->execute(array("uid" => 9689));
    $user = $statement->fetch();

    $initials = substr($user['name'],0,1) . substr($user['surname'],0,1);
    $fullname = ucfirst(strtolower($user['name'])) . " " . ucfirst(strtolower($user['surname']));

?>

<div class="flex">

    <aside class="flex-[1_1_0%] h-screen sticky top-0">

        <?php include('../components/ProfiloMainSidenav.php'); ?>
       
    </aside>

    <aside class="flex-[1_1_0%] h-screen sticky top-0">
        // Fixed Sidebar
    </aside>
    
    <main class="flex-[3_1_0%]">
        // Content
    </main>

</div>