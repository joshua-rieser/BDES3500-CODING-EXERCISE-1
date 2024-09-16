<?php

    /*

        [TODO]
        1. GO THROUGH EACH FILE
        2. EXTRACT RELEVANT INFO
        3. STORE AS LIST (OF INFO / ENTRIES)
        4. CONVERT TO JSON
        5. PRINT (SHOW)
        6. FINISHED!

    */

    // 1. GO THROUGH EACH FILE
    $location = "data";
    $filelist = scandir($location);
    print_r($filelist); // SHOW USER

?>