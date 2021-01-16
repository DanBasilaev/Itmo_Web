<?php foreach ($city_data as $key => $value): ?>
    <div class="content">
        <div class="info_city">
            <img src="<?php echo $value['poster']?>" alt="Картинки не будет, интернет принял ислам">
            <?php echo $value['tittle']?>
            <div class="button"><a href="/city/view/<?php echo $value['slug'] ?>">Смотреть</a></div>
        </div>
    </div>
<?php endforeach ?>