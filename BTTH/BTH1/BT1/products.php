<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        [
            'name' => 'Hoa dạ yến thảo',
            'description' => 'Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.',
            'image' => 'images/dayenthao.png'
        ],
        [
            'name' => ' Hoa đồng tiền ',
            'description' => 'Hoa đồng tiền thích hợp để trồng trong mùa xuân và đầu mùa hè, khi mà cường độ ánh sáng chưa quá mạnh. Cây có hoa to, nở rộ rực rỡ, lại khá dễ trồng và chăm sóc nên sẽ là lựa chọn thích hợp của bạn trong tiết trời này. Về mặt ý nghĩa, hoa đồng tiền cũng tượng trưng cho sự sung túc, tình yêu và hạnh phúc viên mãn.',
            'image' => 'images/hoadongtien.png'
        ],
        [
            'name' => 'Hoa giấy',
            'description' => 'Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta, thích hợp với nhiều điều kiện sống khác nhau nên rất dễ trồng, không tốn quá nhiều công chăm sóc nhưng thành quả mang lại sẽ khiến bạn vô cùng hài lòng. Hoa giấy mỏng manh nhưng rất lâu tàn, với nhiều màu như trắng, xanh, đỏ, hồng, tím, vàng… cùng nhiều sắc độ khác nhau. Vào mùa khô hanh, hoa vẫn tươi sáng trên cây khiến ngôi nhà luôn luôn bừng sáng.
',
            'image' => 'images/hoagiay.png'
        ],
        [
            'name' => 'Hoa thanh tú',
            'description' => 'Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng của hoa thanh tú có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm. Cây khá dễ trồng, lại nở nhiều hoa cùng một lúc, từ một bụi nhỏ có thể đâm nhánh, tạo nên những cây con phát triển sum suê. Thanh tú trồng ở nơi có nắng sẽ ra hoa nhiều, vì thế thích hợp trong cả mùa xuân lẫn mùa hè, đem lại khoảng không gian xanh mát cho ngôi nhà ngày oi nóng.',
            'image' => 'images/hoathanhtu.png'
        ],
        [
            'name' => 'Hoa đèn lồng',
            'description' => 'Giống như tên gọi, hoa đèn lồng có vẻ đẹp giống như chiếc đèn lồng đỏ trên cao. Nếu giàu trí tưởng tượng hơn, chúng ta sẽ hình dung hoa khi nụ đổ xuống thành từng chùm, kết năm kết ba như những thiếu nữ xúng xính trong chiếc đầm dạ hội. Hoa đèn lồng còn có tên là hồng đăng hoa, trồng trong chậu treo, bồn, phên dậu,… gieo hạt vào mùa xuân và cho hoa quanh năm.',
            'image' => 'images/hoadenlong.png'
        ],
        [
            'name' => 'Hoa cẩm chướng',
            'description' => 'Cẩm chướng là loại hoa thích hợp trồng vào dịp xuân - hè, nếu tiết trời không quá lạnh có thể kéo dài đến tận mùa đông. Hoa có phần thân mảnh, các đốt ngắn mang lá kép cùng nhiều màu sắc như hồng, vàng, đỏ, tím,… thậm chí có thể pha lẫn màu để tạo nên đường viền xinh xắn. Đặt một chậu hoa cẩm chướng trên bàn sẽ khiến căn phòng của bạn đẹp mắt hơn rất nhiều.',
            'image' => 'images/hoacamchuong.png'
        ],[
            'name' => 'Hoa huỳnh anh',
            'description' => 'Nếu bạn đang đi tìm một loài hoa tô điểm cho khu vực ban công hoặc hàng rào ngôi nhà thì huỳnh anh là một lựa chọn thích hợp trong mùa này hơn cả. Hoa có màu vàng rực, hình dạng như chiếc kèn be bé inh xinh, lại dễ trồng, mọc nhanh, vươn cao… Huỳnh Anh rất thích nắng, ánh nắng giúp hoa tỏa sáng rực rỡ, nếu ở nơi bóng râm thì chúng sẽ nhạt màu, kém sắc.
',
            'image' => 'images/hoahuynhanh.png'
        ],
        [
            'name' => 'Hoa Păng-xê',
            'description' => 'Vào mỗi độ tháng 4 về là dịp mà loài hoa Phăng-xê nở rộ vô cùng đẹp mắt. Hoa còn được gọi tên là hay hoa bướm, hoa tử la lan, hoa tương tư,… Păng-xê thường được trồng trong chậu nhỏ, với phần cánh mỏng mượt như nhung, hình dạng cánh bướm mềm mại như đang tung tăng nhảy múa mỗi khi có làn gió thổi qua. Đây cũng là loài hoa tinh tế và sức sống bền bỉ. 
',
            'image' => 'images/hoapang-xe.png'
        ],
        [
            'name' => ' Hoa sen ',
            'description' => 'Khi những tia nắng ấm áp của mùa hè bắt đầu xuất hiện thì cũng là lúc mùa sen lại về trên những cánh đồng bạt ngàn. Hoa sen tượng trưng cho vẻ đẹp trắng trong, tao nhã của tâm hồn. Hoa có thể được trồng trong chiếc ao vườn nhà, có thể được trồng trong chậu trang trí đều đẹp cả. Những bông hoa đẹp nở rộ như báo hiệu một mùa hè tuyệt đẹp hiện hữu trong ngôi nhà của bạn..',
            'image' => 'images/hoasen.png'
        ],[
            'name' => 'Hoa dừa cạn',
            'description' => 'Hoa dừa cạn còn có các tên gọi như trường xuân hoa, dương giác, bông dừa, mỹ miều hơn thì là Hải Đằng. Hoa nở không ngừng từ mùa xuân sang mùa hè cho đến tận mùa thu. Hoa có 3 màu cơ bản là trắng, hồng nhạt và tím nhạt, lá và hoa cùng nhau vươn lên khiến cho khóm dừa cạn tuy nhỏ bé nhưng luôn tràn đầy sức sống. Loài hoa này còn tượng trưng cho sự thành đạt và có khả năng trừ tà.
',
            'image' => 'images/hoaduacan.png'
        ],
        [
            'name' => ' Hoa sử quân tử',
            'description' => 'Sử quân tử là loài cây leo, hoa có cánh nhỏ xinh, màu hồng pha trắng hoặc đỏ tươi, mọc thành từng chùm khoe sắc trong nắng sớm, rung rinh trong gió. Hoa toát lên một vẻ đẹp vô cùng giản dị kèm theo mùi hương nồng đượm. Tuy nhẹ nhàng là thế nhưng sử quân tử lại có khả năng chịu được nắng nóng khắc nghiệt nên có thể trồng trong cả mùa hè.',
            'image' => 'images/hoasuquantu.png'
        ],
        [
            'name' => 'Cúc lá nho',
            'description' => 'Cúc lá nho thuộc họ nhà Cúc, được biết đến với những bông hoa nhiều màu sắc phong phú, tươi sáng: nào là trắng, hồng cho đến tím, xanh dương,… và những chiếc lá to với hình dáng răng cưa độc đáo. Hạt cúc lá nho nảy mầm nhanh vào mùa xuân, nở hoa sang tận mùa hè lẫn mùa thu. Đây là loại hoa biểu trưng cho sự giàu có và trường thọ.
',
            'image' => 'images/cuclanho.png'
        ],[
            'name' => 'Cẩm tú cầu',
            'description' => 'Cẩm tú cầu là loại cây thường mọc thành bụi có hoa nở to thành từng chùm và đặc biệt thích hợp với mùa hè. Hoa ưa ánh nắng mặt trời từ bình minh cho đến khi lặn xuống mỗi chiều tà. Hoa có nhiều màu sắc như trắng, tím, hồng, xanh rất nhẹ nhàng. Hoa thích hợp trồng nơi sân vườn rộng rãi hoặc chậu nhỏ để trang trí nhà ở.
',
            'image' => 'images/camtucau.png'
        ],
        [
            'name' => ' Hoa cúc dại',
            'description' => 'Với phần thân mảnh mai nhưng luôn vươn lên mạnh mẽ, lại chịu được nhiệt độ cao, thậm chí là khi tiết trời hạn hán nên hoa cúc dại cực kỳ thích hợp trồng từ mùa xuân cho đến tận mùa hè nắng gắt. Hoa có màu trắng, hồng tươi sáng hay vàng cam nổi bật, không kiêu sa nhưng sức sống bền bỉ. Thậm chí khi hoa tàn, hạt rụng xuống đất lại tiếp tục phát triển vào mùa thu.
',
            'image' => 'images/hoacucdai.png'
        ],
    ];
}

