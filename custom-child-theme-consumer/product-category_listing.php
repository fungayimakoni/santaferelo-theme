<?php
/* Template Name: Product category listing */
get_header("frontpage");
$upload_dir = wp_upload_dir();
//call zoho library
require_once($upload_dir['basedir']."/zoho/config.php");
require_once($upload_dir['basedir']."/zoho/zohoClass.php");
//instaniate zoho class
$zohoClass = new zohoClass();
$access_token = $zohoClass->generateAccessTokenByRefreshToken(REFRESH_TOKEN,CLIENT_ID,CLIENT_SECRET,REDIRECT_URI);
$product_data = $zohoClass->getModuleDetails("Products",$access_token,"226426000044800357");
if(isset($_POST['Portal_ID_s'])){
	$product_ids = implode(',', $_POST['product_ids']);
	$opportunity_id = $_POST['opportunity_id'];
	$service_provider = $_POST['Service_Provider'];
	wp_redirect("https://creatorapp.zohopublic.eu/a2zsantafe/paytab-payments/form-perma/Payment/J2nAXsQuhvJD788hQ1nKHWtC4Edy3TuDUhQEaB6zRfzEPTtEaGPhpnQYfxaT3Wdvu82UMtVC84KP6QKAve1n5HVMPqVQU4O0VQBA?Service_Provider=".$service_provider."&opportunity_id=".$opportunity_id."&Portal_ID_s=".$product_ids);
	exit;
}
//echo "<pre>";print_r($product_data);die;
?>
<section id="main-content-wrapper" class="page-with-no-title">
	<div class="container-fluid">

    <div class="row">
        <div class="container">
        	<div id="textcontent-block_60eec6389aaa4" class="textcontent text-dark" style="background-color:#F2F2F2;">
        		<div class="container">
        	<h5 style="text-align: center;">Thank you, we’ll be in touch with you shortly via email</h5>
        	<h1 style="text-align: center;">Here are some helpful services that you can add to your move.</h1>
        	<h5 style="text-align: center;">You may select one or more services that you might be interested in</h5>
            <div class="row">
                <div id="page-content" class="page-content-wrapper">
                    <!-- <article id="post-2170" class="post-2170 page type-page status-publish hentry">
					<?php
					if(isset($product_data->data)){
						?>
						<table class="table">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>Product Image</th>
									<th>Product Name</th>
								</tr>
							</thead>
							<?php
							foreach($product_data->data as $product){
								if($product->Record_Image!=""){
									$image_content = $zohoClass->downloadModuleImage($access_token,"Products",$product->id);
									file_put_contents($upload_dir['basedir']."/zoho/product-images/".$product->id.".png", $image_content);
								}
								?>
								<tr>
									<td><input type="checkbox" name="pids"></td>
									<td><?php if($product->Record_Image!=""){ ?> <img width="100" src="<?php echo $upload_dir['baseurl']."/zoho/product-images/".$product->id.".png"; ?>"> <?php } ?></td>
									<td><?php echo $product->Product_Name; ?></td>
								</tr>
								<?php
							}
							?>
						</table>
						<?php
					}
					?>
					</article> -->
					<?php
					if(isset($product_data->data)){
					?>
					<form action="" class="avinue_form" name="form" id="form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" siq_id="autopick_360">
						<div class="uk-grid">
							<?php
							foreach($product_data->data as $p => $product){
								if($product->Record_Image!=""){
									$image_content = $zohoClass->downloadModuleImage($access_token,"Products",$product->id);
									file_put_contents($upload_dir['basedir']."/zoho/product-images/".$product->id.".png", $image_content);
								}
								?>
							<div class="uk-width-1-1@s uk-width-1-3@l">
								<div class="avinue">
									<div class="avinue_icon"> 
										<label for="Checkbox_<?=$p+1?>"> 
											<input type="checkbox" id="Checkbox_<?=$p+1?>" name="product_ids[]" value="<?php echo $product->id ?>" class="uk-checkbox" > 
											<?php if($product->Record_Image!=""){ ?>
												<img class="uk-align-medium-right" src="<?php echo $upload_dir['baseurl']."/zoho/product-images/".$product->id.".png"; ?>" alt="">
											<?php }else{ ?>
												<!-- <img class="uk-align-medium-right" src="https://sanelo.wpengine.com//wp-content/themes/theme-sanelo/img//Rectangle 68.png" alt=""> -->
											<?php } ?>
											
											<div class="avinue_desc"> 
												<span> <?php echo $product->Product_Name; ?> </span> <br> 
											<?php echo $product->Description; ?>
										</div> 
										<p class="av_price"><?php if($product->Vendor_Cost!=""){ ?>$<?php echo $product->Vendor_Cost; ?><?php } ?></p>
										</label>
									</div>
								</div>
							</div>
						<?php if(($p+1)%3==0){ ?>
						</div>
						<div uk-grid class="uk-grid">
						<?php } } ?>
							
					</div> 
					<div style="text-align:center;">
						<input type="hidden" name="Service_Provider" value="Sanelo Website">
						<input type="hidden" name="opportunity_id" value="<?php echo $_GET['opportunity_id'] ?>">
						<input type="hidden" name="Portal_ID_s" value="226426000043728379">
						<button type="submit"><em>Checkout</em></button>
					</div>
					</form>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>