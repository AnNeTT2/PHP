<!--Вставка переменных в строки -->
<!--Упростите следующий код: $name = 'user';
	echo 'hello, ' . $name . '!'; -->

<?php
$name = 'user';
echo "hello,  $name !";
?>

<!--Вставка элементов массива -->
<!--Упростите следующий код: $arr = ['1', '2', '3'];
	echo 'aaa ' . $arr[0] . ' bbb ' . $arr[1]; -->

<?php
$arr = ['1', '2', '3'];
echo "aaa  $arr[0]  bbb  $arr[1]";
?>

<!--Вставка элементов ассоциативных массивов  -->
<!--Упростите следующий код: $arr = ['a' => 1, 'b' => 2, 'c' => 3];
	echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text'; -->

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$elem1 = $arr['a'];
$elem2 = $arr['b'];
echo "text  $elem1  text  $elem2  text";
?>

<!--Цикл и вставка переменных -->
<!--Упростите следующий код:for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= 10; $j++) {
			echo 'nums: ' . $i . ' ' . $j . '<br>';
		}
	}-->

<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "nums:  $i  $j  <br>";
    }
}
?>

<!--Вставка элементов массивов в цикле -->
<!--Упростите следующий код:$arr = ['a' => 1, 'b' => 2, 'c' => 3];

	foreach ($arr as $key => $elem) {
		echo 'pair: ' . $elem . ' ' . $key . '<br>';
	} -->

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($arr as $key => $elem) {
    echo "pair:  $elem  $key <br>";
}
?>

<!--Вставка элементов многомерных массивов в цикле -->
<!--Дан следующий массив:$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	]; Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате -->

<?php
$products = [
    [
        'name' => 'product1',
        'price' => 100,
        'amount' => 5,
    ],
    [
        'name' => 'product2',
        'price' => 200,
        'amount' => 6,
    ],
    [
        'name' => 'product3',
        'price' => 300,
        'amount' => 7,
    ],
];
foreach ($products as $product)
    echo "$product[name]: $product[price]: $product[amount]<br>";
?>

<!--Генерация тегов -->
<!--Даны три переменные:$text1 = 'aaa';
	$text2 = 'bbb';
	$text3 = 'ccc';Выведите каждую из этих переменных в отдельном абзаце. -->

<?php
$text1 = 'aaa';
$text2 = 'bbb';
$text3 = 'ccc';
echo "<p>$text1</p><br> <p>$text2</p><br> <p>$text3</p><br>";
?>

<!-- Генерация тегов с атрибутами-->
<!--Даны три переменные: $src1 = '1.png';
	$src2 = '2.png';
	$src3 = '3.png';Сформируйте с помощью этих переменных три тега img. -->

<?php
$src1 = '1.png';
$src2 = '2.png';
$src3 = '3.png';
echo "<img src=\"$src1\"<br>";
echo "<img src=\"$src2\"<br>";
echo "<img src=\"$src3\"<br>";
?>

<!-- Цикл и генерация тегов-->
<!--С помощью цикла сформируйте следующий HTML код:
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul> -->

<?php
echo '<ul>';
for ($i = 1; $i < 5; $i++) {
    echo "<li>$i</li><br>";
}
echo '</ul>';
?>

<!--Цикл и генерация тегов из массивов  -->
<!--Дан массив:
$arr = ['text1', 'text2', 'text3'];Сформируйте с его помощью следующий HTML код:
<select>
    <option>text1</option>
    <option>text2</option>
    <option>text3</option>
</select>-->

<?php
$arr = ['text1', 'text2', 'text3'];
echo '<select>';
foreach ($arr as $elem) {
    echo "<option>$elem</option><br>";
}
echo '</select>';
?>

<!--Цикл и генерация тегов и атрибутов -->
<!--Дан следующий массив:
$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];Сформируйте с его помощью следующий HTML код:<ul>
	<li><a href="page1.html">text1</a></li>
	<li><a href="page2.html">text2</a></li>
	<li><a href="page3.html">text3</a></li>
</ul> -->

<?php
$arr = [
    ['href' => 'page1.html', 'text' => 'text1'],
    ['href' => 'page2.html', 'text' => 'text2'],
    ['href' => 'page3.html', 'text' => 'text3'],
];
foreach ($arr as $elem) {
    echo "<ul><li><a href=\"{$elem['href']}\">{$elem['text']}</a></li></ul>";
}
?>

<!--Дан следующий массив:
$arr = [
		['value' => '1', 'text' => 'text1'],
		['value' => '2', 'text' => 'text2'],
		['value' => '3', 'text' => 'text3'],
	];Сформируйте с его помощью следующий HTML код:<select>
	<option value="1">text1</option>
	<option value="2">text2</option>
	<option value="3">text3</option>
</select> -->

<?php
$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];
echo '<select>';
foreach ($arr as $elem) {
    echo "<option value=\"{$elem['value']}\">{$elem['text']}</option>";
}
echo '</select>';
?>

<!--Цикл и генерация HTML таблиц -->
<!--Генерация HTML таблицы с помощью одного цикла -->
<!--дан следующий массив:
$arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500],
		['name' => 'user2', 'age' => 31, 'salary' => 600],
		['name' => 'user3', 'age' => 32, 'salary' => 700],
	];Сформируйте таблицу с помощью одного цикла : <table>
	<tr>
		<tr>
			<td>user1</td>
			<td>30</td>
			<td>500</td>
		</tr>
		<tr>
			<td>user2</td>
			<td>31</td>
			<td>600</td>
		</tr>
		<tr>
			<td>user3</td>
			<td>32</td>
			<td>700</td>
		</tr>
	</tr>
</table>-->

