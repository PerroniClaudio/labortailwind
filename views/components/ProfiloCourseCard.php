<?php 

function ProfiloCourseCard($course) {

    // $id = substr($course['crsid'],1, 3);
    // $img_url = "https://picsum.photos/id/{$id}/300/200";

    $img_url = "https://labormedical.it/courses/{$course['crsno']}/crsdet.jpg";
    $progress = "";
    $video = "";

    if($course['ctg'] == "FAD") {

        if($course['durata_video'] > 0) {
            $perc = round($course['vprog'] * 100 / $course['durata_video']);

            $progress = "
        
                <div class=\"w-full  rounded-full h-2 bg-slate-300\">
                    <div class=\"bg-sky-600 h-2 rounded-full\" style=\"width: {$perc}%\"></div>
                </div>

            ";
    
        } else if ($course['sincrona'] == 1) {

            $progress = "
        
                <div class=\"w-full  rounded-full h-2 bg-slate-300\">
                    <div class=\"bg-sky-600 h-2 rounded-full\" style=\"width: {$course['partecipazione_perc']}%\"></div>
                </div>

            ";


        }

        $video = "<a href=\"https://dev.labormedical.it/labortailwind/views/corsi/player.php?crsno={$course['crsno']}\" class=\"btn bg-sky-500 hover:bg-sky-600 text-sky-50 text-center p-2 font-semibold rounded w-full md:w-1/3 shadow-md\">Visualizza corso</a>";


    } 

    

    return "

        <article class=\"bg-slate-50 p-4 w-full rounded shadow-md flex flex-col items-center md:items-stretch md:flex-row gap-4 \">

            <img src=\"$img_url\" class=\"w-3/4 md:h-36 md:w-1/4 rounded shadow-md\" alt=\"{$course['crsname']}\">

            <section class=\"w-full lg:flex-1 flex flex-col gap-2 justify-between\">
                <div>
                    
                    <h3 class=\"text-base lg:text-xl font-bold\">
                        {$course['crsname']}
                    </h3>
                    
                </div>

                $progress

                $video

            </section>
        </article>
    
    ";

}
