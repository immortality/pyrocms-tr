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

$lang['db_invalid_connection_str'] = 'Veritabanı ayarları belirlenemedi, gönderdiğiniz bağlantı dizesi hatalı';
$lang['db_unable_to_connect'] = 'Belirtilen ayarlar ile veritabanı sunucusuna bağlanılamadı.';
$lang['db_unable_to_select'] = 'Belirtilen veritabanı seçilemiyor: %s';
$lang['db_unable_to_create'] = 'Belirtilen veritabanı oluşturulamadı: %s';
$lang['db_invalid_query'] = 'Gönderdiğiniz sorgu geçersiz.';
$lang['db_must_set_table'] = 'Sorgunuzda kullanacağınız veritabanı tablosunu ayarlamalısınız.';
$lang['db_must_use_set'] = 'Bir veriyi güncellemek için "set" metodunu kullanmalısınız.';
$lang['db_must_use_index'] = 'Toplu güncellemeleri eşleştirmek için bir dizin belirlemelisiniz.';
$lang['db_batch_missing_index'] = 'Toplu güncelleştirme için sunulan bir veya daha fazla satır için belirtilen dizin eksik.';
$lang['db_must_use_where'] = '"where" kriteri içermeyen güncellemelere izin verilmiyor.';
$lang['db_del_must_use_where'] = '"where" yada "like" kriteri kullanmadan silme yapılamaz.';
$lang['db_field_param_missing'] = 'Alanları almak için parametre olarak tablo adı gereklidir.';
$lang['db_unsupported_function'] = 'Kullandığınız veritabanında bu özellikler desteklenmiyor.';
$lang['db_transaction_failure'] = 'İşlem hatası: İşlem geri alındı.';
$lang['db_unable_to_drop'] = 'Seçilen veritabanı kaldırılamadı.';
$lang['db_unsuported_feature'] = 'Özellikleri kullandığınız veritabanı platformu tarafından desteklenmiyor.';
$lang['db_unsuported_compression'] = 'Seçtiğiniz sıkıştırma formatı sunucunuz tarafından desteklenmiyor.';
$lang['db_filepath_error'] = 'Seçtiğiniz klasöre veri yazarken hata oluştu.';
$lang['db_invalid_cache_path'] = 'Belirttiğiniz önbellek klasöri geçerli yada yazdırılabilir değil.';
$lang['db_table_name_required'] = 'Bu işlem için bir tablo adı gerekli.';
$lang['db_column_name_required'] = 'Bu işlem için bir sütun adı gerekli.';
$lang['db_column_definition_required'] = 'Bu işlem için bir sütun tanımı gerekli.';
$lang['db_unable_to_set_charset'] = 'İstemci bağlantısı için karakter kodlaması ayarlanamadı: %s';
$lang['db_error_heading'] = 'Veritabanı hatası oluştu';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */