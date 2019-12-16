<!-- Modal -->
<div class="modal fade" id="BusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add new Bus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('bus.store')}}" enctype="multipart/form-data">
                <div class="modal-body">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="bus_name" class="form-control" aria-describedby="" placeholder="Enter Bus Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="bus_code" class="form-control" aria-describedby="" placeholder="Enter Bus Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="total_seats" class="form-control" aria-describedby="" placeholder="Enter Total Seats ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="operator_id" class="form-control">
                                            <option value="">Select Operator</option>
                                            @foreach($operators as $data)
                                                <option value="{{$data->operator_id}}">{{$data->operator_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label><input type="checkbox" name="status"> Active</label>
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register Bus</button>
                </div>
            </form>
        </div>
    </div>
</div>
