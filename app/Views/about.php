<!-- DEBUG: Start about #0 -->
<?php $htx_about_0_props = []; ?>
<!-- DEBUG: Start BasicLayout #1 -->
<?php $htx_BasicLayout_1_props = ["title"=>"About"]; ?>
<?php
$htx_BasicLayout_1_pageTitle = $htx_BasicLayout_1_props["title"] ?: "Example";
?>
<!-- DEBUG: Start routes #2 -->
<?php $htx_routes_2_props = []; ?><?php
$route_pages = [
    "Home" => "/",
    "About" => "/about",
    "Contact" => "/contact",
];
?>
<!-- DEBUG: End routes #2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example | <?= $htx_BasicLayout_1_pageTitle ?></title>
<!-- DEBUG: Start scopes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"><style>
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
</head>
<body>
<!-- DEBUG: Start NavBar #3 -->
<?php $htx_NavBar_3_props = ["page"=>$htx_BasicLayout_1_pageTitle]; ?>
<?php
$htx_NavBar_3_currentPage = $htx_NavBar_3_props["page"];
?>
<header class="NavBar-container">
    <nav>
        <?php foreach ($route_pages as $htx_NavBar_3_page => $htx_NavBar_3_url) { ?>
<!-- DEBUG: Start Nav #4 -->
<?php $htx_Nav_4_props = ["to"=>$htx_NavBar_3_url,"name"=>$htx_NavBar_3_page,"active"=>$htx_NavBar_3_currentPage]; ?><a class="Nav-a" href="<?= base_url($htx_Nav_4_props["to"]) ?: "/" ?>">
    <?php if ($htx_Nav_4_props["active"] == $htx_Nav_4_props["name"]) { ?>
        <b><?= $htx_Nav_4_props["name"] ?: "" ?></b>
    <?php } else { ?>
        <?= $htx_Nav_4_props["name"] ?: "" ?>
    <?php } ?>
</a>
<!-- DEBUG: End Nav #4 -->
        <?php } ?>
    </nav>
</header>
<!-- DEBUG: End NavBar #3 -->
    <main>
<!-- DEBUG: Children start BasicLayout #1 -->
    <h1>About page</h1>
<!-- DEBUG: Children end BasicLayout #1 -->
    </main>
<!-- DEBUG: Start scopes -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script><script>
</script>
<!-- DEBUG: End scopes -->
</body>
</html>
<!-- DEBUG: End BasicLayout #1 -->
<!-- DEBUG: End about #0 -->