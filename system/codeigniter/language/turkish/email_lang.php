<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 * 
 * Licensed under the Open Software License version 3.0
 * 
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2012, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

$lang['email_must_be_array'] = "Email doğrulama metodu dize olarak gönderilmeli.";
$lang['email_invalid_address'] = "Geçersiz email adresi: %s";
$lang['email_attachment_missing'] = "İstenen email eklentisi bulunamadı: %s";
$lang['email_attachment_unreadable'] = "Eklenti açılamadı: %s";
$lang['email_no_recipients'] = "Alıcıları eklemelisiniz: To, Cc, or Bcc";
$lang['email_send_failure_phpmail'] = "PHP mail() ile mail gönderilemiyor.  Sunucunuzun mail konfigürasyonu mail göndermenize engel oluyor olabilir.";
$lang['email_send_failure_sendmail'] = "PHP Sendmail ile mail gönderilemiyor.  Sunucunuzun mail konfigürasyonu mail göndermenize engel oluyor olabilir.";
$lang['email_send_failure_smtp'] = " PHP SMTP ile mail gönderilemiyor.  Sunucunuzun mail konfigürasyonu mail göndermenize engel oluyor olabilir.";
$lang['email_sent'] = "Mesajınız şu protokol ile başarıyla gönderildi: %s";
$lang['email_no_socket'] = "Sendmail için soket açılamadı. Lütfen ayarları kontrol edin.";
$lang['email_no_hostname'] = "SMTP sunucusu seçmediniz.";
$lang['email_smtp_error'] = "SMTP hatası oluştu: %s";
$lang['email_no_smtp_unpw'] = "Hata: SMTP için kullanıcı adı ve parola belirtmelisiniz.";
$lang['email_failed_smtp_login'] = "AUTH LOGIN komutu gönderilemedi. Hata: %s";
$lang['email_smtp_auth_un'] = "Kullanıcı adı doğrulanamadı. Hata: %s";
$lang['email_smtp_auth_pw'] = "Parola doğrulanamadı. Hata: %s";
$lang['email_smtp_data_failure'] = "Bilgi gönderilemedi: %s";
$lang['email_exit_status'] = "Çıkış durum kodu: %s";


/* End of file email_lang.php */
/* Location: ./system/language/english/email_lang.php */