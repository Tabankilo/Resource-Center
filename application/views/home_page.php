<?php
 include('includes/header.php');
 include('includes/sidebar.php'); 
?>
<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <br><br>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> ADD CLIENT INFORMATION
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="modal-header">
            
        </div>
        <div class="modal-body">
            <form action="#" method="post">
                <div class="col-lg-6">
                    <h5>Agency Information</h5>
                    <div class="form-group">
                        <input type="date" class="form-control" name="title" placeholder="Date" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Agency Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Physical Address" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Telephone" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Mandate" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5>Client Information</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Client Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Phone" />
                    </div>
                    <div class="form-group">
                    <select name="subject" class="form-control" required>
                            <option value="">Select Reasion</option>
                        <?php 
                            $r = mysqli_query($con, "select * from assignment");
                            while($row = mysqli_fetch_array($r)):
                        ?>
                            <option value="<?php echo $row['assid']; ?>"><?php echo $row['asstitle']; ?> </option>
                        <?php endwhile; ?>
                        </select>
                        <!--<input type="number" min="1" max="50" class="form-control" name="unit" placeholder='Chapters to be covered' required />-->
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="title" placeholder="Time In" />
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="title" placeholder="Time Out" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <textarea class="form-control" name="remarks" placeholder="Remarks"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group button-primary">
                        <button class="form-control">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->   

<?php

require 'includes/footer.php';