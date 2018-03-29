<!DOCTYPE html>
<?php
 				
session_start();
$rand = substr(md5(rand()), 0, 6);								
//$rand=substr(rand(),0,4); //only show 4 numbers
$_SESSION['security_code'] = $rand;

require_once 'head.php';

?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Creating Fixed Header and Footer with CSS</title>
<link href="commonstyle.css" rel="stylesheet" type="text/css" />
    <!-- script files -->             
            
<script src="jquery-1.10.2.min.js"></script>
<script src="loginjs.js"></script>
<script src="bootstrap-datepicker.js"></script>

<script src="validdobcheckefrro.js"></script>

<script src="main.js"></script> 
<script src="validate.js"></script>
<script src="date_diff.js"></script>

<script language="javaScript" type="text/javascript">
 function noBack(){window.history.forward()}
            noBack();
            window.onload=noBack;
            window.onpageshow=function(evt){if(evt.persisted)noBack()}
            window.onunload=function(){void(0)}
            
            function burstCache() {
       if (!navigator.onLine) {
           document.body.innerHTML = 'Loading...';
       }
   }
</script>


<script>

    /*$(function(){
         $('input[type="date"]').datepicker();
    });*/
    
    
    
    function ErrorMsg(errorfield,errorvalue ) {
    	
    	try{
    	
    
			
		
		 $("#errortable").append('<tr><td>'+errorfield+'<td><td>'+errorvalue+'</td></tr>');
		 } catch (e) {
			 alert(e);
			// TODO: handle exception
		}
		 
		
	}
    
      
 
 function refresh_captcha(){
		
		$('#captcha').val("");
		$('#efrro_captcha_id').attr('src','/eservices/captcha.jsp?rand='+Math.random());	
	} 
 
 
    $(document).ready(function(){


      
    	
    	$("#submit").click(function(){

    		//alert(" dfdfdfd");
    		 if($('#emailId').val().trim()=='')
            {
     		   alert(" Email Id must not be blank.");
         	   $('#emailId').focus();
         	   return false;    	  
         	}
    		 
    		 else if($('#emailId').val().trim().length>50)
             {
      		   alert("Email ID cant be greater than 50 characters");
          	   $('#emailId').focus();
          	   return false;    	  
          	}


        if($('#password').val().trim()=='')
            {
           alert(" Password Id must not be blank.");
             $('#password').focus();
             return false;        
          }
         
         else if($('#password').val().trim().length<8)
             {
             alert("Password cant be less than 8 characters");
               $('#password').focus();
               return false;        
            }    
    		 
    		 
    		 
    		 
    		 if($('#given_name').val().trim()=='')
            {
     		   alert(" Given Name must not be blank.");
         	   $('#given_name').focus();
         	   return false;    	  
         	}
    		 else if($('#given_name').val().trim().length>50)
             {
      		   alert("Givenname must not be greater than 50 character");
          	   $('#given_name').focus();
          	   return false;    	  
          	}
    		
    		
    		if($('#dob_dateformat').val()=='')
            {
     		   alert(" DOB Format must not be blank.");
         	   $('#dob_dateformat').focus();
         	   return false;    	  
         	}
    		
    		else if($('#dob_dateformat').val().trim().length>20)
            {
     		   alert("Length is not greater than 20");
         	   $('#dob_dateformat').focus();
         	   return false;    	  
         	}
    		
    		if($('#date_of_birth').val()=='')
            {
     		   alert(" Date of birth must not be blank.");
         	   $('#date_of_birth').focus();
         	   return false;    	  
         	}
    		
    		
    		
    		if($('#gender').val().trim()=='')
            {
     		   alert(" Gender must not be blank.");
         	   $('#gender').focus();
         	   return false;    	  
         	}
    		
    		else if($('#gender').val().trim().length>1)
            {
     		   alert("Please choose correct gender");
         	   $('#gender').focus();
         	   return false;    	  
         	}
    		
    		
    		if($('#passportnumber').val().trim()=='')
            {
     		   alert(" Passport Number must not be blank.");
         	   $('#passportnumber').focus();
         	   return false;    	  
         	}
    		
    		else if($('#passportnumber').val().trim().length>15)
            {
     		   alert("Passport number cannot be greater than 15 characters");
         	   $('#passportnumber').focus();
         	   return false;    	  
         	}
    		
    		
    		
    		if($('#nationality').val().trim()=='')
            {
     		   alert(" Nationality must not be blank.");
         	   $('#nationality').focus();
         	   return false;    	  
         	} 
    		
    		else if($('#nationality').val().trim().length>3)
            {
     		   alert("Please choose correct  nationality");
         	   $('#nationality').focus();
         	   return false;    	  
         	}
    		
        if($('#mobileNumber').val().trim()=='')
            {
           alert(" mobile Number must not be blank.");
             $('#mobileNumber').focus();
             return false;        
          } 
        
        else if($('#mobileNumber').val().trim().length<10)
            {
           alert("Please choose correct  mobile Number");
             $('#mobileNumber').focus();
             return false;        
          }

          	var simple = "<?php echo $rand; ?>";
          if($('#captcha').val().trim() != simple )
            {
           alert("Captcha not matched.");
             $('#captcha').focus();
             return false;        
          } 

       
        
    		
    		
    		
        	var email = $("#emailId").val();
    		
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
             if (reg.test(email) == false) 
            {
                alert('Enter your full email address, including the @.');
                return (false);
            }

         
    		var userdata = {
       			 emailcheck: $("#emailId").val(),
       		
       		     mobilechekc:$("#mobileNumber").val()
       	        }
       	var succ;
       	
       	 $.ajax({
       			type : 'GET', // define the type of HTTP verb we want to use (POST for our form)
       			url : 'checkusersemailmobile',  // the url where we want to POST
       				
       			data: {
       				emailcheck: userdata.emailcheck,
       				mobilechekc: userdata.mobilechekc,
       			},
       			
       			async : false,
       			beforeSend : function(xhr) {
       				xhr.setRequestHeader("Accept", "text/plain");				
       			},
       			encode : true,
       			
       			success : function(data, textStatus, jqXHR) {
       				
       			   if(data=="N")
       				  {
       				succ = false;
       				alert("Email Id is already exist, please get the new OTP by clicking Resend OTP link in login page and create password.");	
       				  }
       			   else if(data=="Y")
       			        {
          				succ = false;
          				alert("Email Id is already exist, kindly use Forgot Password link in login page, if you forgot your password.");	
          				  }
       			   
       			   var mobileNumber=$("#mobileNumber").val();
                 
               	   //alert(mobileNumber);
          	  
            	   if($('#mobileNumber').val()=='')
          	          {
          	          return true;
                      }
                 
                   if(/^\d{10}$/.test(mobileNumber)==false)
                      {
                 	 alert('Enter 10 digits valid mobile number only');
                 	succ = false;
                 	  }	
                  else{
                	 succ = true;
                      }
       			},
       			/*error : function(jqXHR, textStatus, errorThrown) {
       				alert(textStatus, errorThrown);
       			}*/
       		});  
       	 return succ;    	   
    		
    	});
    });
   
