<!--Сделайте тестовый XML файл. Получите его в PHP. Выведите результат получения через var_dump.-->

<?xml version="1.0"?>
// файл test.xml
<root> <test>text</test> </root>


<?php
//файл index.php
    $xml = simplexml_load_file('test.xml');
    var_dump($xml);
?>

<!-- Текст XML тега-->
<!--Дан следующий XML:
<root>
	<user>
		<name>john</name>
		<surn>smit</surn>
	</user>
</root>
Выведите на экран имя и фамилию юзера.-->

// test.xml
<root>
    <user>
        <name>john</name>
        <surn>smit</surn>
    </user>
</root>
<?php
    $xml = simplexml_load_file('test.xml');
    echo $xml->user->name . " " . $xml->user->surn;

?>

<!--Дан следующий XML:
<root> <name>john</name> </root>
Выведите на экран имя юзера -->

// test.xml
<root> <name>john</name> </root>

<?php
// index.php
    $xml = simplexml_load_file('test.xml');
    echo $xml->name;
?>

<!--Тексты группы XML тегов-->
<!--Дан следующий XML:
<root>
    <name>john</name>
    <name>eric</name>
    <name>kyle</name>
</root>
-->
// test.xml

<root>
    <name>john</name>
    <name>eric</name>
    <name>kyle</name>
</root>

<?php
$xml = simplexml_load_file('test.xml');
foreach($xml-> name as $name) {
    echo $name . "\n";
}
?>

<!-- Атрибуты XML тега-->
<!--Дан следующий XML:
<root>
	<user age="23" salary="1000">john</user>
</root>
Выведите на экран имя, возраст и зарплату юзера.-->

// test.xml
<root>
    <user age="23" salary="1000">john</user>
</root>

<?php
//index.php
    $xml = simplexml_load_file('test.xml');
    echo $xml->user . " " . $xml->user['age'] . " " . $xml->user['salary'];
?>

<!--/* Атрибуты группы XMLтега-->
<!--Дан следующий XML:-->
<!--<root>-->
<!--    <product cost="100" amount="3">-->
<!--        prod1-->
<!--    </product>-->
<!--    <product cost="200" amount="4">-->
<!--        prod2-->
<!--    </product>-->
<!--    <product cost="300" amount="5">-->
<!--        prod3-->
<!--    </product>-->
<!--</root>-->
<!--Выведите на экран название, цену и количество каждого продукта.-->
<!--*/-->

// test.xml
<root>
    <product cost="100" amount="3">
        prod1
    </product>
    <product cost="200" amount="4">
        prod2
    </product>
    <product cost="300" amount="5">
        prod3
    </product>
</root>

<?php
    $xml = simplexml_load_file('test.xml');
    foreach($xml->product as $product){
        echo $product . " " . $product['cost'] ." " .$product['amount'];
    }
?>

<!--Вложенный XML-->
<!--Дан следующий XML:
<root>
	<tag1>
		<tag2>
			<tag3>
				text
			</tag3>
		</tag2>
	</tag1>
</root>
Выведите на экран текст самого внутреннего тега.-->

// test.xml
<root>
    <tag1>
        <tag2>
            <tag3>
                text
            </tag3>
        </tag2>
    </tag1>
</root>

<?php
// index.php
    $xml = simplexml_load_file('test.xml');
    echo $xml->tag1->tag2->tag3;
?>

<!--Группа XML тегов с вложенностью-->
<!--Дан следующий XML:
<root>
	<user>
		<name>john</name>
		<surn>smit</surn>
	</user>
	<user>
		<name>eric</name>
		<surn>wils</surn>
	</user>
	<user>
		<name>kyle</name>
		<surn>tayl</surn>
	</user>
</root>
Выведите на экран имя и фамилию каждого юзера.-->

// test.xml
<root>
    <user>
        <name>john</name>
        <surn>smit</surn>
    </user>
    <user>
        <name>eric</name>
        <surn>wils</surn>
    </user>
    <user>
        <name>kyle</name>
        <surn>tayl</surn>
    </user>
</root>

<?php
$xml = simplexml_load_file('test.xml');
    foreach($xml->user as $user){
    echo $user->name . " " . $user-> surn;
}
?>

<!--Дан следующий XML:
    <root>
	<product cost="100" amount="3">
		<name>prod1</name>
		<category>cat1</category>
	</product>
	<product cost="200" amount="4">
		<name>prod2</name>
		<category>cat2</category>
	</product>
	<product cost="300" amount="5">
		<name>prod3</name>
		<category>cat3</category>
	</product>
</roo
Выведите на экран название, категорию, цену и количество каждого продукта.-->

// test.xml
<root>
    <product cost="100" amount="3">
        <name>prod1</name>
        <category>cat1</category>
    </product>
    <product cost="200" amount="4">
        <name>prod2</name>
        <category>cat2</category>
    </product>
    <product cost="300" amount="5">
        <name>prod3</name>
        <category>cat3</category>
    </product>
    </root>

<?php
// index.php
    $xml = simplexml_load_file('test.xml');
    foreach($xml->product as $product) {
    echo $product->name . " - " . $product->category . " - " . $product['cost'] . " - " . $product['amount'] . "\n";
}
?>
<!-- Имена тегов с дефисами-->
<!-- Дан следующий XML:<root> <user-name>john</user-name> <user-surn>smit</user-surn> </root>
Выведите на экран имя и фамилию юзера.-->

// test.xml
<root>
    <user-name>john</user-name>
    <user-surn>smit</user-surn>
</root>


<?php
// index.php
$xml = simplexml_load_file('test.xml');
echo $xml->{'user-name'} . " " . $xml->{'user-surn'};
?>
