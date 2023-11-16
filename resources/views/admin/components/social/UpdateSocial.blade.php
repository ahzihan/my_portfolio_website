<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('social.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$socialInfo->facebook }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{ $socialInfo->linkedin }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ $socialInfo->twitter }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">GitHub </label>
                                    <input type="text" class="form-control" name="github" value="{{ $socialInfo->github }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">YouTube </label>
                                    <input type="text" class="form-control" name="youtube" value="{{ $socialInfo->youtube }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Website </label>
                                    <input type="text" class="form-control" name="weblink" value="{{ $socialInfo->weblink }}">
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
