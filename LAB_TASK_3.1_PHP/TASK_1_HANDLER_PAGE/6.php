<?php

if (isset($_GET['submit'])) {
    if (!$_GET['bloodGroup']) {
        echo "Sorry you selected nothing!";
    } else {
        echo "You selected:" . $_GET['bloodGroup'];
    }
}
