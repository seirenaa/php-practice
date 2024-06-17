<?php
// Q1 変数と文字列
$name = "中山";

echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num=5*4;

echo $num;

echo $num/2;

// Q3 日付操作
echo "現在時刻は、" . date("Y年m月d日 H時i分s秒") . "です。";

// Q4 条件分岐-1 if文
$device ='mac';

if ($device === "windows"|| "mac") {
    echo "使用OSは、".$device."です。";
 }else {
        echo "どちらでもありません";
    }
    
// Q5 条件分岐-2 三項演算子
$age = 20;

echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列
$kanto = array("東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県");


echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_capitals = array(
    "東京都" => "新宿区",
    "神奈川県" => "横浜",
    "栃木県" => "宇都宮",
    "千葉県" => "千葉",
    "埼玉県" => "さいたま",
    "茨城県" => "水戸",
    "群馬県" => "前橋"
);
foreach ($kanto_capitals as $capital) {
    echo $capital."\n";
}


// Q8 連想配列-2

foreach ($kanto_capitals as $key => $capital) {
    if($capital === 'さいたま'){
        break;
    }
    echo $key.'の県庁所在地は、'.$capital.'市です。';
}

// Q9 連想配列-3

$kanto_capitals = array(
    "東京都" => "新宿区",
    "神奈川県" => "横浜",
    "栃木県" => "宇都宮",
    "千葉県" => "千葉",
    "埼玉県" => "さいたま",
    "茨城県" => "水戸",
    "群馬県" => "前橋",
    "愛知県" => "名古屋",
    "北海道" => "札幌"
);


foreach ($kanto_capitals as $key => $capital) {
    if (in_array($key , $Kanto)) {
        echo $key. "の県庁所在地は、" . $capital . "です。\n";
    } else {
        echo $key. "は関東地方ではありません。\n";
    }
}


// Q10 関数-1

function hello($name) {
    return $name . "さん、こんにちは。";
}

$kanaya = hello("金谷");
$andou = hello("安藤");
echo $kanaya;
echo $andou;

// Q11 関数-2
function calcTaxInPrice($price) {
    $tax = 0.10; // 消費税率 10%
    $taxInPrice = $price + ($price * $tax);
    return $taxInPrice;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";


// Q12 関数とif文

function distinguishNum($num){
    if ($num % 2 == 0)
    echo $num . "は偶数です。";
        else {
        echo $num . "は奇数です。";
     }
}

echo distinguishNum(11);
echo distinguishNum(24);


// Q13 関数とswitch文

function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('F');


?>