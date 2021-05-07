<?php
  define("IS_SSL_ENABLED", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on');
  define(
    "BASE_URL", (IS_SSL_ENABLED ? "https" : "http") . "://" .
    $_SERVER['HTTP_HOST'] .
    str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(__DIR__))
  );
  define(
    "CURRENT_URL", (IS_SSL_ENABLED ? "https" : "http") . "://" .
    $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
  );

  $use_empty_bg = true;
  $backgrounds  = array_values(array_diff(scandir(__DIR__ . '/media/backgrounds'), ['.', '..']));
  if ($use_empty_bg) {$backgrounds[] = '';}
  $current_bg_id = rand(0, count($backgrounds) - 1);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MVU</title>
  <link rel="icon" type="image/png" href="./media/favicon.png" />
  <meta property="og:url" content="<?=CURRENT_URL?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="minimum viable utopia" />
  <meta property="og:image" content="<?=BASE_URL?>/media/ogimg.png" />
  <meta property="og:image:width" content="512" />
  <meta property="og:image:height" content="512" />
  <link rel="stylesheet" href="./dist/main.css" />
</head>

<?php
  $bg_style = '';
  if (!empty($backgrounds[$current_bg_id])) {
    $bg_style = "background-image: url('" . BASE_URL . "/media/backgrounds/" . $backgrounds[$current_bg_id] . "');";
  }
?>

<body style="<?=$bg_style?>">
