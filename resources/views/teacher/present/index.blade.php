@extends('layouts.teacher_layout')
@section('css')
  <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.min.css">
@stop
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Presence
      </h1>
      <ol class="breadcrumb">
        <li><a href="/administrator/home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="/administrator/admin">Presence</a></li>
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
              <h3 class="box-title">Presence</h3>
              <button class="btn btn-sm btn-primary pull-right" data-toggle='modal' data-target="#createModal">Add Presence</button>
            </div>
            <div class="box-body">
              <table class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Time</th>
                    <th>Course</th>
                    <th>Class</th>
                    <th>Teacher</th>
                    <th>Note</th>
                    <th>Action</th>
                  </tr>                  
                </thead>
                <tbody>
                  @foreach($data as $i =>  $d)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$d->date}}</td>
                    <td>{{$d->detail_course->course->name}}</td>
                    <td>{{$d->detail_course->classes->grade.$d->detail_course->classes->name}}</td>
                    <td>{{$d->detail_course->teacher->name}}</td>
                    <td>{{$d->note}}</td>
                    <td>
                      <a href="/teacher/presence/{{$d->id}}" class="edit btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                      <a href="#" class="delete btn btn-xs btn-danger" data-id='{{$d->id}}' data-course_code='{{$d->course_code}}' data-name='{{$d->name}}'><i class="fa fa-times"></i></a>
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
  <div class="modal fade" tabindex="-1" role="dialog" id='createModal'>
    <div class="modal-dialog" role="document">
      <form action="/teacher/presence/create" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Create New Presence</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select name="detail_course_id" class="form-control">
                      <option>Select Course</option>
                      @foreach($course as $c)
                        <option value="{{$c->id}}">{{$c->course->name.", Class ".$c->classes->grade.$c->classes->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <textarea name="note" class="form-control" placeholder="Note"></textarea>
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
  
  @endsection
  @push('js')
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.dataTable').dataTable();
      });

      $('.delete').click(function() {
        var id = $(this).data('id');
        var _method = 'delete';
        var _token = '{{csrf_token()}}';

        bootbox.confirm("<b>Delete This Presence</b>?", function(result) {
          if (result) {
            toastr.options.timeOut = 0;
            toastr.options.extendedTimeOut = 0;
            toastr.info('<i class="fa fa-spinner fa-spin"></i><br>Process...');
            toastr.options.timeOut = 5000;
            toastr.options.extendedTimeOut = 1000;
            $.post("/teacher/presence/"+id, {id: id, _token:_token, _method:_method})
            .done(function(result) {
              window.location.replace("/teacher/presence/");
            })
            .fail(function(result) {
              toastr.clear();
              toastr.error('Server Error! Please reload this page again.');
            });
          };
        });
      });
    </script>
  @endpush