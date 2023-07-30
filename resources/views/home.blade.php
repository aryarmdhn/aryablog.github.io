@extends('layouts.main')

@section('container')

<main>
    <div class="head-title1">
        <div class="left">
            <ul class="breadcrumb">
                <!-- Kondisi untuk menampilkan tombol "Go to your Dashboard" jika pengguna sudah login -->
                @if(auth()->check())
                    <!-- Pengguna sudah login, jadi tombol ditampilkan -->
                    <a href='/dashboard' class="btn-download">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Go to your Profile</span>
                    </a>
                @endif
            </ul>
        </div>
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h1>Welcome!!</h1>
                <h1> @if(auth()->check())
                    
                    <p>{{ auth()->user()->name }}</p>
                @else
                    <h3>Let's Login!!!</h3>
                @endif</h1>
            </div>
            <table>
                <thead>
                    
                </thead>
            </table>
        </div>
    </div>

  
</main>

@endsection
