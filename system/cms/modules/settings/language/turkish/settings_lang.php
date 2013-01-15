<?php defined('BASEPATH') OR exit('No direct script access allowed');

#section settings
$lang['settings_site_name']						= 'Site Adı';
$lang['settings_site_name_desc']				= 'Tüm sitede görüntülenecek sayfa başlığı.';

$lang['settings_site_slogan']					= 'Site Sloganı';
$lang['settings_site_slogan_desc']				= 'Tüm sitede görüntülenecek site sloganı.';

$lang['settings_site_lang']						= 'Site Dili';
$lang['settings_site_lang_desc']				= 'Sitenizin ana dili, email bildirim şablonları, iletişim formu, ve diğer bölümler için.';

$lang['settings_contact_email']					= 'İletişim E-maili';
$lang['settings_contact_email_desc']			= 'Tüm kullanıcılar ve ziyaretçilerden gelecek mesajlar bu adrese gönderilir.';

$lang['settings_server_email']					= 'Sunucu E-maili';
$lang['settings_server_email_desc']				= 'Kullanıcılara tüm mailler bu adresten gönderilir.';

$lang['settings_meta_topic']					= 'Meta Topic';
$lang['settings_meta_topic_desc']				= 'Sitenizi açıklayan iki veya üç kelime yazın.';

$lang['settings_currency']						= 'Para Birimi';
$lang['settings_currency_desc']					= 'Ürünler ve servisler için görüntülenecek para birimi.';

$lang['settings_dashboard_rss']					= 'Yönetici Ekranı RSS Akışı';
$lang['settings_dashboard_rss_desc']			= 'Yönetici ekranında görüntülenecek RSS akışları için bağlantı yazın.';

$lang['settings_dashboard_rss_count']			= 'Yönetici Ekranı RSS Miktarı';
$lang['settings_dashboard_rss_count_desc']		= 'Yönetici ekranında görüntülenecek RSS akışları için miktar?';

$lang['settings_date_format']					= 'Tarih Formatı';
$lang['settings_date_format_desc']				= 'Tüm site ve yönetim panelinde tarih formatı nasıl olsun? <a target="_blank" href="http://php.net/manual/en/function.date.php">Date</a> veya <a target="_blank" href="http://php.net/manual/en/function.strftime.php">strftime</a> kullanarak yapabilirsiniz.';

$lang['settings_frontend_enabled']				= 'Site Durumu';
$lang['settings_frontend_enabled_desc']			= 'Bu ayar sitenin açık yada kapalı durumunu belirler. Sitenize bakım veya yükseltme çalışması yaptınızda oldukça kullanışlıdır';

$lang['settings_mail_protocol']					= 'Mail Protokolü';
$lang['settings_mail_protocol_desc']			= 'Mail Protokolü seçin.';

$lang['settings_mail_sendmail_path']			= 'Sendmail Path';
$lang['settings_mail_sendmail_path_desc']		= 'Sendmail sunucu yolu.';

$lang['settings_mail_smtp_host']				= 'SMTP Sunucusu';
$lang['settings_mail_smtp_host_desc']			= 'Smtp sunucusu için host adı.';

$lang['settings_mail_smtp_pass']				= 'SMTP parolası';
$lang['settings_mail_smtp_pass_desc']			= 'SMTP parolası.';

$lang['settings_mail_smtp_port'] 				= 'SMTP Portu';
$lang['settings_mail_smtp_port_desc'] 			= 'SMTP port numarası.';

$lang['settings_mail_smtp_user'] 				= 'SMTP Kullanıcı Adı';
$lang['settings_mail_smtp_user_desc'] 			= 'SMTP kullanıcı adı.';

$lang['settings_unavailable_message']			= 'Kapanış Mesajı';
$lang['settings_unavailable_message_desc']		= 'Siteniz kapalı olduğu zaman bu mesaj kullanıcılara gösterilecektir.';

$lang['settings_default_theme']					= 'Varsayılan Tema';
$lang['settings_default_theme_desc']			= 'Kullanıcıların varsayılan olarak görüntüleyeceği tema.';

$lang['settings_activation_email']				= 'Aktivasyon Maili';
$lang['settings_activation_email_desc']			= 'Send out an e-mail when a user signs up with an activation link. Disable this to let only admins activate accounts.';

$lang['settings_records_per_page']				= 'Sayfa Başına Kayıt';
$lang['settings_records_per_page_desc']			= 'Yönetici bölümünde sayfa başına gösterilecek kayıt miktarı';

$lang['settings_rss_feed_items']				= 'Akış öğe miktarı';
$lang['settings_rss_feed_items_desc']			= 'RSS ve blog akışları için ne kadar öğe gösterilsin?';

$lang['settings_require_lastname']				= 'Soyisim gerekli mi?';
$lang['settings_require_lastname_desc']			= 'Bazı durumlarda soyisim gerekli olmayabilir. Üyelerin soyisim belirtmeleri gerekli olsun mu?';

$lang['settings_enable_profiles']				= 'Profilleri aç';
$lang['settings_enable_profiles_desc']			= 'Kullanıcılar profil ekleyip düzenleyebilir.';

$lang['settings_ga_email']						= 'Google Analytic E-maili';
$lang['settings_ga_email_desc']					= 'Google Analytics email adresi, yönetici ekranında grafik görüntülemesi için gerekli.';

