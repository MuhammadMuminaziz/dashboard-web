<!-- @extends('auth/login')
@extends('auth/main') -->

<!-- @section('navbar') -->
<x-navbar>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h6 class="logo me-auto"><a href=""><img src="assets/img/kab_crb.png">Dashboard Satu Data Kab Cirebon</a></h6>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Data</a></li>
                    <li><a class="nav-link   scrollto" href="#portfolio">Visualisasi Peta</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li class="dropdown"><a href="#"><span>Execuive Dashboard</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
</x-navbar>
<!-- @endsection -->