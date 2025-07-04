@include('includes.dashboardHeader')
@include('includes.notifications_alert')

<title> Mfumo wa Parokia | Wahusika</title>


<!--begin::Body-->
@if($errors->any())
    <div id="sessionMessage" class="alert-container d-flex align-items-center justify-content-end"
         style="position: absolute; top: 25px; right: 20px; z-index: 50000 !important;">
        <div class="alert alert-danger d-flex align-items-center w-100" role="alert">
            <i class="bi bi-x-circle text-danger fw-bold"></i>
            <div class="mx-3" style="font-size: 15px;">
                <b>Tatizo! </b> {{ 'Tafadhali jaza taarifa sahihi' }}
            </div>
        </div>
    </div>
@endif

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">

        <!--begin::Container-->
        <div class="container-fluid">

            <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
            </ul>
            <!--end::Start Navbar Links-->



            <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto">

                <!--begin::Fullscreen Toggle-->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                        <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                        <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                    </a>
                </li>
                <!--end::Fullscreen Toggle-->



                <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                        <span class="bg-dark rounded-circle text-light fw-bold d-flex justify-content-center align-items-center"
                              style="width: 35px; height: 35px;">
                            {{ Str::limit($user->firstname, 1, '') }}{{ Str::limit($user->lastname, 1, '') }}
                        </span>
                        <span class="d-none d-md-inline mx-2">{{ $user->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <!--begin::User Profile Details-->
                        <li class="user-header d-flex align-items-center justify-content-start" style="background-color: black; min-height: 50px !important;">
                            <span class="bg-dark rounded-circle text-light fw-bold d-flex justify-content-center align-items-center"
                                  style="width: 50px; height: 50px;">
                                {{ Str::limit($user->firstname, 1, '') }}{{ Str::limit($user->lastname, 1, '') }}
                            </span>
                            <p class="d-flex flex-column align-items-start text-light mx-2" style="margin-bottom: 10px;">
                                {{ $user->name }}
                                <small style="color: rgba(245,245,245,0.7);">{{ Str::title($user->user_type)  }}</small>
                            </p>
                        </li>
                        <!--end::User Image-->

                        <!--begin::Menu Footer-->
                        <li class="user-footer bg-black pb-3" style="border-top: 1px solid #cccccc40">
                            <a href="{{ route('admin.profile.page') }}" class="btn btn-dark btn-flat text-white">
                                <x-heroicon-m-user style="width: 20px; height: 20px;" />
                                Wasifu
                            </a>
                            <a href="{{ route('user.logout') }}" class="btn btn-danger btn-flat float-end text-white" style="background-color: darkred; border: 1px solid darkred;">
                                <x-heroicon-m-arrow-left-start-on-rectangle style="width: 20px; height: 20px;" />
                                Toka Nje
                            </a>
                        </li>
                        <!--end::Menu Footer-->
                    </ul>
                </li>
                <!--end::User Menu Dropdown-->

            </ul>
            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
    </nav>
    <!--end::Header-->

    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="{{ route('admin.dashboard.page') }}" class="brand-link">

                {{--  <!--begin::Brand Image--> signout
                <img src="{{ asset('assets/AdminLTE-4.0.0-beta3/dist/assets/img/AdminLTELogo.png') }}"
                    alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
                <!--end::Brand Image-->  --}}

                <!--begin::Brand Text-->
                <span class="brand-text fw-bold">ChurchParish</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->

        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">

                <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard.page') }}" class="nav-link">
                            <i class="nav-icon bi bi-speedometer2"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.view.users.page') }}" class="nav-link active">
                            <i class="nav-icon bi bi-person-vcard-fill"></i>
                            <p>
                                Wahusika
                                <span class="nav-badge badge text-bg-success me-2">{{ $users->count()  }}</span>
                            </p>
                        </a>
                    </li>

                    {{-- MCHUNGAJI --}}
                    <li class="nav-item menu-open mt-3">
                        <a href="#" class="nav-link">
                            {{-- <i class=""></i>--}}
                            <p>
                                Muhasibu
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.attendance.donation.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-cash-coin"></i>
                                    <p>
                                        Maudhuria/Sadaka
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.pledges.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-journal-check"></i>
                                    <p>
                                        Ahadi
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- KATIBU --}}
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            {{-- <i class=""></i>--}}
                            <p>
                                Katibu
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.members.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-person-fill"></i>
                                    <p>
                                        Washirika
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.leaders.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-briefcase-fill"></i>
                                    <p>
                                        Viongozi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.leader.positions.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-funnel-fill"></i>
                                    <p>
                                        Nafasi za Viongozi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.groups.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-people-fill"></i>
                                    <p>
                                        Vikundi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.announcements.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-megaphone-fill"></i>
                                    <p>
                                        Matangazo
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.baptisms.page') }}" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-stars"></i>
                                    <p>
                                        Ubatizo
                                        <span class="nav-badge badge text-bg-success me-2">{{ $baptisms->count()  }}</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- MCHUNGAJI --}}
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            {{-- <i class=""></i>--}}
                            <p>
                                Mchungaji
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="mx-3"></span>
                                    <i class="bi bi-chat-dots-fill"></i>
                                    <p>
                                        Meseji
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>




                    <li class="nav-item">
                        <a href="{{ route('admin.profile.page') }}" class="nav-link">
                            <span class="bg-dark rounded-circle text-light fw-bold d-flex justify-content-center align-items-center"
                                  style="width: 25px; height: 25px; font-size: 10px;">
                                {{ Str::limit($user->firstname, 1, '') }}{{ Str::limit($user->lastname, 1, '') }}
                            </span>
                            <p>
                                {{ $user->name ?? "Wasifu" }}
                            </p>
                        </a>
                    </li>


                </ul>
                <!--end::Sidebar Menu-->
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->


    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item fs-6">Wahusika</li>
                            <li class="breadcrumb-item active fs-6" aria-current="page">Orodha</li>
                        </ol>
                        <h3 class="mb-0 float-bold">Wahusika</h3>
                    </div>
                    <div class="col-sm-6">
                        <div style="padding: 14px 0"></div>
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addUserModal"> Ongeza Muhusika</button>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->


        
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="card p-3 rounded-2">
                        @if($users->isEmpty())
                            <div class="container p-5 d-flex flex-column align-items-center justify-content-center" style="background-color: #cccccc20;">
                                <x-heroicon-o-inbox class="text-danger mb-4" style="height: 50px; width: 50px;" />
                                <h5 class="fw-semibold fst-italic fs-6">Wahusika Hakuna, Jaribu Kuongeza</h5>
                            </div>
                        @else
                            <livewire:users-table />
                        @endif
                    </div>
                </div>
                <!-- /.row (main row) -->

            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->

    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::Copyright-->
        <strong>
            Copyright &copy; 2014-2024&nbsp;
            <a href="{{ route('admin.dashboard.page') }}" class="text-decoration-none">ChurchParish</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->

