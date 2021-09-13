<div class="page">

    <?php includeContainer('header'); ?>

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/accueil/background_sunset.jpg'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s">Contacts</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>


        <section id="sectionfooterdolibarr" contenteditable="true" class="footerdolibarr">
            <div style="margin: 50px; text-align: center">
<h2>Nous contacter:</h2> <br> <br> 
<span class="icon text-white fa fa-phone"></span> <?php echo $mysoc->phone; ?>
            </div>
        </section>


        <!-- Google MAPS -->
        <center><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo urlencode($mysoc->getFullAddress()); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div></center>

    <br><br><br>

    <?php includeContainer('footer'); ?>

</div>
    
