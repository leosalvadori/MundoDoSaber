<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('metisMenu.min.css') ?>
    <?= $this->Html->css('sb-admin-2.css') ?>
    <?= $this->Html->css('morris.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('metisMenu.min.js') ?>
    <?= $this->Html->script('raphael.min.js') ?>
    <?= $this->Html->script('morris.min.js') ?>
    <?= $this->Html->script('morris-data.js') ?>
    <?= $this->Html->script('sb-admin-2.js') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
  <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
          </div>
          <!-- /.navbar-header -->

          <ul class="nav navbar-top-links navbar-right">
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-messages">
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>Read All Messages</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-messages -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-tasks">
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 1</strong>
                                      <span class="pull-right text-muted">40% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 2</strong>
                                      <span class="pull-right text-muted">20% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                          <span class="sr-only">20% Complete</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 3</strong>
                                      <span class="pull-right text-muted">60% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 4</strong>
                                      <span class="pull-right text-muted">80% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">80% Complete (danger)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>See All Tasks</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-tasks -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-alerts">
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-comment fa-fw"></i> New Comment
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                  <span class="pull-right text-muted small">12 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-envelope fa-fw"></i> Message Sent
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-tasks fa-fw"></i> New Task
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                  <span class="pull-right text-muted small">4 minutes ago</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-alerts -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
                  <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
          </ul>
          <!-- /.navbar-top-links -->

          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                      <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                          </div>
                          <!-- /input-group -->
                      </li>
                      <li>
                          <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="flot.html">Flot Charts</a>
                              </li>
                              <li>
                                  <a href="morris.html">Morris.js Charts</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                      </li>
                      <li>
                          <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="panels-wells.html">Panels and Wells</a>
                              </li>
                              <li>
                                  <a href="buttons.html">Buttons</a>
                              </li>
                              <li>
                                  <a href="notifications.html">Notifications</a>
                              </li>
                              <li>
                                  <a href="typography.html">Typography</a>
                              </li>
                              <li>
                                  <a href="icons.html"> Icons</a>
                              </li>
                              <li>
                                  <a href="grid.html">Grid</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Second Level Item</a>
                              </li>
                              <li>
                                  <a href="#">Third Level <span class="fa arrow"></span></a>
                                  <ul class="nav nav-third-level">
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Item</a>
                                      </li>
                                  </ul>
                                  <!-- /.nav-third-level -->
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="blank.html">Blank Page</a>
                              </li>
                              <li>
                                  <a href="login.html">Login Page</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level -->
                      </li>
                  </ul>
              </div>
              <!-- /.sidebar-collapse -->
          </div>
          <!-- /.navbar-static-side -->
      </nav>

      <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Dashboard</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-comments fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge">26</div>
                                  <div>New Comments!</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-green">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-tasks fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge">12</div>
                                  <div>New Tasks!</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-yellow">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-shopping-cart fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge">124</div>
                                  <div>New Orders!</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-red">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-support fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge">13</div>
                                  <div>Support Tickets!</div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-8">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                          <div class="pull-right">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                      Actions
                                      <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu pull-right" role="menu">
                                      <li><a href="#">Action</a>
                                      </li>
                                      <li><a href="#">Another action</a>
                                      </li>
                                      <li><a href="#">Something else here</a>
                                      </li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div id="morris-area-chart"></div>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                          <div class="pull-right">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                      Actions
                                      <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu pull-right" role="menu">
                                      <li><a href="#">Action</a>
                                      </li>
                                      <li><a href="#">Another action</a>
                                      </li>
                                      <li><a href="#">Something else here</a>
                                      </li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-4">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-hover table-striped">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Date</th>
                                                  <th>Time</th>
                                                  <th>Amount</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>3326</td>
                                                  <td>10/21/2013</td>
                                                  <td>3:29 PM</td>
                                                  <td>$321.33</td>
                                              </tr>
                                              <tr>
                                                  <td>3325</td>
                                                  <td>10/21/2013</td>
                                                  <td>3:20 PM</td>
                                                  <td>$234.34</td>
                                              </tr>
                                              <tr>
                                                  <td>3324</td>
                                                  <td>10/21/2013</td>
                                                  <td>3:03 PM</td>
                                                  <td>$724.17</td>
                                              </tr>
                                              <tr>
                                                  <td>3323</td>
                                                  <td>10/21/2013</td>
                                                  <td>3:00 PM</td>
                                                  <td>$23.71</td>
                                              </tr>
                                              <tr>
                                                  <td>3322</td>
                                                  <td>10/21/2013</td>
                                                  <td>2:49 PM</td>
                                                  <td>$8345.23</td>
                                              </tr>
                                              <tr>
                                                  <td>3321</td>
                                                  <td>10/21/2013</td>
                                                  <td>2:23 PM</td>
                                                  <td>$245.12</td>
                                              </tr>
                                              <tr>
                                                  <td>3320</td>
                                                  <td>10/21/2013</td>
                                                  <td>2:15 PM</td>
                                                  <td>$5663.54</td>
                                              </tr>
                                              <tr>
                                                  <td>3319</td>
                                                  <td>10/21/2013</td>
                                                  <td>2:13 PM</td>
                                                  <td>$943.45</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                  <!-- /.table-responsive -->
                              </div>
                              <!-- /.col-lg-4 (nested) -->
                              <div class="col-lg-8">
                                  <div id="morris-bar-chart"></div>
                              </div>
                              <!-- /.col-lg-8 (nested) -->
                          </div>
                          <!-- /.row -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <ul class="timeline">
                              <li>
                                  <div class="timeline-badge"><i class="fa fa-check"></i>
                                  </div>
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                          <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                          </p>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                      </div>
                                  </div>
                              </li>
                              <li class="timeline-inverted">
                                  <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                  </div>
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                  </div>
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                      </div>
                                  </div>
                              </li>
                              <li class="timeline-inverted">
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="timeline-badge info"><i class="fa fa-save"></i>
                                  </div>
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                          <hr>
                                          <div class="btn-group">
                                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                  <i class="fa fa-gear"></i> <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a href="#">Action</a>
                                                  </li>
                                                  <li><a href="#">Another action</a>
                                                  </li>
                                                  <li><a href="#">Something else here</a>
                                                  </li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Separated link</a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                      </div>
                                  </div>
                              </li>
                              <li class="timeline-inverted">
                                  <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                  </div>
                                  <div class="timeline-panel">
                                      <div class="timeline-heading">
                                          <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                      </div>
                                      <div class="timeline-body">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-8 -->
              <div class="col-lg-4">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-bell fa-fw"></i> Notifications Panel
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="list-group">
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-comment fa-fw"></i> New Comment
                                  <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                  <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-envelope fa-fw"></i> Message Sent
                                  <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-tasks fa-fw"></i> New Task
                                  <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                  <span class="pull-right text-muted small"><em>11:32 AM</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                  <span class="pull-right text-muted small"><em>11:13 AM</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                  <span class="pull-right text-muted small"><em>10:57 AM</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                  <span class="pull-right text-muted small"><em>9:49 AM</em>
                                  </span>
                              </a>
                              <a href="#" class="list-group-item">
                                  <i class="fa fa-money fa-fw"></i> Payment Received
                                  <span class="pull-right text-muted small"><em>Yesterday</em>
                                  </span>
                              </a>
                          </div>
                          <!-- /.list-group -->
                          <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                      </div>
                      <div class="panel-body">
                          <div id="morris-donut-chart"></div>
                          <a href="#" class="btn btn-default btn-block">View Details</a>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                  <div class="chat-panel panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-comments fa-fw"></i> Chat
                          <div class="btn-group pull-right">
                              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-chevron-down"></i>
                              </button>
                              <ul class="dropdown-menu slidedown">
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-refresh fa-fw"></i> Refresh
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-check-circle fa-fw"></i> Available
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-times fa-fw"></i> Busy
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-clock-o fa-fw"></i> Away
                                      </a>
                                  </li>
                                  <li class="divider"></li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <ul class="chat">
                              <li class="left clearfix">
                                  <span class="chat-img pull-left">
                                      <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Jack Sparrow</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                          </small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                  <span class="chat-img pull-right">
                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <small class=" text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="left clearfix">
                                  <span class="chat-img pull-left">
                                      <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <strong class="primary-font">Jack Sparrow</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                  <span class="chat-img pull-right">
                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="chat-body clearfix">
                                      <div class="header">
                                          <small class=" text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- /.panel-body -->
                      <div class="panel-footer">
                          <div class="input-group">
                              <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                              <span class="input-group-btn">
                                  <button class="btn btn-warning btn-sm" id="btn-chat">
                                      Send
                                  </button>
                              </span>
                          </div>
                      </div>
                      <!-- /.panel-footer -->
                  </div>
                  <!-- /.panel .chat-panel -->
              </div>
              <!-- /.col-lg-4 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="../vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="../vendor/raphael/raphael.min.js"></script>
  <script src="../vendor/morrisjs/morris.min.js"></script>
  <script src="../data/morris-data.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>


<!-- <header class="row">
    <div class="header-image"><?= $this->Html->image('cake.logo.svg') ?></div>
    <div class="header-title">
        <h1>Welcome to CakePHP <?= Configure::version() ?> Red Velvet. Build fast. Grow solid.</h1>
    </div>
</header>

<div class="row">
    <div class="columns large-12">
        <div class="ctp-warning alert text-center">
            <p>Please be aware that this page will not be shown if you turn off debug mode unless you replace src/Template/Pages/home.ctp with your own version.</p>
        </div>
        <div id="url-rewriting-warning" class="alert url-rewriting">
            <ul>
                <li class="bullet problem">
                    URL rewriting is not properly configured on your server.<br />
                    1) <a target="_blank" href="http://book.cakephp.org/3.0/en/installation.html#url-rewriting">Help me configure it</a><br />
                    2) <a target="_blank" href="http://book.cakephp.org/3.0/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                </li>
            </ul>
        </div>
        <?php Debugger::checkSecurityKeys(); ?>
    </div>
