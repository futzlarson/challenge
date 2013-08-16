<style>
    a {
        border: 1px solid #000;
        display: block;
        font-size: 18px;
        margin-bottom: 10px;
        padding: 20px;
    }
</style>

<h1>Projects</h1>

<? foreach ($projects as $p) { ?>
    <a href="projects/<?= $p->id ?>"><?= $p->name ?></a>
<? } ?>
