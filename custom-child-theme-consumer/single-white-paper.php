<?php 
/**
 * @template - Single White Post Template
 */
?>
<?php get_header();?>

<style>
   
        /** New */
        /**************************************
=common
=elements
*************************************/
div {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

a {
  text-decoration: none;
}

a[href^="tel"] {
  color: inherit;
}

ul > li {
  margin-bottom: 10px;
}
.the-button {
    display: block;
    min-width: 195px;
    max-width:350px;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: #000;
    border: 2px solid #000;
    text-align: left;
    padding-left: 1rem;
    font-weight: bold;
    color: #ffffff;
    -webkit-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}

/*************************************
=objects
*************************************/
.container {
  width: 100%;
  max-width: 1280px;
  margin: auto;
  padding-left: 64px;
  padding-right: 64px;
}
em{
  color:#353c41;
}

@media (max-width: 980px) {
  .container {
    width: 100%;
    padding-left: 30px;
    padding-right: 30px;
  }
  .et-db #et-boc .et-l .et_pb_fullwidth_header{
    background-position:70%;
  }
  .author-date-audio{
    font-size: 16px;
  }

}

.back-section {
  margin-top: 20px;
  margin-bottom: 20px;
}

.back-section > a {
  color: #105caa;
}

.back-section .back-arrow {
  position: relative;
  top: -2px;
  display: inline-block;
  margin-right: 10px;
  letter-spacing: -1px;
  font-size: 10px;
}

.vc-main-content {
  padding-top: 70px;
  padding-bottom: 50px;
}

.vc-wrapper {
  width: 90%;
  max-width: 800px;
  margin: auto;
}

.vc-section {
  padding: 20px 0;
}

.vc-block-content h2, .vc-block-content h3 {
  margin-bottom: 20px;
}

.vc-block-content .title {
  line-height: 1.1;
  font-size: 32px;
}

.vc-select {
  display: inline-block;
  min-width: 300px;
  padding: 0 15px;
  border: 1px solid #353c41;
}

.vc-select select {
  display: block;
  width: 100%;
  padding: 15px 0;
  border: none;
  outline: 0;
}

