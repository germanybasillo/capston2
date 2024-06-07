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
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Homies
                    <small class="float-right">Date: <span id="current-date-time"></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <address>
                    <strong>Admin</strong><br>
                    Tagum Davao Del Norte<br>
                    Phone:+63 9944398759<br>
                    Email:Homies@Homies.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <address><div class="form-group">
                    <label>Tenant Email</label>
                    <select name="email" id="email" class="form-control">
                    <option selected disabled>Select Your Tenant Email</option>
                     @foreach($tenants as $tenant)
                    <option value="{{ $tenant->email }}">{{ $tenant->email }}</option>
                    @endforeach
                    </select></address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b><div class="form-group">
                    <label>Invoice</label>
                    <input type="text" name="invoice" class="form-control" placeholder="ex. #007612">
                  </div></b>
                  <b><div class="form-group">
                    <label>Due Date</label>
                    <select name="date" class="form-control">
                      <option selected disabled>Select Your Due Date</option>
                       @foreach($assigns as $assign)
                      <option value="{{ $assign->due_date }}">{{ $assign->due_date }}</option>
                      @endforeach
                      </select>
                  </div></b><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Description</th>
                      <th>Month</th>
                      <th>Year</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><input type="text"></td>
                      <td><input type="text"></td>
                      <td><input type="text"></td>
                      <td><input type="text"></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../assets/img/credit/paypal2.png" alt="Paypal">
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   Naay Gcash ahhaahahahahahahahahaah
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due <input type="text"></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><input type="text"></td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td><input type="text"></td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><input type="text"></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="javascript:void(0);" onclick="window.print();" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    </x-slot>
    <x-partials.sidebar/>
</x-app-layout>
