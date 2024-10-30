<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/landing.css">

</head>

<body>

<?php require '../resources/views/layout/nav.blade.php'; ?>

<section>
    <div class="left">
        <h1>PELICULES</h1>
        <a href="/films" class="neu-button">VEURE PELICULES</a>
    </div>
    <div class="right">
        <h1>ALBUMS</h1>
        <a href="/albums" class="neu-button">VEURE ALBUMS</a>
    </div>
</section>

<?php require '../resources/views/layout/footer.blade.php'; ?>

</body >