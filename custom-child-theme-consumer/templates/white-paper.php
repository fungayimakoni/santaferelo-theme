<?php 
/**
 * Template Name: White Paper Archive
 */

 get_header();
?>
<section class="main-layout inner-page-layout" style="padding-top:2rem">
		<div class="container-fluid default-container">
			<div class="row">
        
        <div class="container">
          <?php the_content();?>
                   
          
              <div class="vc-search__wrapper">
              <ul class="vc-search__result" id="white-paper"></ul>
                <?php /*
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'post_type'     =>'blog',
                        'post_status'   =>'publish',
                        'posts_per_page'=> 15,
                        'post__not_in'  =>['11250'],
                        'paged'=>$paged,

                      ];

                     
                      $pos = new WP_Query($args);?>
                    
                      
              
                  <?php if($pos->have_posts()):?>
                      <ul class="vc-search__result" id="blogs">
                      <?php while($pos->have_posts()) : $pos->the_post(); ?>
                          <li class="vc-search__result-item">
                              <figure class="image">
                                <?php if(has_post_thumbnail()):?>
                                  <a  href="<?= get_the_permalink();?>">
                                  <?php the_post_thumbnail();?>
                                </a>
                                <?php else:?>
                                  <h3>Image</h3>  
                                <?php endif;?>
                              </figure>

                              <div class="description">
                                <p class="by">By <strong>Santa Fe Relocation</strong></p>
                                <p class="date"><?= get_the_date("j M Y");?>
                                <?php if(get_field('minute_read')):?>
                                    &bull;&nbsp;<span class='minute-read'><?php the_field('minute_read');?></span>&nbsp;
                                <?php endif;?> </p>
                                <h3 class="vc-title"><a href="<?= get_the_permalink();?>"> <?php the_title();?></a></h3>
                                
                              </div>

                              <div class="button-wrapper">
                                
                                  <a  href="<?= get_the_permalink();?>" class="vc-link">Read more <span>&rsaquo;</span></a>
                              </div>
                          </li>
                      <?php endwhile; wp_reset_postdata();?>
                    </ul>
                    <div class="paginations">
                   
                    <?php 
                      $total_pages = $pos->max_num_pages;

                      if ($total_pages > 1){
                          $big = 999999999; 
                          $current_page = max(1, get_query_var('paged'));
                          printf("<span class='pageof'>Page %s of %s </span>",$paged, $total_pages);
                          // echo paginate_links(array(
                          //     'base' => get_pagenum_link(1) . '%_%',
                          //     'format' => '/page/%#%',
                          //     'current' => $current_page,
                          //     'total' => $total_pages,
                          //     'prev_text'    => __('«'),
                          //     'next_text'    => __('»'),
                          // ));
                          echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $total_pages,
                                  'before_page_number' => '<span class="screen-reader-text">Page:'.$current_page.' </span>'
                          ) );
                      }    
                    ?>

                    </div>
                      
                  <?php else:?>
                    <ul class="vc-search__result">
                    <li class="vc-search__result-item">
                      <h4>No blog article found.</h4>
                    </li>
                    </ul>
                  <?php endif; */?>
                
              </div>
             <?php // get_template_part( '/parts/blog-email', 'form' );?>
             <!-- <div class="subscription">
								<h2>Subscribe to Reloverse</h2>
								<a href="https://www.santaferelo.com/en/keep-me-informed/" class="the-button">Subscribe</a>
							</div> -->
              <div class="email-subscription parts" style='display:flex;justify-content:center;'>
                <div class="subs-container">
                  <h1>Subscribe to newsletter</h1>

                 
                  <a href="https://www.santaferelo.com/en/keep-me-informed/" class="the-button">Subscribe</a>
                   
               
                </div>
            </div>
            
        </div>
			
			</div>
		</div>
	</section>
  <div id="ajax-overlay">
    <div class="cv-spinner">
    <span class="spinner"></span>
    </div>
  </div>

    <style>
#ajax-overlay{	
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: block ;
  background: rgba(0,0,0,0.6);
}
#ajax-overlay.not-shown{
  display:none ;
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
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
    width:100%;
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
.subs-container {
    max-width: 425px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 2rem;
    margin-bottom: 3rem;
}
/*************************************
=objects
*************************************/
.vc-wrapper {
  width: 90%;
  max-width: 800px;
  margin: auto;
  position: relative;
}
.wrapper-holder{
  position: relative;
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
  min-width: 290px;
  padding: 0 15px;
  border: 1px solid #353c41;
}

@media (max-width: 767px) {
  .vc-select {
    min-width: 0;
  }
  .vc-button{
    width:100%;
  }
}

