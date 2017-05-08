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
                    <div class="prev"></div> 
                    <img src="images/cat.jpg" width="1170px" id="imgClickChange" onclick="changeImage()">
                   <div class="next"></div> 
                </div>
               
                <script language="javascript">
                    var imgs = ["images/kitty.jpg", "images/kotenok.jpg"];
                    function changeImage(dir) {
                        var imgElement = document.getElementById('imgClickAndChange'),
                      
                
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
.img-content .prev:before{
    content: "<<";
    display: block;
  /*  border: 1px solid green;*/
    float: left;
    position:absolute;
    left:0;
    top: 270px;
    width: 30px;
    height: 30px;
    padding: 5px;
}
.img-content .prev:before:hover, .img-content .next:before:hover{
    color:red;

}
.img-content .next:before{
    content: ">>";
    display: block;
 /*   border: 1px solid green;*/
    float: left;
    position:absolute;
    right:0;
    top: 270px;
    width: 30px;
    height: 30px;
    padding: 5px;
}
.img-content span{}
    </style>
</body>
</html>
