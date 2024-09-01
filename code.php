<?php
// تنظیم هدر برای پاسخ به درخواست‌ها با فرمت JSON
header('Content-Type: application/json');

// داده‌های اولیه به صورت آرایه PHP
$data = [
    ["id" => 1, "name" => "John Doe", "email" => "john@example.com"],
    ["id" => 2, "name" => "Jane Doe", "email" => "jane@example.com"]
];

// مدیریت درخواست‌های GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                echo json_encode($item);
                exit;
            }
        }
        echo json_encode(['message' => 'Item not found']);
    } else {
        echo json_encode($data);
    }
}

// مدیریت درخواست‌های POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $newItem = [
        'id' => end($data)['id'] + 1,
        'name' => $input['name'],
        'email' => $input['email']
    ];
    $data[] = $newItem;

    // نمایش داده‌های جدید به صورت JSON
    echo json_encode($newItem);
}

?>
