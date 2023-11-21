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
                                    <th>Company Name</th>
                                    <th>Designation</th>
                                    <th>Duration</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expInfo as $exp)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $exp->company_name }}</td>
                                        <td>{{ $exp->designation }}</td>
                                        <td>{{ $exp->duration }}</td>
                                        <td>{{ $exp->item_order }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('experience.edit', $exp->id) }}" class="btn btn-primary" >Edit</a>
                                            <a href="{{ route('experience.destroy', $exp->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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
