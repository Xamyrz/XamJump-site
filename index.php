<html>

	<head>
		<meta charset="UTF-8">
        	<meta name="author" content="Kamil Michalski">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		
		<title>XamJump</title>
	</head>
		
	<body>
    
    <div id="round-button"><div id="round-button-circle">
    <a class="rounded" href="index.html">   
           <img class="picture" src="images/xj-logo.png" alt="XamJump Logo" align="center">
    </a>
        </div>
        </div>
    
    <div class="navbar">
		<nav>
			<ul>
				<li id="leftbc"><a class="active" href="index.php">Homepage</a></li>
				<li><a href="page2.php">About XamJump</a></li>
				<li><a href="page3.php">Gallery</a></li>
                		<li><a href="page4.php">FAQ</a></li>
			</ul>
		</nav>
        
	 </div>
	<div class="iframe">	
        <iframe align="middle" width="854" height="480" src="https://www.youtube.com/embed/eOV-1FEYXu8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
        
        <img id=indexpic src="images/sky.png" alt="sky" width="720" height="400">
    
        
    <footer>
          <p>&copy; Kamil Michalski</p>   
    </footer>
        
    <audio id="track" autoplay loop>
      <source src="music/minecraft.ogg" type="audio/ogg">
    </audio>
    
    <div class='unmute' onclick="document.getElementById('track').muted = !document.getElementById('track').muted;$(this).toggleClass('mute')"></div>
        
        
	</body>
    


</html>