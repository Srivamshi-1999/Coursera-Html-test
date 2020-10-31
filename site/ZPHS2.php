

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="google-site-verification" content="ejYhGPIWNiynivbq9GFuHKJFkJruTagixvvttZ_dEBQ" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This webpage is buld for the government students to study in the pandemic situation easily and this webpage deals with subject of Biology and this page also consists of experements of biology of class 10,9,8,7,6."> 
	<meta name="author" content="Srivamshi">
      <?php
session_start();
echo "Welcome ".$_SESSION['User'];

?>


	<meta name="keywords" content="Biology, online classes, ZPHS mothe">
	<title>Biology</title>
	<link rel="icon" type="image/ico" href="logo.jpeg" />
	<style>
		body
		{
			b
		}
    .logout
    {
      margin-left:20%
    }
		.imgtop
		{
			float: middle;
			margin-left: 45%;
			
		}
		.header
		{
			text-align: center;
			letter-spacing: 1px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 32px;
			text-transform: uppercase;
			text-shadow: 2px 2px 5px grey;

		}
		.top
		{
			
      background-image: url('https://images.homedepot-static.com/productImages/ee5e3969-163e-4935-9f8c-3aa3fd4b54b0/svn/brewster-wallpaper-412-26985sam-64_1000.jpg');
      border: solid 1px grey;
      box-shadow: 2px 5px 20px rgba(119,119,119,10.5);
      border-radius: 10px;
		}
	@media screen and (max-width: 800px) {
  .leftcolumn, .middlecolumn {   
    width: 100%;

   
    
    padding-left: 2px;
    
  }
}
@media screen and (max-width: 800px) {
  .imgtop {   

    width:20%;
    margin-left: 40%;
    margin-top: 5px;
    
  }
}
@media screen and (max-width: 800px) {
  .header {   

    text-align: center;
    font-size: 20px;
    
  }
}






		.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #333;

}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 18px;
  color: white;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: black;
  color: white;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #4CAF50;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  background-color: #f2f2f2;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: green;}










.leftcolumn {
	margin-top: 10px;
  float: center;
  
}
.middlecolumn
{
	float: center;
	margin-top: 10px;
}
.card
{
	background-image: url('https://images.homedepot-static.com/productImages/ee5e3969-163e-4935-9f8c-3aa3fd4b54b0/svn/brewster-wallpaper-412-26985sam-64_1000.jpg');
	border: solid 1px grey;
	box-shadow: 2px 5px 20px rgba(119,119,119,10.5);
	border-radius: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.image
{
	margin-top: 10px;
	
	border-radius: 100px;
	margin-left: 37%;

}
.border
{
	border: solid 1px black;
}
.pi
{
	font-size: 30px;
	text-align: center;
	letter-spacing: 1px;
	text-transform: uppercase;
	font-family: Arial;
	font-weight: 50px;
}
@media screen and (max-width: 800px) {
  .pi{   

    text-align: center;
    font-size: 20px;
    
  }
}
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width:20%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent1 {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-image: url('https://images.freecreatives.com/wp-content/uploads/2015/04/white-paper-texture-hd.jpg');}
#News {background-image: url('https://images.freecreatives.com/wp-content/uploads/2015/04/white-paper-texture-hd.jpg');}
#Contact {background-image: url('https://images.freecreatives.com/wp-content/uploads/2015/04/white-paper-texture-hd.jpg');}
#About {background-image: url('https://images.freecreatives.com/wp-content/uploads/2015/04/white-paper-texture-hd.jpg');}
#six{background-image: url('https://images.freecreatives.com/wp-content/uploads/2015/04/white-paper-texture-hd.jpg');}
li
{
	display: inline;
}
a
{
	text-decoration: none;
	font-size: 20px;
	margin-left: 8px;
	color: black;
}
.im2
{
	margin-left: 30px;
	margin-top: 	12px;
}
.next
{
	text-align: center;
	font-size: 30px;
}
		



* {box-sizing: border-box}

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
} 
.frame1
{
	float: center;
	margin-left: 32%;
	border-radius: 10px;
	border: solid 1px black;
	box-shadow: 2px 5px 20px rgba(119,119,119,10.5)
} 
@media screen and (max-width: 800px) {
  .frame1 {   

  margin-left: 0;
  width:100%;

    
  }
}  
@media screen and (max-width: 800px) {
  .frameh {   

font-size: 20px;

    
  }
}  
.frameh
{
	text-align: center;
	letter-spacing: 1px;
	color: white;
	font-family: sans-serif;
	background-color: green inherit;
	border-radius: 10px;
}
#Tokyo2
{
	background-image: url('http://hansenfoundationnj.org/wp-content/uploads/2017/03/Black-grunge-textures-wallpaper-67593.jpg');
	border-radius: 10px;
	margin-top: 10px;
}
#Tokyo
{
	background-image: url('http://hansenfoundationnj.org/wp-content/uploads/2017/03/Black-grunge-textures-wallpaper-67593.jpg');
		}




