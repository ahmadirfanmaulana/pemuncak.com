<div id="form-modal" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <form name="form" method="post">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">NEW STEPS</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">

          {{-- form --}}
          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Destination : <span class="tx-danger">*</span></label>
                  <select class="form-control" required ng-model="data.field.destination_id">
                    <option value="">Select Destination</option>
                    <option value="@{{ des.id }}" ng-repeat="des in data.belongsTo.destinations">
                      @{{ des.name }}
                    </option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Level : <span class="tx-danger">*</span></label>
                  <input class="form-control" required type="number" min="1" value="" placeholder="Enter Level" ng-model="data.field.level">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Sum Point : <span class="tx-danger">*</span></label>
                  <input class="form-control" required type="number" min="1" value="" placeholder="Enter If Success Point" ng-model="data.field.sum_point">
                  <small id="packet-item-name-error"></small>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Sub Point : <span class="tx-danger">*</span></label>
                  <input class="form-control" required type="number" value="" placeholder="Enter If Not Success Point" ng-model="data.field.sub_point">
                  <small id="packet-item-name-error"></small>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">About Step : <span class="tx-danger">*</span></label>
                  <textarea rows="8" cols="80" required class="form-control" placeholder="About Step" ng-model="data.field.description"></textarea>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
          </div>
          {{-- form --}}

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left" ng-click="action.create.restore()"><i class="fa fa-save"></i> Save</button>
          <button type="submit" class="btn btn-primary pull-left" ng-click="action.create.restore('andClose')"><i class="fa fa-save"></i> Save & Close</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </form>
      </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
