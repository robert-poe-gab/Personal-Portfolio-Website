<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robert | Portfolio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/infiniteMenu.css">

        <!-- JS -->
        <script src="/js/bootstrap.min.js" defer></script>
        <!-- Built bundle for InfiniteMenu (produced by Vite build)
                After running `npm install` and `npm run build`, a bundle
                will appear at `/dist/infiniteMenu.iife.js` (or similar).
                Include it below so the site can mount the component.
        -->
        <script src="/dist/infiniteMenu.iife.js" defer></script>
</head>
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
