<?php foreach ($sights_data as $key => $value): ?>
    <div class="content">
        <div class="info_sights">
            <img src="<?php echo $value['poster']?>" alt="Картинки не будет, интернет принял ислам">
            <?php echo $value['tittle']?>
            <div class="button"><a href="/sights/view/<?php echo $value['slug'] ?>">Смотреть</a></div>
        </div>
    </div>
<?php endforeach ?>
