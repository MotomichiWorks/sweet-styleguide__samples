<?php
//cssを読み込み
echo $this->Html->css('/assets/css/styleguide');
echo $this->Html->css('/assets/css/bootstrap');
echo $this->Html->css('/assets/css/bootstrap-theme');

//jsを読み込み
echo $this->Html->script('/assets/js/jquery-3.1.0.min');
echo $this->Html->script('/assets/js/styleguide');
echo $this->Html->script('/assets/js/bootstrap');

?>



<?php
// カラーテーブルの設定を書くところ(ここから)
$obj['color_list'] = array(





  array(
    'heading' => '白黒グレーの色変数',
    'color' => array(
      array(
        'var_name' => '$general__white-color',
        'color_code' => '#ffffff',
        'desc' => '白くしたい箇所に使用する変数です。',
      ),

      array(
        'var_name' => '$general__black-color',
        'color_code' => '#000000',
        'desc' => '黒くしたい箇所に使用する変数です。',
      ),

      array(
        'var_name' => '$general__gray-color-0001',
        'color_code' => '#f3f3f3',
        'desc' => 'フォームフレームの背景色などに使用する変数です。',
      ),

      array(
        'var_name' => '$general__gray-color-0002',
        'color_code' => '#e9e9e9',
        'desc' => 'disabledのボタンなどに使用する変数です。',
      ),

      array(
        'var_name' => '$general__gray-color-0003',
        'color_code' => '#c9c9c9',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0004',
        'color_code' => '#bdbdbd',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0005',
        'color_code' => '#aaaaaa',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0006',
        'color_code' => '#999999',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0007',
        'color_code' => '#777777',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0008',
        'color_code' => '#666666',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0009',
        'color_code' => '#444444',
        'desc' => '',
      ),

      array(
        'var_name' => '$general__gray-color-0010',
        'color_code' => '#333333',
        'desc' => '一番濃いグレーの変数です。',
      ),
    )
  ),
  array(
    'heading' => 'それぞれ特定の意味を持った色変数',
    'color' => array(
      array(
        'var_name' => '$general__body-bg-color',
        'color_code' => '#ffffff',
        'desc' => 'モジュールの背景色をbodyに合わせたいときに使用する変数です。',
      ),

      array(
        'var_name' => '$general__body-text-color',
        'color_code' => '#333333',
        'desc' => 'モジュールの文字色をbodyに合わせたいときに使用する変数です。',
      ),

      array(
        'var_name' => '$general__key-color-0001',
        'color_code' => '#196ad8',
        'desc' => 'キーカラー1の変数です。',
      ),

      array(
        'var_name' => '$general__key-color-0002',
        'color_code' => '#db8915',
        'desc' => 'キーカラー2の変数です。',
      ),

      array(
        'var_name' => '$general__link-text-color-0001',
        'color_code' => '#196ad8',
        'desc' => '薄い背景色に置くリンクテキストの変数です。',
      ),

      array(
        'var_name' => 'general__link-text-color-0002',
        'color_code' => '#8ab4ec',
        'desc' => '黒などの濃い背景色に置くリンクテキストの変数です。',
      ),

      array(
        'var_name' => '$general__emphasis-color-0001',
        'color_code' => '#158000',
        'desc' => '強調させたい箇所に使う色です。テキストやボーダー、ボタンにも使用される変数です。',
      ),

      array(
        'var_name' => '$general__warning-color-0001',
        'color_code' => '#ff3333',
        'desc' => 'エラーメッセージや必須項目などに使用される変数です。',
      ),

      array(
        'var_name' => '$general__safety-color-0001',
        'color_code' => '#158000',
        'desc' => '成功時のメッセージなど、安全な通知を目立たせたいときに使用される変数です。',
      ),

      array(
        'var_name' => 'general__price-color-0001',
        'color_code' => '#ff3333',
        'desc' => 'ECサイトの価格表示に使用される変数です。',
      ),

      array(
        'var_name' => '$general__extra-color-0001',
        'color_code' => '#000000',
        'desc' => 'まだ用途は決まっていませんが、CSS設計上、変数だけ用意しています。色も後で再考予定です。',
      ),

      array(
        'var_name' => '$general__extra-color-0001',
        'color_code' => '#000000',
        'desc' => 'まだ用途は決まっていませんが、CSS設計上、変数だけ用意しています。色も後で再考予定です。',
      ),
    )
  ),
  array(
    'heading' => 'カテゴリタグ、通知バッヂなどの色変数',
    'color' => array(
      array(
        'var_name' => '$badge__color-0001',
        'color_code' => '#e04646',
        'desc' => 'カテゴリタグ、通知バッヂなどに使用する想定の変数です。色相を30度ずつずらしています。',
      ),

      array(
        'var_name' => '$badge__color-0002',
        'color_code' => '#e09346',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0003',
        'color_code' => '#e0e046',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0004',
        'color_code' => '#93e046',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0005',
        'color_code' => '#46e046',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0006',
        'color_code' => '#46e093',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0007',
        'color_code' => '#46e0e0',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0008',
        'color_code' => '#4693e0',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0009',
        'color_code' => '#4646e0',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0010',
        'color_code' => '#9346e0',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0011',
        'color_code' => '#e046e0',
        'desc' => '同上',
      ),

      array(
        'var_name' => '$badge__color-0012',
        'color_code' => '#e04693',
        'desc' => '同上',
      ),
    )
  ),



);
// カラーテーブルの設定を書くところ(ここまで)
?>




















