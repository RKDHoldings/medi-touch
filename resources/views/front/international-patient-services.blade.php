@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <!-- <section id="breadcrumbs" class="breadcrumbs">
                    <div class="container">

                      <div class="">
                        <h2>Our Packages</h2>
                        <ol>
                          <li><a href="{{ route('welcome') }}">Home</a></li>
                          <li>Our Packages</li>
                        </ol>
                      </div>

                    </div>
                  </section> -->
        <!-- End Breadcrumbs -->

        <!-- int-patient modal form start  -->
        <div class="modal int-modal" id="myModal" tabindex="-1">
            <div class="modal-dialog   modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 p-2">
                    <div class="modal-header pb-0">
                        <h5 class="modal-title ms-3">Meditouch Hair & Skin Clinic</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ms-3 me-4">
                        <h5 class="modal-title pb-4">Talk to our International Representative</h5>
                        <form action = "{{ route('international-booking') }}" method="POST">
                            @csrf

                            <div class="pt-3">
                                @include('front.packages.msg')
                                <!-- Full Name -->
                                <div class=" mb-4  ">
                                    <!-- <label for="fullName" class="form-label">Full Name</label> -->
                                    <input type="text" class="form-control" name= "name" required
                                        placeholder="Full Name *" id="fullName">
                                </div>

                                <!--Your Country -->
                                <div class=" mb-4 ">
                                    <select class="form-select  mb-3" id="country" name= "country"
                                        aria-label="Select your Country " required>
                                        <option>Select your Country *</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                        </option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cabo Verde">Cabo Verde</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaçao">Curaçao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo
                                        </option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands
                                        </option>
                                        <option value="Holy See">Holy See</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                            Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Macedonia">North Macedonia</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Réunion">Réunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Barthélemy">Saint Barthélemy</option>
                                        <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena,
                                            Ascension and Tristan da Cunha</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                        </option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten">Sint Maarten</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                            South Sandwich Islands</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>

                                <!-- Type of Appointment -->
                                <div class=" mb-4 ">
                                    <select class="form-select  mb-3" id="appointmentType" name="appointment_type"
                                        aria-label="Select the type of Appointment">
                                        <option>Select the type of Appointment</option>
                                        <option value="Dermatology Services">Dermatology Services</option>
                                        <option value="Hair Transplant">Hair Transplant</option>
                                        <option value="Aesthetic Procedures">Aesthetic Procedures</option>
                                        <option value="Plastic Surgery">Plastic Surgery</option>
                                    </select>
                                </div>

                                <!-- Contact Number -->
                                <div class=" row ">
                                    <div class="col-md-4  mb-4">
                                        <!-- Type of Appointment -->
                                        <select class="form-select " name="country_code" id="countryCode">
                                            <option>Select Country Code</option>
                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)
                                            </option>
                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)
                                            </option>
                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)
                                            </option>
                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                            <option data-countryCode="CF" value="236">Central African Republic (+236)
                                            </option>
                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)
                                            </option>
                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)
                                            </option>
                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)
                                            </option>
                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands
                                                (+1649)</option>
                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)
                                            </option>
                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)
                                            </option>
                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)
                                            </option>
                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)
                                            </option>
                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-8  mb-4">
                                        <!-- <label for="contactNumber" class="form-label">Contact Number</label> -->
                                        <input type="tel" class="form-control" required maxlength="10"
                                            placeholder="Contact Number *" name= "phone" id="contactNumber">
                                    </div>
                                </div>
                                <!-- Email Address -->
                                <div class="mb-3">
                                    <!-- <label for="emailAddress" class="form-label">Email Address</label> -->
                                    <input type="email" class="form-control" required id="emailAddress"
                                        placeholder="Email Address *" aria-describedby="emailHelp" name="email">
                                </div>
                                <div class="">
                                    <button type="submit"
                                        class="btn submit-btn d-block  ms-auto py-2 me-2 mt-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- int-patient modal form end  -->

        <!-- Slogan Banner section start -->
        <section class="slogan-banner py-0">
            <picture class="d-flex">
                <source srcset="{{ asset('assets/img/international/slogan-banner/DoctorLandscape.jpg') }}"
                    media="(min-width: 768px)" class="img-fluid" alt="Male and female medical professionals">
                <source srcset="{{ asset('assets/img/international/slogan-banner/DoctorPotrait.jpg') }}"
                    media="(max-width: 768px)" class="img-fluid" alt="Male and female medical professionals">
                <img src="{{ asset('assets/img/international/slogan-banner/DoctorLandscape.jpg') }}" width="100%"
                    class="w-100" alt="Male and female medical professionals">
            </picture>
            <div class="slogan">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-md-5 slogan-column">
                            <div class="slogan-and-contact">
                                <h6 class="slogan-text">
                                    Providing top-notch healthcare for all.
                                </h6>
                                <div class="contact">
                                    <h6 class="text-bold"><i class="bi bi-telephone me-2"></i>International Contact Number
                                    </h6>
                                    <p class="contact-number"> 061-590664, +977 9806509564</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row h-20">
                          
                        </div> -->
                </div>
            </div>
        </section>
        <!-- Slogan Banner section End -->

        <!-- International Patient Journey Section Start -->
        <section class="int-patient-services p-0">
            <div class="container-fluid p-0">
                <section class="hsplt-details MediTouch-journey pb-3">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12 text-center">
                                <h3 class="pb-3 text-start heading-title">Your treatment journey at MediTouch</h3>

                            </div>
                        </div>
                        <div class="row py-3 justify-content-center">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/international/journey/medical-report.png') }}"
                                    class="img-fluid pt-3" alt="an illustration showing doctor analyzing medical report">
                            </div>
                            <div class="col-md-7">
                                <div class="">
                                    <h2 class="jrny-title">Analysis of your Medical History</h2>
                                    <p class="pb-2">Our team of highly experienced medical specialists reviews your
                                        medical history to advise you on the best treatment options and plan your treatment
                                        journey. </p>
                                    <!-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Consult Now</button></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="row py-3 justify-content-center">
                            <div class="col-md-7 order-1 order-lg-0">
                                <div class=" ">
                                    <h2 class="jrny-title">Pre-Arrival Consultation</h2>
                                    <p>Traveling with a medical condition can be challenging. Prior to your travel,
                                        MediTouch will assist you in scheduling a telemedicine (video) consultation with a
                                        Doctor to thoroughly analyze your medical status and conduct a detailed assessment
                                        of your present health. </p>
                                    <!-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Get in Touch</button></p> -->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/international/journey/consultation1.png') }}"
                                    class="img-fluid pt-3 " alt="an illustration showing doctor analyzing medical report">
                            </div>
                        </div>
                        <div class="row py-3 justify-content-center">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/international/journey/travel.png') }}"
                                    class="img-fluid pt-3"
                                    alt="an illustration showing travellers, map and hotel booking on smartphone screen">
                            </div>
                            <div class="col-md-7">
                                <div class="">
                                    <h2 class="jrny-title">Care Beyond Travel Arrangements</h2>
                                    <p class="pb-2">Our care goes beyond your hospital visit. Once confirming the travel
                                        dates, MediTouch Team will arrange all of your appointments, local transportation,
                                        and hotel reservation If prior tests are required, then they will be scheduled as
                                        well. Let us take care of your travel arrangements so you can focus on healing and
                                        wellness. We look forward to supporting you. </p>
                                    <!-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Contact Us</button></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="row py-3 justify-content-center">
                            <div class="col-md-7 order-1 order-lg-0">
                                <div class=" ">
                                    <br />
                                    <h2 class="jrny-title">Hassle Free Health Journey</h2>
                                    <p>Our international patient services partners will be with you every step of the way at
                                        the hospital, from the admission procedure, medical consultations, and treatment,
                                        all the way through recovery and discharge. Following a successful treatment, the
                                        doctor will advise you on post-treatment care and, if necessary, follow-up support
                                        for future sessions.</p>
                                    <!-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Get in Touch</button></p> -->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/international/journey/onlineTicketing.png') }}"
                                    class="img-fluid pt-3" width="350"
                                    alt="an illustration showing a woman booking tickets through smartphone">
                            </div>
                        </div>
                        <div class="row py-3 justify-content-center">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/international/journey/consultation.png') }}"
                                    class="img-fluid pt-3" alt="an illustration showing doctor advising patient">

                            </div>
                            <div class="col-md-7">
                                <div class="">
                                    <h2 class="jrny-title">Post-Hospitalization Care</h2>
                                    <p class="pb-2">We assist you with all of your post-hospitalization questions,
                                        arrange all of your medical reports, and guide you through the discharge process.
                                    </p>
                                    <!-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Contact Us</button></p> -->
                                </div>
                            </div>
                        </div>

                        <div class="row py-3 justify-content-center">
                            <div class="col-md-7 order-1 order-lg-0">
                                <div class=" ">
                                    <br />
                                    <h2 class="jrny-title">MediTouch Travels Back With You</h2>
                                    <p>Once you enter MediTouch, you are a part of the MediTouch Family. Post treatment, our
                                        team checks to see whether you need any post-operative therapy, take a note of your
                                        medication, and make gentle fo</p>
                                    <!-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Set Up a follow-up request</button></p> -->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/international/journey/femaleDoctor.png') }}"
                                    class="img-fluid pt-3" alt="an illustration showing a female doctor">
                            </div>
                        </div>





                    </div>

                </section>

            </div>
        </section>
        <!-- International Patient Journey Section End -->


        <!-- patient-services section start -->
        <section class="patient-services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/international/journey/doctor-patient1.png') }}" class="img-fluid"
                            alt="an illustration showing doctor advising patient">
                    </div>
                    <div class="col-md-5">
                        <h2 class="pb-3">Patient Services</h2>
                        <div class="service">
                            <i class="bi bi-translate"></i>
                            Language Interpretation
                        </div>
                        <div class="service">
                            <i class="bi bi-coin"></i>
                            Cost Estimation
                        </div>
                        <div class="service">
                            <i class="bi bi-shield-plus"></i>
                            Insurance & Billing Assistance
                        </div>
                        {{-- <p><button type="button" class="btn-form-popup" data-bs-toggle="modal"
                                data-bs-target="#popupForm">Consult Now</button></p> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- patient-services section end -->



        <!-- plan your trip section start -->
        <section class="plan-your-trip">
            <div class="container">
                <div class="row justify-content-center gx-5">
                    <div class="col-md-4">
                        <h3 class="plan-trip-title text-capitalize">Plan your trip</h3>
                        <p class="pt-2">Our skin and hair clinic provides a comprehensive array of services, specializing
                            in key areas of expertise, including Dermatology, Trichology, Cosmetic Procedures, Hair
                            Restoration, and General Skin Health.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="row gy-4 trip-services">
                            <div class=" col-6 col-md-4 trip-service-card">
                                <img src="{{ asset('assets/img/international/trip/suitcase.png') }}"
                                    alt="suitcase and luggage" width="40">
                                <p class="pt-2">Pre Travel Process</p>
                            </div>
                            <div class=" col-6 col-md-4 trip-service-card">
                                <img src="{{ asset('assets/img/international/trip/flight.svg') }}"
                                    alt="suitcase and luggage" width="40">
                                <p class="pt-2">International Patient Protocol</p>
                            </div>
                            <div class=" col-6 col-md-4 trip-service-card">
                                <img src="{{ asset('assets/img/international/trip/insurance.svg') }}"
                                    alt="suitcase and luggage" width="40">
                                <p class="pt-2">International Insurance</p>
                            </div>
                            <div class=" col-6 col-md-4 trip-service-card">
                                <img src="{{ asset('assets/img/international/trip/passport.svg') }}"
                                    alt="suitcase and luggage" width="40">
                                <p class="pt-2">Visa Faciliation</p>
                            </div>
                            <div class=" col-6 col-md-4 trip-service-card">
                                <img src="{{ asset('assets/img/international/trip/home.svg') }}"
                                    alt="suitcase and luggage" width="50">
                                <p class="pt-2">Accommodation: Hotel & Stay</p>
                            </div>
                            <div class=" col-6 col-md-4 trip-service-card">
                                <img src="{{ asset('assets/img/international/trip/meal.svg') }}"
                                    alt="suitcase and luggage" width="50">
                                <p class="pt-2">Food & Cuisine</p>
                            </div>
                            <div class=" col-6 col-md-4 trip-service-card">
                                <!-- <p class="pt-2"><button type="button" class="btn-form-popup" data-bs-toggle="modal" data-bs-target="#popupForm">Consult Now</button></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- plan your trip section end -->

        <!-- int'l FAQ section start -->
        <section class="int-faq ">
            <div class="container">
                <h3 class="plan-trip-title text-capitalize pb-4 text-center">Frequently Asked Questions</h3>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Can international patients receive treatment at Meditouch Skin and Hair Clinic?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> Absolutely! We welcome patients from around the world to experience our expert
                                            dermatological and aesthetic services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How can I schedule an appointment as an international patient?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>To schedule an appointment, please contact our International Patient Coordinator
                                            through the provided contact details on our website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Can I seek an appointment with a specialist at Meditouch Skin and Hair Clinic even
                                        if I don't have a local referral?

                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> Yes, you can. You can contact our Meditouch Skin and Hair Clinic, providing
                                            detailed information about the history of your health and treatment sought. We
                                            will help you coordinate and set up an appointment with an appropriate
                                            specialist.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        How can I communicate with my healthcare provider during my stay?

                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> Our healthcare providers are proficient in English. Interpretation services can
                                            be arranged if needed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How do I get more information or clarify doubts?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> For any additional information or queries, please feel free to reach out to our
                                            International Patient Coordinator.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- int'l FAQ section end -->


        <!-- int'l Testimonials start -->
        <section class="int-testimonials ">
            <div class="container">
                <h3 class="plan-trip-title text-capitalize pb-3 heading-title">Testimonials</h3>
                <div class="int-testimonials-slider swiper mySwiper">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide">
                            <div class="card p-3" style="">
                                <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top"
                                    alt="MediTouch Clinic Logo">
                                <div class="card-body p-4">
                                    <p class=" fst-italic pb-3"><i
                                            class="bx bxs-quote-alt-left quote-icon-left"></i>Choosing Meditouch for my
                                        dermatological needs was the best decision. The personalized care and advanced
                                        treatments exceeded my expectations.<i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                    <div class="card-title">
                                        <h5 class="int-patient">Ravi K.</h5>
                                        <p class="country text-center">India</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-3" style="">
                                <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top"
                                    alt="MediTouch Clinic Logo">
                                <div class="card-body p-4">
                                    <p class=" fst-italic pb-3"> <i
                                            class="bx bxs-quote-alt-left quote-icon-left"></i>The international patient
                                        team at Meditouch made the entire process seamless. From consultation to
                                        post-treatment, their dedication is commendable.<i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                    <div class="card-title">
                                        <h5 class="int-patient">Mei L.</h5>
                                        <p class="country text-center">China</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-3" style="">
                                <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top"
                                    alt="MediTouch Clinic Logo">
                                <div class="card-body p-4">
                                    <p class="card-text fst-italic pb-3"> <i
                                            class="bx bxs-quote-alt-left quote-icon-left"></i>Navigating healthcare in a
                                        foreign land can be daunting, but Meditouch made it easy. Clear communication and
                                        top-notch service set them apart.<i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                    <div class="card-title">
                                        <h5 class="int-patient">Ahmed S.</h5>
                                        <p class="country text-center">UAE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-3" style="">
                                <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top"
                                    alt="MediTouch Clinic Logo">
                                <div class="card-body p-4">
                                    <p class="card-text fst-italic pb-3"> <i
                                            class="bx bxs-quote-alt-left quote-icon-left"></i>Meditouch is not just a
                                        clinic; ita a hub of excellence. The results speak for themselves. I’m truly
                                        grateful for the transformative experience.<i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                    <div class="card-title">
                                        <h5 class="int-patient"> Maria D.</h5>
                                        <p class="country text-center">France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-3" style="">
                                <img src="{{ asset('assets/img/logo.png') }}" class="card-img-top"
                                    alt="MediTouch Clinic Logo">
                                <div class="card-body p-4">
                                    <p class="card-text fst-italic pb-3"> <i
                                            class="bx bxs-quote-alt-left quote-icon-left"></i>I traveled from Germany for
                                        a specialized procedure. The expertise of the doctors and the warmth of the staff
                                        made me feel at home. <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                                    <div class="card-title">
                                        <h5 class="int-patient">Olivia M.</h5>
                                        <p class="country text-center">USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- int'l Testimonials end -->


        <!-- Book an appointment banner section Start  -->
        <section id="appointment" class="appointment intl-patient-form">
            <div class="container p-0">
                <div class="appointment-banner intl-patient-form-banner">
                    <div class="row">
                        <div class="me-auto text-content">
                            <div class="px-4">
                                <h3 class="title mb-3">Book Your Appointment Today</h3>
                                <p class="subtitle text-center">Experience personalized care for international patients
                                </p>
                                <button type="button"
                                    onclick="window.location.href='{{ route('international-patient-services') }}';"
                                    class="btn btn-primary">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book an appointment banner section end  -->


        <!-- @if (session('success'))
    -->
        <!-- Include jQuery library -->
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

        <!-- Include Bootstrap JS (for toast functionality) -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

        <!--
    @endif -->



    </main><!-- End #main -->
@endsection
