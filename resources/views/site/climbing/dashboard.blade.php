@extends('layouts.app_dashboard')

@section('title')

@endsection

@section('content')
  <div class="col-md-6 col-lg-3 order-lg-1">
    <div class="card">
      <div class="card-body pd-b-0">
        <h6 class="slim-card-title">Page Impressions</h6>
        <h1 class="tx-lato tx-primary">323,360</h1>
        <p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
      </div><!-- card-body -->
      <div id="rs3" class="ht-50 ht-sm-70 mg-r--1 rickshaw_graph"><svg width="269" height="70"><path class="path" d="M0,41.12211221122112Q17.933333333333334,31.496149614961496,20.692307692307693,29.57095709570957C24.83076923076923,26.683168316831683,37.246153846153845,14.554455445544548,41.38461538461539,12.244224422442237S57.93846153846154,7.623762376237616,62.07692307692308,6.468646864686462S78.63076923076923,0.11551155115510858,82.76923076923077,0.6930693069306859S99.32307692307693,10.511551155115503,103.46153846153847,12.244224422442237S120.01538461538462,16.28712871287129,124.15384615384616,18.01980198019802S140.7076923076923,27.83828382838284,144.84615384615384,29.57095709570957S161.4,35.92409240924093,165.53846153846155,35.34653465346535S182.09230769230768,25.528052805280527,186.23076923076923,23.795379537953796S202.7846153846154,19.174917491749177,206.92307692307693,18.01980198019802S223.47692307692307,11.089108910891081,227.6153846153846,12.244224422442237S244.16923076923078,29.57095709570957,248.30769230769232,29.57095709570957Q251.0666666666667,29.57095709570957,269,12.244224422442237" fill="none" stroke="#1B84E7" stroke-width="2" opacity="1"></path><path class="stroke"></path></svg></div>
    </div><!-- card -->

    <div class="card card-activities pd-20 mg-t-10">
      <h6 class="slim-card-title">Recent Activities</h6>
      <p>Last activity was 1 hour ago</p>

      <div class="media-list">
        <div class="media">
          <div class="activity-icon bg-primary">
            <i class="icon ion-stats-bars"></i>
          </div><!-- activity-icon -->
          <div class="media-body">
            <h6>Report has been updated</h6>
            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
            <span>2 hours ago</span>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media">
          <div class="activity-icon bg-success">
            <i class="icon ion-trophy"></i>
          </div><!-- activity-icon -->
          <div class="media-body">
            <h6>Achievement Unlocked</h6>
            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
            <span>2 hours ago</span>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media">
          <div class="activity-icon bg-purple">
            <i class="icon ion-image"></i>
          </div><!-- activity-icon -->
          <div class="media-body">
            <h6>Added new images</h6>
            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor.</p>
            <span>2 hours ago</span>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- media-list -->
    </div><!-- card -->

    <div class="card card-todo mg-t-10">
      <h6 class="slim-card-title">Todo Item List</h6>
      <div class="todo-list">
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox" checked=""><span>Do something</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox" checked=""><span>Do more stuff</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Do something else</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Do something again</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Do something more</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Do even more</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Do something more</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Finish something</span>
          </label>
        </div><!-- todo-item -->
        <div class="todo-item">
          <label class="ckbox">
            <input type="checkbox"><span>Finish something more</span>
          </label>
        </div><!-- todo-item -->
      </div><!-- todo-list -->
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0 order-lg-3">
    <div class="card">
      <div class="card-body">
        <h6 class="slim-card-title mg-b-20">Sale Progress</h6>

        <label class="mg-b-5">24,224 sales</label>
        <div class="progress mg-b-15">
          <div class="progress-bar bg-warning progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div><!-- progress -->

        <label class="mg-b-5">43,765 sales</label>
        <div class="progress mg-b-15">
          <div class="progress-bar bg-primary progress-bar-xs wd-70p" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div><!-- progress -->

        <label class="mg-b-5">14,220 sales</label>
        <div class="progress mg-b-15">
          <div class="progress-bar bg-danger progress-bar-xs wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div><!-- progress -->

        <label class="mg-b-5">20,220 sales</label>
        <div class="progress mg-b-15">
          <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
        </div><!-- progress -->
      </div><!-- card-body -->
    </div><!-- card -->

    <div class="card card-body pd-20 mg-t-10">
      <h6 class="slim-card-title mg-b-20">Most Visited</h6>
      <div class="mg-b-25">
        <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#663090&quot;,&quot;#EC1778&quot;,&quot;#5B93D3&quot;], &quot;height&quot;: 200, &quot;width&quot;: &quot;100%&quot; }" style="display: none;">10,5,4</span><svg class="peity" height="200" width="100%"><path d="M 114 0 A 100 100 0 1 1 97.54054097192662 198.63613034027225 L 105.77027048596331 149.31806517013612 A 50 50 0 1 0 114 50" data-value="10" fill="#663090"></path><path d="M 97.54054097192662 198.63613034027225 A 100 100 0 0 1 17.059973406066945 75.45145128592011 L 65.52998670303347 87.72572564296006 A 50 50 0 0 0 105.77027048596331 149.31806517013612" data-value="5" fill="#EC1778"></path><path d="M 17.059973406066945 75.45145128592011 A 100 100 0 0 1 113.99999999999999 0 L 113.99999999999999 50 A 50 50 0 0 0 65.52998670303347 87.72572564296006" data-value="4" fill="#5B93D3"></path></svg>
      </div>
      <div class="d-flex align-items-center">
        <span class="square-10 bg-purple rounded-circle"></span>
        <span class="mg-l-10">San Francisco</span>
        <span class="mg-l-auto tx-lato tx-right">9,212</span>
      </div>
      <div class="d-flex align-items-center mg-t-5">
        <span class="square-10 bg-pink rounded-circle"></span>
        <span class="mg-l-10">Los Angeles</span>
        <span class="mg-l-auto tx-lato tx-right">8,768</span>
      </div>
      <div class="d-flex align-items-center mg-t-5">
        <span class="square-10 bg-info rounded-circle"></span>
        <span class="mg-l-10">San Diego</span>
        <span class="mg-l-auto tx-lato tx-right">8,355</span>
      </div>
    </div><!-- card -->

    <div class="card card-body pd-20 mg-t-10">
      <h6 class="slim-card-title mg-b-20">Quick Contact Form</h6>
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Enter your name">
      </div><!-- form-group -->
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Enter your email">
      </div><!-- form-group -->
      <div class="form-group">
        <textarea name="name" class="form-control" rows="3" placeholder="Enter your message"></textarea>
      </div><!-- form-group -->
      <button class="btn btn-primary btn-block">Send Message</button>
    </div><!-- card -->
  </div><!-- col-3 -->
  <div class="col-lg-6 mg-t-10 mg-lg-t-0 order-lg-2">
    <div class="card">
      <div class="card-header">
        <h6 class="slim-card-title">The Next Adventure</h6>
        <ul class="nav nav-tabs card-header-tabs" style="margin-top:20px;">
          <li class="nav-item">
            <a class="nav-link" href="#popular" data-toggle="tab"><i class="flaticon-xs flaticon-hiking"></i> Destination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#recent" data-toggle="tab"><i class="flaticon-xs flaticon-route"></i> Route</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active show" href="#toprated" data-toggle="tab"><i class="flaticon-xs flaticon-cloudy"></i> Weathers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#toprated" data-toggle="tab"><i class="fa fa-calendar-o"></i> Date</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#toprated" data-toggle="tab"><i class="fa fa-info-circle"></i> About Step</a>
          </li>
        </ul>
      </div><!-- card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane" id="popular">
            Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...
          </div><!-- tab-pane -->
          <div class="tab-pane" id="recent">
            Recent content goes here...
          </div><!-- tab-pane -->
          <div class="tab-pane active show" id="toprated">
            Top rated content goes here...
          </div><!-- tab-pane -->
        </div><!-- tab-content -->
      </div><!-- card-body -->
    </div>

    <div class="card card-customer-overview mg-t-10">
      <div class="card-header">
        <h6 class="slim-card-title">Sales Overview</h6>
        <nav class="nav">
          <a href="" class="nav-link active">Day</a>
          <a href="" class="nav-link">Week</a>
          <a href="" class="nav-link">Month</a>
        </nav>
      </div><!-- card-header -->
      <div class="card-body">
        <div id="flotBar1" class="ht-200 ht-sm-300" style="padding: 0px; position: relative;"><canvas class="flot-base" width="508" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 508px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 23px; text-align: center;">0</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 86px; text-align: center;">2</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 149px; text-align: center;">4</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 213px; text-align: center;">6</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 276px; text-align: center;">8</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 337px; text-align: center;">10</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 400px; text-align: center;">12</div><div style="position: absolute; max-width: 56px; top: 287px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 463px; text-align: center;">14</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 276px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 7px; text-align: right;">0.0</div><div style="position: absolute; top: 230px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 7px; text-align: right;">2.5</div><div style="position: absolute; top: 185px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 7px; text-align: right;">5.0</div><div style="position: absolute; top: 139px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 7px; text-align: right;">7.5</div><div style="position: absolute; top: 93px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 1px; text-align: right;">10.0</div><div style="position: absolute; top: 48px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 1px; text-align: right;">12.5</div><div style="position: absolute; top: 2px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 10px; line-height: 12px; font-family: Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; color: rgb(102, 102, 102); left: 1px; text-align: right;">15.0</div></div></div><canvas class="flot-overlay" width="508" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 508px; height: 300px;"></canvas></div>
      </div><!-- card-body -->
    </div><!-- card -->

    <div class="card card-quick-post mg-t-10">
      <h6 class="slim-card-title">Share Your Thoughts</h6>
      <div class="form-group">
        <textarea class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
      </div><!-- form-group -->
      <div class="card-footer">
        <button class="btn btn-purple">Share Post</button>
        <nav>
          <a href=""><i class="icon ion-images"></i></a>
          <a href=""><i class="icon ion-aperture"></i></a>
          <a href=""><i class="icon ion-calendar"></i></a>
        </nav>
      </div><!-- card-footer -->
    </div><!-- card -->
  </div><!-- col-6 -->
@endsection
