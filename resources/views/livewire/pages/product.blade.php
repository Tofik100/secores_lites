<?php $base_url = 'http://localhost/secores/public/'; ?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Add Product | Secore</title>
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
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
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
            {{-- <livewire:admin.sidebar /> --}}
            @include('layouts.sidebar')>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                {{-- <livewire:admin.topbar /> --}}
                @include('layouts.topbar')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add Product</h1>
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-200 border-start mx-4"></span>
                                <!--end::Separator-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="#" class="text-muted text-hover-primary">Go Back</a>
                                    </li>
                                    <!--end::Item-->

                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Wrapper-->
                                <!--end::Wrapper-->
                                <!--begin::Button-->
                                <a href="#" class="btn btn-sm btn-light" id="kt_toolbar_primary_button">Cancel</a>
                                &nbsp;
                                <a href="#" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Save</a>
                                <!--end::Button-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                id="kt_create_account_stepper">
                                <!--begin::Aside-->
                                <div
                                    class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
                                    <!--begin::Wrapper-->
                                    <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                                        <!--begin::Nav-->
                                        <div class="stepper-nav">
                                            <!--begin::Step 1-->
                                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">1</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">User Detail</h3>
                                                    <div class="stepper-desc fw-bold">Enter user's details</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 1-->
                                            <!--begin::Step 2-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">2</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">ADM User Detail</h3>
                                                    <div class="stepper-desc fw-bold">-</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 2-->
                                            <!--begin::Step 3-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">3</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">MDM User Detail</h3>
                                                    <div class="stepper-desc fw-bold">-</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 3-->
                                            <!--begin::Step 4-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">4</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">SIM Activation</h3>
                                                    <div class="stepper-desc fw-bold">-</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 4-->
                                            <!--begin::Step 5-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">5</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">PGP Email</h3>
                                                    <div class="stepper-desc fw-bold">-</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 5-->
                                        </div>
                                        <!--end::Nav-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--begin::Aside-->
                                <!--begin::Content-->
                                <div class="card d-flex flex-row-fluid flex-center">
                                    <!--begin::Form-->
                                    <div class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate"
                                        id="kt_create_account_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Product
                                                        Details
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="all the product details"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">You need to fill up all the
                                                        details of product
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Row-->
                                                    <div class="row">



                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Col-->
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">ECC
                                                                ID</label>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row fv-row">
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="ECC ID" name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Support ECC ID " name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <!--end::Col-->
                                                        </div>



                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                <span class="required">Screen Name</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip" title="Screen Name"></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                placeholder="" name="card_name" value=" " />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                <span class="required">Email</span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip" title="Email "></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                placeholder="" name="card_name" value="" />
                                                        </div>
                                                        <!--end::Input group-->


                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Col-->
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-bold form-label mb-2">ECC
                                                                ID</label>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row fv-row">
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="ECC ID" name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Support ECC ID " name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <!--end::Col-->
                                                        </div>

                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                <span class="required">License Key </span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Support ECC ID "></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                placeholder="" name="card_name" value="" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Col-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">Licence
                                                                Period</label>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row fv-row">
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Month(s)" name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Expiry Date " name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--begin::Input group-->

                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->

                                                        <!--end::Input group-->



                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Col-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">Subscription
                                                                Expiry</label>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row fv-row">
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Day(s)" name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                                <!--begin::Col-->
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Date " name="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <!--end::Col-->
                                                        </div>


                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                <span class="required">Reseller </span>
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip" title=" "></i>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text" class="form-control form-control-solid"
                                                                placeholder="" name="card_name" value="" />
                                                        </div>
                                                        <!--end::Input group-->


                                                        <div class="d-flex flex-column mb-7 fv-row">
                                                            <!--begin::Col-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-bold form-label mb-2">Product
                                                                Description</label>
                                                            <!--end::Label-->
                                                            <!--begin::Row-->
                                                            <div class="row fv-row">
                                                                <!--begin::Col-->
                                                                <div class="col-12">
                                                                    <textarea
                                                                        class="form-control form-control-solid"></textarea>
                                                                </div>

                                                                <!--end::Col-->
                                                                <!--begin::Col-->

                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-stack">
                                                            <!--begin::Label-->
                                                            <div class="me-5">
                                                                <label class="fs-6 fw-bold form-label">Active?</label>
                                                                <div class="fs-7 fw-bold text-muted">Check if user is
                                                                    available </div>
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" checked="checked" />
                                                                <span
                                                                    class="form-check-label fw-bold text-muted">Yes</span>
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <!--													<div class="text-center pt-15">
              <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
              <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
               <span class="indicator-label">Submit</span>
               <span class="indicator-progress">Please wait...
               <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              </button>
             </div>-->
                                                        <!--end::Actions-->



                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->

                                    </div>
                                    <!--end::Form-->
                                    <div class="w-100">
                                        <hr class="">
                                    </div>
                                    <!--begin::Form-->
                                    <div class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">ADM User
                                                        Details
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="product image"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">You need to upload product
                                                        pictures
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Row-->
                                                    <!--begin::Input group-->



                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">ADM User Email </span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title=" "></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="" name="card_name" value="" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Col-->
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-bold form-label mb-2">ADM
                                                            Password</label>
                                                        <!--end::Label-->
                                                        <!--begin::Row-->
                                                        <div class="row fv-row">
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <input type="password"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Password" name="" />
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <input type="password"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Confirm Password " name="" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <!--end::Col-->
                                                    </div>

                                                    <div>

                                                    </div>
                                                    <!--begin::Form-->
                                                    <!--												<form id="kt_modal_new_card_form" class="form" action="#">
             
             <div class="text-center pt-15">
              <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
              <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
               <span class="indicator-label">Submit</span>
               <span class="indicator-progress">Please wait...
               <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              </button>
             </div>
             end::Actions
            </form>-->
                                                    <!--end::Form-->

                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>

                                    <!--end::Step 1-->
                                    <div class="w-100">
                                        <hr class="">
                                    </div>
                                    <div class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">MDM User
                                                        Details
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="product image"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">You can define inventory
                                                        details (if applicable)
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row colors">
                                                    <!--begin::Row-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">MDM User Email </span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title=" "></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="" name="card_name" value="" />
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Col-->
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-bold form-label mb-2">MDM
                                                            Password</label>
                                                        <!--end::Label-->
                                                        <!--begin::Row-->
                                                        <div class="row fv-row">
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <input type="password"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Password" name="" />
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <input type="password"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Confirm Password " name="" />
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <!--end::Col-->
                                                    </div>


                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->
                                    </div>


                                    <div class="w-100">
                                        <hr class="">
                                    </div>
                                    <div class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">SIM
                                                        Activation
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="product image"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">You can define inventory
                                                        details (if applicable)
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row colors">
                                                    <!--begin::Row-->
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">SIM Activation </span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title=" "></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="" name="card_name" value="" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->
                                    </div>

                                    <div class="w-100">
                                        <hr class="">
                                    </div>
                                    <div class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">PGP Email
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title="product image"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">You can define inventory
                                                        details (if applicable)
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row colors">
                                                    <!--begin::Row-->
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">PGP Email </span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title=" "></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="" name="card_name" value="" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <button class="btn btn-light me-3 add_more_size">Send
                                                        Email</button>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->
                                    </div>

                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Stepper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2021©</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">Secore</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">Support</a>
                            </li>

                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->


    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upload_image" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary close_modal" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upload Product Image</h1>
                        <div class="text-muted fw-bold fs-5">If you need more info, please check
                            <a href="#" class="link-primary fw-bolder">Picture Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->

                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-12 mb-10 mb-lg-0" style='text-align: center'>
                                <div class="custom_file_upload">
                                    <input type="file" class="">
                                    <label style="margin-top: 25%"><svg width="48" height="48" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
                                                transform="rotate(90 12.75 4.25)" fill="black" />
                                            <path
                                                d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                fill="black" />
                                            <path
                                                d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                fill="#C4C4C4" />
                                        </svg></label>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3 close_modal"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary close_modal">Upload</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>


    <!--begin::Modal - Upgrade plan-->
    <!--end::Modal - Upgrade plan-->
    <!--end::Modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script src="{{ asset('https://code.jquery.com/jquery-2.2.4.min.js') }}"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ url('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ url('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ url('assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ url('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

    <script>
        $(document).on('click', '.custom-upload-img', function() {
            $('#kt_modal_upload_image').show();
            $('#kt_modal_upload_image').css('opacity', '1');
        });
        $(document).on('click', '.close_modal', function() {
            $('#kt_modal_upload_image').hide();
            $('#kt_modal_upload_image').css('opacity', '0');
        });

        $(document).on('click', '.add_more_size', function() {
            console.log('clicked');
            var size_wrapper =
                "<div class='row'><div class='col-4'><input type='text' class='form-control form-control-solid' placeholder='Size 1' /></div><div class='col-4'><input type='text' class='form-control form-control-solid' placeholder='Price' name='card_number'  /></div><div class='col-4'><input type='text' class='form-control form-control-solid' placeholder='Discounted Price' name='card_number'  /></div> <p> <a href='#' class='remove_this'>Remove</a></p></div>";
            $('.sizes').append(size_wrapper);
        });
        $(document).on('click', '.add_more_color', function() {
            console.log('clicked');
            var size_wrapper =
                "<div class='row'><div class='col-2'><input type='color' class='form-control form-control-solid' placeholder='Size 1' /></div> <p> <a href='#' class='remove_this'>Remove</a></p></div>";
            $('.colors').append(size_wrapper);
        });
        $(document).on('click', '.remove_this', function(e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });
    </script>
</body>
<!--end::Body-->

</html>
