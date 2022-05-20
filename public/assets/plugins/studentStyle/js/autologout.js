(function($){Drupal.behaviors.autologout={attach:function(context,settings){if(context!=document){return;}
var paddingTimer;var t;var theDialog;var localSettings;var activity;var activityResetTimer;localSettings=jQuery.extend(true,{},settings.autologout);if(localSettings.refresh_only){t=setTimeout(keepAlive,localSettings.timeout);}
else{activity=false;$('body').bind('formUpdated',function(event){$(event.target).trigger('preventAutologout');});if(typeof CKEDITOR!=='undefined'){CKEDITOR.on('instanceCreated',function(e){e.editor.on('contentDom',function(){e.editor.document.on('keyup',function(event){$(e.editor.element.$).trigger('preventAutologout');});});});}
$('body').bind('preventAutologout',function(event){activity=true;clearTimeout(activityResetTimer);activityResetTimer=setTimeout(function(){activity=false;},60000);});t=setTimeout(init,localSettings.timeout);}
function init(){var noDialog=Drupal.settings.autologout.no_dialog;if(activity){activity=false;refresh();}
else{paddingTimer=setTimeout(confirmLogout,localSettings.timeout_padding);Drupal.ajax['autologout.getTimeLeft'].autologoutGetTimeLeft(function(time){if(time>0){clearTimeout(paddingTimer);t=setTimeout(init,time);}
else{if(noDialog){logout();return;}
theDialog=dialog();}});}}
function dialog(){var buttons={};buttons[Drupal.t('Yes')]=function(){$(this).dialog("destroy");clearTimeout(paddingTimer);refresh();};buttons[Drupal.t('No')]=function(){$(this).dialog("destroy");logout();};return $('<div id="autologout-confirm"> '+localSettings.message+'</div>').dialog({modal:true,closeOnEscape:false,width:"auto",dialogClass:'autologout-dialog',title:localSettings.title,buttons:buttons,close:function(event,ui){logout();}});}
function confirmLogout(){$(theDialog).dialog('destroy');Drupal.ajax['autologout.getTimeLeft'].autologoutGetTimeLeft(function(time){if(time>0){t=setTimeout(init,time);}
else{logout();}});}
function logout(){if(localSettings.use_alt_logout_method){window.location=Drupal.settings.basePath+"?q=autologout_ahah_logout";}
else{$.ajax({url:Drupal.settings.basePath+"?q=autologout_ahah_logout",type:"POST",success:function(){window.location=localSettings.redirect_url;},error:function(XMLHttpRequest,textStatus){if(XMLHttpRequest.status==403||XMLHttpRequest.status==404){window.location=localSettings.redirect_url;}}});}}
Drupal.ajax.prototype.autologoutGetTimeLeft=function(callback){var ajax=this;if(ajax.ajaxing){return false;}
ajax.options.success=function(response,status){if(typeof response=='string'){response=$.parseJSON(response);}
if(typeof response[1].command==='string'&&response[1].command=='alert'){window.location=localSettings.redirect_url;}
callback(response[2].settings.time);return ajax.success(response,status);};try{$.ajax(ajax.options);}
catch(e){ajax.ajaxing=false;}};Drupal.ajax['autologout.getTimeLeft']=new Drupal.ajax(null,$(document.body),{url:Drupal.settings.basePath+'?q=autologout_ajax_get_time_left',event:'autologout.getTimeLeft',error:function(XMLHttpRequest,textStatus){}});Drupal.ajax.prototype.autologoutRefresh=function(timerfunction){var ajax=this;if(ajax.ajaxing){return false;}
ajax.options.success=function(response,status){if(typeof response=='string'){response=$.parseJSON(response);}
if(typeof response[1].command==='string'&&response[1].command=='alert'){window.location=localSettings.redirect_url;}
t=setTimeout(timerfunction,localSettings.timeout);activity=false;return ajax.success(response,status);};try{$.ajax(ajax.options);}
catch(e){ajax.ajaxing=false;}};Drupal.ajax['autologout.refresh']=new Drupal.ajax(null,$(document.body),{url:Drupal.settings.basePath+'?q=autologout_ahah_set_last',event:'autologout.refresh',error:function(XMLHttpRequest,textStatus){}});function keepAlive(){Drupal.ajax['autologout.refresh'].autologoutRefresh(keepAlive);}
function refresh(){Drupal.ajax['autologout.refresh'].autologoutRefresh(init);}
var $dirty_bit=$('#autologout-cache-check-bit');if($dirty_bit.length!==0){if($dirty_bit.val()=='1'){refresh();}
$dirty_bit.val('1');}}};})(jQuery);