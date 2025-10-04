<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        // return view('contact');
        // return redirect()->route('/') . '#contact';
        return redirect('/#contact');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email',
            'telefone' => 'required|string',
            'assunto' => 'required|string',
            'mensagem' => 'required|string|min:10',
        ]);

        // 1. Salvar no banco de dados
        $message = ContactMessage::create($data);

        // 2. Enviar e-mail (substitua por seu e-mail)
        Mail::to($data['email'])->send(new ContactNotification($data));

        // return back()->with('success', 'Mensagem enviada e salva com sucesso!');
        return redirect(url()->previous() . '#contact')->with('success', 'Mensagem enviada com sucesso!');

    }
}
