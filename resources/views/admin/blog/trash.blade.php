@extends('admin.layouts.app')
@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.menu')


        <div class="content container">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">List of Trashes</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                            <li class="breadcrumb-item active">Doctor</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-2"></div>
                {{-- <div class="col-sm-10">
                    <a class="btn btn-success mb-3" href="{{ route('create.posts') }}">Create Blog</a>
                    <a class="btn btn-danger mb-3" href="{{ route('trashes.posts') }}">Trashes</a> --}}
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Featured Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>










<tbody>
    @foreach ($all_data as $data)
    @php
        $featured_data = json_decode($data->featured);
    @endphp
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $featured_data->type }}</td>
            <td>
                <div class="actions">
                    <a href="#" id="{{ $data->id }}" class="btn btn-sm bg-danger-light delete">
                        Delete Parmanently
                    </a>
                    <a href="#" id="{{ $data->id }}" class="btn btn-sm bg-success-light untrash">
                        Recover Post
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>

















                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>















    </div>
    <!-- /Main Wrapper -->
@endsection
