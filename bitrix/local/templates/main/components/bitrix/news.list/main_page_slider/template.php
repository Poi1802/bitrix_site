<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? if (!empty($arResult['ITEMS'])): ?>
  <section class="slider-area">
    <div class="slider-active">
      <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="single-slider " id=" <?= $this->GetEditAreaId($arItem['ID']); ?>">
          <div class="slider-img parallax-bg bg-opacity-black-60"
            style="background: url(<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>)">
          </div>
          <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
            <span>
              <?= $arItem['NAME'] ?>
            </span>
            <h2>
              <?= $arItem['PREVIEW_TEXT'] ?>
            </h2>
            <? if (!empty($arItem['PROPERTIES']['link'])): ?>
              <a class="my-button" href="<?= $arItem['PROPERTIES']['link']['VALUE'] ?>"><?= $arItem['DETAIL_TEXT'] ?></a>
            <? endif ?>
          </div>
        </div>
      <? endforeach ?>
    </div>
  </section>
<? endif ?>



<!-- <section class="slider-area">
  <div class="slider-active">
    <div class="single-slider">
      <div class="slider-img parallax-bg bg-opacity-black-60" style="background: url(img/home_slider/home_slider1.jpg)">
      </div>
      <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
        <span>Добро пожаловать</span>
        <h2>
          Digital-агентство<br />
          We Coders
        </h2>
        <a class="my-button" href="#about_us">Подробнее</a>
      </div>
    </div>
    <div class="single-slider">
      <div class="slider-img parallax-bg bg-opacity-black-60" style="background: url(img/home_slider/home_slider2.jpg)">
      </div>
      <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
        <span>Работайте с лучшими</span>
        <h2>Судите по результатам</h2>
        <a class="my-button" href="#portfolio">Смотреть работы</a>
      </div>
    </div>
    <div class="single-slider">
      <div class="slider-img parallax-bg bg-opacity-black-60" style="background: url(img/home_slider/home_slider3.jpg)">
      </div>
      <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
        <span>Большой опыт</span>
        <h2>Классный результат</h2>
        <a class="my-button" href="#portfolio">Смотреть работы</a>
      </div>
    </div>
  </div>
</section> -->