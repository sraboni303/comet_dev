@extends('admin.layouts.app')
@section('content')


    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.menu')


        <div class="content container">
            <br><br><br><br><br><br>



            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <a id="create_tag_btn" class="btn btn-info mb-2" href="#">Create New</a>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h3 class="text-danger text-center">List of Tags</h3>
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
                                    <tbody id="tag_body"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->




<!-- Create Modal -->
  <div class="modal fade" id="create_tag_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Tag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="create_tag_form" action="" method="POST">
                @csrf
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Tag Name">
                </div>
                <input type="submit" class="btn btn-primary" value="Add Now">
            </form>
        </div>
      </div>
    </div>
  </div>


  {{-- Edit Modal --}}

  <div class="modal fade" id="edit_tag_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Tag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="edit_tag_form" action="" method="POST">
                @csrf
                <div class="form-group">
                    <input name="get_id" type="hidden">
                    <input name="name" type="text" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Add Now">
            </form>
        </div>
      </div>
    </div>
  </div>


@endsection
