
@php
$dashboard = [
'title' => 'Home',
'url' => '/home',
'icon' => 'dw dw-house-1',
'model' => App\Models\Home::class,
];

$projects = [
'title' => 'Data Master',
'url' => '',
'icon' => 'dw dw-startup',
'model' => App\Models\Project::class,
'childerns' => [
		[
				'title' => 'Pekerjaan',
				'url' => '/pekerjaan',
		],
		[
				'title' => 'Pendidikan',
				'url' => '/pendidikan',
		],
		// [
		// 		'title' => 'test',
		// 		'url' => '/projects/create',
		// ],
]
];

$clients = [
'title' => 'Siswa',
'url' => '/siswa',
'icon' => 'dw dw-user-11',
'model' => App\Models\Client::class,
];

$kas = [
'title' => 'KAS',
'url' => '',
'icon' => 'dw dw-money-1',
'model' => App\Models\Kas::class,
'childerns' => [
		[
				'title' => 'List KAS',
				'url' => '/kas',
		],
		[
				'title' => 'Tambah Pemasukkan',
				'url' => '/kas/pengeluaran',
		],
		[
				'title' => 'Tambah Pengeluaran',
				'url' => '/kas/pemasukkan',
		],
]
];

$users = [
'title' => 'Orang Tua',
'url' => '',
'icon' => 'dw dw-user1',
'model' => App\Models\User::class,
'childerns' => [
		[
				'title' => 'Ayah',
				'url' => '/ayah',
		],
		[
				'title' => 'Ibu',
				'url' => '/ibu',
		],
]
];

$reports = [
'title' => 'Reports',
'url' => '/reports',
'icon' => 'dw dw-file-39',
'model' => App\Models\Report::class,
];

$schedules = [
'title' => 'Schedules',
'url' => '/schedules',
'icon' => 'dw dw-calendar1',
'model' => App\Models\Schedule::class,
];

$menus = [$dashboard, $projects, $clients];
//  $kas, $reports, $schedules, $users
$currentPath = '/' . request()->path();

@endphp


<div class="left-side-bar">
<div class="brand-logo">
<a href="index.html">
	{{-- <img src="/deskapp/vendors/images/deskapp-logo.svg" alt="" class="dark-logo"> --}}
	<img src="/deskapp/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
	{{-- <span>MahirApp</span> --}}
</a>
<div class="close-sidebar" data-toggle="left-sidebar-close">
	<i class="ion-close-round"></i>
</div>
</div>
<div class="menu-block customscroll">
<div class="sidebar-menu">
	<ul id="accordion-menu">

		@foreach ($menus as $index => $menu)

		@if (isset($menu['childerns']))
				
		<?php
		$isActive = false;
		foreach ($menu['childerns'] as $childern) {
				if ($childern['url'] == $currentPath) {
						$isActive = true;
				}
		}
		?>
		
		<li class="dropdown">
			<a href="javascript:;" class="dropdown-toggle">
				<span class="micon {{ $menu['icon'] }}"></span><span class="mtext">{{ $menu['title'] }}</span>
			</a>
			<ul class="submenu">
				@foreach ($menu['childerns'] as $childern)
					<li><a href="{{ $childern['url'] }}" class="{{ $childern['url'] === $currentPath ? 'active' : '' }}">{{ $childern['title'] }}</a></li>
				@endforeach
			</ul>
		</li>

		@else

		<li>
			<a href="{{ $menu['url'] }}" class="dropdown-toggle no-arrow {{ $menu['url'] ==  $currentPath ? 'active' : '' }}">
				<span class="micon {{ $menu['icon'] }}"></span><span class="mtext">{{ $menu['title'] }}</span>
			</a>
		</li>

		@endif
				
		@endforeach
	</ul>
</div>
</div>
</div>