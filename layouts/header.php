<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
	<title>Rush Job</title>

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="mdl/material.indigo-blue.min.css">
  <script defer src="mdl/material.min.js"></script>

  <style>
    .demo-card-wide.mdl-card {
      width: 95%;
      height: 50px;
      margin-left: auto;
      margin-right: auto;
    }

    .demo-card-wide.mdl-card a {
      color: black;
      text-decoration: none;
    }

    .jumbotron{
      background-image: url('https://images.unsplash.com/photo-1514472796143-14ece5ab7d94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80');
      background-repeat: no-repeat;
      background-size: 100%;
      color: white;
    }

    .search_form{
      background-color: white;
      border: 0px;
      padding: 5px;
      width: 80%;
      margin-right: 10px;
      border-radius: 5px;
    }

    .mdl-menu__item a{
      color: grey;
      text-decoration: none;
    }

    .mdl-layout a{
      color: grey;
      text-decoration: none;
    }
  </style>

</head>

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Rush Job</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>

      <!-- Right aligned menu below button -->
      <button id="demo-menu-lower-right"
              class="mdl-button mdl-js-button mdl-button--icon">
        <i class="material-icons">person</i>
      </button>

      <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
          for="demo-menu-lower-right">
        <li class="mdl-menu__item">
          <a href="profile.php">View Profile</a>
        </li>
        <li class="mdl-menu__item">
          <a href="logout.php">Logout</a>
        </li>
        <li class="mdl-menu__item">
          <a href="post.php">Post</a>
        </li>
      </ul>

      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="home.php">Home</a>
        <a class="mdl-navigation__link" href="post.php">Post A Job</a>
        <a class="mdl-navigation__link" href="">About</a>
        <a class="mdl-navigation__link" href="">Contact</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Rush Job</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="home.php">Home</a>
        <a class="mdl-navigation__link" href="post.php">Post A Job</a>
        <a class="mdl-navigation__link" href="">About</a>
        <a class="mdl-navigation__link" href="">Contact</a>
    </nav>
  </div>
