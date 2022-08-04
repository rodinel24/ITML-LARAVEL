@extends('layout')

@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->

     @if (Auth::user()->role == 1)
        <section class="content">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ $userCounter }}</h3>

                      <p>Total Users</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                  </div>
                </div>
                <!-- ./col -->


                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>
                              {{ $adminCounter }}
                           </h3>

                            <p>Total Admins</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                          </div>
                          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>{{ $activeEmployee }}</h3>

                            <p>Active Leads</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-person-add"></i>
                          </div>
                          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                          <div class="inner">
                            <h3>{{ $inactiveEmployee }}</h3>

                            <p>Inactive In-active</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                          </div>
                          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                        </div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->

@endif



{{-- gikan sa data --}}
     <div class="row">
        <div class="col-12">
          <div class="card mx-3">
            <div  class= "card-header " >
              <h3 class="card-title">Leads</h3>
            </div>









            <!-- ./card-header -->
            <div  class="card-body" >
              <table    class="table table-bordered table-hover ">
                   {{-- search --}}

               <div>
                <div class="mx-auto pull-right">
                    <div class="d-flex">
                        <form action="{{ route('starter') }}" method="GET" role="search">
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <P class="mr-2 text-center pt-2">Filter:</P>

                                <input type="checkbox" name="companyName" value=1 class="btn-check" id="btncheck1" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btncheck1">Company Name</label>

                                <input type="checkbox" name="companyEmail" value=1  class="btn-check" id="btncheck2" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btncheck2">Company Email</label>

                                <input type="checkbox" name="companyPhone" value=1 class="btn-check" id="btncheck3" autocomplete="off">
                                <label class="btn btn-outline-dark" for="btncheck3">Company Phone</label>
                              </div>

                            <div class="input-group flex-row-reverse ">
                                <span class="input-group-btn mr-2  mb-1">
                                    <button class="btn btn-secondary " type="submit"  title="Search projects">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </span>
                                <input type="text" class="mr-2 pl-2" name="term" placeholder="Company Name" id="term" style="width:150px; height:30px; border: 1px solid gray;">
                                <a href="{{ route('starter') }}" class="">
                                    <span class="input-group-btn mr-2">
                                        <button class="btn btn-danger" type="button" title="Refresh page">
                                            <span class="fas fa-sync-alt"></span>
                                        </button>
                                    </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                        {{-- end search --}}
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Phone</th>
                  </tr>

                  </div>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)

                    @if ($lead->active == 1)

                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $lead->id }}</td>
                    <td>{{ $lead->company }}</td>
                    <td>{{ $lead->companyEmail }}</td>
                    <td>{{ $lead->companyPhone }}</td>
                  </tr>
                  <tr class="expandable-body ">
                    <td colspan="5">
                      <p>
                        <strong>Name:</strong>  {{ $lead->name }}
                         <br>
                        <strong>First Name:</strong>  {{$lead->first }}
                         <br>
                        <strong>Last Name:</strong>  {{ $lead->last }}
                         <br>
                        <strong>Email:</strong>  {{ $lead->email }}
                        <br>
                        <strong>Phone #1:</strong>  {{ $lead->phone1 }}
                         <br>
                        <strong>Phone #2:</strong>  {{ $lead->phone2 }}
                         <br>
                        <strong>Street:</strong>  {{ $lead->street }}
                        <br>
                        <strong>City:</strong>  {{ $lead->city }}
                        <br>
                        <strong>Address:</strong>  {{ $lead->address }}
                        <br>
                        <strong>State:</strong>  {{ $lead->state }}
                        <br>
                        <strong>Zip Code:</strong>  {{ $lead->zip }}
                        <br>
                        <strong>Company? :</strong>  @if ($lead->isCompany == 1)
                            Yes
                        @else
                            Not a Company!

                        @endif
                        <br>
                        <strong>Position:</strong>  {{ $lead->position }}
                        <br>
                        <strong>Website:</strong>  {{ $lead->website }}
                        <br>
                        <strong>Industry:</strong>  {{ $lead->industry }}
                        <br>
                        <strong>Income:</strong>  {{ $lead->income }}
                        <br>
                        <strong>Notes:</strong>  {{ $lead->notes }}
                        <br>
                        <strong>Source:</strong>  {{ $lead->source }}
                        <br>

                      </p>
                    </td>
                  </tr>
                  @endif
                  @endforeach

                </tbody>
              </table>
              {{ $leads->links() }}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

{{-- ending sa gikan sa data --}}











    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>

@endsection
