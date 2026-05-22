<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'jv1vbqtx9b9myabdrl6ad82n5udixjqaav9tq1boukbaxjp4zh5bl62imzi0ppn7' );
define( 'SECURE_AUTH_KEY',  'jkazm8abqjuesspsv4ymlmypodx2qwblcojj5f57pgtk1c3z9zqng5yzz11niima' );
define( 'LOGGED_IN_KEY',    'su8r5mh4jyduzatpz0ygzbae0o04dtgwaiwe8fnwitskfz2kzgrj03iuvead7ylu' );
define( 'NONCE_KEY',        'xrnma51jt77xf4rokmwnzh0cqi9sbml5xnugb5yt350qe19n7yuq122dw4ihd8ej' );
define( 'AUTH_SALT',        'ak5pqes7kuu4uhd5l76prgd4p1cwaktmfpb048aizm68f6fzbjemt56trev1myap' );
define( 'SECURE_AUTH_SALT', 'hk6u52e5eoeo3e7y0bf5fg4xdlgvqlljxzroaezoruhftbucs3984189ptriyidp' );
define( 'LOGGED_IN_SALT',   'p2iag5x12jfb8ii4fvkh74l7kofpp8az9mdd3cszafpw1wdkxf1vqv2svlpsfe5i' );
define( 'NONCE_SALT',       'pu9e2scekz5a3s5cvlysztlopnib1n6c6yieqvhl1xo1mfg964sp123dvwvjek7q' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-15c6cf74-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-15c6cf74-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
