<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'Panda' );

/** Username của database */
define( 'DB_USER', 'Panda' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'Hoangducnghi2002$' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u`H*ciw/rp25xGqb7`0$y3wEB}*5K-w]T%q+:W*Kegz%)>qb-e:]^$7K1,rg[iX}' );
define( 'SECURE_AUTH_KEY',  '(Bt%ArEcqlpt7)ahcjxc/JpePYb4Q60 dmtDMeztPAl?Eot^5e4bTk0A|dr4P<k^' );
define( 'LOGGED_IN_KEY',    '_[W:3IOhd# rgcrX`3[tV;[rFhcFH>3eE*#I:jovg21F}OoM${3tTT6Q9?)s+!tF' );
define( 'NONCE_KEY',        'lR>4KSqjt}@fnAN3q@25^g&Am7d=$MjL@NQS|zJlQxO_6V$Z$[`84yQNym2Mk+>+' );
define( 'AUTH_SALT',        '>1^>AV 71G|yK3p[<R!iNb}n>_&Uo:cZ!5C3^VV7kdB^T9I[N+Wjh7J_eTm<n~Xu' );
define( 'SECURE_AUTH_SALT', 'vJ4-}Zph>x rrD2M1cT+Z1r?dCF,p8,_6cQ,e>.w-VO@X~[?! |=H9qiB^##_]LU' );
define( 'LOGGED_IN_SALT',   'obfY2p%g:?)-Rda[I&%qwKQE`l7 CT)pfTH7B$0ZKZ4Y^#I^^@)knCQi;41BeaU,' );
define( 'NONCE_SALT',       ')J6|[1^oZ/h4IA(e7JF6Ob8[wWS#t[!u&Y)h9,/q0+98f*R~M,Go~$:<?8<CG=#+' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'panda_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
