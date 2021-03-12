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
                            <h4>ALL CUSTOMERS</h4>
                            <h2>PEMROGRAMAN WEB LANJUT</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-blog-posts">
                        <div class="row">
                            @foreach ($customer as $val)
                                <div class="col-lg-4">
                                    <div class="blog-post">
                                        <div class="down-content">
                                            <a href="{{ route('customer.show', $val->id) }}">
                                                <h4>{{ $val->name }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">{{ $val->address }}</a></li>
                                            </ul>
                                            <p>{{ $val->email }}</p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="main-button">
                                                            <a href="{{ route('customer.show', $val->id) }}">Lihat
                                                                Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-12">
                                {{ $customer->links('paginate') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
