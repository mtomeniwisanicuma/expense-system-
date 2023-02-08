<?php
include_once 'includes/dbh.inc.php';
?>
<head>
</head>
<form >
    <table border =1>
       <tr>
       <td>Month</td>
        <td>income</td>
         <td>expense</td>
       </tr>
   <?php
   $s=1;
   $sql="SELECT * FROM customer;";
   $results= mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($results);
/*foreach($sql as $row):*/

?>
   <tr>
    <td><? php echo $row['fName']; ?> </td>
    <td><? php echo $row['lName']; ?> </td>
    <td><? php echo $row['dateB']; ?> </td>
</tr>

        </table>
<?php
        if(isset($_POST["IMPORT"])){
            $fileName = $_FILES["excel"]["name"];
            $fieExtension =expode('.',$fieName);
            $fileExtention =strolower(end($fileExtention));

            $newFile = date("Y.m.d") . "-" .date("h.i.sa") . "." . $fileExtention;

            $targetDirectory = "uploads/" . $newFileName;
            move_uploaded_file($_FIleS["excel"]["tmp_name"], $targetDirectory);

            error_reporting(0);
            ini_set('display_error',0);

            require "excelReader/excel_reader2.php";
            require "excelReader/SpreadsheetReader.php";

            $reader =new SpreadsheetReader($targetDirectory);
            foreach($reader as $key => $row){
                $month =$row[1];
                $income =$row[2];
                $expenses=$row[3];
                mysqli_query($conn,"INSERT INTO expenses VALUES('','$month','$income','$expenses')");

            }

        }
        ?>
 
</form>
