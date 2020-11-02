<?php

if (isset($_GET['submit'])) {
    $items = $_GET['degree'];
    echo "You have selected: ";
    foreach ($items as $item) {
        echo $item . " ";
    }
}
