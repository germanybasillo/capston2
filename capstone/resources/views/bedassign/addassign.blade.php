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
            <h1 class="m-0 text-dark">Assign Bed</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Beds</li>
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
              <form role="form" id="quickForm" action="{{url('assign-store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Tenants</label>
                    <select name="email" id="email" class="form-control">
                        <option selected disabled>Select Your Tenant Email</option>
                        @foreach($tenants as $tenant)
                            <option value="{{ $tenant->email }}">{{ $tenant->email }}</option>
                        @endforeach
                    </select>
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Room No.</label>
                    <select name="room_no" id="room_no" class="form-control">
                        <option selected disabled>Select Your Room Number</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->number }}">{{ $room->number }}</option>
                        @endforeach
                    </select>
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Bed No.</label>
                    <select name="bed_no" id="bed_no" class="form-control">
                        <option selected disabled>Select Your Bed Number</option>
                        @foreach($beds as $bed)
                            <option value="{{ $bed->bed_no }}">{{ $bed->bed_no }}</option>
                        @endforeach
                    </select>
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Date Start</label>
                    <select class="form-control" name="date_start">
                      <option id="date"></option>
                  </select>
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Due date</label>
                    <input type="date" name="due_date" class="form-control" placeholder="ex. 6000.00">
                  </div></div>

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
