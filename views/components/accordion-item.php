<?php

/**
 * Funzione molto sperimentale, potrei pentirmene molto avanti.
 * Becero tentativo di emulare i functional components di react.
 */


function accordionItem($id, $title, $content, $isOpenByDefault = false) { 

    if($isOpenByDefault) {

        $icon = "fa-chevron-down";
        $accordionClass = "show";

    } else {

        $icon = "fa-chevron-up";
        $accordionClass = "hidden";

    }

    return "

        <div class=\"accordion-item bg-white rounded p-8 w-full shadow-md flex flex-col gap-4\" id=\"$id\"> 

            <div class=\"flex flex-row accordion-header cursor-pointer\" id=\"$id-header\" aria-controls=\"#$id-collapse\" aria-indicator=\"#$id-indicator\">
                <h3 class=\"font-semibold text-2xl flex-1\">$title</h3>

                <div class=\"flex-flex-col items-center justify-center\" id=\"$id-indicator\" aria-labeledby=\"#$id-header\">
                    <i class=\"indicator-icon fas $icon\"></i>
                </div>

            </div>

            <div class=\"accordion-collapse $accordionClass\" id=\"$id-collapse\" aria-labeledby=\"#$id-header\">

                <p class=\"text-justify font-sm\">
                    $content
                </p>

            </div>

        </div>

    ";

}