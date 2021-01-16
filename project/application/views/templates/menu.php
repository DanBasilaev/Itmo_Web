<div class="site_content">
    <div class="sidebar_container">
        <div class="sidebar">

            <h2>Поиск</h2>
            <form method="get" action="/search" id="search_form">
                <input type="search" name="search_field" placeholder="ваш запрос">
                <input type="submit" class="btn" value="найти">
            </form>

        </div>

        <!--<div class="sidebar">
            <h2>Новости</h2>
            <span>22.12.2012</span>
            <p>Мы живы. Почему майя ошиблись и каких премьер ждать в новом году...</p>
            <a href="#">читать</a>

            </form>
        </div>-->

        <div class="sidebar">
            <h2>Toп-3 достопримечательности</h2>
            <ul>
                <?php foreach ($rating as $key => $value): ?>

                <table>
                    <tr>
                        <td class="first">
                            <?php echo $value['id'] ?>
                        </td>
                        <td><a href="/sights/view/<?php echo $value['slug']?>">  <?php echo $value['tittle']?></a></td>
                    </tr>
                </table>
                <?php endforeach ?>

            </ul>
        </div>
    </div>


