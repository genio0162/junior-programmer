@extends('dashboard.layouts.main')
@section('main')
<!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row" style="display: inline-block;" >
            <div class="tile_count">
              <div class="col-md-3 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Publishers</span>
                <div class="count">{{ $publishers->count() }}</div>
              </div>
              <div class="col-md-3 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Total Journals</span>
                <div class="count">{{ $journals->count() }}</div>
              </div>
              <div class="col-md-3 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Articles</span>
                <div class="count green">{{ $articles->count() }}</div>
              </div>
              <div class="col-md-3 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                <div class="count green">{{ $users->count() }}</div>
              </div>
            </div>
          </div>
            <!-- /top tiles -->
            <div class="">
                <div class="clearfix"></div>

                <div class="row">
                  <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Plain Page</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                          Add content to the page ...
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- /page content -->
@endsection