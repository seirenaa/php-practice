<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0) {
        echo "tic\n";
      }elseif ($i % 5 == 0) {
        echo "tac\n";
      }elseif ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
      }else {
        echo $i ."\n";
    }
  }


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。";


foreach ($personalInfos as $index => $array) {
  // var_dump($array);
  $index++;
  echo "{$index}番目の{$array['name']}のメールアドレスは{$array['mail']}で、電話番号は{$array['tel']}です。\n";
}

$ageList = [25, 30, 18];

foreach ($ageList as $index => $age) {
    // 追加処理
    $personalInfos[$index]['age'] = $age;
}

// Q3 オブジェクト-1

echo '学籍番号'.$Yamada->studentId.'番の生徒は'.$Yamada->studentName.'です。';

// Q4 オブジェクト-2
public function attend()
{
    echo $this->studentName.'はPHPの授業に出席しました。学籍番号：'.$this->studentId;
}
$Yamada = new Student(120,'山田');
$Yamada->attend('PHP');



// Q5 定義済みクラス-1

$Date = new DateTime();

// $Date->modify('-1 month');
// echo $Date->format('Y-m-d');
echo $Date->modify('-1 month')->format('Y-m-d');

// Q5 定義済みクラス-2

$Date = new DateTime('2024-04-20');
$Past = new DateTime('1992-4-25');
// $interval =$Date->diff($Past);
// echo 'あの日から'.$interval->format('%a').'日経過しました。';
echo 'あの日から'. $Date->diff($Past)->format('%a') .'日経過しました。';


?>