<?php
include('header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Details
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
        <!-- SELECT COUNT(*) AS total_count FROM tbl_login WHERE user_type = 2; -->

<?php 
    $user_count_result = mysqli_query($con, "SELECT COUNT(*) AS total_count FROM tbl_login WHERE user_type = 2");
    $theatre_count_result = mysqli_query($con, "SELECT COUNT(*) AS total_count FROM tbl_login WHERE user_type = 1");
    $user_count = mysqli_fetch_assoc($user_count_result)['total_count'];
    $theatre_count = mysqli_fetch_assoc($theatre_count_result)['total_count'];
    $booking_count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_bookings"));
    $contact_count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_contact"));
    $movie_count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_movie"));
    $amount = mysqli_query($con, "SELECT SUM(amount) AS total_amount FROM tbl_bookings WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())");
    if ($amount) {
        $row = mysqli_fetch_assoc($amount);
        $total_amount = $row['total_amount'];
    }
    $profit_percentage = 8;
    $profit = ($profit_percentage / 100) * $total_amount;

?>
 <label for="user">
        <img src="admin.png" alt="" width="70" height="70">
        USER:
        <span id="user_count"><?php echo $user_count; ?></span>
    </label>

    <br>

    <label for="theatre">
        <!-- <img src="" alt="" width="" height=""> -->
        <i class="fa fa-ticket" width="170" height="170" aria-hidden=""></i>
        THEATERS:
        <span id="theatre_count"><?php echo $theatre_count; ?></span>
    </label>
    <label for="booking">
        <img src="admin.png" alt="" width="70" height="70">
        BOOKING:
        <span id="booking_count"><?php echo $booking_count; ?></span>
    </label>
    <label for="user">
        <img src="admin.png" alt="" width="70" height="70">
        CONTACT:
        <span id="contact_count"><?php echo $contact_count; ?></span>
    </label>
    <label for="user">
        <img src="admin.png" alt="" width="70" height="70">
        MOVIES:
        <span id="movies_count"><?php echo $movie_count; ?></span>
    </label>
    <label for="profit">
        <img src="admin.png" alt="" width="70" height="70">
        PROFIT:
        <span id="movies_count"><?php echo $profit; ?> TK</span>
    </label>
    
  </div>
</div>
  </section>
    <!-- /.content -->
  </div>
  <?php
include('footer.php');
?>
<script>
    </script>