.vc-select select {
  -webkit-appearance: auto;
     -moz-appearance: auto;
          appearance: auto;
  display: block;
  width: 100%;
  padding: 15px 0;
  background-color: transparent;
  border: none;
  outline: 0;
}

.vc-no-bullets, .vc-search__pagination-list {
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

/*************************************
=margins
*************************************/
.mb-80 {
  margin-bottom: 80px;
}

/*************************************
=button
*************************************/
.vc-btn, .vc-button {
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

.vc-btn:hover, .vc-button:hover {
  background-color: #cc0000;
  border-color: #cc0000;
  color: #ffffff;
}

.vc-btn.vc-btn--block, .vc-button.vc-btn--block {
  display: block;
  margin-bottom: 20px;
}
.vc-link{
  font-size: 18px;
  color: #353c41;
}
.vc-link span{
  font-size: 22px;
  color: #353c41;
}
.vc-btn.vc-btn--sm, .vc-button.vc-btn--sm {
  min-width: 120px;
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
.vc-search__result-item > .description .vc-title:hover > a
{
  color: #105caa;
}

.vc-text-center {
  text-align: center !important;
}

/*************************************
=modules
*************************************/
/*************************************
=custom search
*************************************/
.vc-search__form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 10px;
  margin-bottom: 80px;
}

@media (max-width: 767px) {
  .vc-search__form {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .vc-search__result{
    flex-direction: column; 
  }
}

@media (max-width: 767px) {
  .vc-search__form .vc-select {
    width: 100%;
  }
}

.vc-search__form .vc-select button {
  padding-top: 13px;
  padding-bottom: 13px;
}

.vc-search__result {
  list-style: none;
  /* max-width: 900px; */
  margin: 0 auto 70px;
  padding-left: 0;
  display: flex;
  justify-content: flex-start;
  gap: 2rem;
  margin-top: 5rem;
  flex-wrap:wrap;
}

.vc-search__result-item .image {
  /* background-color: #f3f8fa; */
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
.vc-search__result-item .image-lite::after{
 position:absolute;
 display:flex;
 align-items:center;
 justify-content: center;
 top:19px;
 right:0;
 content:'Lite';
 color: #FFF;
 background-color:#000;
 padding: 0.5rem 1rem;
    text-transform: uppercase;
    font-weight: 900;
    font-size: 20px;

}
.vc-search__result-item .image img{
  object-fit:cover;
  /* height:100%; */
  width:auto;
}
.vc-search__result-item .description .by {
  font-size: 18px;
  /* padding: 20px 20px; */
}
.vc-search__result-item {
  width: calc(92% /3);
    /* margin-right: 1.9rem; */

    display: flex;
    flex-direction: column;
    /* box-shadow: 0px 17px 16px -15px rgb(0 0 0 / 21%); */
    padding-bottom: 1.5rem;
}
li.vc-search__result-item:nth-child(3) {
    margin-right: 0;
}
li.vc-search__result-item:last-child {
    margin-right: 0;
}


@media (max-width: 767px) {
  .vc-search__result-item {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    width: auto;
    margin-right: 0;
  }
  form#newsletter{
    
  }
}

.vc-search__result-item:not(:last-of-type) {
  /* margin-bottom: 3rem; */
}

.vc-search__result-item p {
  margin: 0 0 10px;
}

.vc-search__result-item > .description {
  width: 100%;
  flex:1;
}

.vc-search__result-item > .description .vc-title {
  margin: 1.5rem 0 2.5rem;
}

.vc-search__result-item > .description .vc-title a {
  text-decoration: underline;
  color: #353c41;
}

.vc-search__result-item > .description .date {
  /* font-weight: bold; */
  font-size: 18px;
}

.vc-search__result-item > .button-wrapper .vc-button {
  display: inline-block;
  min-width: 120px;
}

.vc-search__pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 20px;
}

.vc-search__pagination-count span {
  display: inline-block;
  margin-right: 10px;
  font-weight: bold;
}

.vc-search__pagination-list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}

.vc-search__pagination-list a {
  display: block;
  padding: 0 5px;
  color: #105caa;
}

.vc-search__pagination-list a:hover, .vc-search__pagination-list a.active {
  color: #000000;
}
.paginations{
  display: flex;
  justify-content: center;
  margin-top: 1rem;
  align-items: center;
  width: 100%;
}
.paginations .pageof{
  margin-right: 2rem;
  font-weight:bold;
}
.paginations .page-numbers{
  margin: 1rem .25rem;
}
.vc-section ul li{
  padding-left: 30px !important;
}
.vc-search__wrapper {
    padding-bottom: 2.5rem;
}

</style>

<?php get_footer();?>