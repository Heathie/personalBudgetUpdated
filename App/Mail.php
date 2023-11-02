<?php

namespace App;

use App\Config;
use Mailgun\Mailgun;

class Mail
{
  public static function send($to, $subject, $text, $html)
  {
      $mg = Mailgun::create(Config::MAILGUN_API_KEY);
      $domain = Config::MAILGUN_DOMAIN;

      $mg->messages()->send(
        $domain,
        [
          'from'    => 'your-sender@your-domain.com',
          'to'      => $to,
          'subject' => $subject,
          'text'    => $text,
          'html'    => $html
        ]
      );
  }
}
