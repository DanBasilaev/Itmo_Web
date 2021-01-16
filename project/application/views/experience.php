<?php
    $this->load->database();
    if(isset($_POST['name']) AND isset($_POST['text']) AND !empty($_POST['name'] AND !empty($_POST['text']))){
        $name = $_POST['name'];
        $text = $_POST['text'];
        $query ="INSERT INTO comments VALUES(null, '$name', '$text')";
        $this->db->query($query);
        echo "<meta http-equiv='refresh' content='0'>";
    }




?>
<div class="content">
    <h1>Здесь вы можете поделиться своими впечатлениями</h1>
    <div class="exp">
        <p>Отправте ваш отзыв, чтобы помочь другим людям</p>
    </div>
    <div class="send">
        <form method="post" action="\experience" id="contact">
            <input type="text" name="name" placeholder="ваше имя">
            <textarea name="text"></textarea>
            <input type="submit" value="отправить">
        </form>
    </div>

    <?php foreach ($comments as $key => $value): ?>
        <div class="reviews">
            <div class="reviews_name">
                <?php echo $value['name']?>
            </div>
            <div class="reviews_text">
                <?php echo $value['text']?>
            </div>
        </div>
    <?php endforeach ?>


</div>