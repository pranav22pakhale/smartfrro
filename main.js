 var dob = new Date(); //x
 var passpdoissue = new Date();//a
 var passpdoexpiry = new Date();//b
 var visadoissue = new Date();//c
 var visadoexpiry = new Date();//d
 var doarrivalindia = new Date();//e
 var doarrivalhotel= new Date();//f
 var currentdate = new Date();
 
function setempstatus()
{
	if(document.OnlineForm.employed[0].checked)
	{	
		document.OnlineForm.applicant_employedinindia.value="Y";
	}
	else
	{	
		document.OnlineForm.applicant_employedinindia.value="N";
	}
}

//sec 27-05-2013
//email validation
function checkEmail(str) 
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(str))
	{
		//alert("You have entered valid email.");
		return true;
	}
	return false;		
}

function ValidateEmail(str)
{
	try
	{
		//alert("1");
		var emailID=str;
		
		if ((emailID.value==null)||(emailID.value==""))
		{
			alert("Please Enter your Email ID");
			emailID.focus();
			return false;
		}
		if (checkEmail(emailID.value)==false)
		{
			emailID.value="";
			alert("Invalid Email Adderess");
			emailID.focus();
			return false;
		}
		return true;			
	}
	catch (e) 
	{
		alert(e);
		// TODO: handle exception
	}			
}
//end

function chkDatecharsx(str)
{
	 var checkOK = "0123456789/";
	 var strx=str.value;
	 var valx = "";
	 for (var i = 0;  i < strx.length;  i++)
	 {
	   	ch = strx.charAt(i);
	   	if((i==2)||(i==5))
	   	{
	   		if(ch!="/")
	   		{valx += "/";}
	   	}	   	
	   	valx += ch;	   	
	 }	   
	 str.value = valx;
	 chkDatax(str,checkOK);
}

function chkDatax(str,checkOK)
{
	 var checkstr=str.value;
	 var allValid = true;
	 var decPoints = 0;
	 var allNum = "";

	 for (var i = 0;  i < checkstr.length;  i++)
	 {
		 ch = checkstr.charAt(i);	 	
		 for (var j = 0;  j < checkOK.length;  j++)
			 if (ch == checkOK.charAt(j))
			 { break;}

		 if (j == checkOK.length)
		 {
			 allValid = false;
			 break;
		 }	     
		 if (((checkstr.charAt(i)=="/")&&(checkstr.charAt(i-1)=="/"))||((checkstr.charAt(i)=="/")&&(checkstr.charAt(i+11)=="/")))
		 {
			 allValid = false;
			 break;
		 }	     
		 if (ch != ",")
			 allNum += ch;
	 }
	 if (!allValid)
	 {
		 str.value=allNum;
		 str.focus();
	 }
}
 
function chkDatecharsdob(str)
{
	 var checkOK = "0123456789/";
	 var strx=str.value;
	 var valx = "";
	 for (var i = 0;  i < strx.length;  i++)
	 {
		 ch = strx.charAt(i);
		 if(document.OnlineForm.dobformat.value=="DY")
		 {
			 if((i==2)||(i==5))
			 {
				 if(ch!="/")
				 {valx += "/";}
			 }
		 }
		 else if(document.OnlineForm.dobformat.value=="MY")
		 {
			 if(i==2)
			 {
				 if(ch!="/")
				 {valx += "/";}
			 }
		 }
		 valx += ch;  	
	 }	   
	 str.value = valx;
	 chkDatax(str,checkOK);
}
 
