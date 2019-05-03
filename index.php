<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Sprava.mobi</title>
    <meta charset="utf-8"/>
    <meta content="Sprava.mobi" name="description"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <!-- build:css css/main.css-->
    <link rel="stylesheet" href="css/main.css"/>
    <!-- endbuild-->
</head>
<body>

<?php
include_once 'Model/DatabaseConnection.php';
include_once 'Model/QueryDB.php';
$db = new QueryDB(DatabaseConnection::connect());
?>

<main class="main-content" id="main-content">

    <section class="section section-step3" id="sign-up">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="section__title">
                        <h2>Регистрация</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <ul class="list-unstyled list-tabs">
                        <li class="active"><a href="#doer-tab">Исполнитель</a></li>
                        <li><a href="#customer-tab">Заказчик</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="doer-tab">
                    <form class="form form-doer" name="form-doer">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="doer-email">Email</label>
                                    <input class="form-control mail" type="email" id="doer-email" name="doer-email" placeholder="Введите email" required>
                                    <div class="form-validator"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="doer-tel">Телефон</label>
                                    <input class="form-control phone" id="doer-tel" name="doer-tel" placeholder="Введите телефон" required>
                                    <div class="form-validator"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="doer-town">Город</label>
                                    <input class="form-control input-city" type="text" id="doer-town" name="doer-town" placeholder="Введите город" list="city-list" required>
                                    <datalist id="city-list" name="city-lis"></datalist>
                                    <div class="form-validator"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="doer-heading">Рубрика</label>
                                        <select class="form-select select2 " id="doer-heading" name="doer-heading" multiple required></select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6">
                                <button class="btn d-block" type="submit">Зарегистрироваться</button>
                            </div>
                        </div>
                    </form>
                    <div class="row info" id="info-doer">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 10000 + $db->selectCount(1,21) ,0, ',', ' ')?></div>
                                <div class="descr">Исполнителей из <span class="country">Беларуси</span></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 12000 + $db->selectCount(1,0) ,0, ',', ' ')?></div>
                                <div class="descr">Исполнителей из <span class="country">России</span></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 5000 + $db->selectCount(1,1) ,0, ',', ' ')?></div>
                                <div class="descr">Исполнителей из <span class="country">Украины</span></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 2000 + $db->selectCount(1,81) ,0, ',', ' ')?></div>
                                <div class="descr">Исполнителей из <span class="country">Казахстана</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="customer-tab">
                    <form class="form form-customer" name="form-customer">
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="customer-email">Email</label>
                                    <input class="form-control mail" type="email" id="customer-email" name="customer-email" placeholder="Введите email" required>
                                    <div class="form-validator"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="customer-tel">Телефон</label>
                                    <input class="form-control phone" type="tel" id="customer-tel" name="customer-tel" placeholder="Введите телефон" required>
                                    <div class="form-validator"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="doer-town">Город</label>
                                    <input class="form-control input-city" type="text" id="customer-town" name="customer-town" placeholder="Введите город" list="city-list" required>
                                    <div class="form-validator"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="customer-heading">Рубрика</label>
                                    <select class="form-select select2" id="customer-heading" name="customer-heading" multiple required></select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6">
                                <button class="btn d-block" type="submit">Зарегистрироваться</button>
                            </div>
                        </div>
                    </form>
                    <div class="row info" id="info-customer">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 10000 + $db->selectCount(2,21) ,0, ',', ' ')?></div>
                                <div class="descr">Заказчиков из <span class="country">Беларуси</span></div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 12000 + $db->selectCount(2,0) ,0, ',', ' ')?></div>
                                <div class="descr">Заказчиков из <span class="country">России</span></div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 5000 + $db->selectCount(2,1) ,0, ',', ' ')?></div>
                                <div class="descr">Заказчиков из <span class="country">Украины</span></div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="country-block">
                                <div class="count"><?= number_format( 2000 + $db->selectCount(2,81) ,0, ',', ' ')?></div>
                                <div class="descr">Заказчиков из <span class="country">Казахстана</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-message" tabindex="-1" role="dialog" aria-label="Сообщение" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Регистрация прошла успешно!</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/core-dist.js"></script>
<script src="js/sign-up-tabs.js"></script>
<script type="text/javascript" src="js/mail-validator.js"></script>
<script type="text/javascript" src="js/phone-validator.js"></script>
<script type="text/javascript" src="js/search-city.js"></script>
<script type="text/javascript" src="js/search-categories.js"></script>
<script type="text/javascript" src="js/submit-form.js"></script>
</body>
</html>