// Function to handle file upload
function uploadImage($file) {
    // Define the target directory for uploads
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is a valid image
    if (getimagesize($file["tmp_name"]) === false) {
        return false; // Not an image
    }

    // Check file size (limit to 2MB)
    if ($file["size"] > 2000000) {
        return false; // File is too large
    }

    // Allow only certain file formats
    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        return false; // Invalid file format
    }

    // Try to move the uploaded file
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $targetFile;
    } else {
        return false; // File upload failed
    }
}

// CRUD Actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'add') {
            // Handle file upload for 'add' action
            $imagePath = uploadImage($_FILES['image']);
            if ($imagePath) {
                $_SESSION['products'][] = [
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'image' => $imagePath
                ];
            } else {
                echo "Failed to upload image.";
            }
        } elseif ($action === 'edit') {
            // Handle file upload for 'edit' action (if image is updated)
            $index = $_POST['index'];
            $imagePath = $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE ? $_SESSION['products'][$index]['image'] : uploadImage($_FILES['image']);
            if ($imagePath) {
                $_SESSION['products'][$index] = [
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'image' => $imagePath
                ];
            } else {
                echo "Failed to upload image.";
            }
        } elseif ($action === 'delete') {
            // Delete product
            $index = $_POST['index'];
            array_splice($_SESSION['products'], $index, 1);
        }
    }
}

$products = $_SESSION['products'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
        }

        form {
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
        }

        input[type="text"], input[type="file"] {
            padding: 10px;
            margin: 5px 0 20px 0;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .product-img {
            width: 100px;
            height: auto;
        }

        .delete-btn {
            color: red;
            background: none;
            border: none;
            cursor: pointer;
        }

        .edit-form input {
            width: 200px;
        }
    </style>
</head>
<body>
<h1>Product Management</h1>

<!-- Add New Product Form -->
<h2>Add New Product</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="add">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required>
    </div>
    <div>
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
    </div>
    <button type="submit">Add Product</button>
</form>

<!-- Display Existing Products -->
<h2>Product List</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $index => $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="product-img"></td>
            <td>
                <!-- Edit Form -->
                <form method="POST" class="edit-form" style="display:inline;" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <input type="text" name="name" value="<?= $product['name'] ?>" required>
                    <input type="text" name="description" value="<?= $product['description'] ?>" required>
                    <input type="file" name="image" accept="image/*">
                    <button type="submit">Edit</button>
                </form>

                <!-- Delete Form -->
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <button type="submit" class="delete-btn">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
