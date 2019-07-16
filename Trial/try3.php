<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <style type="text/css">
  body { 
  font-family: 'Open Sans', 'sans-serif';
  color: #cecece;
  background: #222;
  overflow: hidden;
}

  #home{

@import url(https://fonts.googleapis.com/css?family=Open+Sans:600);


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
}

}

#about{
  @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);

.team{
    padding:75px 0;
}
h6.description{
  font-weight: bold;
  letter-spacing: 2px;
  color: #999;
  border-bottom: 1px solid rgba(0, 0, 0,0.1);
  padding-bottom: 5px;
}
.profile{
  margin-top: 25px;
}
.profile h1{
  font-weight: normal;
  font-size: 20px;
  margin:10px 0 0 0;
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
  position: absolute;
  z-index: 2;
  bottom: 50px;
  text-align: center;
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



  <section id="home">
    <div>
      <p class="item-1">This is your last chance. After this, there is no turning back.</p>

      <p class="item-2">You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe.</p>

      <p class="item-3">You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>

    </div>
  </section>

  <section id="about">
   <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description">OUR TEAM</h6>
          <div class="row pt-md">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 profile">
              <div class="img-box">
                <img src="http://nabeel.co.in/files/bootsnipp/team/1.jpg" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Marrie Doi</h1>
              <h2>Co-founder/ Operations</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 profile">
              <div class="img-box">
                <img src="http://nabeel.co.in/files/bootsnipp/team/2.jpg" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Christopher Di</h1>
              <h2>Co-founder/ Projects</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 profile">
              <div class="img-box">
                <img src="http://nabeel.co.in/files/bootsnipp/team/3.jpg" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Heather H</h1>
              <h2>Co-founder/ Marketing</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
 
  
          </div>
        </div>
      </div>
    </div>
  </div>


<footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
            
            <h6>Coded with <i class="fa fa-heart red"></i> by <a href="http://www.nabeel.co.in" target="_blank">Nabeel Kondotty</a></h6>
        </div>   
    </div>
</footer> 
    
  </section>
  
