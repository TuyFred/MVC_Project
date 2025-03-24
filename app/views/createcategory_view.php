<!DOCTYPE html>
<html>
<head>
    <title>Manage Categories</title>
    <!-- Include CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Manage Categories</h1>
        <?php if (isset($message)): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Enter category name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>

        <h2 class="mt-5">Existing Categories</h2>
        <ul class="list-group">
            <?php foreach ($categories as $category): ?>
                <li class="list-group-item"><?php echo $category['category_name']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Include JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

