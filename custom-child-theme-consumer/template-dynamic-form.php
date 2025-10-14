<?php
/*
Template Name: Dynamic Form
Template Post Type: page,mobility-webinar,mobility-survey,event-form
*/

get_header('form');?>
<?php  
// $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL ); $country_code = $record->country->isoCode; $country_name =  $record->country->names['en'];

/*
* Code adjustment for GeoTargetingWP plugin compatibility
* Author: Fungayi 03/10/2025
*/
if (function_exists('geot_get')) {
	$record = (object) [
		'country' => geot_get('country'),
		'city' => geot_get('city'),
		'ip' => geot_get('ip'),
		'continent' => geot_get('continent'),
		'state' => geot_get('state')
	];
} else {
	$record = null;
}

$country_code = $record->country->data->iso_code; 
$country_name =  $record->country->data->names->en;

?>
<div class="form-container">
	<h3 style="margin-bottom:40px"><?= get_the_title();?></h3>
	<p><?= get_the_content();?></p>
	<form action="<?= get_field('form_action');?>" id="webinar-form"  method="POST">
		<div class="input-group">
			<label for="tfa_1">
				First Name <span class="required">*</span>
			</label>
			<input data-label="First Name" onkeydown="return /^[A-Za-z\s]*$/i.test(event.key)" type="text" name="tfa_1" class="letter-only not-empty" >
			<p class="error-msg"></p>
		</div>
		<div class="input-group">
			<label for="tfa_2">
				Last Name <span class="required">*</span>
			</label>
			<input data-label="Last Name" onkeydown="return /^[A-Za-z\s]*$/i.test(event.key)" type="text" name="tfa_2" class="letter-only not-empty">
			<p class="error-msg"></p>
		</div>
		<div class="input-group">
			<label for="email">
				Email <span class="required ">*</span>
			</label>
			<input data-label="Email" type="email" name="email" class="email-only not-empty" >
			<p class="error-msg"></p>
		</div>
		<div class="input-group">
			<label for="tfa_4">
				Telephone <span class="required">*</span>
			</label>
			
			<input data-label="Telephone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" type="tel" name="tfa_4" class="number-only not-empty">
			<p class="error-msg"></p>
		</div>
		<div class="input-group">
			<label for="tfa_5">
				Job Title <span class="required">*</span>
			</label>
			
			<input data-label="Job Title" type="text" name="tfa_5" class="letter-only not-empty" >
			<p class="error-msg"></p>
		</div>
		<div class="input-group">
			<label for="tfa_6">
				Company Name <span class="required">*</span>
			</label>
			
			<input data-label="Company Name" type="text" name="tfa_6" class="not-empty" >
			<p class="error-msg"></p>
		</div>
		<div class="input-group">
			<label for="tfa_1006">
				Country <span class="required">*</span>
			</label>
			<select data-label="Country" name="tfa_1006" class="not-empty" >
				<option selected="selected" value="">-Select-</option>
				<option <?= $country_name=="Afghanistan"?'selected="selected"':'';?> value="Afghanistan">Afghanistan</option>
				<option <?= $country_name=="Aland Islands"?'selected="selected"':'';?> value="Aland Islands">Aland Islands</option>
				<option <?= $country_name=="Albania"?'selected="selected"':'';?> value="Albania">Albania</option>
				<option <?= $country_name=="Algeria"?'selected="selected"':'';?> value="Algeria">Algeria</option>

				<option <?= $country_name=="America Samoa"?'selected="selected"':'';?> value="America Samoa">America Samoa</option>
				<option <?= $country_name=="Andorra"?'selected="selected"':'';?> value="Andorra">Andorra</option>
				<option <?= $country_name=="Angola"?'selected="selected"':'';?> value="Angola">Angola</option>
				<option <?= $country_name=="Anguilla"?'selected="selected"':'';?> value="Anguilla">Anguilla</option>
				<option <?= $country_name=="Antarctica"?'selected="selected"':'';?> value="Antarctica">Antarctica</option>
				<option <?= $country_name=="Antigua and Barbuda"?'selected="selected"':'';?> value="Antigua and Barbuda">Antigua and Barbuda</option>
				<option <?= $country_name=="Argentina"?'selected="selected"':'';?> value="Argentina">Argentina</option>
				<option <?= $country_name=="Armenia"?'selected="selected"':'';?> value="Armenia">Armenia</option>
				<option <?= $country_name=="Aruba"?'selected="selected"':'';?> value="Aruba">Aruba</option>
				<option <?= $country_name=="Australia"?'selected="selected"':'';?> value="Australia">Australia</option>
				<option <?= $country_name=="Austria"?'selected="selected"':'';?> value="Austria">Austria</option>
				<option <?= $country_name=="Azerbaijan"?'selected="selected"':'';?> value="Azerbaijan">Azerbaijan</option>
				<option <?= $country_name=="Bahamas"?'selected="selected"':'';?> value="Bahamas">Bahamas</option>
				<option <?= $country_name=="Bahrain"?'selected="selected"':'';?> value="Bahrain">Bahrain</option>
				<option <?= $country_name=="Bangladesh"?'selected="selected"':'';?> value="Bangladesh">Bangladesh</option>
				<option <?= $country_name=="Barbados"?'selected="selected"':'';?> value="Barbados">Barbados</option>
				<option <?= $country_name=="Belarus"?'selected="selected"':'';?> value="Belarus">Belarus</option>
				<option <?= $country_name=="Belgium"?'selected="selected"':'';?> value="Belgium">Belgium</option>
				<option <?= $country_name=="Belize"?'selected="selected"':'';?> value="Belize">Belize</option>
				<option <?= $country_name=="Benin"?'selected="selected"':'';?> value="Benin">Benin</option>
				<option <?= $country_name=="Bermuda"?'selected="selected"':'';?> value="Bermuda">Bermuda</option>
				<option <?= $country_name=="Bhutan"?'selected="selected"':'';?> value="Bhutan">Bhutan</option>
				<option <?= $country_name=="Bolivia"?'selected="selected"':'';?> value="Bolivia">Bolivia</option>
				<option <?= $country_name=="Plurinational State of"?'selected="selected"':'';?> value="Plurinational State of">Plurinational State of</option>
				<option <?= $country_name=="Bonaire"?'selected="selected"':'';?> value="Bonaire">Bonaire</option>
				<option <?= $country_name=="Sint Eustatius and Saba"?'selected="selected"':'';?> value="Sint Eustatius and Saba">Sint Eustatius and Saba</option>
				<option <?= $country_name=="Bosnia and Herzegovina"?'selected="selected"':'';?> value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option <?= $country_name=="Botswana"?'selected="selected"':'';?> value="Botswana">Botswana</option>
				<option <?= $country_name=="Bouvet Island"?'selected="selected"':'';?> value="Bouvet Island">Bouvet Island</option>
				<option <?= $country_name=="Brazil"?'selected="selected"':'';?> value="Brazil">Brazil</option>
				<option <?= $country_name=="British Indian Ocean Territory"?'selected="selected"':'';?> value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				<option <?= $country_name=="Brunei Darussalam"?'selected="selected"':'';?> value="Brunei Darussalam">Brunei Darussalam</option>
				<option <?= $country_name=="Bulgaria"?'selected="selected"':'';?> value="Bulgaria">Bulgaria</option>
				<option <?= $country_name=="Burkina Faso"?'selected="selected"':'';?> value="Burkina Faso">Burkina Faso</option>
				<option <?= $country_name=="Burundi"?'selected="selected"':'';?> value="Burundi">Burundi</option>
				<option <?= $country_name=="Cambodia"?'selected="selected"':'';?> value="Cambodia">Cambodia</option>
				<option <?= $country_name=="Cameroon"?'selected="selected"':'';?> value="Cameroon">Cameroon</option>
				<option <?= $country_name=="Canada"?'selected="selected"':'';?> value="Canada">Canada</option>
				<option <?= $country_name=="Cape Verde"?'selected="selected"':'';?> value="Cape Verde">Cape Verde</option>
				<option <?= $country_name=="Cayman Islands"?'selected="selected"':'';?> value="Cayman Islands">Cayman Islands</option>
				<option <?= $country_name=="Central African Republic"?'selected="selected"':'';?> value="Central African Republic">Central African Republic</option>
				<option <?= $country_name=="Chad"?'selected="selected"':'';?> value="Chad">Chad</option>
				<option <?= $country_name=="Chile"?'selected="selected"':'';?> value="Chile">Chile</option>
				<option <?= $country_name=="China"?'selected="selected"':'';?> value="China">China</option>
				<option <?= $country_name=="Christmas Island"?'selected="selected"':'';?> value="Christmas Island">Christmas Island</option>
				<option <?= $country_name=="Cocos (Keeling) Islands"?'selected="selected"':'';?> value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
				<option <?= $country_name=="Colombia"?'selected="selected"':'';?> value="Colombia">Colombia</option>
				<option <?= $country_name=="Comoros"?'selected="selected"':'';?> value="Comoros">Comoros</option>
				<option <?= $country_name=="Congo"?'selected="selected"':'';?> value="Congo">Congo</option>
				<option <?= $country_name=="Cook Islands"?'selected="selected"':'';?> value="Cook Islands">Cook Islands</option>
				<option <?= $country_name=="Costa Rica"?'selected="selected"':'';?> value="Costa Rica">Costa Rica</option>
				<option <?= $country_name=="Cote d'Ivoire"?'selected="selected"':'';?> value="Cote d'Ivoire">Cote d'Ivoire</option>
				<option <?= $country_name=="Croatia"?'selected="selected"':'';?> value="Croatia">Croatia</option>
				<option <?= $country_name=="Cuba"?'selected="selected"':'';?> value="Cuba">Cuba</option>
				<option <?= $country_name=="Curacao"?'selected="selected"':'';?> value="Curacao">Curacao</option>
				<option <?= $country_name=="Cyprus"?'selected="selected"':'';?> value="Cyprus">Cyprus</option>
				<option <?= $country_name=="Czech Republic"?'selected="selected"':'';?> value="Czech Republic">Czech Republic</option>
				<option <?= $country_name=="Democratic People's Republic of Korea"?'selected="selected"':'';?> value="Democratic People's Republic of Korea">Democratic People's Republic of Korea</option>
				<option <?= $country_name=="Democratic Republic of the Congo"?'selected="selected"':'';?> value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
				<option <?= $country_name=="Denmark"?'selected="selected"':'';?> value="Denmark">Denmark</option>
				<option <?= $country_name=="Djibouti"?'selected="selected"':'';?> value="Djibouti">Djibouti</option>
				<option <?= $country_name=="Dominica"?'selected="selected"':'';?> value="Dominica">Dominica</option>
				<option <?= $country_name=="Dominican Republic"?'selected="selected"':'';?> value="Dominican Republic">Dominican Republic</option>
				<option <?= $country_name=="Ecuador"?'selected="selected"':'';?> value="Ecuador">Ecuador</option>
				<option <?= $country_name=="Egypt"?'selected="selected"':'';?> value="Egypt">Egypt</option>
				<option <?= $country_name=="El Salvador"?'selected="selected"':'';?> value="El Salvador">El Salvador</option>
				<option <?= $country_name=="Equatorial Guinea"?'selected="selected"':'';?> value="Equatorial Guinea">Equatorial Guinea</option>
				<option <?= $country_name=="Eritrea"?'selected="selected"':'';?> value="Eritrea">Eritrea</option>
				<option <?= $country_name=="Estonia"?'selected="selected"':'';?> value="Estonia">Estonia</option>
				<option <?= $country_name=="Ethiopia"?'selected="selected"':'';?> value="Ethiopia">Ethiopia</option>
				<option <?= $country_name=="Falkland Islands (Malvinas)"?'selected="selected"':'';?> value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
				<option <?= $country_name=="Faroe Islands"?'selected="selected"':'';?> value="Faroe Islands">Faroe Islands</option>
				<option <?= $country_name=="Fiji"?'selected="selected"':'';?> value="Fiji">Fiji</option>
				<option <?= $country_name=="Finland"?'selected="selected"':'';?> value="Finland">Finland</option>
				<option <?= $country_name=="France"?'selected="selected"':'';?> value="France">France</option>
				<option <?= $country_name=="French Guiana"?'selected="selected"':'';?> value="French Guiana">French Guiana</option>
				<option <?= $country_name=="French Polynesia"?'selected="selected"':'';?> value="French Polynesia">French Polynesia</option>
				<option <?= $country_name=="French Southern Territories"?'selected="selected"':'';?>  value="French Southern Territories">French Southern Territories</option>
				<option <?= $country_name=="Gabon"?'selected="selected"':'';?>  value="Gabon">Gabon</option>
				<option <?= $country_name=="Gambia"?'selected="selected"':'';?>  value="Gambia">Gambia</option>
				<option <?= $country_name=="Georgia"?'selected="selected"':'';?>  value="Georgia">Georgia</option>
				<option <?= $country_name=="Germany"?'selected="selected"':'';?>  value="Germany">Germany</option>
				<option  <?= $country_name=="Ghana"?'selected="selected"':'';?> value="Ghana">Ghana</option>
				<option <?= $country_name=="Gibraltar"?'selected="selected"':'';?>  value="Gibraltar">Gibraltar</option>
				<option <?= $country_name=="Greece"?'selected="selected"':'';?>  value="Greece">Greece</option>
				<option <?= $country_name=="Greenland"?'selected="selected"':'';?>  value="Greenland">Greenland</option>
				<option <?= $country_name=="Grenada"?'selected="selected"':'';?>  value="Grenada">Grenada</option>
				<option <?= $country_name=="Guadeloupe"?'selected="selected"':'';?>  value="Guadeloupe">Guadeloupe</option>
				<option <?= $country_name=="Guam"?'selected="selected"':'';?>  value="Guam">Guam</option>
				<option <?= $country_name=="Guatemala"?'selected="selected"':'';?>  value="Guatemala">Guatemala</option>
				<option <?= $country_name=="Guernsey"?'selected="selected"':'';?>  value="Guernsey">Guernsey</option>
				<option <?= $country_name=="Guinea"?'selected="selected"':'';?>  value="Guinea">Guinea</option>
				<option <?= $country_name=="Guinea-Bissau"?'selected="selected"':'';?>  value="Guinea-Bissau">Guinea-Bissau</option>
				<option <?= $country_name=="Guyana"?'selected="selected"':'';?>  value="Guyana">Guyana</option>
				<option <?= $country_name=="Haiti"?'selected="selected"':'';?>  value="Haiti">Haiti</option>
				<option <?= $country_name=="Heard Island and McDonald Islands"?'selected="selected"':'';?>  value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
				<option <?= $country_name=="Holy See (Vatican City State)"?'selected="selected"':'';?>  value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
				<option <?= $country_name=="Honduras"?'selected="selected"':'';?>  value="Honduras">Honduras</option>
				<option <?= $country_name=="Hong Kong"?'selected="selected"':'';?>  value="Hong Kong">Hong Kong</option>
				<option <?= $country_name=="Hungary"?'selected="selected"':'';?>  value="Hungary">Hungary</option>
				<option <?= $country_name=="Iceland"?'selected="selected"':'';?>  value="Iceland">Iceland</option>
				<option <?= $country_name=="India"?'selected="selected"':'';?>  value="India">India</option>
				<option <?= $country_name=="Indonesia"?'selected="selected"':'';?>  value="Indonesia">Indonesia</option>
				<option <?= $country_name=="Iran"?'selected="selected"':'';?>  value="Iran">Iran</option>
				<option <?= $country_name=="Islamic Republic of"?'selected="selected"':'';?>  value="Islamic Republic of">Islamic Republic of</option>
				<option <?= $country_name=="Iraq"?'selected="selected"':'';?>  value="Iraq">Iraq</option>
				<option <?= $country_name=="Ireland"?'selected="selected"':'';?>  value="Ireland">Ireland</option>
				<option <?= $country_name=="Isle of Man"?'selected="selected"':'';?>  value="Isle of Man">Isle of Man</option>
				<option <?= $country_name=="Israel"?'selected="selected"':'';?>  value="Israel">Israel</option>
				<option <?= $country_name=="Italy"?'selected="selected"':'';?>  value="Italy">Italy</option>
				<option <?= $country_name=="Jamaica"?'selected="selected"':'';?>  value="Jamaica">Jamaica</option>
				<option <?= $country_name=="Japan"?'selected="selected"':'';?>  value="Japan">Japan</option>
				<option <?= $country_name=="Jersey"?'selected="selected"':'';?>  value="Jersey">Jersey</option>
				<option <?= $country_name=="Jordan"?'selected="selected"':'';?>  value="Jordan">Jordan</option>
				<option <?= $country_name=="Kazakhstan"?'selected="selected"':'';?>  value="Kazakhstan">Kazakhstan</option>
				<option <?= $country_name=="Kenya"?'selected="selected"':'';?>  value="Kenya">Kenya</option>
				<option <?= $country_name=="Kiribati"?'selected="selected"':'';?>  value="Kiribati">Kiribati</option>
				<option <?= $country_name=="Kuwait"?'selected="selected"':'';?>  value="Kuwait">Kuwait</option>
				<option <?= $country_name=="Kyrgyzstan"?'selected="selected"':'';?> value="Kyrgyzstan">Kyrgyzstan</option>
				<option <?= $country_name=="Lao People's Democratic Republic"?'selected="selected"':'';?> value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
				<option <?= $country_name=="Latvia"?'selected="selected"':'';?> value="Latvia">Latvia</option>
				<option <?= $country_name=="Lebanon"?'selected="selected"':'';?> value="Lebanon">Lebanon</option>
				<option <?= $country_name=="Lesotho"?'selected="selected"':'';?> value="Lesotho">Lesotho</option>
				<option <?= $country_name=="Liberia"?'selected="selected"':'';?> value="Liberia">Liberia</option>
				<option <?= $country_name=="Libya"?'selected="selected"':'';?> value="Libya">Libya</option>
				<option <?= $country_name=="Liechtenstein"?'selected="selected"':'';?> value="Liechtenstein">Liechtenstein</option>
				<option <?= $country_name=="Lithuania"?'selected="selected"':'';?> value="Lithuania">Lithuania</option>
				<option <?= $country_name=="Luxembourg"?'selected="selected"':'';?> value="Luxembourg">Luxembourg</option>
				<option <?= $country_name=="Macao"?'selected="selected"':'';?> value="Macao">Macao</option>
				<option <?= $country_name=="Macedonia"?'selected="selected"':'';?> value="Macedonia">Macedonia</option>
				<option <?= $country_name=="Madagascar"?'selected="selected"':'';?> value="Madagascar">Madagascar</option>
				<option <?= $country_name=="Malawi"?'selected="selected"':'';?> value="Malawi">Malawi</option>
				<option <?= $country_name=="Malaysia"?'selected="selected"':'';?> value="Malaysia">Malaysia</option>
				<option <?= $country_name=="Maldives"?'selected="selected"':'';?> value="Maldives">Maldives</option>
				<option <?= $country_name=="Mali"?'selected="selected"':'';?> value="Mali">Mali</option>
				<option <?= $country_name=="Malta"?'selected="selected"':'';?> value="Malta">Malta</option>
				<option <?= $country_name=="Martinique"?'selected="selected"':'';?> value="Martinique">Martinique</option>
				<option <?= $country_name=="Mauritania"?'selected="selected"':'';?> value="Mauritania">Mauritania</option>
				<option <?= $country_name=="Mauritius"?'selected="selected"':'';?> value="Mauritius">Mauritius</option>
				<option <?= $country_name=="Mayotte"?'selected="selected"':'';?> value="Mayotte">Mayotte</option>
				<option <?= $country_name=="Mexico"?'selected="selected"':'';?> value="Mexico">Mexico</option>
				<option <?= $country_name=="Moldova"?'selected="selected"':'';?> value="Moldova">Moldova</option>
				<option <?= $country_name=="Monaco"?'selected="selected"':'';?> value="Monaco">Monaco</option>
				<option <?= $country_name=="Mongolia"?'selected="selected"':'';?> value="Mongolia">Mongolia</option>
				<option <?= $country_name=="Montenegro"?'selected="selected"':'';?> value="Montenegro">Montenegro</option>
				<option <?= $country_name=="Montserrat"?'selected="selected"':'';?> value="Montserrat">Montserrat</option>
				<option <?= $country_name=="Morocco"?'selected="selected"':'';?> value="Morocco">Morocco</option>
				<option <?= $country_name=="Mozambique"?'selected="selected"':'';?> value="Mozambique">Mozambique</option>
				<option <?= $country_name=="Myanmar"?'selected="selected"':'';?> value="Myanmar">Myanmar</option>
				<option <?= $country_name=="Namibia"?'selected="selected"':'';?> value="Namibia">Namibia</option>
				<option <?= $country_name=="Nauru"?'selected="selected"':'';?> value="Nauru">Nauru</option>
				<option <?= $country_name=="Nepal"?'selected="selected"':'';?> value="Nepal">Nepal</option>
				<option <?= $country_name=="Netherlands"?'selected="selected"':'';?> value="Netherlands">Netherlands</option>
				<option <?= $country_name=="New Caledonia"?'selected="selected"':'';?> value="New Caledonia">New Caledonia</option>
				<option <?= $country_name=="New Zealand"?'selected="selected"':'';?> value="New Zealand">New Zealand</option>
				<option <?= $country_name=="Nicaragua"?'selected="selected"':'';?> value="Nicaragua">Nicaragua</option>
				<option <?= $country_name=="Niger"?'selected="selected"':'';?> value="Niger">Niger</option>
				<option <?= $country_name=="Nigeria"?'selected="selected"':'';?> value="Nigeria">Nigeria</option>
				<option <?= $country_name=="Niue"?'selected="selected"':'';?> value="Niue">Niue</option>
				<option <?= $country_name=="Norfolk Island"?'selected="selected"':'';?> value="Norfolk Island">Norfolk Island</option>
				<option <?= $country_name=="Norway"?'selected="selected"':'';?> value="Norway">Norway</option>
				<option <?= $country_name=="Oman"?'selected="selected"':'';?> value="Oman">Oman</option>
				<option <?= $country_name=="Pakistan"?'selected="selected"':'';?> value="Pakistan">Pakistan</option>
				<option <?= $country_name=="Palau"?'selected="selected"':'';?> value="Palau">Palau</option>
				<option <?= $country_name=="Palestinian Territory"?'selected="selected"':'';?> value="Palestinian Territory">Palestinian Territory</option>
				<option <?= $country_name=="Occupied"?'selected="selected"':'';?> value="Occupied">Occupied</option>
				<option <?= $country_name=="Panama"?'selected="selected"':'';?> value="Panama">Panama</option>
				<option <?= $country_name=="Papua New Guinea"?'selected="selected"':'';?> value="Papua New Guinea">Papua New Guinea</option>
				<option <?= $country_name=="Paraguay"?'selected="selected"':'';?> value="Paraguay">Paraguay</option>
				<option <?= $country_name=="Peru"?'selected="selected"':'';?> value="Peru">Peru</option>
				<option <?= $country_name=="Philippines"?'selected="selected"':'';?> value="Philippines">Philippines</option>
				<option <?= $country_name=="Pitcairn"?'selected="selected"':'';?> value="Pitcairn">Pitcairn</option>
				<option <?= $country_name=="Poland"?'selected="selected"':'';?> value="Poland">Poland</option>
				<option <?= $country_name=="Portugal"?'selected="selected"':'';?> value="Portugal">Portugal</option>
				<option <?= $country_name=="Puerto Rico"?'selected="selected"':'';?> value="Puerto Rico">Puerto Rico</option>
				<option <?= $country_name=="Qatar"?'selected="selected"':'';?> value="Qatar">Qatar</option>
				<option <?= $country_name=="Republic of Korea"?'selected="selected"':'';?> value="Republic of Korea">Republic of Korea</option>
				<option <?= $country_name=="Romania"?'selected="selected"':'';?> value="Romania">Romania</option>
				<option <?= $country_name=="Russian"?'selected="selected"':'';?> value="Russian">Russian</option>
				<option <?= $country_name=="Rwanda"?'selected="selected"':'';?> value="Rwanda">Rwanda</option>
				<option <?= $country_name=="Saint Barthélemy"?'selected="selected"':'';?> value="Saint Barthélemy">Saint Barthélemy</option>
				<option <?= $country_name=="Saint Helena"?'selected="selected"':'';?> value="Saint Helena">Saint Helena</option>
				<option <?= $country_name=="Saint Kitts and Nevis"?'selected="selected"':'';?> value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				<option <?= $country_name=="Saint Lucia"?'selected="selected"':'';?> value="Saint Lucia">Saint Lucia</option>
				<option <?= $country_name=="Saint Martin (French part)"?'selected="selected"':'';?> value="Saint Martin (French part)">Saint Martin (French part)</option>
				<option <?= $country_name=="Saint Pierre and Miquelon"?'selected="selected"':'';?> value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				<option <?= $country_name=="Saint Vincent and the Grenadines"?'selected="selected"':'';?> value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
				<option <?= $country_name=="Samoa"?'selected="selected"':'';?> value="Samoa">Samoa</option>
				<option <?= $country_name=="San Marino"?'selected="selected"':'';?> value="San Marino">San Marino</option>
				<option <?= $country_name=="Sao Tome and Principe"?'selected="selected"':'';?> value="Sao Tome and Principe">Sao Tome and Principe</option>
				<option <?= $country_name=="Saudi Arabia"?'selected="selected"':'';?> value="Saudi Arabia">Saudi Arabia</option>
				<option <?= $country_name=="Senegal"?'selected="selected"':'';?> value="Senegal">Senegal</option>
				<option <?= $country_name=="Serbia"?'selected="selected"':'';?> value="Serbia">Serbia</option>
				<option <?= $country_name=="Seychelles"?'selected="selected"':'';?> value="Seychelles">Seychelles</option>
				<option <?= $country_name=="Sierra Leone"?'selected="selected"':'';?> value="Sierra Leone">Sierra Leone</option>
				<option <?= $country_name=="Singapore"?'selected="selected"':'';?> value="Singapore">Singapore</option>
				<option <?= $country_name=="Sint Maarten (Dutch part)"?'selected="selected"':'';?> value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
				<option <?= $country_name=="Slovakia"?'selected="selected"':'';?> value="Slovakia">Slovakia</option>
				<option <?= $country_name=="Serbia"?'selected="selected"':'';?> value="Slovenia">Slovenia</option>
				<option <?= $country_name=="Solomon Islands"?'selected="selected"':'';?> value="Solomon Islands">Solomon Islands</option>
				<option <?= $country_name=="Somalia"?'selected="selected"':'';?> value="Somalia">Somalia</option>
				<option <?= $country_name=="South Africa"?'selected="selected"':'';?> value="South Africa">South Africa</option>
				<option <?= $country_name=="South Georgia and the South Sandwich Islands"?'selected="selected"':'';?> value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
				<option <?= $country_name=="South Sudan"?'selected="selected"':'';?> value="South Sudan">South Sudan</option>
				<option <?= $country_name=="Spain"?'selected="selected"':'';?> value="Spain">Spain</option>
				<option <?= $country_name=="Sri Lanka"?'selected="selected"':'';?> value="Sri Lanka">Sri Lanka</option>
				<option <?= $country_name=="Sudan"?'selected="selected"':'';?> value="Sudan">Sudan</option>
				<option <?= $country_name=="Suriname"?'selected="selected"':'';?> value="Suriname">Suriname</option>
				<option <?= $country_name=="Svalbard and Jan Mayen"?'selected="selected"':'';?> value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
				<option <?= $country_name=="Swaziland"?'selected="selected"':'';?> value="Swaziland">Swaziland</option>
				<option <?= $country_name=="Sweden"?'selected="selected"':'';?> value="Sweden">Sweden</option>
				<option <?= $country_name=="Switzerland"?'selected="selected"':'';?> value="Switzerland">Switzerland</option>
				<option <?= $country_name=="Syrian Arab Republic"?'selected="selected"':'';?> value="Syrian Arab Republic">Syrian Arab Republic</option>
				<option <?= $country_name=="Taiwan"?'selected="selected"':'';?> value="Taiwan">Taiwan</option>
				<option <?= $country_name=="Tajikistan"?'selected="selected"':'';?> value="Tajikistan">Tajikistan</option>
				<option <?= $country_name=="Tanzania"?'selected="selected"':'';?> value="Tanzania">Tanzania</option>
				<option <?= $country_name=="Thailand"?'selected="selected"':'';?> value="Thailand">Thailand</option>
				<option <?= $country_name=="Timor-Leste"?'selected="selected"':'';?> value="Timor-Leste">Timor-Leste</option>
				<option <?= $country_name=="Togo"?'selected="selected"':'';?> value="Togo">Togo</option>
				<option <?= $country_name=="Tokelau"?'selected="selected"':'';?> value="Tokelau">Tokelau</option>
				<option <?= $country_name=="Tonga"?'selected="selected"':'';?> value="Tonga">Tonga</option>
				<option <?= $country_name=="Trinidad and Tobago"?'selected="selected"':'';?> value="Trinidad and Tobago">Trinidad and Tobago</option>
				<option <?= $country_name=="Tunisia"?'selected="selected"':'';?> value="Tunisia">Tunisia</option>
				<option <?= $country_name=="Turkey"?'selected="selected"':'';?> value="Turkey">Turkey</option>
				<option <?= $country_name=="Turkmenistan"?'selected="selected"':'';?> value="Turkmenistan">Turkmenistan</option>
				<option <?= $country_name=="Turks and Caicos Islands"?'selected="selected"':'';?> value="Turks and Caicos Islands">Turks and Caicos Islands</option>
				<option <?= $country_name=="Tuvalu"?'selected="selected"':'';?> value="Tuvalu">Tuvalu</option>
				<option <?= $country_name=="U.S. Virgin Islands"?'selected="selected"':'';?> value="U.S. Virgin Islands">U.S. Virgin Islands</option>
				<option <?= $country_name=="Uganda"?'selected="selected"':'';?> value="Uganda">Uganda</option>
				<option <?= $country_name=="Ukraine"?'selected="selected"':'';?> value="Ukraine">Ukraine</option>
				<option <?= $country_name=="United Arab Emirates"?'selected="selected"':'';?> value="United Arab Emirates">United Arab Emirates</option>
				<option <?= $country_name=="United Kingdom"?'selected="selected"':'';?> value="United Kingdom">United Kingdom</option>
				<option <?= $country_name=="United States"?'selected="selected"':'';?> value="United States">United States</option>
				<option <?= $country_name=="United States Minor Outlying Islands"?'selected="selected"':'';?> value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
				<option <?= $country_name=="Uruguay"?'selected="selected"':'';?> value="Uruguay">Uruguay</option>
				<option <?= $country_name=="Uzbekistan"?'selected="selected"':'';?> value="Uzbekistan">Uzbekistan</option>
				<option <?= $country_name=="Vanuatu"?'selected="selected"':'';?> value="Vanuatu">Vanuatu</option>
				<option <?= $country_name=="Venezuela"?'selected="selected"':'';?> value="Venezuela">Venezuela</option>
				<option <?= $country_name=="Vietnam"?'selected="selected"':'';?> value="Vietnam">Vietnam</option>
				<option <?= $country_name=="Virgin Islands"?'selected="selected"':'';?> value="Virgin Islands">Virgin Islands</option>
				<option <?= $country_name=="Wallis and Futuna"?'selected="selected"':'';?> value="Wallis and Futuna">Wallis and Futuna</option>
				<option <?= $country_name=="Western Sahara"?'selected="selected"':'';?> value="Western Sahara">Western Sahara</option>
				<option <?= $country_name=="Yemen"?'selected="selected"':'';?> value="Yemen">Yemen</option>
				<option <?= $country_name=="Zambia"?'selected="selected"':'';?> value="Zambia">Zambia</option>
				<option <?= $country_name=="Zimbabwe"?'selected="selected"':'';?> value="Zimbabwe">Zimbabwe</option>
				<option <?= $country_name=="Marshall Islands"?'selected="selected"':'';?> value="Marshall Islands">Marshall Islands</option>
				<option <?= $country_name=="Micronesia (Federated States of)"?'selected="selected"':'';?> value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
				<option <?= $country_name=="Northern Mariana Islands"?'selected="selected"':'';?> value="Northern Mariana Islands">Northern Mariana Islands</option>

			

			</select>
			<p class="error-msg"></p>
		</div>
		<div class="input-group horiz">
			<input type="checkbox" value="Yes" name="tfa_1259" id="tfa_1259" class="must-checked">
			<label for="tfa_1259"><?= get_field('confirmation_text');?></label>
		</div>
		<div class="input-group" style='margin-top:30px;margin-bottom:40px'>
		<small>By submitting this form, I agree to the storing and processing of my personal details by Santa Fe Relocation as described in the <a href="https://www.santaferelo.com/en/global-privacy-policy/" target="_blank" rel="noopener noreferrer" style="font-weight: bold; color: #0f6ecd;">Privacy Statement</a></small>
		</div>
		<div class="input-group" style='margin-bottom:40px'>
			<input class="submit-button" type="submit" value="<?= get_field('submit_label')?:'Register';?>">
		</div>
	</form>
