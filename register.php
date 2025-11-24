<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("db/config.php");

// Get form inputs
$fullname  = $_POST['fullname'];
$usn       = $_POST['usn'];
$semester  = $_POST['semester'];
$branch    = $_POST['branch'];
$email     = $_POST['email'];
$event     = $_POST['event_name'];

// Checkbox: if not ticked → No
$volunteer = isset($_POST['volunteer']) ? 'Yes' : 'No';

// Radio button: will always have a value because of "required"
$team_size = $_POST['team_size'];

// Insert into database
$sql = "INSERT INTO registrations 
        (fullname, usn, semester, branch, email, volunteer, team_size, event_name)
        VALUES 
        ('$fullname', '$usn', '$semester', '$branch', '$email', '$volunteer', '$team_size', '$event')";

if ($conn->query($sql) === TRUE) {

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Registration Successful</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='assets/css/style.css?v=6'>
    </head>
    <body>
        <section class='hero py-4 text-center'>
            <div class='container'>
                <h1>Registration Successful</h1>
                <p>Thank you for registering for $event</p>
            </div>
        </section>

        <div class='container my-5'>
            <div class='form-container'>
                <h2 class='text-center mb-4'>Your Details</h2>
                <p><strong>Name:</strong> $fullname</p>
                <p><strong>USN:</strong> $usn</p>
                <p><strong>Semester:</strong> $semester</p>
                <p><strong>Branch:</strong> $branch</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Volunteer:</strong> $volunteer</p>
                <p><strong>Team Size:</strong> $team_size</p>
                <p><strong>Event:</strong> $event</p>

                <div class='text-center mt-4'>
                    <a href='index.html' class='btn btn-outline-light'>Back to Events</a>
                    <a href='view.php' class='btn btn-submit ms-2'>View All Registrations</a>
                </div>
            </div>
        </div>

        <footer class='text-center'>
            &copy; " . date('Y') . " AccessPlus Fest
        </footer>
    </body>
    </html>";

} else {
    echo "Error: " . $conn->error;
}
?>