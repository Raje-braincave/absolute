@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="row mb-3">
            <div class="col-lg-12 text-end mb-3">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-pills nav-pills-success" style="border: none;" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#individual"
                                role="tab" aria-controls="pills-individual" aria-selected="true">Residential</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#company" role="tab"
                                aria-controls="pills-company" aria-selected="false">Commercial</a>
                        </li>
                        <div class="search-bar ml-3">
                            <input type="text" placeholder="Search">
                            <i class="search-icon text-muted mdi mdi-table-search"></i>
                        </div>
                    </ul>
                    <div>

                        <div class="btn-wrapper" style="margin-bottom: 0.5rem;">
                            <button type="button" class="btn btn-info btn-sm icon-btn ms-2 mb-2" data-bs-toggle="modal"
                                data-bs-target="#add" data-whatever="@mdo">
                                <i class="ti-plus"></i>
                            </button>
                            <!-- <button type="button" class="btn btn-primary" >Primary</button> -->
                            <!-- <a href="#" class="btn btn-primary text-white me-0" data-bs-toggle="modal"
                    data-bs-target="#exampleModal-4" data-whatever="@mdo"><i class="icon-plus"></i> Add User </a> -->
                            <div class="modal fade" id="add" tabindex="-1" role="dialog"
                                aria-labelledby="ModalLabel" aria-hidden="true" style="padding-left: 17px;">
                                <div class="modal-dialog modal-lg" role="document" style="width:80%">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Add Customer</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-4 text-start">
                                                    <label for="exampleFormControlSelect2" class="col-form-label">Select
                                                        Customer
                                                        Type</label>
                                                    <select class="form-control" id="myselection">
                                                        <option>Select Option</option>
                                                        <option value="One">Residential</option>
                                                        <option value="Two">Commercial</option>

                                                    </select>

                                                </div>
                                                <div id="showOne" class="myDiv" style="display: none;">
                                                    <div>
                                                        <form class="row text-left">
                                                            <div class="form-group col-md-4 text-start">
                                                                <label for="message-text" class="col-form-label">Person
                                                                    Incharge Name <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="Enter Name">
                                                            </div>

                                                            <div class="form-group col-md-4 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Nickname</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="Enter Name">
                                                            </div>
                                                            <div class="form-group col-md-4 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Mobile
                                                                    Number</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="Enter Mobile Number">
                                                            </div>
                                                            <div class="form-group col-md-4 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Fax Number</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="Enter Fax Number">
                                                            </div>
                                                            <div class="form-group col-md-4  text-start">
                                                                <label for="message-text" class="col-form-label">Email
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="Enter Email">
                                                            </div>

                                                            <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="tab-one"
                                                                        data-bs-toggle="tab" href="#one"
                                                                        role="tab" aria-controls="one"
                                                                        aria-selected="false">Additional Contact</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="tab-two"
                                                                        data-bs-toggle="tab" href="#two"
                                                                        role="tab" aria-controls="two"
                                                                        aria-selected="false">Additional Info</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " id="tab-three"
                                                                        data-bs-toggle="tab" href="#three"
                                                                        role="tab" aria-controls="three"
                                                                        aria-selected="true">Delivery Address</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " id="tab-four"
                                                                        data-bs-toggle="tab" href="#four"
                                                                        role="tab" aria-controls="four"
                                                                        aria-selected="true">Billing Address </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content" style="border: none;">
                                                                <div class="tab-pane fade active show" id="one"
                                                                    role="tabpanel" aria-labelledby="tab-one">
                                                                    <div class="row">
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Your Person Incharge
                                                                                Name
                                                                            </label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Person Incharge Name">
                                                                        </div>
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Mobile Number:
                                                                            </label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Mobile Number:
                                                                                          ">
                                                                        </div>
                                                                        <div class="form-group col-2 mt-auto">

                                                                            <button type="button"
                                                                                class="btn btn-primary btn-icon-text "
                                                                                style="padding: 0.375rem 0.75rem;">
                                                                                <i
                                                                                    class="ti-plus btn-icon-prepend m-0"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="two" role="tabpanel"
                                                                    aria-labelledby="tab-two">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="row">
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Credit limit
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name"
                                                                                        placeholder="Credit limit 
                                                                                                      ">
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Payment
                                                                                        terms </label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name"
                                                                                        placeholder="Payment terms 
                                                                                                  ">
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-icon-text">
                                                                                        Save</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="row">
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Driver</label>
                                                                                    <select class="form-control"
                                                                                        id="myselection">
                                                                                        <option>Select Option</option>
                                                                                        <option>One</option>
                                                                                        <option>Two</option>
                                                                                        <option>Three</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Remark</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name"
                                                                                        placeholder="Payment terms 
                                                                                              ">
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Status</label>
                                                                                    <select class="form-control"
                                                                                        id="myselection">
                                                                                        <option>Select Option</option>
                                                                                        <option>One</option>
                                                                                        <option>Two</option>
                                                                                        <option>Three</option>
                                                                                    </select>

                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-icon-text">
                                                                                        Save</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade " id="three"
                                                                    role="tabpanel" aria-labelledby="tab-three">
                                                                    <div class="row" id="div"
                                                                        style="display: none;">
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Postal Code</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Code">
                                                                        </div>
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Address">
                                                                        </div>

                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">City</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter City">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-3"
                                                                        style="justify-content: space-between;">
                                                                        <div class="m-1">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-icon-text"
                                                                                onClick="addBtn()">
                                                                                <i
                                                                                    class="ti-plus btn-icon-prepend m-0"></i></button>
                                                                        </div>


                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="1"
                                                                                                id="1"
                                                                                                default=""
                                                                                                address=""
                                                                                                checked=""> <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade " id="four"
                                                                    role="tabpanel" aria-labelledby="tab-four">
                                                                    <div class="row" id="div2"
                                                                        style="display: none;">
                                                                        <div class="col-12">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input">
                                                                                Same as delivery address
                                                                                <i class="input-helper"></i></label>
                                                                        </div>
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Postal Code</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Code">
                                                                        </div>
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Address">
                                                                        </div>

                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">City</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter City">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-3"
                                                                        style="justify-content: space-between;">
                                                                        <div class="m-1">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-icon-text"
                                                                                onClick="addBtn2()">
                                                                                <i
                                                                                    class="ti-plus btn-icon-prepend m-0"></i></button>
                                                                        </div>


                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="2"
                                                                                                id="2" checked
                                                                                                Default Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="showTwo" class="myDiv" style="display: none;">
                                                    <div>
                                                        <form class="row text-left">
                                                            <div class="form-group col-4 text-start">
                                                                <label for="message-text" class="col-form-label">UEN<span
                                                                        style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="Enter ID Number">
                                                            </div>

                                                            <div class="form-group col-4 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Group Company
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name"
                                                                    placeholder="Enter Group Company Name">
                                                            </div>
                                                            <div class="form-group col-4 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Individual Company
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name"
                                                                    placeholder="Individual Company Name">
                                                            </div>
                                                            <div class="form-group col-12 text-start">
                                                                <div class="row">
                                                                    <div class="form-group col-4">
                                                                        <label for="exampleFormControlSelect2"
                                                                            class="col-form-label">Branch</label>
                                                                        <select class="form-control" id="myselection">
                                                                            <option>Select Option</option>
                                                                            <option value="One">1</option>
                                                                            <option value="Two">2</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-6 mt-auto">

                                                                        <button type="button"
                                                                            class="btn btn-primary btn-icon-text "
                                                                            style="padding: 0.375rem 0.75rem;"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-branch"
                                                                            data-whatever="@getbootstrap">
                                                                            <i
                                                                                class="ti-plus btn-icon-prepend m-0"></i></button>
                                                                    </div>
                                                                </div>


                                                            </div>


                                                            <ul class="nav nav-tabs mt-3" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="tab-one"
                                                                        data-bs-toggle="tab" href="#one1"
                                                                        role="tab" aria-controls="one"
                                                                        aria-selected="false">Company Info</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="tab-two"
                                                                        data-bs-toggle="tab" href="#two2"
                                                                        role="tab" aria-controls="two"
                                                                        aria-selected="false">Additional Contact</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " id="tab-three"
                                                                        data-bs-toggle="tab" href="#three3"
                                                                        role="tab" aria-controls="three"
                                                                        aria-selected="true">Additional Info</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " id="tab-four"
                                                                        data-bs-toggle="tab" href="#four4"
                                                                        role="tab" aria-controls="four"
                                                                        aria-selected="true">Delivery Address</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " id="tab-four"
                                                                        data-bs-toggle="tab" href="#five5"
                                                                        role="tab" aria-controls="four"
                                                                        aria-selected="true">Billing Address </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content" style="border: none;">
                                                                <div class="tab-pane fade active show" id="one1"
                                                                    role="tabpanel" aria-labelledby="tab-one">
                                                                    <div class="row">
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Person Incharge Name
                                                                                <span style="color:red">*</span></label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Name">
                                                                        </div>
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="exampleFormControlSelect2"
                                                                                class="col-form-label">Mobile
                                                                                Number</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Mobile Number">
                                                                        </div>
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="exampleFormControlSelect2"
                                                                                class="col-form-label">Fax
                                                                                Number</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Fax Number">
                                                                        </div>
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Email </label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="two2" role="tabpanel"
                                                                    aria-labelledby="tab-two">
                                                                    <div class="row">
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Your Person Incharge
                                                                                Name
                                                                            </label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Person Incharge Name">
                                                                        </div>
                                                                        <div class="form-group col-4 text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Mobile Number:
                                                                            </label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Mobile Number:
                                                                                            ">
                                                                        </div>
                                                                        <div class="form-group col-2 mt-auto">

                                                                            <button type="button"
                                                                                class="btn btn-primary btn-icon-text">
                                                                                <i
                                                                                    class="ti-plus btn-icon-prepend"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade " id="three3"
                                                                    role="tabpanel" aria-labelledby="tab-three">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="row">
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Credit limit
                                                                                    </label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name"
                                                                                        placeholder="Credit limit 
                                                                                                      ">
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Payment
                                                                                        terms </label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name"
                                                                                        placeholder="Payment terms 
                                                                                                  ">
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Driver</label>
                                                                                    <select class="form-control"
                                                                                        id="myselection">
                                                                                        <option>GST Charges</option>
                                                                                        <option>One</option>
                                                                                        <option>Two</option>
                                                                                        <option>Three</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-icon-text">
                                                                                        Save</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="row">
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Driver</label>
                                                                                    <select class="form-control"
                                                                                        id="myselection">
                                                                                        <option>Select Option</option>
                                                                                        <option>One</option>
                                                                                        <option>Two</option>
                                                                                        <option>Three</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Remark</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name"
                                                                                        placeholder="Payment terms 
                                                                                              ">
                                                                                </div>
                                                                                <div class="form-group col-6 text-start">
                                                                                    <label for="message-text"
                                                                                        class="col-form-label">Status</label>
                                                                                    <select class="form-control"
                                                                                        id="myselection">
                                                                                        <option>Select Option</option>
                                                                                        <option>One</option>
                                                                                        <option>Two</option>
                                                                                        <option>Three</option>
                                                                                    </select>

                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-icon-text">
                                                                                        Save</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade " id="four4"
                                                                    role="tabpanel" aria-labelledby="tab-four">
                                                                    <div class="row" id="div3"
                                                                        style="display: none;">

                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Postal Code</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Code">
                                                                        </div>
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Address">
                                                                        </div>

                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">City</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter City">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-3"
                                                                        style="justify-content: space-between;">
                                                                        <div class="m-1">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-icon-text"
                                                                                onClick="addBtn3()">
                                                                                <i
                                                                                    class="ti-plus btn-icon-prepend m-0"></i></button>
                                                                        </div>


                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="3"
                                                                                                id="3" checked
                                                                                                Default Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade " id="five5"
                                                                    role="tabpanel" aria-labelledby="tab-four">
                                                                    <div class="row" id="div4"
                                                                        style="display: none;">
                                                                        <div class="col-12">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input">
                                                                                Same as delivery address
                                                                                <i class="input-helper"></i></label>
                                                                        </div>
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Postal Code</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Code">
                                                                        </div>
                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter Address">
                                                                        </div>

                                                                        <div class="form-group col-md-4  text-start">
                                                                            <label for="message-text"
                                                                                class="col-form-label">City</label>
                                                                            <input type="text" class="form-control"
                                                                                id="recipient-name"
                                                                                placeholder="Enter City">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mt-3"
                                                                        style="justify-content: space-between;">
                                                                        <div class="m-1">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-icon-text"
                                                                                onClick="addBtn4()">
                                                                                <i
                                                                                    class="ti-plus btn-icon-prepend m-0"></i></button>
                                                                        </div>


                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" checked
                                                                                                Default Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-1 text-start m-0">
                                                                            <div class="address-card shadow">
                                                                                <h5>Sky Enterprice</h5>
                                                                                <p>8 Shopping Centre, 9 Bishan Place,
                                                                                    Singapore 579837</p>
                                                                                <div class="form-group mt-3 m-0">
                                                                                    <div
                                                                                        class="form-check form-check-primary">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio"
                                                                                                class="form-check-input"
                                                                                                name="ExampleRadio1"
                                                                                                id="ExampleRadio1" Default
                                                                                                Address <i
                                                                                                class="input-helper"></i>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-0">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-top d-flex justify-content-end">


                            </div>

                            <div class="tab-content p-0" id="pills-tabContent" style="border: none;">
                                <div class="tab-pane fade active show" id="individual" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th> Status </th>
                                                    <th> Customer ID </th>
                                                    <th> Customer name </th>
                                                    <th> Contact Contact </th>
                                                    <th> Contact Address </th>
                                                    <th> Outstanding Amount </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="py-1">
                                                        <label class="badge badge-danger">Pending</label>
                                                    </td>
                                                    <td class="py-1" data-bs-toggle="modal" data-bs-target="#view"
                                                        data-whatever="@mdo" style="cursor: pointer;"> ABC0001 </td>
                                                    <td> ABC Pvt. Lte. </td>
                                                    <td> +91 9758697820 </td>
                                                    <td> Ahmedabad </td>
                                                    <td> 2000 </td>

                                                    <!-- <td><i class="menu-icon mdi mdi-pencil-box-outline" style="font-size: 20px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#edit" data-whatever="@mdo"></i><i class="menu-icon mdi mdi-delete-outline" style="font-size: 20px; cursor: pointer;"></i></td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                                            aria-labelledby="ModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalLabel">Edit User</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row text-left">
                                                            <div class="form-group col-6 text-start">
                                                                <label for="recipient-name" class="col-form-label">Upload
                                                                    Image:</label>
                                                                <input type="file" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text" class="col-form-label">Your
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" placeholder="admin @123">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text" class="col-form-label">Your
                                                                    Email</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Email ID">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text" class="col-form-label">Contact
                                                                    Number</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Contact Number">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text"
                                                                    class="col-form-label">Password</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="******">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Gender</label>
                                                                <select class="form-control">
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-12 text-start">
                                                                <label for="message-text"
                                                                    class="col-form-label">Address</label>
                                                                <textarea class="form-control" id="message-text" placeholder="Address"></textarea>
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label class="col-form-label">City</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="City">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Country</label>
                                                                <select class="form-control">
                                                                    <option>India</option>
                                                                    <option>Singapore</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-12 text-start">
                                                                <label for="message-text"
                                                                    class="col-form-label">Remark</label>
                                                                <textarea class="form-control" id="message-text" placeholder="Remark"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success">Submit</button>
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-0" id="company" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="table-responsive">
                                        <table class="table table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th> Status </th>
                                                    <th> Customer ID </th>
                                                    <th> Customer name </th>
                                                    <th> Contact Contact </th>
                                                    <th> Contact Address </th>
                                                    <th> Outstanding Amount </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="py-1">
                                                        <label class="badge badge-danger">Pending</label>
                                                    </td>
                                                    <td class="py-1" data-bs-toggle="modal" data-bs-target="#view"
                                                        data-whatever="@mdo" style="cursor: pointer;"> ABC0001 </td>
                                                    <td> ABC Pvt. Lte. </td>
                                                    <td> +91 9758697820 </td>
                                                    <td> Ahmedabad </td>
                                                    <td> 2000 </td>

                                                    <!-- <td><i class="menu-icon mdi mdi-pencil-box-outline" style="font-size: 20px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#edit" data-whatever="@mdo"></i><i class="menu-icon mdi mdi-delete-outline" style="font-size: 20px; cursor: pointer;"></i></td> -->
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit-customer" tabindex="-1" aria-labelledby="ModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Edit Customer</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="row">
                                <div class="form-group col-6 text-start">
                                    <label for="message-text" class="col-form-label">
                                        Company name </label>
                                    <input type="text" class="form-control" placeholder="Company name">
                                </div>
                                <div class="form-group col-6 text-start">
                                    <label for="message-text" class="col-form-label">Mobile
                                        Number:
                                    </label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Mobile Number:
                      ">
                                </div>
                                <div class="form-group col-6 text-start">
                                    <label for="message-text" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Email ID">
                                </div>
                                <div class="form-group col-6 text-start">
                                    <label for="message-text" class="col-form-label">Address</label>
                                    <textarea class="form-control" id="message-text" placeholder="Address"></textarea>
                                </div>
                                <div class="form-group col-6 text-start">
                                    <label for="message-text" class="col-form-label">Postal Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Postal Code">
                                </div>
                                <div class="form-group col-6 text-start">
                                    <label for="exampleFormControlSelect2" class="col-form-label">Country</label>
                                    <select class="form-control">
                                        <option>India</option>
                                        <option>Singapore</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="add-branch" tabindex="-1" aria-labelledby="ModalLabel" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document" style="width: 70% !important;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Add Branch</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="row">
                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">
                                        UEN <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter ID Number">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">Branch Name<span
                                            style="color:red">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Enter Name
                      ">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">Person Incharge Name <span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">Nickname <span
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="exampleFormControlSelect2" class="col-form-label">Mobile
                                        Number</label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Enter Mobile Number">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="exampleFormControlSelect2" class="col-form-label">Fax
                                        Number</label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Enter Fax Number">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">Email </label>
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Enter Email">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">Address</label>
                                    <textarea class="form-control" id="message-text" placeholder="Address"></textarea>
                                </div>

                                <div class="form-group col-4 text-start">
                                    <label for="message-text" class="col-form-label">Postal Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Postal Code">
                                </div>
                                <div class="form-group col-4 text-start">
                                    <label for="exampleFormControlSelect2" class="col-form-label">Country</label>
                                    <select class="form-control">
                                        <option>India</option>
                                        <option>Singapore</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">View Customer Details</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="row text-left">
                                <div class="col-md-3 pe-0">
                                    <div class="card box-shadow card-rounded">
                                        <div class="card-body">
                                            <h5 class="mb-0" style="color: #1F3BB3;"><b>ABC Pvt. Lte.</b><label
                                                    class="badge badge-danger ms-2">Pending</label>
                                            </h5>
                                            <p class="card-p d-flex align-items-center">
                                                <i class="mdi mdi-phone-outline menu-icon me-2"
                                                    style="font-size: 14px;"></i>+91
                                                9758697820
                                            </p>
                                            <p class="card-p  d-flex align-items-center">
                                                <i class="mdi mdi-email-outline menu-icon me-2"
                                                    style="font-size: 14px;"></i>abc@pvtltd.com
                                            </p>
                                            <p class="card-p d-flex">
                                                <i class="menu-icon mdi mdi-google-maps me-2"
                                                    style="font-size: 14px;"></i>103 Rasadhi
                                                Appartment Wadaj Ahmedabad 380004.
                                            </p>
                                            <div class="d-flex mt-2">
                                                <div class="me-4 card-p" style="color: green; cursor: pointer;"
                                                    data-bs-toggle="modal" data-bs-target="#edit-customer"
                                                    data-whatever="@getbootstrap">
                                                    <i class="mdi mdi-pencil menu-icon me-2"></i>Edit
                                                </div>

                                                <div class="card-p" style="color: red; cursor: pointer; ">
                                                    <i class="mdi mdi-delete menu-icon me-2"></i>Delete
                                                </div>
                                            </div>
                                            <hr>
                                            <h5 class="mb-0" style="color: #1F3BB3;">

                                                <b>Details</b>
                                                </h4>
                                                <label for="" class="mb-0">Outstanding Amount</label>
                                                <p class="m-0 card-p">2000</p>
                                                <label for="" class="mt-2 mb-0 ">UEN</label>
                                                <p class="m-0">001212005</p>
                                                <label for="" class="mt-2 mb-0">Person Incharge</label>
                                                <p class="m-0">Mr. Devang</p>
                                                <label for="" class="mt-2 mb-0 ">Driver</label>
                                                <p class="m-0">Dhaval</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card box-shadow card-rounded">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs nav-tabs-bottom" style="border: none;"
                                                role="tablist">
                                                <li class="nav-item pb-3">
                                                    <a class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill" href="#view-1" role="tab"
                                                        aria-controls="pills-home" aria-selected="true">Past & Current
                                                        Quotation</a>
                                                </li>
                                                <li class="nav-item pb-3">
                                                    <a class="nav-link " id="pills-profile-tab" data-bs-toggle="pill"
                                                        href="#view-2" role="tab" aria-controls="pills-profile"
                                                        aria-selected="false">Invoice</a>
                                                </li>
                                                <li class="nav-item pb-3">
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                        href="#view-3" role="tab" aria-controls="pills-contact"
                                                        aria-selected="false">Service Order</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                        href="#view-4" role="tab" aria-controls="pills-contact"
                                                        aria-selected="false">Service Address</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                        href="#view-5" role="tab" aria-controls="pills-contact"
                                                        aria-selected="false">Billing Address</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                        href="#view-6" role="tab" aria-controls="pills-contact"
                                                        aria-selected="false">Statement Of
                                                        Accounts</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content p-0" id="pills-tabContent" style="border: none;">
                                                <div class="tab-pane fade show active" id="view-1" role="tabpanel"
                                                    aria-labelledby="pills-home-tab">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sl No.</th>
                                                                    <th>Quotation No.</th>
                                                                    <th>Item Name</th>
                                                                    <th>Date</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>12345</td>
                                                                    <td>Test</td>
                                                                    <td>20-12-2022</td>
                                                                    <td>2000</td>
                                                                    <td>
                                                                        <label
                                                                            class="badge badge-success">Completed</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="view-2" role="tabpanel"
                                                    aria-labelledby="pills-profile-tab">
                                                    <div class="d-flex p-3 justify-content-between mt-3 border rounded">
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">test-1</label>
                                                            <p>$ 2000</p>
                                                        </div>
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">22 May 2022</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex p-3 justify-content-between mt-2 border rounded">
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">test-2</label>
                                                            <p>$ 4000</p>
                                                        </div>
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">04 Jun 2022</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="view-3" role="tabpanel"
                                                    aria-labelledby="pills-contact-tab">
                                                    <div class="d-flex p-3 justify-content-between mt-3 border rounded">
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">test-1</label>
                                                            <p>$ 2000</p>
                                                        </div>
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">22 May 2022</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex p-3 justify-content-between mt-2 border rounded">
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">test-2</label>
                                                            <p>$ 4000</p>
                                                        </div>
                                                        <div class="my-auto">
                                                            <label for="exampleInputEmail1"
                                                                class="mb-0 text-black fw-bold "
                                                                style="font-size: 14px">04 Jun 2022</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="view-4" role="tabpanel"
                                                    aria-labelledby="pills-contact-tab">
                                                    <div class="row  mt-3">
                                                        <div class="text-start col-6">
                                                            <div class="address-card shadow">
                                                                <h5>Sky Enterprice</h5>
                                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                                <div class="form-group mt-3 m-0">
                                                                    <div class="form-check form-check-primary">
                                                                        <label class="form-check-label">
                                                                            <input type="radio"
                                                                                class="form-check-input"
                                                                                name="ExampleRadio1" id="ExampleRadio1"
                                                                                default="" address=""
                                                                                <i="">
                                                                            <i class="input-helper"></i>
                                                                            <i class="input-helper"></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="view-5" role="tabpanel"
                                                    aria-labelledby="pills-contact-tab">
                                                    <div class="row  mt-3">
                                                        <div class="text-start col-6">
                                                            <div class="address-card shadow">
                                                                <h5>Sky Enterprice</h5>
                                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                                <div class="form-group mt-3 m-0">
                                                                    <div class="form-check form-check-primary">
                                                                        <label class="form-check-label">
                                                                            <input type="radio"
                                                                                class="form-check-input"
                                                                                name="ExampleRadio1" id="ExampleRadio1"
                                                                                default="" address=""
                                                                                <i="">
                                                                            <i class="input-helper"></i>
                                                                            <i class="input-helper"></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="view-6" role="tabpanel"
                                                    aria-labelledby="pills-contact-tab">
                                                    <ul class="nav nav-pills nav-pills-success mt-3" id="pills-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-home-tab"
                                                                data-bs-toggle="pill" href="#view-inner-1"
                                                                role="tab" aria-controls="pills-home"
                                                                aria-selected="true">Standard SOA</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-profile-tab"
                                                                data-bs-toggle="pill" href="#view-inner-2"
                                                                role="tab" aria-controls="pills-profile"
                                                                aria-selected="false">Debit SOA</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content p-0" style="border: none;"
                                                        id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="view-inner-1"
                                                            role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <div class="row">
                                                                <div class="form-group col-4">
                                                                    <label for="exampleFormControlSelect2"
                                                                        class="col-form-label">Search By <span
                                                                            style="color:red"></span>
                                                                    </label>
                                                                    <select class="form-control">
                                                                        <option>Day</option>
                                                                        <option>Month</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="form-group col-4">
                                                                    <label for="exampleFormControlSelect2"
                                                                        class="col-form-label">Start Date</label>
                                                                    <input type="date" class="form-control">
                                                                </div>
                                                                <div class="form-group col-4">
                                                                    <label for="exampleFormControlSelect2"
                                                                        class="col-form-label">End Date</label>
                                                                    <input type="date" class="form-control">
                                                                </div>
                                                                <div class="form-group col-4 mt-auto">
                                                                    <button id="searchstatement"
                                                                        class="btn btn-primary "
                                                                        type="button">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="view-inner-2" role="tabpanel"
                                                            aria-labelledby="pills-profile-tab">
                                                            <div class="row">
                                                                <div class="form-group col-4">
                                                                    <label for="exampleFormControlSelect2"
                                                                        class="col-form-label">Search By <span
                                                                            style="color:red"></span>
                                                                    </label>
                                                                    <select class="form-control">
                                                                        <option>Day</option>
                                                                        <option>Month</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="form-group col-4">
                                                                    <label for="exampleFormControlSelect2"
                                                                        class="col-form-label">Start Date</label>
                                                                    <input type="date" class="form-control">
                                                                </div>
                                                                <div class="form-group col-4">
                                                                    <label for="exampleFormControlSelect2"
                                                                        class="col-form-label">End Date</label>
                                                                    <input type="date" class="form-control">
                                                                </div>
                                                                <div class="form-group col-4 mt-auto">
                                                                    <button id="searchstatement"
                                                                        class="btn btn-primary "
                                                                        type="button">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection






