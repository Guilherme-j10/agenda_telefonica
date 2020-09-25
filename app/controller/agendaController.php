<?php

    namespace app\controller;
    use app\core\Dispatch;

    class agendaController extends Dispatch
    {

        protected $dados_agenda;

        public function __construct()
        {
            $content = file_get_contents('database.json');
            $this->dados_agenda = json_decode($content, true);
        }

        public function index(Array $request, Array $response): void
        {
            $this->view('agenda', 'Agenda', ['agenda' => array_reverse($this->dados_agenda)]);
        }

        public function save_contact(Array $request, Array $response): void
        {
            $array_cores = ['#32a852', '#329ea8', '#3234a8', '#7132a8', '#9832a8', '#a8326b', '#87a832', '#a83a32', '#329ea8', '#55a832'];

            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $telefone = $_POST['telefone'];

            $nome_arr = str_split($nome);
            $sobrenome_arr = str_split($sobrenome);

            $double_letter = $nome_arr[0].$sobrenome_arr[0];
            $cor = $array_cores[rand(0, count($array_cores) - 1)];

            $schema = [
                "nome" => $nome,
                "sobrenome" => $sobrenome,
                "cor" => $cor,
                "numero_telefone" => $telefone,
                "dublle_latter" => $double_letter
            ];

            $this->dados_agenda[] = $schema;

            if(file_put_contents('database.json', json_encode($this->dados_agenda))){
                $response['redirect']('agenda');
            }else{
                $response['json']('Error to save');
            }
        }
    }