/*Mesaages*/
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.arbt
{
  background-color: #4CAF50;
  color: white;
  border:none;
  box-shadow: 2px 5px 20px rgba(119,119,119,10.5);
  border-radius: 10px;
  margin-bottom: 5px; 

}
.article
{
  text-decoration:none;
  color: white;
}
@media screen and (max-width: 800px) {
  #demo5 {   

  margin-left: 0;
  width:100%;

    
  }
}  
       .marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            background: #fefefe;
            color: #333;
            border: 1px solid #4a4a4a;
        }
        
        .marquee p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 20s linear infinite;
        }
        
        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
            }
        }
        
        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(-100%);
            }
        }
        
        @keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }
        .scrolling
        {
          font-size: 25px;
          color: red;
        }
        @media screen and (max-width: 800px) {
  .scrolling {   

  font-size: 15px;

    
  }
} 
.footer {
  background-image: url("https://images.homedepot-static.com/productImages/ee5e3969-163e-4935-9f8c-3aa3fd4b54b0/svn/brewster-wallpaper-412-26985sam-64_1000.jpg");
  padding: 10px;
  margin-top: 8px;
  text-align: center;
  color: black;
  letter-spacing: 1px;
  font-size: 20px;
  font-weight: bold;
  border-radius: 5px;
  box-shadow: 2px 5px 20px rgba(119,119,119,10.5);
}
@media screen and (max-width:800px){
.footer{
  font-size:18px;
}
}
.englink
{
  text-align: center;
  margin-top: 10px;
  margin-bottom: 10px;
}
.click
{
  margin-left: 4px;
  color: white;
  box-shadow: 2px 5px 20px rgba(119,119,119,10.5);

}
.bin
{
  font-size: 20px;


}
@media screen and (max-width: 400px) {
  .bin {   

font-size: 18px;

    
  }
}  
.logout
{
  margin-left:50%
  font-size:5px;
  border: none;
}


</style>

</head>
<body>
	<div class="top"><img class="imgtop" src="https://labour.telangana.gov.in/images/telanganalogo.png" width="7%"><br>
	<h3 class="header">Biological Science<br>ZPHS Mothe District: Jagtial</h3></div>
  <div class="englink"><b class="bin">"For Telugu Medium":</b><span><button class="click"><a href="https://srivamshi-1999.github.io/ZPHS1/site/">Click Here!</a></button></span></div>
  <?php
  echo '<button class="logout"><a href="login.php">Logout</a></button>'
?>


	 <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Class</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo1')">Do you know</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo2')">Science Videos</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo3')">Science Article's</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo4')">School Events</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo5')">Q&A</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo6')">Projects</button>
</div>


<div id="London" class="tabcontent">
    <div class="marquee">

  <p class="scrolling">10th,9th,8th are uploded... wait for remaining classes.. LAXMAN ALLE</p>
</div>
	<div class="row">
		<div class="leftcolumn">
			<div class="card">
				<img class="image" src="laxman.jpeg" width="23%">
				<div class="border"></div>
				<p class="pi">Alle Laxman</p>
				<p class="pi">M.Sc B.Ed</p>
				<p class="pi">School Assistant(Bioscience)</p>
				<p class="pi">ZPHS Mothe</p>
				<p class="pi">District: JagtiaL</p>
        <p class="pi">Cell no: 9949200436</p>

			</div>
		</div>
		
	</div>
