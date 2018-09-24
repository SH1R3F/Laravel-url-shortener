@extends('layouts.admin')
@section('content')
    @include('admin.navbar')
    @include('admin.sidebar')
    <!-- Dashboard Content -->
    <div class="dashboard">
        <div class="container-fluid">
            <section>
                <div class="section-header">
                    <h4 class="title">Dashboard</h4>
                    <i class="fa fa-home"></i>
                    <span>
                        Listing all website statistics.
                    </span>
                </div>

                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 one-third">
                            <div class="line">
                                <div class="row">
                                    <div class="col col-sm-6 col-lg-8 desc">
                                        <a>new members</a>
                                        <span>new registered members this week</span>
                                    </div>
                                    <div class="col col-sm-6 col-lg-4 text-right">
                                        <span>
                                            17500
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="row">
                                    <div class="col desc">
                                        <a>Links</a>
                                        <span>new links added this week</span>
                                    </div>
                                    <div class="col text-right">
                                        <span>
                                            1200
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="line">
                                <div class="row">
                                    <div class="col desc">
                                        <a>Visitors</a>
                                        <span>new visitors this week</span>
                                    </div>
                                    <div class="col text-right">
                                        <span>
                                            15000
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 one-third">
                            <div class="nat-stat">
                                <a>Users nationalities</a>
                                <span>Simple chart about users nationalities</span>
                                <main class="chart">
                                    <div class="pieID pie"></div>
                                    <ul class="pieID legend">
                                        <li v-for="country in countries">
                                            <em v-text="country.name"></em>
                                            <span v-text="country.number"></span>
                                        </li>
                                    </ul>
                                </main>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 one-third">
                            <!-- Progress -->
                            <div class="nat-stat progress-section">
                                <a>Links created</a>
                                <span>Simple chart about Links Created</span>

                                <div class="progress-outer">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" style="width:80%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);"></div>
                                        <div class="progress-value">80%</div>
                                    </div>
                                </div>
                                <div class="progress-outer">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" style="width:60%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);"></div>
                                        <div class="progress-value">60%</div>
                                    </div>
                                </div>
                                <div class="progress-outer">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width:40%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
                                        <div class="progress-value">40%</div>
                                    </div>
                                </div>
                            </div><!-- end progress-->

                        </div>
                    </div>
                </div><!-- Section Content -->

                {{-- <!-- Social Media Analysis -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 one-third">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 one-third">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 one-third">
                        </div>
                    </div>
                </div><!-- Social Media Analysis --> --}}

            </section>

            <section class='latest'>
                <div class="row">

                    <!-- Latest Users -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 offset-xl-2">
                        <div class="part">
                            <div class="row part-title">
                                <a class='col'>Latest users</a>
                                <button class='btn btn-sm text-right'>all</button>
                            </div>
                            <div class="line" v-for="user in users">
                                <div class="row">
                                    <div class="col desc">
                                        <a v-text="user.name"></a>
                                        <span v-text="user.email"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Latest Users -->

                    <!-- Top Links -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <div class="part">
                            <div class="row part-title">
                                <a class='col'>top links</a>
                                <button class='btn btn-sm text-right'>all</button>
                            </div>
                            <div class="line" v-for="link in links">
                                <div class="row">
                                    <div class="col col-sm-6 col-lg-8 desc">
                                        <a v-text="link.short"></a>
                                        <span v-text="link.long"></span>
                                    </div>

                                    <div class="col col-sm-6 col-lg-4 text-right">
                                        <span v-text="link.visits"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Top Links -->

                </div>
            </section>

        </div>
    </div><!-- Dashboard Content -->

@endsection
