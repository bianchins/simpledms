<!DOCTYPE html>
<html>
<head>
    <title>Gestione contenuto riccioneterme.it</title>
    <!-- Bootstrap -->
    <meta charset="utf-8">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>assets/css/datepicker.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>assets/css/bootstrap-fileupload.min.css" rel="stylesheet" media="screen">
	    <!-- Le styles -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-fileupload.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <script>
    $( document ).ready( function() {
        //Bind this keypress function to all of the input tags
        $("input").keypress(function (evt) {
            //Determine where our character code is coming from within the event
            var charCode = evt.charCode || evt.keyCode;
            if (charCode  == 13) { //Enter key's keycode
                return false;
            }
            var value = $(this).val();
            $(this).val(value.replace(/\,/i, '.'));
        });        
    });
    </script>
    </head>
    <body>
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#" sytle="padding:5px 20px;"><img src="<?php echo base_url()?>assets/img/logo.png" style="margin:0; padding:0; border:0;"/></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-map-marker icon-white"></i> Hotels <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('hotels/nuovo')?>">Nuovo hotel</a></li>
                  <li><a href="<?php echo site_url('hotels/elenco')?>">Gestisci hotel</a></li>
                </ul>
              </li>
			 
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-align-justify icon-white"></i> Contenuti <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">News home</li>
		  		  <li><a href="<?php echo site_url('news/nuovo')?>">Nuova news</a></li>
                  <li><a href="<?php echo site_url('news/elenco')?>">Gestisci news</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Contenuti</li>
                  <li><a href="<?php echo site_url('contenuti/nuova')?>">Nuovo contenuto</a></li>
                  <li><a href="<?php echo site_url('contenuti/elenco')?>">Gestisci contenuti</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Perle d'acqua <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('pdf/nuova')?>">Carica pdf</a></li>
                  <li><a href="<?php echo site_url('pdf/elenco')?>">Gestisci pdf</a></li>
                </ul>
              </li>
              <li><a href="<?php echo site_url('logout')?>"><i class="icon-off icon-white"></i> Esci</a></li>
            </ul>
	   
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
        
    <div class="container">    