<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="/images/miniznachok.png" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="../css/style_navigation.css" type="text/css"/>
<link rel="stylesheet" href="../css/partner33.css" type="text/css"/>
<link rel="stylesheet" href="../css/mainmenuleft33.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Macrogroup</title>
</head>
<body>





</head>
<body>





<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">




<div id="London2" class="tabcontent2">
  
<div class="mainblock2" >
<video id="myVideo"  playsinline="" autoplay="" loop="" muted="">
<source src="karablik.mp4"  type="video/webm">
</video>

</div>
 <div id="blackblock1"></div>
 
  
</div>

<div id="Paris2" class="tabcontent2">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo2" class="tabcontent2">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>



 
</div>

<div id="Tokyo" class="tabcontent">


</div>
<div id="polosochkasira33red"></div>
<div id="polosochkasira33"></div>
<img src="../imagas/microsoft.png" id="logos">

<div class="tab2">
  <button class="tablinks" onclick="openCity2(event, 'London2')"id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity2(event, 'Paris2')">Paris</button>
  <button class="tablinks" onclick="openCity2(event, 'Tokyo2')">Tokyo</button>
</div>




<div class="tab">

<div id ="blockprofesiya0" onclick="openCity(event, 'London')" id="defaultOpen"> 

<img src="../imagas/bbb.jpg" class="leftfotonav">

<div class ="blockprofesiyatrikytnik"> 
<img src="../imagas/strelachka.png" class="strelki">
</div>

<div id ="blockfotonazva1"> <p id = "fraza1_10">CEO "TзОВ Bababdron"</p></div>
<div id ="blockfotonazva2"> <p id = "fraza1_10">Бабак Олександр</p></div>

</div> 

<div id ="blockprofesiya" onclick="openCity(event, 'Paris')" id="defaultOpen"> 

<img src="../imagas/fotoceo.jpg" class="leftfotonav">


<div class ="blockprofesiyatrikytnik"> 
<img src="../imagas/strelachka.png" class="strelki">
</div>

<div id ="blockfotonazva1"> <p id = "fraza1_10">CEO "TзОВ Bababdron"</p></div>
<div id ="blockfotonazva2"> <p id = "fraza1_10">Бабак Олександр</p></div>

</div> 

<div id ="blockprofesiya" onclick="openCity(event, 'Tokyo')" id="defaultOpen"> 

<img src="../imagas/x4.jpg" class="leftfotonav">


<div class ="blockprofesiyatrikytnik"> 
<img src="../imagas/strelachka.png" class="strelki">
</div>

<div id ="blockfotonazva1"> <p id = "fraza1_10">CEO "TзОВ Bababdron"</p></div>
<div id ="blockfotonazva2"> <p id = "fraza1_10">Бабак Олександр</p></div>

</div>

<div id ="blockprofesiya" onclick="openCity(event, 'London')" id="defaultOpen"> 

<img src="../imagas/x10.jpg" class="leftfotonav">


<div class ="blockprofesiyatrikytnik"> 
<img src="../imagas/strelachka.png" class="strelki">
</div>

<div id ="blockfotonazva1"> <p id = "fraza1_10">CEO "TзОВ Bababdron"</p></div>
<div id ="blockfotonazva2"> <p id = "fraza1_10">Бабак Олександр</p></div>

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
function openCity2(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent2");
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

















</body>
</html>
  