</div>
<!--end::App Wrapper-->




<!-- Modal - ADMIN USER REGISTER -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('addUser') }}" method="POST" x-data="{ loading: false }" @submit.prevent="loading = true; $el.submit()">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserModalLabel">Ongeza Mhusika</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                           <div class="mb-3">
                               <label for="firstname"   class="form-label">Jina la Kwanza</label>
                               <input type="text" id="firstname" value="{{ old('firstname') }}" class="form-control" placeholder="Ingiza Jina la Kwanza" name="firstname">
                               @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lastname"   class="form-label">Jina la Mwisho</label>
                                <input type="text" id="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="Ingiza Jina la Mwisho" name="lastname">
                                @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Barua Pepe</label>
                        <input type="text"  value="{{ old('email') }}" id="email" class="form-control" placeholder="Ingiza Barua Pepe" name="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Namba ya Simu</label>
                                <input type="text" value="{{ old('phone') }}" id="phone" class="form-control" placeholder="Ingiza Namba ya Simu" name="phone">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user_type" class="form-label">Aina ya Mhusika</label>
                                <select class="form-select" name="user_type">
                                    <option value="" selected>-- chagua Aina ya Mhusika --</option>
                                    <option value="admin">Admin</option>
                                    <option value="mchungaji">Mchungaji</option>
                                    <option value="katibu">Katibu</option>
                                    <option value="mwasibu">Mwasibu</option>
                                </select>
                                @error('user_type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Neno Siri (Mhusika Atabadili mwenyewe)</label>
                        <input type="text"  value="{{ old('password', '12345678') }}" readonly id="password" class="form-control" placeholder="Ingiza Neno Siri" name="password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sitisha</button>
{{--                    <button type="submit" class="btn btn-primary">Ongeza Mhusika</button>--}}
                    <button type="submit"
                            class="btn btn-primary d-flex align-items-center justify-content-center gap-2"
                            :disabled="loading">
                        <!-- Spinner shown only when loading -->
                        <span x-show="loading" class="spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                        <span>Ongeza Mhusika</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('includes.dashboardFooter')
