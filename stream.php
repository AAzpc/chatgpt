<?php
/*
 
*/

$S2wzA8F=array();$S2wzA8F[]="Access-Control-Allow-Origin: *";$S2weF8E=call_user_func_array("header",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]="Content-Type: text/event-stream";$S2weF8E=call_user_func_array("header",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]="X-Accel-Buffering: no";$S2weF8E=call_user_func_array("header",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2weF8E=call_user_func_array("session_start",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$_SESSION['data'];$postData=$S2wtI8E;unset($S2wtI8E);$S2wtI8E="";$_SESSION['response']=$S2wtI8E;$S2wzA8F=array();$S2weF8E=call_user_func_array("curl_init",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$ch=$S2wtI8E;unset($S2wtI8E);$S2wtI8E="sk-replace_with_your_api_key_dude";$OPENAI_API_KEY=$S2wtI8E;if(isset($_SESSION['key']))goto S2weWjgx2;goto S2wldMhx2;S2weWjgx2:unset($S2wtI8E);$S2wtI8E=$_SESSION['key'];$OPENAI_API_KEY=$S2wtI8E;goto S2wx1;S2wldMhx2:S2wx1:$S2wvP8E='Authorization: Bearer ' . $OPENAI_API_KEY;$S2wzA8E=array();$S2wzA8E[]='Accept: application/json';$S2wzA8E[]='Content-Type: application/json';$S2wzA8E[]=$S2wvP8E;unset($S2wtI8F);$S2wtI8F=$S2wzA8E;$headers=$S2wtI8F;$S2wzA8F=array();$S2wzA8F[]="errcode";$S2wzA8F[]="";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]="errmsg";$S2wzA8F[]="";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=function($ch,$data){$S2wzA8F=array();$S2wzA8F[]=&$data;$S2weF8E=call_user_func_array("json_decode",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$complete=$S2wtI8E;if(isset($complete->error))goto S2weWjgxk;goto S2wldMhxk;S2weWjgxk:setcookie("errcode",$complete->error->code);$S2wzA8F=array();$S2wzA8F[]="errmsg";$S2wzA8F[]=&$data;$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);$S2w8E=strpos($complete->error->message,"Rate limit reached")===0;if($S2w8E)goto S2weWjgxm;goto S2wldMhxm;S2weWjgxm:$S2wzA8F=array();$S2wzA8F[]="errcode";$S2wzA8F[]="rate_limit_reached";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);goto S2wxl;S2wldMhxm:S2wxl:$S2w8E=strpos($complete->error->message,"Your access was terminated")===0;if($S2w8E)goto S2weWjgxo;goto S2wldMhxo;S2weWjgxo:$S2wzA8F=array();$S2wzA8F[]="errcode";$S2wzA8F[]="access_terminated";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);goto S2wxn;S2wldMhxo:S2wxn:$S2w8E=strpos($complete->error->message,"You didn't provide an API key")===0;if($S2w8E)goto S2weWjgxq;goto S2wldMhxq;S2weWjgxq:$S2wzA8F=array();$S2wzA8F[]="errcode";$S2wzA8F[]="no_api_key";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);goto S2wxp;S2wldMhxq:S2wxp:$S2w8E=strpos($complete->error->message,"You exceeded your current quota")===0;if($S2w8E)goto S2weWjgxs;goto S2wldMhxs;S2weWjgxs:$S2wzA8F=array();$S2wzA8F[]="errcode";$S2wzA8F[]="insufficient_quota";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);goto S2wxr;S2wldMhxs:S2wxr:$S2w8E=strpos($complete->error->message,"That model is currently overloaded")===0;if($S2w8E)goto S2weWjgxu;goto S2wldMhxu;S2weWjgxu:$S2wzA8F=array();$S2wzA8F[]="errcode";$S2wzA8F[]="model_overloaded";$S2weF8E=call_user_func_array("setcookie",$S2wzA8F);unset($S2wzA8F);goto S2wxt;S2wldMhxu:S2wxt:goto S2wxj;S2wldMhxk:echo $data;$_SESSION['response']=$_SESSION['response'].$data;$S2wnW8E=$_SESSION['response'];S2wxj:$S2wzA8F=array();$S2wzA8F[]=&$data;$S2weF8E=call_user_func_array("strlen",$S2wzA8F);unset($S2wzA8F);return $S2weF8E;};$callback=$S2wtI8E;$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_SSL_VERIFYPEER;$S2wzA8F[]=FALSE;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_SSL_VERIFYHOST;$S2wzA8F[]=FALSE;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_URL;$S2wzA8F[]='https://api.openai.com/v1/chat/completions';$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_RETURNTRANSFER;$S2wzA8F[]=1;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_HTTPHEADER;$S2wzA8F[]=&$headers;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_POST;$S2wzA8F[]=1;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_POSTFIELDS;$S2wzA8F[]=&$postData;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2wzA8F[]=CURLOPT_WRITEFUNCTION;$S2wzA8F[]=&$callback;$S2weF8E=call_user_func_array("curl_setopt",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2weF8E=call_user_func_array("curl_exec",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8E);$S2wtI8E="";$answer=$S2wtI8E;$S2wzA8I=array();$S2wzA8I[]=$_SESSION;$S2weF8H=call_user_func_array("is_array",$S2wzA8I);unset($S2wzA8I);if($S2weF8H)goto S2weWjgx5;goto S2wldMhx5;S2weWjgx5:$S2wcVvP8F=&$_SESSION['response'];goto S2wx4;S2wldMhx5:$S2wcVvP8F=$_SESSION['response'];S2wx4:$S2wzA8G=array();$S2wzA8G[]=&$S2wcVvP8F;$S2weFvP8E=call_user_func_array("trim",$S2wzA8G);unset($S2wzA8G);unset($S2wcVvP8F);$S2wzA8K=array();$S2wzA8K[]=&$S2weFvP8E;$S2wzA8K[]=-6;$S2weF8J=call_user_func_array("substr",$S2wzA8K);unset($S2wzA8K);$S2w8E=$S2weF8J=="[DONE]";if($S2w8E)goto S2weWjgx6;goto S2wldMhx6;S2weWjgx6:$S2wzA8I=array();$S2wzA8I[]=$_SESSION;$S2weF8H=call_user_func_array("is_array",$S2wzA8I);unset($S2wzA8I);if($S2weF8H)goto S2weWjgx8;goto S2wldMhx8;S2weWjgx8:$S2wcVvP8F=&$_SESSION['response'];goto S2wx7;S2wldMhx8:$S2wcVvP8F=$_SESSION['response'];S2wx7:$S2wzA8G=array();$S2wzA8G[]=&$S2wcVvP8F;$S2weFvP8E=call_user_func_array("trim",$S2wzA8G);unset($S2wzA8G);unset($S2wcVvP8F);$S2wzA8K=array();$S2wzA8K[]=&$S2weFvP8E;$S2wzA8K[]=0;$S2wzA8K[]=-6;$S2weF8J=call_user_func_array("substr",$S2wzA8K);unset($S2wzA8K);$S2w8E=$S2weF8J . "{";unset($S2wtI8F);$S2wtI8F=$S2w8E;$_SESSION['response']=$S2wtI8F;goto S2wx3;S2wldMhx6:S2wx3:$S2wzA8I=array();$S2wzA8I[]=$_SESSION;$S2weF8H=call_user_func_array("is_array",$S2wzA8I);unset($S2wzA8I);if($S2weF8H)goto S2weWjgxa;goto S2wldMhxa;S2weWjgxa:$S2wcV8F=&$_SESSION['response'];goto S2wx9;S2wldMhxa:$S2wcV8F=$_SESSION['response'];S2wx9:$S2wzA8G=array();$S2wzA8G[]="}

data: {";$S2wzA8G[]=&$S2wcV8F;$S2weF8E=call_user_func_array("explode",$S2wzA8G);unset($S2wzA8G);unset($S2wcV8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$responsearr=$S2wtI8E;foreach($responsearr as $msg){$S2wzA8F=array();$S2wzA8F[]=&$msg;$S2weFvP8E=call_user_func_array("trim",$S2wzA8F);unset($S2wzA8F);$S2wvP8E="{" . $S2weFvP8E;$S2wvP8F=$S2wvP8E . "}";$S2wzA8H=array();$S2wzA8H[]=&$S2wvP8F;$S2wzA8H[]=true;$S2weF8G=call_user_func_array("json_decode",$S2wzA8H);unset($S2wzA8H);unset($S2wtI8G);$S2wtI8G=$S2weF8G;$contentarr=$S2wtI8G;if(isset($contentarr['choices'][0]['delta']['content']))goto S2weWjgxc;goto S2wldMhxc;S2weWjgxc:$answer=$answer.$contentarr['choices'][0]['delta']['content'];$S2wnW8E=$answer;goto S2wxb;S2wldMhxc:S2wxb:}$S2wzA8I=array();$S2wzA8I[]=$_SESSION;$S2weF8H=call_user_func_array("is_array",$S2wzA8I);unset($S2wzA8I);if($S2weF8H)goto S2weWjgxe;goto S2wldMhxe;S2weWjgxe:$S2wcV8F=&$_SESSION['data'];goto S2wxd;S2wldMhxe:$S2wcV8F=$_SESSION['data'];S2wxd:$S2wzA8G=array();$S2wzA8G[]=&$S2wcV8F;$S2wzA8G[]=true;$S2weF8E=call_user_func_array("json_decode",$S2wzA8G);unset($S2wzA8G);unset($S2wcV8F);unset($S2wtI8E);$S2wtI8E=$S2weF8E;$questionarr=$S2wtI8E;$S2w8E=$_SERVER["REMOTE_ADDR"] . " | ";$S2wzA8F=array();$S2wzA8F[]="Y-m-d H:i:s";$S2weF8E=call_user_func_array("date",$S2wzA8F);unset($S2wzA8F);$S2w8F=$S2w8E . $S2weF8E;$S2w8G=$S2w8F . "
";unset($S2wtI8H);$S2wtI8H=$S2w8G;$filecontent=$S2wtI8H;$S2wzA8K=array();$S2wzA8K[]=$questionarr;$S2weF8J=call_user_func_array("is_array",$S2wzA8K);unset($S2wzA8K);if($S2weF8J)goto S2weWjgxg;goto S2wldMhxg;S2weWjgxg:$S2wcV8F=&$questionarr['messages'];goto S2wxf;S2wldMhxg:$S2wcV8F=$questionarr['messages'];S2wxf:$S2wzA8G=array();$S2wzA8G[]=&$S2wcV8F;$S2weF8E=call_user_func_array("end",$S2wzA8G);unset($S2wzA8G);unset($S2wcV8F);$S2w8E="Q:" . $S2weF8E['content'];$S2w8F=$S2w8E . "
A:";$S2wzA8I=array();$S2wzA8I[]=&$answer;$S2weF8H=call_user_func_array("trim",$S2wzA8I);unset($S2wzA8I);$S2w8G=$S2w8F . $S2weF8H;$S2w8H=$S2w8G . "
----------------
";$filecontent=$filecontent.$S2w8H;$S2wnW8I=$filecontent;$S2wvP8E=__DIR__ . "/chat.txt";$S2wzA8F=array();$S2wzA8F[]=&$S2wvP8E;$S2wzA8F[]="a";$S2weF8E=call_user_func_array("fopen",$S2wzA8F);unset($S2wzA8F);unset($S2wtI8F);$S2wtI8F=$S2weF8E;$myfile=$S2wtI8F;$S2w8G=(bool)$S2wtI8F;$S2w8H=!$S2w8G;if($S2w8H)goto S2weWjgxi;goto S2wldMhxi;S2weWjgxi:$S2w8G=(bool)die("Writing file failed.");goto S2wxh;S2wldMhxi:S2wxh:$S2wzA8F=array();$S2wzA8F[]=&$myfile;$S2wzA8F[]=&$filecontent;$S2weF8E=call_user_func_array("fwrite",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$myfile;$S2weF8E=call_user_func_array("fclose",$S2wzA8F);unset($S2wzA8F);$S2wzA8F=array();$S2wzA8F[]=&$ch;$S2weF8E=call_user_func_array("curl_close",$S2wzA8F);unset($S2wzA8F);
?>