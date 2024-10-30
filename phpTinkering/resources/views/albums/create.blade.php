<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/global.css">
</head>
<body class="bg-gray-100">
<?php require '../resources/views/layout/nav.blade.php'; ?>
<section>
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Add New Album</h1>
        <form action="/album-store" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter album title">
            </div>
            <div class="mb-4">
                <label for="singer" class="block text-sm font-medium text-gray-700">Singer:</label>
                <input type="text" name="singer" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter singer's name">
            </div>

            <div class="mb-4">
                <label for="songs" class="block text-sm font-medium text-gray-700">Songs:</label>
                <input type="number" name="songs" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter total songs">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Release Year:</label>
                <input type="number" name="year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter release year">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Album</button>
        </form>
    </div>
</section>
<?php require '../resources/views/layout/footer.blade.php'; ?>

</body>
</html>