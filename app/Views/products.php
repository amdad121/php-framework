<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'Default Title'; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto py-4">
        <h2 class="text-2xl">Product List</h2>
        <ul class="list-disc list-inside">
            <?php foreach ($product as $item): ?>
                <li><?php echo $item['ProductName']; ?> - $<?php echo $item['Price']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>