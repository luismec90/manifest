<!doctype html>
<html lang="">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manifiestos.co</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    @section('css')
    @show

            <!-- Custom CSS -->
    <style>
        /*
         * Template Name: College Green - Responsive Website Template for Education & Training
         * Version: 1.5
         * Author: Xiaoying Riley at 3rd Wave Media
         * Website: http://themes.3rdwavemedia.com/
         * Twitter:


        3rdwave_themes
                        */
        /* ======= Base ======= */
        html,
        body {
            height: 100%;
        }

        body {
            font-size: 13px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .wrapper {
            min-height: 100%;
            margin-bottom: -344px;
            /* equal to footer height */
        }

        .wrapper:after {
            content: "";
            display: block;
            height: 344px;
            /* must be the same height as footer */
        }

        .footer {
            height: 344px;
            /* must be the same height as footer */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'open sans', arial, sans-serif;
            font-weight: 300;
        }

        x fol p {
            color: #444444;
            font-size: 13px;
        }

        a {
            color: #6091ba;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        a:hover {
            text-decoration: none;
            color: #365d7e;
        }

        a:focus {
            text-decoration: none;
        }

        .btn {
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .btn .fa {
            color: #fff;
            margin-right: 5px;
        }

        .btn .fa.fa-search {
            margin-right: 0;
        }

        .btn-theme {
            background: #6091ba;
            border: 1px solid #6091ba;
            color: #fff;
        }

        .btn-theme:hover {
            background: #84aac9;
            border: 1px solid #84aac9;
            color: #fff;
        }

        a.btn-cta,
        .btn-cta {
            background: #6091ba;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            line-height: 1.33;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #6091ba;
            font-family: 'open sans', arial, sans-serif;
        }

        a.btn-cta:hover,
        .btn-cta:hover {
            color: #fff;
            background: #84aac9;
            border: 1px solid #84aac9;
        }

        a.btn-cta .fa,
        .btn-cta .fa {
            margin-right: 10px;
            font-size: 20px;
            color: #fff;
        }

        .form-control {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .form-control:focus {
            border-color: #6091ba;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        blockquote {
            font-size: 14px;
        }

        blockquote p {
            font-size: 14px;
            line-height: 1.5;
        }

        .RedDamask {
            background-color: #e27240;
        }

        .RedDamask:hover {
            background-color: #df622a;
        }

        .FireBush {
            background-color: #E28D40;
        }

        .FireBush:hover {
            background-color: #df802a;
        }

        .OliveDrab {
            background-color: #60A823;
        }

        .OliveDrab:hover {
            background-color: #54931f;
        }

        .Mojo {
            background-color: #C94139;
        }

        .Mojo:hover {
            background-color: #b73932;
        }

        .text-highlight {
            color: #27435a;
        }

        .highlight-border {
            border-color: #6091ba;
        }

        .read-more {
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            font-size: 13px;
            display: block;
        }

        .read-more .fa {
            position: relative;
            top: 1px;
            margin-left: 5px;
        }

        .read-more:hover {
            text-decoration: none;
        }

        .carousel-fade .item {
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            -webkit-transition: opacity 0.3s;
            -moz-transition: opacity 0.3s;
            -ms-transition: opacity 0.3s;
            -o-transition: opacity 0.3s;
        }

        .carousel-fade .item.active {
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
        }

        #topcontrol {
            background: #84aac9;
            color: #fff;
            text-align: center;
            display: inline-block;
            width: 35px;
            height: 35px;
            border: none;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            -ms-border-radius: 2px;
            -o-border-radius: 2px;
            border-radius: 2px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        #topcontrol:hover {
            background: #6091ba;
        }

        #topcontrol .fa {
            position: relative;
            top: 3px;
            font-size: 25px;
        }

        .row-end {
            margin-right: 0;
            padding-right: 0;
        }

        ul.custom-list-style li {
            list-style: none;
        }

        .date-label {
            background: #f5f5f5;
            display: inline-block;
            width: 40px;
            height: 50px;
            text-align: center;
            font-size: 13px;
        }

        .date-label .month {
            background: #6091ba;
            color: #fff;
            display: block;
            font-size: 13px;
            text-transform: uppercase;
        }

        .date-label .date-number {
            clear: left;
            display: block;
            padding-top: 5px;
            font-size: 15px;
            font-family: 'open sans', arial, sans-serif;
            font-weight: 500;
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            background-color: #6091ba;
            border-color: #6091ba;
        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            background-color: #eef3f8;
            border-color: #a7c2d9;
        }

        .pagination > li:first-child > a,
        .pagination > li:first-child > span,
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .nav-tabs {
            border-bottom: none;
            position: relative;
            margin-bottom: -1px;
        }

        .tab-content {
            border: 1px solid #e8e8e8;
            padding: 15px;
            margin-bottom: 20px;
        }

        .nav > li > a {
            font-size: 13px;
        }

        .nav > li > a:focus,
        .nav > li > a:hover {
            background: inherit;
        }

        .nav-tabs > li > a {
            border: 1px solid #e8e8e8;
            border-bottom: none;
            background: #f5f5f5;
            padding: 5px 15px;
            margin-right: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            color: #444444;
            -webkit-transition: all 0s;
            -moz-transition: all 0s;
            -ms-transition: all 0s;
            -o-transition: all 0s;
        }

        .nav-tabs > li {
            margin-right: 2px;
        }

        .nav-tabs > li.active {
            border-top: 2px solid #6091ba;
        }

        .nav-tabs > li.active a,
        .nav-tabs > li.active a:hover,
        .nav-tabs > li.active a:active,
        .nav-tabs > li.active a:focus {
            border-bottom: 0;
            border-top: 0;
        }

        .table-striped > tbody > tr:nth-child(odd) > td,
        .table-striped > tbody > tr:nth-child(odd) > th {
            background: #f5f8fb;
        }

        .table > thead > tr > th,
        .table > tbody > tr > th,
        .table > tfoot > tr > th,
        .table > thead > tr > td,
        .table > tbody > tr > td,
        .table > tfoot > tr > td {
            border-top: 1px solid #ebebeb;
        }

        .table > thead > tr > th {
            border-bottom: 2px solid #a7c2d9;
            color: #365d7e;
        }

        .table-hover > tbody > tr:hover > td,
        .table-hover > tbody > tr:hover > th {
            background: #f5f8fb;
        }

        .table-boxed,
        .table-bordered {
            border: 1px solid #ebebeb;
        }

        .table.table-boxed > thead > tr > th {
            border-bottom: none;
            background: #6091ba;
            color: #fff;
        }

        .panel-group .panel {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .panel-group .panel .panel-heading {
            background: none;
            border: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .panel-group .panel .panel-heading .panel-title a {
            color: #6091ba;
        }

        .panel-group .panel .panel-heading .panel-title a:before {
            font-family: FontAwesome;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            content: "\f146";
            margin-right: 5px;
        }

        .panel-group .panel .panel-heading .panel-title a.collapsed:before {
            content: "\f0fe";
        }

        .panel-group .panel .panel-body {
            font-size: 13px;
        }

        .panel {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .panel .panel-heading {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .panel .panel-heading h3.panel-title {
            font-weight: 500;
        }

        .panel .panel-heading .label {
            font-size: 10px;
        }

        .panel .panel-footer {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .panel .panel-footer ul {
            margin-bottom: 0;
        }

        .panel .panel-footer ul.list-inline li {
            margin-bottom: 0;
        }

        .panel .panel-footer small {
            color: #999999;
        }

        .panel > .list-group .list-group-item:last-child {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .panel-theme {
            border-color: #6091ba;
        }

        .panel-theme > .panel-heading,
        .panel-theme > .panel-footer {
            color: #fff;
            background: #6091ba;
            border-color: #6091ba;
        }

        .no-margins {
            margin: 0;
        }

        .no-margin-left {
            margin-left: 0;
        }

        .no-margin-right {
            margin-right: 0;
        }

        .no-margin-top {
            margin-top: 0;
        }

        .no-margin-bottom {
            margin-bottom: 0;
        }

        .label {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .label.label-theme {
            background: #6091ba;
        }

        .label .fa {
            margin-right: 4px;
        }

        .label.label-icon-only .fa {
            margin-right: 0;
        }

        .badge.badge-theme {
            background: #6091ba;
        }

        .badge.badge-default {
            background: #999;
        }

        .badge.badge-primary {
            background: #428bca;
        }

        .badge.badge-success {
            background: #5cb85c;
        }

        .badge.badge-info {
            background: #5bc0de;
        }

        .badge.badge-info {
            background: #5bc0de;
        }

        .badge.badge-warning {
            background: #f0ad4e;
        }

        .badge.badge-danger {
            background: #d9534f;
        }

        .promo-badge {
            font-size: 20px;
            display: table;
        }

        .promo-badge a {
            color: #fff;
            display: table-cell;
            width: 135px;
            height: 135px;
            text-align: center;
            vertical-align: middle;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 5px solid #fff;
            -webkit-box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
        }

        .promo-badge .percentage {
            font-size: 32px;
            font-weight: 500;
            color: #fff;
            position: relative;
            font-family: 'open sans', arial, sans-serif;
        }

        .promo-badge .percentage .off {
            font-size: 11px;
            position: absolute;
            top: 15px;
            right: -15px;
        }

        .promo-badge .desc {
            font-size: 12px;
        }

        .progress-bar-theme {
            background: #6091ba;
        }

        .img-thumbnail {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border-color: #e8e8e8;
            margin-bottom: 15px;
        }

        #cboxLoadedContent,
        #cboxContent {
            background: none;
        }

        .box {
            background: #f5f5f5;
            padding: 15px;
        }

        .box.box-border {
            border-left: 5px solid #6091ba;
        }

        .box.box-dark {
            background: #444444;
            color: #fff;
        }

        .box.box-theme {
            background: #6091ba;
            color: #fff;
        }

        .box .date-label {
            background: #fff;
        }

        .social-icons {
            list-style: none;
            padding: 10px 0;
            margin-bottom: 0;
        }

        .social-icons li {
            float: left;
        }

        .social-icons li.row-end {
            margin-right: 0;
        }

        .social-icons a {
            display: inline-block;
            background: #95b6d1;
            width: 32px;
            height: 32px;
            text-align: center;
            padding-top: 4px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            font-size: 18px;
            margin-right: 10px;
            float: left;
        }

        .social-icons a:hover {
            background: #6091ba;
        }

        .social-icons a .fa {
            color: #fff;
        }

        .social-icons a .fa:before {
            font-size: 18px;
            text-align: center;
            padding: 0;
        }

        /* ======= Header ======= */
        .header .top-bar {
            background: #2f506c;
        }

        .header .top-bar .search-form {
            padding: 10px 0;
        }

        .header .top-bar .search-form .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .header .social-icons li.row-end {
            margin-right: 0;
        }

        .header .social-icons a {
            background: #27435a;
        }

        .header .social-icons a:hover {
            background: #6091ba;
        }

        .header .social-icons a:hover .fa {
            color: #fff;
        }

        .header .social-icons a .fa {
            color: rgba(255, 255, 255, 0.4);
        }

        .header .social-icons a .fa:before {
            font-size: 18px;
            text-align: center;
            padding: 0;
        }

        .header .header-main {
            padding: 30px 0;
        }

        .header h1.logo {
            margin-top: 0;
            margin-bottom: 0;
        }

        .header .menu-top {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: right;
            float: right;
        }

        .header .menu-top li {
            list-style: none;
            float: left;
            font-size: 11px;
            font-family: 'open sans', arial, sans-serif;
        }

        .header .menu-top li:last-child a {
            padding-right: 0;
        }

        .header .menu-top li.divider a {
            border-right: 1px solid #c3c3c3;
        }

        .header .menu-top li a {
            display: inline-block;
            color: #777777;
            padding: 0px 10px;
        }

        .header .menu-top li a:hover {
            color: #6091ba;
        }

        .header .contact {
            font-size: 20px;
            font-family: 'open sans', arial, sans-serif;
            font-weight: 300;
            margin-top: 10px;
        }

        .header .contact p {
            float: left;
            margin-bottom: 0;
        }

        .header .contact p.phone {
            margin-right: 30px;
        }

        .header .contact p a {
            color: #444444;
        }

        .header .contact .fa {
            color: #6091ba;
            margin-right: 8px;
            font-size: 18px;
            position: relative;
            top: 1px;
        }

        .header .contact .fa.fa-phone {
            font-size: 22px;
            top: 2px;
        }

        .header .search-form {
            border: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .header .search-form .form-control {
            width: 260px;
            background: #f5f5f5;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        .header .search-form .form-control:focus {
            background: #fff;
            border-color: #6091ba;
        }

        .main-nav {
            background: #6091ba;
            margin-bottom: 10px;
        }

        .main-nav button {
            background: #27435a;
            color: #fff !important;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .main-nav button:focus {
            outline: none;
        }

        .main-nav button .icon-bar {
            background-color: #fff;
        }

        .main-nav .navbar-collapse {
            padding: 0;
        }

        .main-nav .nav .nav-item {
            font-weight: 600;
            text-transform: uppercase;
            font-family: 'open sans', arial, sans-serif;
            z-index: 100;
        }

        .main-nav .nav .nav-item.dropdown {
            z-index: 101;
        }

        .main-nav .nav .nav-item a {
            color: #dce7f0;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        .main-nav .nav .nav-item a:hover {
            background: #6091ba;
            color: #fff;
        }

        .main-nav .nav .nav-item.active {
            position: relative;
        }

        .main-nav .nav .nav-item.active > a {
            background: #4678a1;
            color: #fff;
        }

        .main-nav .nav .nav-item.active > a:before {
            content: "\f0d8";
            position: absolute;
            bottom: -8px;
            left: 0;
            text-align: center;
            font-family: FontAwesome;
            display: block;
            font-size: 12px;
            width: 100%;
        }

        .main-nav .nav .nav-item.active > a.dropdown-toggle:before {
            display: none;
        }

        .main-nav .nav .nav-item.open a {
            background: #4678a1;
            color: #fff;
        }

        .main-nav .nav .nav-item .dropdown-menu {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            margin: 0;
            border: none;
            padding: 0;
            text-transform: none;
            min-width: 220px;
        }

        .main-nav .nav .nav-item .dropdown-menu a {
            border-bottom: 1px solid #3e6a8f;
            padding: 8px 20px;
        }

        .main-nav .nav .nav-item .dropdown-menu a:hover {
            background: #3e6a8f;
            color: #fff;
            padding-left: 24px;
        }

        .main-nav .nav .nav-item .dropdown-submenu {
            position: relative;
        }

        .main-nav .nav .nav-item .dropdown-submenu .fa {
            position: absolute;
            right: 15px;
            top: 10px;
        }

        .main-nav .nav .nav-item .dropdown-submenu li {
            position: relative;
        }

        .main-nav .nav .nav-item .dropdown-submenu li .fa {
            position: absolute;
            right: 15px;
            top: 10px;
        }

        .main-nav .nav .nav-item .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0px;
            margin-left: -1px;
        }

        /* ======= Footer ======= */
        .footer {
            background: #444444;
            color: #fff;
        }

        .footer p {
            color: #dcdcdc;
        }

        .footer ul {
            padding-left: 0;
        }

        .footer li {
            list-style: none;
        }

        .footer h3 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .footer .footer-content {
            padding: 30px 0;
            font-size: 12px;
            min-height: 300px;
        }

        .footer .footer-content .footer-col .footer-col-inner {
            padding: 0 15px;
        }

        .footer .footer-content .footer-col .fa {
            margin-right: 10px;
            display: inline-block;
            color: #767676;
        }

        .footer .footer-content .footer-col .fa.fa-phone {
            font-size: 16px;
        }

        .footer .footer-content .footer-col li {
            margin-bottom: 10px;
            font-size: 12px;
        }

        .footer .footer-content .footer-col a {
            color: #dcdcdc;
        }

        .footer .footer-content .footer-col a:hover {
            color: #84aac9;
        }

        .footer .footer-content .adr {
            margin-bottom: 30px;
        }

        .footer .footer-content .adr .fa {
            font-size: 16px;
            margin-top: 2px;
        }

        .footer .footer-content .subscribe-form {
            padding: 0;
        }

        .footer .footer-content .subscribe-form .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .footer .footer-content .subscribe-form .form-control {
            width: 320px;
            background: #f5f5f5;
            border: none;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        .footer .footer-content .subscribe-form .form-control:focus {
            background: #fff;
        }

        .footer .bottom-bar {
            background: #2b2b2b;
            padding: 5px 0;
        }

        .footer .bottom-bar .copyright {
            font-size: 11px;
            color: #dcdcdc;
            line-height: 3;
        }

        .footer .bottom-bar .copyright a:hover {
            color: #84aac9;
        }

        .footer .bottom-bar .social {
            margin: 0;
        }

        .footer .bottom-bar .social li {
            float: right;
            margin-left: 10px;
            text-align: center;
            font-size: 18px;
            line-height: 2;
        }

        .footer .bottom-bar .social li a {
            color: #a9a9a9;
            padding: 0 5px;
        }

        .footer .bottom-bar .social li a:hover {
            color: #6091ba;
        }

        /* ======= FlexSlider ======= */
        .flexslider {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -webkit-box-shadow: 0 0 0;
            -moz-box-shadow: 0 0 0;
            box-shadow: 0 0 0;
            border: 0;
        }

        .flexslider .flex-control-nav {
            bottom: -35px;
        }

        .flexslider .flex-control-paging li a {
            background: #a1a1a1;
        }

        .flexslider .flex-control-paging li a:hover {
            background: #6091ba;
        }

        .flexslider .flex-control-paging li a.flex-active {
            background: #6091ba;
        }

        .flexslider .slides li {
            position: relative;
        }

        .flexslider .slides .flex-caption {
            position: absolute;
            left: 30px;
            bottom: 30px;
            color: #fff;
            display: inline-block;
            font-family: 'open sans', arial, sans-serif;
        }

        .flexslider .slides .flex-caption .main {
            display: inline-block;
            background: #6091ba;
            margin-bottom: 5px;
            padding: 10px 15px;
            font-size: 18px;
            text-transform: uppercase;
        }

        .flexslider .slides .flex-caption .secondary {
            display: inline-block;
            background: rgba(0, 0, 0, 0.8);
            padding: 5px 15px;
            color: #fff;
            font-size: 16px;
        }

        .flexslider .slides .promo-badge {
            position: absolute;
            right: 60px;
            top: 30px;
        }

        /* ======= Page ======= */
        .page-wrapper .page-heading {
            margin-bottom: 30px;
            border-bottom: 1px solid #e8e8e8;
        }

        .page-wrapper .page-heading h1.heading-title {
            margin-top: 0;
            display: inline-block;
            font-size: 28px;
        }

        .page-wrapper .breadcrumbs {
            display: inline-block;
        }

        .page-wrapper .breadcrumbs ul {
            padding-top: 25px;
            margin: 0;
        }

        .page-wrapper .breadcrumbs ul li {
            color: #6091ba;
            font-size: 12px;
            float: left;
            list-style: none;
            display: inline-block;
        }

        .page-wrapper .breadcrumbs ul li a {
            display: inline-block;
            padding: 0 5px;
            color: #aaaaaa;
        }

        .page-wrapper .breadcrumbs ul li a:hover {
            color: #365d7e;
        }

        .page-wrapper .breadcrumbs ul li.breadcrumbs-label {
            padding-right: 0;
            color: #aaaaaa;
        }

        .page-wrapper .breadcrumbs ul li.current {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .page-wrapper .breadcrumbs ul li .fa {
            margin-right: 5px;
            color: #aaaaaa;
        }

        .page-wrapper ul li {
            margin-bottom: 5px;
        }

        .page-wrapper ul li .fa {
            margin-right: 5px;
            color: #6091ba;
        }

        .page-wrapper ul li.list-group-item {
            margin-bottom: -1px;
        }

        .page-wrapper ul.nav li {
            margin-bottom: 0;
        }

        .page-wrapper ul.social-icons li .fa {
            margin-right: 0;
            color: #fff;
        }

        .page-wrapper ol li {
            margin-bottom: 5px;
        }

        .page-wrapper dl dd {
            margin-bottom: 5px;
        }

        .page-wrapper .page-content h1 {
            font-size: 26px;
            font-weight: normal;
        }

        .page-wrapper .page-content h2 {
            font-size: 24px;
            font-weight: normal;
        }

        .page-wrapper .page-content h3 {
            font-size: 20px;
            font-weight: normal;
        }

        .page-wrapper .page-content h4 {
            font-size: 18px;
            font-weight: normal;
        }

        .page-wrapper .page-content h5 {
            font-size: 16px;
            font-weight: normal;
        }

        .page-wrapper .page-content h6 {
            font-size: 14px;
            font-weight: normal;
        }

        .page-wrapper .page-content .title {
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: 300;
        }

        .page-wrapper .page-content .page-row {
            margin-bottom: 30px;
        }

        .page-wrapper .page-content .custom-quote {
            border-color: #a7c2d9;
        }

        .page-wrapper .page-content .custom-quote p {
            font-size: 14px;
            color: #777777;
            line-height: 1.5;
        }

        .page-wrapper .page-content .custom-quote .fa {
            color: #6091ba;
            margin-right: 10px;
        }

        .page-wrapper .page-content .custom-quote .people {
            margin-top: 10px;
            font-size: 11px;
            color: #444444;
            font-style: normal;
        }

        .page-wrapper .page-content .custom-quote .people .name {
            color: #6091ba;
        }

        .page-wrapper .page-content .has-divider {
            border-bottom: 1px dotted #e8e8e8;
            padding-bottom: 15px;
        }

        .page-wrapper .page-content .has-divider-solid {
            border-bottom: 1px solid #e8e8e8;
        }

        .page-wrapper .page-content .row-divider {
            border-bottom: 1px dotted #e8e8e8;
            padding: 10px 0;
        }

        .page-wrapper .page-content .even-row {
            background: #f5f5f5;
        }

        .page-wrapper .page-content .read-more.btn {
            margin-bottom: 15px;
            display: inline-block;
        }

        .page-wrapper .page-content .panel-title {
            font-size: 16px;
            font-weight: 300;
        }

        .page-wrapper .page-content .video-iframe {
            max-width: 100%;
        }

        .page-wrapper .page-content .album-cover {
            border: 1px solid #e8e8e8;
            margin-bottom: 30px;
        }

        .page-wrapper .page-content .album-cover:hover {
            -webkit-box-shadow: 0px 0px 5px 0px #e8e8e8;
            -moz-box-shadow: 0px 0px 5px 0px #e8e8e8;
            box-shadow: 0px 0px 5px 0px #e8e8e8;
        }

        .page-wrapper .page-content .album-cover > a:hover {
            position: relative;
        }

        .page-wrapper .page-content .album-cover > a:hover img {
            display: block;
            -webkit-opacity: 0.9;
            -moz-opacity: 0.9;
            opacity: 0.9;
        }

        .page-wrapper .page-content .album-cover .desc {
            padding: 15px;
            position: relative;
        }

        .page-wrapper .page-content .album-cover .desc:before {
            content: "";
            display: block;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #fff;
            position: absolute;
            top: -10px;
        }

        .page-wrapper .page-content .prettyphoto:hover img {
            -webkit-box-shadow: 0px 0px 5px 0px #e8e8e8;
            -moz-box-shadow: 0px 0px 5px 0px #e8e8e8;
            box-shadow: 0px 0px 5px 0px #e8e8e8;
        }

        .page-wrapper .page-sidebar h3.title {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .page-wrapper .page-sidebar .widget {
            margin-bottom: 30px;
            padding-bottom: 15px;
        }

        .page-wrapper .page-sidebar .widget.has-divider {
            border-bottom: 1px dotted #e8e8e8;
        }

        .page-wrapper .page-sidebar .widget .iframe {
            height: auto;
            min-height: 200px;
            max-width: 100%;
        }

        .page-wrapper .page-sidebar .widget .fa {
            margin-right: 5px;
            color: #6091ba;
        }

        .page-wrapper .page-sidebar .widget .fa.fa-phone {
            font-size: 16px;
        }

        .page-wrapper .page-sidebar .widget .btn .fa {
            color: #fff;
        }

        .page-wrapper .page-sidebar .widget .nav li a {
            padding: 5px 15px;
            color: #444444;
            margin-bottom: 10px;
            border-left: 5px solid transparent;
        }

        .page-wrapper .page-sidebar .widget .nav li a:hover {
            background: none;
            color: #6091ba;
        }

        .page-wrapper .page-sidebar .widget .nav li.active a {
            background: none;
            color: #6091ba;
            font-weight: bold;
            border-left: 5px solid #6091ba;
        }

        .page-wrapper .page-sidebar ul {
            padding-left: 0;
        }

        .page-wrapper .page-sidebar #flickr-photos li {
            list-style: none;
            float: left;
            display: inline-block;
            margin-bottom: 5px;
            margin-right: 5px;
        }

        .page-wrapper .page-sidebar #flickr-photos li img {
            max-width: 100%;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        .page-wrapper .page-sidebar #flickr-photos li img:hover {
            -webkit-opacity: 0.8;
            -moz-opacity: 0.8;
            opacity: 0.8;
        }

        .page-wrapper .page-sidebar .news-item {
            margin-bottom: 15px;
        }

        .page-wrapper .page-sidebar .news-item img {
            width: 40px;
            height: 40px;
        }

        .page-wrapper .page-sidebar .news-item .title {
            font-size: 14px;
            margin-top: 0;
        }

        .page-wrapper .page-sidebar .testimonials-carousel {
            position: relative;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .fa {
            color: #6091ba;
            margin-right: 5px;
            font-size: 18px;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .carousel .item {
            min-height: 300px;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .people {
            margin-top: 10px;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .people .name {
            color: #6091ba;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .people .title {
            color: #999;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .carousel-controls {
            margin-top: 20px;
            text-align: right;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .carousel-controls a .fa {
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            background: #dddddd;
            color: #fff;
            display: inline-block;
            width: 20px;
            height: 20px;
            text-align: center;
            margin-right: 0;
            font-size: 15px;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .carousel-controls a.next .fa {
            padding-top: 2px;
            padding-right: 1px;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .carousel-controls a.prev .fa {
            padding-top: 2px;
            padding-right: 1px;
        }

        .page-wrapper .page-sidebar .testimonials-carousel .carousel-controls a:hover .fa {
            background: #6091ba;
        }

        /* ======= Configure Style ======= */
        .config-wrapper {
            position: absolute;
            top: 100px;
            right: 0;
        }

        .config-wrapper-inner {
            position: relative;
        }

        .config-trigger {
            display: block;
            position: absolute;
            left: -36px;
            width: 36px;
            height: 36px;
            background: #444444;
            color: #fff;
            text-align: center;
            -webkit-border-top-right-radius: 0;
            -webkit-border-bottom-right-radius: 0;
            -webkit-border-bottom-left-radius: 4px;
            -webkit-border-top-left-radius: 4px;
            -moz-border-radius-topright: 0;
            -moz-border-radius-bottomright: 0;
            -moz-border-radius-bottomleft: 4px;
            -moz-border-radius-topleft: 4px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .config-trigger:hover {
            background: #000;
        }

        .config-trigger .fa {
            font-size: 22px;
            padding-top: 8px;
            display: block;
            color: #fff;
        }

        .config-panel {
            display: none;
            background: #444444;
            color: #fff;
            padding: 15px;
            -webkit-border-top-right-radius: 0;
            -webkit-border-bottom-right-radius: 0;
            -webkit-border-bottom-left-radius: 4px;
            -webkit-border-top-left-radius: 0;
            -moz-border-radius-topright: 0;
            -moz-border-radius-bottomright: 0;
            -moz-border-radius-bottomleft: 4px;
            -moz-border-radius-topleft: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 0;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
        }

        .config-panel p {
            margin: 0;
            padding: 0;
            margin-bottom: 15px;
            color: #fff;
        }

        .config-panel ul {
            margin-bottom: 0;
        }

        .config-panel li a {
            display: block;
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
        }

        .config-panel li a:hover {
            -webkit-opacity: 0.9;
            -moz-opacity: 0.9;
            opacity: 0.9;
            border: 2px solid rgba(255, 255, 255, 0.8);
        }

        .config-panel li.active a {
            border: 2px solid #fff;
        }

        .config-panel li.default a {
            background: #6091ba;
        }

        .config-panel li.green a {
            background: #57a89a;
        }

        .config-panel li.purple a {
            background: #6f7a9f;
        }

        .config-panel li.red a {
            background: #a85770;
        }

        .config-panel .close {
            position: absolute;
            right: 5px;
            top: 5px;
            color: #fff;
        }

        .config-panel .close .fa {
            color: #fff;
        }

        .ie8 .footer .footer-content {
            min-height: 280px;
        }

        .ie8 .navbar-nav {
            position: relative;
            z-index: 100;
        }

        /* ======= Home Page ======= */
        .home-page h1.section-heading {
            font-size: 22px;
            font-weight: 300;
            line-height: 2;
            margin-top: 0;
            color: #2f506c;
        }

        .home-page h1.section-heading .line {
            border-top: 2px solid #6091ba;
            display: inline-block;
            padding: 0 15px;
            padding-top: 5px;
        }

        .home-page section {
            background: #f5f5f5;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .home-page .section-content {
            padding: 15px;
            padding-top: 0;
        }

        .home-page .carousel-controls a .fa {
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            background: #dddddd;
            color: #fff;
            display: inline-block;
            width: 20px;
            height: 20px;
            text-align: center;
            margin-right: 0;
            font-size: 15px;
        }

        .home-page .carousel-controls a.next .fa {
            padding-top: 2px;
            padding-right: 1px;
        }

        .home-page .carousel-controls a.prev .fa {
            padding-top: 2px;
            padding-right: 1px;
        }

        .home-page .carousel-controls a:hover .fa {
            background: #6091ba;
        }

        .home-page .promo {
            margin-bottom: 30px;
        }

        .home-page .promo h1.section-heading {
            margin-top: 0;
            font-size: 24px;
            color: #fff;
        }

        .home-page .promo p {
            color: #f5f5f5;
        }

        .home-page .promo .btn-cta {
            font-size: 20px;
            margin-top: 30px;
            font-family: 'Open Sans', arial, sans-serif;
        }

        .home-page .news {
            position: relative;
        }

        .home-page .news .carousel-controls {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .home-page .news h2.title {
            font-size: 18px;
            margin-top: 0;
        }

        .home-page .news h2.title a {
            color: #444444;
        }

        .home-page .news h2.title a:hover {
            color: #365d7e;
        }

        .home-page .news .news-item {
            padding-left: 115px;
            position: relative;
            margin-bottom: 20px;
        }

        .home-page .news .thumb {
            position: absolute;
            left: 0;
            top: 0;
        }

        .home-page .events .section-content {
            min-height: 520px;
        }

        .home-page .events .event-item {
            position: relative;
            padding-left: 55px;
            border-bottom: 1px solid #e8e8e8;
            padding-bottom: 10px;
        }

        .home-page .events .event-item .date-label {
            background: #fff;
            position: absolute;
            left: 0;
        }

        .home-page .events .event-item h2.title {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .home-page .events .event-item p {
            margin-bottom: 5px;
        }

        .home-page .events .event-item .fa {
            margin-right: 5px;
            font-size: 14px;
            min-width: 16px;
            color: #666;
        }

        .home-page .events .event-item .fa.fa-map-marker {
            font-size: 18px;
        }

        .home-page .events .read-more {
            margin-top: 15px;
        }

        .home-page .events .details p {
            color: #666;
        }

        .home-page .course-finder .course-finder-form {
            margin-bottom: 15px;
        }

        .home-page .course-finder .keywords {
            padding-left: 0;
        }

        .home-page .course-finder .keywords input {
            width: 200px;
            margin-right: 5px;
        }

        .home-page .video {
            position: relative;
        }

        .home-page .video .carousel-controls {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .home-page .video .video-iframe {
            max-width: 100%;
            width: 100%;
            height: 287px;
            margin-bottom: 5px;
        }

        .home-page .links .fa {
            margin-right: 5px;
        }

        .home-page .testimonials {
            position: relative;
        }

        .home-page .testimonials .carousel-controls {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .home-page .testimonials .fa {
            color: #6091ba;
            margin-right: 5px;
            font-size: 18px;
        }

        .home-page .testimonials .carousel .item {
            min-height: 298px;
        }

        .home-page .testimonials .people {
            margin-top: 10px;
        }

        .home-page .testimonials .people .name {
            color: #6091ba;
        }

        .home-page .testimonials .people .title {
            color: #999;
        }

        .home-page .awards {
            background: #fff;
        }

        .home-page .awards .logos {
            margin: 0;
            padding: 0;
        }

        .home-page .awards .logos li {
            list-style: none;
            margin-right: 0;
            text-align: center;
        }

        .home-page .awards .logos li img {
            -webkit-opacity: 0.6;
            -moz-opacity: 0.6;
            opacity: 0.6;
            margin: 0 auto;
        }

        .home-page .awards .logos li img:hover {
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
        }

        .home-page .awards .carousel-control {
            background: none;
            width: auto;
            top: 20px;
            text-shadow: none;
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }

        .home-page .awards .carousel-control .fa {
            color: #e8e8e8;
            font-weight: bold;
        }

        .home-page .awards .carousel-control:hover .fa {
            color: #999;
        }

        /* ======= Courses Page ======= */
        .courses-wrapper .tab-content {
            font-size: 12px;
        }

        .courses-wrapper .tab-content .item {
            margin-top: 15px;
        }

        .courses-wrapper .tab-content img {
            margin-bottom: 10px;
        }

        .courses-wrapper .course-finder {
            margin-bottom: 30px;
        }

        .courses-wrapper .course-finder .keywords input {
            width: 260px;
        }

        .courses-wrapper .course-list-header {
            font-size: 13px;
            margin-bottom: 15px;
        }

        .courses-wrapper .course-list-header .summary {
            padding-top: 10px;
        }

        .courses-wrapper .course-list-header .control-label {
            font-size: 12px;
            font-weight: normal;
            display: inline-block;
            margin-right: 10px;
            line-height: 2;
        }

        .courses-wrapper .course-list-header .sort {
            padding-top: 5px;
        }

        .courses-wrapper .course-list-header .sort-options {
            width: auto;
            height: 25px;
            font-size: 12px;
        }

        .courses-wrapper .course-item {
            font-size: 12px;
        }

        .courses-wrapper .course-item .col-meta {
            color: #777777;
        }

        /* ======= Events Page ======= */
        .events-wrapper .events-item .date-label {
            background: #f5f5f5;
        }

        .events-wrapper .events-item .details .time {
            margin-right: 10px;
        }

        .events-wrapper .events-item .details .fa {
            margin-right: 5px;
        }

        /* ======= Contact Page ======= */
        .contact-form .required {
            color: #e14b39;
            display: inline-block;
            font-weight: normal;
            padding-left: 2px;
        }

        #map {
            height: 300px;
        }

        #map,
        #map *,
        #map *:before,
        #map *:after {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        /* Extra small devices (phones, less than 768px) */
        @media (max-width: 767px) {
            .wrapper {
                min-height: inherit;
                margin-bottom: 0;
            }

            .wrapper:after {
                content: none;
            }

            .footer {
                height: auto;
            }

            .pull-right,
            .pull-left {
                float: none !important;
            }

            .logo {
                text-align: center;
            }

            .header .contact p {
                text-align: center;
                margin-right: 0;
                margin-bottom: 5px;
                float: none;
            }

            .header .menu-top {
                text-align: center;
                margin-top: 10px;
            }

            .header .menu-top li {
                float: none;
                display: inline-block;
            }

            .header br {
                display: none;
            }

            .header .social-icons {
                text-align: center;
                margin: 0 auto;
            }

            .header .social-icons li {
                float: none;
                display: inline-block;
            }

            .main-nav .navbar-collapse {
                padding-left: 15px;
                padding-right: 15px;
                border-top: 0;
                -webkit-box-shadow: 0;
                -moz-box-shadow: 0;
                box-shadow: 0;
            }

            .navbar-nav {
                margin-top: 0;
            }

            .header .search-form {
                text-align: center;
            }

            .header .search-form .form-group {
                display: inline-block;
            }

            .header .search-form .form-control {
                width: 210px;
            }

            .main-nav .nav .nav-item.active > a:before {
                content: none;
            }

            .main-nav .nav .nav-item .dropdown-submenu > .dropdown-menu {
                position: static;
                left: auto;
                margin-left: 0;
            }

            .main-nav .nav .nav-item .dropdown-submenu .dropdown-menu a {
                padding-left: 30px;
            }

            .main-nav .nav .nav-item .dropdown-submenu .dropdown-menu a:hover {
                padding-left: 34px;
            }

            .main-nav .nav .nav-item .dropdown-submenu .dropdown-menu .dropdown-submenu .dropdown-menu a {
                padding-left: 45px;
            }

            .main-nav .nav .nav-item .dropdown-submenu .dropdown-menu .dropdown-submenu .dropdown-menu a:hover {
                padding-left: 49px;
            }

            .flexslider {
                margin-bottom: 15px;
            }

            .flex-direction-nav a {
                margin-top: -50px;
            }

            .flexslider .slides .flex-caption {
                position: static;
                display: block;
            }

            .flexslider .slides .flex-caption br {
                display: none;
            }

            .flexslider .slides .flex-caption .main {
                font-size: 13px;
                display: block;
                margin-bottom: 0;
            }

            .flexslider .slides .flex-caption .secondary {
                display: block;
                font-size: 12px;
            }

            .flexslider .flex-control-nav {
                display: none;
            }

            .home-page .promo .btn-cta {
                margin-top: 0;
            }

            .home-page .news .thumb {
                width: 60px;
                height: 60px;
            }

            .home-page .news .news-item {
                padding-left: 75px;
            }

            .home-page .course-finder .keywords {
                padding-left: 15px;
                margin-top: 10px;
            }

            .home-page .course-finder .keywords input {
                width: 180px;
            }

            .home-page .video .video-iframe {
                height: auto;
            }

            .home-page .testimonials .carousel .item {
                min-height: inherit;
            }

            .home-page .events .section-content {
                min-height: inherit;
            }

            .home-page .awards .carousel-control {
                top: 50px;
            }

            .footer .footer-content .subscribe-form .form-control {
                width: 140px;
            }

            .footer #tweet .tweets-list-container {
                max-width: 100%;
            }

            .footer .bottom-bar .social li {
                float: left;
            }

            .footer-col-inner {
                margin-bottom: 30px;
            }

            .footer #tweet {
                min-height: inherit;
            }

            .footer .footer-content .footer-col .fa-twitter {
                text-align: center;
                margin-bottom: 10px;
            }

            .page-wrapper .page-heading h1.heading-title {
                float: none;
                text-align: center;
                display: block;
            }

            .page-wrapper .breadcrumbs {
                text-align: center;
                display: block;
            }

            .page-wrapper .breadcrumbs ul {
                padding-top: 0;
                padding-left: 0;
                margin: 0 auto;
            }

            .page-wrapper .breadcrumbs ul li {
                float: none;
                display: inline-block;
            }

            .page-wrapper .breadcrumbs ul li.current {
                max-width: inherit;
                overflow: visible;
            }

            .home-page .course-finder .keywords input {
                float: left !important;
            }
        }

        /* Small devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            .wrapper {
                min-height: inherit;
                margin-bottom: 0;
            }

            .wrapper:after {
                content: none;
            }

            .footer {
                height: auto;
            }

            .footer .bottom-bar .social li {
                float: left;
            }

            .footer-col-inner {
                margin-bottom: 15px;
            }

            .home-page .testimonials .carousel .item {
                min-height: inherit;
            }

            .home-page .events .section-content {
                min-height: inherit;
            }

            .footer #tweet {
                min-height: inherit;
            }

            .page-wrapper .album-cover {
                min-height: 360px;
            }
        }

        /* Medium devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            .home-page .testimonials .carousel .item {
                min-height: 298px;
            }

            .home-page .events .section-content {
                min-height: 520px;
            }

            .home-page .video .video-iframe {
                height: 287px;
            }

            .footer .bottom-bar .social li {
                float: right;
            }

            .footer #tweet {
                min-height: 100px;
            }

            .page-wrapper .album-cover {
                min-height: 360px;
            }

            /* Sticky Footer */
            html,
            body {
                height: 100%;
            }

            body {
                font-size: 13px;
            }

            .wrapper {
                min-height: 100%;
                margin-bottom: -344px;
                /* equal to footer height */
            }

            .wrapper:after {
                content: "";
                display: block;
                height: 344px;
                /* must be the same height as footer */
            }

            .footer {

                /* must be the same height as footer */
            }
        }

        /* Large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .home-page .course-finder .keywords input {
                width: 255px;
            }
        }



        #main-container{
            margin-bottom: 40px;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="main-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--//nav-toggle-->
        </div>
        <!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active nav-item"><a href="index.html">Crear Manifiestos</a></li>

                <li class="nav-item"><a href="events.html">Buscar manifiestos</a></li>

                <li class="nav-item"><a href="contact.html">Contacto</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="nav-item  dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="true">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li><a href="/salir">Salir</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/entrar">Entrar</a>
                    </li>
                @endif

            </ul>
            <!--//nav-->
        </div>
        <!--//navabr-collapse-->
    </div>
    <!--//container-->
</nav>

<!-- Page Content -->
<div id="main-container" class="container">

    @yield('content')

</div>
<!-- /.container -->

<footer class="footer">

    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2015 <a href="#">http://www.manifiestos.co/</a></small>
                <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                <!--//social-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </div>
    <!--//bottom-bar-->
</footer>

<!-- jQuery Version 1.11.1 -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

@section('js')
@show

</body>

</html>
