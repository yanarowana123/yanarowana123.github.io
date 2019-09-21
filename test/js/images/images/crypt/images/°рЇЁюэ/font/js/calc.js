function calcthis(a)
{ 
var perc = document.getElementById("percent").value;

if (a==1) { 
if (perc == "perc1") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 1 day";};
if (perc == "perc2") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 3 days";};
if (perc == "perc3") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 7 days";};
if (perc == "perc4") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 15 days";};
if (perc == "perc5") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 30 days";};
if (perc == "perc6") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 44 days";};
if (perc == "perc7") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 60 days";};
if (perc == "perc8") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 5 days";};

}













var planperc=new Array(0,0,0,0,0,0,0,0,0);
var depo = document.getElementById("deposit").value;

if (perc == "perc1") {planperc=Array(1 , 1 , 10 , 1 , 1 , 1); min=30; max=80000000;};
if (perc == "perc2") {planperc=Array(110 , 113 , 134 , 156 , 185 , 200); min=10; max=800000;};
if (perc == "perc3") {planperc=Array(125 , 132 , 190 , 248 , 330 , 370); min=10; max=800000;};
if (perc == "perc4") {planperc=Array(155 , 170 , 302 , 434 , 600 , 700); min=10; max=800000;};
if (perc == "perc5") {planperc=Array(220 , 250 , 620 , 910 , 1270 , 1500); min=10; max=800000;};
if (perc == "perc6") {planperc=Array(3000 , 3000 , 3000 , 3000 , 3000 , 3000); min=200; max=800000;};
if (perc == "perc7") {planperc=Array(5000 , 5000 , 5000 , 5000 , 5000 , 5000); min=500; max=800000;};
if (perc == "perc8") {planperc=Array(1000 , 1000 , 1000 , 1000 , 1000 , 1000); min=10000; max=800000;};

if (depo < min)
  {
	
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $"+min);	
  } 
else
if (depo > max)
  {
	;
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Maximal deposit is $"+max);	
  } 
  
else
  {

	  
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  
	
	if ( depo >=1000)
	  {
		
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
	  
		if ( depo >= 5000)
		  {
			
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
	  
			if ( depo >= 10000)
			  {
				
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
	  
				if ( depo >= 20000)
				  {
					
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
	  
				  }

if ( depo >= 50000)
				  {
					
					document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
	  
				  }
			  }
		  }
	  }
  }

}