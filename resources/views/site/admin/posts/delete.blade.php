<div id="delete-modal" class="modal fade">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bd-0 tx-14">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="delete-modal-title"> <i class="fa fa-warning"></i> Warning</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <p class="mg-b-5" id="delete-modal-text">
          Do you want delete it ?
        </p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" ng-click="action.trash.destroy()"><i class="fa fa-trash"></i> Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
