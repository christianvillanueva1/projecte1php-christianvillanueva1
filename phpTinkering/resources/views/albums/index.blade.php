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
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 overflow-x-auto">
        <h1 class="text-3xl font-bold mb-4">Albums</h1>
        <a href="/album-create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Album</a>
        <table class="min-w-full mt-4 bg-white border border-gray-300">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Singer</th>
                <th class="py-3 px-6 text-left">Songs</th>
                <th class="py-3 px-6 text-left">Year</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            <?php if (empty($albums)): ?>
            <tr>
                <td colspan="6" class="py-3 px-6 text-center">No hi ha albums disponibles.</td>
            </tr>
            <?php else: ?>
                <?php foreach ($albums as $album): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6"><?=$album['id'] ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($album['name']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($album['singer']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($album['songs']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($album['year']) ?></td>
                <td class="py-3 px-6 text-center">
                    <a href="/album-edit/<?= $album['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                    <a href="/album-delete/<?= $album['id'] ?>" class="text-red-500 hover:text-red-700 mr-4">Delete</a>
                    <a href="/album-show/<?= $album['id'] ?>" class="text-blue-500 hover:text-blue-700 ">Show</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</section>

<?php require '../resources/views/layout/footer.blade.php'; ?>
</body>
</html>