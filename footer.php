



<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>JayJay Hotel</h4>
                    <p><p>This hotel is located in Ibadan and offers valet parking, a safe and express check-in and check-out. It is located just a few minutes from Times Square and is also within walking distance of the restaurants and places of interest for which the area is known.
                <br> <br>
This 2-star hotel offers a shuttle service, a 24-hour reception and meeting rooms. Those who want to maintain their exercise routine during their stay will find a fitness center at their disposal.
<br>
 </p>
                </div>              
                 
                 <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>        
                        <li><a href="introduction.php">Introduction</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="tour.php">Tour Packages</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Subscription</h4>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter email id here">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Get Notify</button>
                    </span>
                    </div>
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Designd by <a href="">Atom's Design</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>





<script src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="script.js"></script>




<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    // $("#strt_date").datepicker();
    // $("#end_date").datepicker();
    // Disabling the previous date apart from the present day and the future days in the datepicker
    $("#strt_date").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#end_date").datepicker('option', 'minDate', date);
  }
});
     $("#end_date").datepicker({
  minDate: 0,
  onSelect: function(date) {
    $("#end_date").datepicker('option', 'minDate', date);
  }
});


</script>


<!-- custom script -->
<script src="assets/script.js"></script>










</body>
</html>





