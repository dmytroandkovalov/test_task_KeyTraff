<?php


class Controller
{

    private $request_model;

    public function __construct()
    {
        require_once (APPPATH. '/model/Model.php');

        $this->request_model = new Model();
    }


    public function request1() {

        $data['db_rows'] = $this->request_model->getRequest1();

        $this->render_ajax ('request1', $data );

    }

    public function request2() {

        $data['db_rows'] = $this->request_model->getRequest2();

        $this->render_ajax ('request2', $data );

    }

    private function render_ajax ($view, array $data) {

        require ( APPPATH .'/view/' .$view .'.php');

        die;
    }

}