// Handle menu clicks
document.querySelectorAll(".menu-item").forEach((item) => {
  item.addEventListener("click", () => {
    const section = item.getAttribute("data-section");
    const title = section.charAt(0).toUpperCase() + section.slice(1);

    // Update section title
    document.getElementById("section-title").textContent = title;

    // Update content area
    let content = "";
    switch (section) {
      case "home":
        content = "<p>Welcome to the Home section of the dashboard.</p>";
        break;
      case "products":
        content = "<p>Manage your products here.</p>";
        break;
      case "users":
        content = "<p>View and manage users here.</p>";
        break;
      case "settings":
        content = "<p>Adjust your settings here.</p>";
        break;
      case "about":
        content =
          "<p>This is a modern admin dashboard built with PHP, HTML, CSS, and JS.</p>";
        break;
    }
    document.getElementById("content-area").innerHTML = content;
  });
});
