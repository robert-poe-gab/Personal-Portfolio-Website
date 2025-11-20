<!DOCTYPE html>
<html lang="en">
<?php include("../src/views/components/head.php") ?>
<body>

<h1>Welcome to My Portfolio</h1>

<div id="infinite-menu-container" style="height: 600px; position: relative;"></div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const items = [
        { image: 'https://picsum.photos/300/300?grayscale', link: '#', title: 'Item 1', description: 'This is pretty cool, right?' },
        { image: 'https://picsum.photos/400/400?grayscale', link: '#', title: 'Item 2', description: 'This is pretty cool, right?' },
        { image: 'https://picsum.photos/500/500?grayscale', link: '#', title: 'Item 3', description: 'This is pretty cool, right?' },
        { image: 'https://picsum.photos/600/600?grayscale', link: '#', title: 'Item 4', description: 'This is pretty cool, right?' }
    ];

    // Expose items for the frontend bundle to consume.
    window.INFINITE_MENU_ITEMS = items;
});
</script>

</body>
</html>
