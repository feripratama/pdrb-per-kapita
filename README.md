# PDRB per Kapita
Product domestic regional bruto (PDRB) per kapita

[![Join the chat at https://gitter.im/pdrb-per-kapita/Lobby](https://badges.gitter.im/pdrb-per-kapita/Lobby.svg)](https://gitter.im/pdrb-per-kapita/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/pdrb-per-kapita/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/pdrb-per-kapita/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/pdrb-per-kapita/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/pdrb-per-kapita/build-status/master)

Product domestic regional bruto (PDRB) atas dasar harga berlaku

#### Cara install :

```bash
$ composer require bantenprov/pdrb-per-kapita:dev-master
```

#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\PdrbPerKapita\PdrbPerKapitaServiceProvider::class,

```

#### Tambahkan route di dalam : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/pdrb-per-kapita',
    components: {
      main: resolve => require(['./components/views/bantenprov/pdrb-per-kapita/DashboardPdrbPerKapita.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Pdrb Per Kapita"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
    {
      path: '/admin/dashboard',
      components: {
        main: resolve => require(['./components/bantenprov/pdrb-per-kapita/PdrbPerKapitaAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Pdrb Per Kapita"
      }
    }
  ]
},

```

#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Pdrb Per Kapita',
          link: '/dashboard/pdrb-per-kapita',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
```


#### Tambahkan components `resources/assets/js/components.js` :

```javascript
import PdrbPerKapita from './components/bantenprov/pdrb-per-kapita/PdrbPerKapita.chart.vue';
Vue.component('echarts-pdrb-per-kapita', PdrbPerKapita);

import PdrbPerKapitaKota from './components/bantenprov/pdrb-per-kapita/PdrbPerKapitaKota.chart.vue';
Vue.component('echarts-pdrb-per-kapita-kota', PdrbPerKapitaKota);

import PdrbPerKapitaTahun from './components/bantenprov/pdrb-per-kapita/PdrbPerKapitaTahun.chart.vue';
Vue.component('echarts-pdrb-per-kapita-tahun', PdrbPerKapitaTahun);

import PdrbPerKapitaAdminShow from './components/bantenprov/pdrb-per-kapita/PdrbPerKapitaAdmin.show.vue';
Vue.component('admin-view-pdrb-per-kapita-tahun', PdrbPerKapitaAdminShow);

//== Echarts pdrb

import PdrbPerKapitaBar01 from './components/views/bantenprov/pdrb-per-kapita/PdrbPerKapitaBar01.vue';
Vue.component('pdrb-per-kapita-bar-01', PdrbPerKapitaBar01);

import PdrbPerKapitaBar02 from './components/views/bantenprov/pdrb-per-kapita/PdrbPerKapitaBar02.vue';
Vue.component('pdrb-per-kapita-bar-02', PdrbPerKapitaBar02);

//== mini bar charts
import PdrbPerKapitaBar03 from './components/views/bantenprov/pdrb-per-kapita/PdrbPerKapitaBar03.vue';
Vue.component('pdrb-per-kapita-bar-03', PdrbPerKapitaBar03);

import PdrbPerKapitaPie01 from './components/views/bantenprov/pdrb-per-kapita/PdrbPerKapitaPie01.vue';
Vue.component('pdrb-per-kapita-pie-01', PdrbPerKapitaPie01);

import PdrbPerKapitaPie02 from './components/views/bantenprov/pdrb-per-kapita/PdrbPerKapitaPie02.vue';
Vue.component('pdrb-per-kapita-pie-02', PdrbPerKapitaPie02);

//== mini pie charts
import PdrbPerKapitaPie03 from './components/views/bantenprov/pdrb-per-kapita/PdrbPerKapitaPie03.vue';
Vue.component('pdrb-per-kapita-pie-03', PdrbPerKapitaPie03);


```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=pdrb-assets
$ php artisan vendor:publish --tag=pdrb-public
```



