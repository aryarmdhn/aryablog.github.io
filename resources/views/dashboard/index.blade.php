@extends('dashboard.layouts.main')



@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1><i class='bx bxs-user-circle' ></i>{{ auth()->user()->name }}</h1>
</div>
<ul class="box-info">
  <li>
@endsection


@section('container2')

<main>
  <div class="head-title">
    
    <a href="/" class="btn-download">
      <i class='bx bxs-cloud-download' ></i>
      <span class="text">Go to HomePage</span>
    </a>
  </div>
     
<ul class="box-info">
  <li>
      <i class='bx bxs-group' ></i>
      <span class="text">
          <h3>Halo!!!</h3>
          <p>{{ auth()->user()->name }}</p>
      </span>
  </li>
  
  
</ul>
<div cla
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3></h3>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
        </div>
        <table>
            <thead>
              <div class="left">
                <h1>Welcome!!</h1>
                <P>Ini adalah halaman profil mu</P>
                <ul class="breadcrumb">
                </ul>
              </div>
            </tbody>
        </table>
    </div>
  </main>
@endsection