<footer class="footer">
  <p>Web Developer:Srivamshi Alle</p>
</footer>

	</div>



  



<div id="Paris" class="tabcontent">
  <div class="marquee">

  <p class="scrolling">10th,9th,8th are uploaded..... wait for remaining classes.... LAXMAN ALLE</p>
</div>
	
<h4 style="text-align:center;font-size: 30px; ">Classes</h4>
<div class="englink"><b class="bin">"For Experiments":</b><span><button class="click"><a href="experements.html">Click Here!</a></button></span></div>
	<button class="tablink" onclick="openPage('Home', this, '#4CAF50')"id="defaultOpen1">10</button>
<button class="tablink" onclick="openPage('News', this, 'green')">9</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">8</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">7</button>
<button class="tablink" onclick="openPage('six', this, 'pink')">6</button>

<div id="Home" class="tabcontent1">


	
  <h2 style="color: black; text-align: center;">1.Nutrition</h2>
  <div class="border"></div>
                  
                  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/Z-eTwJ2OrAg?playlist=6Uj8OrqicMQ,r4GWGoSBBI4,dxtv1K7Lf18,gZ8y2USN1bY,Z5Tw-rdpdzY,dkr1qLSN3MI,J2Uv6fzhHKs,bHYu2utwbps,TY8PptiRaWQ" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe> 


  <div class="border"></div>

    <h2 style="color: black; text-align: center;">2.Respiration</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/nl1oDGJytMw?playlist=5YhjpYLmiVA,I5Ui6IJ7pDg,PpWkRtIVjFQ,pjjOU4EaLHE,WyNIPorWwfE,dAaBooSpvWw,03Ts8GgRJEA,sPietM7Q2Q0,T7iG7Wb0czY" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
     <h2 style="color: black; text-align: center;">3.Circulatory System</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/y0L86K4vaOc?playlist=nuKCHTyd2ok,P3xdsjbkOpc,RuJiVUQ8ceY,pckE5hI8z6o,gJXQs6_mmuE,Z4jwFvTv31Q,hL_Utd7VJ5Q" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
     <h2 style="color: black; text-align: center;">4.Excretory System</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/D4Nxw9hk1aQ?playlist=1BDFAKXM-ps,WsvJLGwaneY,6nbfA-eNXug,PwUzg5c-BXA,VgcAsJKFN1E" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
     <h2 style="color: black; text-align: center;">5.Control & Co-ordination</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/ccG5cRzrBnc?playlist=P22FyYg432E,iNAlZZhL96o,VReqS33NE6Y,7B11Bhh3Brg,xfUEGZ2ebog,0YdB0zCS5l4,-4zv2eyyDf8,gt4P1DPjIU8,WPmh9jnCvVw" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
     <h2 style="color: black; text-align: center;">6.Reproduction</h2>
  <div class="border"></div>
    <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/WGNEpR4yKiQ?playlist=SBILc-QyyjY,l2Zki-N-6bE,aiIVKwzuKyo,tHCB-7mIcGU,7hyFxMFucw8,v-vV2pgR90o,yGXEyyY77QE,_yo6Ve7qnAE" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
     <h2 style="color: black; text-align: center;">7.Metabolic Co-ordination</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/gAYKWrAh9pM?playlist=oF0gC-gAdHY,C73oZd_TYfk,T6fT3BlUVMw,6v79AbTnnaI" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
 
  <div class="border"></div>
     <h2 style="color: black; text-align: center;">8.Heridity</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/xCiEan0kn5k?playlist=vG8wNF8KzbM,dcZBkmn3-ps,fUXXEgI5JLI,J1P7FEWy2hQ,cXxm8BQCT9U,XqNf4uPFRPI,pvH-h7TzSsE,h6Y9e9lE4F0,EYYc7z4yX38,G6e6wpNP7FU,oqFg7QYbKms,5JwShQarz1w,s64Y8sVYfFY" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
 
  <div class="border"></div>
     <h2 style="color: black; text-align: center;">9.Our Environment</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/-xKyFoVLMp8?playlist=lLfdghZRghM,mdGXYN0wnaM,yPsNO1uZjiE,t99LvpdQjs8" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
     <h2 style="color: black; text-align: center;">10.Natural Resources</h2>
  <div class="border"></div>
    <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/1VgRLn8KSk0?playlist=1l6v-OPjY7s,Sb0WP50eDUs,Z_u0LDXgFCI,hHxKX7B27Ak,r6Ad_cHfvo8,76aLoToZEIA,XqNf4uPFRPI,IHHKokvNTfQ,ydi9ip7P7dA" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
  
