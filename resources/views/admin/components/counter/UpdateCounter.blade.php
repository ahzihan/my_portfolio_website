<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('updateCounter') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/'.$counterInfo->bg_image) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="bg_image">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Clients *</label>
                                    <input type="text" class="form-control" name="clients_title" value="{{ $counterInfo->clients_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Total Clients *</label>
                                    <input type="text" class="form-control" name="clients_number" value="{{ $counterInfo->clients_number }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Projects *</label>
                                    <input type="text" class="form-control" name="project_title" value="{{ $counterInfo->project_title}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Total Projects *</label>
                                    <input type="text" class="form-control" name="project_number" value="{{ $counterInfo->project_number }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Students *</label>
                                    <input type="text" class="form-control" name="student_title" value="{{ $counterInfo->student_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Total Students *</label>
                                    <input type="text" class="form-control" name="student_number" value="{{ $counterInfo->student_number }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Products *</label>
                                    <input type="text" class="form-control" name="product_title" value="{{ $counterInfo->product_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Total Products *</label>
                                    <input type="text" class="form-control" name="product_number" value="{{ $counterInfo->product_number }}">
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
