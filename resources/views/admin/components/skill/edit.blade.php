<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('skill.update', $skillInfo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$skillInfo->title }}" @if($skillInfo->title) @readonly(true)@endif>
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title" value="{{ $skillInfo->sub_title }}" @if($skillInfo->sub_title) @readonly(true)@endif>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Skill Name</label>
                                        <input type="text" class="form-control" name="skill_name" value="{{ $skillInfo->skill_name }}">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Percentage</label>
                                        <input type="text" class="form-control" name="score" value="{{ $skillInfo->score }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Status </label>
                                        <select name="status" class="form-select">
                                            <option value="1" @if ($skillInfo->status==1) selected @endif>Show</option>
                                            <option value="0" @if ($skillInfo->status==0) selected @endif>Hide</option>
                                        </select>
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="form-label">Position </label>
                                        <select name="position" class="form-select">
                                            <option value="Left" @if ($skillInfo->position=='Left') selected @endif>Left</option>
                                            <option value="Right" @if ($skillInfo->position=='Right') selected @endif>Right</option>
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
