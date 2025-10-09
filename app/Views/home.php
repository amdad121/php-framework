<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'Default Title'; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto py-4 text-center">
        <h2 class="text-2xl">Welcome to PHP Framework</h2>
        <p>This is a simple PHP framework.</p>

        <div class="my-6">
            <h3>Route List</h3>
            <ul class="flex gap-4 justify-center">
                <li><a class="text-blue-500 hover:underline" href="/products">Products</a></li>
                <li><a class="text-blue-500 hover:underline" href="/about">About</a></li>
                <li><a class="text-blue-500 hover:underline" href="/api/user">API Route</a></li>
            </ul>
        </div>

        <p>Created by: <a class="text-blue-500 hover:underline" href="https://amdadulhaq.com" target="_blank" rel="noopener noreferrer">Amdadul Haq</a></p>
    </div>
</body>
</html>