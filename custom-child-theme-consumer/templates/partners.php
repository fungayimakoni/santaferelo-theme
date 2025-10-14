<?php 
/**
 * Template Name: Partners Page
 */

 get_header();
?>
<section class="main-layout inner-page-layout">
	<div class="container-fluid default-container">
         <?php the_content();?>
    </div>
    <div class="vc-search__wrapper container">
        <div class="" id="partners-container">
                <?php
                 $geo = get_country();
                 $regions = [
                    'Europe'=>[
                       'Central & Eastern Europe',
                        'Western Europe',
                        'Germany & Switzerland',
                        'United Kingdom',
                        'Southern Europe',
                    ],
                    'MEA'=>[
                        'Africa',
                        'Middle East',
                    ],
                    'APAC'=>[
                        'North Asia',
                        'South Asia',     
                     ],

                    'Americas'=>[
                        'Americas',
                    ],
    
                  ];

                 $countries=[
                    'RS'=>'Central & Eastern Europe',
                    'SK'=>'Central & Eastern Europe',
                    'RO'=>'Central & Eastern Europe',
                    'HU'=>'Central & Eastern Europe',
                    'EE'=>'Central & Eastern Europe',
                    'UA'=>'Central & Eastern Europe',
                    'RU'=>'Central & Eastern Europe',
                    'CZ'=>'Central & Eastern Europe',
                    'BG'=>'Central & Eastern Europe',
                    'AT'=>'Central & Eastern Europe',
                    'PL'=>'Central & Eastern Europe',

                    'NL'=>'Western Europe',
                    'FR'=>'Western Europe',
                    'BE'=>'Western Europe',

                    'DE'=>'Germany & Switzerland',
                    'CH'=>'Germany & Switzerland',

                    'GB'=>'United Kingdom',

                    'ES'=>'Southern Europe',
                    'PT'=>'Southern Europe',
                    'IT'=>'Southern Europe',
                    
                    'ZA'=>'Africa',
                    'KE'=>'Africa',
                    'NG'=>'Africa',
                    'GH'=>'Africa',
                    'EG'=>'Africa',
                    'MA'=>'Africa',

                    'AE'=>'Middle East',
                    'SA'=>'Middle East',
                    'QA'=>'Middle East',
                    'KW'=>'Middle East',
                    'OM'=>'Middle East',
                    'BH'=>'Middle East',
                    'JO'=>'Middle East',
                    
                    'CH'=>'North Asia',
                    'JP'=>'North Asia',
                    'KR'=>'North Asia',
                    'TW'=>'North Asia',
                    'HK'=>'North Asia',

                    'IN'=>'South Asia',
                    'TH'=>'South Asia',
                    'PH'=>'South Asia',
                    'VN'=>'South Asia',
                    'ID'=>'South Asia',
                    'MY'=>'South Asia',
                    'SG'=>'South Asia',
                    'LK'=>'South Asia',
                    'PK'=>'South Asia',
                    'BD'=>'South Asia',

                    'US'=>'Americas',



                 ];
                 $active_cluster = $countries[$geo->country->isoCode];
                
                 

                    $args = array(
                        'post_type' => 'partners',
                        'posts_per_page' => -1,);
                    $query = new WP_Query($args);
                    ?>
                    
                    <ul class="tabs">
                       <?php foreach($regions as $key => $clusters):
                        $label = $key;
                         if($key == 'Europe'){
                            $region = 'EU';
                          }
                          if($key == 'MEA'){
                              $region = 'ME';
                          }
                          if($key == 'APAC'){
                              $region = 'AS';
                          }
                          if($key == 'Americas'){
                              $region = 'NA';
                          }
                            if($geo->continent->code == $region):
                        
                                    echo "<li class='tab-head active' data-id='$label'>";
                                else:
                                    echo "<li class='tab-head' data-id='$label'>";
                            endif;
                            echo "<h4 class=''>$label</h4>";
                            echo "</li>";
                        
                       endforeach;?>
                    </ul>


                    <div class="tab-contents" data-country="<?=$geo->country->isoCode;?>" data-region="<?=$geo->continent->code?>">
                       
                    <?php foreach($regions as $key => $clusters){?>
                        <?php $label = $key == 'AMEA' ? 'AMEA' : $key;?>
                        
                        <?php
                        if($key == 'Europe'){
                            $region = 'EU';
                          }
                          if($key == 'MEA'){
                              $region = 'ME';
                          }
                          if($key == 'APAC'){
                              $region = 'AS';
                          }
                          if($key == 'Americas'){
                              $region = 'NA';
                          }
                        ?>
                        <?php if($geo->continent->code == $region): ?>
                      
                            <div id="<?=$label;?>" class='tab-content active'>
                        <?php else:?>    
                            <div id="<?=$label;?>" class='tab-content'>
                        <?php endif;?>
                            
                        <ul class="cluster-heading">
                            <?php foreach($clusters as $cluster):?>
                                <li>
                                    <?php if($active_cluster == $cluster):?>
                                        <a href="#" class='cluster-heads active' data-tab="<?=sanitize_title($cluster);?>-cluster""><?=$cluster;?></a>
                                    <?php else:?>
                                    <a href="#" class='cluster-heads' data-tab="<?=sanitize_title($cluster);?>-cluster""><?=$cluster;?></a>
                                    <?php endif;?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                          
                        <?php

                        foreach($clusters as $cluster)
                        {
                            $args = array(
                                'post_type' => 'partners',
                                'posts_per_page' => -1,
                                'orderby'=>'title',
                                'order'=>'ASC',
                                'meta'=>'cluster',
                                'meta_value'=>$cluster);
                            $query_cluster = new WP_Query($args);
                            


                            if($query_cluster->have_posts()){
                                $cluster_countries_field = str_replace('-','_',sanitize_title($cluster)) . '_countries';
                               
                                ?>

                                <!-- <div id="<?=$cluster;?>" class="cluster"> -->
                                <div id="<?= sanitize_title($cluster);?>-cluster" class='cluster-tabs tab-content <?=$active_cluster==$cluster?'active':'';?>' >
                                    <h5><?=$cluster;?></h5>
                                    <div class="grid">
                                        <?php 
                                        while($query_cluster->have_posts()){
                                            $query_cluster->the_post();
                                            // $image = get_field('front_image') ? wp_get_attachment_image_url(get_field('front_image'), 'medium') : get_stylesheet_directory_uri().'/img/placeholder.png';
                                            $image = get_field('front_image') ? wp_get_attachment_image_url(get_field('front_image'), 'medium') : get_stylesheet_directory_uri().'/img/default-partners-bg.jpg';
                                            //$back_image = get_field('back_image') ? wp_get_attachment_image_url(get_field('back_image'), 'medium') : '';
                                            switch($cluster){
                                                case 'Americas': 
                                                    $image = get_field('front_image') ? wp_get_attachment_image_url(get_field('front_image'), 'medium') : get_stylesheet_directory_uri().'/img/map_simple_dots_regional_MASTER_AMERICAS.svg';
                                                    break;
                                                case 'Central & Eastern Europe':
                                                case 'Western Europe':
                                                case 'Germany & Switzerland':
                                                case 'United Kingdom':
                                                case 'Southern Europe':
                                                    $image = get_field('front_image') ? wp_get_attachment_image_url(get_field('front_image'), 'medium') : get_stylesheet_directory_uri().'/img/map_simple_dots_regional_MASTER_EUROPE.svg';
                                                    break;
                                                case 'Africa':
                                                case 'Middle East':
                                                        $image = get_field('front_image') ? wp_get_attachment_image_url(get_field('front_image'), 'medium') : get_stylesheet_directory_uri().'/img/map_simple_dots_regional_MASTER_MEA 1.svg';
                                                        break;
                                                case 'North Asia':
                                                case 'South Asia':
                                                    $image = get_field('front_image') ? wp_get_attachment_image_url(get_field('front_image'), 'medium') : get_stylesheet_directory_uri().'/img/map_simple_dots_regional_MASTER_APAC.svg';
                                                    break;



                                            }
                                          
                                            ?>

                                            <div class="flip-card" id="<?=get_field('country');?>">
                                            <div class="flip-card-inner">
                                                 <div class="flip-card-front">
                                                 <div class="close-container">
                                                    <div class="fflag fflag-<?=get_field('country');?> ff-lg" title="<?=get_field('country');?>"></div>
                                                
                    
                                                </div>
                                                    <figure>
                                                        <img src="<?= $image;?>" alt="<?=$cluster;?>">
                                                    </figure>
                                                    <div class="text">
                                                        <div class="heading">
                                                            <h4><?=get_the_title();?></h4>
                                                            <small><?=get_field($cluster_countries_field);?></small>

                                                        </div>
                                                        <div class="btn-container">
                                                            <button class='button primary flip-me'>View Office</button>
                                                        </div>
                                            
                                                    </div>
                                                </div>
                                                <div class="flip-card-back">
                                                <div class="close-container">
                                                <div class="fflag fflag-<?=get_field('country');?> ff-lg" title="<?=get_field('country');?>"></div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" stroke="white" fill="black" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flip-me" style="width:30px"">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                    </svg>
                                                </div>
                                                   
                                               
                                                    <div class="contact">
                                                    <?=preg_replace("/<br\W*?\/?>/", "\n",get_field('local_contact'));?>
                                                    </div>
                                                    <!-- <?php if ( $leader = get_field('cluster_leader') ):?>
                                                        <div class="leader">
                                                            <p class='strong'><?=$leader[0]->post_title;?><small> ( Cluster Leader )</small></p>
                                                            <?php if($leader[0]->post_content):?>
                                                                <div><?=preg_replace("/<br\W*?\/?>/", "\n",apply_filters('the_content',$leader[0]->post_content));?></div>
                                                            <?php endif;?>
                                                         
                                                        </div>
                                                    <?php endif;?> -->
                                                   
                                                   
                                                </div>


                                            </div>
                                    

                                            </div>
                                    
                                    <?php 
                                };?>
                                <!-- </div> -->
                              <?php wp_reset_postdata(  ); ?>
                              </div>
                            </div>
                            <?php }
                           
                        }
                        ?>

                        </div>

                        <?php 
                    }
                    echo '</div>';
                    wp_reset_postdata(  );  
        ?>

    </div>
