<?php 
// تعریف داده‌های JSON به صورت آرایه انجمنی
$userData = [
    "name" => "علی",
    "email" => "ali@example.com",
    "address" => [
        "street" => "خیابان ولیعصر",
        "city" => "تهران"
    ]
];

// تبدیل آرایه به JSON
$jsonData = json_encode($userData, JSON_PRETTY_PRINT);

// نمایش خروجی
echo $jsonData;
?>
