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
      'hook_civicrm_pageRun' => 'addSummaryScript',
    ];
  }

  public function addFonts(GenericHookEvent $event): void {
    if ($event->bundle->name === 'coreStyles') {
      $event->bundle->addStyleFile('mandovi', 'css/fonts.css', ['weight' => -100]);
    }
  }

  public function addSummaryScript(GenericHookEvent $event): void {
    if ($event->page instanceof \CRM_Contact_Page_View_Summary) {
      \Civi::resources()->addScriptFile('mandovi', 'js/summary.js');
    }
  }

}