</section>
<style>

ul.cluster-heading {
    display: flex;
    gap: 20px;
    justify-content: center;
    list-style: none;
    font-size: 1rem;
    font-weight: 500;
    margin-top: 1rem;
}
.cluster-heading .cluster-heads{
    color: #76276f;
    text-decoration: none;
    padding: 0.5rem 1rem;
    /* border-radius: 5px; */
    transition: background-color 0.3s;

}
.cluster-heading .cluster-heads.active{
    background-color: #76276f;
    color: #FFF;
}

#partners{
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.btn {
    background-color: #76276f !important;
    color: #FFF !important;
    border: none !important;
    padding: 1rem 1.5rem !important;
    cursor: pointer !important;
    transition: background-color 0.3s !important;
    font-weight: 600 !important;
    /* border-radius: 5px !important; */

}
.btn.secondary{
    background-color: #FFF !important;
    color: #76276f !important;


}
.btn.secondary:hover {
    background-color: rgba(255,255,255,0.5) !important;
}
.btn:hover {
    background-color: #5e1e5a !important;
}
.grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap:1.5rem;
}
.grid-4 {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));

}
@media screen and (max-width: 768px) {
    .grid {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }
    .grid-4 {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }
    .grid-4 .tab-head{
        border-left: 1px solid #ccc;
        border-bottom: none;
    }
    .cluster-heading {
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap:10px;
    }
    
}
.tabs {
    display: flex;
    justify-content: start;
    gap:1rem;
    padding: 0;
    list-style: none;
    position: relative;
    bottom: -2px;
}
.tabs .tab-head {
    padding: 0;
    margin: 0;
}
.tabs .tab-head h4 {
    padding: 0;
    margin: 0;
    cursor: pointer;
   
}
.tab-head.active{
    padding: 0;
    position: relative;
    margin: 0;
    border-bottom: 2px solid  #76276f;
    padding-bottom: 2px;
    /* top: 2px; */
    z-index: 10;
}
.tab-head.active h4{
    color: #76276f;
}

