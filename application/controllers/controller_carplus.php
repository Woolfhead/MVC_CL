<?php

class Controller_Carplus extends Controller
{

    function action_index()
    {
        $this->view->generate('carplus_view.php', 'template_view.php');
    }
}
