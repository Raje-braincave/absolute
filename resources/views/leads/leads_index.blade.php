@extends('layouts.main')
@section('content')

<div class="content-wrapper">
    <div class="row mb-3">
      <div class="col-lg-12 text-end">
        <div class="d-sm-flex align-items-center justify-content-end border-bottom">
         
          <div>
            <div class="btn-wrapper" style="margin-bottom: 0.5rem;">
              <button type="button" class="btn btn-info btn-icon-text" data-bs-toggle="modal"
                data-bs-target="#add" data-whatever="@mdo">
                <i class="ti-plus btn-icon-prepend"></i> Add Lead </button>
              <!-- <a href="#" class="btn btn-primary text-white me-0" data-bs-toggle="modal"
                            data-bs-target="#exampleModal-4" data-whatever="@mdo"><i class="icon-plus"></i> Add User </a> -->
              <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                aria-hidden="true" style="padding-left: 17px;">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel">Add New Lead</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="row text-left">

                        <div id="smartwizard" style="border: none;">
                          <ul class="nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#step-1">
                                <div class="num">1</div>
                                Customer
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#step-2">
                                <span class="num">2</span>
                                Services
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#step-3">
                                <span class="num">3</span>
                                Address
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="#step-4">
                                <span class="num">4</span>
                                Preview
                              </a>
                            </li>
                          </ul>

                          <div class="tab-content" style="border: none;">
                            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                              <div class="row">
                                <div class="col-md-3 ps-0">
                                  <style>
                                    .customer-box {
                                      padding: 0.5rem;
                                      border: 1px solid #BBBBBB;
                                      border-radius: 10px;
                                    }
                                  </style>
                                  <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist"
                                    style="border: none;">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        href="#residential-view" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Residential</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        href="#commercial-view" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Commercial</a>
                                    </li>

                                  </ul>
                                  <div class="tab-content" id="pills-tabContent"
                                    style="border: none; padding: 0;">
                                    <div class="tab-pane fade show active" id="residential-view" role="tabpanel"
                                      aria-labelledby="pills-home-tab">
                                      <h5>Search By</h5>
                                      <div class="search-bar" style="width: 100%;">
                                        <input type="text" placeholder="Search">
                                        <i class="search-icon text-muted mdi mdi-account-search"></i>
                                      </div>
                                      <div class="d-flex p-2 justify-content-between mt-3 border rounded">
                                        <div class="my-auto">
                                          <label for="exampleInputEmail1" class="mb-0 text-black fw-bold "
                                            style="font-size: 14px">Will Smith</label>
                                          <p>Tel - +91 9825804569</p>
                                        </div>
                                        <div class="my-auto">
                                          <span class="badge badge-warning">Commercial</span>

                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="commercial-view" role="tabpanel"
                                      aria-labelledby="pills-profile-tab">
                                      <h5>Search By</h5>
                                      <div class="search-bar" style="width: 100%;">
                                        <input type="text" placeholder="Search">
                                        <i class="search-icon text-muted mdi mdi-account-search"></i>
                                      </div>
                                      <div class="d-flex p-2 justify-content-between mt-3 border rounded">
                                        <div class="my-auto">
                                          <label for="exampleInputEmail1" class="mb-0 text-black fw-bold "
                                            style="font-size: 14px">John Doe</label>
                                          <p>Tel - +91-9737468988</p>
                                        </div>
                                        <div class="my-auto">
                                          <span class="badge badge-info">Residential</span>
                                        </div>
                                      </div>
                                    </div>

                                  </div>


                                </div>
                                <div class="col-md-9 pe-0">
                                  <div class="d-flex"
                                    style="justify-content: space-between; align-items: center;">
                                    <h5>Customer Details</h5>
                                    <button type="button" class="btn btn-primary btn-icon-text"
                                      data-bs-toggle="modal" data-bs-target="#add_customer" data-whatever="@mdo">
                                      <i class="ti-plus btn-icon-prepend"></i> Add Customer</button>
                                  </div>
                                  <div class="card box-shadow card-rounded text-left mt-3">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">Group Company Name</label>
                                          <p class="m-0">ABC Group Of Companies</p>
                                        </div>
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">Individual Company Name</label>
                                          <p class="m-0">ABC Pvt Lte.</p>
                                        </div>
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">UEN</label>
                                          <p class="m-0">123456</p>
                                        </div>
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">Person Incharge</label>
                                          <p class="m-0">Mr.jhone Doe</p>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">Phone No</label>
                                          <p class="m-0">+91 9758697820</p>
                                        </div>
                                        <div class="col-md-9">
                                          <label class="mb-0" for="">Address</label>
                                          <p class="m-0">103 Rasadhi Appartment Wadaj Ahmedabad 380004.</p>
                                        </div>
                                      </div>
                                      <div class="row mt-3">
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">Status</label>
                                          <p><label class="badge badge-danger">Pending</label></p>
                                        </div>
                                        <div class="col-md-3">
                                          <label class="mb-0" for="">Credit Limit</label>
                                          <p class="m-0">$ 5000.00</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                                </div>
                              </div>
                            </div>
                            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                              <div class="row">
                                <div class="col-md-4 pe-0">
                                  <div class="card box-shadow card-rounded text-left">
                                    <div class="card-body">

                                      <div class="search-bar" style="width: 100%;">
                                        <input type="text" placeholder="Search">
                                        <i class="search-icon text-muted mdi mdi-account-search"></i>
                                      </div>
                                      <ul class="nav nav-pills nav-pills-success mt-3" id="pills-tab" role="tablist" style="border: none;" >
                                        <li class="nav-item">
                                          <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Services</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Packages</a>
                                        </li>
                                        
                                      </ul>
                                      <div class="tab-content p-0" id="pills-tabContent" style="border: none;">
                                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                          <div class="mt-3" >
                                            <div class="row" id="productsubcat">
                                              <div class="col-md-4">
                                                <button type="button"
                                                  class="productsub btn btn-inverse-primary btn-fw">Floor
                                                  Cleaning</button>

                                              </div>
                                              <div class="col-md-4">
                                                <button type="button"
                                                  class="productsub btn btn-inverse-secondary btn-fw">Home
                                                  Cleaning</button>

                                              </div>
                                              <div class="col-md-4">
                                                <button type="button"
                                                  class="productsub btn btn-inverse-warning btn-fw">Office
                                                  Cleaning</button>
                                              </div>
                                            </div>

                                            <div class="productsubshow mt-3" style="display: none;">

                                            <div class="table-responsive">
                                                <table class="table table-hover text-center">
                                                  <thead>
                                                    <tr>
                                                      <th>Image</th>
                                                      <th>Service Name</th>
                                                      <th>Unit Price</th>
                                                      
                                                      <th>Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td><img class="img-xs rounded-circle" src="../../../../images/faces/face8.jpg" alt="Profile image"></td>
                                                      <td>Floor Cleaning</td>
                                                      <td>$308.00</td>
                                                      <td>
                                                        <button class="btn btn-primary   ripple" type="button">
                                                          <i class="mdi mdi-plus menu-icon" style="font-size: 14px;"></i>
                                                        </button>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                             
                                            </div>

                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                          <div class="mt-3" >
                                            <div class="row" id="packagesubcat">
                                              <div class="col-md-4">
                                                <button type="button"
                                                  class="packagesub btn btn-inverse-primary btn-fw">Floor
                                                  Cleaning</button>

                                              </div>
                                              <div class="col-md-4">
                                                <button type="button"
                                                  class="packagesub btn btn-inverse-secondary btn-fw">Home
                                                  Cleaning</button>

                                              </div>
                                              <div class="col-md-4">
                                                <button type="button"
                                                  class="packagesub btn btn-inverse-warning btn-fw">Office
                                                  Cleaning</button>
                                              </div>
                                            </div>

                                            <div class="packagesubshow mt-3" style="display: none;">

                                            <div class="table-responsive">
                                                <table class="table table-hover text-center">
                                                  <thead>
                                                    <tr>
                                                      <th>Image</th>
                                                      <th>Service Name</th>
                                                      <th>Unit Price</th>
                                                      
                                                      <th>Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td><img class="img-xs rounded-circle" src="../../../../images/faces/face8.jpg" alt="Profile image"></td>
                                                      <td>Floor Cleaning</td>
                                                      <td>$308.00</td>
                                                      <td>
                                                        <button class="btn btn-primary   ripple" type="button">
                                                          <i class="mdi mdi-plus menu-icon" style="font-size: 14px;"></i>
                                                        </button>
                                                      </td>
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
                                </div>
                                <div class="col-md-8 pe-0">
                                  <div class="card box-shadow card-rounded text-left">
                                    <div class="card-body">
                                      <div class="table-responsive">
                                        <table class="table table-hover text-center" id="" style="width:100%">
                                          <thead>
                                            <tr>
                                              <th>Sr No.</th>
                                              <th>Service</th>
                                              <th>Unit Price</th>
                                              <th>Qty</th>
                                              <th>Discount (%)</th>
                                              <th>Gross Amt ($)</th>
                                              <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>Floor Cleaning</td>
                                              <td><input type="number" class="form-control"></td>
                                              <td class="p-0"><input type="number" class="form-control"></td>
                                              <td>0</td>
                                              <td>$308.00</td>
                                              <td>
                                                <button class="btn btn-danger ripple" type="button">
                                                  <i class="mdi mdi-delete menu-icon"
                                                    style="font-size: 14px;"></i>
                                                </button>
                                              </td>
                                            </tr>

                                          </tbody>
                                          <thead>
                                            <tr>
                                              <th colspan="5" style="text-align: end;">Total</th>
                                              <th colspan="2">$ 616.00</th>
                                            </tr>
                                          </thead>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                              <div class="row">
                                <div class="col-md-3 ps-0">
                                  <div class="card box-shadow card-rounded text-left">
                                    <div class="card-body">

                                      <label for="" class="mb-0">Customer Details</label>
                                      <p class="m-0"><i class="mdi mdi-account menu-icon me-2"
                                          style="font-size: 14px;"></i> Jhone Doe</p>
                                      <p class="m-0"><i class="mdi mdi-phone-outline menu-icon me-2"
                                          style="font-size: 14px;"></i>+91-9737155901</p>
                                      <p class="m-0"><i class="menu-icon mdi mdi-google-maps me-2"
                                          style="font-size: 14px;"></i>103 Rasadhi Appartment Wadaj Ahmedabad
                                        380004.</p>
                                      <hr>
                                      <label for="" class="mb-0">Service Details</label>

                                      <p class="m-0">Floor Cleaning(5)</p>
                                      <p class="m-0">Home Cleaning(2)</p>
                                      <hr>
                                      <label for="" class="mb-0">Amount Details</label>

                                      <div class="row">
                                        <div class="col-md-7">
                                          <p class="m-0">Total:</p>
                                        </div>
                                        <div class="col-md-5">
                                          <p class="m-0">$200.00</p>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-9 pe-0">
                                  <div class="card box-shadow card-rounded text-left">
                                    <div class="card-body">
                                      <ul class="nav nav-pills nav-pills-success" role="tablist"
                                        style="border: none;">
                                        <li class="nav-item">
                                          <a class="nav-link active" id="tab-one" data-bs-toggle="tab"
                                            href="#inner-one" role="tab" aria-controls="one"
                                            aria-selected="false">Delivery Address</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="tab-two" data-bs-toggle="tab" href="#inner-two"
                                            role="tab" aria-controls="two" aria-selected="false">Billing
                                            Address</a>
                                        </li>
                                      </ul>
                                      <div class="tab-content" style="border: none;">
                                        <div class="tab-pane fade active show" id="inner-one" role="tabpanel"
                                          aria-labelledby="tab-one">
                                          <div class="row" id="div" style="display: none;">
                                            <div class="form-group col-md-4  text-start">
                                              <label for="message-text" class="col-form-label">Postal Code</label>
                                              <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter Code">
                                            </div>
                                            <div class="form-group col-md-4  text-start">
                                              <label for="message-text" class="col-form-label">Address</label>
                                              <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter Address">
                                            </div>

                                            <div class="form-group col-md-4  text-start">
                                              <label for="message-text" class="col-form-label">City</label>
                                              <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter City">
                                            </div>
                                          </div>
                                          <div class="d-flex mt-3" style="justify-content: space-between;">
                                            <div class="m-1">
                                              <button type="button" class="btn btn-primary btn-icon-text"
                                                onClick="addBtn()">
                                                <i class="ti-plus btn-icon-prepend m-0"></i></button>
                                            </div>


                                            <div class="form-group m-1 text-start m-0">
                                              <div class="address-card shadow">
                                                <h5>Sky Enterprice</h5>
                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                <div class="form-group mt-3 m-0">
                                                  <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="1" id="1"
                                                        default="" address="" checked=""> <i
                                                        class="input-helper"></i>
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group m-1 text-start m-0">
                                              <div class="address-card shadow">
                                                <h5>Sky Enterprice</h5>
                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                <div class="form-group mt-3 m-0">
                                                  <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input"
                                                        name="ExampleRadio1" id="ExampleRadio1" Default Address <i
                                                        class="input-helper"></i>
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group m-1 text-start m-0">
                                              <div class="address-card shadow">
                                                <h5>Sky Enterprice</h5>
                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                <div class="form-group mt-3 m-0">
                                                  <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input"
                                                        name="ExampleRadio1" id="ExampleRadio1" Default Address <i
                                                        class="input-helper"></i>
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row mt-3">
                                            <div class="form-group col-6 text-start">
                                              <label for="message-text" class="col-form-label">Deposite Type</label>
                                              <select class="form-control" id="myselection">
                                                <option>Select Option</option>
                                                <option>$50</option>
                                                <option>waive</option>
                                                <option>Don’t need</option>
                                              </select>
                                            </div>
                                            <!-- <div class="form-group col-6 text-start">
                                              <label for="message-text" class="col-form-label">Deposite
                                                Type</label>
                                              <input type="text" class="form-control" placeholder="Delivery Type">
                                            </div> -->
                                            
                                            <div class="form-group col-6 text-start">
                                              <label for="message-text" class="col-form-label">Date Of Cleaning</label>
                                              <input class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                            <div class="form-group col-6 text-start">
                                              <label for="message-text" class="col-form-label">Time of Cleaning</label>
                                              <input type="text" class="form-control" placeholder="Time of Cleaning">
                                            </div>
                                            <!-- <div class="form-group col-6 text-start">
                                              <label for="message-text" class="col-form-label"> Delivery
                                                Man</label>
                                              <input type="text" class="form-control" placeholder="Delivery Man">
                                            </div> -->
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="inner-two" role="tabpanel"
                                          aria-labelledby="tab-one">
                                          <div class="row" id="div2" style="display: none;">
                                            <div class="col-12">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Same as delivery address
                                                <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-group col-md-4  text-start">
                                              <label for="message-text" class="col-form-label">Postal Code</label>
                                              <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter Code">
                                            </div>
                                            <div class="form-group col-md-4  text-start">
                                              <label for="message-text" class="col-form-label">Address</label>
                                              <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter Address">
                                            </div>

                                            <div class="form-group col-md-4  text-start">
                                              <label for="message-text" class="col-form-label">City</label>
                                              <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter City">
                                            </div>
                                          </div>
                                          <div class="d-flex mt-3" style="justify-content: space-between;">
                                            <div class="m-1">
                                              <button type="button" class="btn btn-primary btn-icon-text"
                                                onClick="addBtn2()">
                                                <i class="ti-plus btn-icon-prepend m-0"></i></button>
                                            </div>


                                            <div class="form-group m-1 text-start m-0">
                                              <div class="address-card shadow">
                                                <h5>Sky Enterprice</h5>
                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                <div class="form-group mt-3 m-0">
                                                  <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="2" id="2"
                                                        checked Default Address <i class="input-helper"></i>
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group m-1 text-start m-0">
                                              <div class="address-card shadow">
                                                <h5>Sky Enterprice</h5>
                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                <div class="form-group mt-3 m-0">
                                                  <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input"
                                                        name="ExampleRadio1" id="ExampleRadio1" Default Address <i
                                                        class="input-helper"></i>
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group m-1 text-start m-0">
                                              <div class="address-card shadow">
                                                <h5>Sky Enterprice</h5>
                                                <p>8 Shopping Centre, 9 Bishan Place, Singapore 579837</p>
                                                <div class="form-group mt-3 m-0">
                                                  <div class="form-check form-check-primary">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input"
                                                        name="ExampleRadio1" id="ExampleRadio1" Default Address <i
                                                        class="input-helper"></i>
                                                    </label>
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
                              </div>

                            </div>
                            <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                              <div class="row">
                                <div class="col-md-3 ps-0">
                                    <div class="card box-shadow card-rounded text-left">
                                        <div class="card-body">
                                          <label for="" class="mb-0">Delivery Address</label>
                                            
                                            <p class="m-0">BLK 3017 BEDOK NORTH STREET 5
                                                #01-22 GOURMET EAST KITCHEN
                                                SINGAPORE 486121</p>
                                                <hr>
                                                <label for="" class="mb-0">Billing Address</label>
                                           
                                            <p class="m-0">BLK 3017 BEDOK NORTH STREET 5
                                                #01-22 GOURMET EAST KITCHEN
                                                SINGAPORE 486121</p>
                                                <hr>
                                                <label for="" class="mb-0">Cleaning Details</label>
                                            
                                            <!-- <p class="m-0">Self Collection</p> -->
                                            
                                            <p class="m-0">Deposite Type : Wave</p>
                                            <p class="m-0">Date Of Cleaning : 25/04/2023</p>
                                            <p class="m-0">Time Of Cleaning : 05:47 PM</p>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 pe-0">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="table-responsive">
                                                <table class="table table-hover text-center" style="width:100%">
                                                  <thead>
                                                    <tr>
                                                      <th>Sr No.</th>
                                                      <th>Service</th>
                                                      <th>Unit Price</th>
                                                      <th>Qty</th>
                                                      <th>Discount (%)</th>
                                                      <th>Gross Amt ($)</th>
                                                      
                                                    </tr>
                                                  </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Floor Cleaning</td>
                                                            <td>$308.00</td>
                                                            <td>2</td>
                                                            <td>0</td>
                                                            <td>$308.00</td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card box-shadow card-rounded text-left">
                                                <div class="card-body">
                                                  <label for="" class="mb-0">Customer Details</label>
                                                  <p class="m-0"><i class="mdi mdi-account menu-icon me-2" style="font-size: 14px;"></i> Jhone Doe</p>
                                                  <p class="m-0"><i class="mdi mdi-phone-outline menu-icon me-2" style="font-size: 14px;"></i>+91-9737155901</p>
                                                  <p class="m-0"><i class="menu-icon mdi mdi-google-maps me-2" style="font-size: 14px;"></i>103 Rasadhi Appartment Wadaj Ahmedabad
                                                    380004.</p>
                                                  
                                                    <hr>
                                                    <label for="" class="mb-0">Amount Details</label>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <p class="m-0">Total (before tax):</p>
                                                            <p class="m-0">Total Tax:</p>
                                                            <p class="m-0">Total Discount:</p>
                                                            <h6>Grand Total:</h6>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <p class="m-0">$200.00</p>
                                                            <p class="m-0">$0.00</p>
                                                            <p class="m-0">$0.00</p>
                                                            <h6>$200.00</h6>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-info w-100 mt-3" data-dismiss="modal">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                          </div>

                          <!-- Include optional progressbar HTML -->
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>

                      </form>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-success">Submit</button>
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div> -->
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="scroll" style="overflow-x: scroll;">
          <div class="lead-row mb-3"
            style="display: flex; justify-content: space-between; min-width: 1285px; flex-wrap: nowrap;">

            <div class="lead-column">
              <div class="card">
                <h5 class="card-title">New Leads<span style="color: #1F3BB3;">(2)</span>
                </h5>
              </div>
              <div class="card-body">
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">John Doe</h6>
                    <p class="mb-3">Commercial</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                  <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                </div>
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Stan Lee</h6>
                    <p class="mb-3">Residential</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="lead-column">
              <div class="card">
                <h5 class="card-title">Pending Customer Approval<span style="color: #1F3BB3;">(2)</span>
                </h5>
              </div>
              <div class="card-body">
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Jet Lee</h6>
                    <p class="mb-3">Commercial</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                </div>

              </div>
            </div>
            <div class="lead-column">
              <div class="card">
                <h5 class="card-title">Pending Payment<span style="color: #1F3BB3;">(2)</span>
                </h5>
              </div>
              <div class="card-body">
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Will Smith</h6>
                    <p class="mb-3">Commercial</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                  <button class="btn btn-danger ripple" type="button">
                    <i class="mdi mdi-delete menu-icon"></i>
                  </button>
                </div>
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Dony Yen</h6>
                    <p class="mb-3">Residential</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                  <button class="btn btn-danger ripple" type="button">
                    <i class="mdi mdi-delete menu-icon"></i>
                  </button>
                </div>
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Bela Rina</h6>
                    <p class="mb-3">Commercial</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                  <button class="btn btn-danger ripple" type="button">
                    <i class="mdi mdi-delete menu-icon"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="lead-column">
              <div class="card">
                <h5 class="card-title">Assigning of task<span style="color: #1F3BB3;">(2)</span>
                </h5>
              </div>
              <div class="card-body">
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Kevin Hart</h6>
                    <p class="mb-3">Commercial</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                </div>
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Keanu Reevs</h6>
                    <p class="mb-3">Residential</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="lead-column">
              <div class="card">
                <h5 class="card-title">Complete<span style="color: #1F3BB3;">(2)</span>
                </h5>
              </div>
              <div class="card-body">
                <div class="lead-card">
                  <div class="content">
                    <h6 class="mb-0 fw-bold  fs-6  mb-1">Tylor Swift</h6>
                    <p class="mb-3">Commercial</p>
                  </div>
                  <button class="btn btn-green" type="button">
                    <i class="mdi mdi-pencil menu-icon"></i>
                  </button>
                 <button class="btn btn-primary ripple" type="button" data-bs-toggle="modal" data-bs-target="#update-status" data-whatever="@getbootstrap">
                    <i class="mdi mdi-arrow-right menu-icon"></i>
                  </button>
                </div>

              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
  </div>
@endsection




