<?php
namespace App\Http\Controllers;
 
use stdClass;
use App\Mail\EnvioEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\JsonResponse;
 
class MailController extends Controller
{
    public function send(Request $request)
    {
        $request = $request->post();

        $objDemo = new \stdClass();
        $objDemo->email = $request['email'];
        $objDemo->name = $request['name'];
        $objDemo->description = $request['description'];
        $objDemo->receiver = 'Contacto';
 
        Mail::to("contacto@notbugit.com")->send(new EnvioEmail($objDemo));

        return new JsonResponse(array('ok' => true));
    }
}