<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Skill Name</th>
                                    <th>Percentage</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skills as $skill)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $skill->skill_name }}</td>
                                        <td>{{ $skill->score }}</td>
                                        <td>{{ $skill->position }}</td>
                                        <td>{{ $skill->status }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-primary" >Edit</a>
                                            <a href="{{ route('skill.show', $skill->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
