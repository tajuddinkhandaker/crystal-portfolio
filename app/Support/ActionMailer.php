<?php

namespace App\Support;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ActionMailer
{

    /**
     * The Laravel Mailer instance.
     *
     * @var Mailer
     */
    protected $mailer;

    /**
     * The subject of the email.
     *
     * @var string
     */
    protected $subject;

    /**
     * The name for the email.
     *
     * @var string
     */
    protected $name;

    /**
     * The sender of the email.
     *
     * @var string
     */
    protected $from;

    /**
     * The recipient of the email.
     *
     * @var string
     */
    protected $to;

    /**
     * The view for the email.
     *
     * @var string
     */
    protected $view;

    /**
     * The data associated with the view for the email.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Create a new app mailer instance.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    private function receivers()
    {
        return preg_split("/[,]+/", env('SECURITY_MAIL_DEV', 'firewings1097@gmail.com'));
    }

    /**
     * Deliver an email to 'Sensei' following given protocols
     *
     * @param  Illuminate\Http\Request $request
     * @param  array $protocols
     * @return void
     */
    public function report(Request $request, array $protocols)
    {
        if(! is_array($protocols))
            return;

        $data = [];//ProtocolKeeper::getData($request);

        $this->from = config('mail.admin.address');
        $this->view = 'auth.emails.all-actions';
        $this->data = compact('data', 'protocols');
        $this->subject = config('app.vendor') . ' - Protocol Report!';
        $this->name = 'MarketPlex Sensei';
        foreach ($this->receivers() as $email)
        {
            $this->to = $email;
            $this->deliver();
            Log::info('[' . config('app.vendor') . '][Protocol reported]');
        }
    }

    /**
     * Deliver an email to make an appointment
     *
     * @param  Illuminate\Http\Request $request
     * @param  array $protocols
     * @return void
     */
    public function request(array $data)
    {
        if(! is_array($data))
            return;
        $this->from = $data['email'];
        $this->view = 'emails.appointment-request';
        $this->data = [ 'body' =>  $data['body'], 'name' => $data['name'] ];
        $this->subject = '[Client Query][IP:' . $data['ip'] . '][' . $data['subject'] . ']';
        $this->name = $data['name'];
        $this->to = config('mail.admin.address');
        $this->deliver();
        Log::info('[PortfolioMaker][ip:' . $data['ip'] . '][Email sent for appointment]');
    }

    /**
     * Deliver the email.
     *
     * @return void
     */
    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from($this->from, $this->name)
                    ->to($this->to)->subject($this->subject);
        });
    }
}