</div>

<div id="News" class="tabcontent1">

   <h2 style="color: black; text-align: center;">1.Cell Structure & Functions</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/ij3qHqY2KFw" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>



  <div class="border"></div>
 <h2 style="color: black; text-align: center;">2.Plant tissue</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/l5vA4E_HS1s?playlist=zevOkEPislo" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">3.Animal Tissue</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/zYjVUz5M4-I?playlist=vs5O-5u5bVQ" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">4.Transport of Materials Through Plasma Membrane</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/bmm1kXyewZU?playlist=3JVI_YUhxZk" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>


  <div class="border"></div>
 <h2 style="color: black; text-align: center;">5.Bio-Diversity</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/Za_9-z31IU8?playlist=QGBse7psOxg" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">6.Sense Organs</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/UIcjQEAs1DM?playlist=T398OnwLOSQ,oOgKzQyyL80" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
 <h2 style="color: black; text-align: center;">7.Animal's Behaviour</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/cZxTJmhS3Tw?playlist=qqYkuFgmfL0,Sl38enCcIfM" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">8.Crop Production & problems</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/16y0_lL16xM" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">9.Eco-system & Adaptations</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/odGWj-0tmuM?playlist=y6HsfU5a81k,ZuGqIstYd-Y,QKrynApgB6o" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">10.Soil Pollution</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/hDjmhs2sbp0?playlist=CbUPcwLkMTU,-pxrcZ7xKLQ" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
 <h2 style="color: black; text-align: center;">11.Bio-Geo-Chemical Cycles</h2>
  <div class="border"></div>
<iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/837YRG9GZIs?playlist=6Ew9OFEStkE" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
<div class="border"></div>
 
</div>

<div id="Contact" class="tabcontent1">
   <h2 style="color: black; text-align: center;">1.What is Science ?</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/cT7K8fIdHYE?playlist=5hNpEQxHcJQ" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
   <h2 style="color: black; text-align: center;">2.Cell-The Basic Unit of Life</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/xj36X8rwAxY?playlist=V5vliKQw4OY" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">3.Microbial World!</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/IBouMM1D1k0?playlist=MjbYmzkqYRs,Rt9uLGY5tzQ,R-b1TNSDvKg,y4z1GmoOXPE,GAUH17lHVXc,AzrINzmTzDA,Rd4uekWVYZo" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
 
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">4.Reproduction in Animals</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/Qw5AxNyzibM?playlist=#" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>

  <div class="border"></div>
   <h2 style="color: black; text-align: center;">5.Adolscence</h2>
  <div class="border"></div>
  <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/tu6AoUmXxpY?playlist=a-uKD3Nd2Fc,CcJQI1Na8oM,8Xm8FdtLglo,xaGulmK5zmo,Tgior0D9AaY" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">6.Biodiversity-Conservation</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/RgMeRiij5Kk?playlist=#" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">7.Different Eco-systems</h2>
  <div class="border"></div>
    <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/MjmBhqz4Itg?playlist=#" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">8.Food production from Plants</h2>
  <div class="border"></div>
     <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/7xa4MHIAXgM?playlist=MJW7o6oA5OU" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">9.Food production from Animals</h2>
  <div class="border"></div>
   <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/5XXrnhBJyPk?playlist=1AS7VSI41tU" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">10.Not for drinking-Not for breathing</h2>
  <div class="border"></div>
 <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/wxPkXH_0_6c?playlist=gcRoPBzAQGM" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">11.Why do we fall ill!</h2>
  <div class="border"></div>
     <iframe class="frame1"width="550" height="250" src="https://www.youtube.com/embed/2wuorRPRUG8?playlist=3X-lMeFecAI" frameborder="0" allow="autoplay; encrypted-media" style="margin-top: 10px;" autoplay="true" allowfullscreen></iframe>
  
  <div class="border"></div>

