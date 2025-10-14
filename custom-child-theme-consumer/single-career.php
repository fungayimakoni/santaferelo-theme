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
  padding-bottom: 35px;
}
.vc-section ul li ul{
  margin-top: 10px ;
}
.vc-section ul{
  padding-left: 30px ;
}
</style>
    <div class="vc-blue-banner">
        <div class="container ">
            <h2 class="title"><?php the_title();?></h2>
            <ul class="vc-no-bullets ">
                <li>
                    <?php $term=get_the_terms(get_the_ID(),'job_category');?>
                    <span>Category:</span> <span><?php echo $term[0]->name;?></span>
                </li>
                <?php $office = get_field('office');?>
          
                <li>
                    <span>Location:</span> <span><?=$office->post_title;?>, <?= country_name($office->country);?></span>
                </li>
              
                <li>
                    <span>Posted:</span> <span><?= get_the_date("j F Y");?></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container career">
        <div class="back-section">
            <?php 
                $back = $_GET['back'] ? : 'https://www.santaferelo.com/en/corporate-relocation/careers/#jobs';
                if($_GET['office']){
                    $back.='?office='.$_GET['office'];
                }
                if($_GET['job_category']){
                    if($_GET['office']){
                        $back.='&job_category='.$_GET['job_category'];
                    }
                    else{
                        $back.='?job_category='.$_GET['job_category'];
                    }
                }
            ?>
        <a href="https://www.santaferelo.com/en/corporate-relocation/careers/#jobs" class=""><span class="back-arrow"><<</span> Back to search</a>
        </div>
        <?php if(get_field('static_top_description')):?>
          <section class="vc-section">
             <?php the_field('static_top_description');?>
          </section>
        <?php endif;?>

        <?php if(get_field('key_responsibilities')):?>
          <section class="vc-section">
             <h3><?php the_field('key_responsibilities_for_this_role_label');?></h3>
             <?php the_field('key_responsibilities');?>
          </section>
        <?php endif;?>

        <?php if(get_field('knowledge_skills_and_experiences')):?>
          <section class="vc-section">
             <h3><?php the_field('essential_knowledge_skills_and_experience_label');?></h3>
             <?php the_field('knowledge_skills_and_experiences');?>
          </section>
        <?php endif;?>

        <?php if(have_rows('additional_descriptions')):?>
            <?php while(have_rows('additional_descriptions')): the_row();?>
                <section class="vc-section">
                    <h3><?php the_sub_field('header');?></h3>
                    <?php the_sub_field('text');?>
                </section>
            <?php endwhile;?>
        <?php endif;?>

        <?php if(get_field('static_bottom_description')):?>
          <section class="vc-section">
             <?php the_field('static_bottom_description');?>
          </section>
        <?php endif;?>
        <section class="vc-section">
            <h2 class="vc-title">How to apply</h2>
            <p>Simply send your CV and covering letter by clicking on the apply button below.</p>
        </section>
        <section class="vc-section">
           <?php $cId = get_the_ID();?>
            <a href="/corporate-relocation/career-application-form/?cID=<?=$cId;?>" class="vc-btn vc-btnOutline">Apply Now</a>
        </section>
    </div>
<?php get_footer();?>
