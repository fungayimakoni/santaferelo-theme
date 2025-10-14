<?php 
/**
 * Template Name: Event Page
 */

 get_header();
?>

<section class="main-layout inner-page-layout" style="padding-top:2rem">
		<div class="container-fluid default-container">
			<div class="row">
        
        <div class="container">
          <?php the_content();?>
                   
                 
              <div class="vc-search__wrapper">
                <div class="category">
                <?php 
             $tax =get_terms([
              'taxonomy'=>'event-category',
              'hide_empty' => false
             ]);
            
            //  print_r($tax);
            // var_dump($tax);
             ?>
             <?php /*if(!empty($tax)):?>
              <p class='select-label'>Select category</p>
              <form action="">
              <select name="event-category" id="event-category" class="event-category">
                
                <option value="">All</option>
                <?php foreach($tax as $t):?>
                  <option value="<?= $t->term_id;?>"><?= $t->name;?></option>
                <?php endforeach;?>

             </select> 
             </form>
             <?php endif; */?>
                </div>
                <ul class="vc-search__result" id="events"></ul>
                </div>
             <?php // get_template_part( '/parts/blog-email', 'form' );?>
            
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
      .category{
        /* display: flex;
        flex-direction:column;
        align-items:center; */
      }
      .select-label {
        font-weight: 300;
        color: gray;
      }
      #event-category:after {
        font-family: FontAwesome;
        font-size: 16px;
        content: '\f0d7';
        position: absolute;
        top: 57%;
        right: 20px;
      }
      #event-category {
        width: auto;
        text-align:center;
        position: relative;
        padding-right: 1rem;
      }
     
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
  display: flex;
  justify-content: center;
  align-items: center;
  position:relative;
}
.vc-search__result-item .image img{
  object-fit:cover;
  /* height:100%; */
  width:auto;
  position:relative;
}
/* .vc-search__result-item .image.past::after{
 position:absolute;
 display:flex;
 align-items:center;
 justify-content: center;
 top:10px;
 right:10px;
 content:'';
 color: #FFF;
 background-color:#000;
 padding: 6px 1rem;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 14px;

} */
.vc-search__result-item .image.upcoming::after{
 position:absolute;
 display:flex;
 align-items:center;
 justify-content: center;
 top:10px;
 right:10px;
 content:'upcoming';
 color: #FFF;
 background-color:#ed1c24;
 padding: 6px 1rem;
text-transform: uppercase;
font-weight: bold;
font-size: 14px;

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