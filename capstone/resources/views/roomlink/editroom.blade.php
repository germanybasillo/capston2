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
            <h1 class="m-0 text-dark">Edit Room</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rooms</li>
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
              <form role="form" id="quickForm" action="{{route('rooms.update',$room->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Room No.</label>
                    <input type="text" name="number" class="form-control" placeholder="ex. RM-0001" value="{{$room->number}}">
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Description</label>
                    <input textarea  class="form-control" name="description" placeholder="ex. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet" value="{{$room->description}}"></textarea>
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Room Picture</label>
                    <input type="file" name="roompic" class="form-control" accept=".jpg,.jpeg,.png,.gif" value="{{$room->roompic}}">
                  </div>
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
    </x-slot>

<x-partials.sidebar/>
</x-app-layout>
