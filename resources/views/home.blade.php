 @extends('dash_student')
 @section('content')
 
 <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
      
    <div class="container-fluid">
        
            <div class="card bg-gradient-primary">
             
            
                  <div class="text-center">
                  <div class="text-white"><h3>S01 - ENGLISH</h3></div>
                     <img style='height: 100%; width: 100%; object-fit: contain' src="https://evertonparkshs.eq.edu.au/ourcurriculum/SubjectAreas/PublishingImages/curriculum/subject-areas/subjects.jpg" alt="alternatetext" width="800" height="200">
                   
                  </div>
                  <br>
                  <!-- ./col -->
                  <div class="text-center">
                    <div id="sparkline-2"></div>
                    <div class="btn btn-block btn-default"><a href="#">View Course</a></div>
                   
                  </div><br>
                </div>

            </div><!-- /.card -->
            <br><br>
            <div class="card bg-gradient-danger">
             
            
                  <div class="text-center">
                  <div class="text-white"><h3>S02 - Mathematics</h3></div>
                     <img style='height: 100%; width: 100%; object-fit: contain' src="https://evertonparkshs.eq.edu.au/ourcurriculum/SubjectAreas/PublishingImages/curriculum/subject-areas/subjects.jpg" alt="alternatetext" width="800" height="200">
                   
                  </div>
                  <br>
                  <!-- ./col -->
                  <div class="text-center">
                    <div id="sparkline-2"></div>
                    <div class="btn btn-block btn-default"><a href="#">View Course</a></div>
                   
                  </div><br>
                </div>

            </div><!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection