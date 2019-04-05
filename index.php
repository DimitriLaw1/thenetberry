<?php 
include("includes/includedFiles.php");

?>

<div class="container" id="bg-border">  
  

	<div>
	<h1 class="hotWeekend"> What's hot this <br> weekend?
		<p class="curatedText"> This is a curated playlist of the hottest songs in your area. </p>

<button id="button1">Listen</button>


	
</h1>
</div>

	<div >
<img class="bannerimg" src="assets/images/sire1.png" >
</div>
</div>



<h1 class="pageHeadingBig"> Noteworthy Albums</h1>

<div class="gridViewContainer">
	
	<?php 
$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");
while($row = mysqli_fetch_array($albumQuery)){
echo "<div class='gridViewItem'> 
<span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")'>
<img src='". $row['artworkPath'] . "'>

<div class='gridViewInfo'>"
. $row['title'] .
"</div>
</span>
</div>";
}
?>
</div>

  <div class="wholeLeftSide">
    <h1 class="pageHeadingBig"> Latest Song Releases in North Carolina</h1>
<ul class="chartlist">
<li class="chartrow"> 
<div class="chartcount"> 
<img class="play" src="assets/images/icons/play-white.png">
<span class="trackNumber">1</span>
</div>
<div class="chartinfo"> 
<span class="trackName">Sweet Cocoala</span>
<span class="artistName">Hasina</span>
</div>
<div class="chartoptions"> 
<img class="optionsButton" src="assets/images/icons/more.png">
</div>
<div class="chartduration"> 
<span class="duration">3:22</span>
</div>
</li>

<li class="chartrow">
<div class="chartcount"> 
<img class="play" src="assets/images/icons/play-white.png">
<span class="trackNumber">2</span>
</div>
<div class="chartinfo"> 
<span class="trackName">Anything</span>
<span class="artistName">Bijan Miara</span>
</div>
<div class="chartoptions"> 
<img class="optionsButton" src="assets/images/icons/more.png">
</div>
<div class="chartduration"> 
<span class="duration">4:10</span>
</div>
 </li>

 <li class="chartrow"> 
<div class="chartcount"> 
<img class="play" src="assets/images/icons/play-white.png">
<span class="trackNumber">3</span>
</div>
<div class="chartinfo"> 
<span class="trackName">See Me</span>
<span class="artistName">Chlo The God</span>
</div>
<div class="chartoptions"> 
<img class="optionsButton" src="assets/images/icons/more.png">
</div>
<div class="chartduration"> 
<span class="duration">3:50</span>
</div>
</li>

<li class="chartrow"> 
<div class="chartcount"> 
<img class="play" src="assets/images/icons/play-white.png">
<span class="trackNumber">4</span>
</div>
<div class="chartinfo"> 
<span class="trackName">Friction</span>
<span class="artistName">Gabe.E</span>
</div>
<div class="chartoptions"> 
<img class="optionsButton" src="assets/images/icons/more.png">
</div>
<div class="chartduration"> 
<span class="duration">2:42</span>
</div>
</li>

<li class="chartrow">
<div class="chartcount"> 
<img class="play" src="assets/images/icons/play-white.png">
<span class="trackNumber">5</span>
</div>
<div class="chartinfo"> 
<span class="trackName">Savage Sweetheart</span>
<span class="artistName">Lil Mala</span>
</div>
<div class="chartoptions"> 
<img class="optionsButton" src="assets/images/icons/more.png">
</div>
<div class="chartduration"> 
<span class="duration">3:23</span>
</div>
 </li>


</ul>
</div>


<div class="cards">
<h1 class="pageHeadingBig"> Curated Playlist</h1>

<a href="#"><div class="card1">
<h3 id="playlistHeader"> Love Songs </h3>
<img class="playlistImg" src="assets/images/ak11.png" >
</div></a>

<a href="#"><div class="card2"> 
<h3 id="playlistHeader"> Sad Songs </h3>
<img class="playlistImg" src="assets/images/ak11.png" >
</div></a>

<a href="#"><div class="card3"> 
<h3 id="playlistHeader"> Workout Songs </h3>
<img class="playlistImg" src="assets/images/ak11.png" >
</div></a>

<a href="#"><div class="card4">
<h3 id="playlistHeader"> Dorm room Songs </h3>
<img class="playlistImg" src="assets/images/ak11.png" >
 </div></a>
 </div>

<div class="bottom20padding"> </div>

		

