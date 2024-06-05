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
                        <h1 class="m-0 text-dark"><span class="fa fa-lightbulb"></span> Suggestions</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Suggestions</li>
                        </ol>
                     </div>
                     <a class="btn btn-sm elevation-2" href="/suggestions/create" style="margin-top: 20px;margin-left: 10px;background-color: #05445E;color: #ddd;">
                        <i class="fa fa-user-plus"></i> Add New
                     </a>
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
                                 <th>Suggestions</th>
                                 <th>Date</th>
                                 <th>Reply from owner</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($suggestions as $suggestion)
                              <tr>
                                 <td>{{$suggestion->email}}</td>
                                 <td>{{$suggestion->suggestion}}</td>
                                 <td>{{$suggestion->date}}</td>
                                 <td>{{$suggestion->reply}}</td>
                                 <td><span class="badge bg-success">{{$suggestion->status}}</span></td>
                                 <td class="text-right">
                                    <a class="btn btn-sm btn-info" href="#" data-toggle="modal" data-target="#edit"><i
                                          class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                          class="fa fa-reply"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                           @endforeach
                        </table>
                     </div>
                  </div>
               </div>
            </section>
         </div>
        </div>
        <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body text-center">
                  <img src="../assets/img/sent.png" alt="" width="50" height="46">
                  <h3>Are you sure want to delete this Operator?</h3>
                  <div class="m-t-20">
                     <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                     <button type="submit" class="btn btn-danger">Delete</button>
                  </div>
               </div>
            </div>
         </div>
        </div>
    </x-slot>

    <x-partials.sidebar/>
</x-app-layout>

