<!DOCTYPE html>
<html lang="en">
<head>
    <title>V Guard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .heading{
            text-align: center;
        }
        .back{
            margin-top:-45px;
            margin-left:75pc
        }
        body{
            background: url("images/bg black.webp");
            color:white;
        }
        .table{
            color:white;

        } 
        .btn1{
            background-color: rgba(246, 248, 250, 0.623); 
            border: none;
  color: black;
  padding: 3px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
        }
        .btn2{
            background-color: #bb0000; 
            border: none;
  color: white;
  padding: 3px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:5px;
        }
        .btn1:hover{
            background-color: rgba(246, 248, 250, 0.623); 
            color: black;
        } 
        .btn2:hover{
            background-color: #bb0000; 
            color: white;
        }
        
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="heading">Car</h2><br>
        <a class="btn btn-primary" href="create_car.php" role="button">New Entry</a>
        <div class="back">
        <a class="btn btn-primary" href="scope3.php" role="button">BACK</a>
        </div> 
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>LOCATION</th>
                    <th>Distance in KM</th>
                    <th>No of Time</th>
                    <th>Total Distance</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $servername = "localhost";
                $username = "debian-sys-maint";
                $password = "jfXNcikwy19a0moq";
                $database = "v_guard";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($connection->connect_error) {
                    die("Connection failed: " .$connection->connect_error);
                }

                // read all row from database table
                $sql = "SELECT * FROM car";
                $result = $connection->query($sql);

                if(!$result) {
                    die("Invalid query: " .$connection->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[LOCATION]</td>
                    <td>$row[Distance_in_KM]</td>
                    <td>$row[No_of_Time]</td>
                    <td>$row[Total_Distance]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn1' href='car_edit.php?id=$row[id]'>Edit</a>
                        <a class='btn2' href='car_delete.php?id=$row[id]'>Delete</a>
                    </td>
                    <tr>    
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>