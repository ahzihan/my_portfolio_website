<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('experience.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" value="{{ old('course_title') }}" placeholder="Company Name">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="designation" value="{{ old('designation') }}" placeholder="Designation..">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="duration" value="{{ old('duration') }}" placeholder="Duration">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Order</label>
                                        <input type="number" class="form-control" name="item_order" value="{{ old('item_order') }}" placeholder="Order..">
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
