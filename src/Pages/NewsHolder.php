<?php

namespace {
  use SilverStripe\Lumberjack\Model\Lumberjack;

  class NewsRaceHolder extends Page {
    //private static $icon = 'contact-page/icons/phone.png';
    private static $singular_name = "News Overview";
    private static $description = "Holder page for news articles";

    private static $extensions = [
      Lumberjack::class
    ];

    private static $has_many = [
    ];

    private static $allowed_children = [
      NewsPage::class
    ];

    public function getCMSFields() {
      $fields = parent::getCMSFields();

      return $fields;
    }

    public function getLumberjackTitle() {
      return 'Articles';
    }
  }
}