function setdates()
{
	 var x = new Array();
	 x = document.OnlineForm.applicant_dob.value.split("/");
 	
	 var a = new Array();
	 a = document.OnlineForm.applicant_passpdoissue.value.split("/");
	 passpdoissue.setDate(parseInt(a[0]));
	 passpdoissue.setMonth(parseInt(a[1])-1);
	 passpdoissue.setYear(parseInt(a[2]));
	 
	 var b = new Array();
	 b = document.OnlineForm.applicant_passpvalidtill.value.split("/");
	 passpdoexpiry.setDate(parseInt(b[0]));
	 passpdoexpiry.setMonth(parseInt(b[1])-1);
	 passpdoexpiry.setYear(parseInt(b[2]));
 	
	 var c = new Array();
	 c = document.OnlineForm.applicant_visadoissue.value.split("/");
	 visadoissue.setDate(parseInt(c[0]));
	 visadoissue.setMonth(parseInt(c[1])-1);
	 visadoissue.setYear(parseInt(c[2]));
 	
	 var d = new Array();
	 d = document.OnlineForm.applicant_visavalidtill.value.split("/");
	 visadoexpiry.setDate(parseInt(d[0]));
	 visadoexpiry.setMonth(parseInt(d[1])-1);
	 visadoexpiry.setYear(parseInt(d[2]));
 	
	 var e = new Array();
	 e = document.OnlineForm.applicant_doarrivalindia.value.split("/");
	 doarrivalindia.setDate(parseInt(e[0]));
	 doarrivalindia.setMonth(parseInt(e[1])-1);
	 doarrivalindia.setYear(parseInt(e[2]));
 	
	 var f = new Array();
	 f = document.OnlineForm.applicant_doarrivalhotel.value.split("/");
	 doarrivalhotel.setDate(parseInt(f[0]));
	 doarrivalhotel.setMonth(parseInt(f[1])-1);
	 doarrivalhotel.setYear(parseInt(f[2]));
 	
	 DOBformat = document.OnlineForm.dobformat.value;
 	
 	if (DOBformat == "DY")
 	{
 		dob.setDate(parseInt(x[0]));
		dob.setMonth(parseInt(x[1])-1);
		dob.setYear(parseInt(x[2]));
 	}
 	if (DOBformat == "YY")
 	{ 		
 		dob.setDate(1);
		dob.setMonth(0);
		dob.setYear(parseInt(x[0]));
 	}
 	if (DOBformat == "MY")
 	{
 		dob.setDate(1);
		dob.setMonth(parseInt(x[0]-1));
		dob.setYear(parseInt(x[1]));
 	}
 	if (DOBformat == "AG")
 	{
 		var curryear = document.OnlineForm.currentyear.value;
 		dob.setDate(1);
		dob.setMonth(0);
 		dob.setYear((parseInt(curryear)-parseInt(x[0])));
 	}
 	currentdate.setDate(parseInt(document.OnlineForm.currentdate.value));
	currentdate.setMonth(parseInt(document.OnlineForm.currentmonth.value));
	currentdate.setYear(parseInt(document.OnlineForm.currentyear.value));
 	
 	if(dob>currentdate)
 	{
 		alert("Date of Birth cannot be greater than current date");
 		document.OnlineForm.applicant_dob.value="";
 		return false;
 	}
 	else if((passpdoissue<dob)||(passpdoexpiry<dob)||(visadoissue<dob)||(visadoexpiry<dob)||(doarrivalindia<dob)||(doarrivalhotel<dob))
 	{
 		alert("Make sure that passport date of issue, passport date of expiry, visa date of issue, visa date of expiry, Date of Arrival in India and Date of Arrival in hotel are correct ");
 		return false;
 	}
 	else if(passpdoissue>passpdoexpiry)
 	{
 		alert("Date of issue of passport cannot be greater than it's expiry date");
 		return false;
 	}
 	else if(visadoissue>visadoexpiry)
 	{
 		alert("Date of issue of Visa cannot be greater than it's expiry date");
 		return false;
 	} 	
}
 