<?php
$arr = [
    ['name' => 'user1', 'age' => 30, 'salary' => 500],
    ['name' => 'user2', 'age' => 31, 'salary' => 600],
    ['name' => 'user3', 'age' => 32, 'salary' => 700],
];
echo '<table>';
foreach ($arr as $user) {
    echo '<tr>';

    echo "<td>{$user['name']}</td>";
    echo "<td>{$user['age']}</td>";
    echo "<td>{$user['salary']}</td>";

    echo '</tr>';
}
echo '</table>';
?>

<!--Генерация HTML таблицы с помощью двух вложенных циклов -->
<!--Дан следующий массив:
$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];Сформируйте с его помощью HTML таблицу. -->

<?php
$products = [
    [
        'name' => 'product1',
        'price' => 100,
        'amount' => 5,
    ],
    [
        'name' => 'product2',
        'price' => 200,
        'amount' => 6,
    ],
    [
        'name' => 'product3',
        'price' => 300,
        'amount' => 7,
    ],
];
echo '<table>';
foreach ($products as $row) {
    echo '<tr>';
    foreach ($row as $key => $cell) {
        if ($key === 'amount') {
            $cell .= 'amount';
        }
        echo "<td> </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<!--Вставка PHP кода в HTML -->
<!--Дан абзац:<p></p>Выведите в него текущую дату в формате год-месяц-день -->

<p><?php echo date('Y-m-d') ?></p>

<!--Короткая команда echo -->
<!--Упростите следующий код:<p><?php echo date('w'); ?></p> -->

<p><?= date('w'); ?></p>

<!-- Вставка PHP переменной в HTML код-->
<!--Даны три переменные:
    $str1 = 'text1';
	$str2 = 'text2';
	$str3 = 'text3';
	Также даны три абзаца:
<p></p>
<p></p>
<p></p>
Выполните вставку текста переменных в соответствующие абзацы. -->

<?php
$str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
?>
<p><?= $str1 ?></p>
<p><?= $str2 ?></p>
<p><?= $str3 ?></p>
<!--Вставка элементов массива в HTML код -->
<!--Дан массив:$arr = ['a' => 1, 'b' => 2, 'c' => 3];Также даны три абзаца:<p></p>
<p></p>
<p></p>
Выполните вставку элементов массива в соответствующие абзацы. -->

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
<?php foreach ($arr as $key => $value): ?>
    <p><?= $value; ?></p>
<?php endforeach; ?>

<!--Условия и разрыв PHP кода -->
<!--Дана переменная:$show = true; Дан код:

<div>
	<p>text1</p>
	<p>text2</p>
	<p>text3</p>
</div>
Выведите приведенный HTML код, если переменная show равна true. -->

<?php
$show = true;
?>
<?php if ($show): ?>
    <div>
        <p>text1</p>
        <p>text2</p>
        <p>text3</p>
    </div>
<?php endif; ?>

<!--Блок else в условиях для разрыва PHP кода -->
<!--Дана переменная:$show = true;Дан код:

<div>
	<p>text+</p>
	<p>text+</p>
	<p>text+</p>
</div>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
Выведите первый див, если переменная show равна true, и второй див, если переменная равна false. -->

<?php
$show = true;
?>
<?php if ($show): ?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php else: ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif; ?>

<!--Блок elseif в условиях для разрыва PHP кода -->
<!--Даны дивы:

<div>
	<p>text1</p>
	<p>text1</p>
	<p>text1</p>
</div>
<div>
	<p>text2</p>
	<p>text2</p>
	<p>text2</p>
</div>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
Сделайте условие, которое будет показывать один из дивов. -->

<?php
$test = 1;
?>
<?php if ($test === 1): ?>
    <div>
        <p>text1</p>
        <p>text1</p>
        <p>text1</p>
    </div>
<?php elseif ($test === 2): ?>
    <div>
        <p>text2</p>
        <p>text2</p>
        <p>text2</p>
    </div>
<?php else: ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif; ?>

<!-- Циклы и разрыв PHP кода-->
<!--Сформируйте с помощью цикла следующий HTML код:

<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul> -->

<?php echo '<ul>'; ?>
<?php for ($i = 1; $i <= 5; $i++): ?>
    <li><?= $i ?></li>
<?php endfor; ?>
<?php echo '</ul>'; ?>

<!--Циклы и вставка элементов массива в разрыв PHP кода -->
<!--Дан массив:$arr = ['user1', 'user2', 'user3'];С помощью этого массива и цикла сформируйте следующий HTML код:

<div>
	<h2>user1</h2>
	<p>text</p>
</div>
<div>
	<h2>user2</h2>
	<p>text</p>
</div>
<div>
	<h2>user3</h2>
	<p>text</p>
</div> -->

<?php
$arr = ['user1', 'user2', 'user3'];
?>

<?php foreach ($arr as $user): ?>
    <div>
        <h2><?php echo $user; ?></h2>
        <p>Текст</p>
    </div>
<?php endforeach; ?>

<!--Дан массив: $arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];С помощью этого массива и цикла сформируйте следующий HTML код:

<div>
	<p>name: user1</p>
	<p>age: 30</p>
</div>
<div>
	<p>name: user2</p>
	<p>age: 31</p>
</div>
<div>
	<p>name: user3</p>
	<p>age: 32</p>
</div> -->

<?php
$arr = [
    [
        'name' => 'user1',
        'age' => 30,
    ],
    [
        'name' => 'user2',
        'age' => 31,
    ],
    [
        'name' => 'user3',
        'age' => 32,
    ],
];
?>

<?php foreach ($arr as $item): ?>
    <div>
        <p>name: <?php echo $item['name']; ?></p>
        <p>age: <?php echo $item['age']; ?></p>
    </div>
<?php endforeach; ?>
