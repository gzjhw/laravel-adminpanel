<?php
	/**
	 * @version 0.0.1
	 * @copyright blog Copyright (c) 23.12.2018
	 * @author Dennis
	 * @file MainHelper.php
	 * @link http://www.decodo.de
	 */

	namespace App\Helpers;

	use App\Providers\HelperServiceProvider;
	use Illuminate\Support\Facades\Route;

	class MainHelper extends HelperServiceProvider
	{
		/**
		 * @var array
		 */
		public static $navigation = [
			[
				'name' => 'Artikel',
				'icon' => 'fas fa-cube',
				'link' => '#',
				'items' => [
					[
						'name' => 'Übersicht',
						'icon' => null,
						'link' => 'backend',
						'items' => [],
					], [
						'name' => 'Anlegen',
						'icon' => 'fas fa-pen fa-fw',
						'link' => '#',
						'items' => [],
					],
				],
			], [
				'name' => 'Benutzer',
				'icon' => 'fas fa-users',
				'link' => '#',
				'items' => [
					[
						'name' => 'Übersicht',
						'icon' => null,
						'link' => 'backend.users',
						'items' => [],
					], [
						'name' => 'Anlegen',
						'icon' => 'fas fa-pen fa-fw',
						'link' => '#',
						'items' => [],
					],
				],
			],
		];

		/**
		 * @var string
		 */
		public static $activeRoute = '';

		/**
		 * @return string
		 */
		public static function renderSideNav()
		{
			self::$activeRoute = Route::current()->getName();
			return self::renderMenu(self::$navigation);
		}

		/**
		 * @param $navigationData
		 * @param int $depth
		 * @return string
		 */
		public static function renderMenu($navigationData, $depth = 1)
		{
			$navigationHtml = '';
			foreach($navigationData as $key => $item) {
				$classCollection = [];

				// IS DIVIDER OR GROUP TITLE ?
				if(!is_array($item)) {
					if($item === '-') {
						$navigationHtml .= '<li><hr/></li>';
					}
					continue;
				}

				if(isset($item['items']) && count($item['items']) > 0) {
					$sub = $depth + 1;
					$subItems = self::renderMenu($item['items'], $sub);

					$isActive = '';
					$displayBlock = '';
					if(FALSE !== stripos($subItems, 'class="active"')) {
						$isActive = 'active';
						$displayBlock = 'style="display: block;"';
					}

					$navigationHtml .= '' .
						'<li data-level="' . $depth . '" class="' . $isActive . '">' .
						'<a class="collapsible-header waves-effect arrow-r ' . $isActive . '">' .
						'<i class="' . $item['icon'] . '"></i>' .
						$item['name'] .
						'<i class="fas fa-angle-down rotate-icon"></i>' .
						'</a>' .
						'<div class="collapsible-body" ' . $displayBlock . '>' .
						'<ul>' . $subItems . '</ul>' .
						'</div>' .
						'</li>';
					continue;
				}

				// NOW TAKE CAR OF ACTIVE ELEMENT
				if($item['link'] === self::$activeRoute) {
					$classCollection[] = 'active';
					$item['name'] = '<strong>' . $item['name']  . '</strong>';
				}

				$class = '';
				if(count($classCollection) !== 0) {
					$class = ' class="' . implode(' ', $classCollection) . '"';
				}

				$item['icon'] = $item['icon'] ?? 'fas fa-fw fa-angle-right';

				$link = $item['link'];
				if($link !== '#') {
					$link = route($link);
				}

				$navigationHtml .= '' .
					'<li data-level="' . $depth . '" data-active="' . self::$activeRoute . '" data-this="' . $item['link'] . '" ' . $class . '><a href="' . $link . '" class="waves-effect">' .
					'<i class="' . $item['icon'] . '"></i>&nbsp;' . $item['name'] .
					'</a></li>';
			}

			return $navigationHtml;
		}
	}
