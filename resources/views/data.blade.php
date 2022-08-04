@extends('layout')

@section('content')

<style>
    .table>:not(:last-child)>:last-child>*{
        border-bottom-color: red;

    }
    .page-item.active .page-link{
        background-color: red;
        color: white;
    }

</style>
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Leads</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Leads</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

       <!-- /.row -->







            {{-- </div> --}}



  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Lead</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
           {{-- form --}}
        <form method="POST" action=" {{ route('store') }} ">
            @csrf
                <div class="modal-body modalBody">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" >
                            Full Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autofocus
                        name="name" aria-describedby="emailHelp">

                    @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror

                        </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="text" class="form-control @error('first') is-invalid @enderror" name="first" value="{{ old('first') }}"  autofocus
                        name="first" aria-describedby="emailHelp">

                        @error('first')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Last Name</label>
                            <input type="text" class="form-control @error('last') is-invalid @enderror" name="last" value="{{ old('last') }}"  autofocus
                            name="last" aria-describedby="emailHelp">

                            @error('last')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autofocus
                                 aria-describedby="emailHelp">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone 1</label>
                                    <input type="text" class="form-control @error('phone1') is-invalid @enderror" name="phone1" value="{{ old('phone1') }}" required autocomplete="phone1" autofocus
                                    aria-describedby="emailHelp">

                                   @error('phone1')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>


                                   </span>
                               @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone 2</label>
                                        <input type="text" class="form-control @error('phone2') is-invalid @enderror" name="phone2" value="{{ old('phone2') }}" required autocomplete="phone2" autofocus
                                        aria-describedby="emailHelp">

                                       @error('phone2')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror</div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Street</label>
                                            <input type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}"  autofocus
                                            aria-describedby="emailHelp">

                                           @error('street')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror</div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">City</label>
                                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autofocus
                                                aria-describedby="emailHelp">

                                               @error('city')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror</div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autofocus
                                                    aria-describedby="emailHelp">

                                                   @error('address')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror</div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">State</label>
                                                        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"  autofocus
                                                        aria-describedby="emailHelp">

                                                       @error('state')
                                                       <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                       </span>
                                                   @enderror</div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Zip</label>
                                                            <input type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}"  autofocus
                                                            aria-describedby="emailHelp">

                                                           @error('zip')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror</div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">isCompany</label>
                                                                <br>
                                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="isCompany" id="btnradio1" value=1 autocomplete="off" checked>
                                                                    <label class="btn btn-outline-secondary" for="btnradio1">Yes</label>

                                                                    <input type="radio" class="btn-check" name="isCompany" id="btnradio2" value=0 autocomplete="off">
                                                                    <label class="btn btn-outline-secondary" for="btnradio2">No</label>


                                                                </div>


                                                            </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Company Name</label>
                                                                    <input type="text" class="form-control @error('companyName') is-invalid @enderror" name="company" value="{{ old('company') }}"  autofocus
                                                                    aria-describedby="emailHelp">

                                                                   @error('company')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror</div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Company Address</label>
                                                                        <input type="text" class="form-control @error('companyAddress') is-invalid @enderror" name="companyAddress" value="{{ old('companyAddress') }}"  autofocus
                                                                        aria-describedby="emailHelp">

                                                                       @error('companyAddress')
                                                                       <span class="invalid-feedback" role="alert">
                                                                           <strong>{{ $message }}</strong>
                                                                       </span>
                                                                   @enderror</div>

                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Company Email</label>
                                                                            <input type="email" class="form-control @error('companyEmail') is-invalid @enderror" name="companyEmail" value="{{ old('companyEmail') }}"  autofocus
                                                                            aria-describedby="emailHelp">

                                                                           @error('companyEmail')
                                                                           <span class="invalid-feedback" role="alert">
                                                                               <strong>{{ $message }}</strong>
                                                                           </span>
                                                                       @enderror</div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Company Number</label>
                                                                            <input type="text" class="form-control @error('companyNumber') is-invalid @enderror" name="companyNumber" value="{{ old('companyNumber') }}" autofocus
                                                                            aria-describedby="emailHelp">

                                                                           @error('companyNumber')
                                                                           <span class="invalid-feedback" role="alert">
                                                                               <strong>{{ $message }}</strong>
                                                                           </span>
                                                                       @enderror</div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Position</label>
                                                                <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}"  autofocus
                                                                aria-describedby="emailHelp">

                                                               @error('position')
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                               </span>
                                                           @enderror</div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Website</label>
                                                                    <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}"autofocus
                                                                    aria-describedby="emailHelp">

                                                                   @error('website')
                                                                   <span class="invalid-feedback" role="alert">
                                                                       <strong>{{ $message }}</strong>
                                                                   </span>
                                                               @enderror</div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Industry</label>
                                                                        <input type="text" class="form-control @error('industry') is-invalid @enderror" name="industry" value="{{ old('industry') }}" autofocus
                                                                        aria-describedby="emailHelp">

                                                                       @error('industry')
                                                                       <span class="invalid-feedback" role="alert">
                                                                           <strong>{{ $message }}</strong>
                                                                       </span>
                                                                   @enderror</div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Income</label>
                                                                            <input type="text" class="form-control @error('income') is-invalid @enderror" name="income" value="{{ old('income') }}" autofocus
                                                                            aria-describedby="emailHelp">

                                                                           @error('income')
                                                                           <span class="invalid-feedback" role="alert">
                                                                               <strong>{{ $message }}</strong>
                                                                           </span>
                                                                       @enderror</div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1" class="form-label">Notes</label>
                                                                                <input type="text" class="form-control @error('notes') is-invalid @enderror" name="notes" value="{{ old('notes') }}"  autofocus
                                                                                aria-describedby="emailHelp">

                                                                               @error('notes')
                                                                               <span class="invalid-feedback" role="alert">
                                                                                   <strong>{{ $message }}</strong>
                                                                               </span>
                                                                           @enderror</div>
                                                                                <div class="mb-3">
                                                                                    <label for="exampleInputEmail1" class="form-label">Source</label>
                                                                                    <input type="text" class="form-control @error('source') is-invalid @enderror" name="source" value="{{ old('source') }}"  autofocus
                                                                                    aria-describedby="emailHelp">

                                                                                   @error('source')
                                                                                   <span class="invalid-feedback" role="alert">
                                                                                       <strong>{{ $message }}</strong>
                                                                                   </span>
                                                                               @enderror</div>
                </div>

        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    </form>
      </div>
    </div>
  </div>

  @if (Auth::check())
  @if (Auth::user()->role == 1)
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-secondary ml-3 mb-3 "style="border-bottom: 3px solid red;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add Lead
          </button>

    @endif

