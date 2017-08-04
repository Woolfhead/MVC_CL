<?php

class Controller_Learntodrive2 extends Controller
{

    function action_index()
    {
        $this->view->generate('learntodrive2_view.php', 'template_view.php');
    }
}
