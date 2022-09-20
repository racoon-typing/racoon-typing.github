<?php

<footer class="main-footer">
<div class="main-footer__wrapper">
    <h2 class="title main-footer__title">
        Оставить отзыв
    </h2>

    <!-- Форма  -->
    <div class="order-form">
        <!-- Отсюда код будет удален и заменен на код вставки плагина -->
        <div class="wpcf7"> <!-- обертка с классом, которую создаcт плагин -->
            <form class="wpcf7-form"> <!-- тег формы с классом, которую создаcт плагин -->
                <p>
                    <span class="wpcf7-form-control-wrap">
                        <textarea class="wpcf7-textarea" cols="40" rows="10"
                            placeholder="Расскажите, что вы думаете о проекте"></textarea>
                    </span>
                </p>

                <p>
                    <span class="wpcf7-form-control-wrap">
                        <input type="text" size="40" class="wpcf7-text" placeholder="Ваше имя">
                    </span>
                </p>

                <div class="order-submit-area"> <!-- обертка для создания колонок -->
                    <p>
                        <input type="submit" value="Отправить" class="wpcf7-submit">
                        <span class="ajax-loader"></span>
                    </p>
                    <div class="order-text"> <!-- div лучше параграфа или span, так как к div CF7 не добавляет оберток -->
                        Отзыв будет добавлен после проверки модератором
                    </div>
                </div>
                <!-- Досюда код будет удален и заменен на код вставки плагина -->               
            </form>
        </div>
    </div>

    <div class="main-footer__comment-wrapper">
        <ul class="main-footer__comment-list">
            <li class="main-footer__comment-item">
                <img src="./img/comment-1.jpg" alt="Аватарка-1" class="main-footer__comment-avatar">
                <div class="main-footer__comment-item-wrapper-text">
                    <p class="main-footer__comment-item-surname">Иван Грачев</p>
                    <p class="main-footer__comment-item-text">Очень самобытный и необычный проект.</p>
                </div>
            </li>

            <li class="main-footer__comment-item">
                <img src="./img/comment-2.jpg" alt="Аватарка-1" class="main-footer__comment-avatar">
                <div class="main-footer__comment-item-wrapper-text">
                    <p class="main-footer__comment-item-surname">Мария Рачинская</p>
                    <p class="main-footer__comment-item-text">Мне особенно понравилось решение лестничных
                        клеток.
                        Кружки вообще очень стильные!
                    </p>
                </div>
            </li>

            <li class="main-footer__comment-item">
                <img src="./img/comment-3.jpg" alt="Аватарка-1" class="main-footer__comment-avatar">
                <div class="main-footer__comment-item-wrapper-text">
                    <p class="main-footer__comment-item-surname">Светлана</p>
                    <p class="main-footer__comment-item-text">Очень нравится, что в городе развиваются такие
                        проекты. Надеюсь, такие проекты скоро будут не только в частных домах, но и в кафе,
                        музеях, театрах.
                        Я бы сходила!
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
</footer>

</body>

</html>

?>