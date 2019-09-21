<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:47
         compiled from "tpl/ru/header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2561079415d6f6f9f13ab74-26529936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2219fb956565c6d394829513a9d2a21bdb24a363' => 
    array (
      0 => 'tpl/ru/header2.tpl',
      1 => 1568971265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2561079415d6f6f9f13ab74-26529936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d6f6f9f15d2a9_01404705',
  'variables' => 
  array (
    'title' => 0,
    '_cfg' => 0,
    'root_url' => 0,
    'img_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6f6f9f15d2a9_01404705')) {function content_5d6f6f9f15d2a9_01404705($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['_cfg']->value['Sys_SiteName'];?>
</title>
		<base href="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
style_cab.css">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/calc.js"></script>
        <script src="js/plugins-scroll.js"></script>
        
        <!--[if IE 9]>
            <link href="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
ie9.css" type="text/css" rel="stylesheet" />    
        <![endif]-->   
        <!--[if IE 8]>
            <link href="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
ie8.css" type="text/css" rel="stylesheet" />    
        <![endif]-->
        <!--[if IE 7]>
            <link href="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
ie7.css" type="text/css" rel="stylesheet" />    
        <![endif]-->
        
        <!--Clock-->
        <script type="text/javascript">
            function clock() {
            var d = new Date();
            var month_num = d.getMonth()
            var day = d.getDate();
            var hours = d.getUTCHours();
            var minutes = d.getMinutes();
            var seconds = d.getSeconds();
            if (day <= 9) day = "0" + day;
            if (hours <= 9) hours = "0" + hours;
            if (minutes <= 9) minutes = "0" + minutes;
            if (seconds <= 9) seconds = "0" + seconds;
            date_time = " "+ hours + ":" + minutes + ":" + seconds;
            if (document.layers) {
             document.layers.doc_time.document.write(date_time);
             document.layers.doc_time.document.close();
            }
            else document.getElementById("doc_time").innerHTML = date_time;
             setTimeout("clock()", 1000);
            }
        </script>
   
        
	</head>
	<body>     
        <div id="header">
            <div id="upgr"></div>         
            <div id="top-menu2">
                <div id="logo">
                    <a href="/home"><img src="/images/logo.png" alt="logo" /></a>
                </div>
                <ul class="login">
                    <?php if (_uid()){?>
                    <li class="register"><a href="/cabinet"><img src="/images/us.png" alt="us">Кабинет</a></li>
                    <li class="signup"><a href="/login?out"><img src="/images/exit.png" alt="ex">Выход</a></li>
                    <?php }else{ ?>
                    <li class="register"><a href="/registration"><img src="/images/reg.png" alt="rg">Регистрация</a></li>
                    <li class="signup"><a href="/login"><img src="/images/lg.png" alt="lg">Войти</a></li>
                    <?php }?>
                </ul>
               
             
               
					
					
					
					
					
					
					
					
					
					
					
								<!-- GTranslate: https://gtranslate.io/ -->
<a href="#" onclick="doGTranslate('ru|en');return false;" title="English" class="gflag nturl" style="background-position:-100px -0px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('ru|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Italian" /></a><a href="#" onclick="doGTranslate('ru|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Portuguese" /></a><a href="#" onclick="doGTranslate('ru|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Russian" /></a><a href="#" onclick="doGTranslate('ru|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-100px -100px;"><img src="//gtranslate.net/flags/blank.png" height="32" width="32" alt="Spanish" /></a>

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/32.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ru',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

											
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					</a></li>
                </ul>
                <ul class="lang">
  
                    <li class="lng lru"><a href="/interface?lang=ru"><img src="/images/l-ru.png" alt="ru" style="opacity: 0.9;"></a></li>
                </ul>
                <div id="doc_time"></div> 
                <ul class="lst">
                    <li class="vo">
                     
                    </li>
                    <li class="rd">
               
			   
			   
	
			   
	
			   
                        <img src="/images/mail.png" alt="rd">
                    </li>
                </ul>
                <div id="clear-menu"></div>
                <div id="menu" class="menu">
                    <ul>
                          <li><a href="/"><img src="/images/home.png" alt="home"></a></li>
                        <li><a href="http://cg42021.tmweb.ru/#abt">О Компании</a></li>
                        <li><a href="http://cg42021.tmweb.ru/#token">Инвесторам</a></li>
                        <li><a href="http://cg42021.tmweb.ru/#stp">FAQ</a></li>
                        <li><a href="http://cg42021.tmweb.ru/#news">Новости</a></li>
						 
                    </ul>
					

                </div>
            </div>
           
        </div>
            
        </div>
        <div id="content">
		    <div class="cont">
		    <?php }} ?>