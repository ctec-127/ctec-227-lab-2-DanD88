<?php

    if (isset($_COOKIE["cookie"])) {
        foreach ($_COOKIE["cookie"] as $key => $val) {
            echo $key . ' is '. $val . "<br>\n";
        } // end foreach
    } //end if

    

?>