@endif
            {{-- end modal --}}

     <div class="row">
        <div class="col-12">
          <div class="card mx-3">
            <div  class= "card-header " >
              <h3 class="card-title">Leads</h3>
            </div>



               {{-- modal --}}






            <!-- ./card-header -->
            <div  class="card-body" >
              <table    class="table table-bordered table-hover ">
                   {{-- search --}}

               <div>
                <div class="mx-auto pull-right">
                    <div class="d-flex">
                        <form action="{{ route('data') }}" method="GET" role="search">
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
                                <a href="{{ route('data') }}" class="">
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

                    <th>Action</th>
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

                    @if (Auth::user()->role == 1)
                         <td class="d-flex justify-content-around"><a href="#editModal{{ $lead->id }}" data-bs-toggle="modal" ><i class="fa-solid fa-pencil" style="color:black;" > </i></a>
                        <a href="#deleteModal{{ $lead->id }}" data-bs-toggle="modal" ><i class="fa-solid fa-trash-can" style="color:red;" ></i></a>
                                    </td>
                    @endif

            </div>

  <!--  Edit Modal -->
  <div class="modal fade" id="editModal{{ $lead->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Lead</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
           {{-- form --}}
        <form method="POST" action="{{ route('update') }}">
            @csrf
            @method('PUT')
                <input type="hidden" name="id" value="{{ $lead->id }}">
                <div class="modal-body editmodalBody">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="update_name" aria-describedby="emailHelp" value="{{ $lead->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="update_first" aria-describedby="emailHelp" value="{{ $lead->first }}">
                    </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="update_last" aria-describedby="emailHelp" value="{{ $lead->last }}">
                        </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="update_email" aria-describedby="emailHelp" value="{{ $lead->email }}">
                            </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone 1</label>
                                    <input type="text" class="form-control" name="update_phone1" aria-describedby="emailHelp" value="{{ $lead->phone1 }}">
                                </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone 2</label>
                                        <input type="text" class="form-control" name="update_phone2" aria-describedby="emailHelp" value="{{ $lead->phone2 }}">
                                    </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Street</label>
                                            <input type="text" class="form-control" name="update_street" aria-describedby="emailHelp" value="{{ $lead->street }}">
                                        </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">City</label>
                                                <input type="text" class="form-control" name="update_city" aria-describedby="emailHelp" value="{{ $lead->city }}">
                                            </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="update_address" aria-describedby="emailHelp" value="{{ $lead->address }}">
                                                </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">State</label>
                                                        <input type="text" class="form-control" name="update_state" aria-describedby="emailHelp" value="{{ $lead->state }}">
                                                    </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Zip</label>
                                                            <input type="text" class="form-control" name="update_zip" aria-describedby="emailHelp" value="{{ $lead->zip }}">
                                                        </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">isCompany</label>
                                                                <br>
                                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="update_isCompany" id="btnradio1" value=1 autocomplete="off" @if ($lead->isCompany == 1)  checked @endif  >
                                                                    <label class="btn btn-outline-secondary" for="btnradio1">Yes</label>
                                                                    <input type="radio" class="btn-check" name="update_isCompany" id="btnradio2" value=0 autocomplete="off" @if ($lead->isCompany == 0)  checked @endif>
                                                                    <label class="btn btn-outline-secondary" for="btnradio2">No</label>
                                                                </div>
                                                            </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Company Name</label>
                                                                    <input type="text" class="form-control" name="update_company" aria-describedby="emailHelp" value="{{ $lead->company }}">
                                                                </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Company Address</label>
                                                                        <input type="text" class="form-control" name="update_companyAddress" aria-describedby="emailHelp" value="{{ $lead->companyAddress }}">
                                                                    </div>

                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Company Email</label>
                                                                            <input type="email" class="form-control" name="update_companyEmail" aria-describedby="emailHelp" value="{{ $lead->companyEmail }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Company Number</label>
                                                                            <input type="text" class="form-control" name="update_companyPhone" aria-describedby="emailHelp" value="{{ $lead->companyPhone }}">
                                                                        </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Position</label>
                                                                <input type="text" class="form-control" name="update_position" aria-describedby="emailHelp" value="{{ $lead->position }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Website</label>
                                                                    <input type="text" class="form-control" name="update_website" aria-describedby="emailHelp" value="{{ $lead->website }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Industry</label>
                                                                        <input type="text" class="form-control" name="update_industry" aria-describedby="emailHelp" value="{{ $lead->industry }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Income</label>
                                                                            <input type="text" class="form-control" name="update_income" aria-describedby="emailHelp" value="{{ $lead->income }}">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1" class="form-label">Notes</label>
                                                                                <input type="text" class="form-control" name="update_notes" aria-describedby="emailHelp" value="{{ $lead->notes }}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="exampleInputEmail1" class="form-label">Source</label>
                                                                                    <input type="text" class="form-control" name="update_source" aria-describedby="emailHelp" value="{{ $lead->source }}">
                                                                                    </div>

                </div>


        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>
            {{-- end editmodal --}}

             <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal{{ $lead->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Delete Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
           {{-- form --}}
        <form method="POST" action="{{ route('remove') }}">
            @csrf
            @method('PUT')
                <input type="hidden" name="id" value="{{ $lead->id }}">
                <input type="hidden" name="active" value=0>

                <div class="modal-body">

                        <h5>Are you sure you want to delete this data?</h5>
                </div>


        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
    </form>
      </div>
    </div>
  </div>
            {{-- end deletemodal --}}
                  </tr>
                  <tr class="expandable-body ">
                    <td colspan="5">
                      <p>
                        <strong>Name:</strong>  {{ $lead->name }}
                         <br>
                        <strong>First Name:</strong>  {{ $lead->first }}
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


@endsection
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 <style>
    .modalBody{
        height: 350px;
        overflow: hidden;
    }
    .modalBody:hover{
        overflow-y:auto;
    }
    .editmodalBody{
        height: 350px;
        overflow: hidden;
    }
     .editmodalBody:hover{
        overflow-y:auto;
    }

 </style>
