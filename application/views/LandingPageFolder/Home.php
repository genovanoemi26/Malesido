<style>
   .btn-header {
   display: inline-block;
   padding: 50px 30px;
   font-size: 24px;
   cursor: pointer;
   text-align: center;
   text-decoration: none;
   outline: none;
   color: #fff;
   background-color: #2b2323;
   border: none;
   border-radius: 15px;
   box-shadow: 0 9px #999;
   margin: 20px;
   }
   .btn-header:hover {background-color: #8e8484}
   .btn-header:active {
   background-color: #3e8e41;
   box-shadow: 0 5px #666;
   transform: translateY(4px);
   }
   .marg{
   padding: 7px 30px;
   }
   /* for modal of Promos */
   .modal {
   z-index:1;
   display:none;
   padding-top:10px;
   position:fixed;
   left:0;
   top:0;
   width:100%;
   height:100%;
   overflow:auto;
   background-color:rgb(0,0,0);
   background-color:rgba(0,0,0,0.8)
   }
   .modal-content{
   margin: auto;
   display: block;
   max-width: 80%;
   }
   .modal-hover-opacity {
   opacity:1;
   filter:alpha(opacity=100);
   -webkit-backface-visibility:hidden
   }
   .modal-hover-opacity:hover {
   opacity:0.60;
   filter:alpha(opacity=60);
   -webkit-backface-visibility:hidden
   }
   .close {
   text-decoration:none;float:right;font-size:24px;font-weight:bold;color:white
   }
   .container1 {
   width:210px;
   display:inline-block;
   }
   .modal-content, #caption {    
   -webkit-animation-name: zoom;
   -webkit-animation-duration: 0.6s;
   animation-name: zoom;
   animation-duration: 0.6s;
   }
   .center{
   text-align:center;
   }
   @-webkit-keyframes zoom {
   from {-webkit-transform:scale(0)} 
   to {-webkit-transform:scale(1)}
   }
   @keyframes zoom {
   from {transform:scale(0)} 
   to {transform:scale(1)}
   }
</style>
<!-- Carousel -->
<div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="assets/img/batanes.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="assets/img/bohol.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="assets/img/coron.jpg" alt="Third slide">
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>
<!-- // Carousel -->
<div class="w3-container w3-padding-32" id="Promos">
   <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Promos</h3>
   <!-- <div class="marg">
      <a class="btn-header" href="#"><img src="assets/img/promo1.jpg" /></a>
      
      <a class="btn-header" href="#"><img src="assets/img/promo2.jpg" /></a>
      
      </div> -->
   <div class="center">
      <div class="container1">
         <img src="assets/img/promo1.jpg" style="max-width:100%;cursor:pointer"
            onclick="onClick(this)" class="modal-hover-opacity">
      </div>
      <div class="container1">
         <img src="assets/img/promo1.jpg" style="max-width:100%;cursor:pointer" 
            onclick="onClick(this)" class="modal-hover-opacity">
      </div>
      <div class="container1">
         <img src="assets/img/promo1.jpg" style="max-width:100%;cursor:pointer" 
            onclick="onClick(this)" class="modal-hover-opacity">
      </div>
      <div class="container1">
         <img src="assets/img/promo1.jpg" style="max-width:100%;cursor:pointer" 
            onclick="onClick(this)" class="modal-hover-opacity">
      </div>
      <div class="container1">
         <img src="assets/img/promo1.jpg" style="max-width:100%;cursor:pointer" 
            onclick="onClick(this)" class="modal-hover-opacity">
      </div>
      <div class="container1">
         <img src="assets/img/promo1.jpg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
      </div>
      <div id="modal01" class="modal" onclick="this.style.display='none'">
         <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
         <div class="modal-content">
            <br>
            <img id="img01" style="max-width:auto">
            <br>
            <p></p>
         </div>
      </div>
   </div>
</div>
<div class="w3-container w3-padding-32" id="Promos">
   <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Testimonials</h3>
   <div class="Testimo">
      <center> <img id="testi" src="assets/img/revs.png"/></center>
   </div>
</div>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<script type="text/javascript">
   function onClick(element) {
   document.getElementById("img01").src = element.src;
   document.getElementById("modal01").style.display = "block";
   }
</script>