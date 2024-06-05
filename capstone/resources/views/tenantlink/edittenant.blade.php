<x-app-layout>
    <x-slot name="header">
        <x-partials.header/>
    </x-slot>

    <x-slot name="content">
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Tenant {{$tenant->fname." ".$tenant->mname." ".$tenant->lname}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tenants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <!-- form start -->
              <form role="form" id="quickForm" action="{{ route('tenants.update', $tenant->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{$tenant->lname}}">
                  </div></div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" value="{{$tenant->fname}}">
                  </div></div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="mname" class="form-control" placeholder="Middle Name" value="{{$tenant->mname}}">
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <input  class="form-control" name="address" placeholder="ex. Manggahan, Pasig City, Manila" value="{{$tenant->address}}"></textarea>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="ex. email@gmail.com" value="{{$tenant->email}}">
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="ex. 09654645341" value="{{$tenant->contact}}">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <label>Gender</label>
                    <div class="form-group">
                      <select class="form-control" name="gender" value="{{$tenant->gender}}">
                          <option>Male</option>
                          <option>Female</option>
                      </select>
                </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Profile</label>
                    <input type="file" name="profile" class="form-control" accept=".jpg,.jpeg,.png,.gif" value="{{$tenant->profile}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    </x-slot>

<x-partials.sidebar/>
</x-app-layout>