</div>

<div class="row">
    <div class="columns large-6">
        <h4>Environment</h4>
        <ul>
        <?php if (version_compare(PHP_VERSION, '5.5.9', '>=')): ?>
            <li class="bullet success">Your version of PHP is 5.5.9 or higher (detected <?= PHP_VERSION ?>).</li>
        <?php else: ?>
            <li class="bullet problem">Your version of PHP is too low. You need PHP 5.5.9 or higher to use CakePHP (detected <?= PHP_VERSION ?>).</li>
        <?php endif; ?>

        <?php if (extension_loaded('mbstring')): ?>
            <li class="bullet success">Your version of PHP has the mbstring extension loaded.</li>
        <?php else: ?>
            <li class="bullet problem">Your version of PHP does NOT have the mbstring extension loaded.</li>;
        <?php endif; ?>

        <?php if (extension_loaded('openssl')): ?>
            <li class="bullet success">Your version of PHP has the openssl extension loaded.</li>
        <?php elseif (extension_loaded('mcrypt')): ?>
            <li class="bullet success">Your version of PHP has the mcrypt extension loaded.</li>
        <?php else: ?>
            <li class="bullet problem">Your version of PHP does NOT have the openssl or mcrypt extension loaded.</li>
        <?php endif; ?>

        <?php if (extension_loaded('intl')): ?>
            <li class="bullet success">Your version of PHP has the intl extension loaded.</li>
        <?php else: ?>
            <li class="bullet problem">Your version of PHP does NOT have the intl extension loaded.</li>
        <?php endif; ?>
        </ul>
    </div>
    <div class="columns large-6">
        <h4>Filesystem</h4>
        <ul>
        <?php if (is_writable(TMP)): ?>
            <li class="bullet success">Your tmp directory is writable.</li>
        <?php else: ?>
            <li class="bullet problem">Your tmp directory is NOT writable.</li>
        <?php endif; ?>

        <?php if (is_writable(LOGS)): ?>
            <li class="bullet success">Your logs directory is writable.</li>
        <?php else: ?>
            <li class="bullet problem">Your logs directory is NOT writable.</li>
        <?php endif; ?>

        <?php $settings = Cache::config('_cake_core_'); ?>
        <?php if (!empty($settings)): ?>
            <li class="bullet success">The <em><?= $settings['className'] ?>Engine</em> is being used for core caching. To change the config edit config/app.php</li>
        <?php else: ?>
            <li class="bullet problem">Your cache is NOT working. Please check the settings in config/app.php</li>
        <?php endif; ?>
        </ul>
    </div>
    <hr />
