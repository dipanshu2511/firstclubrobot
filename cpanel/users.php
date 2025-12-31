<?php
include 'db.php';
$success = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['user_name'];
    $desc = $_POST['user_desc'];

    $imageName = time() . '_' . $_FILES['user_image']['name'];
    move_uploaded_file($_FILES['user_image']['tmp_name'], "../img/users/" . $imageName);

    $stmt = $conn->prepare(
        "INSERT INTO users (image, name, description) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sss", $imageName, $name, $desc);
    if ($stmt->execute()) {
      $success = "User added successfully!";
  }
}
?>
<link rel="stylesheet" href="style.css">
<main class="main-content">
  <header><h2>Users</h2></header>
  <section id="content-area">
  <?php if ($success): ?>
      <div class="success-msg" id="successMsg">
        <?= $success ?>
      </div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data" class="form-box">
      <label>User Image:</label>
      <input type="file" name="user_image" accept="image/*" required>

      <label>User Name:</label>
      <input type="text" name="user_name" required>

      <label>Description:</label>
      <textarea name="user_desc" rows="4" required></textarea>

      <button type="submit">Submit User</button>
    </form>
  </section>
</main>
<script>
setTimeout(() => {
  const msg = document.getElementById("successMsg");
  if (msg) msg.style.display = "none";
}, 5000);
</script>