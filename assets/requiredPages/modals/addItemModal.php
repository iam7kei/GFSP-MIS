<div class="modal fade" id="addItems" role="dialog" style="width: 600px; top: 20%;left: 35%;">
                <div class="modal-dialog">
                    <!-- Modal content-->                    
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add item</h4>           
                    </div>                                           
                    <div class="modal-body">                                         
                    <div style="margin-bottom: 10px;">
                        <label>Item Type:</label>
                        <select class="form-control" id="selectItemType">
                            <option value="None">--SELECT ITEM TYPE--</option>
                            <option value="Fire Extinguisher">Fire Extinguisher</option>
                            <option value="Smoke Detectors">Smoke Detectors</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label>Item Description:</label>
                        <select class="form-control" id="selectItemName">
                            <option>--SELECT ITEM--</option>
                        </select>
                    </div>
                    <label>Quantity:</label>
                    <input require type="number" class="form-control input-sm" aria-controls="dataTables-example" id="itemQty" style="width: 70px;">
                    </div>
                    <div class="modal-footer">     
                        <input type="button" class="btn btn-default" style="width: 90px;" id="btnAddItem" value="Add" data-dismiss="modal">
                        <a href="#" class="btn btn-default" style="width: 90px;" data-dismiss="modal">Cancel</a>
                    </div>
                    </div>  
            </div>
        </div>