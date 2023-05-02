@extends('layouts.main')
@section('content')

<div class="">
    <form class="row text-left" method="POST" action="{{url('/updatemanagement',$edit_usermanagements->id)}}">
        @csrf
        
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
                                    value="{{$edit_usermanagements->first_name}}">
                            </div>
                            <div
                                class="form-group col-6 text-start">
                                <label for="message-text"
                                    class="col-form-label">
                                    Last Name</label>
                                <input type="text"
                                    class="form-control" name="last_name"
                                    value="{{$edit_usermanagements->last_name}}">
                            </div>
                            <div
                                class="form-group col-6 text-start">
                                <label
                                    for="exampleFormControlSelect2"
                                    class="col-form-label">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="male"{{$edit_usermanagements->gender}}>Male</option>
                                    <option value="female"{{$edit_usermanagements->gender}}>Female</option>
                                </select>
                            </div>
                            <div
                                class="form-group col-6 text-start">
                                <label for="message-text"
                                    class="col-form-label">
                                    Email</label>
                                <input type="email"
                                    class="form-control" name="email"
                                    value="{{$edit_usermanagements->email}}">
                            </div>
                            <div
                                class="form-group col-6 text-start">
                                <label for="message-t   ext"
                                    class="col-form-label">Address
                                </label>
                                <textarea class="form-control" name="address" placeholder="Address" >{{$edit_usermanagements->address}}</textarea>
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
                                   value="{{$edit_usermanagements->phone_no}}">
                            </div>
                            <div
                                class="form-group col-6 text-start">
                                <label for="message-text"
                                    class="col-form-label">Password</label>
                                <input type="text" name="password"
                                    class="form-control"
                                    id="recipient-name"
                                    value="{{$edit_usermanagements->password}}">
                            </div>
                            <div
                                class="form-group col-6 text-start">
                                <label for="message-text"
                                    class="col-form-label">Confirm
                                    Password</label>
                                <input type="text" name="password" class="form-control">
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
                Update
            </button>
        </div>
    </form>
</div>
@endsection