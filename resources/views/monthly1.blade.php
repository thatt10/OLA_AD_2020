@extends('dash_student')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grade</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Grade</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>   

                    @foreach($data as $row)
                      <td>{{$row->subjName}}</td>
                      <td>Monthly Exam 1</td>
                      <td><button type="button"  style="width:20%" class="btn btn-block btn-info">View</button></td>
                    </tr>
                    @endforeach
                    
                    
                    <tr>
                      <td>4</td>
                      <td>Final Exam</td>
                      <td><button type="button"  style="width:20%" class="btn btn-block btn-info">View</button></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
    
    </section>
    <!-- /.content -->

@endsection
