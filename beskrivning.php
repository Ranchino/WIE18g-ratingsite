<?php
    include "arraylist.php";
    if(isset($_POST['submit'])){

        $selected = $_POST['dropdown'];
        foreach($topfilm as $key) {
            if($selected == $key['name']){
                echo "<h3>Here is a description for <u>". $selected ."</u>: " . $key['description'] . "</h3>";
            }
        }
    }

?>