<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />

    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    
</head>

<body>
    <div> 
    <?php 
    session_start();
    echo $_SESSION["username"];
    ?>
	</div>
    <div class="container-fluid" style="width:75rem">
        <div class="row">

            <form action="reg_form_db_link.php" id="formentry" class="form-horizontal" role="form" data-parsley-validate novalidate method='POST' >
                <div class="container-fluid shadow">
                    <div class="row">
                        <div id="valErr" class="row viewerror clearfix hidden">
                            <div class="alert alert-danger">Oops! Seems there are some errors..</div>
                        </div>
                        <div id="valOk" class="row viewerror clearfix hidden">
                            <div class="alert alert-success">Yay! ..</div>
                        </div>

                        
                                    <div class="row">
                                        <div class="col-md-12"><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3" for="field1">surname</label>
			    <div class="controls col-sm-9">
                    
                <input id="field1" name="surname" class="form-control k-textbox" data-role="text" data-parsley-errors-container="#errId1" type="text"><span id="errId1" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field2">given_name <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field2" name="given_name" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId2" type="text"><span id="errId2" class="error"></span></div>
                
		</div><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3" for="field3">Sex<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <select id="field3" name="sex" class="form-control" data-role="select" selected="selected" required="required" data-parsley-errors-container="#errId3">
		  
		  
		  
		  
		  
		<option value=""></option><option value="Male">Male</option><option value="Female">Female</option><option value="Trans-sexual">Trans-sexual</option></select><span id="errId3" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field9">father_name <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field9" name="father_name" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId4" type="text"><span id="errId4" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field10">mother_name </label>
			    <div class="controls col-sm-9">
                    
                <input id="field10" name="mother_name"class="form-control k-textbox" data-role="text" data-parsley-errors-container="#errId5" type="text"><span id="errId5" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field15">spouse_name</label>
			    <div class="controls col-sm-9">
                    
                <input id="field15" name="spouse_name" class="form-control k-textbox" data-role="text" data-parsley-errors-container="#errId6" type="text"><span id="errId6" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field20">dob<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <span style="" class="k-widget k-datepicker k-header form-control"><span class="k-picker-wrap k-state-default">
                	<input id="field20" name="dob" class="form-control k-input" data-role="date" style="width: 100%;" role="textbox" aria-haspopup="true" aria-expanded="false" aria-owns="field20_dateview" aria-disabled="false" aria-readonly="false" aria-label="Current focused date is null" data-error-container="#errfield20" required="required" data-parsley-errors-container="#errId7" type="text"><span unselectable="on" class="k-select" role="button" aria-controls="field20_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span><span id="errId7" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field21">place_of_birth <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field21" name="place_of_birth" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId8" type="text"><span id="errId8" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field22">birth_city <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field22" name="birth_city" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId9" type="text"><span id="errId9" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field23">birth_country <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field23" name="birth_country" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId10" type="text"><span id="errId10" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field24">height_cm <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field24" name="height_cm" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId11" type="text"><span id="errId11" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field25">religion<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field25" name="religion" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId12" type="text"><span id="errId12" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field26">identification_mark </label>
			    <div class="controls col-sm-9">
                    
                <input id="field26" name="identification_mark" class="form-control k-textbox" data-role="text" data-parsley-errors-container="#errId13" type="text"><span id="errId13" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field27">present_nationality <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field27" name="present_nationality" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId14" type="text"><span id="errId14" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field28">previous_nationality <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field28" name="previous_nationality" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId15" type="text"><span id="errId15" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field29">manner_of_acquiring present nationality <span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="field29" name="manner_of_acquiring" class="form-control k-textbox" data-role="text" required="required" data-parsley-errors-container="#errId16" type="text"><span id="errId16" class="error"></span></div>
                
		</div><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3" for="field3">dual_nationality<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <select id="field3" name="dual_nationality" class="form-control" data-role="select" selected="selected" required="required" data-parsley-errors-container="#errId3">
		  
		  <option value="1">Yes</option><option value="0">No</option></select><span id="errId3" class="error"></span></div>
                
		</div><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3" for="field3">indian_origin<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <select id="field3" name="indian_origin" class="form-control" data-role="select" selected="selected" required="required" data-parsley-errors-container="#errId3">
		  
		  <option value="1">Yes</option><option value="0">No</option></select><span id="errId3" class="error"></span></div>
                
		</div><div class="form-group" style="display: block;">
			    <label class="control-label control-label-left col-sm-3" for="field3">defence_force<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <select id="field3" name="defence_force" class="form-control" data-role="select" selected="selected" required="required" data-parsley-errors-container="#errId3">
		  
		  <option value="1">Yes</option><option value="0">No</option></select><span id="errId3" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field37">profile_pic </label>
			    <div class="controls col-sm-9">
                    
                <input id="field37" class="form-control k-textbox" data-role="text" data-parsley-errors-container="#errId20" type="text"><span id="errId20" class="error"></span></div>
                
		</div><div class="form-group">
			    <label class="control-label control-label-left col-sm-3" for="field38">document</label>
			    <div class="controls col-sm-9">
                    
                  <input type="file" name="fileToUpload" id="fileToUpload">
    			<!--input type="submit" value="Upload Pdf" name="submit_btn"-->
                <span id="errId22" class="error"></span></div>
                <br>
                <button id="button2" type="submit" name="sub" class="btn btn-success alignment" style="margin-left: 37%;">Button</button>
           
		</div></div>
                                    </div>
                                


                    </div>
                </div>
            </form>
        </div>
    </div>
    



    <script src="http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js"></script>
    <script src="http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js" type="text/javascript"></script>

    <script src="http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js"></script>
    <script src="http://protostrap.com/Assets/parsely/parsley.extend.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/parsely/2.0/parsley.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/download.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/protostrap.js" type="text/javascript"></script>
</body>
</html>
