<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        table,td,th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th {
            padding: 10px;
        }
    </style>
</head>

<body>

<?php 
 
    include_once('config.php');

    $sql = "SELECT * FROM users";
    $getUsers = $connect->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();

    ?>

<br><br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>surname</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach($users as $user) { ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['surname']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php } 
        ?>

    </tbody>
</table>

<a href="index.html" target="_blank">Add User</a>
