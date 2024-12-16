<?php
$file = 'data.csv'; // Đường dẫn file CSV
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<h1>Danh sách tài khoản</h1>
<a href="products.php?action=add">Thêm tài khoản</a>
<table>
    <thead>
    <tr>
        <th>Tên người dùng</th>
        <th>Mật khẩu</th>
        <th>Họ</th>
        <th>Tên đầu tiên</th>
        <th>Thành phố</th>
        <th>E-mail</th>
        <th>Khóa học</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (file_exists($file)) {
        if (($handle = fopen($file, 'r')) !== false) {
            $isHeader = true; // Bỏ qua dòng tiêu đề
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if ($isHeader) {
                    $isHeader = false;
                    continue;
                }
                echo '<tr>';
                for ($i = 0; $i < count($data); $i++) {
                    echo '<td>' . htmlspecialchars($data[$i]) . '</td>';
                }
                echo '<td>';
                echo '<a href="products.php?action=edit&username=' . $data[0] . '">Sửa</a> | ';
                echo '<a href="products.php?action=delete&username=' . $data[0] . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')">Xóa</a>';
                echo '</td>';
                echo '</tr>';
            }
            fclose($handle);
        } else {
            echo '<tr><td colspan="8">Không thể đọc file CSV.</td></tr>';
        }
    } else {
        echo '<tr><td colspan="8">File dữ liệu không tồn tại.</td></tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>
