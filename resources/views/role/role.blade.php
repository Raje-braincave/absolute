@extends('layouts.main')
@section('content')
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">New Quotation</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="row text-left" action="{{ url('/create') }}" method="POST">
                @csrf

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row">

                            <div class="col-8">
                                <div class="box-2 row p-3">

                                    <div class="form-group col-6 text-start">

                                    </div>
                                    <div class="form-group col-6 text-start">
                                        <label for="message-text" class="col-form-label">
                                            Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group col-6 text-start">
                                        <button type="submit" class="btn btn-primary">Submit <i
                                                class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <table style="width:100%">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>
                            <a href="{{url('/editrole',$role->id)}}"><button  class="btn btn-success">update<i
                                class="icon-arrow-right14 position-right"></i></button>
                                </a></td>
                        <td><a href="{{url('/deleterole',$role->id)}}"><button  class="btn btn-danger">Delete <i
                            class="icon-arrow-right14 position-right"></i></button></a>
                            </td>
                        
                    </tr>
                @endforeach


            </table>
        </div>
    </div>
@endsection
