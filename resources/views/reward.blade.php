@include('header')
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<style>
    /* General */
h1,h2,h3,h4,h5,h6{cursor:pointer;}

/* Intro */

.intro{
  width:100%;
  height:30px;
}
.intro h1{
  font-family:'Oswald', sans-serif;
  letter-spacing:2px;
  font-weight:normal;
  font-size:14px;
  color:#fff;
  text-align:center;
  margin-top:10px;
}
.intro a{
  color:#fff;
  font-weight:bold;
  letter-spacing:0;
}
.intro img{
  width:20px;
  heght:20px;
  margin-left:5px;
  margin-right:5px;
  position:relative;
  top:5px;
}

/* Body */
body{
  font-family: arial, verdana;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* background:#e74c3c; */
}
#container{
  width:80%;
  min-width:1100px;
  min-height:336px;
  margin:0 auto 0 auto;
}
.pricetab{
  width:20%;
  min-width:220px;
  background: linear-gradient(#555, #444);
  float:left;
  margin-top:.2%;
  box-shadow:1px 1px 5px rgba(0, 0, 0, .5);
}
.pricetabmid{
  width:20%;
  min-width:220px;
  background: linear-gradient( #00c8e6, #00c8e6);
  float:left;
  box-shadow:0 0  15px rgba(0, 0, 0, 1);
  position:relative;
}
.priceheader{
  width:100%;
  height:60px;
  background-image: -o-linear-gradient(bottom ,#444 , #555); 
  background-image: -webkit-linear-gradient(bottom ,#444 , #555);
  background-image: -o-linear-gradient(bottom ,#444 , #555); 
  background-image: -moz-linear-gradient(bottom ,#444 , #555); 
  background-image: linear-gradient(to bottom , #444 , #555); 
  box-shadow:0 2px 12px rgba(0, 0, 0, .5);
}
.price{
  width:120px;
  height:120px;
  border-radius:50%;
  /* border:1px solid #00c8e6; */
  margin:5% auto 0 auto;
  text-align:center;
}
.pricemid{
  width:120px;
  height:120px;
  border-radius:50%;
  /* border:1px solid #444; */
  margin:5% auto 0 auto;
  text-align:center;
}
.infos{
  margin-top:10%;
}
.pricefooter{
  width:100%;
  height:50px;
  margin-top:10%;
  background:#333; 
}
.pricefootermid{
  width:100%;
  height:50px;
  margin-top:10%;
  background:#fe9040; 
}
.author{
  width:10%;
  min-width:150px;
  height:40px;
  background:rgba(0, 0, 0, .5);
  overflow:hidden;
  clear:both;
  float:right;
  position:fixed;
  bottom:0;
  right:0;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
.author:hover{
  background:rgba(0, 0, 0, .8);
}
.author:hover .credit{
  margin-left:10%;
}
/* Typo */ 
.title{
  font-family:arial;
  color:#00c8e6;
  font-size:38px;
  font-weight:normal;
  text-align:center;
  text-transform:uppercase;
  text-shadow: 1px 2px 5px rgba(0,0,5,0.2);
  margin:auto;
}
h1{
  font-size:18px;
  color:#fff;
  text-align:center;
  line-height:3;
}
h2{
  text-align: center;
  font-size: 26px;
  color: #fff;
  margin-top: 44px;
}
sub{
  text-transform: uppercase;
  font-size: 14px;
  font-weight: bold;
}
h3{
  font-size:14px;
  font-weight:normal;
  text-align:center;
  color:#fff;
  line-height:1;
}
.button a{
  color:#fff;
  font-size:14px;
  font-weight:bold;
  text-decoration:none;
  line-height:3;
}
.buttonmid a{
  color:#fff;
  font-size:14px;
  font-weight:bold;
  text-decoration:none;
  line-height:3;
}
.credit{
  font-family:arial;
  color:#fff;
  font-size:16px;
  font-weight:normal;
  text-align:left;
  text-shadow: 1px 2px 5px rgba(0,0,5,0.2);
  margin-left:5%;
  line-height:1.3;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
/* Buttons */ 
.button{
  width:50%;
  height:50px;
  margin:0 auto 0 auto;
  background:#00c8e6;
  text-align:center; 
  cursor:pointer;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
.button:hover{
  width:60%;
}
.buttonmid{
  width:50%;
  height:50px;
  margin:0 auto 0 auto;
  background:#333;
  text-align:center; 
  cursor:pointer;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
.buttonmid:hover{
  width:60%;
}

</style>
<body>
  <h1 class="title" style="margin-top:100px">Reward</h1>
  <div id="container">
    <div class="pricetab">
      <h1>T-Shirt</h1>
  <h1 style="visibility:hidden">Or 15000 Cash</h1>
      <div class="price"> 
      <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 10</h3>
      </div>
      <!-- <div class="pricefooter">
        <div class="button">
          <a href="#"> Get started </a>
        </div>
      </div> -->
    </div>
    <div class="pricetab">
      <h1>Titan-Watch</h1>
      <h1 style="visibility:hidden">Or 15000 Cash</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 100</h3>
      </div>
      <!-- <div class="pricefooter">
        <div class="button">
          <a href="#"> Get started </a>
        </div>
      </div> -->
    </div>
    <div class="pricetabmid">
      <h1>Smart Phone</h1>
      <h1 style="visibility:hidden">Or 15000 Cash</h1>
      <div class="pricemid"> 
      <img src="image/present1.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 500</h3>
      </div>
      <!-- <div class="pricefootermid">
        <div class="buttonmid">
          <a href="#"> Get started </a>
        </div>
      </div> -->
    </div>
    <div class="pricetab">
      <h1>Smart Phone</h1>
      <h1>Or 15000 Cash</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 750</h3>
      </div>
      <!-- <div class="pricefooter">
        <div class="button">
          <a href="#"> Get started </a>
        </div>
      </div> -->
    </div>
    <div class="pricetab">
      <h1>Bike DP</h1>
      <h1>Or 20000 Cash</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 1000</h3>
      </div>
      <!-- <div class="pricefooter">
        <div class="button">
          <a href="#"> Get started </a>
        </div>
      </div> -->
    </div>
  </div>

  <div id="container">
    <div class="pricetab">
      <h1>Pulser</h1>
      <h1>Or 80000 Cash</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 10000</h3>
      </div>
      <!-- <div class="pricefooter">
        <div class="button">
          <a href="#"> Get started </a>
        </div>
      </div> -->
    </div>
    <div class="pricetab">
      <h1>Alto car DP</h1>
      <h1>Or 1.5 Lakh</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 100000</h3>
      </div>
      
    </div>
    <div class="pricetabmid">
      <h1>Car</h1>
      <h1>Or 8 Lakh Cash</h1>
      <div class="pricemid"> 
        <img src="image/present1.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 1000000</h3>
      </div>
     
    </div>
    <div class="pricetab">
      <h1>2BHK</h1>
      <h1>Or 25 Lakh Cash</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 10000000</h3>
      </div>
     
    </div>
    <div class="pricetab">
      <h1>4BHK</h1>
      <h1>Or 1 crore cash</h1>
      <div class="price"> 
        <img src="image/present.png" alt="">
      </div>
      <div class="infos">
        <h3> Team Size - 10000000000</h3>
      </div>
    </div>
  </div>
</body>
@include('footer')
