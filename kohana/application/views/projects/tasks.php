<h1><?= $project->name ?>: Tasks</h1>

<ol>
    <? foreach ($project->tasks() as $t) { ?>
        <li>
            <?= $t->name ?>: <?= $t->due() ?>
        </li>
    <? } ?>
</ol>
