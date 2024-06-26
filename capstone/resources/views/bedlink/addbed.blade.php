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
            <h1 class="m-0 text-dark">New Bed</h1>
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
              <form role="form" id="quickForm" action="{{url('bed-store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-8 offset-md-2">
                    <div class="form-group">
                        <label for="room_no">Room No.</label>
                        <select name="room_no" id="room_no" class="form-control">
                            <option selected disabled>Select a Room</option>
                            @foreach($rooms as $room)
                                <option value="{{ $room->number }}">{{ $room->number }}</option>
                            @endforeach
                        </select>
                    </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Bed No.</label>
                    <input type="text" name="bed_no" class="form-control" placeholder="ex. BD-0001">
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Daily Rate</label>
                    <input type="text" name="daily_rate" class="form-control" placeholder="ex. 120.00">
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Monthly Rate</label>
                    <input type="text" name="monthly_rate" class="form-control" placeholder="ex. 6000.00">
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  
                    <label>Bed Status</label>
                    <div class="form-group">
                      <select class="form-control" name="bed_status">
                          <option>Occupied</option>
                          <option>Available</option>
                      </select>
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
    </x-slot>

    <x-partials.sidebar/>
</x-app-layout>
