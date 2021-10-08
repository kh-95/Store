<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
   <?php
   include "design/header.php";
   ?>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <?php
        include "design/navbar.php";
        ?>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
           <?php
           include "design/sidebar.php";
           ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Form Stuff</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Material Design Form Controls
                        <small>material design form inputs, checkboxes and radios</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-6 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Line Inputs</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" method="post" action="function/addc.php">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter client name" name="name">
                                               
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter  phone"
                                                name="phone">
                                                
                                            </div>
                                            <div class="form-group form-md-line-input ">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Enter address" name="address">
                                             
                                            </div>
                                            <div class="form-group form-md-line-input ">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="email" name="email">
                                                
                                            </div>
                                            <div class="form-group form-md-line-input ">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="code" name="code">
                                                
                                            </div>
                                            
                                            <div class="form-group form-md-line-input has-info">
        <select  class="form-control" name="cat">
        <option   selected=""></option>
        <?php
        include "function/connect.php" ;
        $sql="SELECT * FROM category";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){


?>
<option value="<?php echo $row['id'];?>" ><?php echo $row['name'];?></option>

        <?php   }  ?>

    </select>
                                                
                                            </div>
                                            
                                            
                                           
                                        </div>
                                        <div class="form-actions noborder">
                                            <input type="submit" name="submit" value="add" class="btn blue">
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <span class="caption-subject bold uppercase"> Input Groups & Icons</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-success">
                                                        <div class="input-icon">
                                                            <input type="text" class="form-control" placeholder="Left icon">
                                                            <label for="form_control_1">Regular input</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-warning">
                                                        <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                                        <label for="form_control_1">Warning input</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-error">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                            <label for="form_control_1">Input Group</label>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-success">
                                                        <div class="input-icon">
                                                            <input type="text" class="form-control" placeholder="Left icon">
                                                            <label for="form_control_1">Regular input</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-error">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                            <span class="help-block">Some help goes here...</span>
                                                            <label for="form_control_1">Input Group1</label>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-error">
                                                        <div class="input-group">
                                                            <div class="input-group-control">
                                                                <input type="text" class="form-control" placeholder="Placeholder">
                                                                <label for="form_control_1">Input Group</label>
                                                            </div>
                                                            <span class="input-group-btn btn-right">
                                                                <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                    <li>
                                                                        <a href="javascript:;">Action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">Another action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">Something else here</a>
                                                                    </li>
                                                                    <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-icon right">
                                                    <input type="text" class="form-control" placeholder="Right icon">
                                                    <label for="form_control_1">Input With Hint</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                    <i class="icon-user"></i>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Email Address">
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-error">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Email Address">
                                                    <label for="form_control_1">Input Group</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-warning">
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control">
                                                    <span class="help-block">Some help goes here...</span>
                                                    <span class="input-group-addon">.00</span>
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-warning">
                                                <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn blue-madison" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control edited" placeholder="Placeholder">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-error">
                                                <div class="input-group">
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control" placeholder="Placeholder">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control" placeholder="Input group">
                                                        <span class="help-block">Some help goes here...</span>
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control input-sm" placeholder=".input-sm">
                                                        <label for="form_control_1">Small Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control input-lg" placeholder=".input-lg">
                                                        <label for="form_control_1">Large Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-check font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Checkboxes</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm red dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Settings
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-group form-md-checkboxes">
                                            <label>Checkboxes</label>
                                            <div class="md-checkbox-list">
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox1" class="md-check">
                                                    <label for="checkbox1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox2" class="md-check" checked>
                                                    <label for="checkbox2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox3" class="md-check">
                                                    <label for="checkbox3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox4" disabled class="md-check">
                                                    <label for="checkbox4">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Disabled </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-checkboxes">
                                            <label>Inline Checkboxes</label>
                                            <div class="md-checkbox-inline">
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox6" class="md-check">
                                                    <label for="checkbox6">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox7" class="md-check" checked>
                                                    <label for="checkbox7">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-checkbox">
                                                    <input type="checkbox" id="checkbox8" class="md-check">
                                                    <label for="checkbox8">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-checkboxes">
                                            <label>Checkboxes</label>
                                            <div class="md-checkbox-list">
                                                <div class="md-checkbox has-success">
                                                    <input type="checkbox" id="checkbox9" class="md-check">
                                                    <label for="checkbox9">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-checkbox has-error">
                                                    <input type="checkbox" id="checkbox10" class="md-check" checked>
                                                    <label for="checkbox10">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-checkbox has-warning">
                                                    <input type="checkbox" id="checkbox11" class="md-check">
                                                    <label for="checkbox11">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                                <div class="md-checkbox has-info">
                                                    <input type="checkbox" id="checkbox12" disabled class="md-check">
                                                    <label for="checkbox12">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Disabled </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-checkboxes">
                                            <label>Inline Checkboxes</label>
                                            <div class="md-checkbox-inline">
                                                <div class="md-checkbox has-success">
                                                    <input type="checkbox" id="checkbox14" class="md-check">
                                                    <label for="checkbox14">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-checkbox has-error">
                                                    <input type="checkbox" id="checkbox15" class="md-check" checked>
                                                    <label for="checkbox15">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-checkbox has-info">
                                                    <input type="checkbox" id="checkbox16" class="md-check">
                                                    <label for="checkbox16">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                        <div class="col-md-6 ">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold uppercase"> Floating Labels</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm default dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Settings
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="form_control_1" value="test">
                                                <label for="form_control_1">Regular input</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="form_control_1">
                                                <label for="form_control_1">Input with help</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <input type="text" class="form-control" id="form_control_1">
                                                <label for="form_control_1">Success input</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-warning">
                                                <input type="text" class="form-control" id="form_control_1">
                                                <label for="form_control_1">Warning input</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                <input type="text" class="form-control" id="form_control_1">
                                                <label for="form_control_1">Error input</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="text" class="form-control" id="form_control_1">
                                                <label for="form_control_1">Info input</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control edited" id="form_control_1">
                                                    <option value=""></option>
                                                    <option value="1" selected>Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                </select>
                                                <label for="form_control_1">Dropdown sample</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="3"></textarea>
                                                <label for="form_control_1">Textarea input</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                <input type="text" class="form-control" disabled id="form_control_1">
                                                <label for="form_control_1">Disabled</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                <input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
                                                <label for="form_control_1">Readonly</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <div class="form-control form-control-static"> email@example.com </div>
                                                <label for="form_control_1">Static Control</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="text" class="form-control input-sm" id="form_control_1">
                                                <label for="form_control_1">Small input</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="text" class="form-control input-lg" id="form_control_1">
                                                <label for="form_control_1">Large input</label>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <span class="caption-subject bold uppercase">Input Groups & Icons</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" class="form-control">
                                                            <label for="form_control_1">Regular input</label>
                                                            <span class="help-block">Some help goes here...</span>
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-group">
                                                            <span class="input-group-btn btn-left">
                                                                <button class="btn blue-madison" type="button">Go!</button>
                                                            </span>
                                                            <div class="input-group-control">
                                                                <input type="text" class="form-control edited" value="some value">
                                                                <label for="form_control_1">Input Group</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" id="form_control_1">
                                                        <label for="form_control_1">Regular input</label>
                                                        <span class="help-block">Some help goes here...</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control">
                                                    <label for="form_control_1">Regular input</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon right">
                                                    <input type="text" class="form-control">
                                                    <label for="form_control_1">Regular input</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                    <i class="icon-user"></i>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                <div class="input-group left-addon">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" class="form-control">
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                <div class="input-group right-addon">
                                                    <input type="text" class="form-control">
                                                    <label for="form_control_1">Input Group</label>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                <div class="input-group left-addon right-addon">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-addon">.00</span>
                                                    <label for="form_control_1">Input Group</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn blue-madison" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control edited">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                <div class="input-group">
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control input-sm">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control input-lg">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-drop font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Radios</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-group form-md-radios">
                                            <label>Checkboxes</label>
                                            <div class="md-radio-list">
                                                <div class="md-radio">
                                                    <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
                                                    <label for="radio1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked>
                                                    <label for="radio2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="radio3" name="radio1" class="md-radiobtn">
                                                    <label for="radio3">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="radio5" name="radio1" disabled class="md-radiobtn">
                                                    <label for="radio5">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Disabled </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-radios">
                                            <label>Checkboxes</label>
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="radio6" name="radio2" class="md-radiobtn">
                                                    <label for="radio6">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="radio7" name="radio2" class="md-radiobtn" checked>
                                                    <label for="radio7">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="radio8" name="radio2" class="md-radiobtn">
                                                    <label for="radio8">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-radios">
                                            <label>Checkboxes</label>
                                            <div class="md-radio-list">
                                                <div class="md-radio">
                                                    <input type="radio" id="radio9" name="radio1" class="md-radiobtn">
                                                    <label for="radio9">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-radio has-error">
                                                    <input type="radio" id="radio10" name="radio1" class="md-radiobtn" checked>
                                                    <label for="radio10">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-radio has-warning">
                                                    <input type="radio" id="radio11" name="radio1" class="md-radiobtn">
                                                    <label for="radio11">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                                <div class="md-radio has-success">
                                                    <input type="radio" id="radio13" name="radio1" disabled class="md-radiobtn">
                                                    <label for="radio13">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Disabled </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-radios">
                                            <label>Checkboxes</label>
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="radio14" name="radio2" class="md-radiobtn">
                                                    <label for="radio14">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 1 </label>
                                                </div>
                                                <div class="md-radio has-error">
                                                    <input type="radio" id="radio15" name="radio2" class="md-radiobtn" checked>
                                                    <label for="radio15">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 2 </label>
                                                </div>
                                                <div class="md-radio has-warning">
                                                    <input type="radio" id="radio16" name="radio2" class="md-radiobtn">
                                                    <label for="radio16">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Option 3 </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Horizontal Form</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Regular input</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Input with hint</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Some help goes here...</span>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <label class="col-md-2 control-label" for="form_control_1">Success Input</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-warning">
                                                <label class="col-md-2 control-label" for="form_control_1">Warning Input</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-error">
                                                <label class="col-md-2 control-label" for="form_control_1">Error State</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Error state">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Dropdown Input</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" id="form_control_1">
                                                        <option value=""></option>
                                                        <option value="">Option 1</option>
                                                        <option value="">Option 2</option>
                                                        <option value="">Option 3</option>
                                                        <option value="">Option 4</option>
                                                    </select>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <label class="col-md-2 control-label" for="form_control_1">Textarea</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Disabled</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" disabled id="form_control_1" placeholder="Placeholder...">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Readonly</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" readonly value="Some value" id="form_control_1" placeholder="Placeholder...">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Readonly</label>
                                                <div class="col-md-10">
                                                    <div class="form-control form-control-static"> email@example.com </div>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Small</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Large</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <button type="button" class="btn default">Cancel</button>
                                                    <button type="button" class="btn blue">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Checkbox & Radios</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Checkboxes</label>
                                                <div class="col-md-10">
                                                    <div class="md-checkbox-list">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="checkbox30" class="md-check">
                                                            <label for="checkbox30">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-checkbox has-error">
                                                            <input type="checkbox" id="checkbox31" class="md-check" checked>
                                                            <label for="checkbox31">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-checkbox has-warning">
                                                            <input type="checkbox" id="checkbox32" class="md-check">
                                                            <label for="checkbox32">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Inline Checkboxes</label>
                                                <div class="col-md-10">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="checkbox33" class="md-check">
                                                            <label for="checkbox33">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-checkbox has-error">
                                                            <input type="checkbox" id="checkbox34" class="md-check" checked>
                                                            <label for="checkbox34">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-checkbox has-info">
                                                            <input type="checkbox" id="checkbox35" class="md-check">
                                                            <label for="checkbox35">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Radios</label>
                                                <div class="col-md-10">
                                                    <div class="md-radio-list">
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio50" name="radio211" class="md-radiobtn">
                                                            <label for="radio50">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-radio has-error">
                                                            <input type="radio" id="radio51" name="radio211" class="md-radiobtn" checked>
                                                            <label for="radio51">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-radio has-warning">
                                                            <input type="radio" id="radio52" name="radio231" class="md-radiobtn">
                                                            <label for="radio52">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Inline Radios</label>
                                                <div class="col-md-10">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio53" name="radio2" class="md-radiobtn">
                                                            <label for="radio53">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 1 </label>
                                                        </div>
                                                        <div class="md-radio has-error">
                                                            <input type="radio" id="radio54" name="radio2" class="md-radiobtn" checked>
                                                            <label for="radio54">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 2 </label>
                                                        </div>
                                                        <div class="md-radio has-warning">
                                                            <input type="radio" id="radio55" name="radio2" class="md-radiobtn">
                                                            <label for="radio55">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Option 3 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <button type="button" class="btn default">Cancel</button>
                                                    <button type="button" class="btn blue">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Input Groups & Icons</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input has-danger">
                                                <label class="col-md-2 control-label" for="form_control_1">Left icon</label>
                                                <div class="col-md-10">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Left icon">
                                                        <div class="form-control-focus"> </div>
                                                        <span class="help-block">Some help goes here...</span>
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-success">
                                                <label class="col-md-2 control-label" for="form_control_1">Right icon</label>
                                                <div class="col-md-10">
                                                    <div class="input-icon right">
                                                        <input type="text" class="form-control" placeholder="Right icon">
                                                        <div class="form-control-focus"> </div>
                                                        <span class="help-block">Some help goes here...</span>
                                                        <i class="icon-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Input Group</label>
                                                <div class="col-md-10">
                                                    <div class="input-group has-success">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Email Address">
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input has-info">
                                                <label class="col-md-2 control-label" for="form_control_1">Input Group</label>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Email Address">
                                                        <span class="help-block">Some help goes here...</span>
                                                        <div class="form-control-focus"> </div>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Both Addons</label>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">$</span>
                                                        <input type="text" class="form-control" placeholder="Enter amount">
                                                        <div class="form-control-focus"> </div>
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Action Button</label>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <span class="input-group-btn btn-left">
                                                            <button class="btn blue-madison" type="button">Go!</button>
                                                        </span>
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control" placeholder="Placeholder">
                                                            <div class="form-control-focus"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Dropdowm Menu</label>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control" placeholder="Placeholder">
                                                            <div class="form-control-focus"> </div>
                                                        </div>
                                                        <span class="input-group-btn btn-right">
                                                            <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a href="javascript:;">Action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">Another action</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">Something else here</a>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <a href="javascript:;">Separated link</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Action Buttons(small size)</label>
                                                <div class="col-md-10">
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-btn btn-left">
                                                            <button class="btn red-intense" type="button">Go!</button>
                                                        </span>
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control input-sm" placeholder=".input-sm">
                                                            <span class="help-block">Some help goes here...</span>
                                                            <div class="form-control-focus"> </div>
                                                        </div>
                                                        <span class="input-group-btn btn-right">
                                                            <button class="btn green-haze" type="button">Go!</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Action Buttons(large size)</label>
                                                <div class="col-md-10">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-btn btn-left">
                                                            <button class="btn red-intense" type="button">Go!</button>
                                                        </span>
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control input-lg" placeholder=".input-lg">
                                                            <span class="help-block">Some help goes here...</span>
                                                            <div class="form-control-focus"> </div>
                                                        </div>
                                                        <span class="input-group-btn btn-right">
                                                            <button class="btn green-haze" type="button">Go!</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions margin-top-10">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <button type="button" class="btn default">Cancel</button>
                                                    <button type="button" class="btn blue">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Form Layouts</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Inline Form</h4>
                                    <form class="form-inline margin-bottom-40" role="form">
                                        <div class="form-group form-md-line-input has-success">
                                            <input type="text" class="form-control" id="form_control_1" placeholder="Email email">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-success">
                                            <input type="text" class="form-control" id="form_control_1" placeholder="Enter password">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                        <div class="md-checkbox md-checkbox-inline has-success">
                                            <input type="checkbox" id="checkbox113" class="md-check">
                                            <label for="checkbox113">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Remember me </label>
                                        </div>
                                        <button type="button" class="btn btn-warning">Sign in</button>
                                    </form>
                                    <h4>Inline Form With Icons</h4>
                                    <form class="form-inline margin-bottom-40" role="form">
                                        <div class="form-group form-md-line-input has-error">
                                            <div class="input-icon">
                                                <input type="email" class="form-control" placeholder="Email">
                                                <div class="form-control-focus"> </div>
                                                <span class="help-block">Some help goes here...</span>
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input has-error">
                                            <div class="input-icon">
                                                <input type="password" class="form-control" placeholder="Password">
                                                <div class="form-control-focus"> </div>
                                                <span class="help-block">Some help goes here...</span>
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </div>
                                        <div class="md-checkbox md-checkbox-inline has-success">
                                            <input type="checkbox" id="checkbox111" class="md-check">
                                            <label for="checkbox111">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Remember me </label>
                                        </div>
                                        <button type="button" class="btn btn-success">Sign in</button>
                                    </form>
                                    <h4>Horizontal Form</h4>
                                    <form class="form-horizontal margin-bottom-40" role="form">
                                        <div class="form-group form-md-line-input">
                                            <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-4">
                                                <input type="email" class="form-control" id="form_control_1" placeholder="Email">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label for="inputPassword12" class="col-md-2 control-label">Password</label>
                                            <div class="col-md-4">
                                                <input type="password" class="form-control" id="form_control_1" placeholder="Password">
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="col-md-offset-2 col-md-4">
                                                <div class="md-checkbox-list">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox1111" class="md-check">
                                                        <label for="checkbox1111">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Remember me </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="button" class="btn blue">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                    <h4>Horizontal Form With Icons</h4>
                                    <form class="form-horizontal margin-bottom-40" role="form">
                                        <div class="form-group form-md-line-input">
                                            <label for="inputEmail12" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                    <div class="form-control-focus"> </div>
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label for="inputPassword1" class="col-md-2 control-label">Password</label>
                                            <div class="col-md-4">
                                                <div class="input-icon right">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                    <div class="form-control-focus"> </div>
                                                    <i class="fa fa-key"></i>
                                                </div>
                                                <div class="help-block"> with right aligned icon </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <div class="col-md-offset-2 col-md-4">
                                                <div class="md-checkbox-list">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox11111" class="md-check">
                                                        <label for="checkbox11111">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Remember me </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="button" class="btn green">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                    <h4>Column Sizing</h4>
                                    <form role="form" class="margin-bottom-40">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-md-line-input has-success">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder=".col-md-2">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-md-line-input has-warning">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder=".col-md-3">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-md-line-input has-info">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder=".col-md-4">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-md-line-input has-error">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder=".col-md-3">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                <span class="badge badge-success">7</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">8</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub"> Project Manager </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub"> CTO </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Wong</h4>
                                            <div class="media-heading-sub"> CEO </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Customers</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">2</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lara Kunis</h4>
                                            <div class="media-heading-sub"> CEO, Loop Inc </div>
                                            <div class="media-heading-small"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="label label-sm label-success">new</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lisa Stone</h4>
                                            <div class="media-heading-sub"> CTO, Keort Inc </div>
                                            <div class="media-heading-small"> Last seen 13:10 PM </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">7</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Maria Gomez</h4>
                                            <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                            <div class="media-heading-small"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                            <i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
                                                <span class="body"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
                                                <span class="body"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
                                                <span class="body"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
                                                <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn green">
                                                    <i class="icon-paper-clip"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">General</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> New order received with
                                                        <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-warning"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="list-heading">System</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 4 pending tasks.
                                                        <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> New order received with
                                                        <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> Web server hardware needs to be upgraded.
                                                        <span class="label label-sm label-default "> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                            <div class="page-quick-sidebar-settings-list">
                                <h3 class="list-heading">General Settings</h3>
                                <ul class="list-items borderless">
                                    <li> Enable Notifications
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Allow Tracking
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Log Errors
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Auto Sumbit Issues
                                        <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Enable SMS Alerts
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                </ul>
                                <h3 class="list-heading">System Settings</h3>
                                <ul class="list-items borderless">
                                    <li> Security Level
                                        <select class="form-control input-inline input-sm input-small">
                                            <option value="1">Normal</option>
                                            <option value="2" selected>Medium</option>
                                            <option value="e">High</option>
                                        </select>
                                    </li>
                                    <li> Failed Email Attempts
                                        <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                    <li> Secondary SMTP Port
                                        <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                    <li> Notify On System Error
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                    <li> Notify On SMTP Error
                                        <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                </ul>
                                <div class="inner-content">
                                    <button class="btn btn-success">
                                        <i class="icon-settings"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <?php
        include "design/footer.php";
        ?>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>