<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('education.update', $eduInfo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Course Title</label>
                                        <input type="text" class="form-control" name="course_title" value="{{ $eduInfo->course_title }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Institute</label>
                                        <input type="text" class="form-control" name="institute" value="{{ $eduInfo->institute }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Course Duration</label>
                                        <input type="text" class="form-control" name="duration" value="{{ $eduInfo->duration }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Order</label>
                                        <input type="number" class="form-control" name="item_order" value="{{ $eduInfo->item_order }}">
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
