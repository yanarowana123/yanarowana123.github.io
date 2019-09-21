
function calcthis(a)
{ 
var perc = document.getElementById("percent").value;

if (a==1) { 
if (perc == "perc1") {document.getElementById('ress').innerHTML="Your <b>Profit</b> 5 day";};
if (perc == "perc2") {document.getElementById('ress').innerHTML="Your <b>Profit</b> 7 days";};
if (perc == "perc3") {document.getElementById('ress').innerHTML="Your <b>Profit</b> 10 days";};
if (perc == "perc4") {document.getElementById('ress').innerHTML="Your <b>Profit</b> 15 days";};
if (perc == "perc5") {document.getElementById('ress').innerHTML="Your <b>Profit</b> 25 days";};
if (perc == "perc5") {document.getElementById('ress').innerHTML="Your <b>Profit</b> 40 days";};

}













var planperc=new Array(0,0,0,0,0,0);
var depo = document.getElementById("deposit").value;


if (perc == "perc1") {planperc=Array(110 , 110 , 110);



if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >200)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $200")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc2") {planperc=Array(114.7 , 114.7 , 114.7);
if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >200)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $200")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};


if (perc == "perc3") {planperc=Array(122 , 122 , 122);
if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >200)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $200")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc4") {planperc=Array(135 , 135 , 135);
if ( depo <25)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $25")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >500)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 0000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 0000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $500")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc5") {planperc=Array(162.5 , 162.5 , 162.5);
if ( depo <25)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $25")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >500)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 0000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $500")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};


if (perc == "perc6") {planperc=Array(220 , 220 , 220);
if ( depo <50)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $50")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >2000)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 0000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $2000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};


};
 

