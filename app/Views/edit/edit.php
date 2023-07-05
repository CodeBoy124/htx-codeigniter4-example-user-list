<!-- DEBUG: Start edit #0 -->
<?php $htx_edit_0_props = []; ?>
<!-- DEBUG: Start BasicLayout #6 -->
<?php $htx_BasicLayout_6_props = ["title"=>"Edit Person"]; ?>
<?php
$htx_BasicLayout_6_pageTitle = $htx_BasicLayout_6_props["title"] ?: "Example";
?>
<!-- DEBUG: Start routes #7 -->
<?php $htx_routes_7_props = []; ?><?php
$route_pages = [
    "Home" => "/",
    "About" => "/about",
    "Contact" => "/contact",
];
?>
<!-- DEBUG: End routes #7 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example | <?= $htx_BasicLayout_6_pageTitle ?></title>
<!-- DEBUG: Start scopes -->
<style>
/* DEBUG: Start scoped css for file: src\components\BasicLayout\BasicLayout.css */
body {
    margin: 0;
    padding: 0;
}
/* DEBUG: Start scoped css for file: src\components\NavBar\NavBar.css */
.NavBar-container {
    position: sticky;
    left: 0;
    top: 0;
    padding: 10px;
    width: calc(100vw - 20px);
    background-color: rgb(231, 231, 231);
}
.NavBar-container>nav {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
/* DEBUG: Start scoped css for file: src\components\Nav\Nav.css */
.Nav-a {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
</style>
<!-- DEBUG: End scopes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
<!-- DEBUG: Start NavBar #8 -->
<?php $htx_NavBar_8_props = ["page"=>$htx_BasicLayout_6_pageTitle]; ?>
<?php
$htx_NavBar_8_currentPage = $htx_NavBar_8_props["page"];
?>
<header class="NavBar-container">
    <nav>
        <?php foreach ($route_pages as $htx_NavBar_8_page => $htx_NavBar_8_url) { ?>
<!-- DEBUG: Start Nav #9 -->
<?php $htx_Nav_9_props = ["to"=>$htx_NavBar_8_url,"name"=>$htx_NavBar_8_page,"active"=>$htx_NavBar_8_currentPage]; ?><a class="Nav-a" href="<?= base_url($htx_Nav_9_props["to"]) ?: "/" ?>">
    <?php if ($htx_Nav_9_props["active"] == $htx_Nav_9_props["name"]) { ?>
        <b><?= $htx_Nav_9_props["name"] ?: "" ?></b>
    <?php } else { ?>
        <?= $htx_Nav_9_props["name"] ?: "" ?>
    <?php } ?>
</a>
<!-- DEBUG: End Nav #9 -->
        <?php } ?>
    </nav>
</header>
<!-- DEBUG: End NavBar #8 -->
    <main>
<!-- DEBUG: Children start BasicLayout #6 -->
    <div style="width: 100%; text-align: center; padding-top: 10px;">
        <h1><?= (isset($person) && isset($person->name)) ? ("Edit <span id='person-title'>" . $person->name . "</span>") : "Create new person" ?></h1>
        <form action="<?= base_url("/api/save") ?>" method="post" style="width: 80%; margin: auto;">
<!-- DEBUG: Start InputField #1 -->
<?php $htx_InputField_1_props = ["name"=>"name","value"=>((isset($person) && isset($person->name)) ? $person->name : "")]; ?><?php
$htx_InputField_1_type = isset($htx_InputField_1_props["type"]) ? $htx_InputField_1_props["type"] : "text";
if ($htx_InputField_1_type == "hidden") { ?>
    <input type="hidden" name="<?= $htx_InputField_1_props["name"] ?>" id="input-<?= $htx_InputField_1_props["name"] ?>" value="<?= $htx_InputField_1_props["value"] ?: "" ?>" />
<?php } else { ?>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="<?= $htx_InputField_1_props["name"] ?>" id="input-<?= $htx_InputField_1_props["name"] ?>" value="<?= $htx_InputField_1_props["value"] ?: "" ?>" />
        <label for="input-<?= $htx_InputField_1_props["name"] ?>"><?= ucfirst($htx_InputField_1_props["name"]) ?></label>
    </div>
<?php } ?>
<!-- DEBUG: End InputField #1 -->
<!-- DEBUG: Start InputField #2 -->
<?php $htx_InputField_2_props = ["name"=>"email","value"=>((isset($person) && isset($person->email)) ? $person->email : "")]; ?><?php
$htx_InputField_2_type = isset($htx_InputField_2_props["type"]) ? $htx_InputField_2_props["type"] : "text";
if ($htx_InputField_2_type == "hidden") { ?>
    <input type="hidden" name="<?= $htx_InputField_2_props["name"] ?>" id="input-<?= $htx_InputField_2_props["name"] ?>" value="<?= $htx_InputField_2_props["value"] ?: "" ?>" />
<?php } else { ?>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="<?= $htx_InputField_2_props["name"] ?>" id="input-<?= $htx_InputField_2_props["name"] ?>" value="<?= $htx_InputField_2_props["value"] ?: "" ?>" />
        <label for="input-<?= $htx_InputField_2_props["name"] ?>"><?= ucfirst($htx_InputField_2_props["name"]) ?></label>
    </div>
<?php } ?>
<!-- DEBUG: End InputField #2 -->
            <?php if (isset($person->id)) { ?>
<!-- DEBUG: Start InputField #3 -->
<?php $htx_InputField_3_props = ["type"=>"hidden","name"=>"id","value"=>$person->id]; ?><?php
$htx_InputField_3_type = isset($htx_InputField_3_props["type"]) ? $htx_InputField_3_props["type"] : "text";
if ($htx_InputField_3_type == "hidden") { ?>
    <input type="hidden" name="<?= $htx_InputField_3_props["name"] ?>" id="input-<?= $htx_InputField_3_props["name"] ?>" value="<?= $htx_InputField_3_props["value"] ?: "" ?>" />
<?php } else { ?>
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="<?= $htx_InputField_3_props["name"] ?>" id="input-<?= $htx_InputField_3_props["name"] ?>" value="<?= $htx_InputField_3_props["value"] ?: "" ?>" />
        <label for="input-<?= $htx_InputField_3_props["name"] ?>"><?= ucfirst($htx_InputField_3_props["name"]) ?></label>
    </div>
<?php } ?>
<!-- DEBUG: End InputField #3 -->
            <?php } ?>
<!-- DEBUG: Start Button #4 -->
<?php $htx_Button_4_props = ["type"=>"submit","active"=>true]; ?><?php if(isset($htx_Button_4_props["type"])) { ?>
    <button type="<?= $htx_Button_4_props["type"] ?>" class="btn <?= (isset($htx_Button_4_props["active"]) && $htx_Button_4_props["active"] == true) ? "btn-primary" : "btn-secondary" ?>" <?= isset($htx_Button_4_props["onclick"]) ? ("onclick='" . $htx_Button_4_props["onclick"] . "'") : "" ?>>
<!-- DEBUG: Children start Button #4 -->
Save
<!-- DEBUG: Children end Button #4 -->
    </button>
<?php } else { ?>
    <button class="btn <?= (isset($htx_Button_4_props["active"]) && $htx_Button_4_props["active"] == true) ? "btn-primary" : "btn-secondary" ?>" <?= isset($htx_Button_4_props["onclick"]) ? ("onclick='" . $htx_Button_4_props["onclick"] . "'") : "" ?>>
<!-- DEBUG: Children start Button #4 -->
Save
<!-- DEBUG: Children end Button #4 -->
    </button>
<?php } ?>
<!-- DEBUG: End Button #4 -->
<!-- DEBUG: Start Button #5 -->
<?php $htx_Button_5_props = ["onclick"=>("event.preventDefault(); location.href=\"" . base_url('/') . "\";")]; ?><?php if(isset($htx_Button_5_props["type"])) { ?>
    <button type="<?= $htx_Button_5_props["type"] ?>" class="btn <?= (isset($htx_Button_5_props["active"]) && $htx_Button_5_props["active"] == true) ? "btn-primary" : "btn-secondary" ?>" <?= isset($htx_Button_5_props["onclick"]) ? ("onclick='" . $htx_Button_5_props["onclick"] . "'") : "" ?>>
<!-- DEBUG: Children start Button #5 -->
Cancel
<!-- DEBUG: Children end Button #5 -->
    </button>
<?php } else { ?>
    <button class="btn <?= (isset($htx_Button_5_props["active"]) && $htx_Button_5_props["active"] == true) ? "btn-primary" : "btn-secondary" ?>" <?= isset($htx_Button_5_props["onclick"]) ? ("onclick='" . $htx_Button_5_props["onclick"] . "'") : "" ?>>
<!-- DEBUG: Children start Button #5 -->
Cancel
<!-- DEBUG: Children end Button #5 -->
    </button>
<?php } ?>
<!-- DEBUG: End Button #5 -->
        </form>
    </div>
<!-- DEBUG: Children end BasicLayout #6 -->
    </main>
<!-- DEBUG: Start scopes -->
<script>
/* DEBUG: Start scoped js for file: src\pages\edit\edit.js */
let $nameInput = $("#input-name");
let $titleName = $("#person-title");
$nameInput.on('input', () => {
    $titleName.text($nameInput.val());
});
</script>
<!-- DEBUG: End scopes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<!-- DEBUG: End BasicLayout #6 -->
<!-- DEBUG: End edit #0 -->