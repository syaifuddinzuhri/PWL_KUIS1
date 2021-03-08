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
                            <h4>PRODUCTS</h4>
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
                            @foreach ($products as $product)
                                <div class="col-lg-4">
                                    <div class="blog-post">
                                        <div class="blog-thumb">
                                            <img src="{{ asset('template') }}/assets/images/blog-post-01.jpg" alt="">
                                        </div>
                                        <div class="down-content">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                <h4>{{ $product->name }}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">{{ $product->supplier->name }}</a></li>
                                                <li><a href="#">May 31, 2020</a></li>
                                            </ul>
                                            <p>Stand Blog is a free HTML CSS template for your CMS theme.</p>
                                            <div class="post-options">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="main-button">
                                                            <a href="blog.html">Lihat Detail Product</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-lg-6">
                                <div class="main-button">
                                    <a href="blog.html">View All Posts</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
