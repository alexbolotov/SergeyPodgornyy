<?php

$pageTitle = "Personal Media Library";
$pageTitle .= isset($title) ? ' | ' . $title : '';

$section = null;
$action = null;
$page = 'library';

if (!isset($items)) $items = [];

include("inc/header.php");
?>
        <div class="section catalog random">
            <div class="wrapper">
                <h2>May we suggest something?</h2>
                <ul class="catalog">
                    <?php foreach ($items as $item) : ?>
                        <li>
                            <a href='<?= '/' . $item['category'] . '/' . $item['id'] ?>'>
                                <img src="/static/<?= $item['poster'] ?: 'img/300x300.gif' ?>" alt="<?= $item['title'] ?>">
                                <p>View Details</p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

<?php include("inc/footer.php"); ?>
