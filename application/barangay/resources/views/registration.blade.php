<html lang="en">
<!--HEADER -->
@include('head')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<link href="{{asset('css/registration.css')}}" rel="stylesheet">

<h1 class="display-6 text-center fw-bolder my-3">REGISTRATION FORM</h1>
@include('sweetalert::alert')

<div class="myContainer_reg">
    <form id="yourForm" method="post" enctype="multipart/form-data" action="{{url('registerUser')}}" class="needs-validation" novalidate>
        @csrf
        <input type="hidden" id="otp" name="otp">
        <input type="hidden" id="role" name="role" value="resident">
        <div class="card-body mb-4">
            <fieldset class="groupBox">
                <legend class="goupBoxHeader">Personal Information</legend>
                <div class="col-md-12 row mb-2">
                    <div class="form-group  col-md-4">
                        <label for="firstName">First Name (<em>Unang Pangalan</em>)<span class="text-danger">*</span></label>
                        <input style="text-transform: uppercase;" id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name" required>
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middleName">Middle Name (<em>Gitnang Pangalan</em>)<span class="text-danger">*</span> </label>
                            <input style="text-transform: uppercase;" id="middleName" name="middleName" type="text" class="form-control" placeholder="Middle Name" required>
                            <div class="invalid-feedback">
                                Please enter your middle name.
                            </div>
                            <div class="form-check">
                                <input onchange="hideMiddleName(this);" class="form-check-input" type="checkbox" name="checkMiddleName" id="checkMiddleName" style="border:black">
                                <label class="fs-6" for="checkMiddleName" style="color:black">
                                    No Middle Name
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="lastName">Last Name (<em>Apelyido</em>)<span class="text-danger">*</span> </label>
                        <input style="text-transform: uppercase;" id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name" required>
                        <div class="invalid-feedback">
                            Please enter your middle name.
                        </div>
                    </div>

                </div>
                <div class="col-md-12 row mb-2">
                    <div class="form-group  col-md-3">
                        <label>Suffix (<em>Hul a pì</em>)</label>
                        <select class="form-select form-control" name="suffix" id="suffix" required>
                            <option value="">Select...</option>
                            <option value="">None</option>
                            <option value="Jr.">Jr.</option>
                            <option value="Jr. II">Jr. II</option>
                            <option value="Sr.">Sr.</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select your suffix. (If none choose None)
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Gender (<em>Kasarian</em>)<span class="text-danger">*</span></label>
                        <select id="gender" name="gender" class="form-select form-control" required>
                            <option value="">Select...</option>
                            <option value="Male">Male (<em>Lalaki</em>)</option>
                            <option value="Female">Female (<em>Babae</em>)</option>
                        </select>
                        <div class="invalid-feedback">
                            Please choose your gender.
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Civil Status (<em>Katayuang Sibil</em>)<span class="text-danger">*</span></label>
                        <select class="form-select form-control" name="marital_status" id="marital_status" required>
                            <option value="">Select...</option>
                            <option value="Single">Single (<em>Walang Asawa</em>)</option>
                            <option value="Married">Married (<em>Kasal</em>)</option>
                            <option value="Divorced">Divorced (<em>Diborsyo</em>)</option>
                            <option value="Separated">Separated (<em>Hiwalay</em>)</option>
                            <option value="Widowed">Widowed (<em>Byuda</em>)</option>
                        </select>
                        <div class="invalid-feedback">
                            Please choose your Marital Status.
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Nationality (<em>Nasyonalidad</em>)<span class="text-danger">*</span></label>
                        <select class="form-select form-control" name="nationality" id="nationality" required>
                            <option value="FILIPINO">FILIPINO</option>
                            <option value="AFGHAN">AFGHAN</option>
                            <option value="ALBANIAN">ALBANIAN</option>
                            <option value="ALGERIAN">ALGERIAN</option>
                            <option value="AMERICAN">AMERICAN</option>
                            <option value="ANDORRAN">ANDORRAN</option>
                            <option value="ANGOLAN">ANGOLAN</option>
                            <option value="ANTIGUANS">ANTIGUANS</option>
                            <option value="ARGENTINEAN">ARGENTINEAN</option>
                            <option value="ARMENIAN">ARMENIAN</option>
                            <option value="AUSTRALIAN">AUSTRALIAN</option>
                            <option value="AUSTRIAN">AUSTRIAN</option>
                            <option value="AZERBAIJANI">AZERBAIJANI</option>
                            <option value="BAHAMIAN">BAHAMIAN</option>
                            <option value="BAHRAINI">BAHRAINI</option>
                            <option value="BANGLADESHI">BANGLADESHI</option>
                            <option value="BARBADIAN">BARBADIAN</option>
                            <option value="BARBUDANS">BARBUDANS</option>
                            <option value="BATSWANA">BATSWANA</option>
                            <option value="BELARUSIAN">BELARUSIAN</option>
                            <option value="BELGIAN">BELGIAN</option>
                            <option value="BELIZEAN">BELIZEAN</option>
                            <option value="BENINESE">BENINESE</option>
                            <option value="BHUTANESE">BHUTANESE</option>
                            <option value="BOLIVIAN">BOLIVIAN</option>
                            <option value="BOSNIAN">BOSNIAN</option>
                            <option value="BRAZILIAN">BRAZILIAN</option>
                            <option value="BRITISH">BRITISH</option>
                            <option value="BRUNEIAN">BRUNEIAN</option>
                            <option value="BULGARIAN">BULGARIAN</option>
                            <option value="BURKINABE">BURKINABE</option>
                            <option value="BURMESE">BURMESE</option>
                            <option value="BURUNDIAN">BURUNDIAN</option>
                            <option value="CAMBODIAN">CAMBODIAN</option>
                            <option value="CAMEROONIAN">CAMEROONIAN</option>
                            <option value="CANADIAN">CANADIAN</option>
                            <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                            <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                            <option value="CHADIAN">CHADIAN</option>
                            <option value="CHILEAN">CHILEAN</option>
                            <option value="CHINESE">CHINESE</option>
                            <option value="COLOMBIAN">COLOMBIAN</option>
                            <option value="COMORAN">COMORAN</option>
                            <option value="CONGOLESE">CONGOLESE</option>
                            <option value="COSTA RICAN">COSTA RICAN</option>
                            <option value="CROATIAN">CROATIAN</option>
                            <option value="CUBAN">CUBAN</option>
                            <option value="CYPRIOT">CYPRIOT</option>
                            <option value="CZECH">CZECH</option>
                            <option value="DANISH">DANISH</option>
                            <option value="DJIBOUTI">DJIBOUTI</option>
                            <option value="DOMINICAN">DOMINICAN</option>
                            <option value="DUTCH">DUTCH</option>
                            <option value="EAST TIMORESE">EAST TIMORESE</option>
                            <option value="ECUADOREAN">ECUADOREAN</option>
                            <option value="EGYPTIAN">EGYPTIAN</option>
                            <option value="EMIRIAN">EMIRIAN</option>
                            <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                            </option>
                            <option value="ERITREAN">ERITREAN</option>
                            <option value="ESTONIAN">ESTONIAN</option>
                            <option value="ETHIOPIAN">ETHIOPIAN</option>
                            <option value="FIJIAN">FIJIAN</option>
                            <option value="FINNISH">FINNISH</option>
                            <option value="FRENCH">FRENCH</option>
                            <option value="GABONESE">GABONESE</option>
                            <option value="GAMBIAN">GAMBIAN</option>
                            <option value="GEORGIAN">GEORGIAN</option>
                            <option value="GERMAN">GERMAN</option>
                            <option value="GHANAIAN">GHANAIAN</option>
                            <option value="GREEK">GREEK</option>
                            <option value="GRENADIAN">GRENADIAN</option>
                            <option value="GUATEMALAN">GUATEMALAN</option>
                            <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                            <option value="GUINEAN">GUINEAN</option>
                            <option value="GUYANESE">GUYANESE</option>
                            <option value="HAITIAN">HAITIAN</option>
                            <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                            <option value="HONDURAN">HONDURAN</option>
                            <option value="HUNGARIAN">HUNGARIAN</option>
                            <option value="ICELANDER">ICELANDER</option>
                            <option value="INDIAN">INDIAN</option>
                            <option value="INDONESIAN">INDONESIAN</option>
                            <option value="IRANIAN">IRANIAN</option>
                            <option value="IRAQI">IRAQI</option>
                            <option value="IRISH">IRISH</option>
                            <option value="ISRAESLI">ISRAELI</option>
                            <option value="ITALIAN">ITALIAN</option>
                            <option value="IVORIAN">IVORIAN</option>
                            <option value="JAMAICAN">JAMAICAN</option>
                            <option value="JAPANESE">JAPANESE</option>
                            <option value="JORDANIAN">JORDANIAN</option>
                            <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                            <option value="KENYAN">KENYAN</option>
                            <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                            </option>
                            <option value="KUWAITI">KUWAITI</option>
                            <option value="KYRGYZ">KYRGYZ</option>
                            <option value="LAOTIAN">LAOTIAN</option>
                            <option value="LATVIAN">LATVIAN</option>
                            <option value="LEBANESE">LEBANESE</option>
                            <option value="LIBERIAN">LIBERIAN</option>
                            <option value="LIBYAN">LIBYAN</option>
                            <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                            <option value="LITHUANIAN">LITHUANIAN</option>
                            <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                            <option value="MACEDONIAN">MACEDONIAN</option>
                            <option value="MALAGASY">MALAGASY</option>
                            <option value="MALAWIAN">MALAWIAN</option>
                            <option value="MALAYSIAN">MALAYSIAN</option>
                            <option value="MALDIVAN">MALDIVAN</option>
                            <option value="MALIAN">MALIAN</option>
                            <option value="MALTESE">MALTESE</option>
                            <option value="MARSHALLESE">MARSHALLESE</option>
                            <option value="MAURITANIAN">MAURITANIAN</option>
                            <option value="MAURITIAN">MAURITIAN</option>
                            <option value="MEXICAN">MEXICAN</option>
                            <option value="MICRONESIAN">MICRONESIAN</option>
                            <option value="MOLDOVAN">MOLDOVAN</option>
                            <option value="MONACAN">MONACAN</option>
                            <option value="MONGOLIAN">MONGOLIAN</option>
                            <option value="MOROCCAN">MOROCCAN</option>
                            <option value="MOSOTHO">MOSOTHO</option>
                            <option value="MOTSWANA">MOTSWANA</option>
                            <option value="MOZAMBICAN">MOZAMBICAN</option>
                            <option value="NAMIBIAN">NAMIBIAN</option>
                            <option value="NAURUAN">NAURUAN</option>
                            <option value="NEPALESE">NEPALESE</option>
                            <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                            <option value="NI-VANUATU">NI-VANUATU</option>
                            <option value="NICARAGUAN">NICARAGUAN</option>
                            <option value="NIGERIEN">NIGERIEN</option>
                            <option value="NORTH KOREAN">NORTH KOREAN</option>
                            <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                            <option value="NORWEGIAN">NORWEGIAN</option>
                            <option value="OMANI">OMANI</option>
                            <option value="PAKISTANI">PAKISTANI</option>
                            <option value="PALAUAN">PALAUAN</option>
                            <option value="PANAMANIAN">PANAMANIAN</option>
                            <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                            <option value="PARAGUAYAN">PARAGUAYAN</option>
                            <option value="PERUVIAN">PERUVIAN</option>
                            <option value="POLISH">POLISH</option>
                            <option value="PORTUGUESE">PORTUGUESE</option>
                            <option value="QATARI">QATARI</option>
                            <option value="ROMANIAN">ROMANIAN</option>
                            <option value="RUSSIAN">RUSSIAN</option>
                            <option value="RWANDAN">RWANDAN</option>
                            <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                            <option value="SALVADORAN">SALVADORAN</option>
                            <option value="SAMOAN">SAMOAN</option>
                            <option value="SAN MARINESE">SAN MARINESE</option>
                            <option value="SAO TOMEAN">SAO TOMEAN</option>
                            <option value="SAUDI">SAUDI</option>
                            <option value="SCOTTISH">SCOTTISH</option>
                            <option value="SENEGALESE">SENEGALESE</option>
                            <option value="SERBIAN">SERBIAN</option>
                            <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                            <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                            <option value="SINGAPOREAN">SINGAPOREAN</option>
                            <option value="SLOVAKIAN">SLOVAKIAN</option>
                            <option value="SLOVENIAN">SLOVENIAN</option>
                            <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                            <option value="SOMALI">SOMALI</option>
                            <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                            <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                            <option value="SPANISH">SPANISH</option>
                            <option value="SRI LANKAN">SRI LANKAN</option>
                            <option value="SUDANESE">SUDANESE</option>
                            <option value="SURINAMER">SURINAMER</option>
                            <option value="SWAZI">SWAZI</option>
                            <option value="SWEDISH">SWEDISH</option>
                            <option value="SWISS">SWISS</option>
                            <option value="SYRIAN">SYRIAN</option>
                            <option value="TAIWANESE">TAIWANESE</option>
                            <option value="TAJIK">TAJIK</option>
                            <option value="TANZANIAN">TANZANIAN</option>
                            <option value="THAI">THAI</option>
                            <option value="TOGOLESE">TOGOLESE</option>
                            <option value="TONGAN">TONGAN</option>
                            <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                                TOBAGONIAN</option>
                            <option value="TUNISIAN">TUNISIAN</option>
                            <option value="TURKISH">TURKISH</option>
                            <option value="TUVALUAN">TUVALUAN</option>
                            <option value="UGANDAN">UGANDAN</option>
                            <option value="UKRAINIAN">UKRAINIAN</option>
                            <option value="URUGUAYAN">URUGUAYAN</option>
                            <option value="UZBEKISTANI">Uzbekistani</option>
                            <option value="VENEZUELAN">VENEZUELAN</option>
                            <option value="VIETNAMESE">VIETNAMESE</option>
                            <option value="WELSH">WELSH</option>
                            <option value="YEMENITE">YEMENITE</option>
                            <option value="ZAMBIAN">ZAMBIAN</option>
                            <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 row mb-2">
                    <div class="form-group col-md-4">
                        <label>Birthdate (<em>Araw ng Kapanganakan</em>)<span class="text-danger">*</span></label>
                        <!-- <input max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}" type="date" name="birthdate" id="birthdate" class="form-control" required> -->

                        <input type="text" name="birthdate" id="birthdate" value="{{ date('m/d/Y', strtotime('-18 years')) }}" class="form-control" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Age (<em>Edad</em>)</label>
                        <input style="text-transform: uppercase;" id="age" type="text" class="form-control form-control" value="18" readonly />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Place of Birth (<em>Lugar ng Kapanganakan</em>)<span class="text-danger">*</span></label>
                        <input style="text-transform: uppercase;" type="text" id="birthplace" name="birthplace" class="form-control form-control" placeholder="(City/Municipality), (Province)" required />
                    </div>
                </div>


                <legend class="goupBoxHeader mt-3">Address (Barangay South Signal Village)</legend>
                <div class="col-md-12 row mb-2">

                    <div class="col-sm-6 mb-2">
                        <div class="form-group">
                            <label>Room/Flr/Unit No. & Bldg</label>
                            <input style="text-transform: uppercase;" type="text" name="unitNo" id="unitNo" class="form-control notCapital" placeholder="Room/Flr/Unit No. & Bldg">
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="form-group">
                            <label>House/Lot & Block No. <span class="text-danger">*</span></label>
                            <input style="text-transform: uppercase;" type="text" name="houseNo" id="houseNo" class="form-control notCapital" placeholder="House/Lot & Block No." required>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="form-group">
                            <label>Street <span class="text-danger">*</span> </label>
                            <!-- <input style="text-transform: uppercase;" type="text" name="street" id="street" class="form-control notCapital" placeholder="Street" required> -->
                            <select class="form-select form-control" name="street" id="street" required>
                                <option value="">Select...</option>
                                <option value='A. Bonifacio'>A. Bonifacio</option>
                                <option value='Abad'>Abad</option>
                                <option value='Aguirre'>Aguirre</option>
                                <option value='Airforce Road'>Airforce Road</option>
                                <option value='Airforce Road Extn.'>Airforce Road Extn.</option>
                                <option value='Army Road'>Army Road</option>
                                <option value='Atis '>Atis </option>
                                <option value='Banaba'>Banaba</option>
                                <option value='Bayanihan Road'>Bayanihan Road</option>
                                <option value='Caliao'>Caliao</option>
                                <option value='Camia'>Camia</option>
                                <option value='Col. Ballecer'>Col. Ballecer</option>
                                <option value='Col. Ballecer Extn.'>Col. Ballecer Extn.</option>
                                <option value='Col. Gervacio'>Col. Gervacio</option>
                                <option value='Convergence'>Convergence</option>
                                <option value='Daisy'>Daisy</option>
                                <option value='Directo'>Directo</option>
                                <option value='E. Rodriguez'>E. Rodriguez</option>
                                <option value='Espedilla'>Espedilla</option>
                                <option value='Everlasting'>Everlasting</option>
                                <option value='Friendship'>Friendship</option>
                                <option value='Gen. Aguinaldo'>Gen. Aguinaldo</option>
                                <option value='Gen. del Pilar'>Gen. del Pilar</option>
                                <option value='Gen. Espino'>Gen. Espino</option>
                                <option value='Gen. Luna'>Gen. Luna</option>
                                <option value='Gen. Malvar'>Gen. Malvar</option>
                                <option value='Gen. Mc Arthur'>Gen. Mc Arthur</option>
                                <option value='GHQ Road'>GHQ Road</option>
                                <option value='Gumamela'>Gumamela</option>
                                <option value='Hechanova'>Hechanova</option>
                                <option value='Herbs'>Herbs</option>
                                <option value='Ilang-Ilang'>Ilang-Ilang</option>
                                <option value='J.P. Laurel '>J.P. Laurel </option>
                                <option value='Jasmin'>Jasmin</option>
                                <option value='Luzon'>Luzon</option>
                                <option value='Manalili'>Manalili</option>
                                <option value='Manggahan'>Manggahan</option>
                                <option value='Manggahan Extn.'>Manggahan Extn.</option>
                                <option value='Martinez'>Martinez</option>
                                <option value='Mayor Tanyag'>Mayor Tanyag</option>
                                <option value='Napocor'>Napocor</option>
                                <option value='Navy Road'>Navy Road</option>
                                <option value='Orchid'>Orchid</option>
                                <option value='Palma'>Palma</option>
                                <option value='Pamela'>Pamela</option>
                                <option value='Pardiñas'>Pardiñas</option>
                                <option value='PC Road'>PC Road</option>
                                <option value='PNP Road'>PNP Road</option>
                                <option value='Pres. Garcia'>Pres. Garcia</option>
                                <option value='Pres. Laurel'>Pres. Laurel</option>
                                <option value='Pres. M.L. Quezon'>Pres. M.L. Quezon</option>
                                <option value='Pres. Macapagal'>Pres. Macapagal</option>
                                <option value='Pres. Magsaysay'>Pres. Magsaysay</option>
                                <option value='Pres. Magsaysay Extn.'>Pres. Magsaysay Extn.</option>
                                <option value='Pres. Osmeña'>Pres. Osmeña</option>
                                <option value='Pres. Quirino'>Pres. Quirino</option>
                                <option value='Pres. Roxas'>Pres. Roxas</option>
                                <option value='Pres.Quirino Extn.'>Pres.Quirino Extn.</option>
                                <option value='Providencia Ext.'>Providencia Ext.</option>
                                <option value='Quintar'>Quintar</option>
                                <option value='Ranger'>Ranger</option>
                                <option value='Sto. Niño'>Sto. Niño</option>
                                <option value='Visayas'>Visayas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="form-group">
                            <label>Zone <span class="text-danger">*</span></label>
                            <input style="text-transform: uppercase;" type="text" name="purok" id="purok" class="form-control notCapital" placeholder="Subd./ Phase/ Purok" required>
                        </div>
                    </div>
                </div>


            </fieldset>
        </div>


        <div class="card-body mb-4">
            <fieldset class="groupBox">
                <legend class="goupBoxHeader">Account Information</legend>

                <div class="col-md-12 row mb-2">
                    <div class="form-group col-md-6 mb-2">
                        <label>Email Address<span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                        <div class="invalid-feedback">
                            Please input valid email address.
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label for="mobile">Personal Mobile Number <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                            </div>
                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onchange="updatenum();" name="number" id="number" type="number" maxlength="10" minlength="10" class="form-control mobile" id="mobileNumber" placeholder="Mobile Number" required>
                            <div class="invalid-feedback">
                                Please input valid mobile number.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 row mb-2">
                    <div class="form-group col-md-6">
                        <label>Password<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input onkeyup="checkPassword();" type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            <button onclick="eye();" type="button" class="input-group-text " id='togglePassword'><i id='eye' class="bi bi-eye-fill"></i></button>
                        </div>
                        <div class="progress mt-1" style="height: 5px;">
                            <div id="progress" class="progress-bar bg-danger" role="progressbar" aria-label="Example 1px high" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="invalid-feedback">
                            Please input valid password.
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <span id="lower-upper" style="color: rgba(192, 1, 1, 0.932);">
                                    <i id="lower-upper_check" class="bi bi-x-circle">&nbsp;Uppercase and Lowercase</i>
                                </span>
                            </li>
                            <li>
                                <span id="numbers" style="color: rgba(192, 1, 1, 0.932);">
                                    <i id="numbers_check" class="bi bi-x-circle">&nbsp;Number(0-9)</i>
                                </span>
                            </li>
                            <li>
                                <span id="specialChar" style="color: rgba(192, 1, 1, 0.932);">
                                    <i id="specialChar_check" class="bi bi-x-circle">&nbsp;Special Character (!@#$%^&*_-)</i>
                                </span>
                            </li>
                            <li>
                                <span id="count" style="color: rgba(192, 1, 1, 0.932);">
                                    <i id="count_check" class="bi bi-x-circle">&nbsp;Atleast 8 characters</i>
                                </span>
                            </li>
                        </ul>

                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirm Password<span class="text-danger">*</span></label>
                        <input onkeyup="checkConfirmPassword();" type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                        <div class="invalid-feedback">
                            Please Confirm Password.
                        </div>
                        <div id="mismatch" class="invalid-feedback" style="display:none">
                            Your confirm password is not match with your inputted password.
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="card-body mb-4">
            <fieldset class="groupBox">
                <legend class="goupBoxHeader">Verification</legend>
                <h6 class="mx-2 my-3">Please upload any valid ID to verify your created account. Your ID should contain your address in Barangay South Signal Village. Upload your ID both the front and back. This action will help us to easily verify your application for the online services. </h6>
                <h6 class="mx-2 my-3"><em>Paki-upload ng kahit anong valid na ID upang magsilbing patunay sa ginawa mong account. Ang iyong ID ay dapat na naglalaman ng iyong kasalukuyang address sa Barangay South Signal Village. I-upload ang harap at likod ng iyong ID upang mapabilis ang pag-verify ng iyong aplikasyon para sa online na serbisyo ng website.</em></h6>
                <div class="col-md-12 row mb-2">
                    <div class="form-group col-md-6 mb-2">
                        <label>Choose Valid ID.<span class="text-danger">*</span></label>
                        <select class="form-control form-select" name="type_validID" id="type_validID" required>
                            <option value="">Select...</option>
                            <option value="Philippine passport">Philippine passport</option>
                            <option value="Driver’s license">Driver’s license</option>
                            <option value="SSS UMID Card">SSS UMID Card</option>
                            <option value="PhilHealth ID">PhilHealth ID</option>
                            <option value="TIN Card">TIN Card</option>
                            <option value="Postal ID">Postal ID</option>
                            <option value="Voter’s ID">Voter’s ID</option>
                            <option value="Professional Regulation Commission ID">Professional Regulation Commission ID</option>
                            <option value="Senior Citizen ID">Senior Citizen ID</option>
                            <option value="OFW ID">OFW ID</option>
                            <option value="Student ID">Student ID</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select ID to upload.
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-2">
                        <label for="validID_num">ID Number<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input style="text-transform: uppercase;" type="text" class="form-control mobile" name="validID_num" id="validID_num" placeholder="ID Number" required>
                            <div class="invalid-feedback">
                                Please input your ID number.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 row mb-2">
                    <div class="form-group col-md-6 mb-2">
                        <div class="">
                            <legend class="goupBoxHeader">Front ID</legend>
                            <div class="mb-5">
                                <label for="Image" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile" name="formFile" onchange="preview()" required>
                                <div class="invalid-feedback">
                                    Please attach your ID.
                                </div>
                                <div class="text-center">
                                    <button onclick="clearImage()" class="btn mt-3" style="background-color:#AA0F0A; color: white;">Clear</button>
                                </div>
                            </div>

                            <img id="frame" src="" class="img-fluid" />
                        </div>
                    </div>

                    <div class="form-group col-md-6 mb-2">
                        <div class="">
                            <legend class="goupBoxHeader">Back ID</legend>
                            <div class="mb-5">
                                <label for="Image" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile_2" name="formFile_2" onchange="preview_2()" required>
                                <div class="invalid-feedback">
                                    Please attach your ID.
                                </div>
                                <div class="text-center">
                                    <button onclick="clearImage_2()" class="btn mt-3" style="background-color:#AA0F0A; color: white;">Clear</button>
                                </div>

                            </div>
                            <img id="frame_2" src="" class="img-fluid" />
                        </div>

                    </div>

                </div>
            </fieldset>
        </div>
        <div class="card-footer" style="text-align:center ;">
            <div class="form-group mb-2">
                <nobr> <input onchange="isCheck(this)" type="checkbox" id="agree">&nbsp; <label for="" id="agreeText" style="cursor: pointer;"> I have read,</nobr> <strong>understood</strong>, and <strong>accepted</strong> the
                <a href="/policy" target="_blank">Privacy Policy</a> and <a href="/terms" target="_blank">Terms & Conditions.</a></label>
                <br>
            </div>
            <button type="submit" id="btn" class="btn my-3" style="background-color: #AA0F0A; color: white;" disabled>SUBMIT</button>
        </div>
    </form>


</div>
<div class="modal fade" id="otp_modal" tabindex="-1" aria-labelledby="otp_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">OTP FOR VERIFICATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container height-100 d-flex justify-content-center align-items-center">
                <div class="position-relative">
                    <div class="card p-2 text-center">
                        <h6>Please enter the one time password <br> to verify your account</h6>
                        <div>
                            <span>A code has been sent to</span><br>
                            <small id="num_show"></small>
                        </div>
                        <div class="col-md-12 row">
                            <div class="form-group col-md-12">
                                <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" style="text-transform: uppercase;" class=" col-sm-12 d-inline-flex p-2 m-2 text-center form-control rounded" type="number" id="otp_in" name="otp_in" maxlength="6" required />
                                <div class="invalid-feedback col-sm-12">
                                    INVALID OTP.
                                </div>
                            </div>
                        </div>
                        <div class="mt-4"> <button onclick="checkOTP()" type="submit" class="btn px-4 validate" style="background-color:#AA0F0A ; color:white">Validate</button> </div>
                    </div>
                    <div class="card-2">
                        <div class="content d-flex justify-content-center align-items-center">
                            <span>Didn't get the code</span> <button onclick="generateRandomNumber()" id="resend" style="color: blue; background-color: white;" class="text-decoration-none ms-3 border-0 ">Resend</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-body text-center my-3">
                <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                </div>
                <p class="mt-3">Please wait...</p>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/registration.js')}}"></script>
<script>
    $(document).ready(function() {
        // Listen for changes to the birthdate input
        $('#birthdate').on('change', function() {
            // Calculate the age based on the birthdate
            var birthdate = moment($(this).val(), 'MM-DD-YYYY');
            var age = moment().diff(birthdate, 'years');

            // Set the value of the age input field
            $('#age').val(age);
        });
    });
</script>
<script>
    // Get the form element
    const form = document.getElementById("yourForm");

    // Listen for the submit event
    // form.addEventListener("submit", function(event) {
    //     if (!form.checkValidity()) {
    //         // If the form is not valid, show the validation errors

    //         event.preventDefault();
    //         return;
    //     }
    //     event.preventDefault(); // Prevent the form from being submitted normally

    //     // Show the modal
    //     $("#loadingModal").modal("show");

    //     // Get the form data
    //     const formData = new FormData(form);

    //     // Make the AJAX request
    //     // $.ajax({
    //     //     type: "POST",
    //     //     url: form.action,
    //     //     data: formData,
    //     //     processData: false,
    //     //     contentType: false,
    //     //     success: function(response) {

    //     //         if (response.message == 'error') {
    //     //             $("#loadingModal").modal("hide");
    //     //             Swal.fire({
    //     //                 title: "<h4>ACCOUNT CREATION FAILED</h4>",
    //     //                 icon: "error",
    //     //                 text: 'Sorry, this email is already registered. Please try logging in or use a different email to create a new account.',
    //     //                 showCloseButton: false,
    //     //                 showCancelButton: false,
    //     //                 confirmButtonColor: "#AA0F0A",
    //     //             }).then((result) => {
    //     //                 if (result.value) {
    //     //                     // Clear the email input
    //     //                     $('#email').val('');
    //     //                     $('#password').val('');
    //     //                     $('#confirm_password').val('');
    //     //                     // Focus back on the email input
    //     //                     $('#email').focus();
    //     //                     //window.location.href = "/registration";
    //     //                 }
    //     //             });
    //     //         } else {
    //     //             // Hide the modal
    //     //             $("#loadingModal").modal("hide");
    //     //             Swal.fire({
    //     //                 title: "<h4>ACCOUNT SUCCESSFULLY CREATED</h4>",
    //     //                 icon: "success",
    //     //                 text: 'You have successfully created your profile account. Please check your email to verify your account.',
    //     //                 showCloseButton: false,
    //     //                 showCancelButton: false,
    //     //                 confirmButtonColor: "#AA0F0A",
    //     //             }).then((result) => {
    //     //                 if (result.value) {
    //     //                     window.location.href = "/login";
    //     //                 }
    //     //             });
    //     //         }

    //     //     },
    //     //     error: function(error) {
    //     //         // Hide the modal
    //     //         $("#loadingModal").modal("hide");

    //     //         // Handle the error (e.g. show an error message)
    //     //     },
    //     // });
    // });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
    $(document).ready(function() {
        // Initialize the datepicker with options
        $('input[name="birthdate"]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "opens": "center",
            "maxDate": moment().subtract(18, 'years') // Set the minimum date to 18 years ago
        }, function(start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        });
    });
</script>
@include('footer')