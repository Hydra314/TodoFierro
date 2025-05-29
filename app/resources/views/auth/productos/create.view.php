<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto - FerreTodo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto mt-10 max-w-lg">
        <h1 class="text-3xl font-bold text-center text-blue-900 mb-6">Crear Producto 🧰</h1>
        <form method="post" class="bg-white p-6 rounded shadow-md space-y-4">
            <input type="text" name="nombre" placeholder="Nombre" required class="w-full p-2 border rounded">
            <input type="number" step="0.01" name="precio" placeholder="Precio" required class="w-full p-2 border rounded">
            <input type="number" name="stock" placeholder="Stock" required class="w-full p-2 border rounded">
            <input type="text" name="categoria" placeholder="Categoría" required class="w-full p-2 border rounded">
            <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white py-2 rounded">Guardar</button>
        </form>
        <div class="text-center mt-4">
            <a href="/products" class="text-blue-600 hover:underline">← Volver a productos</a>
        </div>
    </div>
</body>
</html>
