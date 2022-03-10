<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class User extends BaseController
{
    private $userModel;
    
    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('users',[
            'users' => $this->userModel->paginate(10),
            'pager' =>$this->userModel->pager
        ]);
    }
    public function delete($id){
        if($this->userModel->delete($id)){
            echo view('messages',[
                'message' => 'User Deleted with Success<script>window.location.href="/index.php"</script>'
            ]);
        }else{
            echo "Erro";
        }

        }
        public function create(){
            return view('form');
        }

        public function store(){
            if($this->userModel->save($this->request->getPost())){
                return view('messages',[
                    'message' => 'user saved successfully<script>window.location.href="./"</script>'
                ]);
            }else{
                echo 'an error has occurred.';
            }
        }
        public function edit($id){
            return view('form',[
                'user' => $this->userModel->find($id)
            ]);
        }
    }

