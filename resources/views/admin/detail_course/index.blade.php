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
        Active Course
      </h1>
      <ol class="breadcrumb">
        <li><a href="/administrator/home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="/administrator/admin">Active Course</a></li>
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
              <h3 class="box-title">Active Course</h3>
              <button class="btn btn-sm btn-primary pull-right" data-toggle='modal' data-target="#createModal">Add Active Course</button>
            </div>
            <div class="box-body">
              <table class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Course Code</th> 
                    <th>Name</th>
                    <th>Teacher</th>
                    <th>Class</th>
                    <th>Period</th>
                    <th>Semester</th>
                    <th>Action</th>
                  </tr>                  
                </thead>
                <tbody>
                  @foreach($data as $i =>  $d)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$d->course->course_code}}</td>
                    <td>{{$d->course->name}}</td>
                    <td>{{$d->teacher->name}}</td>
                    <td>{{$d->classes->grade." ".$d->classes->name}}</td>
                    <td>{{$d->period->year}}</td>
                    <td>{{$d->period->semester}}</td>
                    <td>
                      <a href="#" class="edit btn btn-xs btn-primary" data-id='{{$d->id}}' data-course_id='{{$d->course_id}}' data-class_id='{{$d->class_id}}' data-teacher_id='{{$d->teacher_id}}'><i class="fa fa-pencil"></i></a>
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

  <!-- crate Class Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id='createModal'>
    <div class="modal-dialog" role="document">
      <form action="/admin/detail_course" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Create Active Course</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select class="form-control" name="course_id">
                      <option>Select Course</option>
                      @foreach($course as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select class="form-control" name="class_id">
                      <option>Select Class</option>
                      @foreach($classes as $c)
                        <option value="{{$c->id}}">{{$c->grade." ".$c->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select class="form-control" name="teacher_id">
                      <option>Select Teacher</option>
                      @foreach($teacher as $t)
                        <option value="{{$t->id}}">{{$t->name}}</option>
                      @endforeach
                  </select>
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
      <form action="/admin/detail_course" method="post" id="edit-form">
        <div class="modal-content">
          <div class="modal-header">
            <strong>Detail Course</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select class="form-control" name="course_id" id="detailCourse">
                      <option>Select Course</option>
                      @foreach($course as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select class="form-control" name="class_id"  id="detailClass">
                      <option>Select Class</option>
                      @foreach($classes as $c)
                        <option value="{{$c->id}}">{{$c->grade." ".$c->name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-feed"></i></span>
                  <select class="form-control" name="teacher_id"  id="detailTeacher">
                      <option>Select Teacher</option>
                      @foreach($teacher as $t)
                        <option value="{{$t->id}}">{{$t->name}}</option>
                      @endforeach
                  </select>
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
        var class_id = $(this).data('class_id');
        var course_id = $(this).data('course_id');
        var teacher_id = $(this).data('teacher_id');

        var id = $(this).data('id');
        $("#edit-form").attr("action", "/admin/detail_course/" + id);

        $('#detailClass').find('option').each(function(){
          if ($(this).val() == class_id){
            $(this).attr("selected","selected");
          }
        });
        $('#detailCourse').find('option').each(function(){
          if ($(this).val() == course_id){
            $(this).attr("selected","selected");
          }
        });
        $('#detailTeacher').find('option').each(function(){
          if ($(this).val() == teacher_id){
            $(this).attr("selected","selected");
          }
        });
        
        $('#detailId').val(id);
        $('#detailModal').modal();

      });
      $('.delete').click(function() {
        var id = $(this).data('id');
        var _method = 'delete';
        var _token = '{{csrf_token()}}';

        bootbox.confirm("<b>Delete This Active Course</b>?", function(result) {
          if (result) {
            toastr.options.timeOut = 0;
            toastr.options.extendedTimeOut = 0;
            toastr.info('<i class="fa fa-spinner fa-spin"></i><br>Process...');
            toastr.options.timeOut = 5000;
            toastr.options.extendedTimeOut = 1000;
            $.post("/admin/detail_course/"+id, {id: id, _token:_token, _method:_method})
            .done(function(result) {
              window.location.replace("/admin/detail_course/");
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