.tab-contents{
    position: relative;
    height: 100%;
    width: 100%;
    overflow: hidden;
    border-top: 3px solid #ccc;

}
.tab-content{
    position: absolute;
    height:100%;
    width: 100%;
    padding:1rem 0;
    display: none;
}
.tab-content.active{
    display: block;
    position: relative;
}

.flip-card {
  perspective: 1000px;
  min-height: 450px; /* Set a minimum height for the flip card */
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 450px;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  top: 0; /* Set the top and left properties to ensure */
  left: 0; /* the front and back cards are overlaid on each other */
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  display: flex;
  flex-direction: column;
  background-color: #000;
  color:#FFF;
}
.flip-card-front h4,
.flip-card-back h4 {
    margin: 0;
    padding: 0;
    line-height: 1.25;
    color:#FFF;
}
.flip-card-front,
.flip-card-back {
  /* ... existing styles ... */
  backface-visibility: hidden;
}
.close-container{
    position: absolute;
    top: 0;
    right: 0;
    padding: 1rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    z-index: 1;
}

.flip-card-front .text,
.flip-card-back  .text {
  padding: 1rem 1rem 2rem 1rem;
  /* gap: 1rem; */
  color: #FFF;
  text-align: left;
  display: flex;
  justify-content: space-between;
  width: 100%;
}
.flip-card-front .text {
    align-items: center;
}

