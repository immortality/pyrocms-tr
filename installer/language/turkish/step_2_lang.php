<?php defined('BASEPATH') OR exit('No direct script access allowed');

// labels
$lang['header']			=	'Adım 2: Sistem Gereksinimleri';
$lang['intro_text']		= 	'Kurulumun ikinci adımı sunucunuzun PyroCMS\'i çalıştırabileceğini denetler. Çoğu sunucu herhangi bir sorun yaşamadan destekler.';
$lang['mandatory']		= 	'Mecburi';
$lang['recommended']	= 	'Önerilen';

$lang['server_settings']= 	'HTTP Sunucu Ayarları';
$lang['server_version']	=	'Sunucu yazılımı:';
$lang['server_fail']	=	'Sunucu yazılımınız desteklenmiyor, PyroCMS çalışmayabilir. PyroCMS\'in düzgün çalışması için PHP ve MySQL kurulumlarının güncel olması gerekir.';

$lang['php_settings']	=	'PHP Ayarları';
$lang['php_required']	=	'PyroCMS %s ve üstü PHP gerektirir.';
$lang['php_version']	=	'Sunucunuzun çalıştırdığı versiyon';
$lang['php_fail']		=	'PHP versiyonunuz desteklenmiyor. PyroCMS\'in düzgün çalışması için %s ve üzeri gerekir.';

$lang['mysql_settings']	=	'MySQL Ayarları';
$lang['mysql_required']	=	'PyroCMS erişim için 5.0 ve üzeri MySQL veritabanı gerektirir.';
$lang['mysql_version1']	=	'Sunucunuzda şuanda çalışan';
$lang['mysql_version2']	=	'İstemcinizde şuanda çalışan';
$lang['mysql_fail']		=	'MySQL veriyonunuz desteklenmiyor. PyroCMS\'in çalışması için 5.0 ve üzeri MySQL gerektirir.';

$lang['gd_settings']	=	'GD Ayarları';
$lang['gd_required']	= 	'PyroCMS resimleri işlemek için GD kütüphanesi 1.0 ve üzeri gerektirir.';
$lang['gd_version']		= 	'Sunucunuzda şuanda çalışan';
$lang['gd_fail']		=	'GD kütüphanesi versiyonu tespit edilemedi. Bu GD kütüphanesinin kurulu olmadığı anlamına gelebilir. PyroCMS bu şekilde çalışabilir fakat resim özellikleri kullanamayabilir. GD kütüphanesinin yüklü olması şiddetle tavsiye edilir.';

$lang['summary']		=	'Özet';

$lang['zlib']			=	'Zlib';
$lang['zlib_required']	= 	'PyroCMS temaları arşivden çıkartıp kurmak için Zlib\'e ihtiyaç duyar.';
$lang['zlib_fail']		=	'Zlib bulunamadı. Zlib kurulu olmayabilir. PyroCMS bu şekilde çalışabilir fakat tema kurulumları çalışmayabilir. Zlib\'in kurulması tavsiye edilir.';

$lang['curl']			=	'Curl';
$lang['curl_required']	=	'PyroCMS diğer sitelerle bağlantı kurmak için Curl gerektirir.';
$lang['curl_fail']		=	'Curl bulunamadı. Bu Curl özelliğinin kurulu olmadığı anlamına gelir. PyroCMS bu şekilde çalışabilir fakat bazı özellikler çalışmayabilir. Curl kütüphanesinin kurulumu şiddetle tavsiye edilir.';

$lang['summary_success']	=	'Sunucunuz PyroCMS\'in çalışması için tüm gereksinimleri karşılıyor, aşağıdaki butona basarak sonraki adıma ilerleyin.';
$lang['summary_partial']	=	'Sunucunuz PyroCMS\'in çalışması için <em>çoğu</em> gereksinimleri karşılıyor. PyroCMS bu şekilde çalışmaya devam edebilir fakat bazı sorunlar yaşayabilirsiniz, resim boyutlandırma veya önizleme oluşturma gibi.';
$lang['summary_failure']	=	'Sunucunuz PyroCMS\'i çalıştırmak için gerekli özellikleri karşılamıyor. Bu sorunu çözmek için yöneticinizle veya servis sağlayıcınızla iletişime geçin.';
$lang['next_step']		=	'Sonraki adıma ilerle';
$lang['step3']			=	'Adım 3';
$lang['retry']			=	'Tekrar dene';

// messages
$lang['step1_failure']	=	'Lütfen formda istenen tüm veritabanı ayarlarını doldurunuz.';

/* End of file step_2_lang.php */