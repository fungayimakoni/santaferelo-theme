<?php 
/**
 * Template Name: Sustainability Page
 */

 get_header();
?>
<section class="main-layout inner-page-layout">
	<div class="container-fluid default-container">
    <?php the_content();?>
</div>
</section>


<style>
  .et-db #et-boc .et-l .et_contact_bottom_container{
  float:left !important;
  margin-left:-8px !important;
}
.et_pb_text_inner {
  font-family: 'HelveticaNeue';
  /* font-size:22px; */
}
.et_pb_text_inner p {
  font-family: 'HelveticaNeue';
  /* font-size:16px; */
  line-height: 1.5;
}
/* .et_pb_text_inner ul.nostyle li {
  list-style: none !important;
} */
.main-block-header{
  position: relative;
}
.main-block::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  z-index: 10;
  background-color: rgba(0,0,0,.5) !important;
}
.et-db #et-boc .et-l .et_pb_section_0.et_pb_section {
  background-color: rgba(0,0,0,.5) !important;

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
.show-bullets{
  list-style: disc;
}
.show-bullets li{
  list-style: disc !important;
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