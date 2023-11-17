<div class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left wow fadeInLeft">
                        <img src="{{ asset('uploads/'.$aboutInfo->image_one) }}" alt="Image">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right wow fadeInRight">
                        @if ($aboutInfo->sub_title !='')
                            <h3>{{ $aboutInfo->sub_title }}</h3>
                        @endif
                        @if ($aboutInfo->title !='')
                            <h2>{{ $aboutInfo->title }}</h2>
                        @endif
                        @if ($aboutInfo->sort_description !='')
                            <p>{{ nl2br($aboutInfo->sort_description) }}</p>
                        @endif
                        @if ($aboutInfo->long_description !='')
                            <p>{!! nl2br($aboutInfo->long_description) !!}</p>
                        @endif

                        <div class="contact-info">
                            <div class="table-responsive">
                                <table class="table">
                                    @if ($aboutInfo->name !='')
                                        <tr>
                                            <td><i class="far fa-user"></i></td>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td>{{ $aboutInfo->name }}</td>
                                        </tr>
                                    @endif

                                    @if ($aboutInfo->phone !='')
                                        <tr>
                                            <td><i class="fas fa-phone"></i></td>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td>{{ $aboutInfo->phone }}</td>
                                        </tr>
                                    @endif

                                    @if ($aboutInfo->email !='')
                                        <tr>
                                            <td><i class="far fa-envelope"></i></td>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{ $aboutInfo->email }}</td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                         @if ($socialInfo->facebook !='' || $socialInfo->twitter !='' || $socialInfo->linkedin !='' || $socialInfo->instagram !='' || $socialInfo->github !='')
                        <div class="social">
                            <h3>Find me on social media:</h3>
                            <ul>
                                @if ($socialInfo->facebook !='')
                                    <li><a href="{{ $socialInfo->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if ($socialInfo->twitter !='')
                                    <li><a href="{{ $socialInfo->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                @endif
                                @if ($socialInfo->linkedin !='')
                                    <li><a href="{{ $socialInfo->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                @endif
                                @if ($socialInfo->instagram !='')
                                    <li><a href="{{ $socialInfo->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if ($socialInfo->github !='')
                                    <li><a href="{{ $socialInfo->github }}"><i class="fab fa-github"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
