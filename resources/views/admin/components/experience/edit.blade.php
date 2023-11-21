<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('experience.update', $expInfo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" value="{{ $expInfo->company_name }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="designation" value="{{ $expInfo->designation }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="duration" value="{{ $expInfo->duration }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Order</label>
                                        <input type="number" class="form-control" name="item_order" value="{{ $expInfo->item_order }}">
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
