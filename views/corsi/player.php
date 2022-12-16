<?php include('../components/head.php'); ?>

<main class="grid grid-cols-10 gap-4 p-8 h-screen w-screen">

    <div class="bg-white rounded p-4 col-span-8  shadow-2xl">

        <video class="w-full rounded" controls controlsList="nodownload">
            <source src="https://dev.labormedical.it/labormedical.it/public/courses/<?= $_GET['crsno']?>/<?= $_GET['crsno']?>_vid_lm_vvv.mp4"" type="video/mp4">
        </video>

    </div>

    <aside class="col-span-2">

        <div class="bg-white rounded p-4 w-full shadow-2xl">

            <div class="overflow-y-scroll max-h-96">

                <?php 
                

                    foreach (new DirectoryIterator("/var/www/html/labormedical.it/public/courses/{$_GET['crsno']}/thumbs/") as $fileInfo) {
                        if($fileInfo->isDot()) continue;
                        
                        ?>

                        <img src="https://dev.labormedical.it/labormedical.it/public/courses/<?= $_GET['crsno']?>/thumbs/<?= $fileInfo->getFilename() ?>" class="w-full rounded mb-2" alt="">
    
                        <?php 

                    }
                ?>

            </div>

        </div>

    </aside>

</main>