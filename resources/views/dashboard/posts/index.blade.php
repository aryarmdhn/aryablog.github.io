@extends('dashboard.layouts.main')



@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1><i class='bx bxs-user-circle' ></i>{{ auth()->user()->name }}</h1>
  </div>
@endsection

@section('container2')
<!-- CONTENT -->

    <main>
        
            <a href="/dashboard/blog/create" class="btn btn-primary"><i class='bx bx-plus'></i>Create New Post</a>
        </div>
    
        @if(session()->has('succes'))
        <div class="alert alert-success" role="alert">
            {{ session('succes') }}
        </div>
        @endif
    
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>My Posts</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>

                <div class="table-responsive col-lg-2">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <p>{{ $post->title}}</p>
                                </td>
                                <td>
                                    <span class="status completed">{{ $post->category->name }}</span>
                                </td>
                                    <td>
                                        <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                                        <a href="/dashboard/blog/{{ $post->slug }}" class="badge bg-info"><span class="status completed">Lihat</span></a>

                                        <a href="/dashboard/blog/{{ $post->slug }}/edit" class="badge bg-info"><span class="status process">Edit</span>
                                        </a>

                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Apakah kamu yakin ingin menghapus post ini?')"><span class="status pending">Delete</span></button>
                                        </form>
                                        
                                        
                                    </td>
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->

@endsection
