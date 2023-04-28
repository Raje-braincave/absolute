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
            <form class="row text-left" action="{{url('/updaterole',$edit_role->id)}}" method="POST">
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
                                        <input type="text" class="form-control" placeholder="name" name="name" value="{{$edit_role->name}}">
                                    </div>
                                    <div class="form-group col-6 text-start">
                                        <button type="submit" class="btn btn-primary">Update <i
                                                class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
