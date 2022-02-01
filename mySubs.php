<?php
require 'src/subscription.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<?php
$subscriptions = allSubscriptions();
?>
<main role="main" class="container pt-3">
<h1>My subscribers</h1>
<table class="table table-dark table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($subscriptions as $index => $subscription): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $subscription['name'] ?></td>
        <td><?= $subscription['email'] ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</main>
</body>
</html>