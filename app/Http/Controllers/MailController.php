<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest\MailRequest;
use App\Repositories\MailRepository\MailRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailController extends Controller
{
    public function __construct(
        private readonly MailRepository $mailRepository,
        private readonly Request $request
    )
    {
    }

    public function index()
    {
        return view('emails.index');
    }

    public function success(MailRequest $mailRequest)
    {
        $createMail = $this->mailRepository->create([
            'email_from' => $mailRequest->email_from,
            'email_to'   => $mailRequest->email_to,
            'email_cc'   => $mailRequest->email_cc,
            'subject'    => $mailRequest->subject,
            'ip'         => $this->request->ip(),
            'user_agent' => $this->request->userAgent(),
            'UUID'       => Str::uuid()->toString(),
        ]);

        require base_path('vendor/autoload.php');
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = env('MAIL_HOST');
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom($mailRequest->email_from, env('MAIL_FROM_NAME'));
            $mail->addAddress('rura9758@gmail.com');
            $mail->addCC('rura9758@gmail.com');

            $mail->isHTML();

            $mail->Subject = $mailRequest->subject;
            $mail->Body = $mailRequest->message;

            if ($mail->send()) {
                $lastEmailSent = $this->mailRepository->getLastEmailSent();
//                $uuid = $this->mailRepository->getLastUUID();
//                return back()->with("success", "Email has been sent.");
//                return to_route('success.show');
                return view('emails.success', ['mails' => $lastEmailSent]);
            }
            return back()->withInput()->withErrors($mail->ErrorInfo);
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }

//    public function show(Request $request)
//    {
//        echo "<pre>";
//        print_r($request->all());
//    }
}
