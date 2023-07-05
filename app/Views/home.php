<!-- DEBUG: Start home #0 -->
<?php $htx_home_0_props = []; ?>
<!-- DEBUG: Start BasicLayout #4 -->
<?php $htx_BasicLayout_4_props = ["title"=>"Home"]; ?>
<?php
$htx_BasicLayout_4_pageTitle = $htx_BasicLayout_4_props["title"] ?: "Example";
?>
<!-- DEBUG: Start routes #5 -->
<?php $htx_routes_5_props = []; ?><?php
$route_pages = [
    "Home" => "/",
    "About" => "/about",
    "Contact" => "/contact",
];
?>
<!-- DEBUG: End routes #5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example | <?= $htx_BasicLayout_4_pageTitle ?></title>
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
<!-- DEBUG: Start NavBar #6 -->
<?php $htx_NavBar_6_props = ["page"=>$htx_BasicLayout_4_pageTitle]; ?>
<?php
$htx_NavBar_6_currentPage = $htx_NavBar_6_props["page"];
?>
<header class="NavBar-container">
    <nav>
        <?php foreach ($route_pages as $htx_NavBar_6_page => $htx_NavBar_6_url) { ?>
<!-- DEBUG: Start Nav #7 -->
<?php $htx_Nav_7_props = ["to"=>$htx_NavBar_6_url,"name"=>$htx_NavBar_6_page,"active"=>$htx_NavBar_6_currentPage]; ?><a class="Nav-a" href="<?= base_url($htx_Nav_7_props["to"]) ?: "/" ?>">
    <?php if ($htx_Nav_7_props["active"] == $htx_Nav_7_props["name"]) { ?>
        <b><?= $htx_Nav_7_props["name"] ?: "" ?></b>
    <?php } else { ?>
        <?= $htx_Nav_7_props["name"] ?: "" ?>
    <?php } ?>
</a>
<!-- DEBUG: End Nav #7 -->
        <?php } ?>
    </nav>
</header>
<!-- DEBUG: End NavBar #6 -->
    <main>
<!-- DEBUG: Children start BasicLayout #4 -->
    <div style="width: 100%; text-align: center; padding-top: 10px;">
        <h1>Hello</h1>
        <div style="width: 90%; margin: auto;">
<!-- DEBUG: Start UsersCrudList #1 -->
<?php $htx_UsersCrudList_1_props = ["users"=>$users]; ?>
<?php
$htx_UsersCrudList_1_usersData = array_map(function ($htx_UsersCrudList_1_userData) {
    return implode(", ", [
        $htx_UsersCrudList_1_userData->name,
        $htx_UsersCrudList_1_userData->email,
        "<a href='" . base_url("/edit/" . $htx_UsersCrudList_1_userData->id) . "'>Edit</a> <a href='" . base_url("/api/delete/" . $htx_UsersCrudList_1_userData->id) . "'>Delete</a>"
    ]);
}, $htx_UsersCrudList_1_props["users"])
?>
<!-- DEBUG: Start Table #3 -->
<?php $htx_Table_3_props = ["titles"=>"name, email, modify"]; ?><?php
$htx_Table_3_titles = explode(", ", ($htx_Table_3_props["titles"] ?: ""));
?>
<table class="table table-striped">
    <thead>
        <tr>
            <?php foreach ($htx_Table_3_titles as $htx_Table_3_title) { ?>
                <th class="col"><?= $htx_Table_3_title ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
<!-- DEBUG: Children start Table #3 -->
    <?php foreach($htx_UsersCrudList_1_usersData as $htx_UsersCrudList_1_userData) { ?>
<!-- DEBUG: Start Row #2 -->
<?php $htx_Row_2_props = ["data"=>$htx_UsersCrudList_1_userData]; ?><?php
$htx_Row_2_data = explode(", ", ($htx_Row_2_props["data"] ?: ""));
?>
<tr>
    <?php foreach ($htx_Row_2_data as $htx_Row_2_id => $htx_Row_2_dataItem) { ?>
        <td><?= $htx_Row_2_dataItem ?></td>
    <?php } ?>
</tr>
<!-- DEBUG: End Row #2 -->
    <?php } ?>
<!-- DEBUG: Children end Table #3 -->
    </tbody>
</table>
<!-- DEBUG: End Table #3 -->
<!-- DEBUG: End UsersCrudList #1 -->
        </div>
        <a href="<?= base_url("/new") ?>"><button class="btn btn-primary">New</button></a>
    </div>
<!-- DEBUG: Children end BasicLayout #4 -->
    </main>
<!-- DEBUG: Start scopes -->
<script>
</script>
<!-- DEBUG: End scopes -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
<!-- DEBUG: End BasicLayout #4 -->
<!-- DEBUG: End home #0 -->