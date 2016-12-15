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
<table    border="0"  cellspacing="0" cellpadding="5">
				  <tr>
					<td>Webからお問い合わせがありました。</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>-------------------------------------------------------------------------</td>
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
					<td>-------------------------------------------------------------------------</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
				</table>
			