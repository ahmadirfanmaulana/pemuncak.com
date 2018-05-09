
<ul class="nav nav-activity-profile">
  <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load()"><i class="icon fa fa-refresh tx-purple"></i> Refresh Posts</a></li>
  <li class="nav-item"><a href="#" class="nav-link"><i class="icon ion-image tx-primary"></i> Publish photo</a></li>
  <li class="nav-item"><a href="#" class="nav-link" ng-click="action.save.start()"><i class="icon ion-document-text tx-success"></i> Add an post</a></li>
</ul>

<div class="card card-table mg-t-20">
  <div class="card-header">
    <h6 class="slim-card-title valign-bottom">LIST DESTINATIONS <span class="pull-right">All Destination : <span class="text-info">@{{ data.count }} <i class="fa fa-flag"></i></span> </span> </h6>
  </div><!-- card-header -->
  <div class="card-header">
    <h6 class="slim-card-title valign-bottom">
      <span class="pull-left">
        <select class="form-control" name="" ng-model="data.limit" ng-options="x for x in data.limitData"></select>
      </span>
      <span class="pull-right">
        <input type="search" name="" value="" class="form-control" placeholder="Search..." ng-model="data.search">
      </span>
    </h6>
  </div><!-- card-header -->
  <div class="table-responsive">
      <table class="table mg-b-0 tx-13">
        <thead>
          <tr class="tx-10">
            <th class="wd-10p pd-y-5">Poster</th>
            {{-- name --}}
            <th class="wd-30p pd-y-5 pointer" ng-click="action.orderBy('name')">
              <i class="fa fa-sort m-r-10" ng-if="data.orderBy != 'name' && data.orderBy != '-name'"></i>
              <i class="fa fa-sort-alpha-asc m-r-10" ng-if="data.orderBy == 'name'"></i>
              <i class="fa fa-sort-alpha-desc m-r-10" ng-if="data.orderBy == '-name'"></i>
              Name
            </th>
            {{-- regional name --}}
            <th class="wd-25p pd-y-5 pointer" ng-click="action.orderBy('regional')">
              <i class="fa fa-sort m-r-10" ng-if="data.orderBy != 'regional' && data.orderBy != '-regional'"></i>
              <i class="fa fa-sort-alpha-asc m-r-10" ng-if="data.orderBy == 'regional'"></i>
              <i class="fa fa-sort-alpha-desc m-r-10" ng-if="data.orderBy == '-regional'"></i>
              Regional
            </th>
            {{-- province name --}}
            <th class="wd-20p pd-y-5 pointer" ng-click="action.orderBy('province')">
              <i class="fa fa-sort m-r-10" ng-if="data.orderBy != 'province' && data.orderBy != '-province'"></i>
              <i class="fa fa-sort-alpha-asc m-r-10" ng-if="data.orderBy == 'province'"></i>
              <i class="fa fa-sort-alpha-desc m-r-10" ng-if="data.orderBy == '-province'"></i>
              Province
            </th>
            {{-- <th class="pd-y-5 pointer" ng-click="data.orderBy = 'name'">Name</th>
            <th class="pd-y-5 pointer" ng-click="data.orderBy = 'regional.name'">Regional</th>
            <th class="pd-y-5 pointer" ng-click="data.orderBy = 'province.name'">Province</th> --}}
            <th class="wd-15p pd-y-5 tx-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="row in data.fromDB | filter:data.search | orderBy:data.orderBy | limitTo : data.limit : data.offset">
            <td class="pd-l-20">
              <img src="{{ asset('upload/img/destinations/poster') }}/@{{ row.poster }}" alt="" style="width : 50px; height: 50px; object-fit: cover;">
            </td>
            <td class="text-uppercase valign-middle">
              <a href="#" class="tx-inverse tx-14 tx-medium d-block">@{{ row.name }}</a>
              <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> @{{ row.created_at }}</span>
            </td>
            <td class="valign-middle">
                @{{ row.regional.name }}
            </td>
            <td class="valign-middle">
              @{{ row.province.name }}
            </td>
            <td class="valign-middle text-center">
              <a data-toggle="tooltip-warning" title="Edit @{{ row.name }} Destination" href="" class="tx-gray-600 tx-24" ng-click="action.edit.start(row)">
                <i class="fa fa-pencil-square-o"></i>
              </a>
              <a data-toggle="tooltip-danger" title="Delete @{{ row.name }} Destination" href="" class="tx-danger-600 tx-24 mg-l-10" ng-click="action.trash.start(row)">
                <i class="fa fa-trash-o"></i>
              </a>
              <a data-toggle="tooltip-indigo" title="Detail @{{ row.name }} Destination" href="" class="tx-primary-600 tx-24 mg-l-10" ng-click="action.trash.start(row)">
                <i class="fa fa-share"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!-- table-wrapper -->
    <div class="pagination-wrapper justify-content-between">
      <ul class="pagination pagination-circle mg-b-0">

        <li class="page-item">
          <a class="page-link" href="" aria-label="Next" ng-click="data.offset = data.offset - data.limit">
            <i class="fa fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="pagination pagination-circle mg-b-0">
        <li class="page-item" ng-repeat="paging in data.paging">
          <a class="page-link" href="" ng-click="data.offset = ( paging * data.limit ) - data.limit">
            @{{ paging }}
          </a>
        </li>
        {{-- <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
        <li class="page-item hidden-xs-down"><a class="page-link" href="#">4</a></li>
        <li class="page-item disabled"><span class="page-link">...</span></li>
        <li class="page-item"><a class="page-link" href="#">10</a></li> --}}
      </ul>
      <ul class="pagination pagination-circle mg-b-0">
        <li class="page-item">
          <a class="page-link" href="" aria-label="Next" ng-click="data.offset = data.offset + data.limit" ng-if="(data.offset + data.limit) < data.count ">
            <i class="fa fa-angle-right"></i>
          </a>
        </li>
      </ul>
    </div>
</div>
