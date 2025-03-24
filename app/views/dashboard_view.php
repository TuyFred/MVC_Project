<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            overflow-x: hidden;
        }
        #sidebar-wrapper {
            min-height: 100vh;
            width: 250px;
        }
        .card-custom {
            color: white;
        }
        .search-bar {
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-white text-center py-3">Cyber-SHOP</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-users"></i> Customers</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-box"></i> Manage Orders</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-box-open"></i> Manage Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-chart-line"></i> Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-envelope"></i> Messages <span class="badge bg-danger">14</span></a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-cogs"></i> Settings</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom px-3">
                <button class="btn btn-light" id="menu-toggle"><i class="fas fa-bars"></i></button>
                
                <div class="search-bar ms-3">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Search..." id="searchInput">
                        <button class="btn btn-primary btn-sm" onclick="searchFunction()"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div class="ms-auto text-white d-flex align-items-center">
                    <i class="fas fa-user-circle fa-2x me-2"></i>
                    <span>Fred</span>
                </div>
            </nav>

            <div class="container-fluid p-4">
                <h2>Dashboard</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-custom bg-info mb-3">
                            <div class="card-header"><i class="fas fa-dollar-sign"></i> Total Sales</div>
                            <div class="card-body">
                                <h5 class="card-title">$25,023</h5>
                                <p class="card-text">Last 24 hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom bg-danger mb-3">
                            <div class="card-header"><i class="fas fa-shopping-cart"></i> Expenses</div>
                            <div class="card-body">
                                <h5 class="card-title">$8,542</h5>
                                <p class="card-text">Last 24 hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-custom bg-success mb-3">
                            <div class="card-header"><i class="fas fa-chart-line"></i> Income</div>
                            <div class="card-body">
                                <h5 class="card-title">$16,481</h5>
                                <p class="card-text">Last 24 hours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("wrapper").classList.toggle("toggled");
        });

        function searchFunction() {
            let query = document.getElementById("searchInput").value;
            alert("Searching for: " + query);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
