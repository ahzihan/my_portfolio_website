<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title') }}" placeholder="Title..">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title"
                                            value="{{ old('sub_title') }}" placeholder="Sub Title..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="person_name"
                                            value="{{ old('person_name') }}" placeholder="Person Name">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="person_designation"
                                            value="{{ old('person_designation') }}" placeholder="Person Designation..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Person Image</label>
                                        <input type="file" class="form-control mt_10" name="person_image"
                                            value="{{ old('person_image') }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Background Image</label>
                                        <input type="file" class="form-control mt_10" name="bg_image"
                                            value="{{ old('bg_image') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Person Comments</label>
                                        <textarea class="form-control" style="height: 150px;" name="person_comment" id="" cols="30"
                                            rows="10">{{ old('person_comment') }}</textarea>
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Status </label>
                                        <select name="status" class="form-select">
                                            <option value="1">
                                                Show</option>
                                            <option value="0">
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
