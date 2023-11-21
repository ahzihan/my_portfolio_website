<div class="home-qualification">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading">
                    <h2>My Qualification</h2>
                    <h3>Education and Experience</h3>
                </div>
                <div class="col-md-6">
                    <h2 class="title"><i class="fas fa-graduation-cap"></i> Education</h2>

                    <div class="inner">
                        @foreach ($eduInfo as $item)
                        <div class="item wow fadeInUp">
                            <h3>{{ $item->course_title }}</h3>
                            <h4>{{ $item->institute }}</h4>
                            <div class="time"><i class="far fa-clock"></i> {{ $item->duration }}</div>
                            <div class="v-line"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title"><i class="fas fa-award"></i> Experience</h2>
                    <div class="inner">
                        @foreach ($expInfo as $item)
                        <div class="item wow fadeInUp">
                            <h3>{{ $item->company_name }}</h3>
                            <h4>{{ $item->designation }}</h4>
                            <div class="time"><i class="far fa-clock"></i>{{ $item->duration }}</div>
                            <div class="v-line"></div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
