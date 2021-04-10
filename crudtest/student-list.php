<?php 
include_once('./includes/database.php');
include_once('./includes/header.php');

?>
<div class="container" style="height:500px;">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-border" style="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>                        
                    </tr>
                    
                </thead>
                <?php 
                    //echo "<pre/>";
                    $query = "SELECT * FROM students ORDER BY name";
                    $result = mysqli_query($conn,$query);
                    //$student = mysqli_fetch_assoc($result);
                        
                    while($student =mysqli_fetch_assoc($result)){ 
                    //print_r($student);
?>
                        <tr>
                            <td><?php echo $student['id']; ?></td>
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo $student['age']; ?></td>
                        </tr>
                    <?php }
                    
                ?>
            </table>
        </div>
    </div>
</div>
<?php include_once('./includes/footer.php');
?>