<?php

require_once('lyt/template.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; } ?></title>
    <?php if(isset($TPL->ContentHead)) { include $TPL->ContentHead; } ?>
</head>
<body>
<div id="header">
    <?php if(isset($TPL->ContentHeader)) { include $TPL->ContentHeader; } ?>
</div>

    <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>

<div id="footer">
    <?php if(isset($TPL->ContentFooter)) { include $TPL->ContentFooter; } ?>
</div>
</body>
</html>