<header class="sg-header-0001">
  <div class="sg-header-0001__first-wrap">
    <h1 class="sg-header-0001__heading">
      スタイルガイド
    </h1>
    <ul class="sg-header-0001__view-area-width-changer-ul">
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">320</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">768</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">984</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">1320</li>
    </ul>
    <div class="sg-header-0001__index-wrap js-sg-header-0001__index-wrap">
      <span class="sg-header-0001__index-heading">index</span>
      <ul class="sg-header-0001__index-ul sg-header-0001__index-ul--is-visible">
<?php
foreach ($obj['color_list'] as $value) {
?>
        <li class="sg-header-0001__index-li">
          <a class="sg-header-0001__index-anc" href="#<?php echo $value['heading'] ?>">
            <?php echo $value['heading'] ?>
          </a>
        </li>
<?php
}
?>

<?php
foreach ($obj['dir_list'] as $key => $dir_name) {
?>
  <?php
  // ディレクトリだけ存在して、中にtable.ctpが存在しない場合はページ内リンクは不要なのでcontinue
  if ($obj['exist_table_ctp'][$dir_name] === FALSE) {
    continue;
  }
  ?>
        <li class="sg-header-0001__index-li">
          <a class="sg-header-0001__index-anc" href="#<?php echo $dir_name; ?>">
            <?php echo $dir_name; ?>
          </a>
        </li>
<?php
}
?>
      </ul>
    </div>
  </div>
</header>



<?php foreach ($obj['color_list'] as $value) { ?>
<div class="sg-color-table" id="<?php echo $value['heading'] ?>">
  <div class="sg-color-table__first-wrap">
    <span class="sg-color-table__table-heading-wrap">
      <div class="sg-heading-0001">
        <h2 class="sg-heading-0001__h-elm">
          <?php echo $value['heading'] ?>
        </h2>
      </div>
    </span>
    <ul class="sg-color-table__table">
      <li class="sg-color-table__tr">
        <div class="sg-color-table__display-th">
          &nbsp;
        </div>
        <div class="sg-color-table__variable-name-th">
          変数名
        </div>
        <div class="sg-color-table__color-code-th">
          色コード
        </div>
        <div class="sg-color-table__desc-th">
          説明
        </div>
      </li>
  <?php foreach ($value['color'] as $row) { ?>
      <li class="sg-color-table__tr">
        <div class="sg-color-table__display-td" style="background-color:<?php echo $row['color_code']; ?>;">
          &nbsp;
        </div>
        <div class="sg-color-table__variable-name-td">
          <?php echo $row['var_name']; ?>
        </div>
        <div class="sg-color-table__color-code-td">
          <?php echo $row['color_code']; ?>
        </div>
        <div class="sg-color-table__desc-td">
          <?php echo $row['desc']; ?>
        </div>
      </li>
  <?php } ?>
    </ul>
  </div>
</div>
<?php } ?>



<?php
// テーブルを描画
foreach ($obj['dir_list'] as $key => $dir_name) {
  // ディレクトリだけ存在して、中にtable.ctpが存在しない場合はエラー回避のためにcontinue
  if ($obj['exist_table_ctp'][$dir_name] === FALSE) {
    continue;
  }
  // table.ctpを読み込み
  echo $this->element('StyleguideTables/' . $dir_name . '/table',
    array(
      'obj' => $obj,
      'dir_name' => $dir_name
    )
  );
}
?>
