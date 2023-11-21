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
                                    <th>Course Name</th>
                                    <th>Institute</th>
                                    <th>Duration</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eduInfo as $edu)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $edu->course_title }}</td>
                                        <td>{{ $edu->institute }}</td>
                                        <td>{{ $edu->duration }}</td>
                                        <td>{{ $edu->item_order }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('education.edit', $edu->id) }}" class="btn btn-primary" >Edit</a>
                                            <a href="{{ route('education.destroy', $edu->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