function validateDOBformat()
{	
	var raldobs;		//By Balmiki
	if(document.OnlineForm.applicant_dob.value=="")
	{
		return false;
	}
	var x = new Array();
	var format=0;
	var flag1 = true;
	age=0;
	x= document.OnlineForm.applicant_dob.value.split("/");
	DOBformat = document.OnlineForm.dobformat.value;
	flag=true;
	
	//By Balmiki
	var d = new Date();
	var n = d.getFullYear();
	//alert("Year-"+n);	
	//End
	
	if (DOBformat == "DY") 
	{ 
		if((x[0]==null)||(x[1]==null)||(x[2]==null))
		{
			//wronginput("Date");
			document.OnlineForm.applicant_dob.value="";
			document.getElementById('applicant_dob').focus();
			document.OnlineForm.applicant_age.value="";
			return false;
		}
		format = 3;		
		if((x[0]!=null)||(x[1]!=null)||(x[2]!=null))
		//age = 2010 - parseInt(x[2]) ;
		age = n-parseInt(x[2]);		//By Balmiki
		if((x[0].length!=2) || ((parseInt(x[0])>31)&&(parseInt(x[1])==1)) || ((parseInt(x[0])>28)&&(parseInt(x[1])==2)&&(parseInt(x[2])%4 !== 0)) || ((parseInt(x[0])>29)&&(parseInt(x[1])==2)&&(parseInt(x[2])%4 === 0)) || ((parseInt(x[0])>31)&&(parseInt(x[1])==3)) || ((parseInt(x[0])>30)&&(parseInt(x[1])==4)) || ((parseInt(x[0])>31)&&(parseInt(x[1])==5)) || ((parseInt(x[0])>30)&&(parseInt(x[1])==6)) || ((parseInt(x[0])>31)&&(parseInt(x[1])==7)) || ((parseInt(x[0])>31)&&(parseInt(x[1])==8)) || ((parseInt(x[0])>30)&&(parseInt(x[1])==9)) || ((parseInt(x[0])>31)&&(parseInt(x[1])==10)) || ((parseInt(x[0])>30)&&(parseInt(x[1])==11)) || ((parseInt(x[0])>31)&&(parseInt(x[1])==12)))		
		{
			wronginput("Date"); //generate warning message
			document.OnlineForm.applicant_dob.value="";
			age=0;
			document.getElementById('applicant_dob').focus();
			flag=false;
		}
		if((x[1].length!=2)||(parseInt(x[1])>12)||(x[1]=="00"))
		{
			wronginput("Month");
			age=0;
			flag=false;			
		}
		if((x[2].length!=4)||(parseInt(x[2])>2999)||(parseInt(x[2])<1900))
		{
			wronginput("Year");
			age=0;
			flag=false;			
		}
		document.OnlineForm.applicant_age.value = age;
		//By Balmiki
		raldobs=x[0]+"/"+x[1]+"/"+x[2];
		document.OnlineForm.actualDOB.value = raldobs;
		//End
	}	
	else if (DOBformat == "YY") 
	{ 		
		if(x[0]==null)
		{
			wronginput("Year");
			document.OnlineForm.applicant_dob.value="";
			document.getElementById('applicant_dob').focus();
			document.OnlineForm.applicant_age.value="";
			return false;
		}		
		//age = 2010 - parseInt(x[0]) ;			
		age = n-parseInt(x[0]);		//By Balmiki
		format = 1;
		if((x[0].length!=4)||(parseInt(x[0])>2999)||(parseInt(x[0])<1900))
		{
			wronginput("Year");
			age=0;
			flag=false;
		}		
		document.OnlineForm.applicant_age.value = age;		
		//By Balmiki
		raldobs="01/01/"+x[0];
		document.OnlineForm.actualDOB.value = raldobs;
		//End
	}
	else if (DOBformat == "MY") 
	{
		if((x[0]==null)||(x[1]==null))
		{
			wronginput("Month and Date");
			document.OnlineForm.applicant_dob.value="";
			document.getElementById('applicant_dob').focus();
			document.OnlineForm.applicant_age.value="";
			return false;
		}
		//age = 2010 - parseInt(x[1]) ;
		age = n-parseInt(x[1]);		//By Balmiki
		format = 2;
		if((x[0].length!=2)||(parseInt(x[0])>12)||(x[0]=="00"))
		{
			wronginput("Month");
			age=0;
			flag=false;			
		}
		else if((x[1].length!=4)||(parseInt(x[1])>2999)||(parseInt(x[1])<1900))
		{
			wronginput("Year");
			age=0;
			flag=false;
		}
		if(flag!=false)
		{
			
		}
		document.OnlineForm.applicant_age.value = age;
		//By Balmiki
		raldobs="01/"+x[0]+"/"+x[1];
		document.OnlineForm.actualDOB.value = raldobs;
		//End
	}
	else if (DOBformat == "AG")
	{
		if(x[0]==null)
		{
			wronginput("Age");
			document.OnlineForm.applicant_dob.value="";
			document.getElementById('applicant_dob').focus();
			document.OnlineForm.applicant_age.value="";
			return false;
		}
		
		format = 1;
		if((parseInt(x[0])<1)||(parseInt(x[0])>150))
		{
			wronginput("Age");
			document.OnlineForm.applicant_age.value="";
			flag=false;
		}
		else
		{	
			//age = parseInt(x[0]) - (parseInt(document.OnlineForm.currentyear.value) - 2010); 
			age = parseInt(x[0]) - (parseInt(document.OnlineForm.currentyear.value) - n);		//By Balmiki
			document.OnlineForm.applicant_age.value=age;
			//By Balmiki
			var addyear ;			
			addyear = n - parseInt(x[0]);
			raldobs="01/01/"+addyear;
			document.OnlineForm.actualDOB.value = raldobs;
			//End
		}			
	}
	for(var i = 0; i < x.length; i++)
	{
		if (x[i] == "")
		flag1 = false;
	}
	if(flag==false)
	{
		document.OnlineForm.applicant_dob.value="";
		document.getElementById('applicant_dob').focus();
		document.OnlineForm.applicant_age.value="";
		dob.setDate(01);
		dob.setMonth(01);
		dob.setYear(1900);
	}
	if(x!= "") 
	{
		if (x.length != format )
		{ 
			document.OnlineForm.applicant_dob.value=""; 
			document.getElementById('applicant_dob').focus();
			document.OnlineForm.applicant_age.value="";
		}
		else
		{
			document.getElementById('applicant_nationality').focus(); 
		}
	}		
}

