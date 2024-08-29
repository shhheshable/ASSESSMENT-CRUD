<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">product List</h1>
    <a href="insert.php">Add User</a>
    <?php
    ?>

    <div class="container">
        <table>
            <thead class>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
            <?php
    include "db_conn.php";

        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                <td><?php echo $row['ID']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['Description']?></td>
                <td><?php echo $row['Price']?></td>
                <td><?php echo $row['Quantity']?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['ID'] ?>" >edit</a>
                    <a href="delete.php?id=<?php echo $row['ID'] ?>">delete</a>
                    </td>
                </tr>
                
            <?php
        }
    ?>
    
            </tbody>
        </table>
    </div>
    
</body>
</html>