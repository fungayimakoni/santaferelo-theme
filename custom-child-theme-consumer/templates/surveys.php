<?php 
/*
Template Name: Survey Layout
Template Post Type: mobility-survey,page
*/

 get_header();
?>
<section class="main-layout inner-page-layout" style="padding-top:2rem">
		<div class="container-fluid default-container">
			<div class="row">
        
        <div class="container">
          <?php the_content();?>
                   
                 
              <div class="vc-search__wrapper">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'post_type'     =>'survey',
                        'post_status'   =>'publish',
                        'posts_per_page'=> 12,
                        'post__not_in'=>array(12944,13007),

                        'paged'=>$paged,
                        
                        
                        'meta_query' => [
                          [
                            'key'=>'survey_type',
                            'value'=>'survey',
                            'compare'=>'=='
                          ]
                        ]

                      ];

                     
                      $pos = new WP_Query($args);?>
                    
                      
              
                  <?php if($pos->have_posts()):$count=1;?>
                      <ul class="vc-search__result">
                      <?php while($pos->have_posts()) : $pos->the_post(); ?>
                          <li class="vc-search__result-item <?= $count==1?'featured':'';?>">
                              <figure class="image">
                                <?php if(has_post_thumbnail()):?>
                                  <?php if(''!=get_the_content()):?>
									<a  href="<?= get_the_permalink();?>">
								  <?php endif;?>
                                  <?php the_post_thumbnail();?>
								  <?php if(''!=get_the_content()):?>
									</a>
								  <?php endif;?>
                                <?php else:?>
                                  <img src="https://via.placeholder.com/384x288?text=384x288" alt=""> 
                                <?php endif;?>
                              </figure>

                              <div class="description">
                    
                                <h3 class="vc-title">
								<?php if(''!=get_the_content()):?>
									<a  href="<?= get_the_permalink();?>">
								  <?php endif;?>
									
									<?php the_title();?>
									<?php if(''!=get_the_content()):?>
									</a>
								  <?php endif;?>
								</h3>
                                <div class="short-desc">
									<?php the_field('short_description');?>
								</div>
								
								<?php if($count==1):?>
									<div class="button-wrapper">
									
										<?php if(''!=get_the_content()):?>
										<a  href="<?= get_the_permalink();?>" class="text-link">Find out more <span>&rsaquo;</span> &nbsp;</a>
										<?php endif;?>
										<?php if(get_field('download_file')):?>
											<?php if($pdf=get_field('form')):?>
												<a href="<?= $pdf;?>" class="text-link"> Download <span>&rsaquo;</span></a>
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
												<a target="_blank"  href="<?= $pdf;?>" class="text-link"> Download File <span>&rsaquo;</span></a>
											<?php endif;?>
										
										<?php endif;?>
									</div>
								<?php endif;?>
                              </div>
							  <?php if($count!=1):?>
								<div class="button-wrapper">
								   
									<?php if(''!=get_the_content()):?>
									  <a  href="<?= get_the_permalink();?>" class="text-link">Find out more <span>&rsaquo;</span> &nbsp;</a>
									<?php endif;?>
									  <?php if(get_field('download_file')):?>
										  <?php if($pdf=get_field('form')):?>
											  <a href="<?= $pdf;?>" class="text-link"> Download <span>&rsaquo;</span></a>
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
											  <a target="_blank"  href="<?= $pdf;?>" class="text-link"> Download <span>&rsaquo;</span></a>
											 
										  <?php endif;?>
									  
									<?php endif;?>
								</div>
							  <?php endif;?>
                          </li>
						  <?php if($count==1):?>
							<li class="vc-search__result-item featured"><h3 class='archive-title'>Take a look at our previous reports</h3></li>
						  <?php endif;?>
						  <?php $count++;?>
                      <?php endwhile; wp_reset_postdata();?>
                    </ul>
                    <div class="paginations">
                   
                    <?php 
                      $total_pages = $pos->max_num_pages;

                      if ($total_pages > 1){
                  
                          $current_page = max(1, get_query_var('paged'));
                          printf("<span class='pageof'>Page %s of %s </span>",$paged, $total_pages);
                          echo paginate_links(array(
                              'base' => get_pagenum_link(1) . '%_%#jobs',
                              'format' => '/page/%#%',
                              'current' => $current_page,
                              'total' => $total_pages,
                              'prev_text'    => __('«'),
                              'next_text'    => __('»'),
                          ));
                      }    
                    ?>

                    </div>
                      
                  <?php else:?>
                    <ul class="vc-search__result">
                    <li class="vc-search__result-item">
                      <h4>No survey found.</h4>
                    </li>
                    </ul>
                  <?php endif;?>
                
              </div>
            
        </div>
			
			</div>
		</div>
	</section>
    <style>

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
.vc-search__result-item.featured .description .short-desc p{
    font-size:20px;
}
.vc-search__result-item.featured .text-link:first-child{
  margin-bottom: 5px;
}
.vc-search__result-item.featured .text-link{
    font-size:20px;
}
.text-link {
    display: block;
}
.vc-search__result-item .button-wrapper {
    height: 48px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}


@media (max-width: 767px) {
  .vc-search__form .vc-select {
    width: 100%;
  }
  .vc-search__result-item.featured {
    /* width: calc(92% /3); */
    flex-direction: column !important;
}
.vc-search__result-item.featured .vc-title{
	margin: 1.5rem 0 2.5rem !important;
}
.vc-search__result-item.featured .image{
	margin-bottom: 20px !important;
	margin-right: 0 !important;

}

.vc-search__result-item.featured .description{
	display: flex;
	flex-direction:column;
	justify-content: space-between;
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
  flex-wrap:wrap;
  justify-content: flex-start;
  margin-top: 5rem;
}

.vc-search__result-item .image {
  /* background-color: #f3f8fa; */
  /* height: 300px; */
  display: flex;
  justify-content: center;
  align-items: center;
 
}
.vc-search__result-item .image img{
  object-fit:cover;
  height:100%;
  width:auto;
}
.vc-search__result-item .description .by {
  font-size: 18px;
  /* padding: 20px 20px; */
}
.vc-search__result-item {
  	width: calc(92% /3);
    /* margin-right: 2.5rem; */

    display: flex;
    flex-direction: column;
 
    padding-bottom: 1.5rem;
	margin-right: 1.75rem;

   
 
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
  .vc-search__result-item > .description .short-desc{
    height: auto !important;
  }
  .vc-search__result-item .button-wrapper{
    height: auto !important;
  }

}

.vc-search__result-item:not(:last-of-type) {
  margin-bottom: 3rem;
}

.vc-search__result-item p {
  margin: 0 0 10px;
}

.vc-search__result-item.featured > .description {
  width: 100%;
  flex:1;
}

.vc-search__result-item > .description .vc-title {
  margin: 1.5rem 0 2.5rem;
  height:68px;
}
.vc-search__result-item > .description .short-desc {
    height: 200px;
}
.vc-search__result-item.featured > .description .short-desc {
    height: auto;
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
.button.primary{
	margin-bottom: 0.5rem;
}
.vc-search__result-item.featured {
    width: 100%;
    flex-direction: row;
}
.vc-search__result-item.featured .vc-title{
	margin:0;
}
.vc-search__result-item.featured .image{
	margin-bottom: 0;
	margin-right: 2rem;
	flex:1;

}
.vc-search__result-item.featured .description,.vc-search__result-item .description{
	display: flex;
	flex-direction:column;
	justify-content: space-between;
}
.archive-title{
	margin: 0;
}

</style>
<?php get_footer();?>