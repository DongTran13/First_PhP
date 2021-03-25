<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('connectSQL.php') ?>
    <?php
    $sql = "SELECT * FROM `employee`";
    $sqlPullDown = $conn->query($sql);

    $result = $sqlPullDown->fetch_all(MYSQLI_ASSOC);
    ?>
</head>
<body>
<div class="container">
    <label><h1>Employee List</h1></label>
    <button class="btn btn-outline-success ml-5" onclick="nextpage()">
        +Add New Employ
    </button>
    <table>
        <thead>
        <tr class="table-bordered">
            <th class="pl-3 pr-3">#</th>
            <th class="pl-3 pr-3">Name</th>
            <th class="pl-3 pr-3">Description</th>
            <th class="pl-3 pr-3">Salary</th>
            <th class="pl-3 pr-3">Gender</th>
            <th class="pl-3 pr-3">Birthday</th>
            <th class="pl-3 pr-3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (count($result) > 0) {
            foreach ($result as $row) { ?>
                <tr class="table-bordered">
                    <td class="pl-3 pr-3"><?php echo $row['id']?></td>
                    <td class="pl-3 pr-3"><?php echo $row['name']?></td>
                    <td class="pl-3 pr-3"><?php echo $row['description']?></td>
                    <td class="pl-3 pr-3"><?php echo $row['salary']?></td>
                    <td class="pl-3 pr-3"><?php echo $row['gender']?></td>
                    <td class="pl-3 pr-3"><?php echo $row['birthday']?></td>
                    <td class="pl-3 pr-3">
                        <a class="btn btn-outline-secondary" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a class="btn btn-outline-secondary" onclick="warning()" href="delete.php?id=<?php echo $row['id'];?>">Delete </a>
                    </td>
                </tr>
            <?php }
        }
        ?>
        </tbody>

    </table>

</div>
<script>
    function nextpage() {
        window.location.assign("index.php")
    }
    function warning() {
        confirm("Are your sure about that ?");
    }
</script>

</body>
</html>