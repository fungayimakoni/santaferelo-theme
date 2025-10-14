<?php 
		echo '</div>';
	echo '</main>';
	get_template_part('parts/section-admin','template');
	// BACK TO TOP
    wp_footer();?>
<!-- <script type="text/javascript">
		function setCookie(name, value, days){
		    var date = new Date();
		    date.setTime(date.getTime() + (days*24*60*60*1000)); 
		    var expires = "; expires=" + date.toGMTString();
		    document.cookie = name + "=" + value + expires + ";path=/";
		}
		// New code
		// #check
		(function($){
			function getGCLID(p){
				var url = new URL(window.location);
				var c = url.searchParams.get(p);
				return c;
			}
			$('#footer_gclid').val(getGCLID('gclid'));
			$('#footer_gclid2').val(getGCLID('gclid'));
		//         console.log($('#footer_gclid').val());
    	})(jQuery)

        $('#footer_gclid').val(getGCLID('gclid'));
        $('#footer_gclid').val(getGCLID('gclid'));
		function getParam(p){
		    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
		    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
		}
		var gclid = getParam('gclid');
		if(gclid){
		    var gclsrc = getParam('gclsrc');
		    if(!gclsrc || gclsrc.indexOf('aw') !== -1){
			    setCookie('gclid', gclid, 90);
			}
		}
		function readCookie(name) { 
			var n = name + "="; 
			var cookie = document.cookie.split(';'); 
			for(var i=0;i < cookie.length;i++) {      
			  var c = cookie[i];      
			  while (c.charAt(0)==' '){c = c.substring(1,c.length);}      
			  if (c.indexOf(n) == 0){return c.substring(n.length,c.length);} 
			} 
			return null; 
			} 

			window.onload = function() {      
			  			  document.getElementsByClassName("calc-gclidCL")[0].value = readCookie('gclid'); 

		} 
	</script> -->
<!-- <script type="text/javascript">
		(function(){var s = document.getElementsByTagName("script")[0];
		var b = document.createElement("script");
		b.type = "text/javascript";b.async = true;
		b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
		s.parentNode.insertBefore(b, s);})();
	</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=1019785&fmt=gif" />
	</noscript> -->
