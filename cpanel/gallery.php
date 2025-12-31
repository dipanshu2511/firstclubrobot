<?php
include 'db.php';
$success = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imageName = $_POST['image_name'];
    $fileName = time() . '_' . $_FILES['gallery_image']['name'];

    move_uploaded_file($_FILES['gallery_image']['tmp_name'], "../img/gallery/" . $fileName);

    $stmt = $conn->prepare(
        "INSERT INTO gallery (image_name, image) VALUES (?, ?)"
    );
    $stmt->bind_param("ss", $imageName, $fileName);
    if ($stmt->execute()) {
      $success = "Image uploaded successfully!";
  }
}
?>
<link rel="stylesheet" href="style.css">
<main class="main-content">
  <header><h2>Gallery</h2></header>
  <section id="content-area">
  <?php if ($success): ?>
      <div class="success-msg" id="successMsg">
        <?= $success ?>
      </div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data" class="form-box">
      <label>Image Name:</label>
      <input type="text" name="image_name">
      <label>Upload Image:</label>
      <input type="file" name="gallery_image" accept="image/*" required>
      <button type="submit">Upload</button>
    </form>
  </section>
</main>
<script>
setTimeout(() => {
  const msg = document.getElementById("successMsg");
  if (msg) msg.style.display = "none";
}, 5000);
</script>