<?php

if (isset($_GET['submit'])) {
    $gender = $_GET['gender'];
    echo "Selected gender: " . $gender;
}
