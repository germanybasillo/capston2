<x-app-layout>
    <x-slot name="header">
        <x-partials.header/>
    </x-slot>

    <x-slot name="content">
        <div class="content-wrapper">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><span class="fa fa-file"></span> Payments History</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Payments</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                   <div class="card card-info elevation-2">
                      <br>
                      <div class="col-md-12 table-responsive">
                         <table id="example1" class="table table-bordered table-hover">
                            <thead class="btn-cancel">
                               <tr>
                                 <th>Tenant Email</th>
                                  <th>Payment Amount</th>
                                  <th>Date</th>
                                  <th>Proof of Payment</th>
                                  <th>Remarks</th>
                                  <th>Status</th>
                                  <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                             @foreach($payments as $payment)
                               <tr>
                                 <td>{{$payment->email}}</td>
                                  <td>{{$payment->amount}}</td>
                                  <td>{{$payment->date}}</td>
                                  <td>{{$payment->proof}}</td>
                                  <td>{{$payment->remark}}</td>
                                  <td><span class="badge bg-success">{{$payment->status}}</span></td>
                                  <td class="text-right">
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$payment->id}}"><i
                                       class="fa fa-trash-alt"></i></a>
                                  </td>
                               </tr>
                             <!-- Delete Modal -->
                             <div id="deleteModal{{$payment->id}}" class="modal animated rubberBand delete-modal" role="dialog">
                              <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                      <form id="deleteForm{{$payment->id}}" action="{{ route('payments.show', $payment->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <div class="modal-body text-center">
                                              <img src="{{ asset('style_account/images/logo.png') }}" alt="Logo" width="50" height="46">
                                              <h3>Are you sure you want to delete this Payment-History?</h3>
                                              <div class="m-t-20">
                                                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                         @endforeach
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </section>
     </div>
    </x-slot>

    <x-partials.sidebar/>
</x-app-layout>