</div>

<div class="row">
    <div class="columns large-6">
        <h4>Database</h4>
        <?php
        try {
            $connection = ConnectionManager::get('default');
            $connected = $connection->connect();
        } catch (Exception $connectionError) {
            $connected = false;
            $errorMsg = $connectionError->getMessage();
            if (method_exists($connectionError, 'getAttributes')):
                $attributes = $connectionError->getAttributes();
                if (isset($errorMsg['message'])):
                    $errorMsg .= '<br />' . $attributes['message'];
                endif;
            endif;
        }
        ?>
        <ul>
        <?php if ($connected): ?>
            <li class="bullet success">CakePHP is able to connect to the database.</li>
        <?php else: ?>
            <li class="bullet problem">CakePHP is NOT able to connect to the database.<br /><?= $errorMsg ?></li>
        <?php endif; ?>
        </ul>
    </div>
    <div class="columns large-6">
        <h4>DebugKit</h4>
        <ul>
        <?php if (Plugin::loaded('DebugKit')): ?>
            <li class="bullet success">DebugKit is loaded.</li>
        <?php else: ?>
            <li class="bullet problem">DebugKit is NOT loaded. You need to either install pdo_sqlite, or define the "debug_kit" connection name.</li>
        <?php endif; ?>
        </ul>
    </div>
    <hr />
