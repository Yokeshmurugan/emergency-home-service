
<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">

    <?php if ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
        <h4>Registering</h4>
        <p>Service provider registered ..Your ID NUMBER:
<?php
$conn=mysqli_connect('localhost','root','','services');
$sql=mysqli_query($conn,"SELECT*FROM providers ORDER BY id DESC LIMIT 1");
$print_data=mysqli_fetch_row($sql);
echo $print_data[0];
?></p>
<p>kindly note your id to know booking details
</p>
    </div>

    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h4>Failed</h4>
        <p>Problem while Registering! Please try again later!</p>
    </div>

    <?php elseif ($_GET['msg'] == 'file'): ?>
    <div class="alert alert-danger">
        <h4>Problem While Uploding Photo</h4>
        <p>Problem while Uploding Photo! Please Try again later!</p>
    </div>
    <?php endif; ?>

</div>
<?php endif;
