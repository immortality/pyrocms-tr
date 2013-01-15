<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// labels
$lang['header']			=	'Adım 1: Veritabanı ve Sunucu Ayarları';
$lang['intro_text']		=	'PyroCMS kurulumu çok kolay fakat biraz zaman alabilir, bunun için bir kaç soru soracağız eğer teknik bilginiz yoksa bu işlem sizi biraz zorlayabilir. Eğer sorun yaşarsanız destek için servis sağlayıcınızla veya <a href="http://www.pyrocms.com/contact" target="_blank">bizimle</a> iletişime geçin.';

$lang['db_settings']	=	'Veritabanı Ayarları';
$lang['db_text']		=	'PyroCMS tüm içerikleri ve ayarları saklamak için veritabanı (MySQL) gerektirir, bu yüzden ilk adım olarak veritabanı ayarlarını doğrulamalıyız. Eğer ne istediğimizi anlamadıysanız servis sağlayıcınızla veya yöneticinizle irtibata geçin.';
$lang['db_missing']		=	'PHP mysql veritabanı sürücüsü bulunamadı, kurulum devam edemez. Servis sağlayıcınız veya yöneticinizden bunu kurmasını isteyin.';

$lang['server']			=	'MySQL Adresi';
$lang['username']		=	'MySQL Kullanıcı Adı';
$lang['password']		=	'MySQL Parola';
$lang['portnr']			=	'MySQL Portu';
$lang['server_settings']=	'Sunucu Ayarları';
$lang['httpserver']		=	'HTTP Sunucusu';

$lang['httpserver_text']=	'PyroCMS sitenizin görüntülenmesi için HTTP sunucusu gerektirir. Bu sayfayı görebiliryosanız zaten bir tanesine sahipsiniz demektir. Bunun ne olduğunu bilmiyorsanız görmezden gelin ve kurulum esnasında dikkatli olun.';
$lang['rewrite_fail']	=	'Seçiminiz "(Apache with mod_rewrite)" fakat sunucunuzda mod_rewrite kurulu mu tespit edemiyoruz. Servis sağlayıcınızdan mod_rewrite özelliğini açmasını isteyin yada bunu siz yapın.';
$lang['mod_rewrite']	=	'Seçiminiz "(Apache with mod_rewrite)" fakat sunucunuzda rewrite module aktif gözükmüyor. Servis sağlayıcınızdan aktif etmesini isteyin yada PyroCMS\'i "Apache (without mod_rewrite)" seçeneği ile kurun.';
$lang['step2']			=	'Adım 2';

// messages
$lang['db_success']		=	'Veritabanı ayarları test edildi ve düzgün çalışıyor.';
$lang['db_failure']		=	'Veritabanına bağlanırken hata: ';

/* End of file step_1_lang.php */
