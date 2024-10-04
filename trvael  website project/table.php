<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data base table</title>

   <style>

h1{
    font-size: 2.3rem;
    text-transform: uppercase;
    color: var(--white);
    text-shadow: var(--text-shadow);
    text-align: center;
}

.content-table{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 1400px;      /* ya width vrun box size decide hoiela */
}

.content-table thead tr{
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table tr
.content-table td{
    padding: 12px 15px;
}


.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;
}


.content-table tbody tr:last-of-type{
    border-bottom: 2px solid #009879;
}
   </style> 




</head>
<body>
    <h1>list of client's</h1>
    <br>
    <table class ="content-table">
        <thead>         <!-- header content -->
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>location</th>
                <th>guests</th>
                <th>arrivals</th>
                <th>leaving</th>
                <th>through</th>
                <!-- <th>action</th> -->
            </tr>
        </thead>

        <tbody>
            <?php
                //esatblishing a connection
               $connection = mysqli_connect('localhost','root','','book_db');
            
                //check connection
                if ($connection->connect_error) {
                    die('Connection failed'. $connection->connect_error);
                }

                //read all connections

                $sql = "SELECT * FROM book_form";      
                $result = $connection->query($sql);
                
                if(!$result) {
                    die("Invalid query". $connection->connect_error);
                }

                //read data of each row
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['phone'] . "</td>
                                <td>" . $row['address'] . "</td>
                                <td>" . $row['location'] . "</td>
                                <td>" . $row['guests'] . "</td>
                                <td>" . $row['arrivals'] . "</td>
                                <td>" . $row['leaving'] . "</td>
                                <td>" . $row['through'] . "</td>
                            </tr>";
                }
                
            ?>
        </tbody>
    </table>
</body>
</html>


<!-- line 64 nntr //                 <td>
                //         <a href='#'>update</a>
                //         <a href='#'>delete</a>
                // </td>

                add kru sahkto -->








	
	
	
	
	
	
	
	