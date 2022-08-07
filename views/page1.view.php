<h1>Page 1</h1>

<?php foreach($datas as $ligne) : ?>
    <br />
    --------------------------
    <br />
    Information 1 : <?= $ligne["data1"]; ?>
    <br />
    Information 2 :<?= $ligne["data2"]; ?>
    <br />
    --------------------------
    <br />
<?php endforeach; ?>