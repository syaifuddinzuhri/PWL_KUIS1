@extends('layouts.main')

@section('title', $title)

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-content">
                            <h4>DETAIL SUPPLIER</h4>
                            <h2>{{ $supplier->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->
    <section class="contact-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="down-contact">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="sidebar-item contact-information">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <h5>{{ $supplier->name }}</h5>
                                                <span>FULL NAME</span>
                                            </li>
                                            <li>
                                                <h5>{{ $supplier->phone }}</h5>
                                                <span>PHONE NUMBER</span>
                                            </li>
                                            <li>
                                                <h5>{{ $supplier->email }}</h5>
                                                <span>EMAIL ADDRESS</span>
                                            </li>
                                            <li>
                                                <h5>{{ $supplier->address }}</h5>
                                                <span>STREET ADDRESS</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sidebar-item contact-information">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <h5>{{ $supplier->city }}</h5>
                                                <span>CITY</span>
                                            </li>
                                            <li>
                                                <h5>{{ $supplier->country }}</h5>
                                                <span>COUNTRY</span>
                                            </li>
                                            <li>
                                                <h5>{{ $supplier->state }}</h5>
                                                <span>STATE</span>
                                            </li>
                                            <li>
                                                <h5>{{ $supplier->postcode }}</h5>
                                                <span>POSTAL CODE</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
