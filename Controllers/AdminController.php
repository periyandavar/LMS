<?php
class AdminController extends Controller{
    public function __construct($model=null)
    {
        parent::__construct($model);
    }
    public function index(){
        $this->loadView("admin");
    }
    public function home(){
        $this->loadLayout("adminHeader.html");
        $this->loadView('home');
        $this->loadLayout("adminFooter.html");
    }
    public function profile(){
        $this->loadLayout("adminHeader.html");
        $this->loadView('adminProfile');
        $this->loadLayout("adminFooter.html");
    }
}