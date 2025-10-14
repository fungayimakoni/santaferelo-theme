<?php 
/**
 * Template Name: Careers Page
 */

 get_header();
?>
<section class="main-layout inner-page-layout">
		<div class="container-fluid default-container">
			<div class="row">
        
			<?php the_content();?>
                <div class="container">
                   
                 
        <div class="vc-search__wrapper">
            <form class="vc-search__form" action="" method="GET">
                <div class="vc-select">
                    <?php 
                         $args = [
                            'post_type'     =>'offices',
                            'post_status'   =>'publish',
                            'posts_per_page'=> -1,
                        ];
                        $a_ofc = [];
                    $office = new WP_Query($args);
                    if($office->have_posts()):
                      while($office->have_posts()): 
                        $office->the_post();
                        $id= get_post_meta(get_the_ID(),'taxonomy_country',true);
                        $name = get_term($id)->name;
                        array_push($a_ofc,['id'=>$id,'name'=>$name]);
                      endwhile;
                      wp_reset_postdata();
                      $a_ofc = unique_multidim_array($a_ofc,'id');
                      $name = array_column($a_ofc, 'name');

                      array_multisort($name, SORT_ASC, $a_ofc);
                      

                    endif;?>
                    <select name="country_id" id="">
                        <option value="0">All countries</option>
                        <?php if(count($a_ofc)>0):?>
                          <?php foreach($a_ofc as $a):?>
                            <option value="<?=$a['id'];?>" <?= (isset($_GET['country_id']) && $a['id']==$_GET['country_id']) ?'selected="selected"':'' ;?>><?=$a['name'];?></option>
                          <?php endforeach;?>
                        <?php endif;?>
                    </select>         
                </div>
                <?php
               $jcat= get_terms(['taxonomy' => 'job_category', 'hide_empty' => false,'exclude'=>'15803']);?>
                <div class="vc-select">
                    <select name="job_category" id="">
                        <option value="0">All job categories</option>
                        <?php foreach($jcat as $cat):?>
                        <option value="<?= $cat->term_id;?>" <?= (isset($_GET['job_category']) && $_GET['job_category']==$cat->term_id) ?'selected="selected"':'' ;?>><?= $cat->name;?></option>
                        <?php endforeach;?>
                        <option value="15803">Other</option>
                    </select>
                </div>
                <button type="submit" id='filter-careers' class="vc-button ">Filter results</button>
            </form>
             <?php 
               $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $args = [
                  'post_type'     =>'career',
                  'post_status'   =>'publish',
                  'posts_per_page'=> 10,
                  'paged'=>$paged,

                ];

                $office_ids =[];
                $job_tax = [];
                $office_tax = [];
                if(isset($_GET['country_id'] ) && !empty($_GET['country_id']) ) {
                   //getall ids of offices that belongs to $_GET['country_id']
                  $ofc_args = [
                      'post_type'=>'offices',
                      'post_status'=>'publish',
                      'posts_per_page'=>-1,
                      'tax_query'=>[
                          [
                            'taxonomy'=>'country',
                            'fields'=>'ID',
                            'terms'=> $_GET['country_id']
                          ]
                          ],
                  
                    ];
                    $offices = new WP_Query($ofc_args);
                    
                    if($offices->have_posts()):
                      while($offices->have_posts()): $offices->the_post();
                        array_push($office_ids,get_the_ID());
                      endwhile;
                      wp_reset_postdata();
                    endif;

                    $args['meta_query']=[
                      [
                        'key' => 'office',
                        'value'    => $office_ids,
                        'compare'    => 'IN',
                      ]
                      ];
                }

                if(isset($_GET['job_category']) && !empty($_GET['job_category'])) {
                    $args['tax_query'] =[
                      [
                        'taxonomy' => 'job_category',
                        'field'    => 'ID',
                        'terms'    => $_GET['job_category'],
                      ]
                      ];
                }
                $pos = new WP_Query($args);?>
              
                
              <ul class="vc-search__result careers-ajax-load">

              </ul>

            <?php /*if($pos->have_posts()):?>
                <ul class="vc-search__result">
                <?php while($pos->have_posts()) : $pos->the_post(); ?>
                    <li class="vc-search__result-item">
                        <?php   $url = parse_url($_SERVER['REQUEST_URI']);
                        $http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
                        $back = '?back='. $http .'://'.$_SERVER['SERVER_NAME'].$url['path'];
                        if($_GET['office']){
                            $back.='&office='.$_GET['office'];
                        }
                        if($_GET['job_category']){
                            $back.='&job_category='.$_GET['job_category'];
                        }
                        ?>
                        <div class="description">
                            <h3 class="vc-title"><a href="<?= get_the_permalink();?>"> <?php the_title();?></a></h3>
                            <?php $office = get_field('office');?>
                            <p>Location: <?=$office->post_title;?>, <?= country_name($office->country);?></p>
                            <p><?= get_field('short_description');?></p>
                            <p class="date">Posted: <?= get_the_date("j F Y");?></p>
                          
                        </div>
                        <div class="button-wrapper">
                          
                            <a  href="<?= get_the_permalink();?>" class="vc-button vc-btnOutline">Show more</a>
                        </div>
                    </li>
                <?php endwhile; wp_reset_postdata();?>
                <li class="paginations">
                <?php 
                  $total_pages = $pos->max_num_pages;

                  if ($total_pages > 1){
              
                      $current_page = max(1, get_query_var('paged'));
              
                      echo paginate_links(array(
                          'base' => get_pagenum_link(1) . '%_%#jobs',
                          'format' => '/page/%#%',
                          'current' => $current_page,
                          'total' => $total_pages,
                          'prev_text'    => __('«'),
                          'next_text'    => __('»'),
                      ));
                  }    
                ;?>

                </li>
                </ul>
                
            <?php else:?>
              <ul class="vc-search__result">
              <li class="vc-search__result-item">
                <h4>No open position found.</h4>
              </li>
              </ul>
            <?php endif; */?>
           
        </div>
            
                </div>
			
			</div>
		</div>
	</section>
  <div id="ajax-overlay" class='hidden'>
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
  display: block;
  background: rgba(0,0,0,0.6);
}
#ajax-overlay.hidden{
  display:none;
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

.is-hide{
  display:none;
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

/*************************************
=objects
*************************************/
.vc-wrapper {
  width: 90%;
  max-width: 800px;
  margin: auto;
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
  max-width: 900px;
  margin: 0 auto 70px;
  padding-left: 0;
}

.vc-search__result-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  gap: 10px;
  padding: 20px 20px;
  background-color: #f3f8fa;
}

@media (max-width: 767px) {
  .vc-search__result-item {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  
}

.vc-search__result-item:not(:last-of-type) {
  margin-bottom: 15px;
}

.vc-search__result-item p {
  margin: 0 0 10px;
}

.vc-search__result-item > .description {
  width: 100%;
}

.vc-search__result-item > .description .vc-title {
  margin: 0 0 10px;
}

.vc-search__result-item > .description .vc-title a {
  text-decoration: underline;
  color: #105caa;
}

.vc-search__result-item > .description .date {
  font-weight: bold;
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
}
.paginations .page-numbers{
  margin: 1rem .25rem;
}
.vc-section ul li{
  padding-left: 30px !important;
}

</style>
<?php get_footer();?>