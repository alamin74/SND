<?php
    include './templete.php';
    if(isset($_SESSION["privilege"]) && isset($_SESSION['username'])){
    if($_SESSION["privilege"]!=="" && $_SESSION['username']!==""){
?>
<div id="add-client" class="panel-body panel">
    <form method="POST" action="files/php/addclient.php">
        <div class="text-center h3"><label class="text-info">Installation Form</label></div>
        <div class="row form-group">            
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i><b class="hidden-xs hidden-sm"> Client ID :</b></span>
                    <input type="text" name="id" class="form-control" placeholder="Client ID" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i><b class="hidden-xs hidden-sm"> IP Address :</b></span>
                    <input type="text" name="ip1" class="form-control" placeholder="IP Address">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i><b class="hidden-xs hidden-sm"> Date :</b></span>
                    <input type="date" name="date" class="form-control">
                </div>
            </div>
        </div>
        <div class="text-center h4"><label class="text-muted">Client Information</label></div>
        <div class="row form-group">            
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i><b class="hidden-xs hidden-sm"> Client Name :</b></span>
                    <input type="text" name="name" class="form-control" placeholder="Client Name" required>
                </div>
            </div>            
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i><b class="hidden-xs hidden-sm"> Apartment :</b></span>
                    <input type="text" name="app" class="form-control" placeholder="Apartment">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i><b class="hidden-xs hidden-sm"> House :</b></span>
                    <input type="text" name="house" class="form-control" placeholder="House">
                </div>
            </div>            
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i><b class="hidden-xs hidden-sm"> Road :</b></span>
                    <input type="text" name="road" class="form-control" placeholder="Road">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i><b class="hidden-xs hidden-sm"> Block :</b></span>
                    <input type="text" name="block" class="form-control" placeholder="Block">
                </div>
            </div>            
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i><b class="hidden-xs hidden-sm"> Area :</b></span>
                    <input type="text" name="area" class="form-control" placeholder="Area">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i><b class="hidden-xs hidden-sm"> Email :</b></span>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>            
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i><b class="hidden-xs hidden-sm">  Phone 1:</b></span>
                    <input type="text" name="phn1" class="form-control" placeholder="Phone 1">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i><b class="hidden-xs hidden-sm">  Phone 2:</b></span>
                    <input type="text" name="phn2" class="form-control" placeholder="Phone 2">
                </div>
            </div>            
        </div>
        
        <div class="text-center h4"><label class="text-muted">Contact Person Information</label></div>
        <div class="row form-group">
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i><b class="hidden-xs hidden-sm">  Name :</b></span>
                    <input type="text" name="contact_name" class="form-control"placeholder="Name">
                </div>
            </div>                      
        </div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i><b class="hidden-xs hidden-sm">  Phone :</b></span>
                    <input type="text" name="contact_phn" class="form-control" placeholder="Phone">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i><b class="hidden-xs hidden-sm">  Email :</b></span>
                    <input type="email" name="contact_email" class="form-control" placeholder="Email">
                </div>
            </div>            
        </div>
        
        <div class="text-center h4"><label class="text-muted">Others</label></div>
        <div class="row form-group">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i><b class="hidden-xs hidden-sm">  User Type :</b></span>
                    <input type="text" name="user_type" class="form-control" placeholder="User Type">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-transfer"></i><b class="hidden-xs hidden-sm">  Bandwidth :</b></span>
                    <input type="text" name="band1" class="form-control" placeholder="Bandwidth">
                </div>
            </div>            
        </div>
        
               
        <div class="row form-group">
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-piggy-bank"></i><b class="hidden-xs hidden-sm">  Monthly Recurring Charge :</b></span>
                    <input type="text" name="mrc" class="form-control" placeholder="Monthly Recurring Charge">
                </div>
            </div>                      
        </div>
        <div class="text-center">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
   
    </form>
</div>
<script>
    $("#main").html($("#add-client"));
</script>
<?php
        }
    }else{
        header("Location:index.php?error=Login First!&warn=label-warning");
    }
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            