</script>


<style type="text/css">

    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 140px;
        padding-bottom: 15px;
    }

    .container{
        width: 80%;
        margin: 1 auto; }

    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #343a40;
        padding: 15px 0;
        color: #fff;
    }
    .fixed-header{
	 height: 100px;
   padding: 3px 0;
  	z-index:1000; 
        top: 0;
      margin-top: -10px;
    }
    .fixed-footer{
        bottom: 0;
    }    
    
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 6px 25px;
        display: inline-block;
    }
	 .container p{
        line-height: 200px; 
    }
	.mandfield{
	    color: #f00;
	}
    </style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="v_styles.css">
<link rel="stylesheet" type="text/css" href="v_screen.css"> 
 
     <div class="fixed-header">
        <div class="container">
           <nav>
                    <img src="images/got-logo.png" height="79" width="79" alt="logo" />
                <a href><h1>e-FRRO Online Portal </h1></a>
                
            </nav>
        </div>
        </div>

        <!--header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="images/got-logo.png" class="navbar-brand img-responsive rounded" style="height: 125px;width:125px;margin-left: 90px"></a>
   <h1 style="color: white;"><b>e-Smart</b>Frro</h1> 
      <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit" style="margin-left: 880px" >LOGOUT</button></a>
  </nav>
</header-->
        <div class="container">
    	<div class="panel panel-default">
    <div class="panel-heading"><h1>Registration Form  <a href="login_user.php" class="pull-right" style="font-size:25px">LOGIN</a></h1>
	
	</div>
    <div class="panel-body">
    <form action="insertion_signup.php"name="applicationform" id="eregistration_id" method="post" name="form1" >
              <div class="form-group col-sm-6">
                <label for="emailId">Email Id<span class="mandfield">*</span></label>
                <input type="text" name="emailId" id="emailId" class="form-control" size="43" maxlength="50" autocomplete="OFF" placeholder="Email Id" value="">
              </div>
              <div class="form-group col-sm-6">
                <label for="Password">Password<span class="mandfield">*</span></label>
                <input type="password" name="password" id="password" class="form-control" size="43" maxlength="50" autocomplete="OFF" placeholder="Enter Password" value="">
              </div>
              <div class="form-group col-sm-6">
                <label for="mobileNumber">Mobile Number<span class="mandfield">*</span></label>
                <input type="text" name="mobileNumber" id="mobileNumber" class="form-control" size="25" maxlength="10" autocomplete="OFF" onkeyup="chkPhone(this);" placeholder=" 10 digit Mobile Number in india" value="">
              </div>
              <div class="form-group col-sm-6">
                <label for="surname">Sur Name</label>
                <input type="text" name="surname" id="surname" class="form-control" size="43" maxlength="50" autocomplete="OFF" onkeyup="chkString(this);" placeholder="Sur Name (As in passport)" value="">
              </div>
              <div class="form-group col-sm-6">
                <label for="givenname">Given Name<span class="mandfield">*</span></label>
                <input type="text" name="given_name" id="given_name" class="form-control" size="43" maxlength="50" autocomplete="OFF" onkeyup="chkString(this);" placeholder="Given Name" value="">
              </div>
              
              
              <div class="form-group col-sm-6">
              <div class="input-group date" id="datetimepicker1">
                <label for="dob_dateformat"><span style="text-transform: uppercase;">dob</span> format<span class="mandfield">*</span></label>
                <select name="dob_dateformat" id="dob_dateformat" class="form-control styled-select" onchange="document.applicationform.date_of_birth.value='';" onkeydown="if (event.keyCode == 8) event.keyCode=37+46; if(event.keyCode==13) event.keyCode=9;">
                <option value="">Select...</option>
											<option value="DY"> Date of birth in DD/MM/YYYY</option>
											<!--option value="YY"> Year of birth in YYYY</option>
											<option value="MY"> Month &amp; Year of birth in MM/YYYY</option>
											<option value="AG"> Age in XXX years</option-->
                </select>
                <span class="">
                    <span class=""></span>
                </span>
              </div>
              </div>
              
              
              <div class="form-group col-sm-6">
                <label for="date_of_birth">Date of Birth<span class="mandfield">*</span></label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" onkeyup="chkDatechars(this);insertslash(this,document.applicationform.dob_dateformat.value);" onblur="chkDOB();" onkeydown="if (event.keyCode == 8) event.keyCode=37+46; if(event.keyCode==13) event.keyCode=9;" maxlength="10" size="10" autocomplete="OFF" placeholder="DOB(Strictly as in your passport)" value=""> 
              </div>
              
              <div class="form-group col-sm-6">
                <label for="gender">Gender<span class="mandfield">*</span></label>
                <select class="form-control styled-select" name="gender" id="gender">
                  <option value="">Select...</option>
                  <option value="F"> Female</option><option value="M"> Male</option><option value="X"> Transgender</option>
                </select>
              </div>
              
                 
              <div class="form-group col-sm-6">
                <label for="passportnumber">Passport Number<span class="mandfield">*</span></label>
                <input type="text" name="passportnumber" id="passportnumber" class="textBoxDashed form-control" style="text-transform:uppercase" onblur="trim1(this)" autocomplete="OFF" placeholder="Passport Number(As in passport)" value="">
              </div>
              
              <div class="form-group col-sm-6">
                <label for="nationality">Nationality<span class="mandfield">*</span></label>
                <select class="form-control styled-select" name="nationality" id="nationality">
                  <option value="">Select...</option>
                  <option value="AFG"> AFGHANISTAN</option><option value="ALA"> ALAND ISLANDS</option><option value="ALB"> ALBANIA</option><option value="DZA"> ALGERIA</option><option value="ASM"> AMERICAN SAMOA</option><option value="AND"> ANDORRA</option><option value="AGO"> ANGOLA</option><option value="AIA"> ANGUILLA</option><option value="ATA"> ANTARCTICA</option><option value="ATG"> ANTIGUA AND BARBUDA</option><option value="ARG"> ARGENTINA</option><option value="ARM"> ARMENIA</option><option value="ABW"> ARUBA</option><option value="AUS"> AUSTRALIA</option><option value="AUT"> AUSTRIA</option><option value="AZE"> AZERBAIJAN</option><option value="BHS"> BAHAMAS</option><option value="BHR"> BAHRAIN</option><option value="BGD"> BANGLADESH</option><option value="BRB"> BARBADOS</option><option value="BLR"> BELARUS</option><option value="BEL"> BELGIUM</option><option value="BLZ"> BELIZE</option><option value="BEN"> BENIN (DAHOMEY)</option><option value="BMU"> BERMUDA</option><option value="BTN"> BHUTAN</option><option value="BOL"> BOLIVIA</option><option value="BIH"> BOSNIA AND HERZEGOVINA</option><option value="BWA"> BOTSWANA</option><option value="BVT"> BOUVET ISLAND</option><option value="BRA"> BRAZIL</option><option value="IOT"> BRITISH INDIAN OCEAN TERRITORY</option><option value="BRN"> BRUNEI DARUSSALAM</option><option value="BGR"> BULGARIA</option><option value="BFA"> BURKINA FASO ( UPPER VOLTA)</option><option value="BDI"> BURUNDI</option><option value="KHM"> CAMBODIA (KAMPUCHEA)</option><option value="CMR"> CAMEROON</option><option value="CAN"> CANADA</option><option value="CPV"> CAPE VERDE ISLANDS</option><option value="XCC"> CARRIBEAN COMMUNITY</option><option value="CYM"> CAYMAN ISLANDS</option><option value="CAF"> CENTRAL AFRICAN REPUBLIC</option><option value="TCD"> CHAD</option><option value="CHL"> CHILE</option><option value="CHN"> CHINA</option><option value="CXR"> CHRISTMAS ISLANDS</option><option value="CCK"> COCOS (KEELING) ISLANDS</option><option value="COL"> COLOMBIA</option><option value="COM"> COMOROS</option><option value="COG"> CONGO</option><option value="COD"> CONGO, DEMOCRATIC REPUBLIC OF THE (ZAIRE)</option><option value="COK"> COOK ISLANDS</option><option value="CRI"> COSTA RICA</option><option value="CIV"> COTE DIVOIRE</option><option value="HRV"> CROATIA -REPUBLIC OF CROATIA</option><option value="CUB"> CUBA</option><option value="CYP"> CYPRUS</option><option value="CZE"> CZECH REPUBLIC</option><option value="DNK"> DENMARK</option><option value="DJI"> DJIBOUTI</option><option value="DMA"> DOMINICA</option><option value="DOM"> DOMINICAN REPUBLIC</option><option value="TLS"> EAST TIMOR, DEMOCRATIC REPUBLIC OF</option><option value="ECU"> ECUADOR</option><option value="EGY"> EGYPT</option><option value="SLV"> EL SALVADOR</option><option value="GNQ"> EQUITORIAL GUINEA</option><option value="ERI"> ERITREA</option><option value="EST"> ESTONIA</option><option value="ETH"> ETHIOPIA</option><option value="FLK"> FALKLAND ISLANDS (MALVINAS)</option><option value="FRO"> FAROE ISLANDS</option><option value="FJI"> FIJI</option><option value="FIN"> FINLAND</option><option value="FRA"> FRANCE</option><option value="FXX"> FRANCE METROPOLITAN</option><option value="GUF"> FRENCH GUIANA</option><option value="ATF"> FRENCH SOUTHERN TERRITORIES</option><option value="GAB"> GABON</option><option value="GMB"> GAMBIA</option><option value="GEO"> GEORGIA</option><option value="DEU"> GERMANY</option><option value="GHA"> GHANA</option><option value="GIB"> GIBRALTAR</option><option value="GRC"> GREECE</option><option value="GRL"> GREENLAND</option><option value="GRD"> GRENADA</option><option value="GLP"> GUADELOUPE</option><option value="GUM"> GUAM</option><option value="GTM"> GUATEMALA</option><option value="GGY"> GUERNSEY</option><option value="GIN"> GUINEA</option><option value="GNB"> GUINEA BISSAU</option><option value="GUY"> GUYANA</option><option value="HTI"> HAITI</option><option value="HMD"> HEARD AND MCDONALD ISLANDS</option><option value="VAT"> HOLY SEE (VATICAN CITY STATE)</option><option value="HND"> HONDURAS</option><option value="HKG"> HONG KONG</option><option value="HUN"> HUNGARY</option><option value="ISL"> ICELAND</option><option value="IND"> INDIA</option><option value="IDN"> INDONESIA</option><option value="IRN"> IRAN</option><option value="IRQ"> IRAQ</option><option value="IRL"> IRELAND</option><option value="IMN"> ISLE OF MAN</option><option value="ISR"> ISRAEL</option><option value="ITA"> ITALY</option><option value="JAM"> JAMAICA</option><option value="JPN"> JAPAN</option><option value="JEY"> JERSEY</option><option value="JOR"> JORDAN</option><option value="KAZ"> KAZAKHSTAN</option><option value="KEN"> KENYA</option><option value="KIR"> KIRIBATI</option><option value="PRK"> KOREA, DEMOCRATIC PEOPLES REPUBLIC OF</option><option value="KOR"> KOREA, REPUBLIC OF</option><option value="KWT"> KUWAIT</option><option value="KGZ"> KYRGYZSTAN</option><option value="LAO"> LAOS</option><option value="LVA"> LATVIA</option><option value="LBN"> LEBANON</option><option value="LSO"> LESOTHO</option><option value="LBR"> LIBERIA</option><option value="LBY"> LIBYA</option><option value="LIE"> LIECHTENSTEIN</option><option value="LTU"> LITHUANIA</option><option value="LUX"> LUXEMBOURG</option><option value="MAC"> MACAU</option><option value="MKD"> MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option><option value="MDG"> MADAGASCAR</option><option value="MWI"> MALAWI</option><option value="MYS"> MALAYSIA</option><option value="MDV"> MALDIVES</option><option value="MLI"> MALI</option><option value="MLT"> MALTA</option><option value="MHL"> MARSHALL ISLANDS</option><option value="MTQ"> MARTINIQUE</option><option value="MRT"> MAURITANIA</option><option value="MUS"> MAURITIUS</option><option value="MYT"> MAYOTTE</option><option value="MEX"> MEXICO</option><option value="FSM"> MICRONESIA, FEDERATED STATES OF</option><option value="MDA"> MOLDOVA, REPUBLIC OF</option><option value="MCO"> MONACO</option><option value="MNG"> MONGOLIA</option><option value="MNE"> MONTENEGRO</option><option value="MSR"> MONTSERRAT</option><option value="MAR"> MOROCCO</option><option value="MOZ"> MOZAMBIQUE</option><option value="MMR"> MYANMAR (BURMA)</option><option value="NAM"> NAMIBIA</option><option value="NRU"> NAURU</option><option value="NPL"> NEPAL</option><option value="NLD"> NETHERLANDS</option><option value="ANT"> NETHERLANDS ANTILLES</option><option value="NTZ"> NEUTRAL ZONE</option><option value="NCL"> NEW CALEDONIA</option><option value="NZL"> NEW ZEALAND</option><option value="NIC"> NICARAGUA</option><option value="NER"> NIGER</option><option value="NGA"> NIGERIA</option><option value="NIU"> NIUE</option><option value="NFK"> NORFOLK ISLAND</option><option value="MNP"> NORTHERN MARIANA ISLANDS</option><option value="NOR"> NORWAY</option><option value="OMN"> OMAN</option><option value="PAK"> PAKISTAN</option><option value="PLW"> PALAU</option><option value="PSE"> PALESTINE</option><option value="PAN"> PANAMA</option><option value="PNG"> PAPUA NEW GUINEA</option><option value="PRY"> PARAGUAY</option><option value="XXX"> PERSON OF UNSPECIFIED NATIONALITY</option><option value="PER"> PERU</option><option value="PHL"> PHILIPPINES</option><option value="PCN"> PITCAIRN</option><option value="POL"> POLAND</option><option value="PRT"> PORTUGAL</option><option value="PRI"> PUERTO RICO</option><option value="QAT"> QATAR</option><option value="XXB"> REFUGEE</option><option value="XXC"> REFUGEE (NON-CONVENTIONAL) OTHER THAN XXB</option><option value="UNK"> RESIDENT OF KOSOVO (UNMIK)</option><option value="REU"> REUNION ISLANDS</option><option value="ROU"> ROMANIA</option><option value="RUS"> RUSSIAN FEDERATION</option><option value="RWA"> RWANDA</option><option value="BLM"> SAINT BARTHELEMY</option><option value="SHN"> SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA</option><option value="KNA"> SAINT KITTS AND NEVIS</option><option value="LCA"> SAINT LUCIA</option><option value="SPM"> SAINT PIERRE AND MIQUELON</option><option value="VCT"> SAINT VINCENT AND THE GRENADINES</option><option value="WSM"> SAMOA</option><option value="SMR"> SAN MARINO</option><option value="STP"> SAO TOME AND PRINCIPE</option><option value="SAU"> SAUDI ARABIA</option><option value="SEN"> SENEGAL</option><option value="SRB"> SERBIA</option><option value="SYC"> SEYCHELLES</option><option value="SLE"> SIERRA LEONE</option><option value="SGP"> SINGAPORE</option><option value="SVK"> SLOVAK REPUBLIC</option><option value="SVN"> SLOVENIA</option><option value="SLB"> SOLOMON ISLANDS</option><option value="SOM"> SOMALIA</option><option value="ZAF"> SOUTH AFRICA</option><option value="SGS"> SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option><option value="SSD"> SOUTH SUDAN</option><option value="XOM"> SOVEREIGN MILITARY ORDER OF MALTA</option><option value="ESP"> SPAIN</option><option value="LKA"> SRI LANKA</option><option value="XXA"> STATELESS PERSON</option><option value="SDN"> SUDAN</option><option value="SUR"> SURINAME</option><option value="SJM"> SVALBARD AND JAN MAYEN ISLANDS</option><option value="SWZ"> SWAZILAND</option><option value="SWE"> SWEDEN</option><option value="CHE"> SWITZERLAND</option><option value="SYR"> SYRIA</option><option value="TWN"> TAIWAN</option><option value="TZA"> TANZANIA</option><option value="TJK"> TAZIKISTAN</option><option value="THA"> THAILAND</option><option value="TBT"> TIBETAN ORIGIN</option><option value="TGO"> TOGO</option><option value="TKL"> TOKELAU</option><option value="TON"> TONGA</option><option value="TTO"> TRINIDAD AND TOBAGO </option><option value="TUN"> TUNISIA</option><option value="TUR"> TURKEY</option><option value="TKM"> TURKMENISTAN</option><option value="TCA"> TURKS AND CAICOS ISLANDS</option><option value="TUV"> TUVALU</option><option value="UGA"> UGANDA</option><option value="GBD"> UK BRITISH DEPENDENT TERRITORIES CITIZEN</option><option value="GBO"> UK BRITISH OVERSEAS CITIZEN</option><option value="GBN"> UK BRITISH OVERSEAS NATIONAL </option><option value="GBP"> UK BRITISH PROTECTED PERSON</option><option value="GBS"> UK BRITISH SUBJECT</option><option value="UKR"> UKRAINE</option><option value="ARE"> UNITED ARAB EMIRATES</option><option value="GBR"> UNITED KINGDOM</option><option value="UNO"> UNITED NATIONS ORGANIZATION</option><option value="UNA"> UNITED NATIONS SPECIALIZED AGENCY</option><option value="UMI"> UNITED STATES MINOR OUTLYING ISLANDS</option><option value="USA"> UNITED STATES OF AMERICA</option><option value="URY"> URAGUAY</option><option value="UZB"> UZBEKISTAN</option><option value="VUT"> VANUATU (NEW HEBRIDES)</option><option value="VEN"> VENEZUELA</option><option value="VNM"> VIETNAM</option><option value="VGB"> VIRGIN ISLANDS (BRITISH)</option><option value="VIR"> VIRGIN ISLANDS (US)</option><option value="WLF"> WALLIS AND FUTUNA ISLANDS</option><option value="ESH"> WESTERN SAHARA</option><option value="YEM"> YEMEN</option><option value="YUG"> YUGOSLAVIA</option><option value="ZMB"> ZAMBIA</option><option value="ZWE"> ZIMBABWE</option>
                </select>
              </div>

              
              
			  <div class="form-group col-sm-12">
               <p style="color: #f00; margin-bottom:4px">Note: ALL (*) Fields are Mandatory</p>
              </div>
			  <!-- <div class="form-group col-sm-6">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control" size="43" maxlength="50" Autocomplete="OFF" onKeyUp="chkString(this);" placeholder="state" />
              </div> -->
              <!-- <div class="form-group col-sm-6">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" size="43" maxlength="50" Autocomplete="OFF" onKeyUp="chkString(this);" placeholder="City" />
              </div> -->
              <br>
            <div class="row">
            <div class="col-sm-4"></div>
  <div class="col-sm-4"> <input name="captcha" type="text" id="captcha" class="form-control col-md-4 " size="43" maxlength="6" autocomplete="OFF" placeholder="Enter Captcha value" style="margin-bottom:15px;">  </div>
  <div class="col-sm-4"></div>
            </div>
             
      
            <div class="form-group text-center" style="float: left; width: 100%;">
            <img src="create_image.php" alt="captcha" id="captcha_code">
             <i class="fa fa-refresh" onclick="window.location.reload();" style="cursor:pointer"></i>
          </div>


          	  <!-- <div class="sub">
                 <input id="captcha" type="text" class="form-control" name="captcha" placeholder="Enter capcha value" required>
              </div>

              <div class="sub">
                
				            <img id="captcha_code" src="create_image.php" />
							<button name="recaptcha" type="button" class="btnRefresh" onclick='window.location.reload();' >Refresh</button>
              </div> -->

              <div class="sub">
                 <button class="btn-info form_sub2 hvr-float-shadow" id="submit">Submit</button>
              </div>
              
              <input type="hidden" name="t4g" id="t4g" value="ASPIUIKZANODiphtosjnpi8481438449"> 
            </form>
    </div>
  </div>
    </div>    
    <!--div class="fixed-footer">
        <div class="container">Copyright &copy; 2016 Your Company</div>        
    </div-->
</body>
</html>  