<?php


namespace App\Services;


use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Environment;

class MailerService
{

    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    /**
     * @var Environment
     */
    private $environment;

    public function __construct(\Swift_Mailer $mailer, Environment $environment)
    {
        $this->mailer = $mailer;
        $this->environment = $environment;
    }


    public function sendToken($baseUrl,$token, $to, $template){

        $url = 'http://'.$baseUrl.'/account/'.'confirm/'.$token.'/'.$to ;
        $message = (new \Swift_Message('Mail de confirmation'))
            ->setFrom('inscription@lenil.com')
            ->setTo($to)
            ->setBody(
                $this->environment->render(
                    'emails/'.$template,
                    [
                        'token' => $token,
                        'username' => $to,
                        'urlConfirm' => $url
                    ]
                ),
                'text/html'
            );

        $code = $this->mailer->send($message);
        return $code;
    }

    public function sendForgotPassword($baseUrl,$token, $to, $template){

        $url = 'http://'.$baseUrl.'/account/resetpasswword/'.$token.'/'.$to ;
        $message = (new \Swift_Message('Réinitialisation de mot de pass'))
            ->setFrom('inscription@lenil.com')
            ->setTo($to)
            ->setBody(
                $this->environment->render(
                    'emails/'.$template,
                    [
                        'username' => $to,
                        'urlConfirm' => $url
                    ]
                ),
                'text/html'
            );

        $code = $this->mailer->send($message);
        return $code;
    }

}