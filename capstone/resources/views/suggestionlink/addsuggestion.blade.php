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
            <h1 class="m-0 text-dark"><span class="fa fa-lightbulb"></span> New Suggestion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Suggestion</li>
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
              <form role="form" id="quickForm" action="{{url('suggestion-store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-8 offset-md-2">
                  <div class="form-group">
                    <label>Tenant Email</label>
                    <select name="email" id="email" class="form-control">
                        <option selected disabled>Select Your Tenant Email</option>
                         @foreach($tenants as $tenant)
                        <option value="{{ $tenant->email }}">{{ $tenant->email }}</option>
                        @endforeach
                        </select>
                  </div></div>
                  <div class="col-md-8 offset-md-2">
                    <div class="form-group">
                      <label>Suggestion</label>
                      <input type="suggestion" name="suggestion" class="form-control" placeholder="Your Text">
                    </div></div>
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                          <label>Date</label>
                          <select class="form-control" name="date">
                            <option id="date"></option>
                        </select>
                    </div></div>
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                          <label>Reply</label>
                    <input type="reply" name="reply" class="form-control" placeholder="Reply.......">
                    </div></div>
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="status">
                            <option>Solve</option>
                            <option>Pending</option>
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
