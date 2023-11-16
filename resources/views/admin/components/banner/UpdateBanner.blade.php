<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/'.$bannerInfo->bnr_photo) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="bnr_photo">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Title </label>
                                    <input type="text" class="form-control" name="bnr_title" value="{{$bannerInfo->bnr_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Person Name *</label>
                                    <input type="text" class="form-control" name="bnr_person_name" value="{{ $bannerInfo->bnr_person_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Person Designation </label>
                                    <input type="text" class="form-control" name="bnr_person_designation" value="{{ $bannerInfo->bnr_person_designation }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Text </label>
                                    <input type="text" class="form-control" name="bnr_btn_text" value="{{ $bannerInfo->bnr_btn_text }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Url </label>
                                    <input type="text" class="form-control" name="bnr_btn_url" value="{{ $bannerInfo->bnr_btn_url }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="bnr_description" id="" cols="30" rows="5">{{ $bannerInfo->bnr_description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
