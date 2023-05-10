<?php

namespace App\Controllers;

use App\Models\FormModel;

class FormController extends BaseController
{
    public function index()
    {
        $message = new FormModel();
        $data['messages'] = $message->findAll();
        return view('entryform/index.php', $data);
    }

    public function store()
    {
        $messages = new FormModel();
        $data = [
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name'), 
            'comment' => $this->request->getPost('comment') 
        ];
        $messages->save($data);
        return redirect('entryform');
    }

    public function edit($id = null)
    {
        $message = new FormModel();
        $data['message'] = $message->find($id);
        return view('entryform/edit.php', $data); 
    }

    public function update($id = null)
    {
        $message = new FormModel();
        $data = [
            'email' => $this->request->getPost('email'),
            'name' => $this->request->getPost('name'), 
            'comment' => $this->request->getPost('comment') 
        ];
        $message->update($id, $data);
        return redirect()->to(base_url('entryform'));
    }

    public function delete($id = null)
    {
        $message = new FormModel();
        $message->delete($id);
        return redirect()->back();
    }
}


?>
