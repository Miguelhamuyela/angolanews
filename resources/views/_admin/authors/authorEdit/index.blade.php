@extends('_admin.layout.main')
@section('title', 'Ngola News - Editar Autor')
@section('content-authorEdit')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Author</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Edit</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <div class="dropdown filter-dropdown">
                            <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-filter me-2"></i>
                                <span>Filter</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Role"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Role">Role</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Team"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Team">Team</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Email"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Member"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer" for="Member">Member</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Recommendation"
                                            checked="checked">
                                        <label class="custom-control-label c-pointer"
                                            for="Recommendation">Recommendation</label>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                {{-- <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-plus me-3"></i>
                                    <span>Create New</span>
                                </a> --}}
                                {{-- <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-filter me-3"></i>
                                    <span>Manage Filter</span>
                                </a> --}}
                            </div>
                        </div>
                        <a href="{{ route('admin.author.index')}}" class="btn btn-danger">
                           <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>
                        </a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <!-- __________________________________________________
                                             Criando Formulario author Create
                                 _______________________________________________________________-->
                <!-- [ Main Content ] start -->
                <div class="main-content">
                    <form id="authorForm" action="{{ route('admin.author.update', ['author' => $author]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- @if ($errors->any())
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Erro de Validação',
                                        html: `@foreach ($errors->all() as $error)
                                                    <div>{{ $error }}</div>
                                                @endforeach`,
                                        confirmButtonText: 'OK',
                                        showConfirmButton: true,
                                        allowOutsideClick: false,
                                        allowEscapeKey: false
                                    });
                                });
                            </script>
                        @endif

                        @if (session('alert'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: '{{ session('alert')['type'] }}',
                                        title: '{{ session('alert')['type'] == 'success' ? 'Sucesso!' : 'Erro!' }}',
                                        text: '{{ session('alert')['message'] }}',
                                        confirmButtonText: 'OK',
                                        timer: {{ session('alert')['type'] == 'success' ? '3000' : 'null' }},
                                        timerProgressBar: {{ session('alert')['type'] == 'success' ? 'true' : 'false' }}
                                    });
                                });
                            </script>
                        @endif --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card stretch stretch-full">
                                    {{-- <div class="card-body lead-status">
                                    <div class="mb-5 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">author Details :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line">Typically
                                                refers to adding a new potential customer or sales prospect</span>
                                        </h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Category</label>
                                            <select class="form-select form-control" name="category_id"
                                                data-select2-selector="status">
                                                    <option value="" data-bg="bg-primary">
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Status:</label>
                                            <select class="form-select form-control" name="status"
                                                data-select2-selector="visibility">
                                                <option value="Published">Published</option>
                                                <option value="Draft">Draft</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">author date</label>
                                            <input type="date" class="form-control" name="authorDate" id="date">
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <label class="form-label">Last modified date</label>
                                            <input type="date" class="form-control" name="lastModifyedDate" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                id="date" disabled>
                                        </div>
                                    </div>
                                </div> --}}
                                    <hr class="mt-0">
                                    <div class="card-body general-info">
                                        <div class="mb-5 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">author Info :</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">General
                                                    information for your author</span>
                                            </h5>
                                            <a href="{{ route('admin.author.index') }}"
                                                class="btn btn-sm btn-light-brand">List
                                                author</a>
                                        </div>
                                        {{-- <div class="row mb-4 align-items-center">
                                        <div class="col-lg-12">
                                            <label for="fullnameInput" class="fw-semibold">Title: </label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="feather-type"></i></div>
                                                <input type="text" class="form-control" value="{{ old('title') }}" name="title"
                                                    id="fullnameInput" placeholder="Title... ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-12">
                                            <label for="fullnameInput" class="fw-semibold">Subtitle: </label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="feather-type"></i></div>
                                                <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}"
                                                    id="fullnameInput" placeholder="Title... ">
                                            </div>
                                        </div>
                                    </div> --}}

                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-12">
                                                <label for="autorInput" class="fw-semibold">Author: </label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-user"></i></div>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ old('name', $author->name ?? '') }}" id="autorInput"
                                                        placeholder="autor">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-6">
                                                <label for="fotoInput" class="fw-semibold">Foto: </label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-image"></i></div>
                                                    <input type="file" class="form-control" name="foto"
                                                        id="fotoInput" placeholder="Upload foto...">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-center rounded shadow-sm">
                                                <img src="
                                            {{ asset('img/authors/' . $author->foto) }}"
                                                    alt="{{ 'foto do ' . $author->name }}" class="img-fluid mt-2 w-50">
                                            </div>
                                        </div>
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-lg-12">
                                                <label for="biographyInput" class="fw-semibold">biography: </label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="feather-type"></i></div>
                                                    <textarea class="form-control" id="biographyInput" name="biography" cols="30" rows="5"
                                                        placeholder="biography">{{ old('biography', $author->biography ?? '') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{--  <div class="row mb-4 align-items-center">
                                        <div class="col-lg-12">
                                            <label class="fw-semibold">Country: </label>
                                            <select class="form-control" name="country" data-select2-selector="country">
                                                <option data-country="af">Afghanistan</option>
                                                <option data-country="ax">Åland Islands</option>
                                                <option data-country="al">Albania</option>
                                                <option data-country="dz">Algeria</option>
                                                <option data-country="as">American Samoa</option>
                                                <option data-country="ad">Andorra</option>
                                                <option data-country="ao">Angola</option>
                                                <option data-country="ai">Anguilla</option>
                                                <option data-country="aq">Antarctica</option>
                                                <option data-country="ag">Antigua & Barbuda</option>
                                                <option data-country="ar">Argentina</option>
                                                <option data-country="am">Armenia</option>
                                                <option data-country="aw">Aruba</option>
                                                <option data-country="au">Australia</option>
                                                <option data-country="at">Austria</option>
                                                <option data-country="az">Azerbaijan</option>
                                                <option data-country="bs">Bahamas</option>
                                                <option data-country="bh">Bahrain</option>
                                                <option data-country="bd">Bangladesh</option>
                                                <option data-country="bb">Barbados</option>
                                                <option data-country="by">Belarus</option>
                                                <option data-country="be">Belgium</option>
                                                <option data-country="bz">Belize</option>
                                                <option data-country="bj">Benin</option>
                                                <option data-country="bm">Bermuda</option>
                                                <option data-country="bt">Bhutan</option>
                                                <option data-country="bo">Bolivia</option>
                                                <option data-country="bq">Caribbean Netherlands</option>
                                                <option data-country="ba">Bosnia & Herzegovina</option>
                                                <option data-country="bw">Botswana</option>
                                                <option data-country="bv">Bouvet Island</option>
                                                <option data-country="br">Brazil</option>
                                                <option data-country="io">British Indian Ocean Territory</option>
                                                <option data-country="bn">Brunei</option>
                                                <option data-country="bg">Bulgaria</option>
                                                <option data-country="bf">Burkina Faso</option>
                                                <option data-country="bi">Burundi</option>
                                                <option data-country="kh">Cambodia</option>
                                                <option data-country="cm">Cameroon</option>
                                                <option data-country="ca">Canada</option>
                                                <option data-country="cv">Cape Verde</option>
                                                <option data-country="ky">Cayman Islands</option>
                                                <option data-country="cf">Central African Republic</option>
                                                <option data-country="td">Chad</option>
                                                <option data-country="cl">Chile</option>
                                                <option data-country="cn">China</option>
                                                <option data-country="cx">Christmas Island</option>
                                                <option data-country="cc">Cocos (Keeling) Islands</option>
                                                <option data-country="co">Colombia</option>
                                                <option data-country="km">Comoros</option>
                                                <option data-country="cg">Congo - Brazzaville</option>
                                                <option data-country="cd">Congo - Kinshasa</option>
                                                <option data-country="ck">Cook Islands</option>
                                                <option data-country="cr">Costa Rica</option>
                                                <option data-country="ci">Côte d'Ivoire</option>
                                                <option data-country="hr">Croatia</option>
                                                <option data-country="cu">Cuba</option>
                                                <option data-country="cu">Curaçao</option>
                                                <option data-country="cy">Cyprus</option>
                                                <option data-country="cz">Czechia</option>
                                                <option data-country="dk">Denmark</option>
                                                <option data-country="dj">Djibouti</option>
                                                <option data-country="dm">Dominica</option>
                                                <option data-country="do">Dominican Republic</option>
                                                <option data-country="ec">Ecuador</option>
                                                <option data-country="eg">Egypt</option>
                                                <option data-country="sv">El Salvador</option>
                                                <option data-country="gq">Equatorial Guinea</option>
                                                <option data-country="er">Eritrea</option>
                                                <option data-country="ee">Estonia</option>
                                                <option data-country="et">Ethiopia</option>
                                                <option data-country="fk">Falkland Islands (Islas Malvinas)</option>
                                                <option data-country="fo">Faroe Islands</option>
                                                <option data-country="fj">Fiji</option>
                                                <option data-country="fi">Finland</option>
                                                <option data-country="fr">France</option>
                                                <option data-country="gf">French Guiana</option>
                                                <option data-country="pf">French Polynesia</option>
                                                <option data-country="tf">French Southern Territories</option>
                                                <option data-country="ga">Gabon</option>
                                                <option data-country="gm">Gambia</option>
                                                <option data-country="ge">Georgia</option>
                                                <option data-country="de">Germany</option>
                                                <option data-country="gh">Ghana</option>
                                                <option data-country="gi">Gibraltar</option>
                                                <option data-country="gr">Greece</option>
                                                <option data-country="gl">Greenland</option>
                                                <option data-country="gd">Grenada</option>
                                                <option data-country="gp">Guadeloupe</option>
                                                <option data-country="gu">Guam</option>
                                                <option data-country="gt">Guatemala</option>
                                                <option data-country="gg">Guernsey</option>
                                                <option data-country="gn">Guinea</option>
                                                <option data-country="gw">Guinea-Bissau</option>
                                                <option data-country="gy">Guyana</option>
                                                <option data-country="ht">Haiti</option>
                                                <option data-country="hm">Heard & McDonald Islands</option>
                                                <option data-country="va">Vatican City</option>
                                                <option data-country="hn">Honduras</option>
                                                <option data-country="hk">Hong Kong</option>
                                                <option data-country="hu">Hungary</option>
                                                <option data-country="is">Iceland</option>
                                                <option data-country="in">India</option>
                                                <option data-country="id">Indonesia</option>
                                                <option data-country="ir">Iran</option>
                                                <option data-country="iq">Iraq</option>
                                                <option data-country="ie">Ireland</option>
                                                <option data-country="im">Isle of Man</option>
                                                <option data-country="il">Israel</option>
                                                <option data-country="it">Italy</option>
                                                <option data-country="jm">Jamaica</option>
                                                <option data-country="jp">Japan</option>
                                                <option data-country="je">Jersey</option>
                                                <option data-country="jo">Jordan</option>
                                                <option data-country="kz">Kazakhstan</option>
                                                <option data-country="ke">Kenya</option>
                                                <option data-country="ki">Kiribati</option>
                                                <option data-country="kp">North Korea</option>
                                                <option data-country="kr">South Korea</option>
                                                <option data-country="xk">Kosovo</option>
                                                <option data-country="kw">Kuwait</option>
                                                <option data-country="kg">Kyrgyzstan</option>
                                                <option data-country="la">Laos</option>
                                                <option data-country="lv">Latvia</option>
                                                <option data-country="lb">Lebanon</option>
                                                <option data-country="ls">Lesotho</option>
                                                <option data-country="lr">Liberia</option>
                                                <option data-country="ly">Libya</option>
                                                <option data-country="li">Liechtenstein</option>
                                                <option data-country="lt">Lithuania</option>
                                                <option data-country="lu">Luxembourg</option>
                                                <option data-country="mo">Macao</option>
                                                <option data-country="mk">North Macedonia</option>
                                                <option data-country="mg">Madagascar</option>
                                                <option data-country="mw">Malawi</option>
                                                <option data-country="my">Malaysia</option>
                                                <option data-country="mv">Maldives</option>
                                                <option data-country="ml">Mali</option>
                                                <option data-country="mt">Malta</option>
                                                <option data-country="mh">Marshall Islands</option>
                                                <option data-country="mq">Martinique</option>
                                                <option data-country="mr">Mauritania</option>
                                                <option data-country="mu">Mauritius</option>
                                                <option data-country="yt">Mayotte</option>
                                                <option data-country="mx">Mexico</option>
                                                <option data-country="fm">Micronesia</option>
                                                <option data-country="md">Moldova</option>
                                                <option data-country="mc">Monaco</option>
                                                <option data-country="mn">Mongolia</option>
                                                <option data-country="me">Montenegro</option>
                                                <option data-country="ms">Montserrat</option>
                                                <option data-country="ma">Morocco</option>
                                                <option data-country="mz">Mozambique</option>
                                                <option data-country="mm">Myanmar (Burma)</option>
                                                <option data-country="na">Namibia</option>
                                                <option data-country="nr">Nauru</option>
                                                <option data-country="np">Nepal</option>
                                                <option data-country="nl">Netherlands</option>
                                                <option data-country="cu">Curaçao</option>
                                                <option data-country="nc">New Caledonia</option>
                                                <option data-country="nz">New Zealand</option>
                                                <option data-country="ni">Nicaragua</option>
                                                <option data-country="ne">Niger</option>
                                                <option data-country="ng">Nigeria</option>
                                                <option data-country="nu">Niue</option>
                                                <option data-country="nf">Norfolk Island</option>
                                                <option data-country="mp">Northern Mariana Islands</option>
                                                <option data-country="no">Norway</option>
                                                <option data-country="om">Oman</option>
                                                <option data-country="pk">Pakistan</option>
                                                <option data-country="pw">Palau</option>
                                                <option data-country="ps">Palestine</option>
                                                <option data-country="pa">Panama</option>
                                                <option data-country="pg">Papua New Guinea</option>
                                                <option data-country="py">Paraguay</option>
                                                <option data-country="pe">Peru</option>
                                                <option data-country="ph">Philippines</option>
                                                <option data-country="pn">Pitcairn Islands</option>
                                                <option data-country="pl">Poland</option>
                                                <option data-country="pt">Portugal</option>
                                                <option data-country="pr">Puerto Rico</option>
                                                <option data-country="qa">Qatar</option>
                                                <option data-country="re">Réunion</option>
                                                <option data-country="ro">Romania</option>
                                                <option data-country="ru">Russia</option>
                                                <option data-country="rw">Rwanda</option>
                                                <option data-country="bl">St. Barthélemy</option>
                                                <option data-country="sh">St. Helena</option>
                                                <option data-country="kn">St. Kitts & Nevis</option>
                                                <option data-country="lc">St. Lucia</option>
                                                <option data-country="mf">St. Martin</option>
                                                <option data-country="pm">St. Pierre & Miquelon</option>
                                                <option data-country="vc">St. Vincent & Grenadines</option>
                                                <option data-country="ws">Samoa</option>
                                                <option data-country="sm">San Marino</option>
                                                <option data-country="st">São Tomé & Príncipe</option>
                                                <option data-country="sa">Saudi Arabia</option>
                                                <option data-country="sn">Senegal</option>
                                                <option data-country="rs">Serbia</option>
                                                <option data-country="sr">Serbia</option>
                                                <option data-country="sc">Seychelles</option>
                                                <option data-country="sl">Sierra Leone</option>
                                                <option data-country="sg">Singapore</option>
                                                <option data-country="sx">Sint Maarten</option>
                                                <option data-country="sk">Slovakia</option>
                                                <option data-country="si">Slovenia</option>
                                                <option data-country="sb">Solomon Islands</option>
                                                <option data-country="so">Somalia</option>
                                                <option data-country="za">South Africa</option>
                                                <option data-country="gs">South Georgia & South Sandwich Islands
                                                </option>
                                                <option data-country="ss">South Sudan</option>
                                                <option data-country="es">Spain</option>
                                                <option data-country="lk">Sri Lanka</option>
                                                <option data-country="sd">Sudan</option>
                                                <option data-country="sr">Suriname</option>
                                                <option data-country="sj">Svalbard & Jan Mayen</option>
                                                <option data-country="sz">Eswatini</option>
                                                <option data-country="se">Sweden</option>
                                                <option data-country="ch">Switzerland</option>
                                                <option data-country="sy">Syria</option>
                                                <option data-country="tw">Taiwan</option>
                                                <option data-country="tj">Tajikistan</option>
                                                <option data-country="tz">Tanzania</option>
                                                <option data-country="th">Thailand</option>
                                                <option data-country="tl">Timor-Leste</option>
                                                <option data-country="tg">Togo</option>
                                                <option data-country="tk">Tokelau</option>
                                                <option data-country="to">Tonga</option>
                                                <option data-country="tt">Trinidad & Tobago</option>
                                                <option data-country="tn">Tunisia</option>
                                                <option data-country="tr">Turkey</option>
                                                <option data-country="tm">Turkmenistan</option>
                                                <option data-country="tc">Turks & Caicos Islands</option>
                                                <option data-country="tv">Tuvalu</option>
                                                <option data-country="ug">Uganda</option>
                                                <option data-country="ua">Ukraine</option>
                                                <option data-country="ae">United Arab Emirates</option>
                                                <option data-country="gb">United Kingdom</option>
                                                <option data-country="us" selected>United States</option>
                                                <option data-country="um">U.S. Outlying Islands</option>
                                                <option data-country="uy">Uruguay</option>
                                                <option data-country="uz">Uzbekistan</option>
                                                <option data-country="vu">Vanuatu</option>
                                                <option data-country="ve">Venezuela</option>
                                                <option data-country="vn">Vietnam</option>
                                                <option data-country="vg">British Virgin Islands</option>
                                                <option data-country="vi">U.S. Virgin Islands</option>
                                                <option data-country="wf">Wallis & Futuna</option>
                                                <option data-country="eh">Western Sahara</option>
                                                <option data-country="ye">Yemen</option>
                                                <option data-country="zm">Zambia</option>
                                                <option data-country="zw">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-12">
                                            <label class="fw-semibold">State: </label>
                                            <select class="form-control" name="state" data-select2-selector="state">
                                                <option data-state="al">Alabama</option>
                                                <option data-state="ak" selected>Alaska</option>
                                                <option data-state="as">American Samoa</option>
                                                <option data-state="az">Arizona</option>
                                                <option data-state="ar">Arkansas</option>
                                                <option data-state="um">Baker Island</option>
                                                <option data-state="ca">California</option>
                                                <option data-state="co">Colorado</option>
                                                <option data-state="ct">Connecticut</option>
                                                <option data-state="de">Delaware</option>
                                                <option data-state="dc">District of Columbia</option>
                                                <option data-state="fl">Florida</option>
                                                <option data-state="ga">Georgia</option>
                                                <option data-state="gu">Guam</option>
                                                <option data-state="hi">Hawaii</option>
                                                <option data-state="um">Howland Island</option>
                                                <option data-state="id">Idaho</option>
                                                <option data-state="il">Illinois</option>
                                                <option data-state="in">Indiana</option>
                                                <option data-state="ia">Iowa</option>
                                                <option data-state="um">Jarvis Island</option>
                                                <option data-state="um">Johnston Atoll</option>
                                                <option data-state="ks">Kansas</option>
                                                <option data-state="ky">Kentucky</option>
                                                <option data-state="um">Kingman Reef</option>
                                                <option data-state="la">Louisiana</option>
                                                <option data-state="me">Maine</option>
                                                <option data-state="md">Maryland</option>
                                                <option data-state="ma">Massachusetts</option>
                                                <option data-state="mi">Michigan</option>
                                                <option data-state="um">Midway Atoll</option>
                                                <option data-state="mn">Minnesota</option>
                                                <option data-state="ms">Mississippi</option>
                                                <option data-state="mo">Missouri</option>
                                                <option data-state="mt">Montana</option>
                                                <option data-state="um">Navassa Island</option>
                                                <option data-state="ne">Nebraska</option>
                                                <option data-state="nv">Nevada</option>
                                                <option data-state="nh">New Hampshire</option>
                                                <option data-state="nj">New Jersey</option>
                                                <option data-state="nm">New Mexico</option>
                                                <option data-state="ny">New York</option>
                                                <option data-state="nc">North Carolina</option>
                                                <option data-state="nd">North Dakota</option>
                                                <option data-state="mp">Northern Mariana Islands</option>
                                                <option data-state="oh">Ohio</option>
                                                <option data-state="ok">Oklahoma</option>
                                                <option data-state="or">Oregon</option>
                                                <option data-state="um">Palmyra Atoll</option>
                                                <option data-state="pa">Pennsylvania</option>
                                                <option data-state="pr">Puerto Rico</option>
                                                <option data-state="ri">Rhode Island</option>
                                                <option data-state="sc">South Carolina</option>
                                                <option data-state="sd">South Dakota</option>
                                                <option data-state="tn">Tennessee</option>
                                                <option data-state="tx">Texas</option>
                                                <option data-state="um">United States Minor Outlying Islands</option>
                                                <option data-state="vi">United States Virgin Islands</option>
                                                <option data-state="ut">Utah</option>
                                                <option data-state="vt">Vermont</option>
                                                <option data-state="va">Virginia</option>
                                                <option data-state="um">Wake Island</option>
                                                <option data-state="wa">Washington</option>
                                                <option data-state="wv">West Virginia</option>
                                                <option data-state="wi">Wisconsin</option>
                                                <option data-state="wy">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-12">
                                            <label class="fw-semibold">City: </label>
                                            <select class="form-control" name="city" data-select2-selector="city">
                                                <option data-city="bg-primary">Akutan</option>
                                                <option data-city="bg-secondary">Aleutians East Borough</option>
                                                <option data-city="bg-success">Aleutians West Census Area</option>
                                                <option data-city="bg-warning">Anchor Point</option>
                                                <option data-city="bg-info">Anchorage</option>
                                                <option data-city="bg-danger">Anchorage Municipality</option>
                                                <option data-city="bg-dark">Badger</option>
                                                <option data-city="bg-black">Barrow</option>
                                                <option data-city="bg-muted">Bear Creek</option>
                                                <option data-city="bg-blue">Bethel</option>
                                                <option data-city="bg-teal">Bethel Census Area</option>
                                                <option data-city="bg-cyan">Big Lake</option>
                                                <option data-city="bg-indigo">Bristol Bay Borough</option>
                                                <option data-city="bg-green">Butte</option>
                                                <option data-city="bg-red">Chevak</option>
                                                <option data-city="bg-orange">City and Borough of Wrangell</option>
                                                <option data-city="bg-darken">Cohoe</option>
                                                <option data-city="bg-primary">College</option>
                                                <option data-city="bg-warning">Cordova</option>
                                                <option data-city="bg-danger">Craig</option>
                                                <option data-city="bg-red">Deltana</option>
                                                <option data-city="bg-green">Denali Borough</option>
                                                <option data-city="bg-orange">Diamond Ridge</option>
                                                <option data-city="bg-muted">Dillingham</option>
                                                <option data-city="bg-teal">Dillingham Census Area</option>
                                                <option data-city="bg-info">Dutch Harbor</option>
                                                <option data-city="bg-indigo">Eagle River</option>
                                                <option data-city="bg-cyan">Eielson Air Force Base</option>
                                                <option data-city="bg-orange">Elmendorf Air Force Base</option>
                                                <option data-city="bg-black">Ester</option>
                                                <option data-city="bg-warning">Fairbanks</option>
                                                <option data-city="bg-green">Fairbanks North Star Borough</option>
                                                <option data-city="bg-indigo">Farm Loop</option>
                                                <option data-city="bg-danger">Farmers Loop</option>
                                                <option data-city="bg-success">Fishhook</option>
                                                <option data-city="bg-teal">Fritz Creek</option>
                                                <option data-city="bg-cyan">Gateway</option>
                                                <option data-city="bg-black">Girdwood</option>
                                                <option data-city="bg-warning">Haines</option>
                                                <option data-city="bg-green">Haines Borough</option>
                                                <option data-city="bg-indigo">Healy</option>
                                                <option data-city="bg-danger">Homer</option>
                                                <option data-city="bg-success">Hoonah-Angoon Census Area</option>
                                                <option data-city="bg-teal">Hooper Bay</option>
                                                <option data-city="bg-cyan">Houston</option>
                                                <option data-city="bg-warning">Juneau</option>
                                                <option data-city="bg-black">Kalifornsky</option>
                                                <option data-city="bg-green">Kenai</option>
                                                <option data-city="bg-danger">Kenai Peninsula Borough</option>
                                                <option data-city="bg-success">Ketchikan</option>
                                                <option data-city="bg-indigo">Ketchikan Gateway Borough</option>
                                                <option data-city="bg-teal" selected>King Cove</option>
                                                <option data-city="bg-black">Knik-Fairview</option>
                                                <option data-city="bg-green">Kodiak</option>
                                                <option data-city="bg-cyan">Kodiak Island Borough</option>
                                                <option data-city="bg-warning">Kodiak Station</option>
                                                <option data-city="bg-darken">Kotzebue</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-danger"> Salvar
                                            <i class="feather-save ms-2"></i>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
                <!-- [ Main Content ] end -->
            </div>

            <!-- [ Main Content ] end -->
        </div>
    @endsection
