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
            <form action="<?php echo site_url('home/addClient'); ?>" method="post">
                <div class="col-lg-6">
                    <h5>Agency Information</h5>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date" placeholder="Date" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="agency_name" placeholder="Agency Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Physical Address" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telephone" placeholder="Telephone" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mandate" placeholder="Mandate" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5>Client Information</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="client_name" placeholder="Client Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email_address" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone" />
                    </div>
                    <div class="form-group">
                    <select name="reason" class="form-control" required>
                            <option value="">Select Reasion</option>
                            <option value="good">goog</option>
                    </select>
                        <!--<input type="number" min="1" max="50" class="form-control" name="unit" placeholder='Chapters to be covered' required />-->
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="timein" placeholder="Time In" />
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="timeout" placeholder="Time Out" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <textarea class="form-control" name="remarks" placeholder="Remarks"></textarea>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group button-primary">
                        <button class="form-control" name="addclient">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>