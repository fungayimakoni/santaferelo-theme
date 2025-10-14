<?php 
/*
Template Name: About us layout
Template Post Type: page
*/
get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('banner')):
					$banner = get_field('banner');
					if ( $banner ):
						echo '<div class="message-banner">';
							echo '<div class="banner-wrapper">';
								echo '<div class="container">';
								if ( $banner['message'] || $banner['button'] ):
									
										if ( $banner['message'] ):
											echo $banner['message'];
										endif;
										echo ( $banner['button'] ? "<a href='".( $banner['button']['url'] )."' target='".$banner['button']['target']."' class='button primary'>".$banner['button']['title']."</a>" : "" );
									
								endif;
								echo '</div>';
							echo '</div>';
						echo '</div>';
					endif;
				endif;
				$main =  get_field('main_content');
				if( $main ):
					if($main['title_description']):
						echo '<div class="container main-content">';
							echo $main['title_description'];
						echo '</div>';
					endif;
					if($main['four_column']):
						echo '<div class="container bordered-columns">';
							echo '<div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match" uk-grid>';
								foreach($main['four_column'] as $item):
									echo '<div>';
										echo '<div class="bordered" '.($item['color'] ? 'style="border-bottom: 5px solid; border-color:'.$item['color'].'"' : '').'>';
											echo '<h2 '.($item['color'] ? 'style="color:'.$item['color'].'"' : '').'>'.$item['header'].'</h2>';
											echo '<p>'.$item['subheader'].'</p>';
										echo '</div>';
									echo '</div>';
								endforeach;
							echo '</div>';
						echo '</div>';
					endif;
				endif;
				$sup = get_field('add_content');
				if($sup):
					echo '<div class="container add-content">';
						if($sup['upper_content']):
							echo $sup['upper_content'];
						endif;
						if($sup['upper_content'] || $sup['lower_content']):
							echo '<div class="starstrip">';
								echo '<i class="material-icons">star</i>';
								echo '<i class="material-icons">star</i>';
								echo '<i class="material-icons">star</i>';
								echo '<i class="material-icons">star</i>';
								echo '<i class="material-icons">star</i>';
							echo '</div>';
						endif;
						if($sup['lower_content']):
							echo $sup['lower_content'];
						endif;
					echo '</div>';
					if($sup['article']):
						echo '<div class="article">';
							echo '<div class="container">';
								echo $sup['article'];
							echo '</div>';
						echo '</div>';
					endif;
				endif;
				$vid = get_field('video_content');
				if($vid):
					echo '<div class="container video-content">';
						if($vid['item']):
							echo '<h3>Selection of short films about us</h3>';
							echo '<div class="uk-child-width-1-4@l uk-child-width-1-2@m" uk-grid>';
								foreach($vid['item'] as $item ):
									echo '<div>';
										echo '<a href="#modal-media-youtube" uk-toggle>';
											// echo '<div class="uk-inline">';
											// 	echo '<img src="https://i.ytimg.com/vi/'.$item['youtube_id'].'/maxresdefault.jpg" alt="">';
											// echo '</div>';
											echo '<div class="uk-cover-container">';
												echo '<img src="https://i.ytimg.com/vi/'.$item['youtube_id'].'/maxresdefault.jpg" alt="" uk-cover>';
												echo '<div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle">';
													echo '<div class="uk-position-center">';
														echo '<i class="material-icons">play_circle_outline</i>';
													echo '</div>';
												echo '</div>';
											echo '</div>';
											echo '<div class="title">';
												echo $item['title'];
											echo '</div>';
										echo '</a>';
									echo '</div>';
									echo 	'<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
											    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
											        <button class="uk-modal-close-outside" type="button" uk-close></button>
											        <iframe src="https://www.youtube-nocookie.com/embed/'.$item['youtube_id'].'" width="560" height="315" frameborder="0" uk-video></iframe>
											    </div>
											</div>';
								endforeach;
							echo '</div>';
							if($vid['channel_link']):
								echo '<div class="button-link">';
									echo '<a href="'.( $vid['channel_link'] ).'" target="_blank" class="button primary">Visit us on YouTube<i class="material-icons">launch</i></a>';
								echo '</div>';
							endif;
						endif;
					echo '</div>';
				endif;
				$second = get_field('second_content');
				if($second):
					echo '<div class="second-content">';
						if($second['title']):
							echo '<div class="container title">';
								echo $second['title'];
							echo '</div>';
						endif;
						if($second['four_column']):
							echo '<div class="container bordered-columns">';
								echo '<div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match" uk-grid>';
									foreach($second['four_column'] as $item):
										echo '<div>';
											echo '<div class="bordered" '.($item['color'] ? 'style="border-bottom: 5px solid; border-color:'.$item['color'].'"' : '').'>';
												echo '<h2 '.($item['color'] ? 'style="color:'.$item['color'].'"' : '').'>'.$item['header'].'</h2>';
												echo '<p>'.$item['subheader'].'</p>';
											echo '</div>';
										echo '</div>';
									endforeach;
								echo '</div>';
							echo '</div>';
						endif;
					echo '</div>';
				endif;
				$third = get_field('third_content');
				if($third):
					echo '<div class="container third-content">';
						if($third['content']):
							echo '<div class="main-content">';
								echo $third['content'];
							echo '</div>';
						endif;
						if($third['purple_content']):
							echo '<div class="container purple-columns">';
								echo '<div class="uk-child-width-1-6@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match" uk-grid>';
									foreach($third['purple_content'] as $item):
										echo '<div>';
											echo '<div class="purple">';
												echo '<h3>'.$item['header'].'</h3>';
												echo '<p>'.$item['subheader'].'</p>';
											echo '</div>';
										echo '</div>';
									endforeach;
								echo '</div>';
							echo '</div>';
						endif;
					echo '</div>';
				endif;
				$fourth = get_field('fourth_content');
				if($fourth):
					echo '<div class="container-fluid fourth-content">';
						if($fourth['background_image']):
							echo '<div class="uk-cover-container">';
								echo '<img src="'.$fourth['background_image']['url'].'" alt="" uk-cover>';
								echo '<div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle">';
									if($fourth['header']):
										echo '<div class="uk-position-center">';
											echo $fourth['header'];
										echo '</div>';
									endif;
									if($fourth['description']):
										echo '<div class="uk-position-bottom">';
											echo '<div class="container">';
												echo $fourth['description'];
											echo '</div>';
										echo '</div>';
									endif;
								echo '</div>';
							echo '</div>';
						endif;
					echo '</div>';
				endif;
				$fifth = get_field('fifth_content');
				if($fifth):
					echo '<div class="container fifth-content">';
						if($fifth['item']):
							echo '<div class="uk-child-width-1-3@s uk-grid-match" uk-grid>';
								foreach ($fifth['item'] as $item):
									echo '<div>';
										echo '<div class="border">';
											echo '<h3>'.$item['title'].'</h3>';
											echo '<p>'.$item['description'].'</p>';
										echo '</div>';
									echo '</div>';
								endforeach;
							echo '</div>';
						endif;
						if($fifth['button_link']):
							echo '<div class="button-link">';
								echo '<a href='.( $fifth['button_link']['url'] )."' target='".$fifth['button_link']['target']."' class='button primary'>".$fifth['button_link']['title'].'</a>';
							echo '</div>';
						endif;
					echo '</div>';
				endif;
				$six = get_field('sixth_content');
				if($six):
					echo '<div class="six-content">';
						echo '<div class="container">';
							if($six['content']):
								echo '<div class="container">';
									echo $six['content'];
								echo '</div>';
							endif;
							if($six['button_link']):
								echo '<div class="button-link">';
									echo '<a href='.( $six['button_link']['url'] )."' target='".$six['button_link']['target']."' class='button primary'>".$six['button_link']['title'].'</a>';
								echo '</div>';
							endif;
						echo '</div>';	
					echo '</div>';
				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 