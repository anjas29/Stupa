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
                  </tr>                  
                </thead>
                <tbody>
                  @foreach($data as $i =>  $d)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$d->course->course_code}}</td>
                    <td>{{$d->course->name}}</td>
                    <td>{{$d->teacher->name}}</td>
                    <td>{{$d->classes->grade.$d->classes->name}}</td>
                    <td>{{$d->period->year}}</td>
                    <td>{{$d->period->semester}}</td>
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

  @endsection
  @push('js')
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

        $('#detailClass').val(class_id);
        $('#detailCourse').val(course_id);
        $('#detailTeacher').val(teacher_id);
        $('#detailModal').modal();

      });
    </script>
  @endpush
