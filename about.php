<?php		
	include 'header.php';

?>		

	</header>

<div id="conteneur">
	    

  <h1>Profile</h1>
    
<br>

 <section id="CV">

	<h1>EDUCATION</h1>
	<h3><b>2019/2020</b><br>Second year Master Degree - Digital Creation UIUX<br>
		2018/2019<br>First year Master Degree - Digital Creation UIUX<br>
		2018/2019<br>Formation Web Development<br>
		2016/2017<br>Numeric Year (UX, UI, Code, Management)<br>
		2014/2015<br>Graphic Design<br>
		2013/2014<br>Foundation Year in Applied Arts MANAA<br>
	</h3>

	<h1>TOOLS</h1>

	<table>
		<tr>
			<th><h2>Programs</h2></th>
			<td><h3>Photoshop</h3></td>
			<td><h3>Illustrator</h3></td>
			<td><h3>InDesign</h3></td>
			<td><h3>After Effect</h3></td>
			<td><h3>Premiere</h3></td>
		</tr>
		<tr>
			<th><h2>Sketching</h2></th>
			<td><h3>Adobe XD</h3></td>
			<td><h3>Sketch</h3></td>
			<td><h3>Figma</h3></td>
			<td><h3>Principle</h3></td>
			<td><h3>Zeplin</h3></td>
		</tr>
			<tr>
			<th><h2>Coding</h2></th>
			<td><h3>html</h3></td>
			<td><h3>css</h3></td>
			<td><h3>js</h3></td>
			<td><h3>php</h3></td>
			<td><h3>mysql</h3></td>
		</tr>

	</table><br>
     
<h1>Skills</h1>

<p>HTML</p>
<div class="lala">
  <div class="skills html">90%</div>
</div>

<p>CSS</p>
<div class="lala">
  <div class="skills css">85%</div>
</div>

<p>JavaScript</p>
<div class="lala">
  <div class="skills jss">40%</div>
</div>

<p>PHP</p>
<div class="lala">
  <div class="skills php">25%</div>
</div>
	
<h1>EXPERIENCE</h1>
<h3>Three internships<br>
Free-lance<br>Projects<br>Life<br></h3>

<h1>INTERESTS</h1>
<h3>Travels <br> Environment <br> Nature</h3>

<h1>LANGUAGES</h1>
<h3>French<br>English<br>++</h3>
	 
	<section id="client-acc">
	  <h1>ON BOARD</h1>
		
		<div class="slider5">
			<div class="slide"><img src="images/carrousel_1.jpg" alt="Vue"></div>
  			<!--div class="slide"><img src="images/carrousel_2.jpg"></div-->
			<div class="slide"><img src="images/carrousel_3.jpg" alt="Mails"></div>
  			<div class="slide"><img src="images/carrousel_4.jpg" alt="Data"></div>
			<div class="slide"><img src="images/carrousel_5.jpg" alt="Connexion"></div>

		</div>
		
<!-- Carousel -->
<script>
	$(document).ready(function(){
	  $('.slider5').bxSlider({
		slideWidth: 300,
		minSlides: 1,
		maxSlides: 4,
		moveSlides: 4,
		slideMargin: 10,
		preloadImages : 'all',
		auto:true,
	  });
	});
</script>
	
</section>	 
	 
</div>
</div>

<?php		
	include 'footer.php';
?>