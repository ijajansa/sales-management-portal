@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Employees</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
          <li class="breadcrumb-item active">All Employees</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">Records</h5>
                    </div>
                    <div class="col-lg-6"></div>
                </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Sr. No
                    </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($employees as $key=>$user)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>-</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square me-1"></i> Edit</button>&nbsp;&nbsp;
                            <button type="button" class="btn btn-secondary"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection