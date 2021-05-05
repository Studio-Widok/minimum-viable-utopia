<?php include 'header.php';?>
<?php
  $links = [
    [
      'title'    => "seminaria",
      'subtitle' => 'the stack',
      'url'      => '',
    ],
    [
      'title'    => "txt",
      'subtitle' => 'nooskop',
      'url'      => '',
    ],
    [
      'title'    => "wydarzenia",
      'subtitle' => '',
      'url'      => '',
    ],
    [
      'title'    => "wyprawy",
      'subtitle' => 'poręba 2020<br /> katowice 2018',
      'url'      => '',
    ],
    [
      'title'    => "projekty",
      'subtitle' => '',
      'url'      => '',
    ],
    [
      'title'    => "inne",
      'subtitle' => 'merch',
      'url'      => '',
    ],
  ];
?>
<div id="container-out" class="flex flex-1050">
  <div id="container-main" class="col2">
    <img id="logo" src='./media/logo.png' />
    <a id="twitter" href="" target="_blank"><img src="./media/twitter.png"
        alt="" /></a>
    <div id="container-time">czas</div>
  </div>
  <div id="container-links" class="col2">
    <div id="newsletter" class="container-link">
      <form action="">
        <div class="link-title--uppercase">newsletter</div>
        <div class="input-wrap">
          <input type="text" id="newsletter-input">
          <div class="placeholder">newsletter<span>_</span></div>
        </div>
        <button class="newsletter-button">zapisz się</button>
      </form>
    </div>
    <div class="container-link">
      <a href="<?=$link['url']?>">
        <div class="link-title">powered by <br /></div>
        GRUPA <br />
        ROBOCZA
      </a>
    </div>
    <?php foreach ($links as $link) {?>
    <div class="container-link">
      <a href="<?=$link['url']?>">
        <div class="link-title--uppercase"><?=$link['title']?></div>
        <div class="link-subtitle"><?=$link['subtitle']?></div>
      </a>
    </div>
    <?php }?>
  </div>
</div>
<?php include 'footer.php';?>