<!-- <script>
	var _hmt = _hmt || [];
	(function () {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?c91f9bdf9866288a9d3269023c747264";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
<script type="text/javascript" src='https://forms.zoho.eu/js/zf_gclid.js' defer></script>
<script type="text/javascript" src='https://crm.zoho.eu/crm/javascript/zcga.js' defer> </script>
<script type="text/javascript">
	function ZFLead() {}
	ZFLead.utmPValObj = ZFLead.utmPValObj || {};

	ZFLead.utmPNameArr = new Array('utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content');

	ZFLead.prototype.zfutm_getLeadVal = function (pName) {
		var qStr = '';
		try {
			qStr = window.top.location.search.substring(1);
		} catch (e) {
			qStr = '';
		}
		var pNameTemp = pName + '=';
		var pValue = '';
		if (typeof qStr !== "undefined" && qStr !== null && qStr.length > 0) {
			var begin = qStr.indexOf(pNameTemp);
			if (begin != -1) {
				begin = begin + pNameTemp.length;
				end = qStr.indexOf('&', begin);
				if (end == -1) {
					end = qStr.length;
				}
				pValue = qStr.substring(begin, end);
			}
		}
		if (pValue == undefined || pValue == '') {
			pValue = this.zfutm_gC(pName);
		}
		if (typeof pValue !== "undefined" && pValue !== null) {
			pValue = pValue.replace(/\+/g, ' ');
		}
		return pValue;
	};

	ZFLead.prototype.zfutm_sC = function (paramName, path, domain, secure) {
		var value = ZFLead.utmPValObj[paramName];
		if (typeof value !== "undefined" && value !== null) {
			var cookieStr = paramName + "=" + escape(value);
			var exdate = new Date();
			exdate.setDate(exdate.getDate() + 7);
			cookieStr += "; expires=" + exdate.toGMTString();
			cookieStr += "; path=/";
			if (domain) {
				cookieStr += "; domain=" + escape(domain);
			}
			if (secure) {
				cookieStr += "; secure";
			}
			document.cookie = cookieStr;
		}
	};

	ZFLead.prototype.zfutm_ini = function () {
		for (var i = 0; i < ZFLead.utmPNameArr.length; i++) {
			var zf_pN = ZFLead.utmPNameArr[i];
			var zf_pV = this.zfutm_getLeadVal(zf_pN);
			if (typeof zf_pV !== "undefined" && zf_pV !== null) {
				ZFLead.utmPValObj[zf_pN] = zf_pV;
			}
		}
		for (var pkey in ZFLead.utmPValObj) {
			this.zfutm_sC(pkey);
		}
	};


	ZFLead.prototype.zfutm_gC = function (cookieName) {
		var cookieArr = document.cookie.split('; ');
		for (var i = 0; i < cookieArr.length; i++) {
			var cookieVals = cookieArr[i].split('=');
			if (cookieVals[0] === cookieName && cookieVals[1]) {
				return unescape(cookieVals[1]);
			}
		}
	};
	ZFLead.prototype.zfutm_iframeSprt = function () {
		var zf_frame = document.getElementsByTagName("iframe");
		for (var i = 0; i < zf_frame.length; ++i) {
			if ((zf_frame[i].src).indexOf('formperma') > 0) {
				var zf_src = zf_frame[i].src;
				for (var prmIdx = 0; prmIdx < ZFLead.utmPNameArr.length; prmIdx++) {
					var utmPm = ZFLead.utmPNameArr[prmIdx];
					var utmVal = this.zfutm_gC(ZFLead.utmPNameArr[prmIdx]);
					if (typeof utmVal !== "undefined") {
						if (zf_src.indexOf('?') > 0) {
							zf_src = zf_src + '&' + utmPm + '=' + utmVal;
						} else {
							zf_src = zf_src + '?' + utmPm + '=' + utmVal;
						}
					}
				}
				if (zf_frame[i].src.length < zf_src.length) {
					zf_frame[i].src = zf_src;
				}
			}
		}
	};
	ZFLead.prototype.zfutm_DHtmlSprt = function () {
		var zf_formsArr = document.forms;
		for (var frmInd = 0; frmInd < zf_formsArr.length; frmInd++) {
			var zf_form_act = zf_formsArr[frmInd].action;
			if (zf_form_act && zf_form_act.indexOf('formperma') > 0) {
				for (var prmIdx = 0; prmIdx < ZFLead.utmPNameArr.length; prmIdx++) {
					var utmPm = ZFLead.utmPNameArr[prmIdx];
					var utmVal = this.zfutm_gC(ZFLead.utmPNameArr[prmIdx]);
					if (typeof utmVal !== "undefined") {
						var fieldObj = zf_formsArr[frmInd][utmPm];
						if (fieldObj) {
							fieldObj.value = utmVal;
						}
					}
				}
			}
		}
	};
	ZFLead.prototype.zfutm_jsEmbedSprt = function (id) {
		document.getElementById('zforms_iframe_id').removeAttribute("onload");
		var jsEmbdFrm = document.getElementById("zforms_iframe_id");
		var embdSrc = jsEmbdFrm.src;
		for (var prmIdx = 0; prmIdx < ZFLead.utmPNameArr.length; prmIdx++) {
			var utmPm = ZFLead.utmPNameArr[prmIdx];
			var utmVal = this.zfutm_gC(ZFLead.utmPNameArr[prmIdx]);
			if (typeof utmVal !== "undefined") {
				if (embdSrc.indexOf('?') > 0) {
					embdSrc = embdSrc + '&' + utmPm + '=' + utmVal;
				} else {
					embdSrc = embdSrc + '?' + utmPm + '=' + utmVal;
				}
			}
		}
		jsEmbdFrm.src = embdSrc;
	};
	var zfutm_zfLead = new ZFLead();
	zfutm_zfLead.zfutm_ini();
	window.onload = function () {
		zfutm_zfLead.zfutm_iframeSprt();
		zfutm_zfLead.zfutm_DHtmlSprt();
	}
</script> -->
</body>

</html>