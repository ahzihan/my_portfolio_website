<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('aboutInfo.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/'.$aboutInfo->image_one) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="image_one">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{$aboutInfo->title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Sub Title </label>
                                    <input type="text" class="form-control" name="sub_title" value="{{ $aboutInfo->sub_title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $aboutInfo->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email </label>
                                    <input type="text" class="form-control" name="email" value="{{ $aboutInfo->email }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Phone </label>
                                    <input type="text" class="form-control" name="phone" value="{{ $aboutInfo->phone }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Sort Description</label>
                                    <textarea class="form-control" style="height: 60px;"  name="sort_description" id="" cols="30" rows="7">{{ $aboutInfo->sort_description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Long Description</label>
                                    <textarea class="form-control" style="height: 200px;" name="long_description" id="" cols="30" rows="10">{{ $aboutInfo->long_description }}</textarea>
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
