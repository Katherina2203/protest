<?php include "include/header.php";?>
	<title>Register</title>

        <script src="/protest/js/slideshow.js" defer></script>
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
                    <a class="prev" onclick="plusSlides(-1)"><<</a> 
                        <div class="img">
                            <img src="images/cat.jpg" width="1170px" height="672px" onclick="currentSlide()">
                        </div>
                        <div class="img">
                            <img src="images/kitty.jpg" width="1170px" height="672px" onclick="currentSlide()">
                        </div>
                        <div class="img">
                            <img src="images/kotenok.jpg" width="1170px" height="672px" onclick="currentSlide()">
                        </div>
                        <div class="img">
                            <img src="images/kotyata_s_rynka.jpg" width="1170px" height="672px" onclick="currentSlide()">
                        </div>
                    <a class="next" onclick="plusSlides(1)">>></a> 
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span> 
                    </div>
                </div>
                
              
            </div>
        </div>
        <script lang="javascript">
            var slideIndex = 1;
                    showSlides(slideIndex);
                    
                    function showSlides(n) {
                        var slides = document.getElementsByClassName("img"),
                            dots = document.getElementsByClassName("dot");
                      
                      if (n > slides.length) {slideIndex = 1} 
                      if (n < 1) {slideIndex = slides.length}
                        for (var i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none"; 
                        }
                        for (var i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block"; 
                        dots[slideIndex-1].className += " active";
                    }
                    
                    function currentSlide(){
                        showSlides(slideIndex = n);
                    }
            
                    function plusSlides(n){
                        showSlides(slideIndex += n);
                    }
        </script>
        <style>
                    /*slideshow */
        #slideshow{
            width: 1170px;
            position:relative;
            margin-top: 50px;
        }

        .img{display:none;}

        .img-content .prev, .img-content .next{
            display: block;
            background: green;
            color: #fff;
            opacity: 0.5;
            float: left;
            position:absolute;
            background-position: 0 0;
            padding: 5px;
        }

        .img-content .prev{
            left:0;
            top: 270px;
        }
        .img-content .prev:hover, .img-content .next:hover{
            text-decoration: none;
            opacity: 1;
        }
        .img-content .next{
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

    <center class="col-md-8">
        <div class="comment" style="display: none">
            <p>Leave a comment:</p>
            
            <input type="text" name="text">
            
            <button class = "btn btn-primary btn-md btn-submit" type="button" name="comment" id="register" data-tooltip="status-close">Post comment</button>
        </div>
    </center>

  </div>
</div>
   
</body>
</html>
