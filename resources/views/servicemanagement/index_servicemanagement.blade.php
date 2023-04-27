@extends('layouts.main')
@section('content')
<div class="content-wrapper">

    <div class="row mb-3">
        <div class="col-lg-12 text-end">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">

                <div class="left">
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <input class="form-control w-100" type="search" placeholder="Search"
                                id="Mail-rearch">
                        </div>

                        <div class="px-3">
                            <select class="form-control">
                                <option>Select Status </option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="px-3">
                            <select class="form-control">
                                <option>Company name</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="px-3">
                            <select class="form-control">
                                <option>address</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div>
                            <i class="mdi mdi-filter" style="font-size: 28px;"></i>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="btn-wrapper" style="margin-bottom: 0.5rem;">
                        <button type="button" class="btn btn-primary btn-icon-text"
                            data-bs-toggle="modal" data-bs-target="#add" data-whatever="@mdo">
                            <i class="ti-plus btn-icon-prepend"></i>
                            Add
                        </button>
                        <!-- <a href="#" class="btn btn-primary text-white me-0" data-bs-toggle="modal"
      data-bs-target="#exampleModal-4" data-whatever="@mdo"><i class="icon-plus"></i> Add User </a> -->

                        <div class="modal fade" id="add" tabindex="-1" role="dialog"
                            aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">Add New Lead</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row text-left">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab-one"
                                                        data-bs-toggle="tab" href="#one" role="tab"
                                                        aria-controls="one"
                                                        aria-selected="false">Customer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-two"
                                                        data-bs-toggle="tab" href="#two" role="tab"
                                                        aria-controls="two"
                                                        aria-selected="false">Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="tab-three"
                                                        data-bs-toggle="tab" href="#three" role="tab"
                                                        aria-controls="three"
                                                        aria-selected="true">Address</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="tab-four"
                                                        data-bs-toggle="tab" href="#four" role="tab"
                                                        aria-controls="four" aria-selected="true">Assign
                                                        Job</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="tab-five"
                                                        data-bs-toggle="tab" href="#five" role="tab"
                                                        aria-controls="five"
                                                        aria-selected="true">Preview</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="one"
                                                    role="tabpanel" aria-labelledby="tab-one">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="box-1 p-3 h-100"
                                                                style="border-right: 1px solid #ebedf2;">
                                                                <div class="form-group col-12">
                                                                    <input type="text"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="form-group col-12">

                                                                    <textarea class="form-control"
                                                                        id="message-text"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-8">
                                                            <div class="box-2 row p-3">
                                                                <div class="col-12 text-end">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-icon-text">
                                                                        <i
                                                                            class="ti-plus btn-icon-prepend"></i>
                                                                        Add
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label
                                                                        for="exampleFormControlSelect2"
                                                                        class="col-form-label">Customer
                                                                        Typer</label>
                                                                    <select class="form-control">
                                                                        <option>one</option>
                                                                        <option>Two</option>
                                                                    </select>
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">

                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Company name </label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Company name">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Branch </label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Branch">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        UEN </label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="UEN">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-t   ext"
                                                                        class="col-form-label">Your
                                                                        Person Incharge Name </label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        id="recipient-name"
                                                                        placeholder="Person Incharge Name">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Mobile
                                                                        Number:
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        id="recipient-name" placeholder="Mobile Number:
                                                ">
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="two" role="tabpanel"
                                                    aria-labelledby="tab-two">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="box-1 p-3 h-100"
                                                                style="border-right: 1px solid #ebedf2;">
                                                                <div
                                                                    class="form-group col-12 text-start">
                                                                    <label
                                                                        for="exampleFormControlSelect2"
                                                                        class="col-form-label">Service
                                                                        Typer</label>
                                                                    <select class="form-control">
                                                                        <option>one</option>
                                                                        <option>Two</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <input class="form-control w-100"
                                                                        type="search"
                                                                        placeholder="Search"
                                                                        id="Mail-rearch">
                                                                </div>
                                                                <div class="form-group col-12">
                                                                    <div id="radios"
                                                                        class="btn-group w-100"
                                                                        data-toggle="buttons">
                                                                        <input type="radio"
                                                                            class="btn-check"
                                                                            name="options-outlined"
                                                                            id="success-outlined"
                                                                            autocomplete="off"
                                                                            checked="">
                                                                        <label
                                                                            class="btn btn-outline-primary w-100"
                                                                            for="success-outlined">Services</label>
                                                                        <input type="radio"
                                                                            class="btn-check"
                                                                            name="options-outlined"
                                                                            id="danger-outlined"
                                                                            autocomplete="off">
                                                                        <label
                                                                            class="btn btn-outline-primary w-100"
                                                                            for="danger-outlined">Packages</label>
                                                                    </div>




                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="table-responsive">
                                                                        <table
                                                                            class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr No
                                                                                    </th>
                                                                                    <th>
                                                                                        Service
                                                                                    </th>
                                                                                    <th>

                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>

                                                                                    <td>
                                                                                        01
                                                                                    </td>
                                                                                    <td>
                                                                                        Room Dusting
                                                                                    </td>
                                                                                    <td>
                                                                                        20$
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>

                                                                                    <td>
                                                                                        02
                                                                                    </td>
                                                                                    <td>
                                                                                        Wall Cleaning
                                                                                    </td>
                                                                                    <td>
                                                                                        30$
                                                                                    </td>

                                                                                </tr>
                                                                                <tr>

                                                                                    <td>
                                                                                        03
                                                                                    </td>
                                                                                    <td>
                                                                                        Floor Mopping
                                                                                    </td>
                                                                                    <td>
                                                                                        15$
                                                                                    </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-8">

                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="table-responsive">
                                                                        <table
                                                                            class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr No
                                                                                    </th>
                                                                                    <th>
                                                                                        Services
                                                                                    </th>
                                                                                    <th>
                                                                                        Unit Price
                                                                                    </th>
                                                                                    <th>
                                                                                        Discount
                                                                                    </th>
                                                                                    <th>
                                                                                        Gross Total
                                                                                    </th>
                                                                                    <th>
                                                                                        Action
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>

                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div
                                                                        class="card shadow-sm border rounded-0">
                                                                        <div class="card-body">
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Customer Details
                                                                            </p>
                                                                            <p
                                                                                class="text-black fw-bold d-flex align-items-center">
                                                                                <i class="mdi mdi-account menu-icon me-2"
                                                                                    style="font-size: 24px;"></i>Customer
                                                                                Details
                                                                            </p>
                                                                            <p
                                                                                class="text-black fw-bold d-flex align-items-center">
                                                                                <i class="mdi mdi-phone-outline menu-icon me-2"
                                                                                    style="font-size: 24px;"></i>9002156801
                                                                            </p>
                                                                            <p
                                                                                class="text-black fw-bold d-flex">
                                                                                <i class="menu-icon mdi mdi-google-maps me-2"
                                                                                    style="font-size: 24px;"></i>10
                                                                                ANSON ROAD,
                                                                                INTERNATIONAL PLAZA,
                                                                                SINGAPORE 079903
                                                                            </p>
                                                                            <hr>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Amount Details
                                                                            </p>

                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Total (before tax)</p>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Total Tax</p>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Total Discount:</p>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Grand Total:</p>
                                                                            <button type="button"
                                                                                class="btn btn-success w-100">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="three" role="tabpanel"
                                                    aria-labelledby="tab-three">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="tab-one"
                                                                data-bs-toggle="tab" href="#inner-one"
                                                                role="tab" aria-controls="one"
                                                                aria-selected="false">Delivery
                                                                Address</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="tab-two"
                                                                data-bs-toggle="tab" href="#inner-two"
                                                                role="tab" aria-controls="two"
                                                                aria-selected="false">Billing
                                                                Address</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show"
                                                            id="inner-one" role="tabpanel"
                                                            aria-labelledby="tab-one">
                                                            <div class="row">
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Type</label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Delivery Type">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Time</label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Delivery Time">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Date</label>
                                                                    <input class="form-control"
                                                                        placeholder="dd/mm/yyyy">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Man</label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Delivery Man">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 mb-3">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-icon-text">
                                                                        <i
                                                                            class="ti-plus btn-icon-prepend"></i>
                                                                        Add Address
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="form-group col-3 text-start m-0">

                                                                    <div class="address-card shadow">
                                                                        <h5>Sky Enterprice</h5>
                                                                        <p>UOB - Junction 8 Shopping
                                                                            Centre,
                                                                            9 Bishan Place,
                                                                            Singapore 579837</p>
                                                                        <div
                                                                            class="form-group mt-3 m-0">
                                                                            <div
                                                                                class="form-check form-check-primary">
                                                                                <label
                                                                                    class="form-check-label">
                                                                                    <input type="radio"
                                                                                        class="form-check-input"
                                                                                        name="ExampleRadio1"
                                                                                        id="ExampleRadio1"
                                                                                        default=""
                                                                                        address=""
                                                                                        <i=""><i
                                                                                        class="input-helper"></i><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="form-group col-3 text-start m-0">

                                                                    <div class="address-card shadow">
                                                                        <h5>Sky Enterprice</h5>
                                                                        <p>UOB - Junction 8 Shopping
                                                                            Centre,
                                                                            9 Bishan Place,
                                                                            Singapore 579837</p>
                                                                        <div
                                                                            class="form-group mt-3 m-0">
                                                                            <div
                                                                                class="form-check form-check-primary">
                                                                                <label
                                                                                    class="form-check-label">
                                                                                    <input type="radio"
                                                                                        class="form-check-input"
                                                                                        name="ExampleRadio1"
                                                                                        id="ExampleRadio1"
                                                                                        default=""
                                                                                        address=""
                                                                                        <i=""><i
                                                                                        class="input-helper"></i><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="inner-two"
                                                            role="tabpanel" aria-labelledby="tab-one">
                                                            <div class="row">
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Type</label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Delivery Type">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Time</label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Delivery Time">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Date</label>
                                                                    <input class="form-control"
                                                                        placeholder="dd/mm/yyyy">
                                                                </div>
                                                                <div
                                                                    class="form-group col-6 text-start">
                                                                    <label for="message-text"
                                                                        class="col-form-label">
                                                                        Delivery Man</label>
                                                                    <input type="text"
                                                                        class="form-control"
                                                                        placeholder="Delivery Man">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 mb-3">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-icon-text">
                                                                        <i
                                                                            class="ti-plus btn-icon-prepend"></i>
                                                                        Add Address
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="form-group col-3 text-start m-0">

                                                                    <div class="address-card shadow">
                                                                        <h5>Sky Enterprice</h5>
                                                                        <p>UOB - Junction 8 Shopping
                                                                            Centre,
                                                                            9 Bishan Place,
                                                                            Singapore 579837</p>
                                                                        <div
                                                                            class="form-group mt-3 m-0">
                                                                            <div
                                                                                class="form-check form-check-primary">
                                                                                <label
                                                                                    class="form-check-label">
                                                                                    <input type="radio"
                                                                                        class="form-check-input"
                                                                                        name="ExampleRadio1"
                                                                                        id="ExampleRadio1"
                                                                                        default=""
                                                                                        address=""
                                                                                        <i=""><i
                                                                                        class="input-helper"></i><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="form-group col-3 text-start m-0">

                                                                    <div class="address-card shadow">
                                                                        <h5>Sky Enterprice</h5>
                                                                        <p>UOB - Junction 8 Shopping
                                                                            Centre,
                                                                            9 Bishan Place,
                                                                            Singapore 579837</p>
                                                                        <div
                                                                            class="form-group mt-3 m-0">
                                                                            <div
                                                                                class="form-check form-check-primary">
                                                                                <label
                                                                                    class="form-check-label">
                                                                                    <input type="radio"
                                                                                        class="form-check-input"
                                                                                        name="ExampleRadio1"
                                                                                        id="ExampleRadio1"
                                                                                        default=""
                                                                                        address=""
                                                                                        <i=""><i
                                                                                        class="input-helper"></i><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="four" role="tabpanel"
                                                    aria-labelledby="tab-four">
                                                    <form class="row text-left">
                                                        <div class="row">




                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text"
                                                                    class="col-form-label">
                                                                    Start Date</label>
                                                                <input class="form-control"
                                                                    placeholder="dd/mm/yyyy">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text"
                                                                    class="col-form-label">
                                                                    End Date</label>
                                                                <input class="form-control"
                                                                    placeholder="dd/mm/yyyy">
                                                            </div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="message-text"
                                                                    class="col-form-label">No Of
                                                                    Cleaners</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name"
                                                                    placeholder="No of Cleaners">
                                                            </div>
                                                            <div class="col-6"></div>
                                                            <div class="form-group col-6 text-start">
                                                                <label for="exampleFormControlSelect2"
                                                                    class="col-form-label">Cleaners</label>
                                                                <select class="form-control">
                                                                    <option>Cleaner</option>
                                                                    <option>dd</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6"></div>
                                                            <div class="form-group col-6 text-start">
                                                                <select class="form-control">
                                                                    <option>Cleaner</option>
                                                                    <option>dd</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6"></div>
                                                            <div class="form-group col-6 text-start">
                                                                <select class="form-control">
                                                                    <option>Cleaner</option>
                                                                    <option>dd</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6"></div>
                                                            <div class="form-group col-6 text-start">
                                                                <select class="form-control">
                                                                    <option>Cleaner</option>
                                                                    <option>dd</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6"></div>
                                                            <div class="form-group col-6 text-start">
                                                                <select class="form-control">
                                                                    <option>Cleaner</option>
                                                                    <option>dd</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6"></div>
                                                            <div class="col-6 text-end">
                                                                <a href="#">Add</a>
                                                            </div>


                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-center">
                                                                                    Inventory

                                                                                </th>
                                                                                <th class="text-center">
                                                                                    ID
                                                                                </th>
                                                                                <th class="text-center">
                                                                                    Quantity
                                                                                </th>
                                                                                <th class="text-center">
                                                                                    Assign to
                                                                                </th>

                                                                                <th class="text-center">
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>
                                                                                    <select
                                                                                        class="form-control">
                                                                                        <option>Services
                                                                                            Selected
                                                                                        </option>
                                                                                        <option>dd
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                                <td><input type="number"
                                                                                        class="form-control"
                                                                                        id="recipient-name">
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="recipient-name">
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-control">
                                                                                        <option>Services
                                                                                            Selected
                                                                                        </option>
                                                                                        <option>dd
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <i class="menu-icon mdi mdi-delete-outline text-danger"
                                                                                        style="font-size: 28px; cursor: pointer;"></i>
                                                                                </td>


                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="tab-pane fade " id="five" role="tabpanel"
                                                    aria-labelledby="tab-five">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="box-1 p-3 h-100"
                                                                style="border-right: 1px solid #ebedf2;">
                                                                <span
                                                                    class="text-black fw-bold d-flex"><i
                                                                        class="menu-icon mdi mdi-google-maps me-2"
                                                                        style="font-size: 24px;"></i>Delivery
                                                                    Address</span>
                                                                <p>10 ANSON ROAD, INTERNATIONAL PLAZA,
                                                                    SINGAPORE 079903
                                                                </p>
                                                                <hr>
                                                                <span
                                                                    class="text-black fw-bold d-flex"><i
                                                                        class="menu-icon mdi mdi-google-maps me-2"
                                                                        style="font-size: 24px;"></i>
                                                                    Billing Address</span>
                                                                <p>10 ANSON ROAD, INTERNATIONAL PLAZA,
                                                                    SINGAPORE 079903
                                                                </p>
                                                                <hr>
                                                                <span
                                                                    class="text-black fw-bold d-flex"><i
                                                                        class="menu-icon mdi mdi-information-outline me-2"
                                                                        style="font-size: 24px;"></i>Delivery
                                                                    Details</span>
                                                                <p> Self Collection <br>
                                                                    12-03-2023 02-30pm

                                                                </p>

                                                            </div>

                                                        </div>
                                                        <div class="col-8">

                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="table-responsive">
                                                                        <table
                                                                            class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Sr No
                                                                                    </th>
                                                                                    <th>
                                                                                        Services
                                                                                    </th>
                                                                                    <th>
                                                                                        Unit Price
                                                                                    </th>
                                                                                    <th>
                                                                                        Discount
                                                                                    </th>
                                                                                    <th>
                                                                                        Gross Total
                                                                                    </th>
                                                                                    <th>
                                                                                        Action
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>

                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>

                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div
                                                                        class="card shadow-sm border rounded-0">
                                                                        <div class="card-body">
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Customer Details
                                                                            </p>
                                                                            <p
                                                                                class="text-black fw-bold d-flex align-items-center">
                                                                                <i class="mdi mdi-account menu-icon me-2"
                                                                                    style="font-size: 24px;"></i>Customer
                                                                                Details
                                                                            </p>
                                                                            <p
                                                                                class="text-black fw-bold d-flex align-items-center">
                                                                                <i class="mdi mdi-phone-outline menu-icon me-2"
                                                                                    style="font-size: 24px;"></i>9002156801
                                                                            </p>
                                                                            <p
                                                                                class="text-black fw-bold d-flex">
                                                                                <i class="menu-icon mdi mdi-google-maps me-2"
                                                                                    style="font-size: 24px;"></i>10
                                                                                ANSON ROAD,
                                                                                INTERNATIONAL PLAZA,
                                                                                SINGAPORE 079903
                                                                            </p>
                                                                            <hr>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Amount Details
                                                                            </p>

                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Total (before tax)</p>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Total Tax</p>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Total Discount:</p>
                                                                            <p
                                                                                class="text-black fw-bold">
                                                                                Grand Total:</p>
                                                                            <button type="button"
                                                                                class="btn btn-success w-100">Submit</button>
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
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Time
                                    </th>
                                    <th>
                                        Customer name
                                    </th>
                                    <th>
                                        Company
                                    </th>
                                    <th>
                                        Branch
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Mobile No.
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                        Service type
                                    </th>
                                    <th>
                                        Assign to
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        22/10/22
                                    </td>
                                    <td>
                                        4:05 AM
                                    </td>
                                    <td>
                                        test
                                    </td>
                                    <td>
                                        test.com
                                    </td>
                                    <td>
                                        india
                                    </td>
                                    <td>
                                        Ahmedabad
                                    </td>
                                    <td>
                                        0123456789
                                    </td>
                                    <td>
                                        private
                                    </td>
                                    <td>
                                        software
                                    </td>
                                    <td>
                                        rajesh
                                    </td>
                                    <td>
                                        pending
                                    </td>
                                    <td>
                                        <i class="menu-icon mdi mdi-eye-outline text-success"
                                            style="font-size: 20px; cursor: pointer;"></i>
                                        <i class="menu-icon mdi mdi-pencil-outline text-primary"
                                            style="font-size: 20px; cursor: pointer;"></i>
                                        <i class="menu-icon mdi mdi-delete-outline text-danger"
                                            style="font-size: 20px; cursor: pointer;"></i>
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
@endsection




