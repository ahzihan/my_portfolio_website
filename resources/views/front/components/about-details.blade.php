    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Me</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-photo d-flex justify-content-center">
                        <img src="images/t3.jpg" alt="">
                    </div>
                    <div class="about-content">
                        <h2>{{ $aboutInfo->title }}</h2>
                        <p>
                            {{ $aboutInfo->sort_description }}
                        </p>
                        <h2>My History</h2>
                        <p>
                            {{ $aboutInfo->long_description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
