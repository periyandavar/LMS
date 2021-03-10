<?php
class CategoriesController extends Controller
{
    public function __construct($model = null)
    {
        parent::__construct($model);
    }
    public function index()
    {
        $this->loadLayout("adminHeader.html");
        $this->loadView('addCategories');
        $this->loadLayout("adminFooter.html");
    }
    public function add()
    {
        $this->loadLayout("adminHeader.html");
        $this->loadView('addCategories');
        $this->loadLayout("adminFooter.html");
    }
    public function manage()
    {
        $this->loadLayout("adminHeader.html");
        $this->loadView('manageCategories');
        $this->loadLayout("adminFooter.html");
    }
}