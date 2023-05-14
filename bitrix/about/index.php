<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('description', 'Страница о студии');
?>
<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
  <div class="container">
    <h2 class="title-1">
      <? $APPLICATION->IncludeComponent(
        'bitrix:main.include',
        '',
        array(
          "AREA_FILE_SHOW" => "file",
          "COMPOSITE_FRAME_MODE" => "A",
          "COMPOSITE_FRAME_TYPE" => "AUTO",
          "EDIT_TEMPLATE" => "",
          "PATH" => "/about/includes/index_about_title.php"
        )
      ); ?>
    </h2>
    <div class="row">
      <div class="col-md-7">
        <div class="who-we">
          <? $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            '',
            array(
              "AREA_FILE_SHOW" => "file",
              "COMPOSITE_FRAME_MODE" => "A",
              "COMPOSITE_FRAME_TYPE" => "AUTO",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/about/includes/index_about_text.php"
            )
          ); ?>
        </div>
      </div>
      <div class="col-md-5">
        <div class="about-bg">
          <? $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            '',
            array(
              "AREA_FILE_SHOW" => "file",
              "COMPOSITE_FRAME_MODE" => "A",
              "COMPOSITE_FRAME_TYPE" => "AUTO",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/about/includes/index_about_img.php"
            )
          ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>