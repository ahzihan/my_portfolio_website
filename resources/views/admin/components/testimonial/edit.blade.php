<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonial.update', $testInfo->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $testInfo->title }}" readonly>
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title"
                                            value="{{ $testInfo->sub_title }}" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="person_name"
                                            value="{{ $testInfo->person_name }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="person_designation"
                                            value="{{ $testInfo->person_designation }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Person Image</label>
                                        <input type="file" class="form-control mt_10" name="person_image"
                                            value="{{ $testInfo->person_image }}">
                                        <img src="{{ asset('uploads/' . $testInfo->person_image) }}" alt=""
                                            style="height: 150px; width: 150px;">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Background Image</label>
                                        <input type="file" class="form-control mt_10" name="bg_image"
                                            value="{{ $testInfo->bg_image }}">
                                        <img src="{{ asset('uploads/' . $testInfo->bg_image) }}" alt=""
                                            style="height: 150px; width: 150px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Person Comments</label>
                                        <textarea class="form-control" style="height: 150px;" name="person_comment" id="" cols="30"
                                            rows="10">{{ $testInfo->person_comment }}</textarea>
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Status </label>
                                        <select name="status" class="form-select">
                                            <option value="1" @if ($testInfo->status == 1) selected @endif>
                                                Show</option>
                                            <option value="0" @if ($testInfo->status == 0) selected @endif>
                                                Hide</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
