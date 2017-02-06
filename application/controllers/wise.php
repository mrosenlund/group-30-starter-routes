<?php
/**
 * Created by PhpStorm.
 * User: shayegh
 * Date: 2/5/17
 * Time: 3:32 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Wise extends Application {
    function __construct()
    {
        parent::__construct();
    }

    public function bingo()
    {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}