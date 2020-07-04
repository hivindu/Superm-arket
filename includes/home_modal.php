<!-- Edit -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Update New Stock</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="add_quantity.php">
                <input type="hidden" class="userid" name="id">
                
                <div class="form-group">
                    <label for="edit_companyName" class="col-sm-3 control-label">Quantity</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_companyName" name="quantity">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Add</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="mail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Re-Order</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="order_stock.php">
              <input type="hidden" class="userid" name="id">
              <input type="hidden" class="supplierid" name="supplier">

                <div class="form-group">
                    <label for="edit_companyName" class="col-sm-3 control-label">Quantity</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="order_quantity" name="quantity">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="order"><i class="fa fa-arrow-circle-right"></i> Order</button>
              </form>
            </div>
        </div>
    </div>
</div>




     