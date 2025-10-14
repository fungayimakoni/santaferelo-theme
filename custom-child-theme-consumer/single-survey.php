<?php 
/**
 * @template - Single Career Post Template
 */
?>
<?php if(get_field('survey_type')=='form'):?>
  <?php get_header('form');?>
  <?php else:?>
  <?php get_header();?>
<?php endif;?>

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
.audio{
  margin-left: .25rem;
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
.no-bullets{
  list-style:none;
}
.no-bullets li{
  display: flex;
  align-items:center;
}
.no-bullets .material-icons{
  color:#bcd75e;
  margin-right: 0.5rem;
}
</style>
   
<?php if(get_field('survey_type')!='form'):?>
    <div class="container career" style="max-width:900px !important;padding-top:5rem;">
       
        <?php if( !in_array(get_the_ID(),['13007','12944']) ):?>
        <div class="back-section">
          <a href="https://www.santaferelo.com/en/corporate-relocation/resources/global-mobility-survey/" class=""><span>&lsaquo;</span> Back to all Global Mobility surveys</a>
        </div> 
       <?php endif;?>
       
        <section class="vc-section">
          <h1><?php the_title();?></h1>
        </section>
        
        <?php if(has_post_thumbnail()):?>
          <div class="vc-section">
            <figure>
              <?php the_post_thumbnail();?>
            </figure>
          </div>
          
        <?php endif;?>
        <div class="vc-section">
        <?php if(get_field('download_file')):?>
										<?php if($pdf=get_field('form')):?>
											<a class="button primary"  href="<?= $pdf;?>" class="vc-link"> Download </a>
										<?php else:?>
											<?php while(have_rows('download_file')): the_row();?>
												<?php if('file'==get_row_layout()){
														$pdf = get_sub_field('file');
													}
													else{
														$pdf = get_sub_field('url');
													}
													?>
	
											<?php endwhile;?>
											<a target="_blank" class="button primary"  href="<?= $pdf;?>" class="vc-link"> Download</a>
										<?php endif;?>
									
								  <?php endif;?>
        </div>
        <div class="vc-section">
          <?php the_content();?>

        </div>
        <div class="vc-section">
        <?php if(get_field('download_file')):?>
										<?php if($pdf=get_field('form')):?>
											<a class="button primary"  href="<?= $pdf;?>" class="vc-link"> Download</a>
										<?php else:?>
											<?php while(have_rows('download_file')): the_row();?>
												<?php if('file'==get_row_layout()){
														$pdf = get_sub_field('file');
													}
													else{
														$pdf = get_sub_field('url');
													}
													?>
	
											<?php endwhile;?>
											<a target="_blank" class="button primary"  href="<?= $pdf;?>" class="vc-link"> Download</a>
										<?php endif;?>
									
								  <?php endif;?>
                 
                </div>
                <div class="vc-section">
                  <?php echo do_shortcode('[addtoany]');?>

                </div>
         <?php if( !in_array(get_the_ID(),['13007','12944']) ):?>
        <a href="<?= site_url();?>/en/mobility-insights/global-mobility-survey/reports/" class=""><span>&lsaquo;</span> Back to all Global Mobility surveys</a>
           <?php endif;?>
    </div>
<?php else:?>
  <div class="container career" style="max-width:900px !important;padding-top:5rem;">
    <?php the_content();?>
  </div>
<?php endif;?>


<?php if(get_field('survey_type')=='form'):?>
<?php get_footer('form');?>
<?php else:?>
  <?php get_footer();?>
  <?php endif;?>