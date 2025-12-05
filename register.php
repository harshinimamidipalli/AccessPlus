<?php
include("db/config.php");

$fullname  = $_POST['fullname'];
$usn       = $_POST['usn'];
$semester  = $_POST['semester'];
$branch    = $_POST['branch'];
$email     = $_POST['email'];
$event     = $_POST['event_name'];

$volunteer = isset($_POST['volunteer']) ? 'Yes' : 'No';
$team_size = $_POST['team_size'];

// Event-specific fields
$performance_type   = $_POST['performance_type'] ?? '';
$project_title      = $_POST['project_title'] ?? '';
$tech_used          = $_POST['tech_used'] ?? '';
$game_name          = $_POST['game_name'] ?? '';
$problem_preference = $_POST['problem_preference'] ?? '';
$github             = $_POST['github'] ?? '';
$art_category       = $_POST['art_category'] ?? '';

$sql = "INSERT INTO registrations 
(fullname, usn, semester, branch, email, volunteer, team_size, event_name,
performance_type, project_title, tech_used, game_name,
problem_preference, github, art_category)
VALUES
('$fullname','$usn','$semester','$branch','$email','$volunteer','$team_size','$event',
'$performance_type','$project_title','$tech_used','$game_name',
'$problem_preference','$github','$art_category')";

$conn->query($sql);

echo "<h1>Registration Successful!</h1><p><a href='index.html'>Back</a></p>";
?>
