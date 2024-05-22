<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | Landing</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/jquery-ui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root background-overlay" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="position-relative">
                <div class="position-absolute w-100 z-index-n2">
                    <img src="{{ asset('bg_landing.jpg') }}" class="w-100 backgriund-landing" style="height: 100vh"
                        alt="">
                </div>
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="../../demo1/dist/landing.html">
                                    <img alt="Logo" src="{{ asset('logo.png') }}"
                                        class="logo-default h-45px h-lg-65px" />
                                    <img alt="Logo" src="{{ asset('logo.png') }}"
                                        class="logo-sticky h-40px h-lg-60px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu" style="align-items: center">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">HOME</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#visi-misi"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">VISI
                                                MISI</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                href="#struktur-otganisasi" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">STRUKTU
                                                ORGANISASI</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Toolbar-->
                                        <div class="flex-equal ms-md-15">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_1">Buat Permohonan</button>
                                        </div>

                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9"
                    data-kt-sticky="true" data-kt-sticky-name="landing-partner"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <div class="position-absolute z-index-1 bottom-0 end-0 px-10">
                        <div class="shadow-lg bg-white p-5 rounded-2 w-300px">
                            <div class="fw-bolder fs-5 text-center">Pengumuman</div>
                            <div class="separator separator-dashed mb-5"></div>
                            <div class="h-125px overflow-scroll">
                                <ul>
                                    @foreach ($pengumuman as $list)
                                        <li>{{ $list->judul }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">SELAMAT DATANG
                            <br />Di
                            <span
                                style="background: linear-gradient(to right, #0093dd 0%, #95ffff 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">Website Pemerintah Desa Barua</span>
                            </span>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Action-->
                        {{-- <a href="../../demo1/dist/index.html" class="btn btn-primary">Try Metronic</a> --}}
                        <!--end::Action-->
                        <!--begin::Action-->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Buat
                            Permohonan</button>
                        <div class="modal fade" tabindex="-1" id="kt_modal_1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Pilih Jenis Permohonan</h3>

                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            <span class="svg-icon svg-icon-1"></span>
                                        </div>
                                        <!--end::Close-->
                                    </div>

                                    <div class="modal-body text-start">
                                        <!--begin::Input group-->
                                        <div class="input-group mb-5">
                                            <span class="input-group-text" id="basic-addon1">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon svg-icon-1x">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="16" fill="currentColor" class="bi bi-search"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <input type="text" class="form-control" placeholder="Jenis Permohonan"
                                                aria-label="Jenis Permohonan" aria-describedby="basic-addon1"
                                                id="searchInput" />
                                        </div>
                                        <!--end::Input group-->
                                        <ul id="searchList" style="display: grid; gap: 5px">
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_usaha">Surat
                                                    Keterangan Usaha</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_pindah">Surat
                                                    Keterangan Pindah Domisili</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_hewan">Surat
                                                    Pengantar Hewan</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_jualbeli">Surat
                                                    Jual Beli</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_wali">Surat
                                                    Keterangan Wali</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_kematian">Surat
                                                    Keterangan Kematian</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_hilang">Surat
                                                    Keterangan Hilang</button>
                                            </li>
                                            <li>
                                                <button class="btn btn-success py-1 px-2 w-100 text-start"
                                                    data-bs-toggle="modal" data-bs-target="#ket_tidak_mampu">Surat
                                                    Keterangan Tidak Mampu</button>
                                            </li>
                                        </ul>
                                        <div id="noOption" class="text-muted text-center d-none">Tidak ada option
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-sections.navigation />

                        <!--end::Action-->
                    </div>
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2 content-deskripsi" style="margin-top: 220px">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div id="visi-misi" class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
                        VISI MISI</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="content-subdeskripsi">
                        <ul class="fw-bolder fs-3 d-grid justify-content-center">
                            <li>Desa Melayani</li>
                            <li>Desa Berkarakter</li>
                        </ul>
                    </div>
                    <!--end::Text-->
                </div>
                <div id="struktur-otganisasi" class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
                        STRUKTUR ORGANISASI</h3>
                    <!--end::Title-->
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('struktur.jpg') }}" alt="">
                    </div>
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Container-->
        </div>

        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <style>
                        svg {
                            fill: #0093dd;
                        }
                    </style>
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z">
                    </path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pt-20" style="background-image: linear-gradient(to top, #080808cc, #0093dd)">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mb-5">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white mt-10" id="clients"
                            data-kt-scroll-offset="{default: 125, lg: 150}">
                            VENUE</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="py-5 py-lg-10">
                        <!--begin::Col-->
                        <div class="mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10 embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.472143505269!2d120.00657957387206!3d-5.496679494483202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbeaddfce306f47%3A0x7b39fb5f29af9667!2sKantor%20Desa%20Barua!5e0!3m2!1sid!2sid!4v1711989785552!5m2!1sid!2sid"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!--end::Block-->
                        </div>
                        <style>
                            .embed-responsive {
                                position: relative;
                                display: block;
                                width: 100%;
                                height: 55vh;
                                padding: 0;
                                overflow: hidden;
                            }

                            .embed-responsive::before {
                                content: "";
                                display: block;
                                padding-top: 56.25%;
                                /* 16:9 aspect ratio */
                            }

                            .embed-responsive .embed-responsive-item,
                            .embed-responsive iframe,
                            .embed-responsive embed,
                            .embed-responsive object,
                            .embed-responsive video {
                                position: absolute;
                                top: 0;
                                left: 0;
                                bottom: 0;
                                width: 100%;
                                height: 100%;
                                border: 0;
                            }
                        </style>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row justify-content-center py-7 py-lg-10">
                        <!--begin::Links-->
                        <div class="text-white">
                            Created By
                            <a href="https://portfolio-projectreact.web.app/" target="_blank"
                                class="text-primary text-hover-primary">Sapurata Creative</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                        transform="rotate(90 13 6)" fill="currentColor" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <div
        style="position: fixed; bottom: 105px; right: 0; padding: 10px; background-color: white; border: 2px solid; border-right: none; border-start-start-radius: 25px; border-bottom-left-radius: 10px; z-index: 2;">
        <a href="https://google.com" target="_blank">
            <div class="d-flex align-items-center gap-2">
                <img class="w-35px" src="{{ asset('logo_wa.png') }}" alt="">
                <div>Contact Us</div>
            </div>
        </a>
    </div>
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script>
        $(".kt_datepicker_1").flatpickr({
            dateFormat: "d-m-Y",
        });
        $(".kt_datepicker_2").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });
        document.addEventListener("DOMContentLoaded", () => {
            @if (Session::has('status'))
                Swal.fire({
                    icon: @json(Session::get('status')),
                    title: @json(Session::get('status')) == 'success' ? 'Berhasil' : 'Gagal',
                    text: @json(Session::get('message')),
                    showConfirmButton: false,
                    timer: 3000
                })
            @endif
        });

        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var searchText = $(this).val().toLowerCase();
                $('#searchList li').each(function() {
                    var listItemText = $(this).text().toLowerCase();
                    if (listItemText.indexOf(searchText) === -1) {
                        $(this).hide();
                        $('#noOption').removeClass('d-none');
                    } else {
                        $(this).show();
                        $('#noOption').addClass('d-none');
                    }
                });
            });
        });
    </script>

</body>
<!--end::Body-->

</html>
