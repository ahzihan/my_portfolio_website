    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo d-flex justify-content-center">
                        <img src="{{ asset('front/images/footer-logo.png')}}" alt="">
                    </div>
                    <div class="description">
                        Cum an oratio fierent detraxit, per in novum aliquando. Vel ei aeque appellantur. Ne deserunt adipisci sed, sed ex veniam accusam, usu ut nonumy admodum recteque.
                    </div>
                    @if ($socialInfo->facebook !='' || $socialInfo->twitter !='' || $socialInfo->linkedin !='' || $socialInfo->instagram !='' || $socialInfo->github !='')
                    <div class="social">
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
                    <div class="copyright">
                        Copright 2023, ahzihan. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
