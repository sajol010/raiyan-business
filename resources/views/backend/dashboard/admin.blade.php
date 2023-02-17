@extends('backend.layouts.app')

@section('title', 'Admin Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('assets/assets/backend/library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/assets/backend/library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Card 1</h4>
                            </div>
                            <div class="card-body">
                                00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-chart-simple"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Card 2</h4>
                            </div>
                            <div class="card-body">
                                00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Card 3</h4>
                            </div>
                            <div class="card-body">
                                00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Card 4</h4>
                            </div>
                            <div class="card-body">
                                00
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Table 1</h4>
                            <button class="btn btn-primary">View All</button>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Table 2</h4>
                            <button class="btn btn-primary">View All</button>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admins</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-2">
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-5.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                                        <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i
                                                class="fas fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-4.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                                        <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i
                                                class="fas fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-1.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                                        <div class="avatar-badge" title="Author" data-toggle="tooltip"><i
                                                class="fas fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-2.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Ryan">
                                        <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i
                                                class="fas fa-user"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-2">
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-5.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                                        <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i
                                                class="fas fa-user-tie"></i></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-4.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                                        <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i
                                                class="fas fa-user-tie"></i></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-1.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                                        <div class="avatar-badge" title="Author" data-toggle="tooltip"><i
                                                class="fas fa-user-tie"></i></div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                    <div class="avatar-item mb-0">
                                        <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-2.png') }}"
                                            class="img-fluid" data-toggle="tooltip" title="Ryan">
                                        <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i
                                                class="fas fa-user-tie"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('assets/assets/backend/library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/assets/backend/library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/assets/backend/library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/backend/library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/assets/backend/library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/assets/backend/library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/assets/backend/js/page/index-0.js') }}"></script>
@endpush