</div>
<style>
	p.error-msg{
		margin-top: 0.5rem;
		font-size: 80%;
		font-style: italic;
		color: red;
	}
	.form-container{
		max-width: 500px;
		margin: 5rem auto 1rem;
	}
	@media only screen and (max-width: 500px) {
		.form-container{
			margin-left: 1rem;
			margin-right: 1rem;
		}
	}
	.form-container form .input-group input,.form-container form .input-group select{
		background-color: #fafafa;
		border: solid 2px #dae2e7 !important;
		margin-right: 10px;
		font-size: 16px;
		color: #333;
		font-family: HelveticaNeue;
		font-weight: bold;
		padding: 15px 10px;
	}
	.form-container form .input-group input.error-empty,.form-container form .input-group select.error-empty{
		outline: 1px solid red;
	}
	.form-container form .input-group .submit-button{
		background-color: #000;
		color: #ffffff;
		padding: 13px 15px;
		font-size: 20px !important;
		font-family: HelveticaNeue;
		font-weight: bold;
		font-style: normal;
		font-stretch: normal;
		line-height: 1.5;
		letter-spacing: normal;
		text-align: center;
	}
	.form-container form .input-group .required{
		color:red;
	}
	.form-container form .input-group{
		display:flex;
		flex-direction: column;
		margin-bottom: 1rem;
	}
	.form-container form .input-group.horiz{
		flex-direction: row;
		align-items: flex-start;
	}
	.form-container form .input-group.horiz label{
		font-size: 80%;
	}

