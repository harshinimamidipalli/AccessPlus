<?php $eventName = $_GET['event'] ?? "Event"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register • <?php echo $eventName; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=20">
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color:#ffffff; border-bottom:1px solid #ccc;">
    <div class="container">
        <a class="navbar-brand fw-bold text-dark" href="index.html">Event Registration</a>
    </div>
</nav>

<section class="py-4">
    <div class="container">
        <div class="form-container">

            <h3 class="text-center mb-3"><?php echo $eventName; ?></h3>

            <form action="register.php" method="POST">

                <input type="hidden" name="event_name" value="<?php echo $eventName; ?>">

                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">USN</label>
                    <input type="text" name="usn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <select class="form-select" name="semester" required>
                        <option value="">Select</option>
                        <option>1</option><option>2</option><option>3</option><option>4</option>
                        <option>5</option><option>6</option><option>7</option><option>8</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Branch</label>
                    <select class="form-select" name="branch" required>
                        <option value="">Select</option>
                        <option>CSE</option><option>ISE</option><option>ECE</option>
                        <option>AIML</option><option>AIDS</option><option>CSML</option><option>CSDS</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Volunteer?</label>
                    <input type="checkbox" name="volunteer" value="Yes"> Yes
                </div>

                <div class="mb-3">
                    <label>Team Size</label><br>
                    <input type="radio" name="team_size" value="1" required> 1
                    <input type="radio" name="team_size" value="2" class="ms-3"> 2
                    <input type="radio" name="team_size" value="3" class="ms-3"> 3
                    <input type="radio" name="team_size" value="4" class="ms-3"> 4
                </div>

                <!-- EVENT SPECIFIC FIELDS -->
                <?php if ($eventName === "Crescendo") { ?>
                    <div class="mb-3">
                        <label class="form-label">Performance Type</label>
                        <select class="form-select" name="performance_type">
                            <option value="">Select</option>
                            <option>Solo</option>
                            <option>Group</option>
                        </select>
                    </div>

                <?php } elseif ($eventName === "InnovateX") { ?>
                    <div class="mb-3">
                        <label class="form-label">Project Title</label>
                        <input type="text" name="project_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Technology Used</label>
                        <input type="text" name="tech_used" class="form-control">
                    </div>

                <?php } elseif ($eventName === "CircuitClash") { ?>
                    <div class="mb-3">
                        <label class="form-label">Game Name</label>
                        <select class="form-select" name="game_name">
                            <option value="">Select</option>
                            <option>Valorant</option>
                            <option>BGMI</option>
                            <option>Rocket League</option>
                        </select>
                    </div>

                <?php } elseif ($eventName === "CodeStorm") { ?>
                    <div class="mb-3">
                        <label class="form-label">Problem Preference</label>
                        <input type="text" name="problem_preference" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">GitHub URL</label>
                        <input type="text" name="github" class="form-control">
                    </div>

                <?php } elseif ($eventName === "ArtWave") { ?>
                    <div class="mb-3">
                        <label class="form-label">Art Category</label>
                        <select class="form-select" name="art_category">
                            <option value="">Select</option>
                            <option>Sketching</option>
                            <option>Painting</option>
                            <option>Craft</option>
                        </select>
                    </div>
                <?php } ?>

                <button type="submit" class="btn btn-primary w-100">Submit</button>

            </form>

            <div class="text-center mt-3">
                <a href="index.html">Back to Events</a>
            </div>

        </div>
    </div>
</section>

</body>
</html>
