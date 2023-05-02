@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one" data-bs-toggle="tab" href="#one-outer"
                                    role="tab" aria-controls="one" aria-selected="false">Role Management</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="one-outer" role="tabpanel" aria-labelledby="tab-one">
                                <div class="row mb-3">
                                    <div class="col-lg-12 text-end">
                                        <div class="d-sm-flex align-items-center justify-content-between">
                                           
                                            <div class="right">
                                                <!-- <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#add" data-whatever="@mdo"><i class="ti-plus btn-icon-prepend"></i> Create Quotation </button> -->
                                                <button type="button" class="btn btn-primary btn-icon-text"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal-4">
                                                    <i class="ti-plus btn-icon-prepend"></i>Add New  </button>
                                                <div class="modal fade" id="exampleModal-4" tabindex="-1"
                                                    aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">New Quotation</h5>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span> 
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row text-left" method="POST" action="">
                                                                    @csrf
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link active" id="tab-one"
                                                                                data-bs-toggle="tab" href="#one"
                                                                                role="tab" aria-controls="one"
                                                                                aria-selected="false">Management</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane fade active show"
                                                                            id="one" role="tabpanel"
                                                                            aria-labelledby="tab-one">
                                                                            <div class="row">
                                                                                
                                                                                <div class="col-8">
                                                                                    <div class="box-2 row p-3">
                                                                                      


                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-text"
                                                                                                class="col-form-label">
                                                                                                First Name </label>
                                                                                            <input type="text"
                                                                                                class="form-control" name="first_name"
                                                                                                placeholder="First name">
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-text"
                                                                                                class="col-form-label">
                                                                                                Last Name</label>
                                                                                            <input type="text"
                                                                                                class="form-control" name="last_name"
                                                                                                placeholder="Last Name">
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label
                                                                                                for="exampleFormControlSelect2"
                                                                                                class="col-form-label">Gender</label>
                                                                                            <select class="form-control" name="gender">
                                                                                                <option value="male">Male</option>
                                                                                                <option value="female">Female</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-text"
                                                                                                class="col-form-label">
                                                                                                Email</label>
                                                                                            <input type="email"
                                                                                                class="form-control" name="email"
                                                                                                placeholder="email">
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-t   ext"
                                                                                                class="col-form-label">Address
                                                                                            </label>
                                                                                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-text"
                                                                                                class="col-form-label">Mobile
                                                                                                Number:
                                                                                            </label>
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                               name="phone_no"
                                                                                                placeholder="Mobile Number:">
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-text"
                                                                                                class="col-form-label">Password</label>
                                                                                            <input type="text" name="password"
                                                                                                class="form-control"
                                                                                                id="recipient-name"
                                                                                                placeholder="Passwod:">
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-6 text-start">
                                                                                            <label for="message-text"
                                                                                                class="col-form-label">Confirm
                                                                                                Password</label>
                                                                                            <input type="text" name="password"
                                                                                                class="form-control"
                                                                                               
                                                                                                placeholder="Confirm Password:">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>



                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <button  type="submit" 
                                                                            class="btn btn-primary btn-icon-text">
                                                                            <i class=""></i>
                                                                            save
                                                                        </button>
        
                                                                        <button type="button" class="btn btn-light"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th> Sr No </th>
                                                        <th> Name </th>
                                                        <th> Phone no </th>
                                                        <th> Gender </th>
                                                        <th> Address </th>
                                                        <th> Status </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($managements as $management)
                                                        
                                                   
                                                    <tr>
                                                        <td class="py-1">{{$management->id}}</td>
                                                        <td>{{$management->first_name}}</td>
                                                        <td>{{$management->phone_no}} </td>
                                                        <td>{{$management->gender}} </td>
                                                        <td>{{$management->address}} </td>
                                                        <td>{{$management->status}} </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
