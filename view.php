<?php
include("db/config.php");
$res = $conn->query("SELECT * FROM registrations ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
<title>All Registrations</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css?v=20">
</head>

<body>

<nav class="navbar navbar-expand-lg" style="background-color:#ffffff; border-bottom:1px solid #ccc;">
<div class="container">
<a class="navbar-brand fw-bold text-dark" href="index.html">Event Registration</a>
</div></nav>

<section class="py-4">
<div class="container table-container">

<h3 class="mb-3">All Registrations</h3>

<table class="table table-bordered bg-white">
<thead>
<tr>
<th>ID</th><th>Event</th><th>Name</th><th>USN</th>
<th>Sem</th><th>Branch</th><th>Email</th>
<th>Volunteer</th><th>Team</th>
<th>Perf</th><th>Project</th><th>Tech</th>
<th>Game</th><th>Problem</th><th>GitHub</th><th>Art</th>
<th>Time</th>
</tr>
</thead>
<tbody>

<?php while($r=$res->fetch_assoc()) { ?>
<tr>
<td><?= $r['id'] ?></td>
<td><?= $r['event_name'] ?></td>
<td><?= $r['fullname'] ?></td>
<td><?= $r['usn'] ?></td>
<td><?= $r['semester'] ?></td>
<td><?= $r['branch'] ?></td>
<td><?= $r['email'] ?></td>
<td><?= $r['volunteer'] ?></td>
<td><?= $r['team_size'] ?></td>

<td><?= $r['performance_type'] ?></td>
<td><?= $r['project_title'] ?></td>
<td><?= $r['tech_used'] ?></td>
<td><?= $r['game_name'] ?></td>
<td><?= $r['problem_preference'] ?></td>
<td><?= $r['github'] ?></td>
<td><?= $r['art_category'] ?></td>

<td><?= $r['created_at'] ?></td>
</tr>
<?php } ?>

</tbody></table>

</div>
</section>

</body>
</html>
