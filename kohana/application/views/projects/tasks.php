<style>
    input[type=text] { width: 200px }
</style>

<h1><?= $project->name ?>: Tasks</h1>

<ol>
    <? foreach ($project->tasks() as $t) { ?>
        <li>
            <?= $t->name ?>: <?= $t->due() ?>
        </li>
    <? } ?>
</ol>

<h3 style="margin-top: 60px">Create Task</h3>
<form method="post">
    <input name="project_id" type="hidden" value="<?= $project->id ?>" />

    <label>Name</label><br />
    <input name="name" type="text" />

    <br /><br />

    <label>Due date</label><br />
    <input name="due_at" type="text" />

    <br /><br />

    <button>Save</button>
</form>
