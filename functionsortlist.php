<?php
    function sortList() {
        include "arraylist.php";
        asort($topfilm);

        foreach(array_keys($topfilm) as $key) {
            echo "<h4><option> $key <br></option></h4>";
        }
    }
?>