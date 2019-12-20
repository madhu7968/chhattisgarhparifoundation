<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!--for modal !-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
<!------ Include the above in your HEAD tag ---------->
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<div style="float:right;margin-top:1rem">
    <!-- <span><button  style="text-decoration:none;border:none;background:none" data-toggle="modal" data-target="#modalLRForm"><a class="btn_hover btn_hover_two" ><span class="glyphicon glyphicon-plus"></span>Add Member </a></button></span> -->
   
</div>
<form role="form" method="POST" enctype="multipart/form-data" action="{{url('registration')}}" id="form" style="overflow:scroll">
{{ csrf_field() }}
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="jumbotron" style="padding:48px">
        <div class="row">
           
            <div class="col-sm-12 col-md-6">
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Full Name<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="fullName" name="fullName" placeholder="Full Name" class="form-control"  value="" type="text" >
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Father's Name<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="fname" name="fname" placeholder="Father's Name" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Mobile Number<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="mobileno" name="mobileno" placeholder="Mobile Number" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Aadhar Number<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="aadharno" name="aadharno" placeholder="Aadhar Number" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Post<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="post" name="post" placeholder="Post" class="form-control"  value="" type="text">
                    </div>
                </div>
                <!-- <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">State<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="state" name="state" placeholder="State" class="form-control"  value="" type="text">
                    </div>
                </div> -->
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Bank Name<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="bank_name" name="bank_name" placeholder="Bank Name" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Branch<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="branch" name="branch" placeholder="Branch " class="form-control"  value="" type="text"
                        >
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Pan Number</label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="pan_number" name="pan_number" placeholder="Pan Number" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Refrence Number<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="user_ref_id" name="user_ref_id" placeholder="Refrence Number" class="form-control"  value="" type="number">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Mother's Name<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="mname" name="mname" placeholder="Mother's Name" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">DOB<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="dob" name="dob" placeholder="DOB" class="form-control"  value="" type="date">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Gender<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                            <select class="selectpicker form-control" name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">village<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="village" name="village" placeholder="Village" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">District<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="district" name="district" placeholder="District" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Postal Code/ZIP<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="postcode" name="postcode" placeholder="Postal Code/ZIP" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Ifsc Code<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="ifsc_code" name="ifsc_code" placeholder="Ifsc Code" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                    <label class="col-md-4 control-label">Account Number<span style="color:red">*</span></label>
                    <div class="col-md-8 inputGroupContainer">
                        <input id="account_number" name="account_number" placeholder="Account Number" class="form-control"  value="" type="text">
                    </div>
                </div>
                <div class="form-group" style="padding:14px">
                <label class="col-md-4 control-label">Amount<span style="color:red">*</span></label>
                <label class="radio-inline" style="margin-left:17px">
                <input type="radio" name="amount" value="20" checked>20
                </label>
                <label class="radio-inline">
                <input type="radio" name="amount" value="50">50
                </label>
                </div>
                
            </div>
        </div>
            <br/>
            <div class="row"><div class="col-sm-6"><h5>Add Member</h5><h6 style="color:red">Notes:Please add atleast one member</h6></div></div>
        
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Age</th>
                        <th>Aadhar Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input id="member_name1" name="member_name1" class="form-control"  value="" type="text" ></td>
                        <td><input id="relation1" name="relation1" class="form-control"  value="" type="text"></td>
                        <td><input id="age1" name="age1" class="form-control"  value="" type="number"></td>
                        <td><input id="aadhar_number1" name="aadhar_number1" class="form-control"  value="" type="number"></td>
                    </tr>
                    <tr>
                        <td><input id="member_name2" name="member_name2" class="form-control"  value="" type="text"></td>
                        <td><input id="relation2" name="relation2" class="form-control"  value="" type="text"></td>
                        <td><input id="age2" name="age2" class="form-control"  value="" type="number"></td>
                        <td><input id="aadhar_number2" name="aadhar_number2" class="form-control"  value="" type="number"></td>
                    </tr>
                    <tr>
                        <td><input id="member_name3" name="member_name3" class="form-control"  value="" type="text"></td>
                        <td><input id="relation3" name="relation3" class="form-control"  value="" type="text"></td>
                        <td><input id="age3" name="age3" class="form-control"  value="" type="number"></td>
                        <td><input id="aadhar_number3" name="aadhar_number3" class="form-control"  value="" type="number"></td>
                    </tr>
                    <tr>
                        <td><input id="member_name4" name="member_name4" class="form-control"  value="" type="text"></td>
                        <td><input id="relation4" name="relation4" class="form-control"  value="" type="text"></td>
                        <td><input id="age4" name="age4" class="form-control"  value="" type="number"></td>
                        <td><input id="aadhar_number4" name="aadhar_number4" class="form-control"  value="" type="number"></td>
                    </tr>
                    <tr>
                        <td><input id="member_name5" name="member_name5" class="form-control"  value="" type="text"></td>
                        <td><input id="relation5" name="relation5" class="form-control"  value="" type="text"></td>
                        <td><input id="age5" name="age5" class="form-control"  value="" type="number"></td>
                        <td><input id="aadhar_number5" name="aadhar_number5" class="form-control"  value="" type="number"></td>
                    </tr>
                </tbody>
            </table>
        <div class="row text-center"  style="margin-top:20px">
            <span><a href="{{ url('/index')}}" class="btn_hover btn_hover_two">Back to home</a></span>
            <span>  <button type="submit" style="text-decoration:none;border:none;background:none"><a class="btn_hover btn_hover_two">Register </a></button></span>
        </div>
    </div>
</form>    






<script>
 $(document).ready(function () {
 $('#form').validate({ // initialize the plugin
     rules: {
        fullName:{
            required: true
        },
         fname:{
            required: true
         },
         mobileno:{
            required: true,
            digits:true,
            minlength: 10,
            min: 1
         },
         aadharno:{
            required: true,
            digits:true,
            minlength: 12,
            min: 1,            
         },
         post:{
            required: true,
         },
         email: {
             required: true,
             email: true
         },
         number: {
             required: true,
             digits: true,
             min: 1
         },
         bank_name:{
            required: true,                          
         },
         branch:{
            required: true,                                       
         },
         mname:{
            required: true,                                                                 
         },
         dob:{
            required: true,                                                                 
         },
         gender:{
            required: true,                                                                 
         },
         member_name1:{
            required: true,                                                                 
         },
         relation1:{
            required: true,                                                                 
         },
         age1:{
            required: true,                                                                 
         },
         amount:{
            required:true,
         },
         aadhar_number1:{
            required: true,                                                                 
         },
         village:{
            required: true,                                                                 
         },
         district:{
            required: true,                                                                 
         },
         ifsc_code:{
            required: true,                                                                 
         },
         postcode:{
            required: true,      
            digits:true,
            minlength: 6    ,
            min: 1,
         },
         account_number:{
            required: true,                                                                 
            minlength: 8

         },
         user_ref_id:{
            digits:true,
            min: 1
         },
         minlength: {
             required: true,
             minlength: 5
         },
         maxlength: {
             required: true,
             maxlength: 8
         },
         minvalue: {
             required: true,
             min: 1
         },
         maxvalue: {
             required: true,
             max: 100
         },
         range: {
             required: true,
             range: [20, 40]
         },
         url: {
             required: true,
             url: true
         },
         filename: {
             required: true,
             extension: "jpeg|png"
         },
     }
 });
});
    $('#add_membere').click(function() {
        console.log("hi");
            $('#form1').validate({ // initialize the plugin
        rules: {
            member_name:{
                    required: true
                }
            }
        })

    })
</script>