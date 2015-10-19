<?php
use frontend\assets\AlphaAsset;

AlphaAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<head>

</head>
<body>
<?php $this->beginBody()?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>