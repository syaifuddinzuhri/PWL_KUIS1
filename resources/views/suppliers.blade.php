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
                            <h4>ALL SUPPLIERS</h4>
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
                            @foreach ($suppliers as $supplier)
                                <div class="col-lg-4">
                                    <div class="blog-post">
                                        <div class="down-content">
                                            <a href="{{ route('supplier.show', $supplier->id) }}">
                                                <h4>{{ $supplier->name }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">{{ $supplier->address }}</a></li>
                                            </ul>
                                            <p>{{ $supplier->email }}</p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="main-button">
                                                            <a href="{{ route('supplier.show', $supplier->id) }}">Lihat
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
                                {{ $suppliers->links('paginate') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
