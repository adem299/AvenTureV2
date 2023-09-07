<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="icon" type="image/x-icon" href="img/fav-icon.png">
    <!-- link cdn font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        .btn{
            display: inline-block;
            background: #333;
            color: #fff;
            font-size: 1.2rem;
            padding: .5rem 1.5rem;
            margin-top: 1rem;
            cursor: pointer;
        }

        .btn:hover{
            background-color: #145886;
        }
    </style>
</head>
<body>
    <div class="container">

    <div class="travelers-table">
        <h1 class="heading">Travelers Table</h1>
        <table>
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Going to</th>
                <th>Guests</th>
                <th>Check in</th>
            </thead>
            <tbody>
                <?php
                    include ('connectdb.php');
                     $sql = 'SELECT id, name, email, address, location, guests, checkIn FROM book_form';
                    $result = mysqli_query($conn, $sql);

                    if(!$result){
                        die('Could not get data: '.mysqli_error());
                    }
                    $i=1;
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<tr>";
                        echo "<td> $i </td>";
                        echo "<td> {$row['name']}</td>";
                        echo "<td> {$row['email']}</td>";
                        echo "<td> {$row['address']}</td>";
                        echo "<td> {$row['location']}</td>";
                        echo "<td> {$row['guests']}</td>";
                        echo "<td> {$row['checkIn']}</td>";
                        
                        $i++;
                    }
                    echo"</table>";
                    mysqli_close($conn); 
                ?>
            </tbody>
        </table>
    </div>
    <a href="index.html" class="btn">Kembali</a>
    </div>

    
    
</body>
</html>