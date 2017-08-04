<?php

class Controller_Car extends Controller
{

    function action_index()
    {
        $this->view->generate('car_view.php', 'template_view.php');
    }
}
