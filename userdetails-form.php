
                    <form class="new_user" id="userDetailForm" autocomplete="on" name="myForm" action="/application-submit.php" method="POST"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="ltqHSGwT5ZHS2kcJaG33uSGP6SdNtqHPPhfipA/YWFliPijnjxYls/GjEIyJkoXy6nLEruZcI3ZgtrhR8RIDMA=="/>

                        <div class="step1">

                            <div class='row'>
                                <div class='col-md-6 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" name="address1" value='Address (line1)' readonly/>
                                        <input 
                                            class="form-control noBorder custom-size-input-box" 
                                            id="address1text" 
                                            placeholder="Enter address" 
                                            type="text" 
                                            name="address1text"
                                            tabindex='1'
                                            data-validation="required"
                                            data-validation-length="max127"/>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" name="address1" value='Address (line2)' readonly/>
                                        <input 
                                            class="form-control noBorder custom-size-input-box" 
                                            id="address2text" 
                                            placeholder="Enter address" 
                                            type="text" 
                                            name="address2text" 
                                            tabindex='2'/>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-6 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" name="city" value='City' readonly/>
                                        <input 
                                            class="form-control noBorder custom-size-input-box" 
                                            id="citytext" 
                                            placeholder="Enter city" 
                                            type="text" 
                                            name="citytext" 
                                            tabindex='3'
                                            data-validation="required custom length"
                                            data-validation-length="max40"
                                            data-validation-regexp="^([a-zA-Z]+)$"/>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" name="zipcode" value='Zip code' readonly/>
                                        <input 
                                            class="form-control noBorder custom-size-input-box" 
                                            id="zipcodetext"
                                            placeholder="Enter zip code" 
                                            type="text" 
                                            name="zipcodetext" 
                                            tabindex='4'
                                            data-validation="required length number" 
                                            data-validation-length="max20"/>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input 
                                        type="text" class="form-control noBorder custom-size-header-box" value='State' readonly/>
                                        <select 
                                            name="state"
                                            class="form-control noBorder custom-size-input-box" 
                                            tabindex='4'
                                            data-validation="required number length"
                                            data-validation-length="max20"
                                            data-validation-error-msg=" ">
                                        <option value="">--Select a state--</option>    
                                        <option value="1">Alabama</option>
                                        <option value="2">Alaska</option>
                                        <option value="3">Arizona</option>
                                        <option value="4">Arkansas</option>
                                        <option value="5">California</option>
                                        <option value="6">Colorado</option>
                                        <option value="7">Connecticut</option>
                                        <option value="8">Delaware</option>
                                        <option value="9">Dist.Columbia</option>
                                        <option value="10">Florida</option>
                                        <option value="11">Georgia</option>
                                        <option value="12">Hawaii</option>
                                        <option value="13">Idaho</option>
                                        <option value="14">Illinois</option>
                                        <option value="15">Indiana</option>
                                        <option value="16">Iowa</option>
                                        <option value="17">Kansas</option>
                                        <option value="18">Kentucky</option>
                                        <option value="19">Louisiana</option>
                                        <option value="20">Maine</option>
                                        <option value="21">Maryland</option>
                                        <option value="22">Massachusetts</option>
                                        <option value="23">Michigan</option>
                                        <option value="24">Minnesota</option>
                                        <option value="25">Mississippi</option>
                                        <option value="26">Missouri</option>
                                        <option value="27">Montana</option>
                                        <option value="28">Nebraska</option>
                                        <option value="29">Nevada</option>
                                        <option value="30">New Hampshire</option>
                                        <option value="31">New Jersey</option>
                                        <option value="32">New Mexico</option>
                                        <option value="52">NY Non-Bus</option>
                                        <option value="33">NY Business</option>
                                        <option value="34">North Carolina</option>
                                        <option value="35">North Dakota</option>
                                        <option value="36">Ohio</option>
                                        <option value="37">Oklahoma</option>
                                        <option value="38">Oregon</option>
                                        <option value="39">Pennsylvania</option>
                                        <option value="40">Rhode Island</option>
                                        <option value="41">South Carolina</option>
                                        <option value="42">South Dakota</option>
                                        <option value="43">Tennessee</option>
                                        <option value="44">Texas</option>
                                        <option value="45">Utah</option>
                                        <option value="46">Vermont</option>
                                        <option value="47">Virginia</option>
                                        <option value="48">Washington</option>
                                        <option value="49">West Virginia</option>
                                        <option value="50">Wisconsin</option>
                                        <option value="51">Wyoming</option>
                                        <option value="53">Guam</option>
                                        <option value="54">Puerto Rico</option>
                                        <option value="55">Virgin Islands</option>
                                        <option value="56">Amer. Samoa</option>
                                  </select>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" value='Country of birth' readonly/>
                                        <select 
                                            name="country" 
                                            class="form-control noBorder custom-size-input-box" 
                                            tabindex='4'
                                            data-validation="required"
                                            data-validation-error-msg=" ">
                                        <option value="">--Select a country--</option>    
                                        <option value="US">United States</option>
                                        <option value="AF">Afghanistan</option>
                                    	<option value="AX">Åland Islands</option>
                                    	<option value="AL">Albania</option>
                                    	<option value="DZ">Algeria</option>
                                    	<option value="AS">American Samoa</option>
                                    	<option value="AD">Andorra</option>
                                    	<option value="AO">Angola</option>
                                    	<option value="AI">Anguilla</option>
                                    	<option value="AQ">Antarctica</option>
                                    	<option value="AG">Antigua and Barbuda</option>
                                    	<option value="AR">Argentina</option>
                                    	<option value="AM">Armenia</option>
                                    	<option value="AW">Aruba</option>
                                    	<option value="AU">Australia</option>
                                    	<option value="AT">Austria</option>
                                    	<option value="AZ">Azerbaijan</option>
                                    	<option value="BS">Bahamas</option>
                                    	<option value="BH">Bahrain</option>
                                    	<option value="BD">Bangladesh</option>
                                    	<option value="BB">Barbados</option>
                                    	<option value="BY">Belarus</option>
                                    	<option value="BE">Belgium</option>
                                    	<option value="BZ">Belize</option>
                                    	<option value="BJ">Benin</option>
                                    	<option value="BM">Bermuda</option>
                                    	<option value="BT">Bhutan</option>
                                    	<option value="BO">Bolivia, Plurinational State of</option>
                                    	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    	<option value="BA">Bosnia and Herzegovina</option>
                                    	<option value="BW">Botswana</option>
                                    	<option value="BV">Bouvet Island</option>
                                    	<option value="BR">Brazil</option>
                                    	<option value="IO">British Indian Ocean Territory</option>
                                    	<option value="BN">Brunei Darussalam</option>
                                    	<option value="BG">Bulgaria</option>
                                    	<option value="BF">Burkina Faso</option>
                                    	<option value="BI">Burundi</option>
                                    	<option value="KH">Cambodia</option>
                                    	<option value="CM">Cameroon</option>
                                    	<option value="CA">Canada</option>
                                    	<option value="CV">Cape Verde</option>
                                    	<option value="KY">Cayman Islands</option>
                                    	<option value="CF">Central African Republic</option>
                                    	<option value="TD">Chad</option>
                                    	<option value="CL">Chile</option>
                                    	<option value="CN">China</option>
                                    	<option value="CX">Christmas Island</option>
                                    	<option value="CC">Cocos (Keeling) Islands</option>
                                    	<option value="CO">Colombia</option>
                                    	<option value="KM">Comoros</option>
                                    	<option value="CG">Congo</option>
                                    	<option value="CD">Congo, the Democratic Republic of the</option>
                                    	<option value="CK">Cook Islands</option>
                                    	<option value="CR">Costa Rica</option>
                                    	<option value="CI">Côte d'Ivoire</option>
                                    	<option value="HR">Croatia</option>
                                    	<option value="CU">Cuba</option>
                                    	<option value="CW">Curaçao</option>
                                    	<option value="CY">Cyprus</option>
                                    	<option value="CZ">Czech Republic</option>
                                    	<option value="DK">Denmark</option>
                                    	<option value="DJ">Djibouti</option>
                                    	<option value="DM">Dominica</option>
                                    	<option value="DO">Dominican Republic</option>
                                    	<option value="EC">Ecuador</option>
                                    	<option value="EG">Egypt</option>
                                    	<option value="SV">El Salvador</option>
                                    	<option value="GQ">Equatorial Guinea</option>
                                    	<option value="ER">Eritrea</option>
                                    	<option value="EE">Estonia</option>
                                    	<option value="ET">Ethiopia</option>
                                    	<option value="FK">Falkland Islands (Malvinas)</option>
                                    	<option value="FO">Faroe Islands</option>
                                    	<option value="FJ">Fiji</option>
                                    	<option value="FI">Finland</option>
                                    	<option value="FR">France</option>
                                    	<option value="GF">French Guiana</option>
                                    	<option value="PF">French Polynesia</option>
                                    	<option value="TF">French Southern Territories</option>
                                    	<option value="GA">Gabon</option>
                                    	<option value="GM">Gambia</option>
                                    	<option value="GE">Georgia</option>
                                    	<option value="DE">Germany</option>
                                    	<option value="GH">Ghana</option>
                                    	<option value="GI">Gibraltar</option>
                                    	<option value="GR">Greece</option>
                                    	<option value="GL">Greenland</option>
                                    	<option value="GD">Grenada</option>
                                    	<option value="GP">Guadeloupe</option>
                                    	<option value="GU">Guam</option>
                                    	<option value="GT">Guatemala</option>
                                    	<option value="GG">Guernsey</option>
                                    	<option value="GN">Guinea</option>
                                    	<option value="GW">Guinea-Bissau</option>
                                    	<option value="GY">Guyana</option>
                                    	<option value="HT">Haiti</option>
                                    	<option value="HM">Heard Island and McDonald Islands</option>
                                    	<option value="VA">Holy See (Vatican City State)</option>
                                    	<option value="HN">Honduras</option>
                                    	<option value="HK">Hong Kong</option>
                                    	<option value="HU">Hungary</option>
                                    	<option value="IS">Iceland</option>
                                    	<option value="IN">India</option>
                                    	<option value="ID">Indonesia</option>
                                    	<option value="IR">Iran, Islamic Republic of</option>
                                    	<option value="IQ">Iraq</option>
                                    	<option value="IE">Ireland</option>
                                    	<option value="IM">Isle of Man</option>
                                    	<option value="IL">Israel</option>
                                    	<option value="IT">Italy</option>
                                    	<option value="JM">Jamaica</option>
                                    	<option value="JP">Japan</option>
                                    	<option value="JE">Jersey</option>
                                    	<option value="JO">Jordan</option>
                                    	<option value="KZ">Kazakhstan</option>
                                    	<option value="KE">Kenya</option>
                                    	<option value="KI">Kiribati</option>
                                    	<option value="KP">Korea, Democratic People's Republic of</option>
                                    	<option value="KR">Korea, Republic of</option>
                                    	<option value="KW">Kuwait</option>
                                    	<option value="KG">Kyrgyzstan</option>
                                    	<option value="LA">Lao People's Democratic Republic</option>
                                    	<option value="LV">Latvia</option>
                                    	<option value="LB">Lebanon</option>
                                    	<option value="LS">Lesotho</option>
                                    	<option value="LR">Liberia</option>
                                    	<option value="LY">Libya</option>
                                    	<option value="LI">Liechtenstein</option>
                                    	<option value="LT">Lithuania</option>
                                    	<option value="LU">Luxembourg</option>
                                    	<option value="MO">Macao</option>
                                    	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    	<option value="MG">Madagascar</option>
                                    	<option value="MW">Malawi</option>
                                    	<option value="MY">Malaysia</option>
                                    	<option value="MV">Maldives</option>
                                    	<option value="ML">Mali</option>
                                    	<option value="MT">Malta</option>
                                    	<option value="MH">Marshall Islands</option>
                                    	<option value="MQ">Martinique</option>
                                    	<option value="MR">Mauritania</option>
                                    	<option value="MU">Mauritius</option>
                                    	<option value="YT">Mayotte</option>
                                    	<option value="MX">Mexico</option>
                                    	<option value="FM">Micronesia, Federated States of</option>
                                    	<option value="MD">Moldova, Republic of</option>
                                    	<option value="MC">Monaco</option>
                                    	<option value="MN">Mongolia</option>
                                    	<option value="ME">Montenegro</option>
                                    	<option value="MS">Montserrat</option>
                                    	<option value="MA">Morocco</option>
                                    	<option value="MZ">Mozambique</option>
                                    	<option value="MM">Myanmar</option>
                                    	<option value="NA">Namibia</option>
                                    	<option value="NR">Nauru</option>
                                    	<option value="NP">Nepal</option>
                                    	<option value="NL">Netherlands</option>
                                    	<option value="NC">New Caledonia</option>
                                    	<option value="NZ">New Zealand</option>
                                    	<option value="NI">Nicaragua</option>
                                    	<option value="NE">Niger</option>
                                    	<option value="NG">Nigeria</option>
                                    	<option value="NU">Niue</option>
                                    	<option value="NF">Norfolk Island</option>
                                    	<option value="MP">Northern Mariana Islands</option>
                                    	<option value="NO">Norway</option>
                                    	<option value="OM">Oman</option>
                                    	<option value="PK">Pakistan</option>
                                    	<option value="PW">Palau</option>
                                    	<option value="PS">Palestinian Territory, Occupied</option>
                                    	<option value="PA">Panama</option>
                                    	<option value="PG">Papua New Guinea</option>
                                    	<option value="PY">Paraguay</option>
                                    	<option value="PE">Peru</option>
                                    	<option value="PH">Philippines</option>
                                    	<option value="PN">Pitcairn</option>
                                    	<option value="PL">Poland</option>
                                    	<option value="PT">Portugal</option>
                                    	<option value="PR">Puerto Rico</option>
                                    	<option value="QA">Qatar</option>
                                    	<option value="RE">Réunion</option>
                                    	<option value="RO">Romania</option>
                                    	<option value="RU">Russian Federation</option>
                                    	<option value="RW">Rwanda</option>
                                    	<option value="BL">Saint Barthélemy</option>
                                    	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    	<option value="KN">Saint Kitts and Nevis</option>
                                    	<option value="LC">Saint Lucia</option>
                                    	<option value="MF">Saint Martin (French part)</option>
                                    	<option value="PM">Saint Pierre and Miquelon</option>
                                    	<option value="VC">Saint Vincent and the Grenadines</option>
                                    	<option value="WS">Samoa</option>
                                    	<option value="SM">San Marino</option>
                                    	<option value="ST">Sao Tome and Principe</option>
                                    	<option value="SA">Saudi Arabia</option>
                                    	<option value="SN">Senegal</option>
                                    	<option value="RS">Serbia</option>
                                    	<option value="SC">Seychelles</option>
                                    	<option value="SL">Sierra Leone</option>
                                    	<option value="SG">Singapore</option>
                                    	<option value="SX">Sint Maarten (Dutch part)</option>
                                    	<option value="SK">Slovakia</option>
                                    	<option value="SI">Slovenia</option>
                                    	<option value="SB">Solomon Islands</option>
                                    	<option value="SO">Somalia</option>
                                    	<option value="ZA">South Africa</option>
                                    	<option value="GS">South Georgia and the South Sandwich Islands</option>
                                    	<option value="SS">South Sudan</option>
                                    	<option value="ES">Spain</option>
                                    	<option value="LK">Sri Lanka</option>
                                    	<option value="SD">Sudan</option>
                                    	<option value="SR">Suriname</option>
                                    	<option value="SJ">Svalbard and Jan Mayen</option>
                                    	<option value="SZ">Swaziland</option>
                                    	<option value="SE">Sweden</option>
                                    	<option value="CH">Switzerland</option>
                                    	<option value="SY">Syrian Arab Republic</option>
                                    	<option value="TW">Taiwan, Province of China</option>
                                    	<option value="TJ">Tajikistan</option>
                                    	<option value="TZ">Tanzania, United Republic of</option>
                                    	<option value="TH">Thailand</option>
                                    	<option value="TL">Timor-Leste</option>
                                    	<option value="TG">Togo</option>
                                    	<option value="TK">Tokelau</option>
                                    	<option value="TO">Tonga</option>
                                    	<option value="TT">Trinidad and Tobago</option>
                                    	<option value="TN">Tunisia</option>
                                    	<option value="TR">Turkey</option>
                                    	<option value="TM">Turkmenistan</option>
                                    	<option value="TC">Turks and Caicos Islands</option>
                                    	<option value="TV">Tuvalu</option>
                                    	<option value="UG">Uganda</option>
                                    	<option value="UA">Ukraine</option>
                                    	<option value="AE">United Arab Emirates</option>
                                    	<option value="GB">United Kingdom</option>
                                    	<option value="UM">United States Minor Outlying Islands</option>
                                    	<option value="UY">Uruguay</option>
                                    	<option value="UZ">Uzbekistan</option>
                                    	<option value="VU">Vanuatu</option>
                                    	<option value="VE">Venezuela, Bolivarian Republic of</option>
                                    	<option value="VN">Viet Nam</option>
                                    	<option value="VG">Virgin Islands, British</option>
                                    	<option value="VI">Virgin Islands, U.S.</option>
                                    	<option value="WF">Wallis and Futuna</option>
                                    	<option value="EH">Western Sahara</option>
                                    	<option value="YE">Yemen</option>
                                    	<option value="ZM">Zambia</option>
                                    	<option value="ZW">Zimbabwe</option>
                                  </select>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" value='Residency status' readonly/>
                                        <select id="residency" class="form-control noBorder custom-size-input-box" tabindex='4' name="residency" data-validation="required">
                                             <option value="">--Select a status--</option>
                                             <option value="2">Citizen</option>
                                             <option value="3">Permanent resident</option>
                                             <option value="4">Visitor</option>
                                             <option value="5">Student visa</option>
                                             <option value="6">Employee visitor</option>
                                         </select>
                                    </div>
                                </div>
                            </div><br/>
                            </div>
                            
                            <div class="step2">
                            <h3>Financial information</h3>

                            <h4>The insurer will review the suitability of the coverage amount requested based on your financial status</h4>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <div class="input-group noBorder">
                                            <input type="text" class="form-control noBorder custom-size-header-box" value='Individual income' readonly/>
                                            <span class="input-group-addon noBorder transparent-bg" id="basic-addon1"><i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="input-group noBorder">
                                            <span class="input-group-addon noBorder" id="basic-addon1">$</span>
                                            <input 
                                                type="text" 
                                                class="form-control noBorder custom-size-input-box" 
                                                placeholder="0" 
                                                id="incometext" 
                                                name="incometext" 
                                                aria-describedby="basic-addon1" 
                                                tabindex='5'
                                                data-validation="required length number" 
                                                data-validation-length="max9">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <div class="input-group noBorder">
                                            <input type="text" class="form-control noBorder custom-size-header-box" value='Assets' readonly/>
                                            <span class="input-group-addon noBorder transparent-bg" id="basic-addon1"><i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i></span>
                                        </div>

                                        <div class="input-group noBorder">
                                            <span class="input-group-addon noBorder" id="basic-addon1">$</span>
                                            <input 
                                                type="text" 
                                                class="form-control noBorder custom-size-input-box" 
                                                placeholder="0" 
                                                id="assets" 
                                                name="assets" 
                                                aria-describedby="basic-addon1" 
                                                tabindex='6'
                                                data-validation="required length number" 
                                                data-validation-length="max9">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <div class="input-group noBorder">
                                            <input type="text" class="form-control noBorder custom-size-header-box" value='Liabilities' readonly/>
                                            <span class="input-group-addon noBorder transparent-bg" id="basic-addon1"><i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="input-group noBorder">
                                            <span class="input-group-addon noBorder" id="basic-addon1">$</span>
                                            <input 
                                                type="text"
                                                class="form-control noBorder custom-size-input-box"
                                                placeholder="0" 
                                                id="liabilities" 
                                                name="liabilities" 
                                                aria-describedby="basic-addon1" 
                                                tabindex='7'
                                                data-validation="required length number" 
                                                data-validation-length="max9">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" value='Reason for applying' readonly/>
                                        <select id="reasonforapplying" class="form-control noBorder custom-size-input-box" name="reasonforapplying" tabindex='7'>
                                     <option value="1">--Select reason for applying--</option>
                                     <option value="2">Personal</option>
                                     <option value="3">Family protection</option>
                                 </select>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="step3">
                            <h3>Your health conditions</h3>

                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class="form-group">
                                        <div class="col-md-12 padding-bottom-2">
                                            <h4>Do you have any history of the health below?</h4>
                                            <span>A follow-up with a PolicyGenius expert may be required to ensure an accurate quote and to select the best insurer based on your needs.</span>
                                        </div>
                                        <hr class='hr-border' />
                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="alzheimer" class="checkbox-custom" name="alzheimer" type="checkbox" tabindex='7'>
                                                <label for="alzheimer" class="checkbox-custom-label">Alzheimer's disease</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="backproblem" class="checkbox-custom" name="backproblem" type="checkbox" tabindex='7'>
                                                <label for="backproblem" class="checkbox-custom-label">Back problems</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="basal" class="checkbox-custom" name="basal" type="checkbox" tabindex='7'>
                                                <label for="basal" class="checkbox-custom-label">Basal cell skin cancer</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="cancer" class="checkbox-custom" name="cancer" type="checkbox" tabindex='7'>
                                                <label for="cancer" class="checkbox-custom-label">Cancer</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="carpal" class="checkbox-custom" name="carpal" type="checkbox" tabindex='7'>
                                                <label for="carpal" class="checkbox-custom-label">Carpal tunnel syndrome</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="copd" class="checkbox-custom" name="copd" type="checkbox" tabindex='7'>
                                                <label for="copd" class="checkbox-custom-label">COPD</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="emphysema" class="checkbox-custom" name="emphysema" type="checkbox" tabindex='7'>
                                                <label for="emphysema" class="checkbox-custom-label">Emphysema</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="epilepsy" class="checkbox-custom" name="epilepsy" type="checkbox" tabindex='7'>
                                                <label for="epilepsy" class="checkbox-custom-label">Epilepsy</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="glaucoma" class="checkbox-custom" name="glaucoma" type="checkbox" tabindex='7'>
                                                <label for="glaucoma" class="checkbox-custom-label">Glaucoma</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="headache" class="checkbox-custom" name="headache" type="checkbox" tabindex='7'>
                                                <label for="headache" class="checkbox-custom-label">Frequent headache or migraines</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="heart" class="checkbox-custom" name="heart" type="checkbox" tabindex='7'>
                                                <label for="heart" class="checkbox-custom-label">Heart disease</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="kidney" class="checkbox-custom" name="kidney" type="checkbox" tabindex='7'>
                                                <label for="kidney" class="checkbox-custom-label">Kidney or liver disease</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="knee" class="checkbox-custom" name="knee" type="checkbox" tabindex='7'>
                                                <label for="knee" class="checkbox-custom-label">Knee injury or surgery</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="mental" class="checkbox-custom" name="mental" type="checkbox" tabindex='7'>
                                                <label for="mental" class="checkbox-custom-label">Mental illness</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="multiple" class="checkbox-custom" name="multiple" type="checkbox" tabindex='7'>
                                                <label for="multiple" class="checkbox-custom-label">Multiple sclerosis</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="other" class="checkbox-custom" name="other" type="checkbox" tabindex='7'>
                                                <label for="other" class="checkbox-custom-label">Other serious medical conditions</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="rheumatoid" class="checkbox-custom" name="rheumatoid" type="checkbox" tabindex='7'>
                                                <label for="rheumatoid" class="checkbox-custom-label">Rheumatoid arthritis</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="stroke" class="checkbox-custom" name="stroke" type="checkbox" tabindex='7'>
                                                <label for="stroke" class="checkbox-custom-label">Stroke</label>
                                            </div>
                                        </div>

                                        <div class="row padding-bottom-2">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="ulcerative" class="checkbox-custom" name="ulcerative" type="checkbox" tabindex='7'>
                                                <label for="ulcerative" class="checkbox-custom-label">Ulcerative colitis or crohn's disease</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="vascular" class="checkbox-custom" name="vascular" type="checkbox" tabindex='7'>
                                                <label for="vascular" class="checkbox-custom-label">Vascular disease</label>
                                            </div>
                                        </div>
                                        
                                         <div class="row padding-bottom-2">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="none" class="checkbox-custom" name="ulcerative" type="checkbox" checked tabindex='7'>
                                                <label for="none" class="checkbox-custom-label">None of these</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>
                                
                            <div class="step4">    
                            <h3>Activities</h3>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class="form-group">
                                        <div class="col-md-12 padding-bottom-2">
                                            <h4>Which, if any, of the following activities do you participate in?</h4>
                                            <span>The insurer may modify your policy based on whether you participate in activities that carry a higher than normal risk of injury. This could result in a change in your quoted premium.</span>
                                        </div>
                                        <hr class='hr-border' />
                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="racing" class="checkbox-custom" name="racing" type="checkbox" tabindex='7'>
                                                <label for="racing" class="checkbox-custom-label">Racing or motor sports</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="hang" class="checkbox-custom" name="hang" type="checkbox" tabindex='7'>
                                                <label for="hang" class="checkbox-custom-label">Hang gliding</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="piloting" class="checkbox-custom" name="piloting" type="checkbox" tabindex='7'>
                                                <label for="piloting" class="checkbox-custom-label">Piloting</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="rock" class="checkbox-custom" name="rock" type="checkbox" tabindex='7'>
                                                <label for="rock" class="checkbox-custom-label">Rock climbing</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="scuba" class="checkbox-custom" name="scuba" type="checkbox" tabindex='7'>
                                                <label for="scuba" class="checkbox-custom-label">Scuba diving</label>
                                            </div>
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="sky" class="checkbox-custom" name="sky" type="checkbox" tabindex='7'>
                                                <label for="sky" class="checkbox-custom-label">Sky diving</label>
                                            </div>
                                        </div>

                                        <div class="row padding-bottom-2">
                                            <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                                <input id="otherActivity" class="checkbox-custom" name="otherActivity" type="checkbox" tabindex='7'>
                                                <label for="otherActivity" class="checkbox-custom-label">Other</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>


                            <div class="step5">
                            <h3>Primary beneficiaries</h3>

                            <div class="row">
                                <div class="col-md-12 padding-bottom-2">
                                    You must designate at least one primary beneficiary, who will receive the proceeds of your insaurance policy should you die while the policy is in effect.
                                    <strong>Make sure the percentage across all primary beneficiaries adds up to 100.</strong>
                                </div>
                                <div class="col-md-12 beneficiary padding-bottom-2" id='openAddBeneficiaryForm'>

                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 beneficiary-plus"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div>
                                        <div class="col-md-4"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-xs-12"></div>
                                        <div class="col-md-8 col-sm-12 col-xs-12" style='color:darkgray;'><strong>Add primary beneficiary</strong></div>
                                        <div class="col-md-1 col-sm-12 col-xs-12"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 padding-bottom-2" id='primaryBeneficiaryDisplay'>
                                    <!--<table id='primaryBeneficiaryTable' width="100%" cellpadding="50" cellspacing="0">-->
                                    <!--</table>-->
                                </div>
                            </div>
                            <div id='addPrimaryBeneficiary' class="custom-border container">
                                    <button type="button" onClick="closePrimaryBeneficiary()" class="btn btn-default btn-circle pull-right"><i class="glyphicon glyphicon-remove"></i></button>
                                    <div id='primaryBeneficiary'>
                                        <div class='row' style="padding-top: 1rem;">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" name="fullname" value='Full name' readonly/>
                                                    <input 
                                                        class="form-control noBorder custom-size-input-box" 
                                                        id="primaryfullname" 
                                                        placeholder="Enter your last name here" 
                                                        type="text" 
                                                        name="primaryfullname" 
                                                        tabindex='8'
                                                        data-validation='required length'
                                                        data-validation-length="max35"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 quick-question container padding-bottom-2">
                    
                                            <div class="col-md-12 padding-bottom-2">
                                                <h5>Gender</h5>
                                            </div>
                    
                                            <div class="col-md-12 padding-bottom-2">
                                                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                                                    <label class="btn btn-default col-md-5 col-sm-12 col-xs-12">
                                                                <input type="radio" name="primarygender" value="male" id="primarymale" tabindex='9'> Male
                                                            </label>
                                                    <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="margin-left: 12px;">
                                                                 <input type="radio" name="primarygender" value="female" id="primaryfemale" autocomplete="off" tabindex='10'> Female
                                                            </label>
                                                    <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 visible-sm visible-xs">    
                                                                <input type="radio" name="primarygender" value="female" id="primaryfemale" autocomplete="off" tabindex='10'> Female
                                                            </label>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" value='Relationship' readonly/>
                                                    <select id="primaryrelation" class="form-control noBorder custom-size-input-box" name="primaryrelation" tabindex='10'>
                                                         <option value="1">Brother</option>
                                                         <option selected="selected" value="2">Creditor</option>
                                                         <option value="3">Daughter</option>
                                                         <option  value="4">Domestic partner</option>
                                                         <option  value="5">Ex-spouse</option>
                                                         <option  value="6">Father</option>
                                                         <option  value="7">Friend or relative</option>
                                                         <option  value="8">Granddaughter</option>
                                                         <option  value="9">Grandfather</option>
                                                         <option  value="10">Grandson</option>
                                                         <option  value="11">Mother</option>
                                                         <option  value="12">Niece</option>
                                                         <option  value="13">Nephew</option>
                                                         <option  value="14">Other</option>
                                                         <option  value="15">Sister</option>
                                                         <option  value="16">Son</option>
                                                         <option  value="17">Spouse</option>
                                                         <option  value="18">Stepdaughter</option>
                                                         <option  value="19">Stepfather</option>
                                                         <option  value="20">Stepmother</option>
                                                         <option  value="21">Stepson</option>
                                                         <option  value="22">Trust</option>
                                                         <option  value="23">Business</option>
                                                         <option selected="selected" value="24">Unknown</option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" value="Date of birth" readonly/>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!--<input type="text" 
                                                                name="form_dob_month"
                                                                id='form_dob_month'
                                                                class='form-control'
                                                                data-validation='required custom'
                                                                data-validation-help="Please provide your month of birth" 
                                                                 data-validation-regexp="^([A-Za-z]+)$"
                                                                data-suggestions="January, February, March, April, May, June, July, August, September, October, November, December"/>-->
                                                            <select id="form_dob_month" class="form-control" name="BirthMonth" tabindex='10'><option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option selected="selected" value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--<input type="text" 
                                                                name="form_dob_date"
                                                                id='form_dob_date'
                                                                class='form-control'
                                                                data-validation='required number length'
                                                                data-validation-help="Please provide your date of birth"
                                                                 data-validation-length="max2"/>-->
                                                            <select id="form_dob_date" class="form-control" name="Birthday" tabindex='10'><option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option selected="selected" value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                             <!--<input type="text" 
                                                                name="form_dob_year"
                                                                id='form_dob_year'
                                                                class='form-control'
                                                                data-validation='required number'
                                                                data-validation-help="Please provide your year of birth"
                                                                data-validation-length="max4"/>-->
                                                            <select id="form_dob_year" class="form-control" name="BirthYear" tabindex='10'><option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                        <option value="1999">1999</option>
                                                                        <option value="1998">1998</option>
                                                                        <option value="1997">1997</option>
                                                                        <option value="1996">1996</option>
                                                                        <option value="1995">1995</option>
                                                                        <option value="1994">1994</option>
                                                                        <option value="1993">1993</option>
                                                                        <option value="1992">1992</option>
                                                                        <option value="1991">1991</option>
                                                                        <option value="1990">1990</option>
                                                                        <option value="1989">1989</option>
                                                                        <option value="1988">1988</option>
                                                                        <option value="1987">1987</option>
                                                                        <option value="1986">1986</option>
                                                                        <option selected="selected" value="1985">1985</option>
                                                                        <option value="1984">1984</option>
                                                                        <option value="1983">1983</option>
                                                                        <option value="1982">1982</option>
                                                                        <option value="1981">1981</option>
                                                                        <option value="1980">1980</option>
                                                                        <option value="1979">1979</option>
                                                                        <option value="1978">1978</option>
                                                                        <option value="1977">1977</option>
                                                                        <option value="1976">1976</option>
                                                                        <option value="1975">1975</option>
                                                                        <option value="1974">1974</option>
                                                                        <option value="1973">1973</option>
                                                                        <option value="1972">1972</option>
                                                                        <option value="1971">1971</option>
                                                                        <option value="1970">1970</option>
                                                                        <option value="1969">1969</option>
                                                                        <option value="1968">1968</option>
                                                                        <option value="1967">1967</option>
                                                                        <option value="1966">1966</option>
                                                                        <option value="1965">1965</option>
                                                                        <option value="1964">1964</option>
                                                                        <option value="1963">1963</option>
                                                                        <option value="1962">1962</option>
                                                                        <option value="1961">1961</option>
                                                                        <option value="1960">1960</option>
                                                                        <option value="1959">1959</option>
                                                                        <option value="1959">1958</option>
                                                                        <option value="1959">1957</option>
                                                                        <option value="1959">1956</option>
                                                                        <option value="1959">1955</option>
                                                                        <option value="1959">1954</option>
                                                                        <option value="1959">1953</option>
                                                                        <option value="1959">1952</option>
                                                                        <option value="1959">1951</option>
                                                                        <option value="1959">1950</option>
                                                                        <option value="1959">1949</option>
                                                                        <option value="1959">1948</option>
                                                                        <option value="1959">1947</option>
                                                                        <option value="1959">1946</option>
                                                                        <option value="1959">1945</option>
                                                                        <option value="1959">1944</option>
                                                                        <option value="1959">1943</option>
                                                                        <option value="1959">1942</option>
                                                                        <option value="1959">1941</option>
                                                                        <option value="1959">1940</option>
                                                                        <option value="1959">1939</option>
                                                                        <option value="1959">1938</option>
                                                                        <option value="1959">1937</option>
                                                                        <option value="1959">1936</option>
                                                                        <option value="1959">1935</option>
                                                                        <option value="1959">1934</option>
                                                                        <option value="1959">1933</option>
                                                                        <option value="1959">1932</option>
                                                                        <option value="1959">1931</option>
                                                                        <option value="1959">1930</option>
                                                                        <option value="1959">1929</option>
                                                                        <option value="1959">1928</option>
                                                                        <option value="1959">1927</option>
                                                                        <option value="1959">1926</option>
                                                                        <option value="1959">1925</option>
                                                                        <option value="1959">1924</option>
                                                                        <option value="1959">1923</option>
                                                                        <option value="1959">1922</option>
                                                                        <option value="1959">1921</option>
                                                                        <option value="1959">1920</option>
                                                                        <option value="1959">1919</option>
                                                                        <option value="1959">1918</option>
                                                                        <option value="1959">1917</option>
                                                                        <option value="1959">1916</option>
                                                                    </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" value='Percentage' readonly/>
                                                    <select id="primarypercentage" class="form-control noBorder custom-size-input-box 1-100" name="primarypercentage" tabindex='10'>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class='row'>
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <button type="button" name="submitForm" id="submitForm" class="btn btn-warning btn-block" tabindex='10'>Save This Beneficiary</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>


                            <div class="step6">
                            <h3>Contingent beneficiaries</h3>

                            <div class="row">
                                <div class="col-md-12 padding-bottom-2">
                                    You may also designate contingent beneficiaries, who will receive the proceeds of your insaurance if none of your primary beneficiaries are alive. You don't have to designate any contingent beneficiaries but if you do,<strong>make sure the percentage across all contingent
                                     beneficiaries add up to 100.</strong>
                                </div>
                                <div class="col-md-12 beneficiary padding-bottom-2" id='openAddContingentBeneficiaryForm'>

                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 beneficiary-plus"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></div>
                                        <div class="col-md-4"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-xs-12"></div>
                                        <div class="col-md-8 col-sm-12 col-xs-12" style='color:darkgray;'><strong>Add contingent beneficiary</strong></div>
                                        <div class="col-md-1 col-sm-12 col-xs-12"></div>
                                    </div>
                                </div>
                                
                                 <div class="col-md-12  padding-bottom-2" id='contingentBeneficiaryDisplay'>
                                    <!--<button type="button" onClick="closeAddedContingentBeneficiary()" class="btn btn-default btn-circle pull-right"><i class="glyphicon glyphicon-remove"></i></button>-->
                                    <!--<table id='contingentBeneficiaryTable' width="100%" cellpadding="50" cellspacing="0">-->
                                    <!--</table>-->
                                </div>
                            </div>
                            <div id='addContingentBeneficiary' class="custom-border container">
                                    <button type="button" onClick="closeContingentBeneficiary()" class="btn btn-default btn-circle pull-right"><i class="glyphicon glyphicon-remove"></i></button>
                                    <div id='contingentBeneficiary'>
                                        <div class='row' style="padding-top: 1rem;">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" name="fullname" value='Full name' readonly/>
                                                    <input 
                                                        class="form-control noBorder custom-size-input-box" 
                                                        maxlength='35'
                                                        id="contingentfullname" 
                                                        placeholder="Enter your last name here"
                                                        type="text" 
                                                        name="contingentfullname"
                                                        tabindex='10'
                                                        data-validation='required length'
                                                        data-validation-length="max35"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 quick-question container padding-bottom-2">
                    
                                            <div class="col-md-12 padding-bottom-2">
                                                <h5>Gender</h5>
                                            </div>
                    
                                            <div class="col-md-12 padding-bottom-2">
                                                <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                                                    <label class="btn btn-default col-md-5 col-sm-12 col-xs-12">
                                                                <input type="radio" name="contingentgender" id="contingentmale" autocomplete="off" tabindex='10'> Male
                                                            </label>
                                                    <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="margin-left: 12px;">
                                                                 <input type="radio" name="contingentgender" id="contingentfemale" autocomplete="off" tabindex='10'> Female
                                                            </label>
                                                    <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 visible-sm visible-xs">    
                                                                <input type="radio" name="contingentgender" id="contingentfemale" autocomplete="off" tabindex='10'> Female
                                                            </label>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" value='Relationship' readonly/>
                                                    <select id="contingentrelation" class="form-control noBorder custom-size-input-box" name="contingentrelation" tabindex='10'>
                                                         <option value="1">Brother</option>
                                                         <option selected="selected" value="2">Creditor</option>
                                                         <option selected="selected" value="3">Daughter</option>
                                                         <option selected="selected" value="4">Domestic partner</option>
                                                         <option selected="selected" value="5">Ex-spouse</option>
                                                         <option selected="selected" value="6">Father</option>
                                                         <option selected="selected" value="7">Friend or relative</option>
                                                         <option selected="selected" value="8">Granddaughter</option>
                                                         <option selected="selected" value="9">Grandfather</option>
                                                         <option selected="selected" value="10">Grandson</option>
                                                         <option selected="selected" value="11">Mother</option>
                                                         <option selected="selected" value="12">Niece</option>
                                                         <option selected="selected" value="13">Nephew</option>
                                                         <option selected="selected" value="14">Other</option>
                                                         <option selected="selected" value="15">Sister</option>
                                                         <option selected="selected" value="16">Son</option>
                                                         <option selected="selected" value="17">Spouse</option>
                                                         <option selected="selected" value="18">Stepdaughter</option>
                                                         <option selected="selected" value="19">Stepfather</option>
                                                         <option selected="selected" value="20">Stepmother</option>
                                                         <option selected="selected" value="21">Stepson</option>
                                                         <option selected="selected" value="22">Trust</option>
                                                         <option selected="selected" value="23">Business</option>
                                                         <option selected="selected" value="24">Unknown</option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" value="Date of birth" readonly/>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!--<input type="text" 
                                                                name="contingent_dob_month"
                                                                id='contingent_dob_month'
                                                                class='form-control'
                                                                data-validation='required custom'
                                                                data-validation-help="Please provide your month of birth" 
                                                                data-validation-regexp="^([A-Za-z]+)$"
                                                                data-suggestions="January, February, March, April, May, June, July, August, September, October, November, December"/>-->
                                                            <select id="contingent_dob_month" class="form-control" name="BirthMonth" tabindex='10'>
                                                                        <option value="0">--Select--</option>
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--<input type="text" 
                                                                name="contingent_dob_date"
                                                                id='contingent_dob_date'
                                                                class='form-control'
                                                                data-validation='required number length'
                                                                data-validation-help="Please provide your date of birth"
                                                                data-validation-length="max2"/>-->
                                                            <select id="contingent_dob_date" class="form-control" name="Birthday" tabindex='10'>
                                                                            <option value="0">--Select--</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--<input type="text" 
                                                                name="contingent_dob_year"
                                                                id='contingent_dob_year'
                                                                class='form-control'
                                                                data-validation='required number'
                                                                data-validation-help="Please provide your year of birth"
                                                                data-validation-length="max4"/>-->
                                                            <select id="contingent_dob_year" class="form-control" name="BirthYear" tabindex='10'>
                                                                        <option value="1">--Select--</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                        <option value="1999">1999</option>
                                                                        <option value="1998">1998</option>
                                                                        <option value="1997">1997</option>
                                                                        <option value="1996">1996</option>
                                                                        <option value="1995">1995</option>
                                                                        <option value="1994">1994</option>
                                                                        <option value="1993">1993</option>
                                                                        <option value="1992">1992</option>
                                                                        <option value="1991">1991</option>
                                                                        <option value="1990">1990</option>
                                                                        <option value="1989">1989</option>
                                                                        <option value="1988">1988</option>
                                                                        <option value="1987">1987</option>
                                                                        <option value="1986">1986</option>
                                                                        <option value="1985">1985</option>
                                                                        <option value="1984">1984</option>
                                                                        <option value="1983">1983</option>
                                                                        <option value="1982">1982</option>
                                                                        <option value="1981">1981</option>
                                                                        <option value="1980">1980</option>
                                                                        <option value="1979">1979</option>
                                                                        <option value="1978">1978</option>
                                                                        <option value="1977">1977</option>
                                                                        <option value="1976">1976</option>
                                                                        <option value="1975">1975</option>
                                                                        <option value="1974">1974</option>
                                                                        <option value="1973">1973</option>
                                                                        <option value="1972">1972</option>
                                                                        <option value="1971">1971</option>
                                                                        <option value="1970">1970</option>
                                                                        <option value="1969">1969</option>
                                                                        <option value="1968">1968</option>
                                                                        <option value="1967">1967</option>
                                                                        <option value="1966">1966</option>
                                                                        <option value="1965">1965</option>
                                                                        <option value="1964">1964</option>
                                                                        <option value="1963">1963</option>
                                                                        <option value="1962">1962</option>
                                                                        <option value="1961">1961</option>
                                                                        <option value="1960">1960</option>
                                                                        <option value="1959">1959</option>
                                                                        <option value="1959">1958</option>
                                                                        <option value="1959">1957</option>
                                                                        <option value="1959">1956</option>
                                                                        <option value="1959">1955</option>
                                                                        <option value="1959">1954</option>
                                                                        <option value="1959">1953</option>
                                                                        <option value="1959">1952</option>
                                                                        <option value="1959">1951</option>
                                                                        <option value="1959">1950</option>
                                                                        <option value="1959">1949</option>
                                                                        <option value="1959">1948</option>
                                                                        <option value="1959">1947</option>
                                                                        <option value="1959">1946</option>
                                                                        <option value="1959">1945</option>
                                                                        <option value="1959">1944</option>
                                                                        <option value="1959">1943</option>
                                                                        <option value="1959">1942</option>
                                                                        <option value="1959">1941</option>
                                                                        <option value="1959">1940</option>
                                                                        <option value="1959">1939</option>
                                                                        <option value="1959">1938</option>
                                                                        <option value="1959">1937</option>
                                                                        <option value="1959">1936</option>
                                                                        <option value="1959">1935</option>
                                                                        <option value="1959">1934</option>
                                                                        <option value="1959">1933</option>
                                                                        <option value="1959">1932</option>
                                                                        <option value="1959">1931</option>
                                                                        <option value="1959">1930</option>
                                                                        <option value="1959">1929</option>
                                                                        <option value="1959">1928</option>
                                                                        <option value="1959">1927</option>
                                                                        <option value="1959">1926</option>
                                                                        <option value="1959">1925</option>
                                                                        <option value="1959">1924</option>
                                                                        <option value="1959">1923</option>
                                                                        <option value="1959">1922</option>
                                                                        <option value="1959">1921</option>
                                                                        <option value="1959">1920</option>
                                                                        <option value="1959">1919</option>
                                                                        <option value="1959">1918</option>
                                                                        <option value="1959">1917</option>
                                                                        <option value="1959">1916</option>
                                                                    </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <input type="text" class="form-control noBorder custom-size-header-box" value='Percentage' readonly/>
                                                    <select id="contingentpercentage" class="form-control noBorder custom-size-input-box 1-100" name="contingentpercentage" tabindex='10'>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class='row'>
                                            <div class='col-md-12 col-sm-12 col-xs-12'>
                                                <div class="form-group">
                                                    <button type="button" name="submitContingentForm" id="submitContingentForm" class="btn btn-warning btn-block" tabindex='10'>Save This Beneficiary</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>


                            <div class="step7">
                            <h3>Some quick policy questions</h3>

                            <div class="row quick-question padding-bottom-2">

                                <div class="col-md-12 padding-bottom-2">
                                    <h5>Do you want coverage during underwriting(if applicable)?</h5>
                                </div>

                                <div class="col-md-12 padding-bottom-2">
                                    <div class="btn-group col-sm-12 col-xs-12 col-md-12" data-toggle="buttons">
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12">
                                            <input type="radio" name="wantcoverage" id="wantcoverageyes" autocomplete="off" tabindex='10'> Yes
                                        </label>
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="margin-left: 12px;">
                                             <input type="radio" name="wantcoverage" id="wantcoverageno" autocomplete="off" tabindex='10'> No
                                        </label>
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 visible-sm visible-xs">
                                            <input type="radio" name="wantcoverage" id="wantcoverageno" autocomplete="off" tabindex='10'> No
                                        </label>
                                    </div>
                                </div>
                                <a href='#' class='padding-bottom-2'>What does this mean?</a>
                            </div>

                            <div class="row quick-question padding-bottom-2">

                                <div class="col-md-12 padding-bottom-2">
                                    <h5>Will you the owner of this life insurance policy?</h5>
                                </div>

                                <div class="col-md-12 padding-bottom-2">
                                    <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12">
                                            <input type="radio" name="owner" id="owneryes" autocomplete="off" tabindex='10'> Yes
                                        </label>
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="margin-left: 12px;">
                                             <input type="radio" name="owner" id="ownerno" autocomplete="off" tabindex='10'> No
                                        </label>
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 visible-sm visible-xs">
                                            <input type="radio" name="owner" id="ownerno" autocomplete="off" tabindex='10'> No
                                        </label>
                                    </div>
                                </div>
                                <a href='#' class='padding-bottom-2'>What does this mean?</a>
                            </div>

                            <div class="row quick-question padding-bottom-2">

                                <div class="col-md-12 padding-bottom-2">
                                    <h5>Do you have any existing life insurance policy(s)?</h5>
                                </div>

                                <div class="col-md-12 padding-bottom-2">
                                    <div class="btn-group col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12">
                                            <input type="radio" name="existing" id="existingyes" autocomplete="off" tabindex='10'> Yes
                                        </label>
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 hidden-sm hidden-xs" style="margin-left: 12px;">
                                             <input type="radio" name="existing" id="existingno" autocomplete="off" tabindex='10'> No
                                        </label>
                                        <label class="btn btn-default col-md-5 col-sm-12 col-xs-12 visible-sm visible-xs">    
                                            <input type="radio" name="existing" id="existingno" autocomplete="off" tabindex='10'> No
                                        </label>
                                    </div>
                                </div>
                                <a href='#' class='padding-bottom-2'>What does this mean?</a>
                            </div>
                            </div>
                            
                            <div class="step10">
                                <h3>Select Medical Exam Date</h3>
    
                                 <div class="row">
                                    <div class="col-md-12 padding-bottom-2">
                                        Before your life insurance company will insure you, they must assess you medically. This consist of an
                                        in-person medical exam with a trained examiner at the convenience of your home, work or business.
                                        The examiner will take height, weight, blood and a uranalysis. Our specialist are extremely professional and nice to work with.
                                        This usually last for 15 minutes or less.
                                    </div><br>
                                    <div class="col-md-12 padding-bottom-2">
                                        Please choose two available days and times and select rather the examiner will be meeting at your home, work
                                        or business. Please provide the address for any location not named in the application.
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <h3>First Availability</h3>
                                    </div>
                                    <div class='col-md-6'>
                                        <h3>Second Availability</h3>
                                    </div>
                                                                        
                                </div>
                                <div class="row">
   
                                        <div class="col-sm-6 start-date">
                                          <div class='input-group date' id="time-start">
                                            <input type='text' class="form-control" placeholder="Start Time" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                          </div>
                                        </div>
                                  
                                        <div class="col-sm-6 end-date">
                                          <div class='input-group date' id="time-end">
                                            <input type='text' class="form-control" placeholder="End Time" readonly>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>     </div>
                                        </div>
                                  
                                        
                                </div><br><br>
                            </div>    
                            <!--    <h3>Location</h3>-->
                            <!--    <div class="row">-->
                            <!--                <div class='col-md-12 col-sm-12 col-xs-12 padding-left-3'>-->
                            <!--                    <input id="addresslisted" class="checkbox-custom" name="addressoption" type="radio" tabindex='12' checked>-->
                            <!--                    <label for="addresslisted" class="checkbox-custom-label">[Address listed]</label>-->
                            <!--                </div>-->
                            <!--                <div class='col-md-12 col-sm-12 col-xs-12 padding-left-3'>-->
                            <!--                    <input id="otheraddress" class="checkbox-custom" name="addressoption" type="radio" tabindex='12'>-->
                            <!--                    <label for="otheraddress" class="checkbox-custom-label">Other</label>-->
                            <!--                </div>-->
                            <!--    </div>-->
                            <!--    <br>-->
                            <!--    <div class='row' id='otherlocation'>-->
                                    
                            <!--        <div class='row'>-->
                            <!--            <div class='col-md-6 col-sm-12 col-xs-12'>-->
                            <!--                <div class="form-group">-->
                            <!--                    <input type="text" class="form-control noBorder custom-size-header-box" name="address1" value='Address (line1)' readonly/>-->
                            <!--                    <input -->
                            <!--                        class="form-control noBorder custom-size-input-box" -->
                            <!--                        id="otheraddress1text" -->
                            <!--                        placeholder="Enter address" -->
                            <!--                        type="text" -->
                            <!--                        name="address1text" -->
                            <!--                        tabindex='13' -->
                            <!--                        data-validation="required"-->
                            <!--                        data-validation-length="max127"/>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class='col-md-6 col-sm-12 col-xs-12'>-->
                            <!--                <div class="form-group">-->
                            <!--                    <input type="text" class="form-control noBorder custom-size-header-box" name="address1" value='Address (line2)' readonly/>-->
                            <!--                    <input -->
                            <!--                        class="form-control noBorder custom-size-input-box" -->
                            <!--                        id="otheraddress2text" -->
                            <!--                        placeholder="Enter address" -->
                            <!--                        type="text" -->
                            <!--                        name="address2text" -->
                            <!--                        tabindex='13'-->
                            <!--                        data-validation="required length"-->
                            <!--                        data-validation-length="max128"/>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
        
                            <!--        <div class='row'>-->
                            <!--            <div class='col-md-6 col-sm-12 col-xs-12'>-->
                            <!--                <div class="form-group">-->
                            <!--                    <input type="text" class="form-control noBorder custom-size-header-box" name="city" value='City' readonly/>-->
                            <!--                    <input -->
                            <!--                        class="form-control noBorder custom-size-input-box" -->
                            <!--                        id="othercitytext" -->
                            <!--                        placeholder="Enter city" -->
                            <!--                        type="text" -->
                            <!--                        name="citytext" -->
                            <!--                        tabindex='13'-->
                            <!--                        data-validation="required custom length"-->
                            <!--                        data-validation-length="max40"-->
                            <!--                        data-validation-regexp="^([a-z]+)$"/>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class='col-md-6 col-sm-12 col-xs-12'>-->
                            <!--                <div class="form-group">-->
                            <!--                    <input type="text" class="form-control noBorder custom-size-header-box" name="zipcode" value='Zip code' readonly/>-->
                            <!--                    <input -->
                            <!--                        class="form-control noBorder custom-size-input-box" -->
                            <!--                        id="otherzipcodetext"-->
                            <!--                        placeholder="Enter zip code" -->
                            <!--                        type="text" -->
                            <!--                        name="zipcodetext" -->
                            <!--                        tabindex='14'-->
                            <!--                        data-validation="required length number" -->
                            <!--                        data-validation-length="max20"/>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
        
                            <!--        <div class='row'>-->
                            <!--            <div class='col-md-12 col-sm-12 col-xs-12'>-->
                            <!--                <div class="form-group">-->
                            <!--                    <input -->
                            <!--                    type="text" class="form-control noBorder custom-size-header-box" value='State' readonly/>-->
                            <!--                    <select -->
                            <!--                        name="otherstate"-->
                            <!--                        class="form-control noBorder custom-size-input-box" -->
                            <!--                        tabindex='15'-->
                            <!--                        data-validation="required number length"-->
                            <!--                        data-validation-length="max20">-->
                            <!--                    <option value="">--Select a state--</option>    -->
                            <!--                    <option value="1">Alabama</option>-->
                            <!--                    <option value="2">Alaska</option>-->
                            <!--                    <option value="3">Arizona</option>-->
                            <!--                    <option value="4">Arkansas</option>-->
                            <!--                    <option value="5">California</option>-->
                            <!--                    <option value="6">Colorado</option>-->
                            <!--                    <option value="7">Connecticut</option>-->
                            <!--                    <option value="8">Delaware</option>-->
                            <!--                    <option value="9">Dist.Columbia</option>-->
                            <!--                    <option value="10">Florida</option>-->
                            <!--                    <option value="11">Georgia</option>-->
                            <!--                    <option value="12">Hawaii</option>-->
                            <!--                    <option value="13">Idaho</option>-->
                            <!--                    <option value="14">Illinois</option>-->
                            <!--                    <option value="15">Indiana</option>-->
                            <!--                    <option value="16">Iowa</option>-->
                            <!--                    <option value="17">Kansas</option>-->
                            <!--                    <option value="18">Kentucky</option>-->
                            <!--                    <option value="19">Louisiana</option>-->
                            <!--                    <option value="20">Maine</option>-->
                            <!--                    <option value="21">Maryland</option>-->
                            <!--                    <option value="22">Massachusetts</option>-->
                            <!--                    <option value="23">Michigan</option>-->
                            <!--                    <option value="24">Minnesota</option>-->
                            <!--                    <option value="25">Mississippi</option>-->
                            <!--                    <option value="26">Missouri</option>-->
                            <!--                    <option value="27">Montana</option>-->
                            <!--                    <option value="28">Nebraska</option>-->
                            <!--                    <option value="29">Nevada</option>-->
                            <!--                    <option value="30">New Hampshire</option>-->
                            <!--                    <option value="31">New Jersey</option>-->
                            <!--                    <option value="32">New Mexico</option>-->
                            <!--                    <option value="52">NY Non-Bus</option>-->
                            <!--                    <option value="33">NY Business</option>-->
                            <!--                    <option value="34">North Carolina</option>-->
                            <!--                    <option value="35">North Dakota</option>-->
                            <!--                    <option value="36">Ohio</option>-->
                            <!--                    <option value="37">Oklahoma</option>-->
                            <!--                    <option value="38">Oregon</option>-->
                            <!--                    <option value="39">Pennsylvania</option>-->
                            <!--                    <option value="40">Rhode Island</option>-->
                            <!--                    <option value="41">South Carolina</option>-->
                            <!--                    <option value="42">South Dakota</option>-->
                            <!--                    <option value="43">Tennessee</option>-->
                            <!--                    <option value="44">Texas</option>-->
                            <!--                    <option value="45">Utah</option>-->
                            <!--                    <option value="46">Vermont</option>-->
                            <!--                    <option value="47">Virginia</option>-->
                            <!--                    <option value="48">Washington</option>-->
                            <!--                    <option value="49">West Virginia</option>-->
                            <!--                    <option value="50">Wisconsin</option>-->
                            <!--                    <option value="51">Wyoming</option>-->
                            <!--                    <option value="53">Guam</option>-->
                            <!--                    <option value="54">Puerto Rico</option>-->
                            <!--                    <option value="55">Virgin Islands</option>-->
                            <!--                    <option value="56">Amer. Samoa</option>-->
                            <!--              </select>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                                    
                            <!--    </div>-->
                                
                           
                            <!--</div>-->

                            <div class="step8">
                            <h3>We know this is sensitive...</h3>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <!--<input type="text" class="form-control noBorder custom-size-header-box" value='Social security number' readonly/>-->
                                        <div class="input-group">
                                            <input type="text" class="form-control noBorder custom-size-header-box" placeholder="Social security number" aria-describedby="basic-addon2" readonly>
                                            <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control noBorder custom-size-input-box" placeholder="Enter the number" id="ssn" name="ssntext" aria-describedby="basic-addon1" tabindex='10'>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <!--<input type="text" class="form-control noBorder custom-size-header-box" value="Driver's  license number" readonly/>-->
                                        <div class="input-group">
                                            <input type="text" class="form-control noBorder custom-size-header-box" placeholder="Driver's  license number" aria-describedby="basic-addon2" readonly>
                                            <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control noBorder custom-size-input-box" placeholder="Enter the number" id="licenseno" name="licenseno" aria-describedby="basic-addon1" tabindex='10'>
                                    </div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <!--<input type="text" class="form-control noBorder custom-size-header-box" value="Driver license's state" readonly required/>-->
                                        <div class="input-group">
                                            <input type="text" class="form-control noBorder custom-size-header-box" placeholder="Driver license's state" aria-describedby="basic-addon2" readonly>
                                            <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        </div>
                                        <select id="driverlicense" class="form-control noBorder custom-size-input-box" name="driverlicense" tabindex='10'>
                                                <option value="1">Alabama</option>
                                                <option value="2">Alaska</option>
                                                <option value="3">Arizona</option>
                                                <option value="4">Arkansas</option>
                                                <option selected value="5">California</option>
                                                <option value="6">Colorado</option>
                                                <option value="7">Connecticut</option>
                                                <option value="8">Delaware</option>
                                                <option value="9">Dist.Columbia</option>
                                                <option value="10">Florida</option>
                                                <option value="11">Georgia</option>
                                                <option value="12">Hawaii</option>
                                                <option value="13">Idaho</option>
                                                <option value="14">Illinois</option>
                                                <option value="15">Indiana</option>
                                                <option value="16">Iowa</option>
                                                <option value="17">Kansas</option>
                                                <option value="18">Kentucky</option>
                                                <option value="19">Louisiana</option>
                                                <option value="20">Maine</option>
                                                <option value="21">Maryland</option>
                                                <option value="22">Massachusetts</option>
                                                <option value="23">Michigan</option>
                                                <option value="24">Minnesota</option>
                                                <option value="25">Mississippi</option>
                                                <option value="26">Missouri</option>
                                                <option value="27">Montana</option>
                                                <option value="28">Nebraska</option>
                                                <option value="29">Nevada</option>
                                                <option value="30">New Hampshire</option>
                                                <option value="31">New Jersey</option>
                                                <option value="32">New Mexico</option>
                                                <option value="52">NY Non-Bus</option>
                                                <option value="33">NY Business</option>
                                                <option value="34">North Carolina</option>
                                                <option value="35">North Dakota</option>
                                                <option value="36">Ohio</option>
                                                <option value="37">Oklahoma</option>
                                                <option value="38">Oregon</option>
                                                <option value="39">Pennsylvania</option>
                                                <option value="40">Rhode Island</option>
                                                <option value="41">South Carolina</option>
                                                <option value="42">South Dakota</option>
                                                <option value="43">Tennessee</option>
                                                <option value="44">Texas</option>
                                                <option value="45">Utah</option>
                                                <option value="46">Vermont</option>
                                                <option value="47">Virginia</option>
                                                <option value="48">Washington</option>
                                                <option value="49">West Virginia</option>
                                                <option value="50">Wisconsin</option>
                                                <option value="51">Wyoming</option>
                                                <option value="53">Guam</option>
                                                <option value="54">Puerto Rico</option>
                                                <option value="55">Virgin Islands</option>
                                                <option value="56">Amer. Samoa</option>
                                         </select>
                                    </div>
                                </div>
                            </div>

                            <div class='row padding-bottom-2'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <input type="text" class="form-control noBorder custom-size-header-box" value="Driver's  license expiry date" readonly/>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select id="form_dob_month" class="form-control" name="BirthMonth" tabindex='10'><option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option selected="selected" value="12">December</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select id="form_dob_year" class="form-control" name="Birthday" tabindex='10'><option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option selected="selected" value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select id="dob_month" class="form-control" name="BirthYear" tabindex='10'><option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option selected="selected" value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1959">1958</option>
                                                    <option value="1959">1957</option>
                                                    <option value="1959">1956</option>
                                                    <option value="1959">1955</option>
                                                    <option value="1959">1954</option>
                                                    <option value="1959">1953</option>
                                                    <option value="1959">1952</option>
                                                    <option value="1959">1951</option>
                                                    <option value="1959">1950</option>
                                                    <option value="1959">1949</option>
                                                    <option value="1959">1948</option>
                                                    <option value="1959">1947</option>
                                                    <option value="1959">1946</option>
                                                    <option value="1959">1945</option>
                                                    <option value="1959">1944</option>
                                                    <option value="1959">1943</option>
                                                    <option value="1959">1942</option>
                                                    <option value="1959">1941</option>
                                                    <option value="1959">1940</option>
                                                    <option value="1959">1939</option>
                                                    <option value="1959">1938</option>
                                                    <option value="1959">1937</option>
                                                    <option value="1959">1936</option>
                                                    <option value="1959">1935</option>
                                                    <option value="1959">1934</option>
                                                    <option value="1959">1933</option>
                                                    <option value="1959">1932</option>
                                                    <option value="1959">1931</option>
                                                    <option value="1959">1930</option>
                                                    <option value="1959">1929</option>
                                                    <option value="1959">1928</option>
                                                    <option value="1959">1927</option>
                                                    <option value="1959">1926</option>
                                                    <option value="1959">1925</option>
                                                    <option value="1959">1924</option>
                                                    <option value="1959">1923</option>
                                                    <option value="1959">1922</option>
                                                    <option value="1959">1921</option>
                                                    <option value="1959">1920</option>
                                                    <option value="1959">1919</option>
                                                    <option value="1959">1918</option>
                                                    <option value="1959">1917</option>
                                                    <option value="1959">1916</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="step9">
                            <div class='row padding-bottom-2'>
                                <input id="overphone" class="checkbox-custom" name="overphone" type="checkbox" tabindex='10'>
                                <label for="overphone" class="checkbox-custom-label">I would feel more comfortable providing this information over the phone.</label>
                            </div>

                            <div class="col-md-12 padding-bottom-2">
                                <h2>We'll take it from here!</h2>
                            </div>

                            <div class="col-md-12 padding-bottom-2">
                                <h5>Now our experts will review your application</h5>
                            </div>

                            <div class='row'>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <button type="submit" name="submitMainForm" id="submitMainForm" class="btn btn-warning btn-block" tabindex="11">Submit application</button>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!--<div class="col-md-6" style="padding: 0px; padding-right:5px; padding-left:0px" >-->
                            <!--  <input type="submit" name="commit" value="Almost Done -- Next" id="btnTerm" class="btn btn-warning btn-lg step1Button" />-->
                            <!--</div>                    -->
                        

                    </form>