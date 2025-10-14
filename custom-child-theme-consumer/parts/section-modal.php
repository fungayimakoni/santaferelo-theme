
<div id="modal-internation" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="width: 343px; padding: 24px;">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3><span style="color: #353c41;">Select a language</span></h3>
        <span style="color: #353c41;">Choose a language from the list below and continue</span>
        <?php if(get_field('items_listing', 'options')):?>
            <div class="select-container">
                <select class="country_flags-select">
                    <?php foreach( get_field('items_listing', 'options') as $item ):?>
                        <option value="<?=$item['link'];?>"><?=$item['name'];?>'</option>
                    <?php endforeach;?>
                </select>
            </div>
            
            <div>
                <div class="secondary button launch" style="margin-top: 24px;">&#8203;Continue</div>
            </div>
        <?php endif;?>
    </div>
</div>


<div id="login-modal" class="uk-flex-top" uk-modal>
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
		<button class="uk-modal-close-default" type="button" uk-close></button>
		<h3><span style="color: #353c41;">Select login type</span></h3><p><span style="color: #353c41;"> If you haven’t received your login details then please get in touch with your relocation contact</span></p><p><span class="left-btn"><a href="https://portals.santaferelo.com/assignee/s/login/" target="_blank" class="secondary button" rel="noopener">Login as an assignee</a></span><span class="right-btn"><a href="https://portals.santaferelo.com/client/s/login/" target="_blank" rel="noopener" class="secondary button">Login as a client</a></span></p>
	</div>
</div>

<div id="wechat-modal" class="uk-flex-top" uk-modal>
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
	 	<button class="uk-modal-close-default" type="button" uk-close></button>
	 		<img src="/wp-content/uploads/2018/11/wechat_qrcode.jpg" alt="Santa Fe WeChat QR code"/>
	 		<div class="wechat_qr">
             <i class="fab fa-weixin"></i><span>ID: SantaFeRelo</span>
	 		</div>
	</div>
</div>