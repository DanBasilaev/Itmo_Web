<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="киномонстрв - это портал о кино">
    <meta name="keywords" content="фильмы, hd">
    <link rel="stylesheet" href="/css/style2.css">
</head>

<body>
    <div class="main">

        <div class="header">
            <div class="logo">
                <div class="logo_text">
                    <h1><a href="/">Золотое кольцо России</a></h1>
                </div>
            </div>

            <div class="menubar">

                <ul class="menu">
                    <li class="selected"><a href="/">Главная</a> </li>
                    <li><a href="\city\city">Города</a></li>
                    <li><a href="\sights\sights">Достопримечательности</a></li>
                    <li><a href="\experience">Впечатления</a></li>
                </ul>

            </div>

        </div>

<?php $this->load->view('templates/menu', $rating); ?>