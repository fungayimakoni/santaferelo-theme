<?php 
/**
 * @template - Single Career Post Template
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

.vc-section h2, .vc-section h3,.vc-section h4 {
  margin-bottom: 20px;
  margin-top:20px;
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
          <a href="https://www.santaferelo.com/en/corporate-relocation/blog" class=""><span>&lsaquo;</span> Back to Santa Fe Blog</a>
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
                    <div class="author">By <span>Santa Fe Relocation</span></div>
                    <div class="date"><?= get_the_date("j M Y");?>
                    <?php if(get_field('minute_read')):?>
                      &bull;&nbsp;<span class='minute-read'><?php the_field('minute_read');?></span>&nbsp;
                    <?php endif;?> 
                    <?php if(get_field('mp3_audio_file') || get_field('ogg_audio_file')  ):?>
                      &bull; 
                      <div class="audio play">
                        <img class='play-pause hidden' id='pause' src="<?php echo get_stylesheet_directory_uri() ;?>/img/pause.svg" alt="pause-icon">
                        <img class='play-pause' src="<?php echo get_stylesheet_directory_uri() ;?>/img/play.svg" alt="play-icon" id="play">
        
                        
        
                      </div>&nbsp;<span class='play-label'>Listen</span>
                      <audio controls>
                        <?php if(get_field('mp3_audio_file')):?>
                          <source src="<?php the_field('mp3_audio_file');?>" type="audio/mpeg" />
                        <?php endif;?>
                        <?php if(get_field('ogg_audio_file')):?>
                          <source src="<?php the_field('ogg_audio_file');?>" type="audio/ogg" />
                        <?php endif;?>
                        Your browser does not support the audio element.
                      </audio>
                      
                    <?php endif;?>
                    </div>
                  </div>
                
                    
                    
                
    
                </div>
              </div>
              <!-- <div class="vc-section">
            <?php echo do_shortcode('[addtoany]');?>
          </div> -->
            </section>
            <?php if(has_post_thumbnail()):?>
              <div class="vc-section">
                <figure class='item-image <?=get_field('lite_image')?'item-lite':'';?>'>
                  <?php the_post_thumbnail();?>
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
        <a href="<?= get_site_url();?>/corporate-relocation/blog" class=""><span>&lsaquo;</span> Back to Santa Fe Blog</a>

        <?php  //get_template_part( '/parts/blog-email', 'form' );?>
        <div class="subscription">
								<h2>Subscribe to Reloverse</h2>
								<a href="https://www.santaferelo.com/en/keep-me-informed/" class="the-button">Subscribe</a>
							</div>
        <?php endif;?>

    </div>
    <script>
      const audio = document.querySelector('audio')
      const play = document.querySelector('#play')
      const pause = document.querySelector('#pause')
      const pplabel = document.querySelector('.play-label')
    
          play.addEventListener('click',function(){
                play.classList.add('hidden')
                pause.classList.remove('hidden')
                pplabel.textContent = 'Pause'
                audio.play()
          })
          pause.addEventListener('click',function(){
                play.classList.remove('hidden')
                pause.classList.add('hidden')
                audio.pause()
                pplabel.textContent = 'Listen'
          })

    </script>
<?php get_footer();?>
