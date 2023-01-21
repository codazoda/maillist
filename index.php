<?php

// Set some default values
$file = '../list.txt';

// Verify an email address was POSTed
if (!empty($_POST['email'])) {
    // Sanatize the email value that was POSTed
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    // Append the email address to our list
    file_put_contents($file, $email . "\n", FILE_APPEND);
    // Let the user know it was saved
    echo "Thank you, you've been subscribed.";
} else {
    // Let the user know it was not saved
    echo "You were not subscribed because you didn't provide an email address.";
}
