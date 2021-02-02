<?php
    include 'config/validation.php';

    // Send form data to validation class
    $door_open = new Forms();
    $door_open->BillingValidate($_POST);
?>