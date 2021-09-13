<div class="page">http://localhost/dolibarr/website/index.php?website=accueil&pageid=47&action=editsource

    <?php includeContainer('header'); ?>

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/blog/background_sunset.jpg'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s">Nos articles</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>


        <section id="sectionnews" contenteditable="true" class="section-50 section-md-50 section-md-bottom-50">
            <div><br><div class="text-align: center">
            <!--<h2>The latest news...</h2><br><br><br> -->
            <?php 
            $weblangs->load("main");
            $fuser = new User($db);
            $arrayofblogs = $websitepage->fetchAll($website->id, 'DESC', 'date_creation', 5, 0, array('type_container'=>'blogpost', 'status'=>1, 'lang'=>'null,'.$websitepage->lang));
            foreach($arrayofblogs as $blog)
            {
                print '<div class="row justify-content-sm-center row-40">';
                print '<div class="container blog-box d-xl-inline-block margin-lr-30" style="padding: 20px; box-shadow: -1px 0px 10px 0px rgba(65, 65, 65, 0.12); transition: .3s all ease;">';
                            print '<a class="centpercent" href="'.$blog->pageurl.'.php">';
                            print '<div class="post-boxed-img-wrap"><img src="'.($blog->image ? 'viewimage.php?modulepart=medias&file='.str_replace('template-corporate', $website->ref, $blog->image) : 'medias/image/'.$website->ref.'/calendar.svg"').'" alt="" width="120"></div>';
                            print '<div class="post-boxed-caption">';
                            print '<div class="post-boxed-title font-weight-bold">'.$blog->title.'</div>';
                            print '<ul class="list-inline list-inline-dashed text-uppercase">';
                            print '<li>'.dol_print_date($blog->date_creation, 'daytext', 'tzserver', $weblangs).'</li>';
                            $fuser->fetch($blog->fk_user_creat);
                            print '<li><span>by<span> <span class="text-primary">'.$fuser->firstname.'</span></span></li>';
                            print '</ul>';
                            print '<span class="nohover">'.$blog->description.'</span>';
                            print '</div>';
                            //includeContainer($blog->pageurl);
                            print '</a>';
                print '</div>';
                print '</div>';
            }
            ?>
            </div></div>
        </section>
        <section>
            <?php  
	$bdd = new PDO('mysql:host=localhost;dbname=dolibarr;charset=utf8', 'root', '');

	$list = $bdd->query('SELECT * FROM articles');

	while ($data = $list->fetch()) {
		?>
		<h3> <?php echo $data["title"]; ?> </h3>
		<p> <?php echo $data["content"]; ?> </p> <br>
	<?php
	}
	$list->closeCursor();
?>
        </section>

    <br><br>

    <?php includeContainer('footer'); ?>

</div>
