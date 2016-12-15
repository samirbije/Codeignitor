<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	$post = array();
	$post = $this->input->post();
	if($post['building']=='1')
	{
		$building='お取引のご相談';	
	}
	else if($post['building']=='2')
	{
		$building='リクルートについて';	
	}
	else if($post['building']=='3')
	{
		$building='その他';
	}
?>

<table width="800" border="0"  cellspacing="0" cellpadding="5">
				  <tr>
					<td>この度はお問い合わせいただき誠にありがとうございます。</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>以下の内容にて受け付けました。</td>
					</tr>
					<tr>
					<td>後日、弊社担当者よりご連絡させていただきます。</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>-------------------------------------------------------------------------------</td>
					</tr>
					<tr>
					<td>名     前：　<?php echo $post['name']; ?></td>
					</tr>
					<?php 
					if(isset($post['address']) && $post['address']!=''){
					?>
					<tr>
					<td>住所：　<?php echo $post['address']; ?></td>
					</tr>
					<?php
					}
					?>
					<?php 
					if(isset($post['name_kana']) && $post['name_kana']!=''){
					?>
					<tr>
					<td>担当者名：　<?php echo $post['name_kana']; ?></td>
					</tr>
					<?php
					}
					?>
					<tr>
					<td>電話番号：　<?php echo $post['tel']; ?></td>
					</tr>
					<?php 
					if(isset($post['fax']) && $post['fax']!=''){
					?>
					<tr>
					<td>FAX番号：　<?php echo $post['fax']; ?></td>
					</tr>
					<?php
					}
					?>
					<tr>
					<td>メールアドレス：　<?php echo $post['email']; ?></td>
					</tr>
					<tr>
					<td>お問い合わせ内容：　<?php echo $building; ?></td>
					</tr>
					<tr>
					<td>お問い合わせ詳細：　<?php echo htmlspecialchars($post['message']); ?></td>
					</tr>
					<tr>
					<td>-------------------------------------------------------------------------------</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>本メールの内容についてお心当たりのない場合は、</td>
					</tr>
					<tr>
					<td>大変お手数ですが、下記までご連絡いただきますようお願い申し上げます。</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*</td>
					</tr>
					<tr>
					<td>株式会社ＡＬＬアセットパートナーズ</td>
					</tr>
					<tr>
					<td>〒730-0037</td>
					</tr>
					<tr>
					<td>広島県広島市中区中町7-41</td>
					</tr>
					<tr>
					<td>三栄ビル6階</td>
					</tr>
					<tr>
					<td>ＴＥＬ：082-545-7008　ＦＡＸ：082-545-7009</td>
					</tr>
					<tr>
					<td>https://www.aap-gr.jp</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>太陽光発電所検索サイト「ソライチ」</td>
					</tr>
					<tr>
					<td>https://www.sora-ichi.jp/</td>
					</tr>
					<tr>
					<td>*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*</td>
				  </tr>
				</table>




																							