.flip-card-front {
  /* background-color: transparent; */
  min-height: 400px;
  color: black;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  transform: rotateX(0deg);
  z-index: 1; /* Ensure the front card stays on top initially */
}

.flip-card-front figure {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    aspect-ratio: 4 / 3;
    display: block;
    margin-bottom: 10px;
}
.flip-card-front figure img {
  object-fit: cover; /* This will ensure the image covers the entire container */
  width: 100%;
  height: 100%;
    transition: transform 0.6s;
}
.flip-card-back {
  /* ... existing styles ... */
  transform: rotateY(-180deg);
  padding: 1.5rem;
}
.flip-card-back .local-contact {
   margin-bottom:0.5rem;
   display: flex;
 
}
.flip-card-back .local-contact svg{
    margin-right: 0.5rem;
    flex-shrink: 0;

}
.flip-card-back .local-contact .email a{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 250px;
}
@media screen and (max-width: 768px) {
    .flip-card-back .local-contact .email a {
        width: 100%;
    }
    
}
.flip-card-back .contact *{
    color: #FFF;
}
.flip-card-back .contact h4{
    margin: 0;
    padding: 0;
    line-height: 1.25;
    color:#FFF;
    font-size: 16px;
    margin-bottom: 1rem;
}
.local-contact a{
    color: #FFF;

}

p:empty { display:none; }

.flip-card-back  .leader {
    color: #FFF;
    border-top: 1px solid red;
    padding-top: 1rem;
}
.flip-card-back  .leader *{
   color: #FFF;
}
.flip-card-back  .leader p small{
    font-size: 12px;
    color: #FFF;
    font-weight: 300;
}

/* .flip-card:hover .flip-card-inner {
  transform: rotateY(180deg); 
}*/
.flip-card.active .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-text {
  position: absolute;
  color: white;
  background-color: rgba(0, 0, 0, 1);
  padding: 10px;
  border-radius: 5px;
  
}

