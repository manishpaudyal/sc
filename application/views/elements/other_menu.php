<div class="col-md-3">
      <div class="text-center">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>
<div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">
  <a href="#" class="logo hidden-sm hidden-xs">
    <i class="icon-cloud-download"></i>
    <span><?php echo $site_name;?></span>
  </a>
  <!-- <div class="search-box">
    <input type="text" placeholder="SEARCH" class="form-control">
  </div> -->
  <!-- <ul class="side-menu">
    <li>
      <a href="notifications.html">
        <span class="badge badge-notifications pull-right alert-animated">5</span>
        <i class="icon-flag"></i> Notifications
      </a> 
    </li>
  </ul> -->
  <div class="relative-w">
    <ul class="side-menu">
      <li class='current'>
        <a class='current' href="index-2.html">
          <span class="badge pull-right">17</span>
          <i class="icon-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('decisions/decision'); ?>" class="is-dropdown-menu">
          <span class="badge pull-right"></span>
          <i class="icon-bar-chart"></i> Charts
        </a>
        <ul>
          <li>
            <a href="<?php echo site_url('decisions/decision'); ?>">
              <i class="icon-random"></i>
              Area Chart
            </a>
          </li>
          <li>
            <a href="charts.html#circle_chart_anchor">
              <i class="icon-bullseye"></i>
              Circular Chart
            </a>
          </li>
          <li>
            <a href="charts.html#bar_chart_anchor">
              <i class="icon-signal"></i>
              Bar Chart
            </a>
          </li>
          <li>
            <a href="charts.html#line_chart_anchor">
              <i class="icon-bar-chart"></i>
              Line Chart
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="<?php echo site_url('subjects/subjects'); ?>">
          <span class="badge pull-right">12</span>
          <i class="icon-terminal"></i> Forms
        </a>
      </li>
      <li>
        <a href="elements.html" class="is-dropdown-menu">
          <span class="badge pull-right"></span>
          <i class="icon-code-fork"></i> UI Elements
        </a>
        <ul>
          <li>
            <a href="elements.html">
              <i class="icon-beaker"></i>
              Elements
            </a>
          </li>
          <li>
            <a href="icons.html">
              <i class="icon-picture"></i>
              Icons
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="datatable.html" class="is-dropdown-menu">
          <span class="badge pull-right">24</span>
          <i class="icon-th"></i> Tables
        </a>
        <ul>
          <li>
            <a href="datatable.html">
              <i class="icon-list-alt"></i>
              Data Tables
            </a>
          </li>
          <li>
            <a href="table.html">
              <i class="icon-table"></i>
              Regular Tables
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="calendar.html">
          <span class="badge pull-right">11</span>
          <i class="icon-calendar"></i> Calendar
        </a>
      </li>
      <li>
        <a href="login.html">
          <span class="badge pull-right"></span>
          <i class="icon-signin"></i> Login Page
        </a>
      </li>
    </ul>
  </div>
</div>
    </div>