</div>

<div id="About" class="tabcontent1">
     <h2 style="color: black; text-align: center;">1.Food Components</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">2.Acid and Bases</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">3.Animal Fiber</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">4.Motion and Time</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">5.Heat-Measurments</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">6.Weather & Climate</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">7.Electricity-Current and it's effect</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">8.Air,Winds & Cyclones</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">9.Reflection of Light</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">10.Nutrition in Plants</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">11.Respiration in organisms</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">12.Reproduction in plants</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">13.Seed dispersal</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">14.Water- Too Little to waste</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">15.Soil-Our life</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">16.Forest-Our Life</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">17.Changes around us</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>

</div>
<div id="six" class="tabcontent1">
   <h2 style="color: black; text-align: center;">1.Our Food</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">2.Playing With Magnets</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">3.Rain-Where does it come from</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">4.What do animals eat</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">5.Materials & Things</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">6.Habitat</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">7.Separation of substances</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">8.Fibre to fabric</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">9.Plants:parts and functions</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">10.Changes around us</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
   <h2 style="color: black; text-align: center;">11.Water in our life</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">12.Simple Electric Circuits</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">13.Learning how to measure</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">14.Movements in Animals</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">15.Light,Shadows & Images</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
       <h2 style="color: black; text-align: center;">16.Living & Non-living</h2>
  <div class="border"></div>
  <ul>
    <li><a href="#">link 1</a></li>
    <li><a href="#">link 2</a></li>
      <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
          <li><a href="#">link 5</a></li>
            <li><a href="#">link 6</a></li>
              <li><a href="#">link 7</a></li>
                <li><a href="#">link 8</a></li>
                  <li><a href="#">link 9</a></li>
                    <li><a href="#">link 10</a></li>
                      <li><a href="#">link 11</a></li>
                        <li><a href="#">link 12</a></li>
                          <li><a href="#">link 13</a></li>
                            <li><a href="#">link 14</a></li>
                              <li><a href="#">link 15</a></li>
  </ul>
  <div class="border"></div>
  

</div>
</div>

<div id="Tokyo1" class="tabcontent">
  
	<div class="border"></div>
<embed width="100%" height="500px" src="mask.txt">
	<div class="border"></div>
</div>

<div id="Tokyo2" class="tabcontent">
	<h1 class="frameh">1.Bio-Mimicry</h1>
	<iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/vyGUdVKF-YM" frameborder="0" allowfullscreen> 

</iframe>
	<h1 class="frameh">2.Earth Facts</h1>
	<iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/tC_lvLwRoQE" frameborder="0" allowfullscreen> 
</iframe> 
		<h1 class="frameh">3.Artificial Intelligence</h1>
	<iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/1PJsZwpwZ7k" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">4.Placebo Effect</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/CumzlCZco7g" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">5.Great Scientists</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/Wa9Ld6DQNgA" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">6.Teleportation</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/mTRXDNMpVfc" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">7.Facts</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/5sB-Bl4G8ak" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">8.Gold@Facts</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/cpHR1XWxqxs" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">9.Harmones</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/u78zFIuzwyg" frameborder="0" allowfullscreen> 
</iframe> 
    <h1 class="frameh">10.Names of Cyclonnes</h1>
  <iframe class="frame1" width="450" height="250"
src="https://www.youtube.com/embed/X433OJyHziI" frameborder="0" allowfullscreen> 
</iframe>
	
</div> 

<div id="Tokyo3" class="tabcontent">
  <h1>Science Articles</h1>
