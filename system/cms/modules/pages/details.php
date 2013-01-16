<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Pages Module
 *
 * @author PyroCMS Dev Team
 * @package PyroCMS\Core\Modules\Pages
 */
class Module_Pages extends Module
{
	public $version = '2.2.0';

	public function info()
	{
		return array(
			'name' => array(
                'tr' => 'Sayfalar',
                'en' => 'Pages',
				'ar' => 'الصفحات',
				'br' => 'Páginas',
				'pt' => 'Páginas',
				'cs' => 'Stránky',
				'da' => 'Sider',
				'de' => 'Seiten',
				'el' => 'Σελίδες',
				'es' => 'Páginas',
				'fi' => 'Sivut',
				'fr' => 'Pages',
				'he' => 'דפים',
				'id' => 'Halaman',
				'it' => 'Pagine',
				'lt' => 'Puslapiai',
				'nl' => 'Pagina&apos;s',
				'pl' => 'Strony',
				'ru' => 'Страницы',
				'sl' => 'Strani',
				'zh' => '頁面',
				'hu' => 'Oldalak',
				'th' => 'หน้าเพจ',
            	'se' => 'Sidor',
			),
			'description' => array(
                'tr' => 'Sitenize dilediğiniz türde sayfa ekleyin.',
                'en' => 'Add custom pages to the site with any content you want.',
				'ar' => 'إضافة صفحات مُخصّصة إلى الموقع تحتوي أية مُحتوى تريده.',
				'br' => 'Adicionar páginas personalizadas ao site com qualquer conteúdo que você queira.',
				'pt' => 'Adicionar páginas personalizadas ao seu site com qualquer conteúdo que você queira.',
				'cs' => 'Přidávejte vlastní stránky na web s jakýmkoliv obsahem budete chtít.',
				'da' => 'Tilføj brugerdefinerede sider til dit site med det indhold du ønsker.',
				'de' => 'Füge eigene Seiten mit anpassbaren Inhalt hinzu.',
				'el' => 'Προσθέστε και επεξεργαστείτε σελίδες στον ιστότοπό σας με ό,τι περιεχόμενο θέλετε.',
				'es' => 'Agrega páginas customizadas al sitio con cualquier contenido que tu quieras.',
				'fi' => 'Lisää mitä tahansa sisältöä sivustollesi.',
				'fr' => "Permet d'ajouter sur le site des pages personalisées avec le contenu que vous souhaitez.",
				'he' => 'ניהול דפי תוכן האתר',
				'id' => 'Menambahkan halaman ke dalam situs dengan konten apapun yang Anda perlukan.',
				'it' => 'Aggiungi pagine personalizzate al sito con qualsiesi contenuto tu voglia.',
				'lt' => 'Pridėkite nuosavus puslapius betkokio turinio',
				'nl' => "Voeg aangepaste pagina&apos;s met willekeurige inhoud aan de site toe.",
				'pl' => 'Dodaj własne strony z dowolną treścią do witryny.',
				'ru' => 'Управление информационными страницами сайта, с произвольным содержимым.',
				'sl' => 'Dodaj stran s kakršno koli vsebino želite.',
				'zh' => '為您的網站新增自定的頁面。',
				'th' => 'เพิ่มหน้าเว็บที่กำหนดเองไปยังเว็บไซต์ของคุณตามที่ต้องการ',
				'hu' => 'Saját oldalak hozzáadása a weboldalhoz, akármilyen tartalommal.',
            	'se' => 'Lägg till egna sidor till webbplatsen.',
			),
			'frontend' => true,
			'backend'  => true,
			'skip_xss' => true,
			'menu'	  => 'content',

			'roles' => array(
				'put_live', 'edit_live', 'delete_live'
			),

			'sections' => array(
			    'pages' => array(
				    'name' => 'pages:list_title',
				    'uri' => 'admin/pages',
				    'shortcuts' => array(
						array(
						    'name' => 'pages:create_title',
						    'uri' => 'admin/pages/create',
						    'class' => 'add'
						),
				    ),
				),
				'layouts' => array(
				    'name' => 'pages:layouts_list_title',
				    'uri' => 'admin/pages/layouts',
				    'shortcuts' => array(
						array(
						    'name' => 'pages:layouts_create_title',
						    'uri' => 'admin/pages/layouts/create',
						    'class' => 'add'
						),
				    ),
			    ),
			),
		);
	}

