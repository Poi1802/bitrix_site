<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die(); ?>

<? if (!empty($arResult)): ?>
  <div class="footer-nav white-text">
    <nav>
      <ul>
        <? foreach ($arResult as $arItem): ?>
          <? if ($arItem['SELECTED']): ?>
            <li class="mega-parent">
              <a href="<?= $arItem['LINK'] ?>" style="color: #000;"><?= $arItem['TEXT'] ?></a>
            </li>
          <? else: ?>
            <li class="mega-parent">
              <a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
            </li>
          <? endif ?>
        <? endforeach ?>
      </ul>
    </nav>
  </div>

<? endif ?>

<!-- <div class="footer-nav white-text">
    <nav>
      <ul>
        <li class="mega-parent">
          <a href="index.html">Главная</a>
        </li>
        <li>
          <a href="about_us.html">О нас</a>
        </li>
        <li>
          <a href="services.html">Услуги</a>
        </li>
        <li>
          <a href="portfolio.html">Портфолио</a>
        </li>
        <li>
          <a href="blog.html">Блог</a>
        </li>
        <li>
          <a href="contacts.html">Контакты</a>
        </li>
      </ul>
    </nav>
  </div> -->