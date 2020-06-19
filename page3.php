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
				<li><a href="index.php">Homepage</a></li>
				<li><a href="page2.php">About XamJump</a></li>
				<li><a class="active" href="page3.php">Gallery</a></li>
                		<li><a href="page4.php">FAQ</a></li>
			</ul>
		</nav>
        
	 </div>
              
	<div class="divgallery">	
        <div class="gallery">
            <a target="_blank" href="images/desert.png">
                <img src="images/desert.png" alt="desert" width="300" height="200">
            </a>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/land.png">
                <img src="images/land.png" alt="land" width="600" height="400">
            </a>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/poland.png">
                <img src="images/poland.png" alt="patriotic" width="600" height="400">
            </a>
        </div>
	</div>
    
        
    <footer>
          <p>&copy; Kamil Michalski</p>   
    </footer>
        
    <audio id="track" autoplay loop>
      <source src="music/minecraft.ogg" type="audio/ogg">
    </audio>
    
    <div class='unmute' onclick="document.getElementById('track').muted = !document.getElementById('track').muted;$(this).toggleClass('mute')"></div>
        
        
	</body>
    


</html>