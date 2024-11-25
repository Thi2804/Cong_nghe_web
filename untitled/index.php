<?php
// Khởi tạo danh sách sản phẩm (có thể lấy từ cơ sở dữ liệu trong thực tế)
$products = [
    ['id' => 1, 'name' => 'Sản phẩm 1', 'quantity' => 10, 'price' => 100000, 'image' => 'uploads/product1.jpg'],
    ['id' => 2, 'name' => 'Sản phẩm 2', 'quantity' => 5, 'price' => 200000, 'image' => 'uploads/product2.jpg'],
];

// Xử lý thêm sản phẩm
if (isset($_POST['addProduct'])) {
    $image = $_FILES['image'];
    $imagePath = '';
    if ($image['error'] == 0) {
        $targetDir = "uploads/";
        $imageName = basename($image['name']);
        $imagePath = $targetDir . $imageName;
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    $newProduct = [
        'id' => count($products) + 1,
        'name' => $_POST['name'],
        'quantity' => $_POST['quantity'],
        'price' => $_POST['price'],
        'image' => $imagePath
    ];
    array_push($products, $newProduct);
}

// Xử lý sửa sản phẩm
if (isset($_POST['editProduct'])) {
    foreach ($products as &$product) {
        if ($product['id'] == $_POST['id']) {
            $product['name'] = $_POST['name'];
            $product['quantity'] = $_POST['quantity'];
            $product['price'] = $_POST['price'];

            if ($_FILES['image']['error'] == 0) {
                $image = $_FILES['image'];
                $targetDir = "uploads/";
                $imageName = basename($image['name']);
                $imagePath = $targetDir . $imageName;
                move_uploaded_file($image['tmp_name'], $imagePath);
                $product['image'] = $imagePath;
            }
        }
    }
}

// Xử lý xóa sản phẩm
if (isset($_POST['deleteProduct'])) {
    foreach ($products as $key => $product) {
        if ($product['id'] == $_POST['id']) {
            unset($products[$key]);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Product Management</h2>

    <!-- Add Product Modal Button -->
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addProductModal">Add Product</button>

    <!-- Product Table -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['quantity']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?> VNĐ</td>
                <td>
                    <img src="<?= $product['image'] ?>" alt="Product Image" style="max-width: 100px;">
                </td>
                <td>
                    <!-- Edit Button -->
                    <a href="#editProductModal" class="btn btn-info" data-toggle="modal"
                       data-id="<?= $product['id'] ?>"
                       data-name="<?= htmlspecialchars($product['name']) ?>"
                       data-quantity="<?= htmlspecialchars($product['quantity']) ?>"
                       data-price="<?= htmlspecialchars($product['price']) ?>"
                       data-image="<?= $product['image'] ?>">Edit</a>

                    <!-- Delete Button -->
                    <form method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <button type="submit" name="deleteProduct" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="addProduct" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div id="editProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="edit-name" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="edit-quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="edit-price" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        <img id="edit-image-preview" src="" alt="Product Image" style="max-width: 100px; margin-top: 10px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="editProduct" class="btn btn-info">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Set modal values when editing a product
    $('#editProductModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var name = button.data('name');
        var quantity = button.data('quantity');
        var price = button.data('price');
        var image = button.data('image');

        var modal = $(this);
        modal.find('.modal-body #edit-id').val(id);
        modal.find('.modal-body #edit-name').val(name);
        modal.find('.modal-body #edit-quantity').val(quantity);
        modal.find('.modal-body #edit-price').val(price);
        modal.find('.modal-body #edit-image-preview').attr('src', image);
    });
</script>

</body>
</html>
