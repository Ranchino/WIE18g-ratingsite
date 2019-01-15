<?php
    function sortList() {
        include "arraylist.php";
        asort($topfilm);

        foreach($topfilm as $key) {
            echo "<h4><option>" . $key['name'] . "<br></option></h4>";
        }
    }
?>