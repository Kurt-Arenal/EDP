<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/Tcc_logo.png">
    <title>TCC - Dashboard</title>

    <!-- Include jQuery before any scripts depending on it -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <!-- Include Bootstrap CSS -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Bootstrap JS -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Include custom CSS -->
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/logo.png" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registration.php">Registration</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- Ensure search function is defined in a separate script -->
                    <input onkeyup="search(this.value)" class="form-control me-2" type="text"
                        placeholder="Search anything here..">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="h2 mt-3">Dashboard</p>
        <p>You can view all the recorded data on this dashboard.</p>
        <div class="card mt-3">
            <div class="card-header">List of Students</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="150" style="text-align: center;">Student ID</th>
                            <th style="text-align: left; padding-left: 10px">Complete Name</th>
                            <th width="50" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="results">

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                -
            </div>
        </div>
    </div>

    <!-- Modal for viewing student details -->
    <div class="modal fade" id="view-details">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Student Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Placeholder content for student details -->
                    <p>Student details will appear here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include custom JavaScript for search functionality -->
    <script src="./assets/js/search.js"></script>
</body>

</html>
