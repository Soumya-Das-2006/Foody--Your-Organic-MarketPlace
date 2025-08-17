<?php
session_start();
include('include/config.php');

if(strlen($_SESSION['alogin']) == 0) {	
    header('location:index.php');
    exit;
} else {
    date_default_timezone_set('Asia/Kolkata'); 
    $currentTime = date('d-m-Y h:i:s A', time());

    // Handle delete request securely
    if(isset($_GET['del']) && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $stmt = $con->prepare("DELETE FROM contactus WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $_SESSION['delmsg'] = "Message deleted !!";
        } else {
            $_SESSION['delmsg'] = "Failed to delete message.";
        }
        $stmt->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Manage Contact Messages</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php'); ?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <?php include('include/sidebar.php'); ?>				
            <div class="span9">
                <div class="content">
                    <div class="module">
                        <div class="module-head">
                            <h3>Manage Contact Messages</h3>
                        </div>
                        <div class="module-body table">
                            <?php if(isset($_SESSION['delmsg']) && $_SESSION['delmsg'] != '') { ?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Notice:</strong> <?php echo htmlentities($_SESSION['delmsg']); ?>
                                    <?php $_SESSION['delmsg'] = ""; ?>
                                </div>
                            <?php } ?>
                            <br />
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Received Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $query = mysqli_query($con, "SELECT * FROM contactus");
                                    $cnt = 1;
                                    while($row = mysqli_fetch_array($query)) { ?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt); ?></td>
                                            <td><?php echo htmlentities($row['name']); ?></td>
                                            <td><?php echo htmlentities($row['email']); ?></td>
                                            <td><?php echo htmlentities($row['subject']); ?></td>
                                            <td><?php echo htmlentities(substr($row['message'], 0, 50)); ?>...</td>
                                            <td><?php echo htmlentities($row['date'] ?? 'N/A'); ?></td>
                                            <td>
                                                <a href="read-message.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Read</a>
                                                <a href="massage.php?id=<?php echo $row['id']; ?>&del=true" onclick="return confirm('Are you sure you want to delete this message?')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php 
                                    $cnt++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>						
                </div><!--/.content-->
            </div><!--/.span9-->
        </div>
    </div><!--/.container-->
</div><!--/.wrapper-->

<?php include('include/footer.php'); ?>

<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    });
</script>
</body>
</html>
<?php } ?>
