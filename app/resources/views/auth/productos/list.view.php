<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos - FerreTodo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-blue-900 mb-6 text-center">Lista de Productos - FerreTodo 🛠️</h1>
        <div class="flex justify-end mb-4">
            <a href="/products/create" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">+ Agregar Producto</a>
        </div>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-blue-800 text-white">
                <tr>
                    <th class="py-2 px-4 text-left">ID</th>
                    <th class="py-2 px-4 text-left">Nombre</th>
                    <th class="py-2 px-4 text-left">Precio</th>
                    <th class="py-2 px-4 text-left">Stock</th>
                    <th class="py-2 px-4 text-left">Categoría</th>
                    <th class="py-2 px-4 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr class="border-b">
                    <td class="py-2 px-4"><?= $product['id'] ?></td>
                    <td class="py-2 px-4"><?= $product['nombre'] ?></td>
                    <td class="py-2 px-4">$<?= $product['precio'] ?></td>
                    <td class="py-2 px-4"><?= $product['stock'] ?></td>
                    <td class="py-2 px-4"><?= $product['categoria'] ?></td>
                    <td class="py-2 px-4">
                        <a href="/products/edit/<?= $product['id'] ?>" class="text-blue-600 hover:underline">Editar</a> |
                        <a href="/products/delete/<?= $product['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
