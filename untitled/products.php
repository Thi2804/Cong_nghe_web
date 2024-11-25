<?php
// Giả sử đây là nơi bạn xử lý các sản phẩm
$products = [
    ['id' => 1, 'name' => 'Sản phẩm 1', 'quantity' => 10, 'price' => 100000, 'image' => 'uploads/product1.jpg'],
    ['id' => 2, 'name' => 'Sản phẩm 2', 'quantity' => 5, 'price' => 200000, 'image' => 'uploads/product2.jpg']
];

// Xử lý sửa sản phẩm
if (isset($_POST['editProduct'])) {
    foreach ($products as &$product) {
        if ($product['id'] == $_POST['id']) {
            $product['name'] = $_POST['name'];
            $product['quantity'] = $_POST['quantity'];
            $product['price'] = $_POST['price'];

            // Kiểm tra xem người dùng có tải ảnh mới không
            if ($_FILES['image']['error'] == 0) {
                // Tải ảnh mới lên
                $image = $_FILES['image'];
                $targetDir = "uploads/";
                $imageName = basename($image['name']);
                $imagePath = $targetDir . $imageName;
                move_uploaded_file($image['tmp_name'], $imagePath);
                $product['image'] = $imagePath;  // Cập nhật ảnh mới
            }
        }
    }
}
?>

<!-- Danh sách sản phẩm -->
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
            <td><?php echo number_format($product['price']); ?></td>
            <td><img src="<?php echo $product['image']; ?>" alt="Product Image" style="width: 100px;"></td>
            <td>
                <!-- Button mở modal chỉnh sửa -->
                <button data-toggle="modal" data-target="#editProductModal" data-id="<?php echo $product['id']; ?>"
                        data-name="<?php echo $product['name']; ?>" data-quantity="<?php echo $product['quantity']; ?>"
                        data-price="<?php echo $product['price']; ?>" data-image="<?php echo $product['image']; ?>">
                    Edit
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- Edit Product Modal -->
<div id="editProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="products.php" method="POST" enctype="multipart/form-data">
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
                        <!-- Hiển thị ảnh hiện tại -->
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
    // Khi modal chỉnh sửa được mở
    $('#editProductModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Lấy thông tin từ nút Edit
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
        modal.find('.modal-body #edit-image-preview').attr('src', image); // Hiển thị ảnh hiện tại
    });
</script>
