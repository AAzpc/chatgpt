<?php
/*
 
*/

if($_POST['context'])goto S2weWjgx2;goto S2wldMhx2;S2weWjgx2:$S2wvP8E=$_POST['context'];goto S2wx1;S2wldMhx2:$S2wvP8E="[]";S2wx1:$S2wzA8F=array();$S2wzA8F[]=&$S2wvP8E;$S2weF8E=call_user_func_array("json_decode",$S2wzA8F);unset($S2wzA8F);if($S2weF8E)goto S2weWjgx4;goto S2wldMhx4;S2weWjgx4:$S2w8F=$S2weF8E;goto S2wx3;S2wldMhx4:$S2wzA8G=array();$S2w8F=$S2wzA8G;S2wx3:unset($S2wtI8G);$S2wtI8G=$S2w8F;$context=$S2wtI8G;$S2wzAvP8E=array();$S2wzA8F=array();$S2wzA8F["model"]="gpt-3.5-turbo";$S2wzA8F["temperature"]=0;$S2wzA8F["stream"]=true;$S2wzA8F["messages"]=$S2wzAvP8E;unset($S2wtI8E);$S2wtI8E=$S2wzA8F;$postData=$S2wtI8E;$S2w8E=!empty($context);if($S2w8E)goto S2weWjgx6;goto S2wldMhx6;S2weWjgx6:$S2wzA8F=array();$S2wzA8F[]=&$context;$S2wzA8F[]=-5;$S2weF8E=call_user_func_array("array_slice",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$context=$S2wtI8E;foreach($context as $message){$S2wzA8I=array();$S2wzA8I[]=$message;$S2weF8H=call_user_func_array("is_array",$S2wzA8I);unset($S2wzA8I);if($S2weF8H)goto S2weWjgx8;goto S2wldMhx8;S2weWjgx8:$S2wcVvP8F=&$message[0];goto S2wx7;S2wldMhx8:$S2wcVvP8F=$message[0];S2wx7:$S2wzA8G=array();$S2wzA8G[]="
";$S2wzA8G[]="\\n";$S2wzA8G[]=&$S2wcVvP8F;$S2weFvP8E=call_user_func_array("str_replace",$S2wzA8G);unset($S2wzA8G);unset($S2wcVvP8F);$S2wzA8J=array();$S2wzA8J['role']='user';$S2wzA8J['content']=$S2weFvP8E;unset($S2wtI8E);$S2wtI8E=$S2wzA8J;$postData['messages'][]=$S2wtI8E;$S2wzA8I=array();$S2wzA8I[]=$message;$S2weF8H=call_user_func_array("is_array",$S2wzA8I);unset($S2wzA8I);if($S2weF8H)goto S2weWjgxa;goto S2wldMhxa;S2weWjgxa:$S2wcVvP8F=&$message[1];goto S2wx9;S2wldMhxa:$S2wcVvP8F=$message[1];S2wx9:$S2wzA8G=array();$S2wzA8G[]="
";$S2wzA8G[]="\\n";$S2wzA8G[]=&$S2wcVvP8F;$S2weFvP8E=call_user_func_array("str_replace",$S2wzA8G);unset($S2wzA8G);unset($S2wcVvP8F);$S2wzA8J=array();$S2wzA8J['role']='assistant';$S2wzA8J['content']=$S2weFvP8E;unset($S2wtI8E);$S2wtI8E=$S2wzA8J;$postData['messages'][]=$S2wtI8E;}goto S2wx5;S2wldMhx6:S2wx5:$S2wzA8E=array();$S2wzA8E['role']='user';$S2wzA8E['content']=$_POST['message'];unset($S2wtI8E);$S2wtI8E=$S2wzA8E;$postData['messages'][]=$S2wtI8E;$S2wzA8F=array();$S2wzA8F[]=&$postData;$S2weF8E=call_user_func_array("json_encode",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$postData=$S2wtI8E;$S2wzA8F=array();$S2weF8E=call_user_func_array("session_start",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$postData;$_SESSION['data']=$S2wtI8E;unset($S2wtI8E);$S2wtI8E=$_POST['key'];$encrypted_string=$S2wtI8E;$S2wzA8F=array();$S2wzA8F[]=&$encrypted_string;$S2wzA8F[]='woshijiami';$S2weF8E=call_user_func_array("decryptymjmsejm",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$decrypted_string=$S2wtI8E;unset($S2wtI8E);$S2wtI8E=$decrypted_string;$_POST['key']=$S2wtI8E;$S2w8F=(bool)isset($_POST['key']);if($S2w8F)goto S2weWjgxd;goto S2wldMhxd;S2weWjgxd:$S2w8E=!empty($_POST['key']);$S2w8F=(bool)$S2w8E;goto S2wxc;S2wldMhxd:S2wxc:if($S2w8F)goto S2weWjgxe;goto S2wldMhxe;S2weWjgxe:unset($S2wtI8E);$S2wtI8E=$_POST['key'];$_SESSION['key']=$S2wtI8E;goto S2wxb;S2wldMhxe:S2wxb:echo '{"success":true}';function decryptymjmsejm($string,$key){unset($S2wtI8E);$S2wtI8E='';$result=$S2wtI8E;$S2wzA8F=array();$S2wzA8F[]=&$string;$S2weF8E=call_user_func_array("base64_decode",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$string=$S2wtI8E;$i=0;S2wxf:$S2wzA8F=array();$S2wzA8F[]=&$string;$S2weF8E=call_user_func_array("strlen",$S2wzA8F);unset($S2wzA8F);$S2w8E=$i<$S2weF8E;if($S2w8E)goto S2weWjgxj;goto S2wldMhxj;S2weWjgxj:$S2wzA8F=array();$S2wzA8F[]=&$string;$S2wzA8F[]=&$i;$S2wzA8F[]=1;$S2weF8E=call_user_func_array("substr",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$char=$S2wtI8E;$S2wzA8F=array();$S2wzA8F[]=&$key;$S2weFvP8E=call_user_func_array("strlen",$S2wzA8F);unset($S2wzA8F);$S2wvP8E=$i%$S2weFvP8E;$S2wvP8F=$S2wvP8E-1;$S2wzA8H=array();$S2wzA8H[]=&$key;$S2wzA8H[]=&$S2wvP8F;$S2wzA8H[]=1;$S2weF8G=call_user_func_array("substr",$S2wzA8H);unset($S2wzA8H);unset($S2wtI8G);$S2wtI8G=$S2weF8G;unset($S2wtI8E);$S2wtI8E=$S2wtI8G;$keychar=$S2wtI8E;$S2wzA8F=array();$S2wzA8F[]=&$char;$S2weFvP8E=call_user_func_array("ord",$S2wzA8F);unset($S2wzA8F);$S2wzA8H=array();$S2wzA8H[]=&$keychar;$S2weFvP8G=call_user_func_array("ord",$S2wzA8H);unset($S2wzA8H);$S2wvP8E=$S2weFvP8E-$S2weFvP8G;$S2wzA8J=array();$S2wzA8J[]=&$S2wvP8E;$S2weF8I=call_user_func_array("chr",$S2wzA8J);unset($S2wzA8J);unset($S2wtI8F);$S2wtI8F=$S2weF8I;unset($S2wtI8E);$S2wtI8E=$S2wtI8F;$char=$S2wtI8E;$S2w8E=$result . $char;unset($S2wtI8F);$S2wtI8F=$S2w8E;$result=$S2wtI8F;$S2wnW8E=$result;S2wxg:$S2woB6=$i;$S2woB7=$i+1;$i=$S2woB7;goto S2wxf;goto S2wxi;S2wldMhxj:S2wxi:S2wxh:return $result;}
?>