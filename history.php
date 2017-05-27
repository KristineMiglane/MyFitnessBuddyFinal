<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-image: url(images/black.jpg);
}
input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
    }
button {    
    background-color: pink;
    width: 100%;    
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
    
button:hover {
    background-color: plum;
    }
</style>

</head>
<body>
<div class="container">
  <header>
    <div class="primary_header0">
      <h1 class="title">Find A Buddy</h1>
    </div>
    <nav class="secondary_header" id="menu">
		<div class="social">
                    <p class="social_icon"><a href="mainMenu.html"><img src="images/mainmenu.png" width="250" alt="" class="thumbnail"/></a></p>
			<p class="social_icon"><a href="nutrition.html"><img src="images/picture2.jpg" width="250" alt="" class="thumbnail"/></a></p>
			<p class="social_icon"><a href="cardio.html"><img src="images/cardio.jpg" width="250" alt="" class="thumbnail"/></a></p>
                        <p class="social_icon"><a href="history.php"><img src="images/buddy.png" width="250" alt="" class="thumbnail"/></a></p>
		</div>
    </nav>
  </header>
  <section>
    <h2 class="noDisplay">Main Content</h2>
	<div style="background-image: url('images/b.jpg')">            
    <article class="left_article">
        <div><body>             
                
                <form  method="post" action="search.php"  id="searchform"> 
                    <div><input  type="text" name="search" placeholder="Type your buddy's name here..">
                    <button  type="submit" name="submit" value="Find a buddy">Let's find a buddy!</div>
                
	    </form> 
	  </body>           
        </div>
        <p>
            <img src="images/duck.gif" height=10% width=20% align="center"/>
        </p>
	
		
    </article>
	</div>
    <footer class="secondary_header footer">
    <h3 class="title">Copyright 	&copy; 2016/2017 Final Year Project. All Rights Reserved</h3>
    </footer>
  </section>  
</div>

</body>
</html>