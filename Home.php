<div class="page">
        
    <?php includeContainer('header'); ?>
        
        
      <!-- top images -->
      <section id="sectionimage" contenteditable="true">
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black swiper-container-horizontal" data-loop="false" data-autoplay="5500" data-swipe="true" data-simulate-touch="true">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" data-slide-bg="medias/puy-de-dome.jpg" style="background-image: url('medias/image/accueil/background_rough-horn.jpg'); background-size: cover; width: 1905px;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s"><span class="text-thin">Solidarité Santé 63</span>
                      </div>
                      
                      <div class="button-block fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="550s"><a class="btn btn-primary maincolorbisbackground" href="contact.php">Nous Contacter</a></div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </section>

<!--<script>
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline( 'sectionimage' , { toolbar: ['Bold','Italic'] } );
</script>
-->

      <!-- News -->
      <section id="sectionnews" contenteditable="true" class="section-50 section-md-90 section-md-bottom-100">
        <div class="container text-center">
          <h1>Derniers <span class="text-thin">articles</span></h1>
          <div class="row justify-content-sm-center row-40">
            <?php 
            $MAXNEWS = 3;
            $arrayofblogs = $websitepage->fetchAll($website->id, 'DESC', 'date_creation', $MAXNEWS, 0, array('type_container'=>'blogpost', 'status'=>1, 'lang'=>'null,'.$websitepage->lang));
            foreach($arrayofblogs as $blog)
            {
                ?>
                <div class="col-sm-8 col-md-7 col-lg-4">
                  <div class="post-boxed d-xl-inline-block">
                    <a href="<?php echo $blog->pageurl ?>.php">
                    <div class="post-boxed-img-wrap"><img src="<?php echo ($blog->image ? 'viewimage.php?modulepart=medias&file='.str_replace('template-corporate', $website->ref, $blog->image) : 'medias/image/'.$website->ref.'/calendar.svg"'); ?>" alt="" height="80"></div>
                    <div class="post-boxed-caption">
                      <div class="post-boxed-title font-weight-bold"><?php echo $blog->title ?></div>
                      <ul class="list-inline list-inline-dashed text-uppercase">
                        <li><?php $weblangs->load("main"); echo dol_print_date($blog->date_creation, 'daytext', 'tzuser', $weblangs); ?></li>
                        <li><span>by<span> <span class="text-primary"><?php echo $blog->author_alias ?></span></span></li>
                      </ul>
                    </div>
                    </a>
                  </div>
                </div>
                <?php 
            }
            ?>
 
          </div>
        </div>
      </section>
      
    <?php includeContainer('footer'); ?>


</div>

<?php
    $db = new PDO('mysql:host=localhost;dbname=dolibarr;charset=utf8', 'dolibarrmysql', 'R00t');
    $db->query('CREATE TABLE IF NOT EXIST `articles` (
            `title` varchar(64) NOT NULL,
            `content` text(255) NOT NULL
        )');
?>
