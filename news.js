var i=0,y=0;
function startTime() {
  var today = new Date();
  var minute = today.getMinutes();
  var second = today.getSeconds();
var month1=today.getMonth();
  minute = checkTime(minute);
  second = checkTime(second);
  var manth1;
  switch (today.getMonth()+1){
  case 1:
  month1 = "January";  
  break;
  case 2:
  month1="February";
  break;
  case 3:
  month1="March";
  break;
  case 4:
  month1="April";
  break;
  case 5 :
  month1=" May";
  break;
  case 6:
  month1=" June";
  break;
  case 7:
  month1="July ";
  break;
  case 8:
  month1=" August";
  break;
  case 9:
  month1=" September";
  break; 
  case 10:
  month1="October";
  break; 
   case 11:
  month1="November";
  break;
   case 12:
  month1="December";
  break;
}
if (today.getHours()<=12)
  document.getElementById("Date1").innerHTML = today.getHours() + ":" + minute+"AM "  ;
     else
	document.getElementById("Date1").innerHTML = (today.getHours()-12) + ":" + minute+"PM "  ;	 
	 document.getElementById("Date2").innerHTML= (today.getDay()+13)+" "+month1+" "+ (1900+today.getYear()); 
  var t = setTimeout(function(){ startTime() }, 2000);

var numberNews=6;
var time1=9000;
//News 
			if(i== 0)
			{
			document.getElementById("NewsBreaking").innerHTML="TikTok rejects Microsoft buyout offer, Oracle sole remaining bidder";
			document.getElementById("NewsBreaking").href="http://www.google.com";
			setTimeout(Rename, time1);
		
             i=y+1;
             y=i
			}
			
			else if(i== 1){
			
		document.getElementById("NewsBreaking").innerHTML= "Egypt detects 153 new coronavirus cases, 21 deaths on Sunday";
			document.getElementById("NewsBreaking").href="http://www.google.com";
			 setTimeout(Rename, time1);
			 i=y+1;
              y=i
			 }
			else if(i== 2){
			
			document.getElementById("NewsBreaking").innerHTML= "Egypt allows online submission of judicial petitions via public prosecution's website";
				document.getElementById("NewsBreaking").href="http://www.google.com";
			setTimeout(Rename, time1);
			i=y+1;
             y=i

			}
			else if(i==3)
			{
			document.getElementById("NewsBreaking").innerHTML= "Mostafa Mohamed's header gives Zamalek narrow win over Entag";
				document.getElementById("NewsBreaking").href="http://www.google.com";
			setTimeout(Rename, time1);
			i=y+1;
               y=i;
			}
			else if(i== 4)
			{
			document.getElementById("NewsBreaking").innerHTML="US promised UAE it won’t back Israel annexation of West Bank before 2024: Report";
				document.getElementById("NewsBreaking").href="http://www.google.com";
			setTimeout(Rename, time1);
			
			i=y+1;
             y=i;
}
			else if(i==5)
			
			{document.getElementById("NewsBreaking").innerHTML= "Sisi instructs gov't to increase productive agricultural lands in North Sinai, New Valley";
			document.getElementById("NewsBreaking").href="http://www.google.com";
		setTimeout(Rename, time1);
			i=0;y=0;
			}
		
}
function checkTime(i) {
  if (i < 10) 
  {
	  i = "0" + i
	  }; //as 6:02  i add 0 to 2
  return i;
}
function Rename(){}
function Vote1(){
	document.getElementById("vote1").style.cursor=" not-allowed";
	document.getElementById("result1").style.cursor="pointer";
}
function Result1(){
	if(document.getElementById("result1").style.cursor=="pointer")
	{
	var peopleYes=75;	
	var peopleNo=16;
var	people=75+16+1;
if(document.getElementById("Yes1").value==1)
{
	peopleYes=peopleYes+1;
}
else if(document.getElementById("No1").value==1) {
peopleNo=peopleNo+1;
}
document.getElementById("Yesvote1").value=100*(peopleYes/people);
document.getElementById("Yesvote1").innerHTML=document.getElementById("Yesvote1").value;
document.getElementById("Novote1").value=100*(peopleNo/people);

document.getElementById("Novote1").innerHTML=document.getElementById("Novote1").value;
	}	
}
function Vote2(){
	document.getElementById("vote2").style.cursor=" not-allowed";
	document.getElementById("result2").style.cursor="pointer";
}
function Result2(){
	if(document.getElementById("result2").style.cursor=="pointer")
	{
	var peopleYes=45;	
	var peopleNo=40;
var	people=peopleNo+peopleYes+1;
if(document.getElementById("Yes2").value==1)
{
	peopleYes=peopleYes+1;
}
else if(document.getElementById("No2").value==1) {
peopleNo=peopleNo+1;
}
document.getElementById("Yesvote2").value=100*(peopleYes/people);
document.getElementById("Yesvote2").innerHTML=document.getElementById("Yesvote2").value;
document.getElementById("Novote2").value=100*(peopleNo/people);

document.getElementById("Novote2").innerHTML=document.getElementById("Novote2").value;
	}	
}
