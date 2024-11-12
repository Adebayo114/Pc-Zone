<?php
include("includes/header.php");
?>


    <!-- Dashboard Stats -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <p class="card-text display-4">1,254</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text display-4">320</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Subscribers</h5>
                    <p class="card-text display-4">8,500</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text display-4">230</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders Table -->
    <h4>Recent Orders</h4>
    <div class="table-responsive mb-4">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Gaming PC</td>
                    <td><span class="badge bg-success">Shipped</span></td>
                    <td>2024-11-12</td>
                    <td>$1200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Laptop</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>2024-11-11</td>
                    <td>$800</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Inbox Messages -->
    <h4>Recent Messages</h4>
    <div class="list-group mb-4">
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            New order inquiry from Mark
            <span class="badge bg-primary rounded-pill">New</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Product availability question from Lisa
            <span class="badge bg-secondary rounded-pill">Read</span>
        </a>
        <!-- Add more messages as needed -->
    </div>

    <!-- Chart Section Placeholder -->
    <h4>Sales Overview</h4>
    <div class="card mb-4">
        <div class="card-body">
            <!-- Placeholder for charts (You can use Chart.js or other libraries for real charts) -->
            <canvas id="salesChart" width="100%" height="40"></canvas>
        </div>
    </div>

<?php
include("includes/footer.php");