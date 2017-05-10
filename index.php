<?php include "include/header.php";?>
	<title>Register</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/registration.js"></script>
	<script src="js/mytest.js" async></script>
    
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div class="header">
            <a href="login.php">sing in</a> | <a href="register.php">register</a>
        </div>
      
        <div class="content-box">
            <div id="slideshow">
                <div class="img-content">
                    <div class="prev" onclick="plusSlides(-1)"><a href=""><<</a></div> 
                    <div class="img">
                        <img src="images/cat.jpg" width="1170px" id="imgClickChange" onclick="currentSlide()">
                    </div>
                   <div class="next" onclick="plusSlides(1)"><a href="">>></a></div> 
                   
                   <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                </div>
               
                <script language="javascript">
                   var slideIndex = 1;
                   showSlides(slideIndex);
                   

                    function showSlides(n) {
                        var slides = document.getElementByClassName('.img'),
                            dots = document.getElementByClassName('.dot');
                      
                        for(var i=0; i<slides.length; i++){
                            slides[i].style.display = "none";
                        }
                        for(var i=0; i<dots.length; i++){
                            dots[i].className = dots[i].className.replace("active", "");
                        }
                
                    }
                    function currentSlide(){
                        showSlides(slideIndex = n);
                    }
            
                    function plusSlides(n){
                        showSlides(slideIndex += n);
                        
                    }
                </script>
            </div>
        </div>
   


    <center class="col-md-8">
        <div class="comment" style="display: none">
            <p>Leave a comment:</p>
            
            <input type="text" name="text">
            
            <button class = "btn btn-primary btn-md btn-submit" type="button" name="comment" id="register" data-tooltip="status-close">Post comment</button>
        </div>
    </center>

  </div>
</div>
    <style>
        /* slideshow*/
#slideshow{
    width: 1170px;
  /*  border: 1px solid red;*/
    position:relative;
    margin-top: 50px;
}


.img-content{
    max-height: 560px;
   
}

.img-content .prev a, .img-content .next a{
    display: block;
    background: green;
    color: #fff;
    opacity: 0.5;
    float: left;
    position:absolute;
    background-position: 0 0;
    padding: 5px;
}
    
.img-content .prev a{
    left:0;
    top: 270px;
}
.img-content .prev a:hover, .img-content .next a:hover{
    text-decoration: none;
    opacity: 1;
}
.img-content .next a{
    right:0;
    top: 270px;
}

.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
    </style>
</body>
</html>
