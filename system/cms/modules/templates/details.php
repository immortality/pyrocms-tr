<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Templates Module
 *
 * @author PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Templates
 */
class Module_Templates extends Module {

	public $version = '1.1.0';

	public function info()
	{
		return array(
			'name' => array(
                'tr' => 'E-Posta Şablonları',
                'en' => 'Email Templates',
				'ar' => 'قوالب الرسائل الإلكترونية',
				'br' => 'Modelos de e-mail',
				'pt' => 'Modelos de e-mail',
				'da' => 'Email skabeloner',
				'el' => 'Δυναμικά email',
				'es' => 'Plantillas de email',
				'fr' => 'Modèles d\'emails',
				'he' => 'תבניות',
				'id' => 'Template Email',
				'lt' => 'El. laiškų šablonai',
				'nl' => 'Email sjablonen',
				'ru' => 'Шаблоны почты',
				'sl' => 'Email predloge',
				'zh' => '郵件範本',
				'hu' => 'E-mail sablonok',
				'fi' => 'Sähköposti viestipohjat',
				'th' => 'แม่แบบอีเมล',
                                'se' => 'E-postmallar'
			),
			'description' => array(
                'tr' => 'Dinamik mail şablonlarını oluştur, düzenle ve kaydet',
                'en' => 'Create, edit, and save dynamic email templates',
				'ar' => 'أنشئ، عدّل واحفظ قوالب البريد الإلكترني الديناميكية.',
				'br' => 'Criar, editar e salvar modelos de e-mail dinâmicos',
				'pt' => 'Criar, editar e salvar modelos de e-mail dinâmicos',
				'da' => 'Opret, redigér og gem dynamiske emailskabeloner.',
				'el' => 'Δημιουργήστε, επεξεργαστείτε και αποθηκεύστε δυναμικά email.',
				'es' => 'Crear, editar y guardar plantillas de email dinámicas',
				'fr' => 'Créer, éditer et sauver dynamiquement des modèles d\'emails',
				'he' => 'ניהול של תבניות דואר אלקטרוני',
				'id' => 'Membuat, mengedit, dan menyimpan template email dinamis',
				'lt' => 'Kurk, tvarkyk ir saugok dinaminius el. laiškų šablonus.',
				'nl' => 'Maak, bewerk, en beheer dynamische emailsjablonen',
				'ru' => 'Создавайте, редактируйте и сохраняйте динамические почтовые шаблоны',
				'sl' => 'Ustvari, uredi in shrani spremenljive email predloge',
				'zh' => '新增、編輯與儲存可顯示動態資料的 email 範本',
                'hu' => 'Csináld, szerkeszd és mentsd el a dinamikus e-mail sablonokat',
				'fi' => 'Lisää, muokkaa ja tallenna dynaamisia sähköposti viestipohjia.',
				'th' => 'การสร้างแก้ไขและบันทึกแม่แบบอีเมลแบบไดนามิก',
                                'se' => 'Skapa, redigera och spara dynamiska E-postmallar.'
			),
			'frontend' => false,
			'backend' => true,
			'menu' => 'design',
			'author' => 'Stephen Cozart',
			'skip_xss' => true,
			'shortcuts' => array(
				array(
				    'name' => 'templates.create_title',
				    'uri' => 'admin/templates/create',
				    'class' => 'add'
				),
		    ),
		);
	}