</div>

<div class="row">
    <div class="columns large-6">
        <h3>Editing this Page</h3>
        <ul>
            <li class="bullet cutlery">To change the content of this page, edit: src/Template/Pages/home.ctp.</li>
            <li class="bullet cutlery">You can also add some CSS styles for your pages at: webroot/css/.</li>
        </ul>
    </div>
    <div class="columns large-6">
        <h3>Getting Started</h3>
        <ul>
            <li class="bullet book"><a target="_blank" href="http://book.cakephp.org/3.0/en/">CakePHP 3.0 Docs</a></li>
            <li class="bullet book"><a target="_blank" href="http://book.cakephp.org/3.0/en/tutorials-and-examples/bookmarks/intro.html">The 15 min Bookmarker Tutorial</a></li>
            <li class="bullet book"><a target="_blank" href="http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/blog.html">The 15 min Blog Tutorial</a></li>
        </ul>
        <p>
    </div>
</div>

<div class="row">
    <div class="columns large-12 text-center">
        <h3 class="more">More about Cake</h3>
        <p>
            CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Front Controller and MVC.<br />
            Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.
        </p>
    </div>
    <hr/>
</div>

<div class="row">
    <div class="columns large-4">
        <i class="icon support">P</i>
        <h3>Help and Bug Reports</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
                <ul><li>Live chat about CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/cakephp/cakephp/issues">CakePHP Issues</a>
                <ul><li>CakePHP issues and pull requests</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://discourse.cakephp.org/">CakePHP Forum</a>
                <ul><li>CakePHP official discussion forum</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://groups.google.com/group/cake-php">CakePHP Google Group</a>
                <ul><li>Community mailing list</li></ul>
            </li>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon docs">r</i>
        <h3>Docs and Downloads</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="http://api.cakephp.org/3.0/">CakePHP API</a>
                <ul><li>Quick Reference</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://book.cakephp.org/3.0/en/">CakePHP Documentation</a>
                <ul><li>Your Rapid Development Cookbook</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://bakery.cakephp.org">The Bakery</a>
                <ul><li>Everything CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://plugins.cakephp.org">CakePHP plugins repo</a>
                <ul><li>A comprehensive list of all CakePHP plugins created by the community</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/cakephp/">CakePHP Code</a>
                <ul><li>For the Development of CakePHP Git repository, Downloads</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="https://github.com/FriendsOfCake/awesome-cakephp">CakePHP Awesome List</a>
                <ul><li>A curated list of amazingly awesome CakePHP plugins, resources and shiny things.</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://www.cakephp.org">CakePHP</a>
                <ul><li>The Rapid Development Framework</li></ul>
            </li>
        </ul>
    </div>
    <div class="columns large-4">
        <i class="icon training">s</i>
        <h3>Training and Certification</h3>
        <ul>
            <li class="bullet cutlery">
                <a href="http://cakefoundation.org/">Cake Software Foundation</a>
                <ul><li>Promoting development related to CakePHP</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://training.cakephp.org/">CakePHP Training</a>
                <ul><li>Learn to use the CakePHP framework</li></ul>
            </li>
            <li class="bullet cutlery">
                <a href="http://certification.cakephp.org/">CakePHP Certification</a>
                <ul><li>Become a certified CakePHP developer</li></ul>
            </li>
        </ul>
    </div>
</div> -->

</body>
</html>
