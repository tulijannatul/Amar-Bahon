<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <style type="text/css">

    
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);

      body { 
        font-family: 'Open Sans', 'sans-serif';
        color: #cecece;
        background-image: url('images/toy.jpg') ;
        background-size:cover;
        overflow: hidden;
      }

      .item-1, 
      .item-2, 
      .item-3 {
        position: absolute;
        display: block;
        top: 2em;
        
        width: 60%;
        
        font-size: 2em;

        animation-duration: 20s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
      }

      .item-1{
        animation-name: anim-1;
      }

      .item-2{
        animation-name: anim-2;
      }

      .item-3{
        animation-name: anim-3;
      }

      @keyframes anim-1 {
        0%, 8.3% { left: -100%; opacity: 0; }
        8.3%,25% { left: 25%; opacity: 1; }
        33.33%, 100% { left: 110%; opacity: 0; }
      }

      @keyframes anim-2 {
        0%, 33.33% { left: -100%; opacity: 0; }
        41.63%, 58.29% { left: 25%; opacity: 1; }
        66.66%, 100% { left: 110%; opacity: 0; }
      }

      @keyframes anim-3 {
        0%, 66.66% { left: -100%; opacity: 0; }
        74.96%, 91.62% { left: 25%; opacity: 1; }
        100% { left: 110%; opacity: 0; }
      }  


  @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);

.team{
    padding:40px 0;
}
h6.description{
  font-weight: bold;
  letter-spacing: 2px;
  color: black;
  border-bottom: 1px solid rgba(0, 0, 0,0.1);
  padding-bottom: 5px;
}
.profile{
 // margin-top: 25px;
}
.profile h1{
  font-weight: normal;
  font-size: 20px;
  margin:10px 0 0 0;
  color: white;
}
.profile h2{
  font-size: 14px;
  font-weight: lighter;
  margin-top: 5px;
}
.profile .img-box{
  opacity: 1;
  display: block;
  position: relative;
  width: 200px; 
}
.profile .img-box:after{
  content:"";
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.75);
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0;
}
.img-box ul{
  top: 5px;
  position: absolute;
  z-index: 2;
  bottom: 50px;
  //text-align: center;
  width: 100%;
  padding-left: 0px;
  height: 0px;
  margin:0px;
  opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
  -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}

.img-box ul i{
  font-size: 20px;
  letter-spacing: 10px;
}
.img-box ul li{
  width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #88C425;
    margin: 2px;
    padding: 5px;
  display: inline-block;
}
.img-box a{
  color:#fff;
}
.img-box:hover:after{
  opacity: 1;
}
.img-box:hover ul{
  opacity: 1;
}
.img-box ul a{
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
  border-color: #fff;
  color: #88C425;
}
a{
    color:#88C425;
}
a:hover{
    text-decoration:none;
    color:#519548;
}
i.red{
    color:#BC0213;
}


input[type=text], input[type=email], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.extra {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.content {
    padding: 20px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


</style>

 <script type="text/javascript">
    $(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
  </script>

  
</head>


      <p class="item-1">We preserve all information about your vehicle and you can check it whenever you need.</p>

        <p class="item-2">You will ne notified if we find any of your stolen vehicles along with the location where it's now.</p>

        <p class="item-3">You Can buy and sell vehicles here.</p>


<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<body>
<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">

           <br><br><br><br><br><br><br><br><br><br>

          <h6 class="description">OUR TEAM</h6>
          <div class="row pt-md">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 profile">
              <div class="img-box">
                <img src="images/panu.jpg" class="img-responsive">


                <ul class="text-center">
                   <h1>Zahid Hasan Pranto</h1><br>

                  <a href="#">facebook</a>
                  <a href="#">twitter</a>
                  <a href="#">linkedin</a>
                
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 profile">
              <div class="img-box">
                <img src="images/tuli.jpg" class="img-responsive">
                <ul class="text-center">
                <h1>Jannatul Ferdous Tuli</h1><br>

                  <a href="#">facebook</a>
                  <a href="#">twitter</a>
                  <a href="#">linkedin</a>
                </ul>
              </div>
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 profile">
              <div class="img-box">
                <img src="images/rup.jpg" class="img-responsive">
                <ul class="text-center">
                  <h1>Rupasree Dey</h1><br>

                  <a href="#">facebook</a>
                  <a href="#">twitter</a>
                  <a href="#">linkedin</a>

                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
    <div class="container">
        <div class="col-md-2 col-md-offset-6 text-center">
            <button onclick="document.getElementById('id01').style.display='block'" >Contact Us</button>  

            <div id="id01" class="modal">
  
          <form class="modal-content animate" action="about.php" method="POST">

            <div class="content">
              <label><b>Full Name</b></label>
              <input type="text" placeholder="Enter Fullname" name="username" required>

              <label><b>Email</b></label>
              <input type="email" placeholder="Enter email" name="email" required>

              <label><b>Comments</b></label>
              <input type="text" placeholder="write comments" name="comments" required>
                
              <input type="submit" class="extra" name="login" value="submit">
              
            </div>

            <div class="content" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              
            </div>
          </form>
        </div>


            
        </div>   
    </div>
</footer>

</body>
