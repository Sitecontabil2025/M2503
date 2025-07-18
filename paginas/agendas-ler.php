<?php $pagina_agenda = true; ?>
<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;

$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_agendas&id=$id"));
?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <?php foreach($json as $item): ?>
        <h2><?= $item->titulo; ?></h2>
        <?= html_entity_decode($item->texto) ?>
    <?php endforeach; ?>
    <a class="bt bt-b2" href="agendas.php?cat=<?= $_GET["cat"] ?>">Voltar para as agendas</a>
<?php endif; ?>