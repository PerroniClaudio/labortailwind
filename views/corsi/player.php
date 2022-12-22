<?php include('../components/head.php'); ?>
<?php include('../components/pdo.php'); ?>
<?php include('../components/AccordionItem.php'); ?>

<?php 

    $sql = "SELECT * FROM courses WHERE crsno = :crsno";
    $statement = $db->prepare($sql);
    $statement->execute(array("crsno" => $_GET['crsno']));
    $course = $statement->fetch();

?>

<div class="container px-4 lg:px-16 mx-auto">
    <?php include('../components/navbar.php'); ?>
</div>

<main>

    <?php 

        if($course['sincrona'] == 0) {
    
    ?>

    <video class="w-full lg:h-[80vh] bg-slate-900" controls controlsList="nodownload noplaybackrate" disablePictureInPicture defaultPlaybackRate="1" >
        <source src="https://dev.labormedical.it/labormedical.it/public/courses/<?= $_GET['crsno']?>/<?= $_GET['crsno']?>_vid_lm_vvv.mp4"" type="video/mp4">
    </video>

    <div class="bg-white rounded p-4 w-full shadow-2xl grid grid-flow-col grid-rows-1 gap-4 items-center justify-center overflow-x-scroll max-w-screen">

            <?php 
                
                foreach (new DirectoryIterator("/var/www/html/labormedical.it/public/courses/{$_GET['crsno']}/thumbs/") as $fileInfo) {
                    if($fileInfo->isDot()) continue;
                    
                    ?>

                    <a href="" class="bg-slate-300 p-4 flex flex-col items-center justify-center rounded w-36">
                        <img src="https://dev.labormedical.it/labormedical.it/public/courses/<?= $_GET['crsno']?>/thumbs/<?= $fileInfo->getFilename() ?>" class="w-36 cursor-pointer rounded" alt="">
                    </a>


                    <?php 

                }
                
            ?>

    </div>

    <?php 

        } else {

            $sql_live = "SELECT * FROM courses_live WHERE crsno = :crsno";
            $statement_live = $db->prepare($sql_live);
            $statement_live->execute(array("crsno" =>  $_GET['crsno']));
            $live = $statement_live->fetch();

            ?>

            <video class="w-full lg:h-[80vh] bg-slate-900" controls controlsList="nodownload noplaybackrate" disablePictureInPicture defaultPlaybackRate="1" >
                <source src="https://dev.labormedical.it/labormedical.it/public/courses/<?= $_GET['crsno']?>/live_<?= $live['live_id'] ?>/video.mp4"" type="video/mp4">
            </video>

            <?php

        }
                
    ?>

    <section class="container p-4 lg:p-8 flex flex-col lg:flex-row lg:gap-4 mx-auto">

        <section class="order-2 lg:flex-[3_1_0%] flex flex-col gap-4 mb-4">

            <div>
                <p class="text-sky-500 text-xs"><?= $course['crsno'] ?></p>
                <h1 class="text-2xl font-bold"><?= $course['crsname'] ?></h1>
            </div>

            <p><?= preg_replace('/<[^>]*>/', '', $course['desc']) ?></p>

            <section class="accordion flex flex-col gap-4" id="course-content-accordion">
                <?php 
                echo accordionItem("obiettivi", "Obiettivi", $course['obj'], false );
                echo accordionItem("faculty", "Faculty", $course['resp'] . " <br> " .  $course['doc'], false );
                ?>
            </section>

        </section>

        <aside class="order-1 lg:flex-[1_1_0%] flex flex-col gap-2 mb-4" >
            <button class="btn w-full bg-sky-500 text-sky-50 p-4 rounded shadow-md">
                Riprendi dall'ultima interruzione
            </button>

            <a href="https://dev.labormedical.it/labortailwind/views/utente/corsi.php?tipo=FAD&sincrona=0" class="btn w-full bg-sky-300 text-sky-50 p-4 rounded shadow-md text-center">
                Torna ai tuoi corsi
            </a>
        </aside>

    </section>

</main>

<?php include('../components/footer.php'); ?>
<?php include('../components/accordion.php'); ?>


<script>

    var video = document.querySelector('video');
    var supposedCurrentTime = 0;

    video.addEventListener('timeupdate', function() {
        if (!video.seeking) {
            supposedCurrentTime = video.currentTime;
        }
    });

    video.addEventListener('seeking', function() {

        if( video.currentTime > supposedCurrentTime) {
            video.currentTime = supposedCurrentTime;
        }

    });


</script>