<button  class="arbt"><a class="article" href="biomimicry.pdf">1.Bio-Mimcry.pdf</a></button>
<button class="arbt"><a class="article" href="article2.pdf">2.article 2.pdf</a></button>
<button class="arbt"><a class="article" href="article3.pdf">3.article 3.pdf</a></button>
<button class="arbt"><a class="article" href="article4.pdf">4.article 4.pdf</a></button>
<button class="arbt"><a class="article" href="article5.pdf">5.article 5.pdf</a></button>
<button class="arbt"><a class="article" href="article6.pdf">6.article 6.pdf</a></button>
<button class="arbt"><a class="article" href="article7.pdf">7.article 7.pdf</a></button>
<button class="arbt"><a class="article" href="article8.pdf">8.article 8.pdf</a></button>
<button class="arbt"><a class="article" href="article9.pdf">9.article 9.pdf</a></button>
<button class="arbt"><a class="article" href="article10.pdf">10.article 10.pdf</a></button>

</div>
<div id="Tokyo4" class="tabcontent">
  
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="https://lh3.googleusercontent.com/pw/ACtC-3dg2gIc9FXQ-ktm-mF9XfGjCHsVGKJ8AJPtUp03bcJBds-gtQnGqYsrInzfvU7k7jFfsCFkoKH5sy2-YEmufrV4OfXJiE3rKNCXweWO_e_MvdJy-sHu_9sdGNxMuuZmV77eTdfhbNYNQqgBInW_b4DDaA=w927-h695-no?authuser=0" style="width:100%; height: 100%;">
  <div class="text">Teacher's Day</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="https://lh3.googleusercontent.com/pw/ACtC-3eLyAIDj2AyURs6FlMuV9RozsAGmEkmGI4KTN9n6nv28WNM9UvR5ZZFOUmgSqf9tcLTtoopzdw8F1acLSMAPNZ8FdVhFnXtS87Nbb9K6H3PvbrYWv5JlfBbVlEKtNYd6gKbOeRxSJNI3SYNJdpmLSiK4A=w927-h695-no?authuser=0" style="width:100%">
  <div class="text">Science fair</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="https://lh3.googleusercontent.com/pw/ACtC-3cQ6M903MSgYTpLYQGglGOZoMttqZ6ZjcHkwxGVu12Bgn60EMZVbFmYGnlruzzV0aqF8ALFVYu-8AcDPYCz8fV3QVmCXXlYJEb7gQVCdPOmtcK1nJcc_JBzRnXToffF8odh4UcB1jrn5JqFaMnxH80UYg=w927-h695-no?authuser=0" style="width:100%">
  <div class="text">Science fair</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="https://lh3.googleusercontent.com/pw/ACtC-3ch2HdaYxkePxTe9nklXDRmqP93Wz6OgCUgJ3dGFHJhlCnp0mNnfHiWO7f3ovR7VbmnpirTojsj8FWqz2oPmtaL_RD4JdynqLXtu-ZsIlt4tcLxHTuvf0aAmwvS33xfLP9eml3vL8RIO6AZp4SuBNAnNA=w927-h695-no?authuser=0" style="width:100%">
  <div class="text">Science fair</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="https://lh3.googleusercontent.com/pw/ACtC-3c_5nC-T4algivA4EH6a9g-Ipq9dVMLv_T1JUHtiO6sV_VEemUUFNWFZ9hsLGFaPLVzPvgH2Z4lGSQop_7tjDPSlXAk8J6tOqVWpXyiXXmZmpltuji5aokFOwjy-nhNpWiAQfJLf81KsacrRqYECR_bmw=w927-h695-no?authuser=0" style="width:100%">
  <div class="text">Teacher's Day</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="farewell.jpeg" style="width:100%">
  <div class="text">Farewell</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

</div>
<div id="Tokyo5" class="tabcontent">
  
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="Tokyo6" class="tabcontent">
  
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

</div>









<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<script>
function openPage(pageName,elmnt,color) {
  var j, tabcontent1, tablinks;
  tabcontent1 = document.getElementsByClassName("tabcontent1");
  for (j = 0; j < tabcontent1.length; j++) {
    tabcontent1[j].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (j = 0; j < tablinks.length; j++) {
    tablinks[j].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen1").click();
</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
	


</body>
</html>
