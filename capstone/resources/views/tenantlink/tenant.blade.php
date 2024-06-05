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
                       <h1 class="m-0 text-dark"><span class="fa fa-user-tie"></span> Tenants</h1>
                    </div>
                    <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/index">Home</a></li>
                          <li class="breadcrumb-item active">Tenants</li>
                       </ol>
                    </div>
                    <a class="btn btn-sm elevation-2" href="/tenants/create" style="margin-top: 20px;margin-left: 10px;background-color: #05445E;color: #ddd;">
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
                                <th>Profile</th>
                                <th>Tenant Info</th>
                                <th>Address</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($tenants as $tenant)
                             <tr>
                                <td><img src="{{ asset('path/to/profile/images/' . $tenant->profile) }}" alt="Profile Picture" width="50" height="50"></td>
                                <td>
                                   <p class="info">Name: <b>{{$tenant->fname." ".$tenant->mname." ".$tenant->lname}}</b></p>
                                   <p class="info"><small>Contact: <b>{{$tenant->contact}}</b></small></p>
                                   <p class="info"><small>Email: <b>{{$tenant->email}}</b></small></p>
                                   <p class="info"><small>Gender: <b>{{$tenant->gender}}</b></small></p>
                                </td>
                                <td>{{$tenant->address}}</td>
                                <td class="text-right">
                                   <a class="btn btn-sm btn-success" href="/tenants/{{$tenant->id}}"><i class="fa fa-user-edit"></i></a>
                                   <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$tenant->id}}"><i class="fa fa-trash-alt"></i></a>
                                </td>
                             </tr>

                             <!-- Delete Modal -->
                             <div id="deleteModal{{$tenant->id}}" class="modal animated rubberBand delete-modal" role="dialog">
                                 <div class="modal-dialog modal-dialog-centered">
                                     <div class="modal-content">
                                         <form id="deleteForm{{$tenant->id}}" action="{{ route('tenants.destroy', $tenant->id) }}" method="post">
                                             @csrf
                                             @method('DELETE')
                                             <div class="modal-body text-center">
                                                 <img src="{{ asset('style_account/images/logo.png') }}" alt="Logo" width="50" height="46">
                                                 <h3>Are you sure you want to delete this Tenant?</h3>
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
