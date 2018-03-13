function sizecount(str)
{
	var sizecount1=str.value;
	if(sizecount1.length!=6)
	{
		alert("please enter proper "+str.name);
		str.focus();
		return false;
	}
	return true;
}

function DateCheck(val,val2)
{
	var val1=null;
	val1=val.value;
	var year=val1.substr(6,4);
	var day=val1.substr(0,2);
	var month=val1.substr(3,2);
	var syear=val2.value.substr(6,4);
	var sdate=val2.value.substr(0,2);
	var smonth=val2.value.substr(3,2);
	if(year<syear)
	{
		clr2(val,val2);
		return false;
	}
	else if(year==syear)
	{
		if(month < smonth)
		{
			clr2(val,val2);
			return false;
		}
		else if(month==smonth)
		{
			if(day < sdate)
			{
				clr2(val,val2);
				return false;
			}
			else if(day >= sdate)
				return true;
		}
		return true;
	}
	return true;
}

function isEmpty(str)
{
	return((str==null) ||(str.length==0));
}

function chkData(str,checkOK)
{
	var checkstr=str.value;
	var allValid = true;
	var decPoints = 0;
	var allNum = "";
	for (var i = 0; i < checkstr.length; i++)
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

function chkData1(str,checkOK,str1)
{
	var charstr=str.value;
	var char1="";
	var allnums="";
	var allchars="";
	for(var i=0;i<charstr.length;i++)
	{
		char1=charstr.charAt(i);
		for(var j=0;j<checkOK.length;j++)
		{
			if(char1==checkOK.charAt(j))
			{
				allnums+=char1;
			}
		}
	}
	str1.value=allnums;
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

function chkDatechars(str)
{
	var dob= str.value;
	var checkOK = "0123456789/";
	chkData(str,checkOK);
}

function insertslash(str,str1)
{	var vdate=str.value;
	var strSeperator = "/"; 	
	if(str1=='DY'){
		if(vdate.length==2||vdate.length==5){
			str.value=str.value+strSeperator;				
		}
			}
	else if(str1=='MY'){
		if(vdate.length==2){
			str.value=str.value+strSeperator;			
		}
		if(vdate.length>7){
			str.value=str.value.substr(0,7);			
		}		
		
	}else if(str1=='YY'){
		if(vdate.length>4){
		str.value=str.value.substr(0,4);
	}
	}
	else if(str1=='AG'){
		if(vdate.length>3){
			str.value=str.value.substr(0,3);
		}		
	}
}

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

function trim1(obj) 
{
	var s=obj.value;
	s = s.replace(/(^\s*)|(\s*$)/gi,"");
	s = s.replace(/\s+/gi," ");				//on 18-06-2013 for TAB Space
	s = s.replace(/[ ]{2,}/gi," ");
	s = s.replace(/\n /,"\n");
	obj.value=s;
}

function trim(obj) 
{
	var s=obj.value;
	s = s.replace(/(^\s*)|(\s*$)/gi,"");
	s = s.replace(/[ ]{2,}/gi," ");
	s = s.replace(/\n /,"\n");
	obj.value=s;
	return obj.value.length;
}

function chkString(str)
{
	var checkOK = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
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
function chkAlphaNumWithslash(str)
{
	var checkOK = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz/";
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
	var str = str.value;
	var checkOK = "0123456789.@_-ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	chkData(str,checkOK); 
}

function validateUSDate( strValue ) 
{
	  var objRegExp = /^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$/;
	  if(!objRegExp.test(strValue))
	    return false; //doesn't match pattern, bad date
	  else
	  {
	    var strSeparator = strValue.substring(2,3); //find date separator
	    var arrayDate = strValue.split(strSeparator); //split date into month, day, year
	    //create a lookup for months not equal to Feb.
	    var arrayLookup = { '01' : 31,'03' : 31, '04' : 30,'05' : 31,'06' : 30,'07' : 31,
	                        '08' : 31,'09' : 30,'10' : 31,'11' : 30,'12' : 31};
	    var intDay = (arrayDate[1]);
	
	    //check if month value and day value agree
	    if(arrayLookup[arrayDate[0]] != null) 
	    {
	      if(intDay <= arrayLookup[arrayDate[0]] && intDay != 0)
	        return true; //found in lookup table, good date
	    }
	    //check for February
	    var intYear = parseInt(arrayDate[2]);
	    var intMonth = parseInt(arrayDate[0]);
	    if( ((intYear % 4 == 0 && intDay <= 29) || (intYear % 4 != 0 && intDay <=28)) && intDay !=0)
	      return true; //Feb. had valid number of days
	  }
	  return false; //any other values, bad date
}

function compareDates(value1,value2) 
{
   var date1, date2;
   var month1, month2;
   var year1, year2;

   date1 = value1.substring (0, value1.indexOf ("/"));
   month1 = value1.substring (value1.indexOf ("/")+1, value1.lastIndexOf ("/"));
   year1 = value1.substring (value1.lastIndexOf ("/")+1, value1.length);

   date2 = value2.substring (0, value2.indexOf ("/"));
   month2 = value2.substring (value2.indexOf ("/")+1, value2.lastIndexOf ("/"));
   year2 = value2.substring (value2.lastIndexOf ("/")+1, value2.length);

   if (year1 > year2) return 1;
   else if (year1 < year2) return -1;
   else if (month1 > month2) return 1;
   else if (month1 < month2) return -1;
   else if (date1 > date2) return 1;
   else if (date1 < date2) return -1;
   else return 0;
}


function checkmailid(field)
{
	var apos=field.indexOf("@");
	var dotpos=field.lastIndexOf(".");
	if (apos<1||dotpos-apos<2)
		{return false;}
	else 
		{return true;}
}

function backButtonOverride()
{
	// Work around a Safari bug that sometimes produces a blank page
	setTimeout("backButtonOverrideBody()", 1);
}

function backButtonOverrideBody()
{
  // Works if we backed up to get here
  try 
  {
    history.forward();
  } 
  catch (e) 
  {
    // OK to ignore
  }
  // Every quarter-second, try again. The only guaranteed method for Opera, Firefox, and Safari, which don't always call onLoad but *do* resume any timers when returning to a page
  setTimeout("backButtonOverrideBody()", 500);
}

function enablePrev_name(check)
{
	var row = document.getElementById("PrevSName");
	var row1 = document.getElementById("PrevName");
	document.OnlineForm.prev_surname.value="";
	document.OnlineForm.prev_applname.value="";
	if (check.checked) 
	{ 
	   row.style.display = '';
	   row1.style.display = '';
	 }
	 else
	 {
	    row.style.display = 'none';
	    row1.style.display = 'none';
	 }
}

function enableppt(check)
{
	var row = document.getElementById("XX");
	var row1 = document.getElementById("XX1");
	var row2 = document.getElementById("XX2");
	var row3 = document.getElementById("XX3");
	var row4 = document.getElementById("XX4");
	
	if (check.value=='yes') 
	{ 
	   row.style.display = '';
	   row1.style.display = '';
	   row2.style.display = '';
	   row3.style.display = '';
	   row4.style.display = '';
	 }
	 else
	 {
	    row.style.display = 'none';
	    row1.style.display = 'none';
	    row2.style.display = 'none';
	    row3.style.display = 'none';
	    row4.style.display = 'none';
		document.OnlineForm.country_issue.value="";
		document.OnlineForm.previssuedate.value="";
		document.OnlineForm.oth_ppt_no.value="";
		document.OnlineForm.oth_ppt_issue_place.value="";
		document.OnlineForm.oth_ppt_nationality.value="";
	 }   
}

function fullname1(str)
{
	 var temp=new Array();
	 temp=str.split(' ');
	 var firstname=temp[0];
	 var middlename=temp[1];
	 var k=firstname.length;
	 firstname=firstname.toUpperCase();
	 if(middlename!=null)
	 {	
		 if(firstname=='MR' || firstname=='MRS' || firstname=='SMT'|| firstname=='DR'|| firstname=='MISS' ||  firstname=='MS')
		 {
			 return true;
		 }
	 }
}

function fullname(str)
{
	 var temp=new Array();
	 temp=str.split(' ');
	 var firstname=temp[0];
	 var middlename=temp[1];
	 var k=firstname.length;
	 if(middlename!=null)
	 {
		 if(firstname.length==1 || middlename.length==1)
		 {
			 return true;
		 }
	}
}

function selectPRC()
{
	var nation=document.getElementById("nationality").value;
	var row = document.getElementById("Booklet");
	var row1 = document.getElementById("Tracking");
	var row2 = document.getElementById("Prev_passport");
	if(nation=="PAK" )
	{
		row.style.display = '';
		row1.style.display = '';
		row2.style.display = '';
	}
	else
	{
		row.style.display = 'none';
		row1.style.display = 'none';
		row2.style.display = 'none';	
	}
}

function enablePrevOcc(check)
{
	var org = document.getElementById("Org");
	var desg = document.getElementById("Desg");
	var rank = document.getElementById("Rank");
	var posting = document.getElementById("Posting");
	
	if(check.value=='yes')
	{
	  org.style.display = '';
	  desg.style.display = '';
	  rank.style.display = '';
	  posting.style.display = '';
	}
	else
	{	
	  org.style.display = 'none';
	  desg.style.display = 'none';
	  rank.style.display = 'none';
	  posting.style.display = 'none';
	  document.OnlineForm.prev_org.value="";
	  document.OnlineForm.prev_desg.value="";
	  document.OnlineForm.prev_rank.value="";
	  document.OnlineForm.prev_posting.value="";
	}
}

function enableGrandParentDet(chk)
{
	if(chk.value=='yes')
	{
		document.OnlineForm.grandparent_det.disabled=false;
		document.OnlineForm.grandparent_det.value="";
	}
	else
	{
		document.OnlineForm.grandparent_det.disabled=true;
		document.OnlineForm.grandparent_det.value="";
	}
}

function checkAdd(check)
{
	if(check.checked)
	{
		document.OnlineForm.perm_address1.value=document.OnlineForm.present_address1.value;
		document.OnlineForm.perm_address2.value=document.OnlineForm.present_address2.value;
		document.OnlineForm.perm_address3.value=document.OnlineForm.present_address3.value;	
	}
	else
	{
		document.OnlineForm.perm_address1.value="";
		document.OnlineForm.perm_address2.value="";
		document.OnlineForm.perm_address3.value="";
	}
}

function enablestatus(check)
{
	document.OnlineForm.spousename.value="";
	document.OnlineForm.spouse_nation_id.value="";
	if(check.value=='0')
	{
		document.OnlineForm.spousename.disabled=false;
		document.OnlineForm.spouse_nation_id.disabled=false;
	}
	else if(check.value=='1')
	{
		document.OnlineForm.spousename.disabled=true;
		document.OnlineForm.spouse_nation_id.disabled=true;
	}
	else 
	{
		document.OnlineForm.spousename.disabled=true;
		document.OnlineForm.spouse_nation_id.disabled=true;
	}
}

function visaDet(visatype)
{	
	var bv = document.getElementById("BV");
	var sv = document.getElementById("SV");
	var ev = document.getElementById("EV");
	var tv = document.getElementById("TV");
	var mv = document.getElementById("MV");
	var mt = document.getElementById("MT");
	var rv = document.getElementById("RV");
	
	switch(visatype)
	{
		case 'BUS': bv.style.display = '';
			mt.style.display = 'none';
			sv.style.display = 'none';
			ev.style.display = 'none';
			tv.style.display = 'none';
			mv.style.display = 'none';
			rv.style.display = 'none';
		break;
		case 'STU':sv.style.display = '';
			mt.style.display = 'none';
			ev.style.display = 'none';
			bv.style.display = 'none';
			tv.style.display = 'none';
			mv.style.display = 'none';
			rv.style.display = 'none';
		break;
		case 'RES':rv.style.display = '';
			mt.style.display = 'none';
			ev.style.display = 'none';
			bv.style.display = 'none';
			tv.style.display = 'none';
			mv.style.display = 'none';
			sv.style.display = 'none';
		break;
		case 'TRA':tv.style.display = '';
			mt.style.display = 'none';
			ev.style.display = 'none';
			sv.style.display = 'none';
			bv.style.display = 'none';
			mv.style.display = 'none';
			rv.style.display = 'none';
		break;
		case 'EMP':ev.style.display = '';
			mt.style.display = 'none';
			tv.style.display = 'none';
			sv.style.display = 'none';
			bv.style.display = 'none';
			mv.style.display = 'none';
			rv.style.display = 'none';
		break;
		case 'MED':mv.style.display = '';
			mt.style.display = 'none';
			tv.style.display = 'none';
			sv.style.display = 'none';
			bv.style.display = 'none';
			ev.style.display = 'none';
			rv.style.display = 'none';
		break;
		case 'ATT':mt.style.display = '';
			mv.style.display = 'none';
			tv.style.display = 'none';
			sv.style.display = 'none';
			bv.style.display = 'none';
			ev.style.display = 'none';
			rv.style.display = 'none';
		break;
		default:mt.style.display = 'none';
		   mv.style.display = 'none';
		   tv.style.display = 'none';
		   sv.style.display = 'none';
		   bv.style.display = 'none';
		   ev.style.display = 'none';
		   rv.style.display = 'none';
	}
}

function enableTransVisa(chk,str)
{
	var cty = document.getElementById(str+"Country");
	var flag = document.getElementById(str+"VisaFlag");
	
	if(chk.checked)
	{
		cty.style.display = '';
		flag.style.display = '';
	}
	else
	{
		cty.style.display = 'none';
		flag.style.display = 'none';
	}
}

function enablePrevVisa(chk)
{
	document.OnlineForm.prv_visit_add1.value="";
	document.OnlineForm.prv_visit_add2.value="";
	document.OnlineForm.prv_visit_add3.value="";
	document.OnlineForm.old_visa_no.value="";
	document.OnlineForm.oldvisaissuedate.value="";
	document.OnlineForm.oldvisaissueplace.value="";
	document.OnlineForm.old_visa_type_id.value="";
	document.OnlineForm.visited_city.value="";
	var add1 = document.getElementById("Add1");
	var add2 = document.getElementById("Add2");
	var add3 = document.getElementById("Add3");
	var city = document.getElementById("VstCity");
	var id = document.getElementById("PrevVisaId");
	var type = document.getElementById("PrevVisaType");
	var place = document.getElementById("PrevVisaPlace");
	var date = document.getElementById("PrevVisaDate");
	
	if (chk.value=='yes') 
	{
		add1.style.display = '';
		add2.style.display = '';
		add3.style.display = '';
		city.style.display = '';
		id.style.display = '';
		type.style.display = '';
		place.style.display = '';
		date.style.display = '';
	}
	else
	{
		add1.style.display = 'none';
		add2.style.display = 'none';
		add3.style.display = 'none';
		city.style.display = 'none';
		id.style.display = 'none';
		type.style.display = 'none';
		place.style.display = 'none';
		date.style.display = 'none';
	}
}

function chkLength(check)
{
	if(check.length>75) 
	{
		return true;
	}
	return false;
}

function enableRow()
{
	if(!(document.getElementById("place_of_stay4").disabled))
	{
		document.OnlineForm.EnableButton.disabled=true;
		return ;
	}
	for(var i=2;i<=4;i++)
	{		
		if(document.getElementById("place_of_stay"+i).disabled && document.getElementById("place_of_stay"+(i-1)).value!='' &&
		document.getElementById("pos_address"+(i-1)).value!='' && document.getElementById("pos_state_id"+(i-1)).value!='' &&
		 document.getElementById("pos_phone"+(i-1)).value!='' )
		{
			if(i==2)
			{
				if (document.OnlineForm.DIST1!=null && document.OnlineForm.DIST1.value!='')
				{ 
					flag=1;
				}
				else
				{
					return;
				}
			}
			if(i==3)
			{
				if (document.OnlineForm.DIST2!=null && document.OnlineForm.DIST2.value!='')
				{ 
					flag=1;
				}
				else
				{
					return;
				}
			}
			if(i==4)
			{
				if (document.OnlineForm.DIST3!=null && document.OnlineForm.DIST3.value!='')
				{ 
					flag=1;
				}
				else
				{
					return;
				}
			}
			if(flag==1)
			{
				document.getElementById("place_of_stay"+i).disabled=false;
				document.getElementById("pos_address"+i).disabled=false;
				document.getElementById("pos_state_id"+i).disabled=false;
				document.getElementById("pos_dist_id"+i).disabled=false;
				document.getElementById("email"+i).disabled=false;
				document.getElementById("pos_phone"+i).disabled=false;
			}
			break;
		}
	}
}

function verifyform()
{
	flag=0;
	if (isEmpty(document.OnlineForm.PIA.value)){alert("Please Select Indian Mission/Office"); document.OnlineForm.PIA.focus();return false;}
	if(!isEmpty(document.OnlineForm.surname.value)){if(fullname(document.OnlineForm.surname.value)){alert("Please Enter Applicant's Full Surname");document.OnlineForm.surname.focus();return false;}}
	if(!isEmpty(document.OnlineForm.surname.value)){
	if(trim(document.OnlineForm.surname)==0){alert("Please Enter Applicant's Surname "); document.OnlineForm.surname.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.applname.value)){alert("Please Enter Applicant's Name  "); document.OnlineForm.applname.focus();return false;}
	if (!isEmpty(document.OnlineForm.applname.value)){
	if(trim(document.OnlineForm.applname)==0){alert("Please Enter Applicant's Name "); document.OnlineForm.applname.focus(); return false;}
	}
	if (!isEmpty(document.OnlineForm.applname.value)){
	if (fullname1(document.OnlineForm.applname.value)){alert("Please Enter Applicant's  Surname without using Abbreviation like DR,MRS,MISS");document.OnlineForm.applname.focus();return false;}}
	if(document.OnlineForm.checkbox1.checked){
	if (isEmpty(document.OnlineForm.prev_surname.value)){alert("Please Enter Applicant's Previous Surname  "); document.OnlineForm.prev_surname.focus();return false;}
	if (isEmpty(document.OnlineForm.prev_applname.value)){alert("Please Enter Applicant's Previous Name  "); document.OnlineForm.prev_applname.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.applsex.value)){alert("Please Select Sex  "); document.OnlineForm.applsex.focus();return false;}
	if (isEmpty(document.OnlineForm.birthdate.value)){alert("Please Enter Birth date  "); document.OnlineForm.birthdate.focus();return false;}
	if (!isEmpty(document.OnlineForm.birthdate.value)){
	var APPLDOB= document.OnlineForm.birthdate.value;
	var Apday = APPLDOB.substring(0, 2);
	if(Apday.length==1){Apday=0+Apday;}
	var Apmonth = APPLDOB.substring(3, 5);
	if(Apmonth.length==1){Apmonth=0+Apmonth;}
	var Apdt=Apmonth+"/"+Apday+"/"+APPLDOB.substring(6);
	var Apedate=Apday+"/"+Apmonth+"/" +APPLDOB.substring(6);
	if(validateUSDate(Apdt)){
	if(compareDates(document.OnlineForm.Date.value,Apedate)==-1)
	{
	alert("Date of birth Cannot be Greater Than Today  Date");
	document.OnlineForm.birthdate.focus();
	return false;
	}
	}else{alert("Please Enter Valid Birth date  ");document.OnlineForm.birthdate.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.placbrth.value)){alert("Please Enter Birth City/Town  "); document.OnlineForm.placbrth.focus();return false;}
	if (isEmpty(document.OnlineForm.countrybrth.value)){alert("Please Enter Birth Country  "); document.OnlineForm.countrybrth.focus();return false;}
	if (isEmpty(document.OnlineForm.nic_no.value)){alert("Please Enter NIC Card No.  "); document.OnlineForm.nic_no.focus();return false;}
	 if(!isEmpty(document.OnlineForm.nic_no.value)){
	 if(trim(document.OnlineForm.nic_no)==0){alert("Please Enter NIC Card No."); document.OnlineForm.nic_no.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.religion.value)){alert("Please Enter Religion  "); document.OnlineForm.religion.focus();return false;}
	if (isEmpty(document.OnlineForm.visual_d_mark.value)){alert("Please Enter Visible Idenfication Marks  "); document.OnlineForm.visual_d_mark.focus();return false;}
	if (!isEmpty(document.OnlineForm.visual_d_mark.value)){
	if(trim(document.OnlineForm.visual_d_mark)==0){alert("Please Enter Visible Idenfication Marks "); document.OnlineForm.visual_d_mark.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.edu_id.value)){alert("Please Enter Educational Qualification  "); document.OnlineForm.edu_id.focus();return false;}
	if (isEmpty(document.OnlineForm.nationality.value)){alert("Please Enter Nationality  "); document.OnlineForm.nationality.focus();return false;}
	if (isEmpty(document.OnlineForm.nationality_by.value)){alert("Did you acquire citizenship by birth or by naturalization?"); document.OnlineForm.nationality_by.focus();return false;}
	if(document.OnlineForm.nationality_by.value=='Naturalization'){
	if (isEmpty(document.OnlineForm.prev_nationality.value)){alert("Please Enter Previous Nationality  "); document.OnlineForm.prev_nationality.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.passport_no.value)){alert("Please Enter Passport No.  "); document.OnlineForm.passport_no.focus();return false;}
	if (!isEmpty(document.OnlineForm.passport_no.value)){
	if(trim(document.OnlineForm.passport_no)==0){alert("Please Enter Passport No. "); document.OnlineForm.passport_no.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.issueplace.value)){alert("Please Enter Issue Place  "); document.OnlineForm.issueplace.focus();return false;}
	if (!isEmpty(document.OnlineForm.issueplace.value)){
	 if(trim(document.OnlineForm.issueplace)==0){alert("Please Enter Issue Place "); document.OnlineForm.issueplace.focus(); return false;}
	 }
	if (isEmpty(document.OnlineForm.issuedate.value)){alert("Please Enter Issue Date  "); document.OnlineForm.issuedate.focus();return false;}
	if (!isEmpty(document.OnlineForm.issuedate.value)){
	var joi= document.OnlineForm.issuedate.value;
	var joiday = joi.substring(0, 2);
	if(joiday.length==1){joiday=0+joiday;}
	var joimonth = joi.substring(3, 5);
	if(joimonth.length==1){joimonth=0+joimonth;}
	var joidt=joimonth+"/"+joiday+"/"+joi.substring(6);
	
	var joiedate=joiday+"/"+joimonth+"/" +joi.substring(6);
	
	if(validateUSDate(joidt)){
	if(compareDates(document.OnlineForm.Date.value,joiedate)==-1)
	{
	alert("Date of Issue Cannot be greater Than Today  Date");
	document.OnlineForm.issuedate.focus();
	return false;
	}
	}else{alert("Please Enter Valid Issue date  ");document.OnlineForm.issuedate.focus();return false;}
	}
	
	if (isEmpty(document.OnlineForm.expirydate.value)){alert("Please Enter Expiry Date  "); document.OnlineForm.expirydate.focus();return false;}
	if (!isEmpty(document.OnlineForm.expirydate.value)){
	var joe= document.OnlineForm.expirydate.value;
	var joeday = joe.substring(0, 2);
	if(joeday.length==1){joeday=0+joeday;}
	var joemonth = joe.substring(3, 5);
	if(joemonth.length==1){joemonth=0+joemonth;}
	var joedt=joemonth+"/"+joeday+"/"+joe.substring(6);
	
	var joeedate=joeday+"/"+joemonth+"/" +joe.substring(6);
	
	if(validateUSDate(joedt)){
	if(compareDates(joeedate,document.OnlineForm.Date.value)==-1)
	{
	alert("Date of Expiry Cannot be Less Than Today  Date");
	document.OnlineForm.expirydate.focus();
	return false;
	}
	
	if(compareDates(joeedate,document.OnlineForm.issuedate.value)==-1)
	{
	alert("Date of Expiry Cannot be Less Than Date of Issue");
	document.OnlineForm.expirydate.focus();
	return false;
	}
	}else{alert("Please Enter Valid Expiry date  ");document.OnlineForm.expirydate.focus();return false;}
	
	}
	if(document.OnlineForm.nationality.value=="PAK" && document.OnlineForm.booklet_no.value==""){
	  if (isEmpty(document.OnlineForm.booklet_no.value)){alert("Please Enter Booklet No.  "); document.OnlineForm.booklet_no.focus();return false;}
	 }
	
	 if(document.OnlineForm.nationality.value=="PAK" && document.OnlineForm.track_no.value==""){
	  if (isEmpty(document.OnlineForm.track_no.value)){alert("Please Enter Tracking No.  "); document.OnlineForm.track_no.focus();return false;}
	  }
	  if(document.OnlineForm.nationality.value=="PAK" && document.OnlineForm.prev_ppt_no.value==""){
	   if (isEmpty(document.OnlineForm.prev_ppt_no.value)){alert("Please Enter Previous Passport No.  "); document.OnlineForm.prev_ppt_no.focus();return false;}
	  }
	if(document.OnlineForm.nationality.value!="PAK"){document.OnlineForm.booklet_no.value="";document.OnlineForm.track_no.value="";document.OnlineForm.prev_ppt_no.value="";}
	if (document.OnlineForm.oth_ppt[0].checked){
	if (isEmpty(document.OnlineForm.country_issue.value)){alert("Please Enter Country of Issue of Previous Passport "); document.OnlineForm.country_issue.focus();return false;}
	if (isEmpty(document.OnlineForm.oth_ppt_no.value)){alert("Please Enter Previous Passport No.  "); document.OnlineForm.oth_ppt_no.focus();return false;}
	if (isEmpty(document.OnlineForm.previssuedate.value)){alert("Please Enter Previous Passport\'s Issue Date  "); document.OnlineForm.previssuedate.focus();return false;}
	if (isEmpty(document.OnlineForm.oth_ppt_issue_place.value)){alert("Please Enter Previous Passport\'s Issue Place  "); document.OnlineForm.oth_ppt_issue_place.focus();return false;}
	if (isEmpty(document.OnlineForm.oth_ppt_nationality.value)){alert("Please Enter Nationality in Previous Passport   "); document.OnlineForm.oth_ppt_nationality.focus();return false;}
	
	}
	
	   return true;
}

function verifyform1()
{	
	   if (isEmpty(document.OnlineForm.present_address1.value)){alert("Please Enter Present address "); document.OnlineForm.present_address1.focus();return false;}
	   if (!isEmpty(document.OnlineForm.present_address1.value)){
	 if(trim(document.OnlineForm.present_address1)==0){alert("Please Enter Present address "); document.OnlineForm.present_address1.focus(); return false;}
	 }
	if (isEmpty(document.OnlineForm.present_address2.value)){alert("Please Enter Present address's City/Town"); document.OnlineForm.present_address2.focus();return false;}
	if (!isEmpty(document.OnlineForm.present_address2.value)){
	 if(trim(document.OnlineForm.present_address2)==0){alert("Please Enter Present address's City/Town "); document.OnlineForm.present_address2.focus(); return false;}
	 }
	 if (isEmpty(document.OnlineForm.present_address3.value)){alert("Please Enter Present address's State"); document.OnlineForm.present_address3.focus();return false;}
	 if (!isEmpty(document.OnlineForm.present_address3.value)){
	 if(trim(document.OnlineForm.present_address3)==0){alert("Please Enter Present address's State "); document.OnlineForm.present_address3.focus(); return false;}
	 }
	    if (isEmpty(document.OnlineForm.present_country.value)){alert("Please Enter Present address's Country"); document.OnlineForm.present_country.focus();return false;}
	
	if (isEmpty(document.OnlineForm.present_phone.value)){
	if (isEmpty(document.OnlineForm.mobile.value)){alert("Please Enter Either Present Phone No. or Mobile No."); document.OnlineForm.present_phone.focus();return false;}}
	
	    if (!isEmpty(document.OnlineForm.email.value))
	{  if(!checkmailid(document.OnlineForm.email.value)){
	alert("Please Enter Valid Email Id "); document.OnlineForm.email.focus();return false;}
	}
	   if (isEmpty(document.OnlineForm.perm_address1.value)){alert("Please Enter Permanent address  "); document.OnlineForm.perm_address1.focus();return false;}
	   
	   if (isEmpty(document.OnlineForm.martstat.value)){alert("Please Enter Martial Status  "); document.OnlineForm.martstat.focus();return false;}
	    if (!isEmpty(document.OnlineForm.martstat.value)) {
	var msvalue=document.OnlineForm.martstat.value;
	if(msvalue=='0'){
	if (isEmpty(document.OnlineForm.spousename.value)){alert("Please Enter Spouse\'s Name  "); document.OnlineForm.spousename.focus();return false; }
	if (!isEmpty(document.OnlineForm.spousename.value)){
	 if(trim(document.OnlineForm.spousename)==0){alert("Please Enter Spouse's Name "); document.OnlineForm.spousename.focus(); return false;}
	 }
	if (isEmpty(document.OnlineForm.spouse_nation_id.value)){alert("Please Enter Spouse\'s Nationality  "); document.OnlineForm.spouse_nation_id.focus();return false; }
	}
	}
	 if (isEmpty(document.OnlineForm.fthrname.value)){alert("Please Enter Father\'s Name  "); document.OnlineForm.fthrname.focus();return false;}
	if (!isEmpty(document.OnlineForm.fthrname.value)){
	 if(trim(document.OnlineForm.fthrname)==0){alert("Please Enter Father's Name "); document.OnlineForm.fthrname.focus(); return false;}
	 }
	 if (isEmpty(document.OnlineForm.fthr_nation_id.value)){alert("Please Enter Father\'s Nationality  "); document.OnlineForm.fthr_nation_id.focus();return false;}
	 if (isEmpty(document.OnlineForm.mthrname.value)){alert("Please Enter Mother\'s Name  "); document.OnlineForm.mthrname.focus();return false;}
	 if (!isEmpty(document.OnlineForm.mthrname.value)){
	 if(trim(document.OnlineForm.mthrname)==0){alert("Please Enter Mother's Name "); document.OnlineForm.mthrname.focus(); return false;}
	 }
	if (isEmpty(document.OnlineForm.mthr_nation_id.value)){alert("Please Enter Mother\'s Nationality  "); document.OnlineForm.mthr_nation_id.focus();return false;}
	if (!document.OnlineForm.grandparent_flag[0].checked && !document.OnlineForm.grandparent_flag[1].checked){alert("Please select Whether your Grandfather/GrandMother(paternal/maternal) are Pakistan Nationals or Belong to Pakistan held area.'"); document.OnlineForm.grandparent_flag[0].focus();return false;}
	if(document.OnlineForm.grandparent_flag[0].checked){
	if(isEmpty(document.OnlineForm.grandparent_det.value)){ alert("Please mention grand parents\'s details."); document.OnlineForm.grandparent_det.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.occupation_id.value)){alert("Please Enter Occupation  "); document.OnlineForm.occupation_id.focus();return false;}
	if (!isEmpty(document.OnlineForm.occupation_id.value)){
	if(document.OnlineForm.occupation_id.value.indexOf('HOUSE WIFE')!=-1  || document.OnlineForm.occupation_id.value.indexOf('MINOR')!=-1)
	{
	if (isEmpty(document.OnlineForm.occ_flag.value)){alert("Please specify whose Occupation details you are specifying "); document.OnlineForm.occ_flag.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.empname.value)){alert("Please Enter Employer\'s Name  "); document.OnlineForm.empname.focus();return false;}
	if (isEmpty(document.OnlineForm.emp_address.value)){alert("Please Enter Employer\'s Address "); document.OnlineForm.emp_address.focus();return false;}
	if(document.OnlineForm.nationality.value=='PAK'){
	if (isEmpty(document.OnlineForm.empdept.value)){alert("Please Enter Department  "); document.OnlineForm.empdept.focus();return false;}
	if (isEmpty(document.OnlineForm.empsalary.value)){alert("Please Enter Monthly Salary "); document.OnlineForm.empsalary.focus();return false;}
	}
	
	}
	if(document.OnlineForm.nationality.value!="PAK"){document.OnlineForm.empdept.value="";document.OnlineForm.empsalary.value="";}
	if(document.OnlineForm.prev_occ[0].checked){
	if (isEmpty(document.OnlineForm.prev_org.value)){alert("Please Enter Previous Organisation  "); document.OnlineForm.prev_org.focus();return false;}
	if (isEmpty(document.OnlineForm.prev_desg.value)){alert("Please Enter Previous Designation "); document.OnlineForm.prev_desg.focus();return false;}
	if (isEmpty(document.OnlineForm.prev_rank.value)){alert("Please Enter Previous Rank"); document.OnlineForm.prev_rank.focus();return false;}
	if (isEmpty(document.OnlineForm.prev_posting.value)){alert("Please Enter Previous Posting  "); document.OnlineForm.prev_posting.focus();return false;}
	};
	return true;
}


function verifyform2()
{
	browser_info();
	flag=0;
	if (isEmpty(document.OnlineForm.visa_service_id.value)){alert("Please Enter Visa Type  "); document.OnlineForm.visa_service_id.focus();return false;}
	if(!isEmpty(document.OnlineForm.visa_service_id.value) ){
	switch(document.getElementById("vnameSubStr").value){
	
	case 'BUS':
	if (isEmpty(document.OnlineForm.nameofComp.value)){alert("Please Enter Company\'s Name  "); document.OnlineForm.nameofComp.focus();return false;}
	if(!isEmpty(document.OnlineForm.nameofComp.value)){
	 if(trim(document.OnlineForm.nameofComp)==0){alert("Please Enter Company\'s Name "); document.OnlineForm.nameofComp.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.addofComp.value)){alert("Please Enter Company\'s Address  "); document.OnlineForm.addofComp.focus();return false;}
	if(!isEmpty(document.OnlineForm.addofComp.value)){
	 if(trim(document.OnlineForm.addofComp)==0){alert("Please Enter Company\'s Address "); document.OnlineForm.addofComp.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.phofComp.value)){alert("Please Enter Company\'s Phone  "); document.OnlineForm.phofComp.focus();return false;}
	if(!isEmpty(document.OnlineForm.phofComp.value)){
	 if(trim(document.OnlineForm.phofComp)==0){alert("Please Enter Company\'s Phone "); document.OnlineForm.phofComp.focus(); return false;}
	}
	 if (!isEmpty(document.OnlineForm.emailofComp.value))
	{  if(!checkmailid(document.OnlineForm.emailofComp.value)){
	alert("Please Enter Valid Email Id "); document.OnlineForm.emailofComp.focus();return false;}
	}
	break;
	case 'STU':
	if (isEmpty(document.OnlineForm.nameofInt.value)){alert("Please Enter Institute\'s Name  "); document.OnlineForm.nameofInt.focus();return false;}
	if(!isEmpty(document.OnlineForm.nameofInt.value)){
	 if(trim(document.OnlineForm.nameofInt)==0){alert("Please Enter Institute\'s Name "); document.OnlineForm.nameofInt.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.addofInt.value)){alert("Please Enter Institute\'s Address  "); document.OnlineForm.addofInt.focus();return false;}
	if(!isEmpty(document.OnlineForm.addofInt.value)){
	 if(trim(document.OnlineForm.addofInt)==0){alert("Please Enter Institute\'s Address "); document.OnlineForm.addofInt.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.phofInt.value)){alert("Please Enter Institute\'s Phone  "); document.OnlineForm.phofInt.focus();return false;}
	if(!isEmpty(document.OnlineForm.phofInt.value)){
	 if(trim(document.OnlineForm.phofInt)==0){alert("Please Enter Institute\'s Phone "); document.OnlineForm.phofInt.focus(); return false;}
	}
	if (!isEmpty(document.OnlineForm.emailofInt.value))
	{  if(!checkmailid(document.OnlineForm.emailofInt.value)){
	alert("Please Enter Valid Email Id "); document.OnlineForm.emailofInt.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.course.value)){alert("Please Enter Course applied for  "); document.OnlineForm.course.focus();return false;}
	if(!isEmpty(document.OnlineForm.course.value)){
	 if(trim(document.OnlineForm.course)==0){alert("Please Enter Course applied for"); document.OnlineForm.course.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.durofCourse.value)){alert("Please Enter Duration of Course applied for  "); document.OnlineForm.durofCourse.focus();return false;}
	if(!isEmpty(document.OnlineForm.durofCourse.value)){
	 if(trim(document.OnlineForm.durofCourse)==0){alert("Please Enter Duration of Course applied for"); document.OnlineForm.durofCourse.focus(); return false;}
	}
	 
	break;
	
	case 'RES':
	if (isEmpty(document.OnlineForm.nameofIntRea.value)){alert("Please Enter Institute\'s Name  "); document.OnlineForm.nameofIntRea.focus();return false;}
	if(!isEmpty(document.OnlineForm.nameofIntRea.value)){
	 if(trim(document.OnlineForm.nameofIntRea)==0){alert("Please Enter Institute\'s Name "); document.OnlineForm.nameofIntRea.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.addofIntRea.value)){alert("Please Enter Institute\'s Address  "); document.OnlineForm.addofIntRea.focus();return false;}
	if(!isEmpty(document.OnlineForm.addofIntRea.value)){
	 if(trim(document.OnlineForm.addofIntRea)==0){alert("Please Enter Institute\'s Address "); document.OnlineForm.addofIntRea.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.phofIntRea.value)){alert("Please Enter Institute\'s Phone  "); document.OnlineForm.phofIntRea.focus();return false;}
	if(!isEmpty(document.OnlineForm.phofIntRea.value)){
	 if(trim(document.OnlineForm.phofIntRea)==0){alert("Please Enter Institute\'s Phone "); document.OnlineForm.phofIntRea.focus(); return false;}
	}
	if (!isEmpty(document.OnlineForm.emailofIntRea.value))
	{  if(!checkmailid(document.OnlineForm.emailofIntRea.value)){
	alert("Please Enter Valid Email Id "); document.OnlineForm.emailofIntRea.focus();return false;}
	}
	
	if (isEmpty(document.OnlineForm.durofRea.value)){alert("Please Enter Duration of Research/Training  "); document.OnlineForm.durofRea.focus();return false;}
	if(!isEmpty(document.OnlineForm.durofRea.value)){
	 if(trim(document.OnlineForm.durofRea)==0){alert("Please Enter Duration of Research/Training"); document.OnlineForm.durofRea.focus(); return false;}
	}
	 
	if (isEmpty(document.OnlineForm.subofRea.value)){alert("Please Enter Subject of Research/Training  "); document.OnlineForm.subofRea.focus();return false;}
	if(!isEmpty(document.OnlineForm.subofRea.value)){
	 if(trim(document.OnlineForm.subofRea)==0){alert("Please Enter Subject of Research/Training"); document.OnlineForm.subofRea.focus(); return false;}
	}
	break;
	
	case 'TRA':
	if(!(document.OnlineForm.chkboxbefInd.checked)){
	if(!(document.OnlineForm.chkboxaftInd.checked))
	{alert("Please Enter details of either country visited before India or after India "); document.OnlineForm.chkboxbefInd.focus(); return false;}
	else{
	if(isEmpty(document.OnlineForm.aftCntryName.value)){alert("Please Enter Country\'s name visited after India ");document.OnlineForm.aftCntryName.focus();return false;}
	if(!isEmpty(document.OnlineForm.aftCntryName.value)){
	 if(trim(document.OnlineForm.aftCntryName)==0){alert("Please Enter Country\'s name visited after India"); document.OnlineForm.aftCntryName.focus(); return false;}
	}
	}
	}
	else{
	if(isEmpty(document.OnlineForm.befCntryName.value)){alert("Please Enter Country\'s name visited before India ");document.OnlineForm.befCntryName.focus(); return false;}
	if(!isEmpty(document.OnlineForm.befCntryName.value)){
	 if(trim(document.OnlineForm.befCntryName)==0){alert("Please Enter Country\'s name visited before India"); document.OnlineForm.befCntryName.focus(); return false;}
	}
	}
	break;
	case 'EMP':
	if (isEmpty(document.OnlineForm.profQual.value)){alert("Please Enter Professional Qualification  "); document.OnlineForm.profQual.focus();return false;}
	if(!isEmpty(document.OnlineForm.profQual.value)){
	 if(trim(document.OnlineForm.profQual)==0){alert("Please Enter Professional Qualification"); document.OnlineForm.profQual.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.compName.value)){alert("Please Enter Company\'s Name  "); document.OnlineForm.compName.focus();return false;}
	if(!isEmpty(document.OnlineForm.compName.value)){
	 if(trim(document.OnlineForm.compName)==0){alert("Please Enter Company\'s Name"); document.OnlineForm.compName.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.compAdd.value)){alert("Please Enter Company\'s Address  "); document.OnlineForm.compAdd.focus();return false;}
	if(!isEmpty(document.OnlineForm.compAdd.value)){
	 if(trim(document.OnlineForm.compAdd)==0){alert("Please Enter Company\'s Address  "); document.OnlineForm.compAdd.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.desgInComp.value)){alert("Please Enter Designation in Company  "); document.OnlineForm.desgInComp.focus();return false;}
	if(!isEmpty(document.OnlineForm.desgInComp.value)){
	 if(trim(document.OnlineForm.desgInComp)==0){alert("Please Enter Designation in Company"); document.OnlineForm.desgInComp.focus(); return false;}
	}
	break;
	
	case 'ATT':
	if (isEmpty(document.OnlineForm.patientname.value)){alert("Please Enter Patient\'s Name  "); document.OnlineForm.patientname.focus();return false;}
	if(!isEmpty(document.OnlineForm.patientname.value)){
	 if(trim(document.OnlineForm.patientname)==0){alert("Please Enter Patient\'s Name "); document.OnlineForm.patientname.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.patientpassno.value)){alert("Please Enter Patient\'s Passport No.  "); document.OnlineForm.patientpassno.focus();return false;}
	if(!isEmpty(document.OnlineForm.patientpassno.value)){
	 if(trim(document.OnlineForm.patientpassno)==0){alert("Patient\'s Passport No."); document.OnlineForm.patientpassno.focus(); return false;}
	}
	
	break;
	
	case 'MED':
	if (isEmpty(document.OnlineForm.hsptNameMsn.value)){alert("Please Enter Hospital\'s name in Mission  "); document.OnlineForm.hsptNameMsn.focus();return false;}
	if(!isEmpty(document.OnlineForm.hsptNameMsn.value)){
	 if(trim(document.OnlineForm.hsptNameMsn)==0){alert("Please Enter Hospital\'s name in Mission "); document.OnlineForm.hsptNameMsn.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.hsptNameInd.value)){alert("Please Enter Hospital\'s name in India "); document.OnlineForm.hsptNameInd.focus();return false;}
	if(!isEmpty(document.OnlineForm.hsptNameInd.value)){
	 if(trim(document.OnlineForm.hsptNameInd)==0){alert("PPlease Enter Hospital\'s name in India "); document.OnlineForm.hsptNameInd.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.hsptAddMsn.value)){alert("Please Enter Hospital\'s Address in Mission  "); document.OnlineForm.hsptAddMsn.focus();return false;}
	if(!isEmpty(document.OnlineForm.hsptAddMsn.value)){
	 if(trim(document.OnlineForm.hsptAddMsn)==0){alert("Please Enter Hospital\'s Address in Mission"); document.OnlineForm.hsptAddMsn.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.hsptAddInd.value)){alert("Please Enter Hospital\'s Address in India "); document.OnlineForm.hsptAddInd.focus();return false;}
	if(!isEmpty(document.OnlineForm.hsptAddInd.value)){
	 if(trim(document.OnlineForm.hsptAddInd)==0){alert("Please Enter Hospital\'s Address in India"); document.OnlineForm.hsptAddInd.focus(); return false;}
	}
	if (!isEmpty(document.OnlineForm.emailMsn.value))
	{  if(!checkmailid(document.OnlineForm.emailMsn.value)){
	alert("Please Enter Valid Email Id "); document.OnlineForm.emailMsn.focus();return false;}
	}
	if (!isEmpty(document.OnlineForm.emailInd.value))
	{  if(!checkmailid(document.OnlineForm.emailInd.value)){
	alert("Please Enter Valid Email Id "); document.OnlineForm.emailInd.focus();return false;}
	}
	break;
	}}
	if (isEmpty(document.OnlineForm.duration.value)){alert("Please Enter Visit Duration  "); document.OnlineForm.duration.focus();return false;}
	if (!isEmpty(document.OnlineForm.duration.value)){ 
	if(document.OnlineForm.duration.value=='0' || document.OnlineForm.duration.value=='00' || document.OnlineForm.duration.value=='000'){alert("Please Enter Visit Duration  "); document.OnlineForm.duration.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.visa_entry_id.value)){alert("Please Enter Visit Entries  "); document.OnlineForm.visa_entry_id.focus();return false;}
	if (isEmpty(document.OnlineForm.purpose.value)){alert("Please Enter Visit Purpose  "); document.OnlineForm.purpose.focus();return false;}
	
	
	if (isEmpty(document.OnlineForm.journeydate.value)){alert("Please Enter Journey Date  "); document.OnlineForm.journeydate.focus();return false;}
	if (!isEmpty(document.OnlineForm.journeydate.value)){
	var jod= document.OnlineForm.journeydate.value; 
	var jodday = jod.substring(0, 2); 
	if(jodday.length==1){jodday=0+jodday;} 
	var jodmonth = jod.substring(3, 5); 
	if(jodmonth.length==1){jodmonth=0+jodmonth;} 
	var joddt=jodmonth+"/"+jodday+"/"+jod.substring(6); 
	
	var jodedate=jodday+"/"+jodmonth+"/" +jod.substring(6); 
	
	if(validateUSDate(joddt)){
	if(compareDates(jodedate,document.OnlineForm.Date.value)==-1) 
	{ 
	alert("Date of Journey Cannot be Less Than Today  Date"); 
	document.OnlineForm.journeydate.focus();
	return false; 
	} 
	else if(compareDates(jodedate,document.OnlineForm.Date.value)==0)
	{
	alert("Date of Journey Cannot be Today\'s Date"); 
	document.OnlineForm.journeydate.focus();
	return false; 
	}
	}else{alert("Please Enter Valid Journey date  ");document.OnlineForm.journeydate.focus();return false;}
	}
	if (isEmpty(document.OnlineForm.entry_point.value)){alert("Please Enter Entry Point  "); document.OnlineForm.entry_point.focus();return false;}
	
	if(document.OnlineForm.oldvisa[0].checked){
	if (isEmpty(document.OnlineForm.prv_visit_add1.value)){alert("Please Enter Visit Address  "); document.OnlineForm.prv_visit_add1.focus(); return false;}
	
	if (isEmpty(document.OnlineForm.visited_city.value)){alert("Please Enter Visited City Information  "); document.OnlineForm.visited_city.focus(); return false;}
	if (!isEmpty(document.OnlineForm.visited_city.value)){if(chkLength(document.OnlineForm.visited_city.value)){
	alert("Please Enter Visited City Information in 75 characters only "); document.OnlineForm.visited_city.value=""; document.OnlineForm.visited_city.focus(); return false;
	}
	}
	if (isEmpty(document.OnlineForm.old_visa_no.value)){alert("Please Enter Earlier Visa No  "); document.OnlineForm.old_visa_no.focus(); return false;}
	if (isEmpty(document.OnlineForm.old_visa_type_id.value)){alert("Please Enter Earlier Visa Type "); document.OnlineForm.old_visa_type_id.focus(); return false;}
	if (isEmpty(document.OnlineForm.oldvisaissueplace.value)){alert("Please Enter Earlier Visa Issue Place "); document.OnlineForm.oldvisaissueplace.focus(); return false;}
	if (isEmpty(document.OnlineForm.oldvisaissuedate.value)){alert("Please Enter Earlier Visa Issue Date "); document.OnlineForm.oldvisaissuedate.focus(); return false;}
	
	if (!isEmpty(document.OnlineForm.oldvisaissuedate.value)){
	var vd2= document.OnlineForm.oldvisaissuedate.value; 
	var vd2day = vd2.substring(0, 2); 
	if(vd2day.length==1){vd2day=0+vd2day;} 
	var vd2month = vd2.substring(3, 5); 
	if(vd2month.length==1){vd2month=0+vd2month;} 
	var vd2dt=vd2month+"/"+vd2day+"/"+vd2.substring(6); 
	
	var vd2edate=vd2day+"/"+vd2month+"/" +vd2.substring(6); 
	
	if(validateUSDate(vd2dt)){
	if(compareDates(document.OnlineForm.Date.value,vd2edate)==-1) 
	{ 
	alert("Date of Issue of Old Visa cannnot be greater than present Date"); 
	document.OnlineForm.oldvisaissuedate.focus();
	return false; 
	} 
	}else{alert("Please Enter Valid old Visa Issue\'s Date  ");document.OnlineForm.oldvisaissuedate.focus();return false;}
	}
	}
	
	if (!isEmpty(document.OnlineForm.country_visited.value)){if(chkLength(document.OnlineForm.country_visited.value)){
	alert("Please Enter Country Visited Information in 75 characters only ");document.OnlineForm.country_visited.value="";  document.OnlineForm.country_visited.focus(); return false;
	}
	}
	if (isEmpty(document.OnlineForm.nameofsponsor_ind.value)){alert("Please Enter Referer\'s Name in India"); document.OnlineForm.nameofsponsor_ind.focus(); return false;}
	if(!isEmpty(document.OnlineForm.nameofsponsor_ind.value)){
	 if(trim(document.OnlineForm.nameofsponsor_ind)==0){alert("Please Enter Referer\'s Name in India"); document.OnlineForm.nameofsponsor_ind.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.add1ofsponsor_ind.value)){alert("Please Enter Referer\'s Address in India  "); document.OnlineForm.add1ofsponsor_ind.focus(); return false;}
	if(!isEmpty(document.OnlineForm.add1ofsponsor_ind.value)){
	 if(trim(document.OnlineForm.add1ofsponsor_ind)==0){alert("Please Enter Referer\'s Address in India"); document.OnlineForm.add1ofsponsor_ind.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.phoneofsponsor_ind.value)){alert("Please Enter Referer\'s Phone in India  "); document.OnlineForm.phoneofsponsor_ind.focus(); return false;}
	if(!isEmpty(document.OnlineForm.phoneofsponsor_ind.value)){
	 if(trim(document.OnlineForm.phoneofsponsor_ind)==0){alert("Please Enter Referer\'s Phone in India"); document.OnlineForm.phoneofsponsor_ind.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.nameofsponsor_msn.value)){alert("Please Enter Referer\'s Name in Mission "); document.OnlineForm.nameofsponsor_msn.focus(); return false;}
	if(!isEmpty(document.OnlineForm.nameofsponsor_msn.value)){
	 if(trim(document.OnlineForm.nameofsponsor_msn)==0){alert("Please Enter Referer\'s Name in Mission"); document.OnlineForm.nameofsponsor_msn.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.add1ofsponsor_msn.value)){alert("Please Enter Referer\'s Address in Mission  "); document.OnlineForm.add1ofsponsor_msn.focus(); return false;}
	if(!isEmpty(document.OnlineForm.add1ofsponsor_msn.value)){
	 if(trim(document.OnlineForm.add1ofsponsor_msn)==0){alert("Please Enter Referer\'s Address in Mission"); document.OnlineForm.add1ofsponsor_msn.focus(); return false;}
	}
	if (isEmpty(document.OnlineForm.phoneofsponsor_msn.value)){alert("Please Enter Referer\'s Phone in Mission  "); document.OnlineForm.phoneofsponsor_msn.focus(); return false;}
	if(!isEmpty(document.OnlineForm.phoneofsponsor_msn.value)){
	 if(trim(document.OnlineForm.phoneofsponsor_msn)==0){alert("Please Enter Referer\'s Phone in Mission"); document.OnlineForm.phoneofsponsor_msn.focus(); return false;}
	}
	if(document.OnlineForm.nationality.value=='PAK' || document.OnlineForm.nationality.value=='BGD'){
	document.OnlineForm.exit_point.value=document.OnlineForm.exit_pointxx.value;}
	return true;
	
}

function verifyBgd()
{	
	if (isEmpty(document.OnlineForm.place_of_stay1.value)){alert("Please Enter Atleast one Place of Stay  "); document.OnlineForm.place_of_stay1.focus(); return false;}
	if (isEmpty(document.OnlineForm.pos_address1.value)){alert("Please Enter Place of Stay\'s Address  "); document.OnlineForm.pos_address1.focus(); return false;}
	if (isEmpty(document.OnlineForm.pos_state_id1.value)){alert("Please Enter Place of Stay\'s State  "); document.OnlineForm.pos_state_id1.focus(); return false;}
	if (isEmpty(document.OnlineForm.DIST1.value)){alert("Please Enter Place of stay\'s District  "); document.OnlineForm.DIST1.focus(); return false;}
	if (isEmpty(document.OnlineForm.pos_phone1.value)){alert("Please Enter Place of stay\'s Phone No.  "); document.OnlineForm.pos_phone1.focus(); return false;}
	
	for(var i=2;i<=8;i++){
	if (document.getElementById("place_of_stay"+i).value!='' || document.getElementById("pos_address"+i).value!='' || document.getElementById("pos_state_id"+i).value!='' 
	|| document.getElementById("pos_phone"+i).value!='' || document.getElementById("email"+i).value!=''){
	if (isEmpty(document.getElementById("place_of_stay"+i).value)){alert("Please Enter Place of Stay  "); document.getElementById("place_of_stay"+i).focus(); return false;}
	if (isEmpty(document.getElementById("pos_address"+i).value)){alert("Please Enter Place of Stay\'s Address  "); document.getElementById("pos_address"+i).focus(); return false;}
	if (isEmpty(document.getElementById("pos_state_id"+i).value)){alert("Please Enter Place of Stay\'s State  "); document.getElementById("pos_state_id"+i).focus(); return false;}
	if(i==2){
	if (document.OnlineForm.DIST2!=null && isEmpty(document.OnlineForm.DIST2.value)){alert("Please Enter Place of stay\'s District  "); 
	document.OnlineForm.DIST2.focus();
	return false;}
	}
	if(i==3){
	if (document.OnlineForm.DIST3!=null && isEmpty(document.OnlineForm.DIST3.value)){alert("Please Enter Place of stay\'s District  "); 
	document.OnlineForm.DIST3.focus();
	return false;}
	}
	if(i==4){
	if (document.OnlineForm.DIST4!=null && isEmpty(document.OnlineForm.DIST4.value)){alert("Please Enter Place of stay\'s District  "); 
	document.OnlineForm.DIST4.focus();
	return false;}
	}
	
	if (isEmpty(document.getElementById("pos_phone"+i).value)){alert("Please Enter Place of Stay\'s Phone No.  "); document.getElementById("pos_phone"+i).focus(); return false;}
	}
	}
	 if (!isEmpty(document.OnlineForm.email1.value)){ 
	  if(!checkmailid(document.OnlineForm.email1.value)){alert("Please Enter Valid Email Id "); document.OnlineForm.email1.focus();return false;}
	}
	
	if (!isEmpty(document.OnlineForm.email2.value)){
	if(!checkmailid(document.OnlineForm.email2.value)){alert("Please Enter Valid Email Id "); document.OnlineForm.email2.focus();return false;}
	}
	
	if (!isEmpty(document.OnlineForm.email3.value)){
	  if(!checkmailid(document.OnlineForm.email3.value)){alert("Please Enter Valid Email Id "); document.OnlineForm.email3.focus();return false;}
	}
	
	if (!isEmpty(document.OnlineForm.email4.value)){
	if(!checkmailid(document.OnlineForm.email4.value)){alert("Please Enter Valid Email Id "); document.OnlineForm.email4.focus();return false;}
	}	
}
	
function isValidStartTime(str)
{	
	if(str.length>4)
	{
		if(((str.charCodeAt(0)==48) || (str.charCodeAt(0)==49))
		&&((str.charCodeAt(1)>47) && (str.charCodeAt(1) <58  ))
		&&((str.charCodeAt(2)==46))
		&&((str.charCodeAt(3)>47)||(str.charCodeAt(3)<54)))
		{
			return true;
		}
	}
	else
	{	
		return false;
	}	
}

function isValidEndTime(str)
{
	if(str.length>4)
	{
		if((str.charCodeAt(0)==49)
		&&((str.charCodeAt(1)>50)||(str.charCodeAt(1) <57))
		&&(str.charCodeAt(2)==46)
		&&((str.charCodeAt(3)>47)||(str.charCodeAt(3)<54)))
		{
			return true;
		}
	}
	else
	{	
		return false;
	}
}

function isNumeric(str)      //for non-numeric fields
{
	var FlagS=0, FlagN=0;
	var str1=new Array();
	
	for(var i=0;i<str.length;i++) //convert string to a char array
	{
		str1[i]=str.charAt(i);
	}	
	for(i=0;i<str1.length;i++)   //check for digits
	{
		if(str1[i]>='0'&&str1[i]<='9' ) 
		{
			FlagN=1;
		}
	}
	if(FlagS==1||FlagN==1) 		//give a final decision
	{ 
		FlagS=FlagN=0;
		return true;
	}
}

function chnprevnat(check)
{
	if(check=='By Birth')
	{
		document.OnlineForm.prev_nationality.value='';
		document.OnlineForm.prev_nationality.disabled=true;
	}
	else
	{
		document.OnlineForm.prev_nationality.disabled=false;
	}
}

function enableOccup(check)
{
	if(check!=null)
	{
		var chk=check.toUpperCase();		
		var op = document.getElementById("Occup_det");
		if(chk.indexOf('HOUSE WIFE')!=-1 || chk.indexOf('MINOR')!=-1 )
		{		
			op.style.display = '';
		}
		else
		{
			op.style.display = 'none';
		}
	}
}


function myDate(str1)
{ 	  
	var str=null;
	str=str1.value;
	if ( str.substr(2,1) != "/" || str.substr(5,1) != "/" )
	{
		clr1(str1);
		return false;	
	}
	if (str.length == 10 && Math.round(str.substr(3,2)) > 0 && Math.round(str.substr(3,2)) <= 12 && Math.round(str.substr(0,2)) && Math.round(str.substr(6,4)) )
	{
		if (Math.round(str.substr(3,2)) == 1 || Math.round(str.substr(3,2)) == 3 || Math.round(str.substr(3,2)) == 5 || Math.round(str.substr(3,2)) == 7 || Math.round(str.substr(3,2)) == 8 || Math.round(str.substr(3,2)) == 10 || Math.round(str.substr(3,2)) == 12 ) 
		if(Math.round(str.substr(0,2)) <= 31 && Math.round(str.substr(0,2)) > 0 )
			return (true);
		else
		{
			clr1(str1);
			return (false);
		}
	}
	else
	{
		clr1(str1);
		return (false);
	}
	if (str.length == 10 && Math.round(str.substr(3,2)) > 0 && Math.round(str.substr(3,2)) <= 12 && Math.round(str.substr(0,2)) && Math.round(str.substr(6,4)) )
	{
		if (Math.round(str.substr(3,2)) == 4 || Math.round(str.substr(3,2)) == 6 || Math.round(str.substr(3,2)) == 9 || Math.round(str.substr(3,2)) == 11) 
		if(Math.round(str.substr(0,2)) <= 30 && Math.round(str.substr(0,2)) > 0 )
			return (true);
		else
		{
			clr1(str1);
			return (false);
		}
	}
	else
	{
		clr1(str1);
		return (false);
	}	
	if (str.length == 10 && Math.round(str.substr(3,2)) > 0 && Math.round(str.substr(3,2)) <= 12 && Math.round(str.substr(0,2)) && Math.round(str.substr(6,4)) )
	{	
		if (Math.round(str.substr(3,2)) == 2)
		{
			if ((Math.round(str.substr(6,4)) % 4 == 0 && Math.round(str.substr(6,4)) % 100 != 0) || Math.round(str.substr(6,4))% 400 == 0)
			{
				if(Math.round(str.substr(0,2)) <= 29 && Math.round(str.substr(0,2)) > 0 )
					return (true);
			}
			else if(Math.round(str.substr(0,2)) <= 28 && Math.round(str.substr(0,2)) > 0 )
				return (true);
			else
			{
				clr1(str1);
				return (false);
			}
		}
		else
			return true;
	}
	else
	{
		clr1(str1);
		return (false);
	}
	
}

function clr1(str1)
{
	if(str1.title=='emailID')
	{
		alert(str1.value +": is Not valid emailID. please enter correct emailID");
	}
	else
	{
		alert(str1.title +": is Not valid Date. please enter correct date");
	}
	str1.value ="";
	if(str1.title=='Date of birth')
	{
		document.applicationform.birthdate_date.value="";
		document.applicationform.birthdate_month.value="";
		document.applicationform.birthdate_year.value="";
		document.applicationform.birthdate_date.focus();
	}
	else
		str1.focus();
		return true;
}

function clr2(str1,str2)
{
	if(str2.name=="arrdate" || str2.name=="vexpdate")
	{
		alert(str2.title +" must be less than or equal to "+str1.title+". Please enter correct date");
		str2.focus();
	}
	else
	{
		alert(str1.title +" must be greater than or equal to "+ str2.title +". Please enter correct date");
		str1.focus();
	}
	return true;
}

function emailvalid(email)
{	
	emailval=email.value;
	
	var esize=emailval.length;
	var ecount=0;
	var ecount1=0;
	var ecount2=0;
	for(var i=0;i<esize;i++)
	{
		if((emailval.charAt(i))=='@')
		{
			ecount=i;		
			ecount2=ecount2+1;
		}
		else if((emailval.charAt(i))=='.' && i<(esize-1))
		{
			ecount1=i;
		}
	}
	
	if(ecount1>=1 && ecount2==1 && ecount1>ecount)
	{	
		return true;
	}
	else
	{
		clr1(email);
		return false;
	}
}


