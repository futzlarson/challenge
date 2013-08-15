<style>
    div {
        border: 1px solid #000;
        font-size: 18px;
        margin-bottom: 10px;
        padding: 20px;
    }
</style>

<? foreach ($projects as $p) { ?>
    <div><?= $p->name ?></div>
<? } ?>