	public function install()
	{
		$this->dbforge->drop_table('email_templates');

		$tables = array(
			'email_templates' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true,),
				'slug' => array('type' => 'VARCHAR', 'constraint' => 100, 'unique' => 'slug_lang',),
				'name' => array('type' => 'VARCHAR', 'constraint' => 100,), // @todo rename this to 'title' to keep coherency with the rest of the modules
				'description' => array('type' => 'VARCHAR', 'constraint' => 255,), // @todo change this to TEXT to be coherent with the rest of the modules
				'subject' => array('type' => 'VARCHAR', 'constraint' => 255,),
				'body' => array('type' => 'TEXT'),
				'lang' => array('type' => 'VARCHAR', 'constraint' => 2, 'null' => true, 'unique' => 'slug_lang',),
				'is_default' => array('type' => 'INT', 'constraint' => 1, 'default' => 0,),
				'module' => array('type' => 'VARCHAR', 'constraint' => 50, 'default' => '',),
			),
		);

		if ( !$this->install_tables($tables))
		{
			return false;
		}

		// Insert the default email templates

		// @todo move this to the comments module
		$this->db->insert('email_templates',array(
			'slug' => 'comments',
			'name' => 'Yorum Uyarısı',
			'description' => 'Birileri yorum yazdığında yöneticiye mail gönderir',
			'subject' => '{{ name }} adlı kişiden bir yorum aldınız',
			'body' => "<h3>{{ name }} adlı kişiden bir yorum aldınız</h3>
				<p>
				<strong>IP Adresi: {{ sender_ip }}</strong><br/>
				<strong>İşletim Sistemi: {{ sender_os }}<br/>
				<strong>Web Tarayıcı: {{ sender_agent }}</strong>
				</p>
				<p>{{ comment }}</p>
				<p>Yoruma Bak: {{ redirect_url }}</p>",
			'lang' => 'tr',
			'is_default' => 1,
			'module' => 'comments'
		));

		// @todo move this to the contact module
		$this->db->insert('email_templates',array(
			'slug' => 'contact',
			'name' => 'İletişim Uyarısı',
			'description' => 'İletişim formu için şablon',
			'subject' => '{{ settings:site_name }} :: {{ subject }}',
			'body' => 'Bu mesaj iletişim formu üzerinden gönderilmiştir:
				<hr />
				IP Adresi: {{ sender_ip }}
				İşletim Sistemi {{ sender_os }}
				Web Tarayıcı {{ sender_agent }}
				<hr />
				{{ message }}

				{{ name }},

				{{ email }}',
			'lang' => 'tr',
			'is_default' => 1,
			'module' => 'pages'
		));

		// @todo move this to the users module
		$this->db->insert('email_templates',array(
			'slug' => 'registered',
			'name' => 'Yeni Kullanıcı Kaydı',
			'description' => 'Yeni bir kullanıcı kayıt olduğunda iletişim adresine mail gönderir',
			'subject' => '{{ settings:site_name }} :: {{ name }} adlı kullanıcı sitenize kayıt oldu',
			'body' => '<h3>{{ name }} adlı kullanıcı sitenize kayıt oldu</h3>
				<p><strong>IP Adresi: {{ sender_ip }}</strong><br/>
				<strong>İşletim Sistem: {{ sender_os }}</strong><br/>
				<strong>Web Tarayıcı: {{ sender_agent }}</strong>
				</p>',
			'lang' => 'tr',
			'is_default' => 1,
			'module' => 'users'
		));

		// @todo move this to the users module
		$this->db->insert('email_templates',array(
			'slug' => 'activation',
			'name' => 'Aktivasyon Maili',
			'description' => 'Yeni kullanıcılara gönderilecek aktivasyon maili şablonu',
			'subject' => '{{ settings:site_name }} - Hesap Aktivasyonu',
			'body' => '<p>Hello {{ user:first_name }},</p>
				<p>{{ settings:site_name }} sitesine kayıt olduğunuz için teşekkürler. Hesabınızı aktif etmeden önce, lütfen aşağıdaki bağlantıya tıklayarak kayıt işlemini tamamlayın:</p>
				<p><a href="{{ url:site }}users/activate/{{ user:id }}/{{ activation_code }}">{{ url:site }}users/activate/{{ user:id }}/{{ activation_code }}</a></p>
				<p>&nbsp;</p>
				<p>Mail istemciniz üstteki adresi bağlantı olarak algılamıyorsa, lütfen aşağıdaki adresi tarayıcınızın adres çubuğuna yapıştırın ve aktivasyon kodunu yazın:</p>
				<p><a href="{{ url:site }}users/activate">{{ url:site }}users/activate</a></p>
				<p><strong>Aktivasyon Kodu:</strong> {{ activation_code }}</p>',
			'lang' => 'tr',
			'is_default' => 1,
			'module' => 'users'
		));

		// @todo move this to the users module
		$this->db->insert('email_templates',array(
			'slug' => 'forgotten_password',
			'name' => 'Parola Sıfırlama Maili',
			'description' => 'Parola sıfırlamayı içeren mail şablonu',
			'subject' => '{{ settings:site_name }} - Forgotten Password',
			'body' => '<p>Hello {{ user:first_name }},</p>
				<p>Parola sıfırlama talep ettiniz. Bu isteği tamamlamak için lütfen bu bağlantıya tıklayın: <a href="{{ url:site }}users/reset_pass/{{ user:forgotten_password_code }}">{{ url:site }}users/reset_pass/{{ user:forgotten_password_code }}</a></p>
				<p>Eğer bu isteği siz yapmadıysanız bu mesajı önemsemeyin. Başka bir işlem yapmanıza gerek yoktur.</p>',
			'lang' => 'tr',
			'is_default' => 1,
			'module' => 'users'
		));

		// @todo move this to the users module
		$this->db->insert('email_templates',array(
			'slug' => 'new_password',
			'name' => 'Yeni Parola Maili',
			'description' => 'Parola sıfırlandıktan sonra yeni parolayı içeren mail şablonu',
			'subject' => '{{ settings:site_name }} - Yeni Parola',
			'body' => '<p>Merhaba {{ user:first_name }},</p>
				<p>Yeni parolanız: {{ new_password }}</p>
				<p>Giriş yaptıktan sonra parolanızı bu adresten değiştirebilirsiniz: <a href="{{ url:site }}edit-profile">{{ url:site }}edit-profile</a></p>',
			'lang' => 'tr',
			'is_default' => 1,
			'module' => 'users'
		));

		return TRUE;
	}

	public function uninstall()
	{
		// This is a core module, lets keep it around.
		return FALSE;
	}

	public function upgrade($old_version)
	{
		return TRUE;
	}

}
