<?php

if (isset($_GET['submit'])) {
    $email = $_GET['email'];
    echo "Your email: " . $email;
}