	public function install()
	{
		$this->dbforge->drop_table('page_chunks');
		$this->dbforge->drop_table('page_layouts');
		$this->dbforge->drop_table('pages');
		$this->dbforge->drop_table('revisions');

		$tables = array(
			'page_layouts' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'title' => array('type' => 'VARCHAR', 'constraint' => 60),
				'body' => array('type' => 'TEXT'),
				'css' => array('type' => 'TEXT', 'null' => true),
				'js' => array('type' => 'TEXT', 'null' => true),
				'theme_layout' => array('type' => 'VARCHAR', 'constraint' => 100, 'default' => 'default'),
				'updated_on' => array('type' => 'INT', 'constraint' => 11),
			),
			'pages' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'slug' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => '', 'key' => 'slug'),
				'class' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => ''),
				'title' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => ''),
				'uri' => array('type' => 'TEXT', 'null' => true),
				'parent_id' => array('type' => 'INT', 'constraint' => 11, 'default' => 0, 'key' => 'parent_id'),
				'revision_id' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => '1'),
				'layout_id' => array('type' => 'VARCHAR', 'constraint' => 255),
				'css' => array('type' => 'TEXT', 'null' => true),
				'js' => array('type' => 'TEXT', 'null' => true),
				'meta_title' => array('type' => 'VARCHAR', 'constraint' => 255, 'null' => true),
				'meta_keywords' => array('type' => 'CHAR', 'constraint' => 32, 'null' => true),
				'meta_description' => array('type' => 'TEXT', 'null' => true),
				'rss_enabled' => array('type' => 'INT', 'constraint' => 1, 'default' => 0),
				'comments_enabled' => array('type' => 'INT', 'constraint' => 1, 'default' => 0),
				'status' => array('type' => 'ENUM', 'constraint' => array('draft', 'live'), 'default' => 'draft'),
				'created_on' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
				'updated_on' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
				'restricted_to' => array('type' => 'VARCHAR', 'constraint' => 255, 'null' => true),
				'is_home' => array('type' => 'INT', 'constraint' => 1, 'default' => 0),
				'strict_uri' => array('type' => 'TINYINT', 'constraint' => 1, 'default' => 1),
				'order' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
			),
			'page_chunks' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'slug' => array('type' => 'VARCHAR', 'constraint' => 255, 'null' => false),
				'class' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => ''),
				'page_id' => array('type' => 'INT', 'constraint' => 11),
				'body' => array('type' => 'TEXT'),
				'parsed' => array('type' => 'TEXT', 'null' => true),
				'type' => array('type' => 'SET', 'constraint' => array('html', 'markdown', 'wysiwyg-advanced', 'wysiwyg-simple')),
				'sort' => array('type' => 'INT', 'constraint' => 11),
			),
		);

		if ( ! $this->install_tables($tables))
		{
			return false;
		}

		// We will need to get now() later on.
		$this->load->helper('date');

		$default_page_layout = array(
			'id' => 1,
			'title' => 'Varsayılan',
			'body' => '<h2>{{ page:title }}</h2>'.PHP_EOL.'{{ page:body }}',
			'css' => '',
			'js' => '',
			'updated_on' => now(),
		);

		if ( ! $this->db->insert('page_layouts', $default_page_layout))
		{
			return false;
		}

		$default_pages = array(
			/* The home page. */
			array(
				'slug' => 'anasayfa',
				'title' => 'Anasayfa',
				'uri' => 'anasayfa',
				'revision_id' => 1,
				'parent_id' => 0,
				'layout_id' => 1,
				'status' => 'live',
				'restricted_to' => '',
				'created_on' => now(),
				'is_home' => 1,
				'order' => now()
			),
			/* The 404 page. */
			array(
				'slug' => '404',
				'title' => 'Sayfa bulunamıyor',
				'uri' => '404',
				'revision_id' => 1,
				'parent_id' => 0,
				'layout_id' => 1,
				'status' => 'live',
				'restricted_to' => '',
				'created_on' => now(),
				'is_home' => 0,
				'order' => now()
			),
			/* The contact page. */
			array(
				'slug' => 'iletisim',
				'title' => 'İletişim',
				'uri' => 'iletisim',
				'revision_id' => 1,
				'parent_id' => 0,
				'layout_id' => 1,
				'status' => 'live',
				'restricted_to' => '',
				'created_on' => now(),
				'is_home' => 0,
				'order' => now()
			),
		);

		foreach ($default_pages as $page_chunk)
		{
			if ( ! $this->db->insert('pages', $page_chunk))
			{
				return false;
			}
		}

		$default_page_chunks = array(
			/* The home page chunk. */
			array(
				'slug' => 'default',
				'page_id' => 1,
				'body' => '<p>Sayfamıza hoşgeldiniz. Sayfamız henüz tamamlanmadı, fakat sitemizi sık kullanılanlar listenize ekleyin ve bizi takip edin.</p>',
				'parsed' => '',
				'type' => 'wysiwyg-advanced',
				'sort' => 1,
			),
			/* The 404 page chunk. */
			array(
				'slug' => 'default',
				'page_id' => 2,
				'body' => '<p>Aradadığınız sayfayı bulamadık, lütfen <a title="Home" href="{{ pages:url id=\'1\' }}">buraya tıklayarak</a> anasayfaya dönün.</p>',
				'parsed' => '',
				'type' => 'html',
				'sort' => 1,
			),
			/* The contact page chunk. */
			array(
				'slug' => 'default',
				'page_id' => 3,
				'body' => '<p>Bizimle iletişim kurmak için lütfen aşağıdaki formu doldurun.</p>
					{{ contact:form name="text|required" email="text|required|valid_email" subject="dropdown|Destek|Satış|Feedback|Diğer" message="textarea" attachment="file|zip" }}
						<div><label for="name">İsim:</label>{{ name }}</div>
						<div><label for="email">Email:</label>{{ email }}</div>
						<div><label for="subject">Konu:</label>{{ subject }}</div>
						<div><label for="message">Mesaj:</label>{{ message }}</div>
						<div><label for="attachment">Zip dosyası ekle:</label>{{ attachment }}</div>
					{{ /contact:form }}',
				'parsed' => '',
				'type' => 'html',
				'sort' => 1,
			),
		);
		foreach ($default_page_chunks as $page_chunk)
		{
			if ( ! $this->db->insert('page_chunks', $page_chunk))
			{
				return false;
			}
		}

		return true;
	}

	public function uninstall()
	{
		// This is a core module, lets keep it around.
		return false;
	}

	public function upgrade($old_version)
	{
		return true;
	}
}