<?php

Class Error404 extends Controller
{
    function index()
    {
        $data['page_title'] = "Access Denied";
        $this->view("Error404", $data);
    }
}