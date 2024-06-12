<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        table {
            width: 800px;
        }
        table thead {
            background-color: black;
            color: white;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        table thead th {
            height: 40px;
        }
        .del {
            text-decoration: none;
            background-color: red;
            padding: 5px;
            border-radius: 5px;
            color: white;
        }
        .edit {
            text-decoration: none;
            background-color: #4caf49;
            padding: 5px;
            border-radius: 5px;
            color: white;
        }
        table tbody {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table tbody td {
            height: 60px;
            text-align: center;
        }
        tfoot {
            background-color: black;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Name</th>
                    <th>Offer</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM items";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid Query: " . $conn->error);
                }

                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['itemId']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['offer']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td>
                            <a href="edit.php?itemId=<?php echo $row['itemId']; ?>" class="edit">Update</a>
                            <a href="delete.php?itemId=<?php echo $row['itemId']; ?>" class="del">Remove</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tfoot>
        </table>
    </div>
</body>
</html>
