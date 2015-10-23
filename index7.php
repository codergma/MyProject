<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'>
	<style type="text/css">
	input:hover{
		cursor: not-allowed;
	}
	div{
		display: inline-block;
	}
	</style>
</head>
<body>
<?php
$str = '[{"id":"138","value":"<div style=\"color: rgb(89, 87, 87);\"><div class=\"requrement_describe_key l\" style=\"line-height: 20px;\"><span class=\"requrement_describe_key_nametitle\">\u3010\u65b0\u529f\u80fd\u6240\u5c5e\u63d2\u4ef6\/\u6a21\u5757\u3011<\/span><\/div><div class=\"requrement_describe_value l\" style=\"color: rgb(136, 136, 137);\">\u6a21\u5757<\/div><div class=\"clear\"><\/div><\/div><div style=\"color: rgb(89, 87, 87);\"><div class=\"requrement_describe_key l\" style=\"line-height: 20px;\"><span class=\"requrement_describe_key_nametitle\">\u3010\u529f\u80fd\u9879\u3011<\/span><\/div><div class=\"requrement_describe_value l\" style=\"color: rgb(136, 136, 137);\">\u529f\u80fd\u9879<\/div><div class=\"clear\"><\/div><\/div><div style=\"color: rgb(89, 87, 87);\"><div class=\"requrement_describe_key l\" style=\"line-height: 20px;\"><span class=\"requrement_describe_key_nametitle\">\u3010\u65b0\u529f\u80fd\u63cf\u8ff0\u3011<\/span><\/div><div class=\"requrement_describe_value l\" style=\"color: rgb(136, 136, 137);\">\u63cf\u8ff0<\/div><div class=\"clear\"><\/div><\/div><div style=\"color: rgb(89, 87, 87);\"><div class=\"requrement_describe_key l\" style=\"line-height: 20px;\"><span class=\"requrement_describe_key_nametitle\">\u3010\u589e\u52a0\u65b0\u529f\u80fd\u539f\u56e0\u3011<\/span><\/div><div class=\"requrement_describe_value l\" style=\"color: rgb(136, 136, 137);\">\u539f\u56e0<\/div><div class=\"clear\"><\/div><\/div><div style=\"color: rgb(89, 87, 87);\"><div class=\"requrement_describe_key l\" style=\"line-height: 20px;\"><span class=\"requrement_describe_key_nametitle\">\u3010\u4e0a\u4f20\u9644\u4ef6\u3011<\/span><\/div><div class=\"requrement_describe_value l\" style=\"color: rgb(136, 136, 137);\"><div class=\"requrement_describe_upload_file\"><div class=\"upload_file_compress_title l\" style=\"display: none;\">\u538b\u7f29\u6587\u4ef6\uff1a<\/div><div class=\"upload_file_compress l\" style=\"display: none;\"><\/div><div class=\"clear\"><\/div><div class=\"upload_file_image_title l\" style=\"display: none;\">\u56fe\u7247\u6587\u4ef6\uff1a<\/div><div class=\"upload_file_image l\" style=\"display: none;\" data-dismiss=\"upload_file_image\"><\/div><div class=\"clear\"><\/div><div class=\"upload_file_doc_title l\" style=\"display: block;\">\u6587\u672c\u6587\u4ef6\uff1a<\/div><div class=\"upload_file_doc l\" style=\"display: block;\"><p class=\"upload_file_msg l\"><a href=\"\/dev\/media\/com_projectfork\/projectfork\/upload_requirement_file\/20151021\/20151021134920_72185.txt\" target=\"_blank\" title=\"test2.txt\" class=\"upload_file_information l\">test2.txt<\/a><\/p><p class=\"upload_file_delete r\"><a href=\"\/dev\/viewer.php?path=\/dev\/media\/com_projectfork\/projectfork\/upload_requirement_file\/20151021\/20151021134920_72185.txt\" target=\"_blank\" class=\"l\" style=\"margin-right: 10px; color: rgb(180, 181, 181);\">[\u5728\u7ebf\u9884\u89c8]<\/a><a href=\"javascript:;\" title=\"\u79fb\u9664\" class=\"remove_file l\"><\/a><\/p><div class=\"clear\"><\/div><p><\/p><div class=\"clear\"><\/div><\/div><div class=\"clear\"><\/div><\/div><\/div><div class=\"clear\"><\/div><\/div>"}]';
$arr = json_decode($str,true)[0]['value'];
file_put_contents('extra_filed', $arr);
print_r($arr);
$key = md5(mt_rand());
$test = setcookie('liubin',$key,time()+1800);
?>
<span>aaaaa</span>
<span>bbbbb</span>
<div>cccc</div>
<div>dddd</div>

</body>
</html>
