<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-02-10
 * Time: 07:43
 */ ?>
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0 ">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                         src="assets/images/logo.png" alt="Shards Dashboard">
                    <span class="d-none d-md-inline ml-1">Finobu Solo</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">close</i>
            </a>
        </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..."
                   aria-label="Search">
        </div>
    </form>
    <div class="nav-wrapper">

        <ul class="nav nav--no-borders flex-column">
            <li class="nav-item">
                <a class="nav-link 1" href="overview">
                    <i class="material-icons">assessment</i>
                    <span>Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link 2" href="clients">
                    <i class="material-icons">people</i>
                    <span>Clients</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link 3" href="projects">
                    <i class="material-icons">line_style</i>
                    <span>Projects</span>
                </a>
            </li>
            <li class="nav-item 4">
                <a class="nav-link " href="invoices">
                    <i class="material-icons">attach_money</i>
                    <span>Invoices</span>
                </a>
            </li>
            <li class="nav-item 5">
                <a class="nav-link " href="proposals">
                    <i class="material-icons">dashboard</i>
                    <span>Proposals </span>
                </a>
            </li>
            <h6 class="main-sidebar__nav-title">Personal</h6>
            <li class="nav-item 6">
                <a class="nav-link " href="tasks">
                    <i class="material-icons">done</i>
                    <span>Tasks</span>
                </a>
            </li>
            <li class="nav-item 7">
                <a class="nav-link " href="notes">
                    <i class="material-icons">assignment</i>
                    <span>Notes</span>
                </a>
            </li>
            <li class="nav-item 8">
                <a class="nav-link " href="files">
                    <i class="material-icons">perm_media</i>
                    <span>Files</span>
                </a>
            </li>
        </ul>


    </div>
</aside>
