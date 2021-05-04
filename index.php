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
    <div id="newsletter" class="container-link">news</div>
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
