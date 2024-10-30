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
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">Edit Album</h1>
            <form action="/album-update" method="POST">
                <input type="hidden" name="id" value="<?= htmlspecialchars($album->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Title:</label>
                    <input type="text" name="name" value="<?= htmlspecialchars($album->name) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="singer" class="block text-gray-700">Singer:</label>
                    <input type="text" name="singer" value="<?= htmlspecialchars($album->singer) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="songs" class="block text-gray-700">Total Songs:</label>
                    <input type="number" name="songs" value="<?= htmlspecialchars($album->songs) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <div class="mb-4">
                    <label for="year" class="block text-gray-700">Release Year:</label>
                    <input type="number" name="year" value="<?= htmlspecialchars($album->year) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
            </form>
            <a href="/albums" class="text-gray-500 hover:underline mt-4 block">Return</a>
        </div>
    </section>
    <?php require '../resources/views/layout/footer.blade.php'; ?>
</body>
</html>