<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 11.03.16
 * Time: 18:11
 * Главная страница
 */

?>
<div class="w-container">
    <h1 class="body-h1"><?php echo $text_h1;?> <span class="body-h1-span">(<?php echo $text_description;?>)</span>
    </h1>
</div>
<div class="w-container body-container">
    <div class="w-row">
        <div class="w-col w-col-3">
            <div class="main-page-menu-item">
                <a href="/f89">
                 <img src="/images/icons/44_-_Medical_Chart-512.png" class="main-menu-img">
                </a>
                <a href="/f89" class="menu-item-link">Ф89</a>
            </div>
        </div>
        <div class="w-col w-col-3">
            <div class="main-page-menu-item">
                <a href="/f30">
                  <img src="/images/icons/27_-_Medical_Folder-512.png" class="main-menu-img">
                </a>
                <a href="/f30" class="menu-item-link">Ф30</a>
            </div>
        </div>
        <div class="w-col w-col-3">
            <div class="main-page-menu-item">
                <a href="/patients" class="menu-item-link">
                 <img src="/images/icons/31_-_Health-512.png" class="main-menu-img">
                </a>
                <a href="/patients" class="menu-item-link"><br>пациенты</a></div>
        </div>
        <div class="w-col w-col-3">
            <div class="main-page-menu-item">
                <a href="/consults">
                 <img src="/images/icons/44_-_Medical_Chart-512.png" class="main-menu-img">
                </a>
                <a href="/consults" class="menu-item-link"><br>обращения</a>
            </div>
        </div>
    </div>
</div>

