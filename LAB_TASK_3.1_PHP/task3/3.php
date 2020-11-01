<?php

if (isset($_GET['submit'])) {
    $dateOfBirth = $_GET['day'] . " /" . $_GET['month'] . " /" . $_GET['year'];
    echo "Date of birth is: " . $dateOfBirth;
}