.flip-card-back {
  box-sizing: border-box; /* make padding included in the height */
  background-color: #000;
  color: #FFF;

  transform: rotateY(180deg);
  display: flex;
  /* align-items: center; */
  justify-content: center;
  flex-direction: column;
  gap: 15px;
}

.flip-card-back .content-container {
  padding: 15px;
  height: 100%;
  overflow-y: auto;
}

.fflag {
    background-image:url(<?=get_stylesheet_directory_uri().'/img/flagSprite42.png';?>);
    background-repeat:no-repeat;
    background-size: 100% 49494%;
    display: inline-block;
    overflow: hidden;
    position: relative;
    vertical-align: middle;
    box-sizing: content-box;
}
.fflag-CH,
.fflag-NP {box-shadow: none!important}
.fflag-DZ {background-position:center 0.2287%}
.fflag-AO {background-position:center 0.4524%}
.fflag-BJ {background-position:center 0.6721%}
.fflag-BW {background-position:center 0.8958%}
.fflag-BF {background-position:center 1.1162%}
.fflag-BI {background-position:center 1.3379%}
.fflag-CM {background-position:center 1.5589%}
.fflag-CV {background-position:center 1.7805%}
.fflag-CF {background-position:center 2.0047%}
.fflag-TD {background-position:center 2.2247%}
.fflag-CD {background-position:left 2.4467%}
.fflag-DJ {background-position:left 2.6674%}
.fflag-EG {background-position:center 2.8931%}
.fflag-GQ {background-position:center 3.1125%}
.fflag-ER {background-position:left 3.3325%}
.fflag-ET {background-position:center 3.5542%}
.fflag-GA {background-position:center 3.7759%}
.fflag-GM {background-position:center 4.0015%}
.fflag-GH {background-position:center 4.2229%}
.fflag-GN {background-position:center 4.441%}
.fflag-GW {background-position:left 4.66663%}
.fflag-CI {background-position:center 4.8844%}
.fflag-KE {background-position:center 5.1061%}
.fflag-LS {background-position:center 5.3298%}
.fflag-LR {background-position:left 5.5495%}
.fflag-LY {background-position:center 5.7712%}
.fflag-MG {background-position:center 5.994%}
.fflag-MW {background-position:center 6.2156%}
.fflag-ML {background-position:center 6.4363%}
.fflag-MR {background-position:center 6.658%}
.fflag-MU {background-position:center 6.8805%}
.fflag-YT {background-position:center 7.1038%}
.fflag-MA {background-position:center 7.3231%}
.fflag-MZ {background-position:left 7.5448%}
.fflag-NA {background-position:left 7.7661%}
.fflag-NE {background-position:center 7.98937%}
.fflag-NG {background-position:center 8.2099%}
.fflag-CG {background-position:center 8.4316%}
.fflag-RE {background-position:center 8.6533%}
.fflag-RW {background-position:right 8.875%}
.fflag-SH {background-position:center 9.0967%}
.fflag-ST {background-position:center 9.32237%}
.fflag-SN {background-position:center 9.5426%}
.fflag-SC {background-position:left 9.7628%}
.fflag-SL {background-position:center 9.9845%}
.fflag-SO {background-position:center 10.2052%}
.fflag-ZA {background-position:left 10.4269%}
.fflag-SS {background-position:left 10.6486%}
.fflag-SD {background-position:center 10.8703%}
.fflag-SR {background-position:center 11.0945%}
.fflag-SZ {background-position:center 11.3135%}
.fflag-TG {background-position:left 11.5354%}
.fflag-TN {background-position:center 11.7593%}
.fflag-UG {background-position:center 11.9799%}
.fflag-TZ {background-position:center 12.2005%}
.fflag-EH {background-position:center 12.4222%}
.fflag-YE {background-position:center 12.644%}
.fflag-ZM {background-position:center 12.8664%}
.fflag-ZW {background-position:left 13.0873%}
.fflag-AI {background-position:center 13.309%}
.fflag-AG {background-position:center 13.5307%}
.fflag-AR {background-position:center 13.7524%}
.fflag-AW {background-position:left 13.9741%}
.fflag-BS {background-position:left 14.1958%}
.fflag-BB {background-position:center 14.4175%}
.fflag-BQ {background-position:center 14.6415%}
.fflag-BZ {background-position:center 14.8609%}
.fflag-BM {background-position:center 15.0826%}
.fflag-BO {background-position:center 15.306%}
.fflag-VG {background-position:center 15.528%}
.fflag-BR {background-position:center 15.7496%}
.fflag-CA {background-position:center 15.9694%}
.fflag-KY {background-position:center 16.1911%}
.fflag-CL {background-position:left 16.4128%}
.fflag-CO {background-position:left 16.6345%}
.fflag-KM {background-position:center 16.8562%}
.fflag-CR {background-position:center 17.0779%}
.fflag-CU {background-position:left 17.2996%}
.fflag-CW {background-position:center 17.5213%}
.fflag-DM {background-position:center 17.743%}
.fflag-DO {background-position:center 17.968%}
.fflag-EC {background-position:center 18.1864%}
.fflag-SV {background-position:center 18.4081%}
.fflag-FK {background-position:center 18.6298%}
.fflag-GF {background-position:center 18.8515%}
.fflag-GL {background-position:left 19.0732%}
.fflag-GD {background-position:center 19.2987%}
.fflag-GP {background-position:center 19.518%}
.fflag-GT {background-position:center 19.7383%}
.fflag-GY {background-position:center 19.96%}
.fflag-HT {background-position:center 20.1817%}
.fflag-HN {background-position:center 20.4034%}
.fflag-JM {background-position:center 20.6241%}
.fflag-MQ {background-position:center 20.8468%}
.fflag-MX {background-position:center 21.0685%}
.fflag-MS {background-position:center 21.2902%}
.fflag-NI {background-position:center 21.5119%}
.fflag-PA {background-position:center 21.7336%}
.fflag-PY {background-position:center 21.9553%}
.fflag-PE {background-position:center 22.177%}
.fflag-PR {background-position:left 22.4002%}
.fflag-BL {background-position:center 22.6204%}
.fflag-KN {background-position:center 22.8421%}
.fflag-LC {background-position:center 23.0638%}
.fflag-PM {background-position:center 23.2855%}
.fflag-VC {background-position:center 23.5072%}
.fflag-SX {background-position:left 23.732%}
.fflag-TT {background-position:center 23.9506%}
.fflag-TC {background-position:center 24.1723%}
.fflag-US {background-position:center 24.392%}
.fflag-VI {background-position:center 24.6157%}
.fflag-UY {background-position:left 24.8374%}
.fflag-VE {background-position:center 25.0591%}
.fflag-AB {background-position:center 25.279%}
.fflag-AF {background-position:center 25.5025%}
.fflag-AZ {background-position:center 25.7242%}
.fflag-BD {background-position:center 25.9459%}
.fflag-BT {background-position:center 26.1676%}
.fflag-BN {background-position:center 26.3885%}
.fflag-KH {background-position:center 26.611%}
.fflag-CN {background-position:left 26.8327%}
.fflag-GE {background-position:center 27.0544%}
.fflag-HK {background-position:center 27.2761%}
.fflag-IN {background-position:center 27.4978%}
.fflag-ID {background-position:center 27.7195%}
.fflag-JP {background-position:center 27.9412%}
.fflag-KZ {background-position:center 28.1615%}
.fflag-LA {background-position:center 28.3846%}
.fflag-MO {background-position:center 28.6063%}
.fflag-MY {background-position:center 28.829%}
.fflag-MV {background-position:center 29.0497%}
.fflag-MN {background-position:left 29.2714%}
.fflag-MM {background-position:center 29.4931%}
.fflag-NP {background-position:left 29.7148%}
.fflag-KP {background-position:left 29.9365%}
.fflag-MP {background-position:center 30.1582%}
.fflag-PW {background-position:center 30.3799%}
.fflag-PG {background-position:center 30.6016%}
.fflag-PH {background-position:left 30.8233%}
.fflag-SG {background-position:left 31.045%}
.fflag-KR {background-position:center 31.2667%}
.fflag-LK {background-position:right 31.4884%}
.fflag-TW {background-position:left 31.7101%}
.fflag-TJ {background-position:center 31.9318%}
.fflag-TH {background-position:center 32.1535%}
.fflag-TL {background-position:left 32.3752%}
.fflag-TM {background-position:center 32.5969%}
.fflag-VN {background-position:center 32.8186%}
.fflag-AX {background-position:center 33.0403%}
.fflag-AL {background-position:center 33.25975%}
.fflag-AD {background-position:center 33.4837%}
.fflag-AM {background-position:center 33.7054%}
.fflag-AT {background-position:center 33.9271%}
.fflag-BY {background-position:left 34.1488%}
.fflag-BE {background-position:center 34.3705%}
.fflag-BA {background-position:center 34.5922%}
.fflag-BG {background-position:center 34.8139%}
.fflag-HR {background-position:center 35.0356%}
.fflag-CY {background-position:center 35.2555%}
.fflag-CZ {background-position:left 35.479%}
.fflag-DK {background-position:center 35.7007%}
.fflag-EE {background-position:center 35.9224%}
.fflag-FO {background-position:center 36.1441%}
.fflag-FI {background-position:center 36.3658%}
.fflag-FR {background-position:center 36.5875%}
.fflag-DE {background-position:center 36.8092%}
.fflag-GI {background-position:center 37.0309%}
.fflag-GR {background-position:left 37.2526%}
.fflag-GG {background-position:center 37.4743%}
.fflag-HU {background-position:center 37.696%}
.fflag-IS {background-position:center 37.9177%}
.fflag-IE {background-position:center 38.1394%}
.fflag-IM {background-position:center 38.3611%}
.fflag-IT {background-position:center 38.5828%}
.fflag-JE {background-position:center 38.8045%}
.fflag-XK {background-position:center 39.0262%}
.fflag-LV {background-position:center 39.2479%}
.fflag-LI {background-position:left 39.4696%}
.fflag-LT {background-position:center 39.6913%}
.fflag-LU {background-position:center 39.913%}
.fflag-MT {background-position:left 40.1347%}
.fflag-MD {background-position:center 40.3564%}
.fflag-MC {background-position:center 40.5781%}
.fflag-ME {background-position:center 40.7998%}
.fflag-NL {background-position:center 41.0215%}
.fflag-MK {background-position:center 41.2432%}
.fflag-NO {background-position:center 41.4649%}
.fflag-PL {background-position:center 41.6866%}
.fflag-PT {background-position:center 41.9083%}
.fflag-RO {background-position:center 42.13%}
.fflag-RU {background-position:center 42.3517%}
.fflag-SM {background-position:center 42.5734%}
.fflag-RS {background-position:center 42.7951%}
.fflag-SK {background-position:center 43.0168%}
.fflag-SI {background-position:center 43.2385%}
.fflag-ES {background-position:left 43.4602%}
.fflag-SE {background-position:center 43.6819%}
.fflag-CH {background-position:center 43.9036%}
.fflag-TR {background-position:center 44.1253%}
.fflag-UA {background-position:center 44.347%}
.fflag-GB {background-position:center 44.5687%}
.fflag-VA {background-position:right 44.7904%}
.fflag-BH {background-position:center 45.0121%}
.fflag-IR {background-position:center 45.2338%}
.fflag-IQ {background-position:center 45.4555%}
.fflag-IL {background-position:center 45.6772%}
.fflag-KW {background-position:left 45.897%}
.fflag-JO {background-position:left 46.1206%}
.fflag-KG {background-position:center 46.3423%}
.fflag-LB {background-position:center 46.561%}
.fflag-OM {background-position:left 46.7857%}
.fflag-PK {background-position:center 47.0074%}
.fflag-PS {background-position:center 47.2291%}
.fflag-QA {background-position:center 47.4508%}
.fflag-SA {background-position:center 47.6725%}
.fflag-SY {background-position:center 47.8942%}
.fflag-AE {background-position:center 48.1159%}
.fflag-UZ {background-position:left 48.3376%}
.fflag-AS {background-position:right 48.5593%}
.fflag-AU {background-position:center 48.781%}
.fflag-CX {background-position:center 49.002%}
.fflag-CC {background-position:center 49.2244%}
.fflag-CK {background-position:center 49.4445%}
.fflag-FJ {background-position:center 49.6678%}
.fflag-PF {background-position:center 49.8895%}
.fflag-GU {background-position:center 50.1112%}
.fflag-KI {background-position:center 50.3329%}
.fflag-MH {background-position:left 50.5546%}
.fflag-FM {background-position:center 50.7763%}
.fflag-NC {background-position:center 50.998%}
.fflag-NZ {background-position:center 51.2197%}
.fflag-NR {background-position:left 51.4414%}
.fflag-NU {background-position:center 51.6631%}
.fflag-NF {background-position:center 51.8848%}
.fflag-WS {background-position:left 52.1065%}
.fflag-SB {background-position:left 52.3282%}
.fflag-TK {background-position:center 52.5499%}
.fflag-TO {background-position:left 52.7716%}
.fflag-TV {background-position:center 52.9933%}
.fflag-VU {background-position:left 53.215%}
.fflag-WF {background-position:center 53.4385%}
.fflag-AQ {background-position:center 53.6584%}
.fflag-EU {background-position:center 53.875%}
.fflag-JR {background-position:center 54.099%}
.fflag-OLY {background-position:center 54.32%}
.fflag-UN {background-position:center 54.54%}

