<?php $base_url = 'http://localhost/secore_lite/'; ?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Dashboard | Secore</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            {{-- @livewire('admin.sidebar') --}}
            @include('layouts.sidebar')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Topbar-->
                {{-- @livewire('admin.topbar') --}}
                @include('layouts.topbar')
                <!--end::Topbar-->

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-xl-12 text-right">
                            <a href="{{ route('dashboard') }}" class="btn btn-danger"> Back </a>
                        </div>
                    </div>

                    <form action="{{ route('updatePost',$editPost->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-sm-12 col-12 m-auto">

                                @if (Session::has('updated'))
                                    <div class="alert alert-success alert-dismissible">
                                        <h5>{{ Session::get('updated') }}</h5>
                                    </div>
                                @endif

                                <div class="card shadow">

                                    <div class="card-header">
                                        <h4 class="card-title"> Update Post </h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label> Title </label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter the Title" value="{{ $editPost->title }}">
                                            @if ($errors->has('title'))
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label> Description </label>
                                            <textarea class="form-control" id="description"
                                                placeholder="Enter the Description" name="description" value="">{{ $editPost->description }}</textarea>
                                            @if ($errors->has('description'))
                                                <span
                                                    class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Update Post </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <script>
                    ClassicEditor
                        .create(document.querySelector('#description'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>


            </div>
            <!--end::Page-->
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <!--end::Main-->
    <script>
        var hostUrl = "{{ url('assets/') }}";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ url('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ url('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ url('assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ url('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
<!--end::Body-->

</html>
