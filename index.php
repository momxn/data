<?php
// خواندن داده‌های JSON از فایل
$json_data = file_get_contents('data.json');

// تبدیل JSON به آرایه PHP
$data = json_decode($json_data, true);

// ارسال پاسخ به صورت JSON
header('Content-Type: application/json');
echo json_encode($data);
