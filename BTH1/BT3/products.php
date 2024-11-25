<?php
$file = 'data.csv'; // Tên file CSV lưu trữ dữ liệu

// Xử lý Thêm, Sửa dữ liệu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $rows = [];

    // Đọc dữ liệu hiện tại từ file CSV
    if (($handle = fopen($file, 'r')) !== false) {
        $isHeader = true;
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }
            $rows[] = $data;
        }
        fclose($handle);
    }

    // Xử lý thêm mới hoặc cập nhật
    if (isset($_GET['action']) && $_GET['action'] == 'add') {
        // Thêm tài khoản mới
        $rows[] = [$username, $password, $lastname, $firstname, $city, $email, $course];
    } elseif (isset($_GET['action']) && $_GET['action'] == 'edit') {
        // Cập nhật tài khoản
        foreach ($rows as &$row) {
            if ($row[0] == $username) {
                $row = [$username, $password, $lastname, $firstname, $city, $email, $course];
                break;
            }
        }
    }

    // Ghi dữ liệu vào file CSV
    if (($handle = fopen($file, 'w')) !== false) {
        // Ghi dòng tiêu đề
        fputcsv($handle, ['username', 'password', 'lastname', 'firstname', 'city', 'email', 'course']);
        foreach ($rows as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
    }

    header('Location: products.php');
    exit;
}

// Xử lý Xóa tài khoản
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['username'])) {
    $username = $_GET['username'];
    $rows = [];

    // Đọc dữ liệu hiện tại
    if (($handle = fopen($file, 'r')) !== false) {
        $isHeader = true;
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            if ($isHeader) {
                $isHeader = false;
                continue;
            }
            if ($data[0] != $username) { // Bỏ qua tài khoản bị xóa
                $rows[] = $data;
            }
        }
        fclose($handle);
    }

    // Ghi lại dữ liệu sau khi xóa
    if (($handle = fopen($file, 'w')) !== false) {
        // Ghi dòng tiêu đề
        fputcsv($handle, ['username', 'password', 'lastname', 'firstname', 'city', 'email', 'course']);
        foreach ($rows as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
    }

    header('Location: products.php');
    exit;
}

// Hiển thị form Thêm hoặc Sửa
if (isset($_GET['action']) && ($_GET['action'] == 'add' || $_GET['action'] == 'edit')) {
    $username = '';
    $password = '';
    $lastname = '';
    $firstname = '';
    $city = '';
    $email = '';
    $course = '';

    if ($_GET['action'] == 'edit' && isset($_GET['username'])) {
        $username = $_GET['username'];
        if (($handle = fopen($file, 'r')) !== false) {
            $isHeader = true;
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if ($isHeader) {
                    $isHeader = false;
                    continue;
                }
                if ($data[0] == $username) {
                    list($username, $password, $lastname, $firstname, $city, $email, $course) = $data;
                    break;
                }
            }
            fclose($handle);
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_GET['action'] == 'add' ? 'Thêm' : 'Sửa'; ?> tài khoản</title>
    </head>
    <body>
    <h1><?php echo $_GET['action'] == 'add' ? 'Thêm' : 'Sửa'; ?> tài khoản</h1>
    <form method="post">
        <label>Username: <input type="text" name="username" value="<?php echo $username; ?>" required></label><br>
        <label>Password: <input type="text" name="password" value="<?php echo $password; ?>" required></label><br>
        <label>Last Name: <input type="text" name="lastname" value="<?php echo $lastname; ?>" required></label><br>
        <label>First Name: <input type="text" name="firstname" value="<?php echo $firstname; ?>" required></label><br>
        <label>City: <input type="text" name="city" value="<?php echo $city; ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?php echo $email; ?>" required></label><br>
        <label>Course: <input type="text" name="course" value="<?php echo $course; ?>" required></label><br>
        <button type="submit">Lưu</button>
    </form>
    </body>
    </html>
    <?php
    exit;
}

// Hiển thị danh sách tài khoản
$rows = [];
if (($handle = fopen($file, 'r')) !== false) {
    $isHeader = true;
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        if ($isHeader) {
            $isHeader = false;
            continue;
        }
        $rows[] = $data;
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
</head>
<body>
<h1>Danh sách tài khoản</h1>
<a href="products.php?action=add">Thêm tài khoản</a>
<table border="1">
    <thead>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>City</th>
        <th>Email</th>
        <th>Course</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row[0]); ?></td>
            <td><?php echo htmlspecialchars($row[1]); ?></td>
            <td><?php echo htmlspecialchars($row[2]); ?></td>
            <td><?php echo htmlspecialchars($row[3]); ?></td>
            <td><?php echo htmlspecialchars($row[4]); ?></td>
            <td><?php echo htmlspecialchars($row[5]); ?></td>
            <td><?php echo htmlspecialchars($row[6]); ?></td>
            <td>
                <a href="products.php?action=edit&username=<?php echo urlencode($row[0]); ?>">Sửa</a> |
                <a href="products.php?action=delete&username=<?php echo urlencode($row[0]); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
