<?php
declare(strict_types = 1);

namespace Civi\Mandovi;

use Civi\Core\Event\GenericHookEvent;
use Civi\Core\Service\AutoSubscriber;

/**
 * @service mandovi.hooks
 */
class Hooks extends AutoSubscriber {

  public static function getSubscribedEvents(): array {
    return [
      'hook_civicrm_alterBundle' => 'addFonts',
    ];
  }

  public function addFonts(GenericHookEvent $event): void {
    if ($event->bundle->name === 'coreStyles') {
      $event->bundle->addStyleFile('mandovi', 'css/fonts.css', ['weight' => -100]);
    }
  }

}
