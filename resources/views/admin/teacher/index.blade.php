@extends('layouts.admin_layout')
@section('css')
  <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.min.css">
  <style type="text/css">
    .img-view {
      position: relative;
    }
    .img-view button {
      position: absolute;
      top: 5px;
      right: 5px;
      height: 35px;
      width: 35px;
      display: block;
    }
  </style>
@stop
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teachers
      </h1>
      <ol class="breadcrumb">
        <li><a href="/administrator/home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="/administrator/admin">Teachers</a></li>
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
              <h3 class="box-title">Teachers</h3>
              <button class="btn btn-sm btn-primary pull-right" data-toggle='modal' data-target="#createNews">Add Teacher</button>
            </div>
            <div class="box-body">
              <table class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Teacher Id</th> 
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Level</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>                  
                </thead>
                <tbody>
                  @foreach($data as $i =>  $d)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$d->teacher_number}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->gender}}</td>
                    <td>{{$d->level}}</td>
                    <td>{{$d->phone}}</td>
                    <td>
                      <a href="#" class="edit btn btn-xs btn-primary" data-id='{{$d->id}}' data-teacher_number='{{$d->teacher_number}}' data-name='{{$d->name}}' data-gender='{{$d->gender}}' data-level='{{$d->level}}' data-phone='{{$d->phone}}' data-created_at="{{$d->created_at}}"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="delete btn btn-xs btn-danger" data-id='{{$d->id}}' data-teacher_number='{{$d->teacher_number}}' data-name='{{$d->name}}' data-gender='{{$d->gender}}' data-level='{{$d->level}}' data-phone='{{$d->phone}}' data-created_at="{{$d->created_at}}"><i class="fa fa-times"></i></a>
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

  <!-- create  Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id='createNews'>
    <div class="modal-dialog" role="document">
      <form action="/admin/teacher" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Add New Teacher</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Teacher Id" id='createTitle' name="teacher_number">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Name" id='createTitle' name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Level" id='createTitle' name="level">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Phone" id='createTitle' name="phone">
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
  <div class="modal fade" tabindex="-1" role="dialog" id='detailModal'>
    <div class="modal-dialog" role="document">
      <form action="/admin/teacher/" method="post" id="edit-form">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Detail Teacher</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Teacher Id" id='detailTeacherNumber' name="teacher_number">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Name" id='detailName' name="name">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Level" id='detailLevel' name="level">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select name="gender" class="form-control" id="detailGender">
                    <option value="Male" id='optionMale'>Male</option>
                    <option value="Female" id='optionFemale'>Female</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <input type="text" class="form-control" placeholder="Phone" id='detailPhone' name="phone">
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
        var level = $(this).data('level');
        var teacher_number = $(this).data('teacher_number');
        var phone = $(this).data('phone');
        var gender = $(this).data('gender');
        var id = $(this).data('id');

        $("#edit-form").attr("action", "/admin/teacher/" + id);

        $('#detailName').val(name);
        $('#detailLevel').val(level);
        $('#detailTeacherNumber').val(teacher_number);
        $('#detailPhone').val(phone);

        if(gender == 'Male'){
          $('#optionMale').attr('selected', 'selected');
          $('#optionFemale').removeAttr('selected');
        }else{
          $('#optionFemale').attr('selected', 'selected');
          $('#optionMale').removeAttr('selected');
        }

        $('#detailId').val(id);
        $('#detailModal').modal();

      });
      $('.delete').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name')
        var _method = 'delete';
        var _token = '{{csrf_token()}}';

        bootbox.confirm("<b>Delete Teacher</b> : <strong>"+name+" </strong> ?", function(result) {
          if (result) {
            toastr.options.timeOut = 0;
            toastr.options.extendedTimeOut = 0;
            toastr.info('<i class="fa fa-spinner fa-spin"></i><br>Process...');
            toastr.options.timeOut = 5000;
            toastr.options.extendedTimeOut = 1000;
            $.post("/admin/teacher/"+id, {id: id, _token:_token, _method:_method})
            .done(function(result) {
              window.location.replace("/admin/teacher/");
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

