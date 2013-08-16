<style>
    input[type=text] { width: 200px }

    .completed { text-decoration: line-through }

    #edit {
        font-size: 12px;
        font-weight: normal;
    }
</style>

<h1><?= $project->name ?>: Tasks <a id="edit" href="<?= $project->id ?>/edit">EDIT NAME</a></h1>

<ol>
    <? foreach ($project->tasks() as $t) { ?>
        <li task_id="<?= $t->id ?>" <? if ($t->completed) { ?>class="completed"<? } ?>>
            <input <? if ($t->completed) { ?>checked="checked"<? } ?> task_id="<?= $t->id ?>" type="checkbox" />
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(function() {
        $('[type=checkbox]').change(function() {
            var task_id = $(this).attr('task_id'),
            completed = $(this).is(':checked') ? 1 : 0;

            $.post('/kohana/index.php/projects/update', {
                task_id: task_id,
                completed: completed
            }, function() {
                var li = $('li[task_id=' + task_id + ']');

                if (completed)
                    li.css('text-decoration', 'line-through');
                else
                    li.css('text-decoration', 'none');
            });
        });
    });
</script>
