<?php
include("db/config.php");

// Fetch all registrations
$sql = "SELECT * FROM registrations ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Registrations</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=7">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark"
     style="background-color:#021945; border-bottom:2px solid #FFD700;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.html" style="color:#FFD700;">
      AccessPlus Fest
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#festNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="festNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">
            🏠 Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">
            📋 View Registrations
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <section class="hero py-4 text-center">
        <div class="container">
            <h1>All Registrations</h1>
        </div>
    </section>

    <div class="container my-5">
        <table class="table table-dark table-striped table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>USN</th>
                    <th>Semester</th>
                    <th>Branch</th>
                    <th>Email</th>
                    <th>Volunteer</th>
                    <th>Team Size</th>
                    <th>Event</th>
                    <th>Registered On</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$count++."</td>
                            <td>".$row['fullname']."</td>
                            <td>".$row['usn']."</td>
                            <td>".$row['semester']."</td>
                            <td>".$row['branch']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['volunteer']."</td>
                            <td>".$row['team_size']."</td>
                            <td>".$row['event_name']."</td>
                            <td>".$row['created_at']."</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No registrations found</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="text-center">
            <a href="index.html" class="btn btn-submit">Back to Events</a>
        </div>
    </div>

</body>
</html>

