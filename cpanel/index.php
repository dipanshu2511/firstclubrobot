<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <i class="fa-solid fa-gauge"></i>
        <span class="logo-text">Dashboard</span>
      </div>
      <ul class="menu">
        <li class="menu-item"><a target="contentFrame" href="products.php"><i class="fa-solid fa-box"></i><span class="menu-text">Products</span></a></li>
        <li class="menu-item"><a target="contentFrame" href="users.php"><i class="fa-solid fa-users"></i><span class="menu-text">Users</span></a></li>
        <li class="menu-item"><a target="contentFrame" href="gallery.php"><i class="fa-solid fa-image"></i><span class="menu-text">Gallery</span></a></li>
      </ul>
    </aside>

    <aside class="bottombar">
   <div class="bottombar-item"><a target="contentFrame" href="products.php"><i class="fa-solid fa-box"></i><span>Products</span></div></a>
   <div class="bottombar-item"><a target="contentFrame" href="users.php"><i class="fa-solid fa-users"></i><span>Users</span></div></a>
   <div class="bottombar-item"><a target="contentFrame" href="gallery.php"><i class="fa-solid fa-image"></i><span>Gallery</span></div></a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header>
        <h1>Welcome</h1>
      </header>
      <section id="content-area">
      <iframe name="contentFrame" src="users.php" width="100%" height="700" style="border:1px solid #ccc;"></iframe>
      </section>
    </main>
  </div>
</body>

</html>
