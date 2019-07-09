@extends('layouts.adminLayout.admin_design')
@section('content')
    
 <div class="content">
  
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">inbox</i>
                  </div>
                  <p class="card-category">Total Raffles</p>
                  <h3 class="card-title">{{count($products)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                       Live / Ended
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">alarm_on</i>
                  </div>
                  <p class="card-category">Live Raffles</p>
                  <h3 class="card-title">{{count($activeRaffles)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    Live Raffles
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">alarm_off</i>
                  </div>
                  <p class="card-category">Past Raffles</p>
                <h3 class="card-title">{{count($endedRaffles)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Ended Raffles
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <p class="card-category">Ending Soon</p>
                  <h3 class="card-title">{{count($endingSoon)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-first-order" aria-hidden="true"></i>
                  </div>
                  <p class="card-category">Total Orders</p>
                  <h3 class="card-title">5</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                       Live / Ended
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                   <i class="fa fa-trophy" aria-hidden="true"></i>

                  </div>
                  <p class="card-category">Total Winners</p>
                  <h3 class="card-title">4</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    Winners
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <p class="card-category">Users</p>
                  <h3 class="card-title">{{count($users)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Varified Users
                  </div>
                </div>
              </div>
            </div>

             <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user-o"></i>
                  </div>
                  <p class="card-category">Subscribers</p>
                  <h3 class="card-title">{{count($subscribers)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Subscriber
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

@endsection