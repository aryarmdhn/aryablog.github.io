@extends('layouts.main')

@section('container')
<main>

    @php
    // Mengambil jumlah post dan jumlah user dari database
    $totalPosts = \App\Models\Post::count();
    $totalUsers = \App\Models\User::count();
@endphp

<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check'></i>
        <span class="text">
            @if(auth()->check())
                <h3>Halo!!!</h3>
                <p>{{ auth()->user()->name }}</p>
            @else
                <h3>Let's Login!!!</h3>
            @endif
        </span>
    </li>
    <li>
        <i class='bx bxs-group'></i>
        <span class="text">
            <h3>{{ $totalUsers }}</h3>
            <p>Jumlah User</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-dollar-circle'></i>
        <span class="text">
            <h3>{{ $totalPosts }}</h3>
            <p>Total Posts</p>
        </span>
    </li>
</ul>
    
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About Me</h3>
                
            </div>
            <table>
                <thead>
                    
                   </tbody>
        </table>
    </div>
</div>
</main>
</main>
@endsection
