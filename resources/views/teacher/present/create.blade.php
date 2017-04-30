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
        New Presence
      </h1>
      <ol class="breadcrumb">
        <li><a href="/teacher/index"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#">New Presence</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <form action="{{route('user_teacher.presence.store')}}" method="post">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box box-primary">
              <div class="box-header">
                <i class="fa fa-user-secret"></i>
                <h3 class="box-title">New Presence</h3>
              </div>
              <div class="box-body">
                <div class="col-md-8">
                  <table class="table ">
                    <tr>
                      <th>Course Name</th>
                      <th>{{$data->course->name}}</th>
                    </tr>
                    <tr>
                      <th>Class Name</th>
                      <th>{{$data->classes->grade.$data->classes->name}}</th>
                    </tr>
                    <tr>
                      <th>Date</th>
                      <th>{{Carbon\Carbon::now()->format('d F Y')}}</th>
                    </tr>
                    <tr>
                      <th>Note</th>
                      <th>{{$form['note']}}</th>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class='box box-warning'>
              <div class="box-header">
                <i class="fa fa-user-secret"></i>
                <h3 class="box-title">Students</h3>
              </div>
              <div class="box-body">
                <table class="table table-striped table-bordered dataTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Student Id</th>
                      <th>Student Name</th>
                      <th>Presence</th>
                      <th>Note</th>
                    </tr>                  
                  </thead>
                  <tbody>
                    @foreach($student as $i =>  $d)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>
                        {{$d->student_number}}
                        <input type="hidden" name="student_id[]" value="{{$d->id}}">
                      </td>
                      <td>{{$d->name}}</td>
                      <td>
                        <select name="present[]" class="form-control">
                          <option selected="selected" value="Presence">Presence</option>
                          <option value="Sick">Sick</option>
                          <option value="Permission">Permission</option>
                          <option value="Unknown">Unknown</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" name="notes[]" class="form-control">
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <input type="hidden" name="detail_course_id" value="{{$data->id}}">
                <input type="hidden" name="note" value="{{$form['note']}}">
                {{csrf_field()}}
                <button class="btn btn-sm btn-primary pull-right" type="submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
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
    <script src="{{ asset('/js/bootstrap-editable.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.dataTable').dataTable({
          bLengthChange: false, 
          bFilter: false, 
          bInfo: true, 
          bPaginate: false, 
          bSort: false,
          paging: false,
          // "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
          //   $('.edit').editable({
          //     params:{
          //       _token: "{{csrf_token()}}"
          //     }   
          //   });
          // }
        });
      });
    </script>
  @endpush