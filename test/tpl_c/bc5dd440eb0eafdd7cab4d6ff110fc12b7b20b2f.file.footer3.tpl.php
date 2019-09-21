<?php /* Smarty version Smarty-3.1.8, created on 2019-09-20 13:37:47
         compiled from "tpl/ru/footer3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18237564385d6f6f9deba935-13944309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5dd440eb0eafdd7cab4d6ff110fc12b7b20b2f' => 
    array (
      0 => 'tpl/ru/footer3.tpl',
      1 => 1568971264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18237564385d6f6f9deba935-13944309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d6f6f9debff20_18765615',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6f6f9debff20_18765615')) {function content_5d6f6f9debff20_18765615($_smarty_tpl) {?>		</div>		
        </div>
        <div id="top-footer">
    <div id="footer-box">
        <div id="footer">
            <ul class="all">
                <li><a href="/home">&#8226; Главная</a></li>
                <?php if (_uid()){?>
                <li><a href="/cabinet">&#8226; Кабинет</a></li>
                <li><a href="/operation?add=CASHIN">&#8226; Сделать Вклад</a></li>
                <?php }else{ ?>
                <li><a href="/registration">&#8226; Регистрация</a></li>
                <li><a href="/operation?add=CASHIN">&#8226; Сделать Вклад</a></li>
                <?php }?>
            </ul>
            <ul class="all mn-rg">
                <li><a href="/#abt">&#8226; О НАС</a></li>
                <li><a href="/#fea">&#8226; ОСОБЕНОСТИ</a></li>
                <li><a href="/#token">&#8226; УСЛОВИЯ</a></li>
				
 
				
            </ul>     
			
			
	
			
			
        </div>
        <div id="copy">
            <div id="kd">
                <img src="/images/logo.png" alt="logo">
            </div>
            <div id="pm" title="Perfect Money">
             
            </div>
            <div id="pr" title="Payeer">
               
            </div>
            <div id="bt" title="Qiwi">
              
            </div>
            <div id="cl" title="Advanced Cash">
              
            </div>
            <div id="nm" title="NixMoney">
        
            </div>
           <p>Copyright &copy; 2019  All rights reserved.</p>
                    <div class="contact">
                    
                  
                    </div>
        </div>
    </div> 
</div>   
   
    <!--clock-->
    <script type="text/javascript">
        clock();
    </script>
	</body>
</html><?php }} ?>