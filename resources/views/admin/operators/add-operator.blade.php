<!-- Modal -->
<div class="modal fade" id="OperatorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add new Operator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('operator.store')}}" enctype="multipart/form-data">
                <div class="modal-body">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="operator_name" class="form-control" aria-describedby="" placeholder="Enter Operator Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="operator_email" class="form-control" aria-describedby="" placeholder="Enter Operator Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="operator_phone" class="form-control" aria-describedby="" placeholder="Enter Operator Phone">
                            </div>
                            <div class="form-group">
                                <textarea name="operator_address" cols="20" rows="2" class="form-control"></textarea>
                            </div>
    {{--                        <div class="form-group">--}}
    {{--                            <textarea name="operator_description" cols="20" rows="2" class="form-control"></textarea>--}}
    {{--                        </div>--}}

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label><input type="checkbox" name="status"> Active</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Image</label>
                                    <input type="file" name="operator_logo">
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register Operator</button>
                </div>
            </form>
        </div>
    </div>
</div>
