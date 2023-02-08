<?php
include_once 'includes/dbh.inc.php';
?>
<html>
<head>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
<h1>List of 12 months Expencess</h1>
<br>
<table class="table">
    <thaed>
        <tr>
            <th>Monts</th>
            <th>Monts</th>
            <th>Monts</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //reading data from the database table 
           $sql="SELECT * FROM expenses;";
           $results= mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($results);

        //read data for each row
        while ($row =$results->fetch_assoc()){

            echo "<tr>
            <td>". $row["month"] ." </td>
            <td>". $row["income"] . " </td>
            <td>". $row["expenses"]. " </td>
    </tr>";
        }

        ?>
    </tbody>
</table>

</form>
</body>
</html>
