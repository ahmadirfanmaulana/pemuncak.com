<div id="form-modal" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <form name="form" method="post">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">NEW DESTINATIONS</h6>
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
                  <label class="form-control-label">Destination Name : <span class="tx-danger">*</span></label>
                  <input id="name" class="form-control" type="text" name="name" value="" placeholder="Enter Destination" ng-model="data.name">
                  <small id="packet-item-name-error"></small>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Poster : <span class="tx-danger">*</span></label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="poster">
                    <label class="custom-file-label custom-file-label-primary" for="icon">Choose file</label>
                  </div>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Province : <span class="tx-danger">*</span></label>
                  <select class="form-control" name="" ng-change="data.join.getRegionalWhere(data.province_id)" ng-model="data.province_id">
                    <option value="">Select Province</option>
                    <option value="@{{ province.id }}" ng-repeat="province in data.join.provinces">
                      @{{ province.name }}
                    </option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Regional : <span class="tx-danger">*</span></label>
                  <select class="form-control" name="" ng-model="data.regional_id">
                    <option value="">Select Regional</option>
                    <option value="@{{ regional.id }}" ng-repeat="regional in data.join.regionals">
                      @{{ regional.name }}
                    </option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Full Address : <span class="tx-danger">*</span></label>
                  <textarea id="about-item" name="about_item" rows="8" cols="80" class="form-control" placeholder="Full Adress" ng-model="data.full_address"></textarea>
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">360 Preview : <span class="tx-danger">*</span></label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="preview">
                    <label class="custom-file-label custom-file-label-primary" for="preview">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">About Destination : <span class="tx-danger">*</span></label>
                  <textarea id="about-item" name="about_item" rows="8" cols="80" class="form-control" placeholder="About Destination" ng-model="data.about"></textarea>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
          </div>
          {{-- form --}}

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left" ng-click="action.save.run()"><i class="fa fa-save"></i> Save</button>
          <button type="button" class="btn btn-primary pull-left" ng-click="action.save.run('andClose')"><i class="fa fa-save"></i> Save & Close</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </form>
      </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
