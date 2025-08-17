<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin']) == 0) {    
    header('location:index.php');
} else {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch message details
        $query = mysqli_query($con, "SELECT * FROM contactus WHERE id = '$id'");
        $row = mysqli_fetch_array($query);
        if($row) {
            $name = htmlentities($row['name']);
            $email = htmlentities($row['email']);
            $subject = htmlentities($row['subject']);
            $message = nl2br(htmlentities($row['message']));  // Format new lines properly
            $date = htmlentities($row['date']);
        } else {
            echo "Message not found.";
            exit;
        }
    } else {
        echo "No message selected.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Read Contact Message</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php include('include/header.php');?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <?php include('include/sidebar.php');?>                
            <div class="span9">
                <div class="content">
                    <div class="module">
                        <div class="module-head">
                            <h3>Read Contact Message</h3>
                        </div>
                        <div class="module-body">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $name; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td><?php echo $subject; ?></td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td><?php echo $message; ?></td>
                                </tr>
                                <tr>
                                    <th>Received Date</th>
                                    <td><?php echo $date; ?></td>
                                </tr>
                            </table>
                            <a href="massage.php" class="btn btn-primary">Back to Messages</a>
                        </div>
                    </div>                      
                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->

<?php include('include/footer.php');?>

<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
