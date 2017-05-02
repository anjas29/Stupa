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
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="/teacher/index"><i class="fa fa-home"></i> Home</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow">
              <span class="info-box-icon"><i class="fa fa-feed"></i></span>

              <div class="info-box-content">
                <span class='info-box-text'>Student</span>
                <span class="info-box-number">{{$data['student']}}</span>
                <span class="progress-description" style="margin-top: 12px;">
                  <a href="{{route('student.index')}}" style="text-decorations:none; color:inherit;"><b>See more</b></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
              <span class="info-box-icon"><i class="fa fa-map-o"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Teacher</span>
                <span class="info-box-number">{{$data['teacher']}}</span>
                <span class="progress-description" style="margin-top: 12px;">
                  <a href="{{route('teacher.index')}}" style="text-decorations:none; color:inherit;"><b>See more</b></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
              <span class="info-box-icon"><i class="fa fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Active Course</span>
                <span class="info-box-number">{{$data['course']}}</span>
                <span class="progress-description" style="margin-top: 12px;">
                  <a href="{{route('detail_course.index')}}" style="text-decorations:none; color:inherit;"><b>See more</b></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="fa fa-video-camera  "></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Presence</span>
                <span class="info-box-number">{{$data['presence']}}</span>
                <span class="progress-description" style="margin-top: 12px;">
                  <a href="{{route('presence.index')}}" style="text-decorations:none; color:inherit;"><b>See more</b></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- End Row-->
    </div>
    <!-- End Row-->
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- detail News Modal -->


@endsection
@push('js')
<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/js/dataTables.bootstrap.js') }}"></script>
@endpush