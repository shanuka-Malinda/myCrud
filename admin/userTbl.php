<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <style>
  table {
             width: 65%;
            cursor: pointer;
            margin-left: 25%;
            
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

 
<table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <!-- <th>Password</th> -->
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid Query: " . $conn->error);
                }

                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact_no']; ?></td>
                        <!-- <td class="pswdClmn"><?php // echo $row['password']; ?></td> -->
                        
                        <td>
                            <!-- <a href="" class="del">Remove</a> -->
                             
                            <a href="deleteUser.php?user_id=<?php echo $row['user_id']; ?>" class="del">Remove</a>  
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
                <td></td>
                <td></td>
                 <!-- <td></td> -->
            </tfoot>
        </table>

</body>
</html>
