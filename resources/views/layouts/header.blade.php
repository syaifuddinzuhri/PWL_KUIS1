    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                    <h2>PWL KUIS 1</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home.index') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Suppliers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Employess</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Customers</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
