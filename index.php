<?php include 'header.php';?>
<?php
  $links = [
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
    [
      'title'    => "lorem",
      'subtitle' => 'lorem ipsum',
      'url'      => '',
    ],
  ];
?>
<div id="container-out" class="flex">
  <div id="container-main">
    <img id="logo" src='./media/logo.png' />
    <a id="twitter" href="" target="_blank"><img src="./media/twitter.png"
        alt="" /></a>
    <div id="container-time">czas</div>
  </div>
  <div id="container-links">
    <div id="newsletter" class="container-link">news</div>
    <?php foreach ($links as $link) {?>
    <div class="container-link">
      <a href="<?=$link['url']?>">
        <div class="link-title"><?=$link['title']?></div>
        <div class="link-subtitle"><?=$link['subtitle']?></div>
      </a>
    </div>
    <?php }?>
  </div>
</div>
<?php include 'footer.php';?>
