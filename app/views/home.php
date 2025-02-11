<?php
    $this->layout(
        'master',
        [
            'title' => "$title"
        ]
    );
?>

<?= $this->start('homeCss')?>
    <link rel="stylesheet" href="assets/css/home.css">
<?= $this->stop()?>

<main class="content">
    <br>
    <br>
    <div class="container">
        <br>
        <div>
            <?php if(isset($_SESSION['user'])) { ?>
                <p class="bem_vindo">Olá, <?= $_SESSION['user']['nome'] ?></p>
            <?php } ?>
            <p class="bem_vindo">Clique na data para realizar sua reserva<p/>
        </div>
        <br>
        <br>
        <div id="calendar"></div>
        <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['user']['id_morador']?>">
        <input type="hidden" name="user_apartamento" id="user_apartamento" value="<?=$_SESSION['user']['id_apartamento']?>">
    </div>
</main>