$lang['settings_ga_password']					= 'Google Analytic Parolası';
$lang['settings_ga_password_desc']				= 'Google Analytics parolası. Yönetici ekranında grafik görüntülemesi için gerekli.';

$lang['settings_ga_profile']					= 'Google Analytic Profili';
$lang['settings_ga_profile_desc']				= 'Site için Google Analytics Profil Id si.';

$lang['settings_ga_tracking']					= 'Google Tracking Kodu';
$lang['settings_ga_tracking_desc']				= 'Google Analytic Tracking Kodu. Örn.: UA-19483569-6';

$lang['settings_twitter_username']				= 'Kullanıcı Adı';
$lang['settings_twitter_username_desc']			= 'Twitter kullanıcı adı.';

$lang['settings_twitter_feed_count']			= 'Akış Miktarı';
$lang['settings_twitter_feed_count_desc']		= 'Twitter bölümünde ne kadar tweet görüntülensin?';

$lang['settings_twitter_cache']					= 'Bellek zamanı';
$lang['settings_twitter_cache_desc']			= 'Tweetler ne kadar süre ile hafızaya alınsın?';

$lang['settings_akismet_api_key']				= 'Akismet API Anahtarı';
$lang['settings_akismet_api_key_desc']			= 'Akismet WordPress tarafından geliştirilmiş anti-spam uygulamasıdır. Kullanıcıların CAPTCHA formu doldurmadan mesaj yazmalarına olanak sağlar.';

$lang['settings_comment_order']					= 'Yorum Sırası';
$lang['settings_comment_order_desc']			= 'Görüntülenen yorum sıralaması.';

$lang['settings_enable_comments'] 				= 'Yorumları Aç';
$lang['settings_enable_comments_desc']			= 'Kullanıcılar yorum gönderebilsin mi?';
	
$lang['settings_moderate_comments']				= 'Yorumları Yönet';
$lang['settings_moderate_comments_desc']		= 'Yorumlar sitede yayınlanmadan önce onaylansın mı?';

$lang['settings_comment_markdown']				= 'Markdown\'u Aç';
$lang['settings_comment_markdown_desc']			= 'Kullanıcıların Markdown kullanarak yorum yazmalarına izin verilsin mi?';

$lang['settings_version']						= 'Versiyon';
$lang['settings_version_desc']					= '';

$lang['settings_site_public_lang']				= 'Kullanıcı Dilleri';
$lang['settings_site_public_lang_desc']			= 'Kullanıcılar sitenizin ön kısmında hangi dilleri kullanabilsin?';

$lang['settings_admin_force_https']				= 'Yönetim Paneli için HTTPS\'e zorla?';
$lang['settings_admin_force_https_desc']		= 'Yönetim paneli kullanırken HTTPS kullanmaya zorlansın mı?';

$lang['settings_files_cache']					= 'Dosya Belleği';
$lang['settings_files_cache_desc']				= 'Dosya Belleği süresi';

$lang['settings_auto_username']					= 'Oto Kullanıcı Adı';
$lang['settings_auto_username_desc']			= 'Kullanıcıları üye olurken kullanıcı adları otomatik oluşturulur.';

$lang['settings_registered_email']				= 'Kullanıcı Kayıt Uyarısı';
$lang['settings_registered_email_desc']			= 'Bir üye kayıt olduğunda iletişim adresine mail gönder.';

$lang['settings_ckeditor_config']               = 'CKEditor Ayarları';
$lang['settings_ckeditor_config_desc']          = 'Tüm ayarların listesine <a target="_blank" href="http://docs.cksource.com/ckeditor_api/symbols/CKEDITOR.config.html">CKEditor dökümanından</a> ulaşabilirsiniz.';

$lang['settings_enable_registration']           = 'Kullanıcı Kaydını Aç';
$lang['settings_enable_registration_desc']      = 'Kullanıcıların sitenize olmasına izin verin.';

$lang['settings_cdn_domain']                    = 'CDN Alan adı';
$lang['settings_cdn_domain_desc']               = 'CDN Alan adı.';

# section titles
$lang['settings_section_general']				= 'Genel';
$lang['settings_section_integration']			= 'Entegrasyon';
$lang['settings_section_comments']				= 'Yorumlar';
$lang['settings_section_users']					= 'Kullanıcılar';
$lang['settings_section_statistics']			= 'İstatistikler';
$lang['settings_section_twitter']				= 'Twitter';
$lang['settings_section_files']					= 'Dosyalar';

# checkbox and radio options
$lang['settings_form_option_Open']				= 'Açık';
$lang['settings_form_option_Closed']			= 'Kapalı';
$lang['settings_form_option_Enabled']			= 'Aktif';
$lang['settings_form_option_Disabled']			= 'Devre Dışı';
$lang['settings_form_option_Required']			= 'Gerekli';
$lang['settings_form_option_Optional']			= 'Opsiyonel';
$lang['settings_form_option_Oldest First']		= 'Eskiler Önce';
$lang['settings_form_option_Newest First']		= 'Yeniler Önce';
$lang['settings_form_option_Text Only']			= 'Sadece Text';
$lang['settings_form_option_Allow Markdown']	= 'Markdown\'ı Aç';
$lang['settings_form_option_Yes']				= 'Evet';
$lang['settings_form_option_No']				= 'Hayır';

// messages
$lang['settings_no_settings']					= 'Şuanda hiçbir ayar yok.';
$lang['settings_save_success']					= 'Ayarlarınız başarıyla kaydedildi!';

/* End of file settings_lang.php */