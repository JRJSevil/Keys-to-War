<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Save to CSV file
    $file = fopen("emails.csv", "a");
    fputcsv($file, [$email, date("Y-m-d H:i:s")]);
    fclose($file);
    
    // Optional: Send you an email too
    // mail("your@email.com", "New Signup", $email);
    
    echo "Thanks for signing up! You're on the list.";
}
?>
