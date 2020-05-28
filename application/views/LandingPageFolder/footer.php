  <!-- Site footer -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 #map {
   width: 100%;
   height: 100px;
   background-color: grey;
 }

  </style>
  </head>
  
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><a href="https://www.facebook.com/malesidotravelandtours/" class=""><b>Malesido Travel & Tours</b></a>
            </p> <p>Airline Ticketing Bus & Ferry Bookings Visa Processing Tour Packages Hotel Bookings
            </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Location</h6>
            <a href="https://www.google.com/maps/dir/14.6747828,121.0195902/14.3244899,120.9218903/@14.5009214,120.8349848,11z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0"><p>Mistral Plains Brgy. San Francisco 4107 General Trias, Cavite</p></a>

    <div class="container1">
         <img src="assets/img/loc.png" style="max-width:100%;cursor:pointer" 
            onclick="onClick(this)" class="modal-hover-opacity">
      </div>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Contacts</h6>
            <ul class="footer-links">
              <li>+6399-5246-9630 (Globe/TM)</li>
              <li>+6390-5328-6447 (Globe/TM) </li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
         
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/malesidotravelandtours/"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google" href="malesidotravels@gmail.com"><i class="fa fa-google "></i></a></li>
            
            </ul>
          </div>
        </div>
      </div>
</footer>
</html>

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
<!-- for testimonial -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script srcsrc="assets/js/testimonial.js"></script>