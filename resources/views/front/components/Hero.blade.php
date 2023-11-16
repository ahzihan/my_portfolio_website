<div class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="left">
                    <h4>{{ $bannerInfo->bnr_title }}</h4>
                    <h2>{{ $bannerInfo->bnr_person_name }}</h2>
                    <h3>{{ $bannerInfo->bnr_person_designation }}</h3>
                    <p>
                        {{ $bannerInfo->bnr_description }}
                    </p>
                    <div class="button">
                        <a href="{{ $bannerInfo->bnr_btn_url }}" class="btn btn-primary">{{ $bannerInfo->bnr_btn_text }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <img src="{{ asset('uploads/'.$bannerInfo->bnr_photo) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
