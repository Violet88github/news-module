<?php

namespace {
  use SilverStripe\Forms\DateField;
  use SilverStripe\Forms\TextareaField;

  use SilverStripe\Assets\Image;
  use SilverStripe\AssetAdmin\Forms\UploadField;

  class NewsPage extends Page {
    //private static $icon = 'contact-page/icons/phone.png';
    private static $singular_name = "Nieuws";
    private static $description = "News page";
    private static $show_in_sitetree = false;
    private static $can_be_root = false;
    
    private static $db = [
      'PublicationDate'   => 'Date',
      'Summary'           => 'Text'
    ];

    private static $has_one = [
      'Thumbnail'         => Image::class
    ];

    private static $owns = [
      'Thumbnail'
    ];  

    public function getCMSFields() {
      $fields = parent::getCMSFields();

      $fields->addFieldsToTab('Root.Main', [
        DateField::create('PublicationDate', 'Datum'),
        TextareaField::create('Summary', 'Summary'),
        UploadField::create('Thumbnail', 'Image')->setFolderName('NewsThumbnails')
      ], 'Content');

      return $fields;
    }
  }
}