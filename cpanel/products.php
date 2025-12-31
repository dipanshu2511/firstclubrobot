<?php
include 'db.php';
$success = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['product_name'];
    $desc = $_POST['product_desc'];

    $imageName = time() . '_' . $_FILES['product_image']['name'];
    $tmp = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($tmp, "../img/products/" . $imageName);

    $stmt = $conn->prepare(
        "INSERT INTO products (image, name, description) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sss", $imageName, $name, $desc);
    if ($stmt->execute()) {
      $success = "Product uploaded successfully!";
  }
}
?>
<link rel="stylesheet" href="style.css">
<main class="main-content">
  <header><h2>Products</h2></header>
  <section id="content-area">
  <?php if ($success): ?>
      <div class="success-msg" id="successMsg">
        <?= $success ?>
      </div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data" class="form-box">
      <label>Product Image:</label>
      <input type="file" name="product_image" accept="image/*" required>

      <label>Product Name:</label>
      <input type="text" name="product_name" required>

      <label>Description:</label>
      <textarea name="product_desc" rows="4" required></textarea>

      <button type="submit">Submit Product</button>
    </form>
  </section>
</main>
<script>
setTimeout(() => {
  const msg = document.getElementById("successMsg");
  if (msg) msg.style.display = "none";
}, 5000);
</script>