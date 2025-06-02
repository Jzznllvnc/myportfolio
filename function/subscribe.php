<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (empty($email)) {
        echo json_encode(["status" => "error", "message" => "Email address is required."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit;
    }

    $log_file = 'C:/xampp/htdocs/portfolio/function/subscribers.log';
    $success_message = "Thank you for connecting! Your email has been received.";
    $write_result = file_put_contents($log_file, $email . "\n", FILE_APPEND | LOCK_EX);

    if ($write_result !== false) {
        if ($write_result > 0) {
            echo json_encode(["status" => "success", "message" => $success_message]);
        } else {
            $last_error = error_get_last();
            $error_detail = $last_error ? $last_error['message'] : "No specific PHP error found.";
            error_log("Failed to write to subscribers.log (0 bytes written). Path: " . $log_file . " Error: " . $error_detail);
            echo json_encode(["status" => "error", "message" => "Failed to save your email (0 bytes written). Please check server logs."]);
        }
    } else {
        $last_error = error_get_last();
        $error_detail = $last_error ? $last_error['message'] : "No specific PHP error found.";
        error_log("Failed to write to subscribers.log (file_put_contents returned false). Path: " . $log_file . " Error: " . $error_detail);
        echo json_encode(["status" => "error", "message" => "Failed to save your email. Permission or path issue. Check server logs."]);
    }

} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>