<?php
  include 'header.php';

  $items = [
    [
      'title' => "seminaria",
      'links' => [
        [
          'text' => 'the stack',
          'url'  => 'https://mvu.pl/the_stack/',
        ],
      ],
    ],
    [
      'title' => "txt",
      'links' => [
        [
          'text' => 'nooskop',
          'url'  => 'https://nooskop.mvu.pl/',
        ],
      ],
    ],
    [
      'title' => "wydarzenia",
      'links' => [],
    ],
    [
      'title' => "wyprawy",
      'links' => [
        [
          'text' => 'poręba 2020',
          'url'  => 'https://mvu.pl/wyprawa/',
        ],
        [
          'text' => 'katowice 2018',
          'url'  => 'https://wyprawa.robocza.org/',
        ],
      ],
    ],
    [
      'title' => "projekty",
      'links' => [],
    ],
    [
      'title' => "inne",
      'links' => [
        [
          'text' => 'merch',
          'url'  => 'https://odziez.robocza.org/',
        ],
      ],
    ],
  ];
?>
<div id="container-out" class="flex flex-1050">
  <div id="container-main" class="col2">
    <img id="logo" src='./media/logo.svg' />
    <a id="twitter" href="https://twitter.com/mv_utopia" target="_blank"><img
        src="./media/twitter.png" alt="" /></a>
    <div id="container-time"></div>
  </div>
  <div id="container-links" class="col2">
    <div id="newsletter" class="container-link">
      <form action="https://www.getrevue.co/profile/mvu/add_subscriber"
        method="post" name="revue-form" target="_blank">
        <div class="links-title--uppercase">newsletter</div>
        <div class="input-wrap">
          <input type="email" id="newsletter-input" name="member[email]">
          <div class="placeholder">newsletter<span>_</span></div>
        </div>
        <button class="newsletter-button" name="member[subscribe]">zapisz
          się</button>
      </form>
    </div>
    <div class="container-link">
      <a href="http://grupa.robocza.org/" target="_blank">
        <img src="./media/gruparobocza.svg" />
      </a>
    </div>
    <?php foreach ($items as $item) {?>
    <div class="container-link">
      <div class="links-title--uppercase"><?=$item['title']?></div>
      <?php foreach ($item['links'] as $link) {?>
      <a href="<?=$link['url']?>" target="_blank">
        <div class="link-text"><?=$link['text']?></div>
      </a>
      <?php }?>
    </div>
    <?php }?>
  </div>
</div>
<?php include 'footer.php';?>
