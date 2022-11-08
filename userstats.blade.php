@extends('layout')

@section('content')
    <div class="container-fluid masthead">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb my-auto">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">User Statistics</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- STATISTIC-->
        <section class="statistic">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="shadow statistic__item rounded">
                                <h2 class="number">10,368</h2>
                                <span class="desc">Applicants online</span>
                                <div class="icon">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="shadow statistic__item rounded">
                                <h2 class="number">388,688</h2>
                                <span class="desc">Total Approved Applications</span>
                                <div class="icon">
                                    <i class="fa-regular fa-folder-open"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="shadow statistic__item rounded">
                                <h2 class="number">1,086</h2>
                                <span class="desc">Applications approved this week</span>
                                <div class="icon">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="shadow shadow statistic__item rounded rounded">
                                <h2 class="number">1,060,386</h2>
                                <span class="desc">Total Applications</span>
                                <div class="icon">
                                    <i class="fa-solid fa-folder-minus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <section>
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8">

                            <!-- RECENT REPORT 2-->
                            <div class="recent-report2 h-100">
                                <h3 class="title-3">
                                    <i class="fa-solid fa-calendar"></i>
                                    recent reports
                                </h3>
                                <div class="chart-info">
                                    <div class="chart-info__left">
                                        <div class="chart-note">
                                            <span class="dot dot--blue"></span>
                                            <span>Jobs Available</span>
                                        </div>
                                        <div class="chart-note">
                                            <span class="dot dot--green"></span>
                                            <span>Jobs Allocated</span>
                                        </div>
                                    </div>
                                    <div class="chart-info-right">
                                        <div class="rs-select2--dark rs-select2--md m-r-10">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Job Properties</option>
                                                <option value="">Jobs Available</option>
                                                <option value="">Jobs Allocated</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">Sort By </option>
                                                <option value="">By Year</option>
                                                <option value="">By Month</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-report__chart">
                                    <canvas id="recent-rep2-chart"></canvas>
                                </div>
                            </div>
                            <!-- END RECENT REPORT 2             -->
                        </div>

                        <div class="col-xl-4">
                            <!-- Job Report According to Field of Expertise -->
                            <div class="task-progress h-100">
                                <h3 class="title-3">
                                    <i class="fa-solid fa-user-doctor"></i>
                                    Career Field Report
                                </h3>
                                <div class="au-skill-container">
                                    <div class="au-progress">
                                        <span class="au-progress__title">Receptionists</span>
                                        <div class="au-progress__bar">
                                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                                                <span class="au-progress__value js-value"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-progress">
                                        <span class="au-progress__title">Barbers</span>
                                        <div class="au-progress__bar">
                                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                                <span class="au-progress__value js-value"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-progress">
                                        <span class="au-progress__title">Cleaners</span>
                                        <div class="au-progress__bar">
                                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="73">
                                                <span class="au-progress__value js-value"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="au-progress">
                                        <span class="au-progress__title">Masseuse</span>
                                        <div class="au-progress__bar">
                                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="88">
                                                <span class="au-progress__value js-value"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END JOB APPLICATION REPORT-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section__content section__content--p15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- USER DATA-->
                            <div class="user-data my-auto h-100">
                                <h3 class="title-3 m-b-30">
                                    <i class="fa-solid fa-file"></i>
                                    User data
                                </h3>
                                <div class="filters m-b-45">
                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Career Fields</option>
                                            <option value="">Masseuse</option>
                                            <option value="">Cleaners</option>
                                            <option value="">Receptionists</option>
                                            <option value="">Barbers</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                        <select class="js-select2 au-select-dark" name="time">
                                            <option selected="selected">Sort By</option>
                                            <option value="">By Month</option>
                                            <option value="">By Day</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="table-responsive table-data">
                                    <table class="table table-hover table-secondary">
                                        <thead>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">name</td>
                                                <td class="table-secondary">CV</td>
                                                <td class="table-secondary">Field</td>
                                                <td class="table-secondary">Education Level</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Hannah</h6>
                                                        <span>
                                                            <a href="#">hannah@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV file</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Saeed</h6>
                                                        <span>
                                                            <a href="#">saeed@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV file</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Joyce</h6>
                                                        <span>
                                                            <a href="#">joyce@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV file</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Bryan</h6>
                                                        <span>
                                                            <a href="#">bryan@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV file</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Erastus</h6>
                                                        <span>
                                                            <a href="#">erastus@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV file</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Mumin</h6>
                                                        <span>
                                                            <a href="#">mumin@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV File</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Jennifer</h6>
                                                        <span>
                                                            <a href="#">jen@gmail.com</a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <span class="role user">CV file</span>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="rs-select2--trans rs-select2--sm">
                                                        <select class="js-select2" name="property">
                                                            <option selected="selected">Barber</option>
                                                            <option value="">Masseuse</option>
                                                            <option value="">Receptionist</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="table-secondary">
                                                    <div class="table-data__info">
                                                        <h6>Degree</h6>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="user-data__footer">
                                    <button class="au-btn au-btn-load">load more</button>
                                </div>
                            </div>
                            <!-- END USER DATA-->
                        </div>

                        <div class="col-xl-4">
                            <!-- MAP DATA-->
                            <div class="map-data my-auto h-100">
                                <h3 class="title-3 m-b-30">
                                    <i class="fa-solid fa-map"></i>
                                    map data
                                </h3>
                                <div class="filters m-b-45">
                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Worldwide</option>
                                            <option value="">Products</option>
                                            <option value="">Services</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                        <select class="js-select2 au-select-dark" name="time">
                                            <option selected="selected">All Time</option>
                                            <option value="">By Month</option>
                                            <option value="">By Day</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="table-responsive table-data">
                                    <table class="table table-hover table-secondary">
                                        <tbody>
                                            <tr table-secondary>
                                                <td table-secondary>Nairobi</td>
                                                <td table-secondary>119,366.96</td>
                                            </tr>
                                            <tr table-secondary>
                                                <td table-secondary>Nakuru</td>
                                                <td table-secondary>70,261.65</td>
                                            </tr>
                                            <tr table-secondary>
                                                <td table-secondary>Kisumu</td>
                                                <td table-secondary>46,399.22</td>
                                            </tr>
                                            <tr table-secondary>
                                                <td table-secondary>Nyeri</td>
                                                <td table-secondary>20,366.96</td>
                                            </tr>
                                            <tr table-secondary>
                                                <td table-secondary>Kiambu</td>
                                                <td table-secondary>10,366.96</td>
                                            </tr>
                                            <tr table-secondary>
                                                <td table-secondary>Mombasa</td>
                                                <td table-secondary>5,366.96</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="table-wrap">
                                    
                                </div> -->
                            </div>
                            <!-- END MAP DATA-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection