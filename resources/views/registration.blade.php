<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<form role="form" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="jumbotron" style="padding:48px">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Full Name</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Father's Name</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Mobile Number</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Aadhar Number</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Post</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="post" name="post" placeholder="Post" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">State</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Bank Name</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="bank_name" name="bank_name" placeholder="Bank Name" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Branch</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="bank_name" name="branch" placeholder="Branch " class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Pan Number</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="pan_number" name="pan_number" placeholder="Pan Number" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Mother's Name</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">DOB</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Gender</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-user"></i></span>
                            <select class="selectpicker form-control">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">village</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="village" name="village" placeholder="village" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">District</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="district" name="district" placeholder="District" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Postal Code/ZIP</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Ifsc Code</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="bank_name" name="bank_name" placeholder="Bank Name" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Account Number</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="account_number" name="account_number" placeholder="Account Number" class="form-control" required="true" value="" type="text"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center"  style="margin-top:20px">
            <span><a href="#" class="btn_hover btn_hover_two">Back to home</a></span>
            <span><buton  type="submit"><a href="#" class="btn_hover btn_hover_two">Register </a></buton></span>
        </div>
    </div>
</form>    