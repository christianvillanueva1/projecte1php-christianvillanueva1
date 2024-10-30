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

   <section class="w-1/2 mx-auto">
       <h1 class="text-3xl font-bold mb-4">Delete Album</h1>
       <p>Vols eliminar l'album "<?= htmlspecialchars($album->name) ?>"?</p>
       <form action="/album-destroy" method="POST" class="mt-4">
           <input type="hidden" name="id" value="<?= $album->id ?>">
           <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
       </form>
       <a href="/albums" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
   </section>
<?php require '../resources/views/layout/footer.blade.php'; ?>
</body>
</html>