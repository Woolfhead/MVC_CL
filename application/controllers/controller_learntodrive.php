<?php

class Controller_Learntodrive extends Controller
{

    function action_index()
    {
        $this->view->generate('learntodrive_view.php', 'template_view.php');
    }
}
