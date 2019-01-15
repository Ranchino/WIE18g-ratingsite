<?php
    include "arraylist.php";
    if(isset($_POST['submit'])){

        $selected = $_POST['dropdown'];
        foreach($topfilm as $key => $value) {
            if($key == $selected){
                echo "<h3>Here is a description: </h3>" .$selected;
                echo $value;
            }
        }
    }

?>