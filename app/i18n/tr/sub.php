<?php

return array(
	'add' => 'Akış ve kategori oluşturma menüsü <a href=\'%s\'>buraya</a> taşındı. Ayrıca sol menüden ve anasayfadaki ✚ simgesinden de ulaşılabilir.',
	'api' => array(
		'documentation' => 'URL\'yi harici bir araçla kullanmak için kopyala.',
		'title' => 'API',
	),
	'bookmarklet' => array(
		'documentation' => 'Bu butonu yer imleri araç çubuğunuza sürükleyerek veya sağ tıklayıp "Bağlantıyı yer imlerine ekle" seçeneğini seçerek yer imlerine ekleyin. Eklemek istediğiniz sitedeyken oluşturulan bu "Abone Ol" butonu ile akış ekleyebilirsiniz.',
		'label' => 'Abone ol',
		'title' => 'Bookmarklet',
	),
	'category' => array(
		'_' => 'Kategori',
		'add' => 'Kategori ekle',
		'archiving' => 'Arşiv',
		'empty' => 'Boş kategori',
		'information' => 'Bilgi',
		'position' => 'Konumu göster',
		'position_help' => 'Kategori sıralama düzenini kontrol etmek için',
		'title' => 'Başlık',
	),
	'feed' => array(
		'add' => 'RSS akışı ekle',
		'advanced' => 'Gelişmiş',
		'archiving' => 'Arşiv',
		'auth' => array(
			'configuration' => 'Giriş',
			'help' => 'HTTP korumalı RSS akışlarına bağlantı izni sağlar',
			'http' => 'HTTP Kimlik Doğrulama',
			'password' => 'HTTP şifre',
			'username' => 'HTTP kullanıcı adı',
		),
		'clear_cache' => 'Önbelleği her zaman temizle',
		'content_action' => array(
			'_' => 'Content action when fetching the article content',	// TODO - Translation
			'append' => 'Mevcut içeriğin sonrasına ekle',
			'prepend' => 'Mevcut içeriğin öncesine ekle',
			'replace' => 'Mevcut içerikle değiştir',
		),
		'css_cookie' => 'Makale içeriğini yüklerken çerez kullan',
		'css_cookie_help' => 'Örnek: <kbd>foo=bar; gdpr_consent=true; cookie=value</kbd>',
		'css_help' => 'Dikkat, daha çok zaman gerekir!',
		'css_path' => 'Makaleleri kendi CSS görünümü ile göster',
		'description' => 'Tanım',
		'empty' => 'Bu akış boş. Lütfen akışın aktif olduğuna emin olun.',
		'error' => 'Bu akışda bir hatayla karşılaşıldı. Lütfen akışın sürekli ulaşılabilir olduğuna emin olun.',
		'filteractions' => array(
			'_' => 'Eylemi filtrele',
			'help' => 'Her satıra tek arama filtresi yaz.',
		),
		'information' => 'Bilgi',
		'keep_min' => 'En az tutulacak makale sayısı',
		'maintenance' => array(
			'clear_cache' => 'Önbelleği temizle',
			'clear_cache_help' => 'Bu akışın önbelleğini temizler.',
			'reload_articles' => 'Makaleleri yeniden yükle',
			'reload_articles_help' => 'Reload articles and fetch complete content if a selector is defined.',	// TODO - Translation
			'title' => 'Bakım',
		),
		'moved_category_deleted' => 'Bir kategoriyi silerseniz, içerisindeki akışlar <em>%s</em> içerisine yerleşir.',
		'mute' => 'sessize al',
		'no_selected' => 'Hiçbir akış seçilmedi.',
		'number_entries' => '%d makale',
		'priority' => array(
			'_' => 'Görünürlük',
			'archived' => 'Gösterme (arşivlenmiş)',
			'main_stream' => 'Ana akışda göster',
			'normal' => 'Kendi kategorisinde göster',
		),
		'proxy' => 'Bu akışı güncellemek için vekil sunucu kullan',
		'proxy_help' => 'Bir protokol seçin (ör: SOCKS5) vekil sunucu adresini girin (e.g: <kbd>127.0.0.1:1080</kbd>)',
		'selector_preview' => array(
			'show_raw' => 'Kaynak kodu göster',
			'show_rendered' => 'İçeriği göster',
		),
		'show' => array(
			'all' => 'Tüm akışı göster',
			'error' => 'Sadece hatalı akışları göster',
		),
		'showing' => array(
			'error' => 'Sadece hatalı akışları gösteriliyor',
		),
		'ssl_verify' => 'SSL güvenliğini doğrula',
		'stats' => 'İstatistikler',
		'think_to_add' => 'Akış ekleyebilirsiniz.',
		'timeout' => 'Zaman aşımı (saniye)',
		'title' => 'Başlık',
		'title_add' => 'RSS akışı ekle',
		'ttl' => 'Şu kadar süreden fazla otomatik yenileme yapma',
		'url' => 'Akış URL',
		'useragent' => 'Bu akışı yüklemek için user agent kullan',
		'useragent_help' => 'Örnek: <kbd>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0)</kbd>',
		'validator' => 'Akış geçerliliğini kontrol edin',
		'website' => 'Site URL',
		'websub' => 'WebSub ile anlık bildirim',
	),
	'firefox' => array(
		'documentation' => 'FreshRSS\'i Firefox akış okuma listesine eklemek için <a href="https://developer.mozilla.org/en-US/Firefox/Releases/2/Adding_feed_readers_to_Firefox#Adding_a_new_feed_reader_manually">buradaki</a> adımları takip edin.',
		'obsolete_63' => 'Sürüm 63 itibari ile Firefox bağımsız uygulamaların aboneliklerinize olan izni kaldırdı.',
		'title' => 'Firefox akış okuyucu',
	),
	'import_export' => array(
		'export' => 'Dışa aktar',
		'export_labelled' => 'Etiketli makaleleri dışarı aktar',
		'export_opml' => 'Akış listesini dışarı aktar (OPML)',
		'export_starred' => 'Favorileri dışarı aktar',
		'feed_list' => '%s makalenin listesi',
		'file_to_import' => 'Dosyadan içe aktar<br />(OPML, JSON or ZIP)',
		'file_to_import_no_zip' => 'Dosyadan içe aktar<br />(OPML or JSON)',
		'import' => 'İçe aktar',
		'starred_list' => 'Favori makaleleirn listesi',
		'title' => 'İçe / dışa aktar',
	),
	'menu' => array(
		'add' => 'Kategori veya akış ekle',
		'add_feed' => 'Akış ekle',
		'bookmark' => 'Abonelik (FreshRSS yer imleri)',
		'import_export' => 'İçe / dışa aktar',
		'label_management' => 'Etiket yönetimi',
		'subscription_management' => 'Abonelik yönetimi',
		'subscription_tools' => 'Abonelik araçları',
	),
	'tag' => array(
		'name' => 'İsim',
		'new_name' => 'Eski isim',
		'old_name' => 'Yeni isim',
	),
	'title' => array(
		'_' => 'Abonelik yönetimi',
		'add' => 'Kategori veya akış ekle',
		'add_category' => 'Kategori ekle',
		'add_feed' => 'Akış ekle',
		'add_label' => 'Etiket ekle',
		'delete_label' => 'Etiket sil',
		'feed_management' => 'RSS akış yönetimi',
		'rename_label' => 'Etiketi yeniden adlandır',
		'subscription_tools' => 'Abonelik araçları',
	),
);