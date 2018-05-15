<div class="col-md-12">

  <ul class="nav nav-activity-profile">
    <li class="nav-item"><a href="#" class="nav-link" ng-click="action.load()"><i class="icon fa fa-refresh tx-purple"></i> Refresh Posts</a></li>
  </ul>

  <div class="card card-table mg-t-20">
    <div class="card-header">
      <h6 class="slim-card-title">LIST CLIMBERS <span class="pull-right">All Climbers : <span class="text-info">@{{ data.count }} <i class="icon ion ion-android-contacts"></i></span></h6>
    </div><!-- card-header -->
    <div class="card-header">
      <span class="pull-left">
        <select class="form-control" name="" ng-model="data.limit" ng-options="x for x in data.limitSelect"></select>
      </span>
      <span class="pull-right">
        <input type="search" name="" value="" ng-model="data.search" placeholder="Search..." class="form-control">
      </span>
    </div><!-- card-header -->
    <div class="table-responsive">
      <table class="table mg-b-0 tx-13">
        <thead> 
          <tr class="tx-10">
            <th class="wd-10p pd-y-5">Photo</th>
            <th class="pointer" ng-click="data.orderBy = '-first_name'" ng-if="data.orderBy == 'first_name'">
              <i class="fa fa-sort-alpha-asc m-r-10"></i> Name
            </th>
            <th class="pointer" ng-click="data.orderBy = 'first_name'" ng-if="data.orderBy != 'first_name'">
              <i class="fa fa-sort-alpha-desc m-r-10"></i> Name
            </th>
            <th class="pointer" ng-click="data.orderBy = '-username'" ng-if="data.orderBy == 'username'">
              <i class="fa fa-sort-alpha-asc m-r-10"></i> Username
            </th>
            <th class="pointer" ng-click="data.orderBy = 'username'" ng-if="data.orderBy != 'username'">
              <i class="fa fa-sort-alpha-desc m-r-10"></i> Username
            </th>
            <th class="pointer" ng-click="data.orderBy = '-email'" ng-if="data.orderBy == 'email'">
              <i class="fa fa-sort-alpha-asc m-r-10"></i> Email
            </th>
            <th class="pointer" ng-click="data.orderBy = 'email'" ng-if="data.orderBy != 'email'">
              <i class="fa fa-sort-alpha-desc m-r-10"></i> Email
            </th>
            <th class="pointer text-center" ng-click="data.orderBy = '-gender'" ng-if="data.orderBy == 'gender'">
              <i class="fa fa-sort-alpha-asc m-r-10"></i> Gender
            </th>
            <th class="pointer text-center" ng-click="data.orderBy = 'gender'" ng-if="data.orderBy != 'gender'">
              <i class="fa fa-sort-alpha-desc m-r-10"></i> Gender
            </th>
            <th class="pointer text-center" ng-click="data.orderBy = '-point'" ng-if="data.orderBy == 'point'">
              <i class="fa fa-sort-alpha-asc m-r-10"></i> Point
            </th>
            <th class="pointer text-center" ng-click="data.orderBy = 'point'" ng-if="data.orderBy != 'point'">
              <i class="fa fa-sort-alpha-desc m-r-10"></i> Point
            </th>
            <th class="pd-y-5 tx-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="row in data.fromDB | filter:data.search | limitTo:data.limit | orderBy:data.orderBy">
            <td class="pd-l-20">
              <img src="{{ asset('upload/img/users') }}/@{{ row.photo }}" class="wd-55" alt="Image">
            </td>
            <td class="valign-middle">
              @{{ row.first_name + " " + row.last_name }}
            </td>
            <td class="valign-middle">
              @{{ row.username }}
            </td>
            <td class="valign-middle">
              @{{ row.email }}
            </td>
            <td class="text-center valign-middle">
              <span ng-if="row.gender == 'F'">
                Female
              </span>
              <span ng-if="row.gender == 'M'">
                Male
              </span>
            </td>
            <td class="text-center valign-middle">
              @{{ row.point }}
            </td>
            <td class="valign-middle tx-center">
              <a data-toggle="tooltip-warning" title="Edit @{{ row.title }} Post" href="#" class="tx-gray-600 tx-24" ng-click="action.edit.start(row)"><i class="fa fa-pencil-square-o"></i></a>
              <a data-toggle="tooltip-danger" title="Delete @{{ row.title }} Post" href="#" class="tx-danger-600 tx-24 mg-l-10" ng-click="action.trash.start(row)"><i class="fa fa-trash-o"></i></a>
              <a data-toggle="tooltip-indigo" title="Detail @{{ row.title }} Post" href="#" class="tx-primary-600 tx-24 mg-l-10" ng-click="action.trash.start(row)"><i class="fa fa-share"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!-- table-responsive -->
  </div>
</div>
