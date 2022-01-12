<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => 'SharePosts',
        'description' => 'Social Network defined by simplicity built on a simple php framework based Travesty Media Lessons'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }
