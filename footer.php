<!-- At least 2 div required to avoid ckeditor to insert a p -->
<div class="dolcontenteditable" contenteditable="true">      

    <footer class="page-foot bg-cape-cod context-dark">
        <section id="sectionfooter" contenteditable="true" class="section-40">
          <div class="container">
            <div class="row justify-content-sm-center">
              <div class="col-sm-9 col-md-12 col-xl-12">
                <div class="row row-50">

                  <div class="col-md-6 col-lg-4 col-xl-4">
                    <h4 class="text-small-16 text-uppercase footer-title">Liens rapides</h4>
                    <div class="row" style="padding-right: 20px">
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="home.php">Accueil</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="contact.php">Contacts</a></li>
                        </ul>
                        <?php // echo $website->componentSelectLang('auto', $weblangs, 'margin-top-10'); ?>
                      </div>
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="blogs.php">Articles</a></li>
                        </ul>
                        <?php // echo $website->componentSelectLang('auto', $weblangs, 'margin-top-10'); ?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6 col-lg-4 col-xl-4">
                    <h4 class="text-small-16 text-uppercase footer-title">Nous Contacter</h4>
                    <address class="contact-info text-left">
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><span class="icon text-white fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-white" href="callto:<?php echo $mysoc->phone; ?>"><?php echo $mysoc->phone; ?></a></div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-md">
                        <div class="unit-left"><span class="icon text-white fa fa-address-card-o"></span></div>
                        <div class="unit-body"><span class="link-white"><?php echo $mysoc->getFullAddress(1, '<br>', 1); ?></span></div>
                      </div>
                    </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="sectionfooterdolibarr" contenteditable="true" class="footerdolibarr">
            <div class="center">
            Website generated and powered by <a href="https://www.dolibarr.org" target="CRM and ERP for freelances, association and companies">Dolibarr ERP & CRM</a>
            </div>
        </section>
        
      </footer>
      
      <!--<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>-->

</div>


<script src="/document.php?modulepart=medias&file=js/accueil/script.js"></script>
