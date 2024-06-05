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
                        <h1 class="m-0 text-dark"><span class="fa fa-home"></span> Rooms</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/index">Home</a></li>
                           <li class="breadcrumb-item active">Rooms</li>
                        </ol>
                     </div>
                     <a class="btn btn-sm elevation-2" href="/rooms/create" style="margin-top: 20px;margin-left: 10px;background-color: #05445E;color: #ddd;"><i
                           class="fa fa-user-plus"></i>
                        Add New</a>
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
                                 <th>Room Number</th>
                                 <th>Description</th>
                                 <th>Image</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                             @foreach ($rooms as $room)
                              <tr>
                                 <td>{{$room->number}}</td>
                                 <td>{{$room->description}}</td>
                                 <td>{{$room->roompic}}</td>
                                 <td class="text-right">
                                    <a class="btn btn-sm btn-success" href="/rooms/{{$room->id}}"><i
                                          class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-alt"></i></a>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </section>
         </div>
        </div>
        <div id="deleteModal" class="modal animated rubberBand delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form id="deleteForm" action="{{ route('rooms.destroy', $room->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body text-center">
                            <img src="{{ asset('style_account/images/logo.png') }}" alt="asd" width="50" height="46">
                            <h3>Are you sure you want to delete this Operator?</h3>
                            <div class="m-t-20">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>
</x-slot>

<x-partials.sidebar/>
</x-app-layout>