function wronginput(arg)
{
	alert("Invalid " + arg);
}

function chkData(str,checkOK)
{
	var checkstr=str.value;
	var allValid = true;
	var decPoints = 0;
	var allNum = "";

	for (var i = 0;  i < checkstr.length;  i++)
	{
		ch = checkstr.charAt(i);
		for (var j = 0;  j < checkOK.length;  j++)
			if (ch == checkOK.charAt(j))
			{ break;}

		if (j == checkOK.length)
		{
			allValid = false;
			break;
		}
		if (ch != ",")
			allNum += ch;
	}
	if (!allValid)
	{
		str.value=allNum;
		str.focus();
	}
}

function chkStringuserids(str)
{
	var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890_.";
	chkData(str,checkOK);
}

function chkString(str)
{
	var checkOK = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	chkData(str,checkOK);
}

//on 24-01-2014 security by balmiki
function chkStringnew(str)
{
	var checkOK = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-/()";
	chkData(str,checkOK);
}

function chkAddress(str)
{
	var checkOK = " 0123456789.-,/:()ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	chkData(str,checkOK);
}

function chkPhone(str)
{	
	var checkOK = " 0123456789-";
	chkData(str,checkOK);
}

function chkNumeric(str)
{
	var checkOK = "0123456789.";
	chkData(str,checkOK);
}

function chkInt(str)
{
	var checkOK = "0123456789";
	chkData(str,checkOK);
}

