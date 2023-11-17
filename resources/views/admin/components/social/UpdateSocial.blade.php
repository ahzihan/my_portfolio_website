<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('social.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" value="{{$socialInfo->facebook }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">LinkedIn</label>
                                        <input type="text" class="form-control" name="linkedin" value="{{ $socialInfo->linkedin }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" value="{{ $socialInfo->instagram }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" value="{{ $socialInfo->twitter }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">GitHub </label>
                                        <input type="text" class="form-control" name="github" value="{{ $socialInfo->github }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">YouTube </label>
                                        <input type="text" class="form-control" name="youtube" value="{{ $socialInfo->youtube }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Website </label>
                                        <input type="text" class="form-control" name="weblink" value="{{ $socialInfo->weblink }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Status </label>
                                        <select name="status" class="form-select">
                                            <option value="1" @if ($socialInfo->status==1) selected @endif>Show</option>
                                            <option value="0" @if ($socialInfo->status==0) selected @endif>Hide</option>
                                        </select>
                                    </div>
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
