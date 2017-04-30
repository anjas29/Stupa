@extends('layouts.admin_layout')
@section('css')
  <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.min.css">
@stop
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Classes
      </h1>
      <ol class="breadcrumb">
        <li><a href="/administrator/home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="/administrator/admin">Classes</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class='box box-warning'>
            <div class="box-header">
              <i class="fa fa-user-secret"></i>
              <h3 class="box-title">Classes</h3>
              <button class="btn btn-sm btn-primary pull-right" data-toggle='modal' data-target="#createNews">Create</button>
            </div>
            <div class="box-body">
              <table class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th> 
                    <th>Grade</th>
                    <th>Action</th>
                  </tr>                  
                </thead>
                <tbody>
                  @foreach($data as $i =>  $d)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->grade}}</td>
                    <td>
                      <a href="#" class="edit btn btn-xs btn-primary" data-id='{{$d->id}}' data-grade='{{$d->grade}}' data-name='{{$d->name}}'" data-created_at="{{$d->created_at}}"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="delete btn btn-xs btn-danger" data-id='{{$d->id}}' data-grade='{{$d->grade}}' data-name='{{$d->name}}'><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row-->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- crate Class Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id='createNews'>
    <div class="modal-dialog" role="document">
      <form action="/admin/classes" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Create New Class</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Class Name" id='createTitle' name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Grade" id='createTitle' name="grade">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              {{csrf_field()}}
              <button type="button" class="btn btn-sm" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-sm btn-primary pull-right">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--Detail Class Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id='detailClass'>
    <div class="modal-dialog" role="document">
      <form action="/admin/classes" method="post" id="edit-form">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Detail Class</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Class Name" id='detailName' name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Grade" id='detailGrade' name="grade">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              {{csrf_field()}}
               {!! method_field('patch') !!}
              <input type="hidden" name="_id" value="" id="detailId">
              <button type="button" class="btn btn-sm" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-sm btn-primary pull-right">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  @endsection
  @section('js')
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.dataTable').dataTable();
      });

      $('.edit').click(function(){
        var name = $(this).data('name');
        var grade = $(this).data('grade');
        var id = $(this).data('id');
        $("#edit-form").attr("action", "/admin/classes/" + id);

        $('#detailName').val(name);
        $('#detailGrade').val(grade);
        $('#detailId').val(id);
        $('#detailClass').modal();

      });
      $('.delete').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var grade = $(this).data('grade');
        var _method = 'delete';
        var _token = '{{csrf_token()}}';

        bootbox.confirm("<b>Delete Class</b> : <strong>"+grade+" "+name+" </strong> ?", function(result) {
          if (result) {
            toastr.options.timeOut = 0;
            toastr.options.extendedTimeOut = 0;
            toastr.info('<i class="fa fa-spinner fa-spin"></i><br>Process...');
            toastr.options.timeOut = 5000;
            toastr.options.extendedTimeOut = 1000;
            $.post("/admin/classes/"+id, {id: id, _token:_token, _method:_method})
            .done(function(result) {
              window.location.replace("/admin/classes/");
            })
            .fail(function(result) {
              toastr.clear();
              toastr.error('Server Error! Please reload this page again.');
            });
          };
        }); 
      });
    </script>
  @stop