function chkInt1(str,str1)
{
	var checkOK = "0123456789";
	chkData1(str,checkOK,str1);
}

function chkAlphaNum(str)
{
	var checkOK = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	chkData(str,checkOK);
}

function chkAlphaNumSp(str)
{
	var checkOK = " 0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	chkData(str,checkOK);
}

function chkAlphaNumendo(str)
{
	var checkOK = " 0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz,.";
	chkData(str,checkOK);
}

function chkWeekOff(str)
{
	var checkOK = "167";
	chkData(str,checkOK);
}

function chkEmail(str)
{
	var checkOK = " 0123456789.@_-ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	chkData(str,checkOK);
}

function chkDatechars(str)
{
	var checkOK = "0123456789/";
	chkData(str,checkOK);
}

function chktimechars(str)
{
	var checkOK = "0123456789:";
	chkData(str,checkOK);
}

function chktime(str)
{
	var y = new Array();
	if(str.value.length==0)
	{
		return false;
	}
	if(str.value.length!=5)
	{
		wronginput("Time");
		str.value="";
		return false;
	}
	y = str.value.split(":");
	if(y.length!=2)
	{
		wronginput("Time");
		str.value="";
		str.focus();
		return false;
	} 
	
	if((parseInt(y[0])>23)||(parseInt(y[1])>59))
	{
		wronginput("Time");
		str.value="";
		str.focus();
		return false;
	}
}

function chkDate(str)
{
	if(str.value=="")
	{
		return false;
	}
	var x = new Array();
	var format=0;
	var flag1 = true;
	age=0;
	x= str.value.split("/");
	flag=true;
	if((x[0]==null)||(x[1]==null)||(x[2]==null)||(x.length!=3))
	{
		wronginput("Date");
		str.value="";
		str.focus();
		return false;
	}
		
	if((x[0].length!=2)||  ((parseInt(x[0])>31)&&(parseInt(x[1])==1)) ||   ((parseInt(x[0])>28)&&(parseInt(x[1])==2)&&(parseInt(x[2])%4 !== 0)) ||   ((parseInt(x[0])>29)&&(parseInt(x[1])==2)&&(parseInt(x[2])%4 === 0)) ||   ((parseInt(x[0])>31)&&(parseInt(x[1])==3)) ||   ((parseInt(x[0])>30)&&(parseInt(x[1])==4)) ||   ((parseInt(x[0])>31)&&(parseInt(x[1])==5)) ||   ((parseInt(x[0])>30)&&(parseInt(x[1])==6)) ||   ((parseInt(x[0])>31)&&(parseInt(x[1])==7)) ||   ((parseInt(x[0])>31)&&(parseInt(x[1])==8)) ||   ((parseInt(x[0])>30)&&(parseInt(x[1])==9)) ||   ((parseInt(x[0])>31)&&(parseInt(x[1])==10)) ||   ((parseInt(x[0])>30)&&(parseInt(x[1])==11)) ||   ((parseInt(x[0])>31)&&(parseInt(x[1])==12)))		
	{
		flag=false;
	}	
	if((x[1].length!=2)||(parseInt(x[1])>12))
	{
		flag=false;		
	}	
	if((x[2].length!=4)||(parseInt(x[2])>2999)||(parseInt(x[2])<1900))
	{
		flag=false;			
	}
	for(var i = 0; i < x.length; i++)
	{
		if (x[i] == "")
		flag = false;
	}	
	if(flag==false)
	{
		wronginput("Date");
		str.value="";
		str.focus();
	}		
 } 
 
