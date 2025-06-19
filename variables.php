<?php

declare(strict_types = 1);

echo 'Создать переменные для хранения информации о студенте: <br>';
$nameStudent = 'Aleksey <br>';
$ageStudent = 37 . "<br>";
$averageStudent = 4.8 . '<br>';
echo "Имя: $nameStudent"; //Интерполяция " "
echo "Возраст: " . $ageStudent;
echo "Средний балл: " . $averageStudent;
echo '----------------------------------------------------------------------------------- <br>';
echo str_repeat('-', 50) . '<br>';
echo 'Создать переменные для описания автомобиля: <br>';
$carBrand = 'Nissan <br>';
$yearOfRelease = '2023 <br>';
$mileage = '5000 <br>';
echo 'Марка автомобиля: '  . $carBrand;
echo "Год выпуска: " . $yearOfRelease;
echo "Пробег: " . $mileage;
echo '----------------------------------------------------------------------------------- <br>';

echo "Переменные для описания покупки в интернете: <br>";
$productName = "Молоко <br>";
$numberOfPieces = 5 . '<br>';
$pricePerUnit = 87 . '<br>';
echo 'Наименование товара: ' . $productName;
echo "Количество штук: " . $numberOfPieces;
echo "Цена за единицу: " . $pricePerUnit;
echo '----------------------------------------------------------------------------------- <br>';

echo 'Создать переменные для хранения личных данных: <br>';
$nameUser = 'Egor <br>';
$email = 'HogwartsLegend@magic.com <br>';
$dateOfBirth = '12-05-1020 <br>';
echo 'Имя пользователя: ' . $nameUser;
echo "Электронная почта: " . $email;
echo "День рождения: " . $dateOfBirth;
echo '----------------------------------------------------------------------------------- <br>';

echo 'Переменные для описания продукта: <br>';
$nameProduct = "Нимбус-2000 <br>";
$categoryProduct = 'Траспорт' . '<br>';
$manufacturersCountry = 'Россия <br>';
echo 'Название изделия: ' . $nameProduct;
echo "Категория: " . $categoryProduct;
echo "Страна изготовитель: " . $manufacturersCountry;
echo '----------------------------------------------------------------------------------- <br>';