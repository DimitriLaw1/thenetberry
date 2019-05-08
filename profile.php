<?php include("includes/includedFiles.php");

if(isset($_POST['post'])){
	$post = new Post($con, $userLoggedIn);
	$post->submitPost($_POST['post_text'], 'none');
}



?>

<div class="top_bar"> 

		<div class="logo2">
			<form action="/action_page.php">
      <input type="text" placeholder="Search for friends.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
		</div>

		<nav class="socialNav">

<a title="Home"href="#"><img  alt="Home" class="Home" src="assets/images/icons/home1.png"> </a>
<a title="Friend Request" href="#"><img class="FriendRequest" src="assets/images/icons/friends.png"></a>
<a title="Message" href="#"><img class="Message" src="assets/images/icons/message.png"> </a>
<a title="Settings" href="#"><img class="Settings" src="assets/images/icons/setting.png"> </a>
		</nav>

	</div>
	<div style="padding:35px;"></div>

	<div class="container"> 
		<div class="socialBannerTop">
			<!-- Background goes in here -->

			<img class="profilePicContainer" style="width: 120px; height: 120px;" src="assets/images/profile-pics/newmee.jpg">
		</div> <!-- Social Banner Top Div Ends -->





<div class="container1" id="bg-white-body">
<ul class="socialMember" style="margin-left: 102px;">
	<li><a>Member Since: <b class="membr-since"> 3 years </b></a>  </li>
	<li> <a style="padding-left: 0;">Last Online: <b class="last-online"> 4 Minutes Ago </b> </a></li>
	<li> <a style="padding-left: 0;">State: <b class="state-loc"> North Carolina </b> </a></li>
	<li> <a style="padding-left: 0;">School: <b class="state-loc"> North Carolina A&T </b> </a></li>
</ul>
	<div class="status profile-status" style="color: black; margin-left: 166px; margin-top: 27px;"><span class="texting">Write your bio here.. </span>

<div class="status status-mood">
<img style="width: 100%; height: 100%;" src="assets/images/profile-pics/cool.png">
  </div>
	</div>
	<div style="padding: 30px;">
		
	</div>
	<p class="profile-name-text"> <?php echo $userLoggedIn-> getFirstAndLastName(); ?> </p>
	<p class="profile-name-title">Entrepreneur  </p>
	

<div class="timeline-width">Timeline</div>
<div class="container1" id="bg-white-body3" style="text-align: center;" >
	<div class="insideFormContainer">
	<form class="wallPosts post_form" action="profile.php"  method="POST">
	<textarea  name="post_text" id="post_text" placeholder="Post something to your wall..." maxlength="500" style="color: black;"></textarea>

		<div class="media-buttons">  
<ul class="click-media-buttons">
	<li class="youtube" title="Youtube"><img class="youtube-img" style="width: 24px; height: 25px;" src="assets/images/icons/youtubeG.png"></li>
	<li class="itunes" title="iTunes"> <img class="itunes-img" style="width: 24px; height: 25px;" src="assets/images/icons/music.png"></li>
</ul>

	</div>
	<input type="submit" name="post" id="post_button" value="Post">
</form>

</div>


</div>



</div> <!-- 2nd Container div ends -->

<div class="container" id="bg-grey-border-bottom"> 
<div class="socialNav1">

<a href="#">Friends Feed </a>
<a style="color: black; font-weight: bold;" href="#">My Timeline </a>
<a href="#">My Crew </a>
<a href="#">Meet New People </a>

		</div>


</div>
<div class="container1" id="bg-white-body2">
	

<div class="feed-wrap">
	<div class="profile-feed-container">

		<div class="top-profile-container">	
			<img class="" style=" display: inline-block; height: 100%;" src="assets/images/profile-pics/newmee.jpg">
			<h3 style="color:blue; display: inline-block; position: relative; top:-41px; left:4px;"> <?php echo $userLoggedIn-> getFirstAndLastName(); ?> </h3>
			<p style="color:grey; display: inline-block; position: relative; top:-27px; left:-100px; font-size:10px;"> Posted 14 minutes ago at 2:44pm ET </p>
		</div>

		<div class="middle-content-container">	
			<p style="color: black;"> What's up Everybody </p>
		</div>

		
		<ul class="profileMember">
	<li><a>Like</a>  </li>
	<li> <a style="padding-left: 0;">Comment  </a></li>
	<li> <a style="padding-left: 0;">Share </a></li>
</ul>	
		
		
	</div>
</div>





</div>

<div style="padding-bottom: 299px"></div>
	 </div> <!-- 1st Container div ends -->

