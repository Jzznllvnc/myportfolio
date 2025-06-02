<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    $recipient = "jazznelle002@gmail.com";
    $subject = "Portfolio - jzznllvnc. : New Email from " . $name;

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        echo json_encode(["status" => "success", "message" => "Thank you for your message, " . $name . "! I will get back to you soon."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Oops! Something went wrong and we couldn't send your message."]);
    }

} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>