function chkform()
{	
	if ((document.OnlineForm.hcode.value == null) || (document.OnlineForm.hcode.value == "")) { alert(" Please Enter Hotel Code "); return false; }
	else if ((document.OnlineForm.hname.value == null) || (document.OnlineForm.hname.value == "")) { alert(" Please Enter Hotel Name  "); return false; }
	else if ((document.OnlineForm.haddr.value == null) || (document.OnlineForm.haddr.value == "")) { alert(" Please Enter Hotel Address  "); return false; }
	else if ((document.OnlineForm.hstate.value == null) || (document.OnlineForm.hstate.value == "")) { alert(" Please Choose Hotel State "); return false; }
	else if ((document.OnlineForm.hcitydistr.value == null) || (document.OnlineForm.hcitydistr.value == "")) { alert(" Please Choose Hotel City/District  "); return false; }
	else if ((document.OnlineForm.hcontact.value == null) || (document.OnlineForm.hcontact.value == "")) { alert(" Please Enter Hotel's Contact Number "); return false; }
	else if ((document.OnlineForm.applicant_surname.value == null) || (document.OnlineForm.applicant_surname.value == "")) { alert(" Please Enter Applicant's Surname "); return false; }
	else if ((document.OnlineForm.applicant_givenname.value == null) || (document.OnlineForm.applicant_givenname.value == "")) { alert(" Please Enter Applicant's given name "); return false; }
	else if ((document.OnlineForm.applicant_sex.value == null) || (document.OnlineForm.applicant_sex.value == "")) { alert(" Please Enter Applicant's Gender "); return false; }
	else if ((document.OnlineForm.dobformat.value == null) || (document.OnlineForm.dobformat.value == "")) { alert(" Please Choose Date of Birth Format  "); return false; }
	else if ((document.OnlineForm.applicant_dob.value == null) || (document.OnlineForm.applicant_dob.value == "")) { alert(" Please Enter Appropriate Date of birth as per chosen format "); return false; }
	else if ((document.OnlineForm.applicant_age.value == null) || (document.OnlineForm.applicant_age.value == "")) { alert(" Please Enter Applicant's Age "); return false; }
	else if ((document.OnlineForm.applicant_nationality.value == null) || (document.OnlineForm.applicant_nationality.value == "")) { alert(" Please Choose Applicant's Nationality "); return false; }
	else if ((document.OnlineForm.applicant_permaddr.value == null) || (document.OnlineForm.applicant_permaddr.value == "")) { alert(" Please Enter Applicant's Permanent Address "); return false; }
	else if ((document.OnlineForm.applicant_permcity.value == null) || (document.OnlineForm.applicant_permcity.value == "")) { alert(" Please Enter Applicant's Permanent City "); return false; }
	else if ((document.OnlineForm.applicant_permcountry.value == null) || (document.OnlineForm.applicant_permcountry.value == "")) { alert(" Please Enter Applicant's Permanent Country "); return false; }
	else if ((document.OnlineForm.applicant_refaddr.value == null) || (document.OnlineForm.applicant_refaddr.value == "")) { alert(" Please Enter Applicant's Reference Address "); return false; }
	else if ((document.OnlineForm.applicant_refstate.value == null) || (document.OnlineForm.applicant_refstate.value == "")) { alert(" Please Choose Applicant's Reference Address -> State "); return false; }
	else if ((document.OnlineForm.applicant_refstatedistr.value == null) || (document.OnlineForm.applicant_refstatedistr.value == "")) { alert(" Please Choose Applicant's Reference Address -> City/District "); return false; }
	else if ((document.OnlineForm.applicant_passpno.value == null) || (document.OnlineForm.applicant_passpno.value == "")) { alert(" Please Enter Applicant's Passport Number "); return false; }
	else if ((document.OnlineForm.applicant_passplcofissue.value == null) || (document.OnlineForm.applicant_passplcofissue.value == "")) { alert(" Please Enter Applicant's Place of issue of Passport"); return false; }
	else if ((document.OnlineForm.applicant_passpdoissue.value == null) || (document.OnlineForm.applicant_passpdoissue.value == "")) { alert(" Please Enter Applicant's Date of issue of Passport "); return false; }
	else if ((document.OnlineForm.applicant_passpvalidtill.value == null) || (document.OnlineForm.applicant_passpvalidtill.value == "")) { alert(" Please Enter Applicant's Passport Expiration/Validity Date "); return false; }
	else if ((document.OnlineForm.applicant_visano.value == null) || (document.OnlineForm.applicant_visano.value == "")) { alert(" Please Enter Applicant's Visa number "); return false; }
	else if ((document.OnlineForm.applicant_visaplcoissue.value == null) || (document.OnlineForm.applicant_visaplcoissue.value == "")) { alert(" Please Enter Applicant's Place of issue of visa "); return false; }
	else if ((document.OnlineForm.applicant_visadoissue.value == null) || (document.OnlineForm.applicant_visadoissue.value == "")) { alert(" Please Enter Applicant's Date of issue of visa "); return false; }
	else if ((document.OnlineForm.applicant_visavalidtill.value == null) || (document.OnlineForm.applicant_visavalidtill.value == "")) { alert(" Please Enter Applicant's Visa Expiry/Validity Date "); return false; }
	else if ((document.OnlineForm.applicant_visatype.value == null) || (document.OnlineForm.applicant_visatype.value == "")) { alert(" Please Choose Applicant's Visa Type "); return false; }
	else if ((document.OnlineForm.applicant_arrivedfrom.value == null) || (document.OnlineForm.applicant_arrivedfrom.value == "")) { alert(" Please Enter Place where Applicant has Arrived from "); return false; }
	else if ((document.OnlineForm.applicant_doarrivalindia.value == null) || (document.OnlineForm.applicant_doarrivalindia.value == "")) { alert(" Please Enter Applicant's Date of Arrival in India "); return false; }
	else if ((document.OnlineForm.applicant_doarrivalhotel.value == null) || (document.OnlineForm.applicant_doarrivalhotel.value == "")) { alert(" Please Enter Applicant's Date of Arrival in Hotel, Ensure that the date is in DD/MM/YYYY Format and is a valid date "); return false; }
	else if ((document.OnlineForm.applicant_timeoarrivalhotel.value == null) || (document.OnlineForm.applicant_timeoarrivalhotel.value == "")) { alert(" Please Enter Applicant's Time of Arrival in hotel in HH:MM, 24 hour format, Ensure that it is a valid time "); return false; }
	else if ((document.OnlineForm.applicant_intnddurhotel.value == null) || (document.OnlineForm.applicant_intnddurhotel.value == "")) { alert(" Please Enter Applicant's Intended duration of stay in hotel "); return false; }
	else if ((document.OnlineForm.applicant_plcofdisembark.value == null) || (document.OnlineForm.applicant_plcofdisembark.value == "")) { alert(" Please Choose Applicant's Place of Disembarkment "); return false; }
	else if ((document.OnlineForm.applicant_employedinindia.value == null) || (document.OnlineForm.applicant_employedinindia.value == "")) { alert(" Please Enter Applicant's Employment status in India  "); return false; }
	else if ((document.OnlineForm.applicant_purpovisit.value == null) || (document.OnlineForm.applicant_purpovisit.value == "")) { alert(" Please choose Applicant's Purpose of Visit "); return false; }
	else if ((document.OnlineForm.applicant_nextdest.value == null) || (document.OnlineForm.applicant_nextdest.value == "")) { alert(" Please Enter Applicant's Next Destination "); return false; }
	else if ((document.OnlineForm.applicant_contactnoinindia.value == null) || (document.OnlineForm.applicant_contactnoinindia.value == "")) { alert(" Please Enter Applicant's Contact no in India "); return false; }
	else if ((document.OnlineForm.applicant_contactnoperm.value == null) || (document.OnlineForm.applicant_contactnoperm.value == "")) { alert(" Please Enter Applicant's Permanent Contact no "); return false; }
	return true;
}

