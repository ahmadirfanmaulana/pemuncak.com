<div id="form-edit-modal" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <form name="form" method="post">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">EDIT POST</h6>
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
                  <label class="form-control-label">Last Poster : <span class="tx-danger">*</span></label>
                  <img src="{{ asset('upload/img/posts') }}/@{{ data.field.poster }}" alt="" style="width : 200px;"> <br><br>
                  <label class="form-control-label">Change Poster : <span class="tx-danger">*</span></label>
                  <input type="file" name="" id="poster-change" value="">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Title : <span class="tx-danger">*</span></label>
                  <input type="text" placeholder="Enter Title" class="form-control" ng-model="data.field.title">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Type : <span class="tx-danger">*</span></label>
                  <select class="form-control" name="" ng-model="data.field.type">
                    <option value="">Select Type</option>
                    <option value="news">News</option>
                    <option value="blog">Article</option>
                  </select>
                </div>
              </div><!-- col-4 -->

              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label">Description : <span class="tx-danger">*</span></label>
                  <textarea rows="8" cols="80" required class="form-control" placeholder="Description" ng-model="data.field.description"></textarea>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
          </div>
          {{-- form --}}

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left" ng-click="action.edit.update()"><i class="fa fa-save"></i> Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </form>
      </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
