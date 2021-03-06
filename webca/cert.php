<?php
include('viewCsrBack.php'); // Includes Login Script
include('connection.php');
if(isset($_POST['cert'])){
    $postCert = $_POST['cert'];
    
    $cert = fopen("certificate.crt", "w");
    fwrite($cert, $postCert);
    fclose($cert);

    $file = "certificate.crt";
    if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
    }
}
        

    

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Certificate Sign Request</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>

    <div id="wrapper">

        <?php include "menu.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">
                <h3>Certificate Sign Request</h3>
                <?php
                    if($level_session == 'user'){
                        // SQL query

                        $query = mysql_query("select * from tblcertificate where owner = '$login_session' and signed = 1", $connection);
                        if (!$query) {
                            mysql_errno($connection);
                        }
                        mysql_close($connection); // Closing Connection
                        ?>
                        <table class="table">
                            <tr><th>Serial</th><th>Country</th><th>State</th><th>Locality</th><th>Org</th><th>Org Unit</th><th>Name</th><th>email</th><th>Signed</th><th>Revoked</th><th>Certificate</th></tr>
                            <?php 
                            //print_r($row);
                            while($row = mysql_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['country'] . "</td>";
                            echo "<td>" . $row['state'] . "</td>";
                            echo "<td>" . $row['locality'] . "</td>";
                            echo "<td>" . $row['org'] . "</td>";
                            echo "<td>" . $row['orgUnit'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['signed'] . "</td>";
                            echo "<td>" . $row['revoked'] . "</td>";
                            echo "<td>";
                            $cert = $row['certificate'];
                            ?>

                            <form action="" method="post">
                                <input type="hidden" id="cert" name="cert" value="<?php echo $cert ?>">
                                <button class="btn btn-default" type="submit">Download</button>

                            </form>
                            <?php
                            echo "</td>";
                            echo "</tr>";
                            }
                            ?>
                        </table>
                        <?php
                    }
                    else if($level_session == 'admin'){
                         $query = mysql_query("select * from tblcertificate where signed = 1", $connection);
                        if (!$query) {
                            mysql_errno($connection);
                        }
                        mysql_close($connection); // Closing Connection
                        ?>
                        <table class="table">
                            <tr><th>Serial</th><th>Country</th><th>State</th><th>Locality</th><th>Org</th><th>Org Unit</th><th>Name</th><th>email</th><th>Signed</th><th>Revoked</th><th>Certificate</th></tr>
                            <?php 
                            //print_r($row);
                            while($row = mysql_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['country'] . "</td>";
                            echo "<td>" . $row['state'] . "</td>";
                            echo "<td>" . $row['locality'] . "</td>";
                            echo "<td>" . $row['org'] . "</td>";
                            echo "<td>" . $row['orgUnit'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['signed'] . "</td>";
                            echo "<td>" . $row['revoked'] . "</td>";
                            echo "<td>";
                            $cert = $row['certificate'];
                            ?>

                            <form action="" method="post">
                                <input type="hidden" id="cert" name="cert" value="<?php echo $cert ?>">
                                <button class="btn btn-default" type="submit">Download</button>

                            </form>
                            <?php
                            echo "</td>";
                            echo "</tr>";
                            }
                            ?>
                        </table>
                        <?php
                    
                    }
                ?>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
