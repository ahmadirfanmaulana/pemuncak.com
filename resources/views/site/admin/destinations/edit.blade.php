<button ng-click="goTo('/')" ng-linkto class="btn btn-danger">
  <i class="icon ion ion-backspace-outline"></i>
  Back
</button>
<br><br>

<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between pd-y-5 bd-b">
    <h6 class="mg-b-0 tx-14 tx-inverse"><i class="ion ion-ios-list-outline"></i> FORM EDIT DESTINATIONS</h6>
    <div class="card-option tx-24">
      <a href="#" class="tx-gray-600 mg-l-10" ng-linkto ng-click="goTo('/')"> <i class="icon ion ion-close"></i> </a>
    </div><!-- card-option -->
  </div><!-- card-header -->
  <div class="card-body">
    <div class="table-wrapper">

      {{-- form --}}
      <div class="form-layout form-layout-2">
        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-control-label">Destination Name : <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" type="text" name="name" value="" placeholder="Enter Destination" ng-model="data.change.name">
              <small id="packet-item-name-error"></small>
            </div>
          </div><!-- col-4 -->
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Image Then : *</label> <br>
              <img src="{{ asset('upload/img/destinations/poster') }}/@{{ data.change.poster }}" alt="" style="width : 200px;">
              <br><br>
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
              <select class="form-control" name="" ng-change="data.join.getRegionalWhere(data.change.province.id)" ng-model="data.change.province.id">

                <option ng-else value="@{{ province.id }}" ng-repeat="province in data.join.provinces">
                  @{{ province.name }}
                </option>

              </select>
            </div>
          </div><!-- col-4 -->
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label">Regional : <span class="tx-danger">*</span></label>
              <select class="form-control" name="" ng-model="data.change.regional.id">

                <option value="@{{ regional.id }}" ng-repeat="regional in data.join.regionals">
                  @{{ regional.name }}
                </option>
                
              </select>
            </div>
          </div><!-- col-4 -->
          <div class="col-md-12">
            <div class="form-group">
              <label class="form-control-label">Full Address : <span class="tx-danger">*</span></label>
              <textarea id="about-item" name="about_item" rows="8" cols="80" class="form-control" placeholder="Full Adress"  ng-model="data.change.full_address"></textarea>
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
        </div><!-- row -->
      </div>
      {{-- form --}}

      </div><!-- table-wrapper -->
  </div>
</div>
