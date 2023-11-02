<?php 

namespace App;

const FLASH_NOTIFICATIONS_KEY = 'flash_notifications';

class Flash
{
  const SUCCESS = 'success';
  const INFO = 'info';
  const WARNING = 'warning';
  public static function addMessage($message, $type = 'success')
  {
    if (!isset($_SESSION[FLASH_NOTIFICATIONS_KEY])) {
      $_SESSION[FLASH_NOTIFICATIONS_KEY] = [];
    }

    $_SESSION[FLASH_NOTIFICATIONS_KEY][] = [
      'body' => $message,
      'type' => $type
    ];
  }

  public static function getMessages()
  {
    if (isset($_SESSION[FLASH_NOTIFICATIONS_KEY])) {
      $messages = $_SESSION[FLASH_NOTIFICATIONS_KEY];
      unset($_SESSION[FLASH_NOTIFICATIONS_KEY]);

      return $messages;
    }
  }
}