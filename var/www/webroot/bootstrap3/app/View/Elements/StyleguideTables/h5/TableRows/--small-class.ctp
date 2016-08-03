<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


smallクラス<br>


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コードHTML(ここから)


<h5>h5要素 <p class="small">p要素にsmallクラス</p></h5>


//---表示サンプルとコピペ用コードHTML(ここまで)
EOT;
?>










<?php
$modifier_desc = str_replace('//---説明文を書くところ(ここから)', '', $modifier_desc);
$modifier_desc = str_replace('//---説明文を書くところ(ここまで)', '', $modifier_desc);
$modifier_desc = trim($modifier_desc);
$display_sample = str_replace('//---表示サンプルとコピペ用コードHTML(ここから)', '', $display_sample);
$display_sample = str_replace('//---表示サンプルとコピペ用コードHTML(ここまで)', '', $display_sample);
$display_sample = trim($display_sample);
$copy_paste_code = $display_sample;
$copy_paste_code = str_replace('//---表示サンプルとコピペ用コードHTML(ここから)', '', $copy_paste_code);
$copy_paste_code = str_replace('//---表示サンプルとコピペ用コードHTML(ここから)', '', $copy_paste_code);
$copy_paste_code = trim($copy_paste_code);
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $copy_paste_code;
echo $this->SgTable0001->endTr();
?>
