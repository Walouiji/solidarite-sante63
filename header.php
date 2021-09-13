<!-- JQuery + Other js libs -->
<script src="/document.php?modulepart=medias&file=js/accueil/extlib.min.js"></script>


<div class="dolcontenteditable dolsticky" contenteditable="true"><div class="div-page-head">
      <header class="page-head">
        <div class="rd-navbar-wrap" style="height: 106px;">
          <nav class="rd-navbar rd-navbar-corporate-dark rd-navbar-original rd-navbar-static" 
                data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" 
                data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              
              <div class="rd-navbar-group rd-navbar-search-wrap toggle-original-elements">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-custom-toggle=".rd-navbar-nav-wrap" data-custom-toggle-disable-on-blur="true"><span></span></button><a class="rd-navbar-brand brand" href="home.php">
                      <img src="/viewimage.php?modulepart=mycompany&file=logos/<?php echo getImageFileNameForSize($mysoc->logo_squarred ? $mysoc->logo_squarred : $mysoc->logo, '_small') ?>" alt="" height="34"></a>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <div class="rd-navbar-search toggle-original-elements">
                      <form class="rd-search" action="search.php" method="POST" data-search-live="rd-search-results-live">
                        <input type="hidden" name="token" value="<?php echo newToken(); ?>" />
                        <div class="form-wrap">
                          <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off" placeholder="Search...">
                          <div class="rd-search-results-live cleared" id="rd-search-results-live"></div>
                        </div>
                        <button class="rd-search-submit buttonwithnoborder" type="submit"><span class="icon icon-xs icon-dusty-gray fa fa-search"></span></button>
                      </form>
                      <button class="buttonwithnoborder" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap">
                          <span class="icon icon-xs icon-dusty-gray fa fa-search"></span>
                      </button>
                    </div>
                    
                    <!-- Tree with menu -->
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="/">Accueil</a></li>
                      <li><a href="faq.php">FAQ</a></li>
                      <li><a href="contact.php">Contacts</a></li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
</div></div>
