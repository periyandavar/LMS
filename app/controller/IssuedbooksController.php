<?php
class IssuedbooksController extends BaseController
{
    public function __construct()
    {
        parent::__construct($model);
    }
    public function index()
    {
        $this->loadLayout("adminHeader.html");
        $this->loadView('addIssuedbooks');
        $this->loadLayout("adminFooter.html");
    }
    public function add()
    {
        $this->loadLayout("adminHeader.html");
        $this->loadView('addIssuedbooks');
        $this->loadLayout("adminFooter.html");
    }
    public function manage()
    {
        $this->loadLayout("adminHeader.html");
        $this->loadView('manageIssuedbooks');
        $this->loadLayout("adminFooter.html");
    }

    public function user()
    {
        $this->loadLayout("userHeader.html");
        $this->loadView("IssuedBooks");
        $this->loadLayout("userFooter.html");
    }
}