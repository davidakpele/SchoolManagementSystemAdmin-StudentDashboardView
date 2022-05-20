<?php

Class ExaminationController extends Controller
{
    function index()
    {
        echo "<script>
                window.location.assign('".ROOT."Student/Examination?q=Started');
        </script>";
    }
}