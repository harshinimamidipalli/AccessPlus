<?php
    // Get event name from URL, with a fallback
    $eventName = isset($_GET['event']) ? $_GET['event'] : "AccessPlus Fest Event";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register • <?php echo htmlspecialchars($eventName); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=6">
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

    <!-- Hero (smaller for inner page) -->
    <section class="hero py-4 text-center">
        <div class="container">
            <h1 class="mb-2">
                <?php echo htmlspecialchars($eventName); ?>
            </h1>
            <p class="mb-0">
                Accessibility-first registration for this fest event.
            </p>
        </div>
    </section>

    <!-- Registration Form -->
    <div class="container my-5">
        <div class="form-container">

            <h2 class="text-center mb-4">Accessibility Registration Form</h2>

           <form id="regForm" action="register.php" method="POST" enctype="multipart/form-data">

    <!-- Hidden field for event name -->
    <input type="hidden" name="event_name" value="<?php echo htmlspecialchars($eventName); ?>">

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fullname" required>
    </div>

    <div class="mb-3">
        <label class="form-label">USN</label>
        <input type="text" class="form-control" name="usn" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Semester</label>
        <select class="form-select" name="semester" required>
            <option value="">Select Semester</option>
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Branch</label>
        <select class="form-select" name="branch" required>
            <option value="">Select Branch</option>
            <option value="CSE">CSE</option>
            <option value="ISE">ISE</option>
            <option value="ECE">ECE</option>
            <option value="AIML">AIML</option>
            <option value="AIDS">AIDS</option>
            <option value="CSML">CSML</option>
            <option value="CSDS">CSDS</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Email ID</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Interested to Volunteer?</label><br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="volunteer" value="Yes" id="volunteerCheck">
            <label class="form-check-label" for="volunteerCheck">
                Yes, I’d like to volunteer
            </label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Number of Members in Team</label><br>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="team_size" id="team1" value="1" required>
            <label class="form-check-label" for="team1">1</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="team_size" id="team2" value="2">
            <label class="form-check-label" for="team2">2</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="team_size" id="team3" value="3">
            <label class="form-check-label" for="team3">3</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="team_size" id="team4" value="4">
            <label class="form-check-label" for="team4">4</label>
        </div>
    </div>

    <button type="submit" class="btn btn-submit w-100 mt-2">
        Submit Registration
    </button>

</form>


            <div class="text-center mt-3">
                <a href="index.html" class="btn btn-outline-light btn-sm">⟵ Back to Events</a>
            </div>
        </div>
    </div>

    <footer class="text-center">
        &copy; <?php echo date('Y'); ?> AccessPlus Fest • Inclusive Events Portal
    </footer>

    <!-- jQuery + Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your custom JS (for validation/animation if any) -->
    <script src="assets/js/script.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>