<html>

<head>

<title>Home| AR  </title>
<?php
	require 'indexPagePHP.php';
?>

<link rel="icon" href="imghome/download.jpg"/>
<link rel="stylesheet" type="text/css" href="Homecss.css"/>
<link rel="stylesheet" type="text/css" href="categories.css"/>
<link rel="stylesheet" type="text/css" href="SimilarArticle.css"/>
<script src="HomeJS.js"></script>

<meta name="description" content=""/>
<meta name="Author" content=""/>
 <meta name="Keyword" content="" />
</head>

<body class="colorbg" onload="startTime()" >
<div id="navbar">
<div class="navbar" style="background-color:#ddd; padding-left:25%;">

 
  <img src="imghome\clock.png"height="20px"width="20px" style="padding-top:15px;" />
  <p id="Date1" style="color:#333;font-size:13pt; padding-top:15px; padding-left:10px;"></p>
  <img src="imghome\calendar.png"style="padding-left:20px; padding-top:15px;" height="20px"width="20px"/>
<p id="Date2" style="color:#333;font-size:13pt; padding-top:15px;padding-right:40px;  padding-left:10px;"></p>
<a href="Home(login).html "><img style="padding-left:200px; border-left:1px solid #333;" src="imghome/AR11.png" alt="AR"height="40px"width="150px"/>
</div>

<div class="main20" >
<ul>
<li class="all">
<a class="linka  active" href="Home(login).php">Home</a></li>
<li><a class="linka" href="#">News</a></li>
<li><a class="linka" href="Sport(login).php">Sports</a></li>
<li><a class="linka" href="#">Health</a></li>
<li><a class="linka" href="Science(login).php">Science</a></li>
<li><a class="linka" href="Technology(login).php">Technology</a></li>
<li><a class="linka" href="Money(login).php">Money</a></li>
<li><a class="linka" href="#">Travel</a></li>
</ul>
</div>
<div class="main22">
<ul>
<li><a class="linka" href="BreakingNews(login).php">Breaking News</a></li>
<li><a class="linka" href="#">World News</a></li>
<li><a class="linka" href="#">Events</a></li>
<li><a class="linka" href="#">Books</a></li> 
<li><a class="linka " href="covid19(login).php">CoronaVirus</a></li>
<li><a class="linka" href="#">TVshowpiz</a></li>
<li><a class="linka" href="login1.html" ><b>login</b></a></li>
</ul>
</div>

</div>
<div class="header1"   style=" height:50px; text-align:left; padding-top:10px; width:80%;margin-left:10%;">
<div class="bordersearch" style="background-color:#ddd; border-style:none;" >
 <div  class="borderBreakingNews"  class="colorfont" style="background-color:red;background: linear-gradient(to right,#CB4335, #F5B7B1);
