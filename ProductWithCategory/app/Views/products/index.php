<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Use Bootstrap Slate theme CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid h-100 bg-dark text-white" style="margin-top:60px;">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <h1 class="text-center">Product Listing</h1>
                <a href="/products/create" class="btn btn-primary mb-3">Add New Product</a>
                <ul class="list-group">
                    <?php foreach ($products as $product): ?>
                    <li class="list-group-item">
                        <a href="/products/edit/<?= $product['id'] ?>"><?= $product['ProductName'] ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add Bootstrap JS and Popper.js if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
