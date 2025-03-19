<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <i class="fas fa-user-plus"></i> Register
        </div>
        <div class="card-body">
            <?php if (isset($_GET["success"])): ?>
                <div class="alert alert-success text-center">
                    <?= htmlspecialchars($_GET["success"]); ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET["error"])): ?>
                <div class="alert alert-danger text-center">
                    <?= htmlspecialchars($_GET["error"]); ?>
                </div>
            <?php endif; ?>

            <form action="<?= BASE_URL ?>register/store" method="POST">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">

                <div class="mb-3">
                    <label class="form-label"><i class="fas fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" value="<?= $_GET['username'] ?? '' ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?= $_GET['email'] ?? '' ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label"><i class="fas fa-phone"></i> Phone</label>
                    <input type="tel" name="phone" class="form-control" pattern="[0-9]{10,15}" placeholder="Enter phone number" value="<?= $_GET['phone'] ?? '' ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-check"></i> Register
                </button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