</style>
<script>
	const form = document.querySelector('#webinar-form');
	const firstName = form.querySelector('[name="tfa_1"]');
	const lastName = form.querySelector('[name="tfa_2"]');
	const email = form.querySelector('[name="email"]');
	const phone = form.querySelector('[name="tfa_4"]');
	const position = form.querySelector('[name="tfa_5"]');
	const company = form.querySelector('[name="tfa_6"]');
	const country = form.querySelector('[name="tfa_1006"]');
	const submit = form.querySelector('.submit-button');
	const tfa_1259 = form.querySelector('#tfa_1259')


	email.addEventListener('blur',(e)=>{
		if(!ValidateEmail(email)){
			email.classList.add('error-empty')
			email.nextElementSibling.innerHTML=email.dataset.label + ' must be valid format!';
		}
	})
	form.querySelectorAll('.not-empty').forEach((item)=>{
		console.log(item)
		item.addEventListener('blur',(i)=>{
			
			if(item.value != '') {
				item.classList.remove('error-empty');
				item.nextElementSibling.innerHTML='';
			}
			else {
				item.classList.add('error-empty')
				item.nextElementSibling.innerHTML=item.dataset.label + ' must not be empty!';
				
			}

		})
	})

	form.querySelectorAll('.letter-only').forEach((item)=>{
		item.addEventListener('paste',function(e){
  			e.preventDefault();
    		let paste = (e.clipboardData || window.clipboardData).getData('text');
			if(/^[a-zA-Z]+$/.test(paste)){
			return true
			}
			return false
		})
	})

	form.querySelectorAll('input,select').forEach((item)=>{
		item.addEventListener('focus',(i)=>{
			//item.nextElementSibling.classList.remove('show')
			item.focus();
		})
	})
	form.querySelectorAll('input,select').forEach((item)=>{
		item.addEventListener('keydown',(i)=>{
			item.classList.remove('error-empty');
			item.nextElementSibling.innerHTML =''
		})
	})
	// form.addEventListener('submit', (e) => {
	// 	e.preventDefault();
	// 	let ret = true;
	// 	form.querySelectorAll('.not-empty').forEach((item)=>{
	// 		if(item.value == ''){
	// 			item.classList.add('error-empty')
	// 			ret = false;
	// 		}
	// 	})
	// 	return ret;
	// });
	submit.addEventListener('click',(event)=>{
		event.preventDefault();
		let ret = true;
		form.querySelectorAll('.not-empty').forEach((item)=>{
			if(item.value == ''){
				item.classList.add('error-empty')
				item.nextElementSibling.innerHTML=item.dataset.label + ' must not be empty!';
				ret = false;
			}
			
		})
		if(email.value!='' && !ValidateEmail(email)){
				email.classList.add('error-empty')
				email.nextElementSibling.innerHTML=email.dataset.label + ' must be valid format!';
				ret = false;
			}
		if (ret == true) form.submit();
	})
	function ValidateEmail(input) {

		var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

		if (input.value.match(validRegex)) {

		return true;

		} else {


		return false;

		}

	}
</script>
<?php get_footer(); ?>