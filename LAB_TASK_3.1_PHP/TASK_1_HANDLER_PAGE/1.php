<?php

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    echo "Your name is: " . "$name";
}
