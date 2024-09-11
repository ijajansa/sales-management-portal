@extends('layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Add Employees</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <!-- Vertical Form -->
                <form class="row g-3" action="{{url('employees/create')}}" method="POST">
                    @csrf
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Full Name" id="inputNanme4">
                    @error('name')
                    <span class="invalid-feedback" role="alert" style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Enter Email Address">
                    @error('email')
                    <span class="invalid-feedback" role="alert"  style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Enter Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert"  style="display: block">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="text-left">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- Vertical Form -->
  
              </div>
            </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection