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
                            <h4>DETAIL PRODUCT</h4>
                            <h2>{{ $product->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="all-blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="{{ $product->image }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <a href="post-details.html">
                                            <h4>{{ $product->name }}</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a
                                                    href="{{ route('supplier.show', $product->supplier->id) }}">{{ $product->supplier->name }}</a>
                                            </li>
                                            <li><a href="!#">{{ $product->created_at->format('d M Y') }}</a></li>
                                        </ul>
                                        <p>{{ $product->description }}</p>
                                        <div class="post-options">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-tags"></i></li>
                                                        <li><a href="#">Pemrograman Web Lanjut</a></li>
                                                    </ul>
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
    </section>

@endsection
