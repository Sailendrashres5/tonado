<html>
<head>
    <title></title>
    <script src="https://kit.fontawesome.com/7d37335a3d.js" crossorigin="anonymous"></script>
<body>
<div class="prod-detls">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th colspan="2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'db.php';

                                $selectquery = "SELECT * FROM user";

                                $query = mysqli_query($conn,  $selectquery);
                                $num = mysqli_num_rows($query);

                                // echo "$num";

                                 while($result = mysqli_fetch_array($query)){
                            ?>
                                    <tr>
                                        <td><?php echo $result['Id']?></td>
                                        <td><?php echo $result['full_name']?></td>
                                        <td><?php echo $result['Email']?></td>
                                        <td><?php echo $result['Password']?></td>
                                        <td><a href="prodUpdate.php?id=<?php echo $result['Id']?>" title="update"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="prodDelete.php" title="update"><i class="fa fa-trash"></i></a></td>
                                    </tr>

                            <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
</body>
</html>