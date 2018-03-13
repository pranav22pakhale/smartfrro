	var isNav4 = false, isNav5 = false, isIE4 = false;
	var strSeperator = "/"; 
	var vDateType = 3; 	//Global value for type of date format
	//1 = mm/dd/yyyy
	//2 = yyyy/dd/mm  (Unable to do date check at this time)
	//3 = dd/mm/yyyy
	var vYearType = 4; //Set to 2 or 4 for number of digits in the year for Netscape
	var vYearLength = 2; // Set to 4 if you want to force the user to enter 4 digits for the year before validating.
	var err = 0; // Set the error code to a default of zero
	
	if(navigator.appName == "Netscape") 
	{
		if (navigator.appVersion < "5") 
		{
			isNav4 = true;
			isNav5 = false;
		}
		else
		if (navigator.appVersion > "4") 
		{
			isNav4 = false;
			isNav5 = true;
		}
	}
	else 
	{
		isIE4 = true;
	}
		
	function chkDOB() //onblur of dob
	{
		
		var flag=true;
		var date_of_birth=document.applicationform.date_of_birth.value;
		
		if(document.applicationform.date_of_birth.value=="")
		{
			return false;
		}
		if(document.applicationform.dob_dateformat.value=="")
		{
			alert("Please choose date of birth format");
			document.applicationform.dob_dateformat.focus();
			document.applicationform.date_of_birth.value="";
			////document.applicationform.age.value="";
			return false;
		}
		if(document.applicationform.date_of_birth.value!="")
		{		 
			if(document.applicationform.dob_dateformat.value=="DY") //full date
			{
			 	var ab=DateFormat(document.applicationform.date_of_birth,document.applicationform.date_of_birth.value,true,'3');
			 	if(!ab)
			 	{
			 		flag=false;
			 		return false;			
			 	}			
			 	if(!dateFormat(document.applicationform.date_of_birth,document.applicationform))
			 	{
			 		flag=false;
			 		return false;
			 	}
			}
			else if(document.applicationform.dob_dateformat.value=="YY") //only year
			{			 
				var dobformatyear =document.applicationform.dob_dateformat.value;
				var dolenterlength=document.applicationform.date_of_birth.value.length;
				if(dolenterlength!=4)
				{
					alert("Enter year in YYYY format for DOB");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;
				}
				if (!isnumeric(document.applicationform.date_of_birth,'"Date of Birth"','applicationform'))
					return false;	
			}
			else if(document.applicationform.dob_dateformat.value=="MY") //month and year
			{			
				if(document.applicationform.date_of_birth.value.length!=7)
				{
					alert("Enter month and year in MM/YYYY format for DOB");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;	
				}				
				if((document.applicationform.date_of_birth.value.substring(0,2)<1) || (document.applicationform.date_of_birth.value.substring(0,2)>12))
				{
					alert("Month can have a value only between 1 and 12");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;
				}
				if(document.applicationform.date_of_birth.value.indexOf("/")!=2)
				{
					alert("Enter date in MM/YYYY format");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;
				}
			}
			else if(document.applicationform.dob_dateformat.value=="AG") //only age
			{
				if (!isnumeric(document.applicationform.date_of_birth,'"Date of Birth"','applicationform'))
				{  
					alert("Please enter in XXX format");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;
				}		
				if(document.applicationform.date_of_birth.value.length>3)
				{
					alert("Age cannot be more than 3 characters long");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;
				}			
			}
			else if(document.applicationform.dob_dateformat.value=="RG") //only age range
			{
				//numeric check	
				var num = "0123456789-";
				for (var i = 0; i < document.applicationform.date_of_birth.value.length; i++) 
				{ 
					Char = document.applicationform.date_of_birth.value.charAt(i); 
					if (num.indexOf(Char) == -1) 
					{
						alert("Please enter only numbers and - in Date of Birth field.");
						document.applicationform.date_of_birth.focus();
						document.applicationform.date_of_birth.value="";
						////document.applicationform.age.value="";
						return false;
					}
				 }
				
				//- not exist,at 1st pos,at last pos.
				if(document.applicationform.date_of_birth.value.lastIndexOf("-")==-1 || document.applicationform.date_of_birth.value.indexOf("-")==0  ||document.applicationform.date_of_birth.value.lastIndexOf("-")==document.applicationform.date_of_birth.value.length-1 )
				{
					alert("Enter age range in XX-YY format.");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					////document.applicationform.age.value="";
					return false;
				}
				
				//for more than 1 hyphen
				var count=0;
				for(i=0;i<document.applicationform.date_of_birth.value.length;i++)
				{
					if(document.applicationform.date_of_birth.value.charAt(i)=='-')
						count++;
				}
				
				if(count>1)
				{
					alert("Only one - is allowed. Enter age range in XX-YY format.");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					return false;
				}
				
				//first digit cannot be zero in age range
				if(document.applicationform.date_of_birth.value.charAt(0)==0 ||  document.applicationform.date_of_birth.value.charAt(document.applicationform.date_of_birth.value.indexOf("-")+1)==0)
				{
					 alert("First digit of age cannot be 0.");
					 document.applicationform.date_of_birth.focus();
					 document.applicationform.date_of_birth.value="";
					 //document.applicationform.age.value="";
					 return false;
				}
				
				//age range always +ve,check for -ve or equal				
				if(parseInt(document.applicationform.date_of_birth.value.substring(0,document.applicationform.date_of_birth.value.indexOf("-")))>=parseInt(document.applicationform.date_of_birth.value.substring(document.applicationform.date_of_birth.value.indexOf("-")+1,document.applicationform.date_of_birth.value.length)))
				{
					alert("Enter a positive range.Enter age range in XX-YY format.");
					document.applicationform.date_of_birth.focus();
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					return false;
				}
			}		
		}
		
		//even if dob field is empty
		if(getRealDOB()==false)
		{
			document.applicationform.date_of_birth.value="";	
			//document.applicationform.age.value="";
			return false;
		}		
		calcAge();		
	}	
	
	function DateFormat(vDateName, vDateValue, dateCheck, dateType)
	{		
		if(vDateValue.length==10)
		{		
			if(vDateValue.substring(6,10)<1900)
			{
				alert("Enter a logical value for year");
				//field.value="";
				vDateName.focus();
			  vDateName.value="";
			  //document.applicationform.age.value="";
				return false;
			}		
		}
		
		var num = "0123456789/";
		for (var i = 0; i < vDateValue.length; i++) 
		{ 
			Char = vDateValue.charAt(i); 
			if (num.indexOf(Char) == -1) 
			{
				alert("Please enter only numbers and / in Date field.");
				//vDateName.value="";
				vDateName.focus();
				document.applicationform.date_of_birth.value="";
				//document.applicationform.age.value="";
				return false;
			 }
		 }
		
		vDateType = dateType;
		var whichCode;
		var alphaCheck = " abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ/-";
		if (alphaCheck.indexOf(vDateValue) >= 1) 
		{
			vDateName.value = vDateName.value.substr(0, (vDateValue.length-1));
			return false;		
		}
		
		var strCheck = '47,48,49,50,51,52,53,54,55,56,57,58,59,95,96,97,98,99,100,101,102,103,104,105';
		if (isNav4) 
		{		
			if (((vDateValue.length < 6 && dateCheck) || (vDateValue.length == 7 && dateCheck)) && (vDateValue.length >=1)) 
			{			
				vDateName.value = "";
				vDateName.focus();
				return false;
			}
			else 
			{					
				// Reformat the date for validation and set date type to a 1
				if (vDateValue.length >= 8  && dateCheck) 
				{
					if (vDateType == 3) // ddmmyyyy
					{
						var mDay = vDateName.value.substr(0,2);
						var mMonth = vDateName.value.substr(2,2);
						var mYear = vDateName.value.substr(4,4)
						vDateName.value = mDay+strSeperator+mMonth+strSeperator+mYear;
					}
					//Create a temporary variable for storing the DateType and change
					
					//the DateType to a 1 for validation.
					var vDateTypeTemp = vDateType;
					vDateType = 1;
					var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
					if (!dateValid(vDateValueCheck)) 
					{
						alert("Invalid Date\nPlease Re-Enter");
						vDateType = vDateTypeTemp;
						//vDateName.value = "";
						vDateName.focus();
						//vDateName.select();
						document.applicationform.date_of_birth.value="";
						//document.applicationform.age.value="";
						return false;
					}
					vDateType = vDateTypeTemp;
					return true;
				}
				else
				{
					if (((vDateValue.length < 10 && dateCheck) || (vDateValue.length == 9 && dateCheck)) && (vDateValue.length >=1))
					{
						alert("Invalid Date\nPlease Re-Enter");
						//vDateName.value = "";
						vDateName.focus();
						document.applicationform.date_of_birth.value="";
						//document.applicationform.age.value="";
						//vDateName.select();
						return false;
					}
				}
			}
		}
		else 
		{
			// THIS IS THE ALERT BEING USED.
			// Non isNav Check
			if (((vDateValue.length < 10 && dateCheck) || (vDateValue.length == 9 && dateCheck)) && (vDateValue.length >=1))
			{
				alert("Invalid Date\nPlease Re-Enter");
				vDateName.focus();
				document.applicationform.date_of_birth.value="";
				//document.applicationform.age.value="";
				return false;
			}
			if (vDateValue.length >= 8 && dateCheck) 
			{
				if (vDateType == 3) // dd/mm/yyyy
				{
					var mDay = vDateName.value.substr(0,2);					
					var mMonth = vDateName.value.substr(3,2);					
					var mYear = vDateName.value.substr(6,4);	//yr entered by user					
				}
				
				var vDateTypeTemp = vDateType;
				vDateType = 1;
				var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
				if (mYear.length == 2 && vYearType == 4 && dateCheck)
				{
					var mToday = new Date();
					var checkYear = mToday.getFullYear()+1 ; 
					var mCheckYear = '20' + mYear;
					vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
					// Store the new value back to the field.  This function will not work with date type of 2 since the year is entered first.THIS ALERT IS ALSO BEING USED.
					if (vDateTypeTemp == 3) // dd/mm/yyyy
					vDateName.value = mDay+strSeperator+mMonth+strSeperator+mYear;					
				} 
				
				if (!dateValid(vDateValueCheck))
				{
					alert("Invalid Date\nPlease Re-Enter");
					vDateType = vDateTypeTemp;
					vDateName.focus();
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					return false;
				}
				vDateType = vDateTypeTemp;				
				return true;
			}
			else
			{
				if (vDateType == 3) 
				{
					if (vDateValue.length == 2) 
					{
						vDateName.value = vDateValue+strSeperator;
					}
					if (vDateValue.length == 5) 
					{
						vDateName.value = vDateValue+strSeperator;
					}
				}
				return true;
			}
		}
		
		if (vDateValue.length == 10&& dateCheck) 
		{
			if (!dateValid(vDateName)) 
			{
				alert("Invalid Date\nPlease Re-Enter");
				vDateName.focus();
				document.applicationform.date_of_birth.value="";
				//document.applicationform.age.value="";
				vDateName.select();
			}
		}
	}
	
	function isnumeric(field)
	{
	   var num = "0123456789-";
	   var flag=true;
	   var Char;
	   var val=field.value;
	   for (var i = 0; i < val.length && flag == true; i++) 
	   { 
	      Char = val.charAt(i); 
	      if (num.indexOf(Char) == -1) 
	      {
	         flag = false;
	      }
	   }
	   return flag;
	 }	
	
	function calcAge()
	{
		if(document.applicationform.dob_dateformat.value=="YY" )
		{
			var dobformatforage = document.applicationform.dob_dateformat.value;
			var dob=document.applicationform.date_of_birth.value;
			var age="";
			if(document.applicationform.date_of_birth.value!="")
			//age=parseInt(2010)-parseInt(dob);
			var serverdate =document.applicationform.servertodaydate.value;
			
			var dateee=serverdate.substring(0,2);
			var monthhh=serverdate.substring(3,5);
			var yearrr=serverdate.substring(6,10);			
			
			var aajj=new Date(yearrr,monthhh,dateee);			
			var yearNoww=aajj.getFullYear();
			age=yearNoww - parseInt(dob);
			
			//abm
			if(age>999)
			{
				alert("Invalid date of birth"); 
				document.applicationform.date_of_birth.value="";
				//document.applicationform.age.value="";
				document.applicationform.date_of_birth.focus();
				return false;
			}
			//end
				
			if(age<0)
				age = 0;				
			var calculatedAge=age;
		}
		else if(document.applicationform.dob_dateformat.value=="MY")
		{			
			//var todaydate=toDate();			
			//var dob=document.applicationform.date_of_birth.value.substring(3,7);
			var age="";			
			var dob='01/'+document.applicationform.date_of_birth.value;			
			
			if(document.applicationform.date_of_birth.value!="")
			{
				age=getAge(dob);
				if (age==undefined)
				{				
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					document.applicationform.date_of_birth.focus();
					return false;
				}
				
				//abm
				if(age>999)
				{
					alert("Invalid date of birth"); 
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					document.applicationform.date_of_birth.focus();
					return false;
				}
				//end
			}
		}
		else if(document.applicationform.dob_dateformat.value=="DY")
		{
			if(document.applicationform.date_of_birth.value!="")
			{
				var dob=document.applicationform.date_of_birth.value;
				//var age=parseInt(2010)-parseInt(dob);
				age=getAge(dob);
				
				//abm
				if(age>999)
				{
					alert("Invalid date of birth"); 
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					document.applicationform.date_of_birth.focus();
					return false;
				}
				//end
			}
			else
			{
				var age="";
			}
		}
		
		if(document.applicationform.dob_dateformat.value=="AG" || document.applicationform.dob_dateformat.value=="RG")
		{
			if(document.applicationform.date_of_birth.value!="")
			{			
				//var ageDiff=parseInt(document.applicationform.dt.value)-parseInt(2010);
				//var d = new Date();
				//var n = d.getFullYear();
				var serverdate =document.applicationform.servertodaydate.value;
				
				var dateee=serverdate.substring(0,2);
				var monthhh=serverdate.substring(3,5);
				var yearrr=serverdate.substring(6,10);
								
				var aajjj=new Date(yearrr,monthhh,dateee);
				var n=aajjj.getFullYear();
								
				var ageDiff=parseInt(document.applicationform.dt.value)-n;				
				var age=parseInt(document.applicationform.date_of_birth.value)-parseInt(ageDiff);
				
				//abm
				if(age>999)
				{
					alert("Invalid date of birth"); 
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					document.applicationform.date_of_birth.focus();
					return false;
				}
				//end
			}
			else
				var age="";
		}
		
		if(document.applicationform.dob_dateformat.value=="RG")
		{
			if(document.applicationform.date_of_birth.value!="")
			{
				age1=parseInt(document.applicationform.date_of_birth.value.substring(0,document.applicationform.date_of_birth.value.indexOf("-")))-parseInt(ageDiff);
				age2=parseInt(document.applicationform.date_of_birth.value.substring(document.applicationform.date_of_birth.value.indexOf("-")+1,document.applicationform.date_of_birth.value.length))-parseInt(ageDiff);
				var age=age1+"-"+age2;
				
				//abm
				if(age>999)
				{
					alert("Invalid date of birth"); 
					document.applicationform.date_of_birth.value="";
					//document.applicationform.age.value="";
					document.applicationform.date_of_birth.focus();
					return false;
				}
				//end
			}
			else
				var age="";
		}
		//document.applicationform.age.value=age;
	}
		
	//added by munishwar	
	function getAge(dateString) 
	{		
		var serverdate =document.applicationform.servertodaydate.value;
		//alert(serverdate);
		var datee=serverdate.substring(0,2);
		var monthh=serverdate.substring(3,5);
		var yearr=serverdate.substring(6,10);
		//alert(datee);
		//alert(monthh);
		//alert(yearr);		
		
		var aaj=new Date(yearr,monthh,datee);
		//var today = new Date(now.getYear(),now.getMonth(),now.getDate());
		
		var yearNow=aaj.getFullYear();
		var monthNow=aaj.getMonth();
		var dateNow=aaj.getDate();	
		
		if(parseInt(dateString.substring(6,10))<100)
		{
			alert("Invalid Year of Birth"); 
			return ;
		}
				
		var dob = new Date(dateString.substring(6,10), dateString.substring(3,5)-1, dateString.substring(0,2));
		var yearDob = dob.getFullYear();				
		var monthDob = dob.getMonth();
		var dateDob = dob.getDate();
		var age = {};
		var ageString = "";
		var yearString = "";
		var monthString = "";
		var dayString = "";
		//alert("yearNow"+yearNow);
		//alert("monthNow"+monthNow);
		//alert("datenow"+dateNow);
		//alert("yeardob"+yearDob);

		yearAge = yearNow - yearDob;			
 
		if (monthNow >= monthDob)
			var monthAge = monthNow - monthDob;
		else 
		{
			yearAge--;
			var monthAge = 12 + monthNow -monthDob;
		}
		if (dateNow >= dateDob)
			var dateAge = dateNow - dateDob;
		else 
		{
			monthAge--;
			var dateAge = 31 + dateNow - dateDob;
			if (monthAge < 0) 
			{
				monthAge = 11;
				yearAge--;
			}
		}

		age = {
				years: yearAge,
				months: monthAge,
				days: dateAge
		};

		if ( age.years > 1 ) yearString = " years";
		else yearString = " year";
		if ( age.months> 1 ) monthString = " months";
		else monthString = " month";
		if ( age.days > 1 ) dayString = " days";
		else dayString = " day";

		if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
			ageString = age.years + yearString + ", " + age.months + monthString + ", and " + age.days + dayString + " old.";
		else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
			ageString = "Only " + age.days + dayString + " old!";
		else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
			ageString = age.years + yearString + " old. Happy Birthday!!";
		else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
			ageString = age.years + yearString + " and " + age.months + monthString + " old.";
		else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
		    ageString = age.months + monthString + " and " + age.days + dayString + " old.";
		else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
			ageString = age.years + yearString + " and " + age.days + dayString + " old.";
		else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
			ageString = age.months + monthString + " old.";
		else ageString = "Oops! Could not calculate age!";
		//alert(age.years);
		return age.years;		  
	}	
	//end	
	
	function dateValid(objName)
	{
		var strDate;
		var strDateArray;
		var strDay;
		var strMonth;
		var strYear;
		var intday;
		var intMonth;
		var intYear;
		var booFound = false;
		var datefield = objName;
		var strSeparatorArray = new Array("-"," ","/",".");
		var intElementNr;
		var strMonthArray = new Array(12);
		strMonthArray[0] = "Jan";
		strMonthArray[1] = "Feb";
		strMonthArray[2] = "Mar";
		strMonthArray[3] = "Apr";
		strMonthArray[4] = "May";
		strMonthArray[5] = "Jun";
		strMonthArray[6] = "Jul";
		strMonthArray[7] = "Aug";
		strMonthArray[8] = "Sep";
		strMonthArray[9] = "Oct";
		strMonthArray[10] = "Nov";
		strMonthArray[11] = "Dec";
		strDate = objName;
		
		if (strDate.length < 1) 
		{
			return true;
		}
		for (intElementNr = 0; intElementNr < strSeparatorArray.length; intElementNr++) 
		{
			if (strDate.indexOf(strSeparatorArray[intElementNr]) != -1) 
			{
				strDateArray = strDate.split(strSeparatorArray[intElementNr]);
				if (strDateArray.length != 3)
				{
					err = 1;
					return false;
				}
				else 
				{
					strDay = strDateArray[0];
					strMonth = strDateArray[1];
					strYear = strDateArray[2];
				}
				booFound = true;			   
			}
		}
		
		if (booFound == false) 
		{
			if (strDate.length>5) 
			{
				strDay = strDate.substr(0, 2);
				strMonth = strDate.substr(2, 2);
				strYear = strDate.substr(4);
			}
		}
		
		//Adjustment for short years entered
		if (strYear.length == 2)
		{
			strYear = '20' + strYear;
		}
		strTemp = strDay;
		strDay = strMonth;
		strMonth = strTemp;
		intday = parseInt(strDay, 10);
		if (isNaN(intday)) 
		{
			//isNAN 
			err = 2;
			return false;
		}
		intMonth = parseInt(strMonth, 10);
		if (isNaN(intMonth))
		{
			for (var i = 0;i<12;i++) 
			{
				if (strMonth.toUpperCase() == strMonthArray[i].toUpperCase()) 
				{
					intMonth = i+1;
					strMonth = strMonthArray[i];
					i = 12;
				}
			}
			if (isNaN(intMonth)) 
			{
				err = 3;
				return false;
			}
		}
		
		intYear = parseInt(strYear, 10);
		if (isNaN(intYear))
		{
			err = 4;
			return false;
		}		
		if (intMonth>12 || intMonth<1) 
		{
			err = 5;
			return false;
		}
		if ((intMonth == 1 || intMonth == 3 || intMonth == 5 || intMonth == 7 || intMonth == 8 || intMonth == 10 || intMonth == 12) && (intday > 31 || intday < 1)) 
		{
			err = 6;
			return false;
		}
		if ((intMonth == 4 || intMonth == 6 || intMonth == 9 || intMonth == 11) && (intday > 30 || intday < 1)) 
		{
			err = 7;
			return false;
		}
		if (intMonth == 2)
		{
			if (intday < 1) 
			{
				err = 8;
				return false;
			}
			if (LeapYear(intYear) == true) 
			{
				if (intday > 29) 
				{
					err = 9;
					return false;
				}
			}
			else 
			{
				if (intday > 28) 
				{
					err = 10;
					return false;
				}
			}
		}
		return true;
	}
		
	function LeapYear(intYear)
	{
		if (intYear % 100 == 0) 
		{
			if (intYear % 400 == 0) { return true; }
		}
		else 
		{
			if ((intYear % 4) == 0) { return true; }
		}
		return false;
	}
	//end of date validation	
		
	function getRealDOB()
	{
		var raldobs;
		if(document.applicationform.dob_dateformat.value=="YY")
			raldobs="01/01/"+document.applicationform.date_of_birth.value;
		else
		if(document.applicationform.dob_dateformat.value=="MY")
			raldobs="01/"+document.applicationform.date_of_birth.value;
		else
		if(document.applicationform.dob_dateformat.value=="DY")
			raldobs=document.applicationform.date_of_birth.value;
		else
		if(document.applicationform.dob_dateformat.value=="AG")
		{
			var dob=parseInt(document.applicationform.dt.value)-parseInt(document.applicationform.date_of_birth.value)
			raldobs="01/01/"+dob;
			//document.applicationform.realDOB.value=null;
		}
		else
		if(document.applicationform.dob_dateformat.value=="RG")
		{
			var dob=parseInt(document.applicationform.dt.value)-parseInt(document.applicationform.date_of_birth.value.substring(0,document.applicationform.date_of_birth.value.indexOf("-")))
			//document.applicationform.realDOB.value="01/01/"+dob;
			document.applicationform.realDOB.value=null;
		}		
		if(DateChecksval(document.applicationform.sysdt,raldobs)==false)
		{
			//document.applicationform.realDOB.value="";
			return false;
		}
		document.applicationform.realDOB.value=raldobs;	
		document.applicationform.actualDOB.value=raldobs;		//abm	
		//alert("dob"+document.applicationform.actualDOB.value);
	}
		
	function DateChecksval(val,val2)
	{
		var val1=null;
		val1=val.value;
		var year=val1.substr(6,4);
		var day=val1.substr(0,2);
		var month=val1.substr(3,2);
		var syear=val2.substr(6,4);
		var sdate=val2.substr(0,2);
		var smonth=val2.substr(3,2);
		
		if(year<syear)
		{
			clr21();
			return false;
		}
		else if(year==syear)
		{
			if(month < smonth)
			{
				clr21();
				return false;
			}
			else if(month==smonth)
			{
				if(day <= sdate)
				{
					clr21();
					return false;
				}
				else if(day > sdate)
					return true;
			}
			return true;
		}
		return true;
	}
	
	function clr21()
	{
		alert("Date of Birth date must not be Greater than Current Date");
		document.applicationform.date_of_birth.focus();
		return true;
	}
	
	function dateFormat(field,form)
	{
		if(field.value!="")
		{
			if(field.value.indexOf("/")!=2 || field.value.lastIndexOf("/")!=5)
			{
				alert("Enter date in DD/MM/YYYY format");
				field.focus();
				document.applicationform.date_of_birth.value="";
				//document.applicationform.age.value="";
				return false;
			}
		}
		return true;
	}
	
	
