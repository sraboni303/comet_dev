@extends('admin.layouts.app')
@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.menu')


        <div class="content container">
            <br><br><br><br>



            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <a id="create_cat_btn" href="#" class="btn btn-info mb-2">add new</a>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }} <button class="close" data-dismiss="alert">&times;</button> </p>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h3 class="text-danger text-center">List of Categories</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cat_body"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->



  <!-- Create Category Modal -->
  <div class="modal fade" id="create_cat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" id="create_cat_form" method="POST">
                @csrf
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Category Name">
                </div>
                <input class="btn btn-primary" type="submit" value="Add Now">
            </form>
        </div>

      </div>
    </div>
  </div>


    <!-- Edit Category Modal -->
    <div class="modal fade" id="edit_cat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="" id="edit_cat_form" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="get_id">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Edit Now">
                </form>
            </div>

          </div>
        </div>
      </div>




@endsection
