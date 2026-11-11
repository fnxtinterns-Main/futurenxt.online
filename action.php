<?php
/**
 * FutureNxt Form Handler
 * Handles Contact Inquiries and Affiliate Registrations cleanly.
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_type = isset($_POST['form_type']) ? trim($_POST['form_type']) : '';

    if ($form_type === 'affiliate' || isset($_POST['affi'])) {
        $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
        $mobile = isset($_POST['mobile']) ? strip_tags(trim($_POST['mobile'])) : '';
        $city = isset($_POST['city']) ? strip_tags(trim($_POST['city'])) : '';
        $category = isset($_POST['category']) ? strip_tags(trim($_POST['category'])) : 'General';

        // Log entry locally for persistent record
        $log_entry = date('Y-m-d H:i:s') . " | AFFILIATE | Name: $name | Email: $email | Mobile: $mobile | City: $city | Track: $category" . PHP_EOL;
        @file_put_contents(__DIR__ . '/submissions.log', $log_entry, FILE_APPEND);

        // Redirect back with success message
        header("Location: affiliates?status=success");
        exit;
    }

    if ($form_type === 'contact' || isset($_POST['sendmail'])) {
        $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
        $contact = isset($_POST['contact']) ? strip_tags(trim($_POST['contact'])) : '';
        $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

        // Log entry locally for persistent record
        $log_entry = date('Y-m-d H:i:s') . " | CONTACT | Name: $name | Email: $email | Subject/Phone: $contact | Message: $message" . PHP_EOL;
        @file_put_contents(__DIR__ . '/submissions.log', $log_entry, FILE_APPEND);

        // Redirect back with success message
        header("Location: contact?status=sent");
        exit;
    }
}

// Fallback redirect
header("Location: ./");
exit;