.vc-no-bullets {
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

/*************************************
=margins
*************************************/
.mb-40 {
  margin-bottom: 40px;
}

/*************************************
=button
*************************************/
.vc-btn {
  display: inline-block;
  min-width: 195px;
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #ff0000;
  border: 2px solid #ff0000;
  text-align: center;
  font-weight: bold;
  color: #ffffff;
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.vc-btn:hover {
  background-color: #cc0000;
  border-color: #cc0000;
  color: #ffffff;
}

.vc-btn.vc-btn--block {
  display: block;
  margin-bottom: 20px;
}

.vc-btnDefault {
  background-color: transparent;
  border-color: #353c41;
  color: #353c41;
}

.vc-btnDefault:hover {
  background-color: #cc0000;
  border-color: #cc0000;
  color: #ffffff;
}

.vc-btnOutline {
  background-color: transparent;
  border-color: #105caa;
  color: #105caa;
}

.vc-btnOutline:hover {
  background-color: #105caa;
  border-color: #105caa;
  color: #ffffff;
}

/*************************************
=text
*************************************/
.vc-title {
  margin: 0 0 20px;
  font-size: 25px;
  font-weight: bold;
}

.vc-text-center {
  text-align: center !important;
}

/*************************************
=modules
/
/
=modules blue banner
*************************************/
.vc-blue-banner {
  margin-bottom: 40px;
  padding: 70px 0;
  background-color: #f3f8fa;
}

.vc-blue-banner .title {
  line-height: 1.1;
  font-size: 32px;
  color: #105caa;
}

.vc-blue-banner ul > li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  margin-bottom: 20px;
  font-size: 20px;
}

.vc-blue-banner ul > li > span:first-of-type {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 200px;
}
.container.career{
  padding-bottom: 50px;
}
.vc-section ul li ul{
  margin-top: 10px ;
}
.vc-section ul{
  padding-left: 30px ;
}
.meta-desc {
    display: flex;
    align-items:center;
}
.meta-desc .linkedin-icon{
 max-width: 42px;
 margin-bottom: 0;
 margin-right: 1rem;

}
.meta-desc .linkedin-icon img{

 
  object-fit:cover;
  width:auto;
  height:100%;
}
.meta-desc{
  font-size: 18px;
}
.meta-desc span{
  font-weight: bold;
}
.vc-section h1{
  line-height: 1.2;
}
.vc-section h4{
  font-size: 23px;
  line-height: 1.5;
}
.vc-section p{
  font-size: 18px;
  line-height: 1.5;
}
.author-date-audio{
  display: flex;
  align-items:center
}
#pause{
 
  cursor: pointer;
}
.play-pause{
  height: 32px;
}
#pause .hidden{
  display:none;
}
#play{
  cursor: pointer;
}
#play .hidden{
  display:none;
}
.audio.play{
  padding-left: .25rem;
}
audio{
height:0;
width:0;
}
.date{
  display: flex;
  align-items:center;
}
.minute-read,.play-label{
  font-weight:normal !important;
}
figure{
  margin-bottom: 0;
}
.item-image {
  position:relative;
}
.item-lite::after{
 position:absolute;
 display:flex;
 align-items:center;
 justify-content: center;
 top:0px;
 right:0;
 content:'Lite';
 color: #FFF;
 background-color:#000;
 padding: 0.5rem 1rem;
    text-transform: uppercase;
    font-weight: 900;
    font-size: 20px;

}
</style>
  
   
    <div class="container career" style="max-width:900px !important;padding-top:5rem;">
        <?php if(get_the_ID()!='11250'):?>
          <div class="back-section">
          <a href="<?= get_site_url();?>/corporate-relocation/resources/news/" class=""><span>&lsaquo;</span> Back to white paper archives</a>
          </div>
            <section class="vc-section">
              <h1><?php the_title();?></h1>
            </section>
            <section class="vc-section">
              <div class="meta-desc">
                <!-- <figure class='linkedin-icon'>
                  <img src="<?php echo get_stylesheet_directory_uri() ;?>/img/linkedin-icon.png" alt="Linkedin">
                </figure> -->
                <div class="author-date-audio">
                  <div class="author-date">
                 
                    <!-- <div class="author">By <span>Santa Fe Relocation</span> -->
                    <?php if (get_field('mobility_author')):?>
                      <div class="author">By <span><?= get_field('mobility_author');?></span>
										<?php else:?>
                      <div class="author">By <span>Santa Fe Relocation</span>
                    <?php endif;?>
                    </div>
                    <div class="date">Posted <?= get_post_time("j M Y");?>
                    <?php if(get_field('minute_read')):?>
                      &bull;&nbsp;<span class='minute-read'><?php the_field('minute_read');?></span>&nbsp;
                    <?php endif;?> 
                    </div>
                  </div>
                
                    
                    
                
    
                </div>
              </div>
              <!-- <div class="vc-section">
            <?php echo do_shortcode('[addtoany]');?>
          </div> -->
            </section>
            <?php if(has_post_thumbnail() || get_field('list_image') ):?>
              <div class="vc-section">
                <figure class='item-image'>

                  <?php
                  //the_post_thumbnail();
                  $list_image = get_field('list_image');
                 
                  the_post_thumbnail('full', array('class' => 'img-responsive'));
                  ?>
                  <!-- <img src="<?= $list_image;?>" alt=""> -->
                </figure>
              </div>
              
            <?php endif;?>
          
        <?php endif;?>
       

        <div class="vc-section">
          <?php the_content();?>
          <?php if(get_the_ID()!='11250'):?>
          <?php echo do_shortcode('[addtoany]');?>
          <?php endif;?>
        </div>
       
        <?php if(get_the_ID()!='11250'):?>
        <a href="<?= get_site_url();?>/corporate-relocation/resources/news/" class=""><span>&lsaquo;</span> Back to white paper archives</a>

        <?php  //get_template_part( '/parts/blog-email', 'form' );?>
        <div class="subscription">
								<h2>Sign up now to get all the latest updates!</h2>
								<a href="https://www.santaferelo.com/en/keep-me-informed/" class="the-button">Subscribe</a>
							</div>
        <?php endif;?>

    </div>
<?php get_footer();?>