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

<!-- Infographics -->

<? if (!empty($arResult['ITEMS'])): ?>
  <section class="project-count-area brand-bg pad-90">
    <div class="container">
      <div class="row">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
          <?
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <div class="col-md-3 col-sm-3" id=" <?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="single-count white-text text-center">
              <div class="icon-briefcase">
                <?= $arItem['PREVIEW_TEXT'] ?>
              </div>
              <h2 class="counter">
                <?= $arItem['DETAIL_TEXT'] ?>
              </h2>
              <p>
                <?= $arItem['NAME'] ?>
              </p>
            </div>
          </div>
        <? endforeach ?>
      </div>
    </div>
  </section>
<? endif ?>

<!-- <pre>
  <? print_r($arResult) ?>
</pre> -->

<!-- <section class="project-count-area brand-bg pad-90">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="single-count white-text text-center">
          <span class="icon-briefcase"></span>
          <h2 class="counter">360</h2>
          <p>Готовых проектов</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="single-count white-text text-center">
          <span class="icon-wine"></span>
          <h2 class="counter">690</h2>
          <p>Чашек кофе выпито</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="single-count white-text text-center">
          <span class="icon-lightbulb"></span>
          <h2 class="counter">420</h2>
          <p>Воплотили супер-йдей</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="single-count white-text text-center">
          <span class="icon-happy"></span>
          <h2 class="counter">115</h2>
          <p>Счастливых клиентов</p>
        </div>
      </div>
    </div>
  </div>
</section> -->