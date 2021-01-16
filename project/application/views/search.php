<h2 class="well_h2">Поиск (найдено <?php echo count($search_result_city)?> города и
    <?php echo count($search_result_sight)?> достопримечательности)</h2>

<h3 class="well_h3">Города</h3>
<?php foreach ($search_result_city as $key => $value): ?>
    <div class="well">
        <a href="city/view/<?php echo $value['slug']?>"><?php echo $value['tittle']; ?></a>  <br>
    </div>
<?php endforeach ?>


<h3 class="well_h3">Достопримечательности</h3>
<?php foreach ($search_result_sight as $key => $value): ?>
    <div class="well">
        <a href="sights/view/<?php echo $value['slug']?>"><?php echo $value['tittle']; ?></a>  <br>
    </div>
<?php endforeach ?>
