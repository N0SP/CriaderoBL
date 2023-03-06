<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Bridge\Mailgun\Transport\MailgunTransportFactory;


class ContactoController extends Controller
{
    public function contactos()
    {
        return view('web.contactos');
    }

    public function contacts()
    {
        return view('emails.mailcontacto');
    }

    public function EnviarContacto(Request $request){
        Mail::to('info@pgtlogistics.com')->send(new Contacto($request->only('nombre', 'email', 'telefono', 'asunto', 'mensaje')));
        return redirect('contactos')->with('status', 'Mensaje enviado con exito, pronto sera contactado');
    }

}