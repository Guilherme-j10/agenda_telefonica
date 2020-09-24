<?php

    namespace app\controller;
    use app\core\Dispatch;

    class defaultController extends Dispatch
    {

        public function index(Array $request, Array $response): void
        {
            $this->view('index', 'Joker - Wellcome');
        }

    }