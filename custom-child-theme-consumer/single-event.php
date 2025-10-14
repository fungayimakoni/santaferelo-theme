<?php 
/**
 * @template - Single Career Post Template
 */
?>
<?php get_header();?>

<style>
  .download-button,.button-secondary,.button-primary  {
    background-color: #ed1c24;
    color: white;
    padding: 8px 15px;
    border: solid 2px transparent;
    cursor: pointer;
    color: #ffffff;
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.5;
    letter-spacing: normal;
    text-align: center;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    min-width: 141px;
    text-decoration: none;
}
.button-secondary{
  background-color: #000;
  margin-top: 1rem;
}
.download-button:hover,.button-secondary:hover,.button-primary:hover {
  opacity: .8;
  color:#fff;
}
.button-primary.register {
  margin: .5rem 0;
}

  .embed-container { 
        position: relative; 
        padding-bottom: 56.25%;
        overflow: hidden;
        max-width: 100%;
        height: auto;
        margin-bottom: 2rem;
    } 

    .embed-container iframe,
    .embed-container object,
    .embed-container embed { 
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
   
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
.vc-section.mt-0 {
  padding-top: 0;
}
.addtoany_content {
margin: 24px 0 10px;
}
.vc-section.mb-0{
  padding-bottom: 0;
}

.vc-block-content h2, .vc-block-content h3 {
  margin-bottom: 20px;
}
.vc-section h3 {
  margin-top:20px;
  margin-bottom: 20px;
}
.vc-section h5,.vc-section h4 {
  margin-top: 20px;
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
  margin: 0;
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
  align-items:center;
  flex-direction: column;
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
</style>
   
    <div class="container career" style="max-width:900px !important;padding-top:5rem;">
        <?php if(get_the_ID()!='11250'):?>
          <div class="back-section">
          <a href="https://www.santaferelo.com/en/corporate-relocation/resources/events" class=""><span>&lsaquo;</span> Back to Santa Fe events</a>
          </div>
            <section class="vc-section">
              <h1><?php the_title();?></h1>
            </section>
            <section class="vc-section">
              <div class="meta-desc">
              <?php
                    $isPastEvent = strtotime($eventDate) < time();
              ?>
                <div class="author-date-audio">
                  <div class="author-date">
                   
                    <?php if($eventDate = get_field('event_date')):?>
                       
                      <div class="date <?= $isPastEvent ? 'past':'upcoming';?>"><strong>Date</strong>:&nbsp;<?=get_field('text_date') ? :$eventDate;?></div>    
                    <?php endif;?>
                    <?php if(get_field('time')):?>
                      <div class="time"><strong>Time</strong>:&nbsp;<?= get_field('time');?></div>     
                    <?php endif;?>
                    <?php if(get_field('host')):?>
                      <div class="host"><strong><?= strlen( get_field('host')) >50? 'Hosts':'Host';?></strong>:&nbsp;<?= get_field('host');?></div>
                    <?php endif;?>
                    <?php if(get_field('venue')):?>
                      <div class="venue"><strong>Location</strong>:&nbsp;<?= get_field('venue');?> </div>    
                    <?php endif;?>
                    <?php if(get_field('google_maps_link')):?>
                      <div class="google-maps" style="margin-top:20px">
                        <a target="_blank" href="<?= get_field('google_maps_link');?>"><strong>View on google maps</strong></a>
                      </div>    
                    <?php endif;?>

                    
              
              </div>
    
            </section>
            <?php if( ($registration = get_field('registration_form')) && $isPastEvent=='upcoming'):?>
                        <section class="vc-section">
                          <a href="<?= get_the_permalink( $registration);?>" class="button-primary register">Register</a>
                        </section>
            <?php endif;?>
            <?php if(has_post_thumbnail()):?>
              <div class="vc-section">
                <figure>
                  <?php the_post_thumbnail();?>
                </figure>
              </div>
            <?php else:?>
              <div class="vc-section">
                <figure>
                <img src="https://picsum.photos/1676/1257" alt="">
                </figure>
              </div>
            <?php endif;?>
          
        <?php endif;?>
       

        <div class="vc-section">
          <?php the_content();?>
    
          <?php //echo do_shortcode('[addtoany]');?>
       
        </div>
        <a href="https://www.santaferelo.com/en/corporate-relocation/resources/events" class=""><span>&lsaquo;</span> Back to Santa Fe events</a>
      

    </div>
 
<?php get_footer();?>