.fflag.ff-sm {width: 18px;height: 11px}
.fflag.ff-md {width: 27px;height: 17px}
.fflag.ff-lg {width: 42px;height: 27px}
.fflag.ff-xl {width: 60px;height: 37px}
</style>

<script>
    

        
        
       
    document.addEventListener('DOMContentLoaded', ()=>
    {
        const tabs = document.querySelectorAll('.tab-head');
        const tabContents = document.querySelectorAll('.tab-content');
        const clusterHeads = document.querySelectorAll('.cluster-heads');
        const clusterTabs = document.querySelectorAll('.cluster-tabs');
       

        //tabs[0].classList.add('active');
        // clusterHeads[0].classList.add('active');
        //clusterTabs[0].classList.add('active');

        //tabContents[0].classList.add('active');
       
        
        
        tabs.forEach((tab,idx) => {

            tab.addEventListener('click', function(e){
                
                e.preventDefault();
                
                tabs.forEach(tab => tab.classList.remove('active'));
                
                tab.classList.add('active');
                
                tabContents.forEach(content => content.classList.remove('active'));
        
                let tabContent = document.getElementById(tab.textContent);
                tabContent.classList.add('active');
        
                tabContent.querySelectorAll('.cluster-heads')[0].click();
            });
        });

        clusterHeads.forEach((clusterHead) => {
            clusterHead.addEventListener('click', function(e){
                e.preventDefault();
                clusterHeads.forEach(clusterHead => clusterHead.classList.remove('active'));
                clusterHead.classList.add('active');
                clusterTabs.forEach(content => content.classList.remove('active'));
                const clusterTab = document.getElementById(clusterHead.dataset.tab);
                clusterTab.classList.add('active');
            });
           
        });

        const flipCards = document.querySelectorAll('.flip-card');
        
        flipCards.forEach(flipCard => {
            flipCard.querySelectorAll('.flip-me').forEach(btn => {
                btn.addEventListener('click', function(){
                    flipCard.classList.toggle('active');
                });
            });
        });

        
      

    });
 </script>

<?php get_footer();?>