border-left: linear-gradient(to right,#CB4335, #F5B7B1) 10px solid;  border-style:none;padding-left:20px; border-radius:14px;width:970px" >
 <!--<img src="E:\project\img\unnamed.png" height="40px"width="40px"/--><a id="NewsBreaking"  class="TextTikes" href="" style="padding-right:30px;"></a>
  
 </div>

</div>
</div>
<br><br><br>
<div class="content">
<div class="row">
  <div class="side">
    
	<a href="AdVERTISE.html" target="_blank"><img src="imghome\adv.jpg" style="padding-bottom:40px;padding-top:40px;" height="300px"width="300px"/></a>
	<div class="titleArea"style="width:80%;">
    opinion poll
    </div>
     <div class="opinion"> 
      Do you expect Al-Ahly to win the league in the "Al-Maqsas" match?<br>
     <input type="radio" name="opinion1" id ="Yes1" "/>Yes<br>
     <input type="radio" name="opinion1" id="No1"/>No<br><br>
      <input type="button" name="vote1"   id="vote1" value="Vote" onclick="Vote1()"  class="votebox" style="border-radius:14px;"/>
    <input type="button" value="Result" id ="result1"name="result1" onclick="Result1()" class="votebox disabledbutton" style="border-radius:14px;"/>
      <div >
 
      <label style="font-size: 2rem;"for="Yesvote">Yes</label>
       <meter height="40px" id="Yesvote1"  max="100"></meter><br>
 
         <label style="font-size: 2rem;"for="Novote">No</label>
           <meter  id="Novote1"  max="100"></meter>
 
          </div>
         <br><br>
          Do you expect US President Donald Trump to win the upcoming presidential elections?<br>
           <input type="radio" name="opinion2" id ="Yes2"/>Yes<br>
         <input type="radio" name="opinion2" id="No2"/>No<br><br>
            <input type="button" name="vote2"   id="vote2" value="Vote" onclick="Vote2()"  class="votebox" style="border-radius:14px;"/>
            <input type="button" value="Result" id ="result2"name="result1" onclick="Result2()" class="votebox disabledbutton" style="border-radius:14px;"/>
          <div >
             <label style="font-size: 2rem;"for="Yesvote">Yes</label>
           <meter height="40px" id="Yesvote2"  max="100"></meter><br>
          <label style="font-size: 2rem;"for="Novote">No</label>
           <meter  id="Novote2" max="100"></meter>
 
           </div>
            </div>
  </div>


   <div class="main">


<table style="border-collapse: collapse;">
<tr><th>
<button id="buttonimg1"  class="borderbt" onclick="currentSlide(1)"  type="button" >Today is the last day of summer after 93 days and 15 hours, and the beginning of autumn tomorrow</button><br>
<button id="buttonimg2" class="borderbt"  onclick="currentSlide(2)" type="button" >Mo Salah 3rd in English Premier League Top Scorers for 2020/21</button><br>
<button id="buttonimg3" class="borderbt" onclick="currentSlide(3)" type="button" >Benzema played his 350th game for Real Madrid in La Liga</button><br>
<button id="buttonimg4" class="borderbt" onclick="currentSlide(4)" type="button" >Egypt's central bank attracts EGP 21 billion with T-bill auctions</button><br>


</th>
<th>
<div class="container" >
  <div class="mySlides" >
    
    <img src="breakingnews\1.jpg" style="width:800px;height:260px;padding-top:22px">
	<div style="padding-left:10px; border-top:#515A5A solid 5px; background-color:red;color:white;"><a href=""><h4>The Arab world and the entire northern hemisphere will <br>turn the page 
	of the summer astronomically
	at the <br>end of the day, Monday, 
	September 21, 2020, after<br> 93 days, 15 hours and 47 minutes.</h4></a></div>
  </div>

  <div class="mySlides" >
    
    <img src="breakingnews\2.jpg" style="width:800px;height:226px; padding-top:22px">
	<div style="padding-left:10px; border-top:#515A5A solid 5px; background-color:red;color:white;"><a href=""><h4>
	The struggle for the top scorer in the English<br> Premier League flared up as the second round of<br> the competition drew to a close,
	with two<br> matches remaining (Monday), 
	the first is Manchester City and <br>its host Wolverhampton and the second is Aston Villa<br> and Sheffield United, </h4></a></div>
  </div>
  </div>

  <div class="mySlides" >
    
    <img src="breakingnews\3.jpg" style="width:800px; height:260px; padding-top:22px">
	<div style="padding-left:10px; border-top:#515A5A solid 5px; background-color:red;color:white;"><a href=""><h4>
	Madrid Striker Karim Benzema played his 350th game in<br> La Liga. 
	The Frenchman came out in the starting<br> line - up and spent the entire 90 minutes<br> on the field </h4></a></div>
  </div>
  </div>
  <div class="mySlides" >
    
    <img src="breakingnews\4.jpg" style=" width:800px; height:280px; padding-top:22px">
	
	<div style="padding-left:10px; border-top:#515A5A solid 5px; background-color:red;color:white;"><a href=""><h4>
	The CBE offered T-bills in an auction on Sunday <br>with the aim of attracting EGP 19 
	billion, with <br>interest rates ranging between 12.9 percent and 13.6 percent </h4></a></div>
  </div>

  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

 
  
  </div>
  </th>
</table>



<!--                BreakingNews------------> 
<div class="titleArea"style="width:25%; padding-bottom:10px"; >
<a href="BreakingNews(login).php"> Breaking News</a>
</div>

<br><br> 
<table  class="hovertable"  cellpadding="30"style=" cellspacing:9;">

	<tr> <!--add News -->
		<td>

		<a href="ReportsNews1.html" >
		<!--img src ="Reports\11.jpg" height="130px" width="150px" style="float:right;"/-->
		<h2  class="linkText"></h2> </a>
		 
		</td>
	</tr>
	
	<?php
		ShowTable("NEWSDATA/BreakingNews/", true);
	?>
	
	<tr><!--add News -->
		<td>
		<td> <a href="ReportsNews1.html" >
		<!--img src ="Reports\11.jpg" height="130px" width="150px" style="float:right;"/-->
		<h2  class="linkText"> </h2> </a>
		 
		</td>
	</tr>
	
	<tr><!--add News-->
		<td>
		<td>
		
		</td>
	</tr>

	
</table>

<div class="bigOneSec">
   <a href="BreakingNews(login).php" > <h3 class="link0" style="text-align:center; height:10px;">more</h3></a>
  </div>
  <br>
  
  <!-- Science-->
<div class="titleArea"style="width:90%; padding-bottom:10px"; >
<a href="Science(login).php">Science</a>
</div>
<br>
  <div class="bigOneSec">
     <a href="sciencenews-1(login).html" class="bigOneImg">
       <img src="news/images (31).jpg" alt="Spider-like toxins found in Australia's stinging trees" title="Spider-like toxins found in Australia's stinging trees" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="sciencenews-1(login).html"> Spider-like toxins found in Australia's stinging trees </a>
         </h3>
     <p> Toxins produced by Australia's stinging trees bear a strong resemblance to those of spiders and scorpions, scientists have found. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="sciencenews-2(login).html" class="bigOneImg">
       <img src="news/images (33).jpg" alt="Climate change: Earthquake 'hack' reveals scale of ocean warming" title="Climate change: Earthquake 'hack' reveals scale of ocean warming" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="sciencenews-2(login).html"> Climate change: Earthquake 'hack' reveals scale of ocean warming </a>
         </h3>
     <p> Scientists have found a clever new way of measuring ocean warming, using sound waves from undersea earthquakes. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="sciencenews-3(login).html" class="bigOneImg">
       <img src="news/images (37).jpg" alt="'Total failure' on English river water quality" title="'Total failure' on English river water quality" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="sciencenews-3(login).html">  'Total failure' on English river water quality </a>
         </h3>
     <p> All of the rivers, lakes and streams in England are polluted, says the Environment Agency. </p>
     </div>
  </div>
  
  <?php 
	ShowDiv("NEWSDATA/Science/", true);
  ?>
  
  <div class="bigOneSec">  <!--  add News---->
   <a href="" > <h3 class="link0" style="text-align:center; height:10px;"></h3></a>
  </div>
  <div class="bigOneSec">
   <a href="Science(login).php" > <h3 class="link0" style="text-align:center; height:10px">more</h3></a>
  </div>
  <br>
  <br>
  
  
       <!-- Money -->
<div class="titleArea"style="width:95%; padding-bottom:10px"; >
<a href="Money.php">Money</a>
</div>

<br>
<br>
<table  class="hovertable"  cellpadding="30"style=" cellspacing:9;">
<?php
	ShowTable("NEWSDATA/Money/", true);
?>
	<tr>  <!--add News-->
	<td>
		<td> <a href="ReportsNews1.html" >
		<!--img src ="Reports\11.jpg" height="130px" width="150px" style="float:right;"/-->
		<h2  class="linkText"></h2> </a>
		 </td>
	</tr>
	
	<tr><!--add News -->
		<td>
		<td> <a href="ReportsNews1.html" >
		<!--img src ="Reports\11.jpg" height="130px" width="150px" style="float:right;"/-->
		<h2  class="linkText"></h2> </a>
		 
		</td>
	</tr>
	
	<tr><!--add News -->
		<td>
		<td>
		
		</td>
	</tr>

	
</table>
<div class="bigOneSec">
   <a href="Money(login).php" > <h3 class="link0" style="text-align:center; height:10px;">more</h3></a>
  </div>
  <br>
  
  <!--Technology-->
<div class="titleArea"style="width:90%; padding-bottom:10px"; >
<a href="Technology(login).php">
Technology</a>
</div>
<br>
  <div class="bigOneSec">
     <a href="technologynews-1(login).html" class="bigOneImg">
       <img src="news/images (24).jpg" alt="Twitter beefs up security for US election candidates" title="Twitter beefs up security for US election candidates" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="technologynews-1(login).html"> Twitter beefs up security for US election candidates </a>
         </h3>
     <p> Twitter has automatically activated extra account protection for politicians and key figures in the forthcoming US election. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="technologynews-2(login).html" class="bigOneImg">
       <img src="news/images (27).jpg" alt="Google and Facebook under pressure to ban children's ads" title="Google and Facebook under pressure to ban children's ads" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="technologynews-2(login).html"> Google and Facebook under pressure to ban children's ads </a>
         </h3>
     <p> Tech firms have been urged to stop advertising to under-18s in an open letter signed by MPs, academics and children's-rights advocates. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="technologynews-3(login).html" class="bigOneImg">
       <img src="news/images (29).jpg" alt="Canada Tesla driver charged over 'napping while speeding'" title="Canada Tesla driver charged over 'napping while speeding'" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="technologynews-3(login).html">  Canada Tesla driver charged over 'napping while speeding' </a>
         </h3>
     <p> A Canadian man has been charged with dangerous driving for allegedly taking a nap while his self-driving Tesla car clocked up more than 90mph (150km/h). </p>
     </div>
  </div>
  <?php
	ShowDiv("NEWSDATA/Technology/", true);
  ?>
  <div class="bigOneSec">  <!--  add News---->
   <a href="" > <h3 class="link0" style="text-align:center; height:10px;">
   
   </h3></a>
 </div>
  
  <div class="bigOneSec">
   <a href="Technology(login).php" > <h3 class="link0" style="text-align:center; height:10px;">more</h3></a>
  </div>
  <br>
  
  <!----------------Sports----->
<div class="titleArea"style="width:90%; padding-bottom:10px"; >
<a href="Sport(login).php"> Sport</a>
</div>
<br>
  <div class="bigOneSec">
     <a href="sportnews-1(login).html" class="bigOneImg">
       <img src="news/images (18).jpg" alt="Gareth Bale signs for Tottenham: Opponents will worry about playing Spurs - Danny Murphy analysis" title="Gareth Bale signs for Tottenham: Opponents will worry about playing Spurs - Danny Murphy analysis" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="sportnews-1(login).html">  Gareth Bale signs for Tottenham: Opponents will worry about playing Spurs - Danny Murphy analysis </a>
         </h3>
     <p> Gareth Bale has that "wow" factor, something only a few very special players in the world have got. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="sportnews-2(login).html" class="bigOneImg">
       <img src="news/images (20).jpg" alt="Liverpool sign Diogo Jota for £41m from Wolves as Ki-Jana Hoever moves to Molineux" title="Liverpool sign Diogo Jota for £41m from Wolves as Ki-Jana Hoever moves to Molineux" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="sportnews-2(login).html">  Liverpool sign Diogo Jota for £41m from Wolves as Ki-Jana Hoever moves to Molineux </a>
         </h3>
     <p> Liverpool have completed the signing of Portugal forward Diogo Jota from Wolves in a £41m deal that could rise to £45m with add-ons. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="sportnews-3(login).html" class="bigOneImg">
       <img src="news/images (22).jpg" alt="French Open 2020: Naomi Osaka pulls out with hamstring injury" title="French Open 2020: Naomi Osaka pulls out with hamstring injury" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="sportnews-3(login).html">  French Open 2020: Naomi Osaka pulls out with hamstring injury </a>
         </h3>
     <p> The number of confirmed coronavirus cases across the globe has surpassed 30 million, according to figures by America's Johns Hopkins University </p>
     </div>
  </div>
  
  <?php
	ShowDiv("NEWSDATA/Sports/", true);
  ?>
  
  <div class="bigOneSec">  <!--  add News---->
   <a href="" > <h3 class="link0" style="text-align:center; height:10px;"></h3></a>
  </div>
<div class="bigOneSec">
   <a href="Sport(login).php" > <h3 class="link0" style="text-align:center; height:10px;">more</h3></a>
  </div>


<br>
<!-----------Reports---->
<div class="titleArea"style="width:95%; padding-bottom:10px"; >

<a href="Reports(login).php"><p> Reports</p></a>

</div>

<br><br>
<table  class="hovertable"  cellpadding="30"style=" cellspacing:9;">

	<tr>
		<td> <a href="ReportsNews1(login).html" title="Sahl Hasheesh Divers Start a Campaign to Clean the Red Sea">
		<img src ="Reports\11.jpg" height="130px" width="150px" style="float:right;"/>
		<h2  class="linkText">Sahl Hasheesh Divers Start a Campaign to Clean the Red Sea</h2> </a>
		<div class="newsStoryDate">Saturday ، 19 September 2020 05:00 AM</div>
		<br>Plastic started as an ordinary, harmless material, that evolved over
 time into a viral epidemic, negatively affecting many components of our immediate surroundings, 
 including the environment and living organisms </td>
	</tr>
	<tr>
		<td>
		<a href="ReportsNews2(login).html" title="The “autumn star” adorns the dome of the sky starting today">
		<img src ="Reports\22.jpg" height="130px" width="150px" style="float:right;"/>
		<h2  class="linkText">The “autumn star” adorns the dome of the sky starting today</h2> </a>
		<div class="newsStoryDate">Saturday ،17 September 2020 08:00 pM</div>
		We show you our visitors the most important and latest news in the following article:
“Autumn star” adorns the dome of the sky starting today, Saturday 19 September 2020 12:11 pm <br>
In the sky of the Arab world, starting from this evening until next month
		</td>
	</tr>
	<tr>
		<td>
		<a href="ReportsNews3(login).html" title="The “autumn star” adorns the dome of the sky starting today">
		<img src ="Reports\3.jpg" height="130px" width="150px" style="float:right;"/>
		<h2  class="linkText">The World’s Oldest Papyrus and What It Can Tell Us About the Great Pyramids
Ancient Egyptians leveraged a massive shipping, mining and farming economy to propel their civilization forward</h2> </a>
		<div class="newsStoryDate">Saturday ،17 September 2020 08:00 pM</div>
		Following notes written by an English traveler in the early 19th century and two French 
pilots in the 1950s, Pierre Tallet made a stunning discovery: a set of 30 caves honeycombed into limestone 
hills but sealed up and hidden from view in a remote part of the Egyptian desert
		</td>
	</tr>

	<?php
		ShowTable("NEWSDATA/Reports/", true);
	?>

</table>

<div class="bigOneSec">  <!--  add News---->
   <a href="" > <h3 class="link0" style="text-align:center; height:10px;"></h3></a>
  
  </div>
<div class="bigOneSec">
   <a href="Reports(login).php" > <h3 class="link0" style="text-align:center; height:10px;">more</h3></a>
  </div>
<br>


<!--         covid19--->
 <div class="titleArea"style="width:90%; padding-bottom:1%"; ><a href="covid19(login).php"><p>covid19</p></a>

</div>
<br>
  <div class="bigOneSec" >
     <a href="covid19news-1(login).html" class="bigOneImg">
       <img src="news/images (7).jpg" alt="New fear grips Europe as Covid tops 30m worldwide" title="New fear grips Europe as Covid tops 30m worldwide" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="covid19news-1(login).html">  New fear grips Europe as Covid tops 30m worldwide </a>
         </h3>
     <p> The number of confirmed coronavirus cases across the globe has surpassed 30 million, according to figures by America's Johns Hopkins University </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="covid19news-2(login).html" class="bigOneImg">
       <img src="news/images (10).jpg" alt="Coronavirus: How will the world vaccinate seven billion?" title="Coronavirus: How will the world vaccinate seven billion?" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="covid19news-2(login).html">  Coronavirus: How will the world vaccinate seven billion? </a>
         </h3>
     <p> Teams across the world are working to develop a vaccine that will be effective against Covid-19. </p>
     </div>
  </div>
  <div class="bigOneSec">
     <a href="covid19news-3(login).html" class="bigOneImg">
       <img src="news/images (14).png" alt="Step-by-step guide to making your own face mask" title="Step-by-step guide to making your own face mask" class="img-responsive" /> </a>
     <div>
         <h3>
           <a href="covid19news-3(login).html"> Step-by-step guide to making your own face mask </a>
         </h3>
     <p> People across the country now have to wear face coverings in certain circumstances when out of the house, to help limit the spread of coronavirus. In England it is compulsory to wear one on public transport and in shops. </p>
     </div>
  </div>
  <?php
	ShowDiv("NEWSDATA/COVID-19/", true);
  ?>
  <div class="bigOneSec">  <!--  add News---->
   <a href="" > <h3 class="link0" style="text-align:center; height:10px;"></h3></a>
  </div>
  <div class="bigOneSec">
   <a href="covid19(login).php" > <h4 class="link0" style="text-align:center; height:10px;">more</h4></a>
  </div>
</div>
</div>




<!--footer-->

<div  class="footer" >

<div id="contentfooter">
<div style="text-align:center; ";><h3 style="color:white;">FOLLOW US</h3>
<div >
<a href="" target="_blank" ><img src="imghome\facebook5.png" alt="Facebook"  height="60px" width="60px"/></a><br>
<a href="" target="_blank" ><img src="imghome\twitter2.png" alt="twitter"  height="50px" width="50px"/></a><br>
<a href="" target="_blank" ><img src="imghome\Instagram2.png" alt="instagram"  style="padding-top:10px;"height="60px" width="60px"/></a><br>
<a href="" target="_blank" ><img src="imghome\youtube.png" alt="YouTube" style="border-radius:20px; padding-top:10px;" height="50px" width="50px"/></a>
</div>

</div> 
  <div  style="text-align:center;"><h3 style="color:white;">Address</h3> <!--row 2-->
  <div style="padding-left:75px; font-size:15pt; text-align:right">
  <table>
  <tr>
  <th><img src="imghome\home.png"alt ="home" height="60px"width="60px"/></th>
  <th>  Giza ,NY10012, EG</th>
  </tr>
  
  <tr>
  <th><img src="imghome\email.png"alt ="Email"height="60px"width="60px" /></th>
  <th>info@example.com</th>
  </tr>
  
  <tr>
  <th> <img src="imghome\tele.png"alt ="Telephone" height="60px"width="60px"/></th>
  <th> + 01 234 567 88</th>
  </tr>
  </table>
</div>
  </div>  
  <div  ><!--row 3-->
  <table class="tablefooter">
   
  <tr style="border: none;" >
  <td style="border: none;" ><a href="BreakingNews(login).php"class="Texttable" ><p  >BreakingNews</p></a></td>
 <td style="border: none;" ><a href="" class="Texttable"><p >Politics</p></a></td>
	 <td style="border: none;" ><a href="Reports(login).php" class="Texttable"><p >Reports</p></a></td>
  </tr>
  
  <tr style="border: none;" >
   <td style="border: none;" ><a href="Technology(login).php" class="Texttable"><p >Technology</p></a></td>
 <td style="border: none;" ><a href="Sport(login).php" class="Texttable"><p >  Sport </p></a></td>
	 <td style="border: none;" ><a href="Money(login).php" class="Texttable"><p >Money</p></a></td>
  </tr>
  <td style="border: none;" ><a href="covid19(login).php" class="Texttable"><p >Crona Virus </p></a></td>
 <td style="border: none;" ><a href="Science(login).php" class="Texttable"><p >Science</p></a></td>
	 <td style="border: none;" ><a href="" class="Texttable"><p  >Media </p></a></td>
  </tr>

 
  </table>
  </div>  
<div style="font-size:25pt;">
<a href=""><img src="imghome/AR11.png" alt="AR"/></a><br>
<a href="" target="_blank">Who are we </a> <br>
<a href="" target="_blank">Privacy policy</a>
</div>
</div>

<div class ="footer-bottom">
</div>
&copy; Team Fcis
</div>

<!--footer-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides() {
showSlides(slideIndex += 1);
}
function plusSlides1() {
 var t = setTimeout(function(){ plusSlides1() }, 4000);
  showSlides(slideIndex += 1);
}

function currentSlide(n) {
  showSlides(slideIndex = n);

}

function showSlides(n) {
  var i;
 
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
 
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
	  
  }
  
  slides[slideIndex-1].style.display = "block";
var elements = document.getElementsByClassName("borderbt")
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.background="black";
        }
		elements[slideIndex-1].style.background="red";
}


window.addEventListener("load",function() { showSlides() });
window.addEventListener("load",function() { plusSlides1() });
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>

</html>
<!--
-->