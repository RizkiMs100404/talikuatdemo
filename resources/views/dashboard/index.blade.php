@extends('layouts.app')
@section('contents')
<style>
    /* Card styling upgrade */
.card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

/* Card text */
.card p {
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 4px;
}
.card h2 {
    font-weight: 700;
    margin: 0;
}

/* Icon circle */
.icon-circle {
    font-size: 32px;
    color: #fff;
    background: linear-gradient(135deg, #16a75c, #0d8748);
    padding: 14px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Fade-in animation */
.fade-in {
    animation: fadeIn 0.6s ease-in-out;
}
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(5px);}
    to {opacity: 1; transform: translateY(0);}
}

/* Header styling */
.page-title {
    font-size: 22px;
    font-weight: 600;
}
.breadcrumb {
    margin-bottom: 0;
    background: transparent;
    padding: 0;
}
.breadcrumb-item.active span {
    font-weight: 500;
}

.active-content {
    border-radius: 12px;
    padding: 15px;
    transition: box-shadow 0.3s ease;
}

body.dark .active-content {
    color: #cfe2ff;
}

/* Overview text warna putih di dark mode */
body.dark .breadcrumb-item.active span {
    color: #fff;
}

/* Icon home warna hitam di mode light, putih di dark mode */
.page-title-icon i.bi-house {
    color: black; /* warna hitam di light mode */
    transition: color 0.3s ease;
}

body.dark .page-title-icon i.bi-house {
    color: white; /* putih di dark mode */
}

</style>

<div class="mt-4 fade-in active-content">
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="page-header mb-4">
            <h3 class="page-title d-flex align-items-center">
                <span class="page-title-icon bg-gradient-primary text-white me-2 rounded-circle p-2 shadow-sm">
                    <i class="bi bi-house"></i>
                </span>
                Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span>Overview</span>
                        <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Cards -->
        <div class="row g-3">
            <div class="col-3">
                <div class="card text-white" style="background: linear-gradient(135deg, #ffbb00, #f59e0b);">
                    <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p>Penyedia Jasa</p>
                                <h2>124</h2>
                            </div>
                            <div class="icon-circle" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                                <i class="bi bi-person-circle fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card text-white" style="background: linear-gradient(135deg, #0ea5e9, #0369a1);">
                    <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p>Konsultan Supervisi</p>
                                <h2>45</h2>
                            </div>
                            <div class="icon-circle" style="background: linear-gradient(135deg, #0284c7, #075985);">
                                <i class="bi bi-person-circle fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card text-white" style="background: linear-gradient(135deg, #3b82f6, #1e3a8a);">
                    <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p>PPK</p>
                                <h2>55</h2>
                            </div>
                            <div class="icon-circle" style="background: linear-gradient(135deg, #2563eb, #1e3a8a);">
                                <i class="bi bi-person-circle fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card text-white" style="background: linear-gradient(135deg, #f97316, #c2410c);">
                    <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p>Paket Pekerjaan</p>
                                <h2>92</h2>
                            </div>
                            <div class="icon-circle" style="background: linear-gradient(135deg, #ea580c, #9a3412);">
                                <i class="bi bi-person-circle fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
