<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/4/18
 * Time: 14:55
 */

namespace nguyenanhung\WebBuilderTemplates;

/**
 * Interface Environment
 *
 * @package   nguyenanhung\WebBuilderHelper
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface Environment
{
    public const VERSION       = '1.0.3';
    public const LAST_MODIFIED = '2022-07-04';
    public const AUTHOR_NAME   = 'Hung Nguyen';
    public const AUTHOR_EMAIL  = 'dev@nguyenanhung.com';
    public const PROJECT_NAME  = 'Templates: Web Builder by Hung Nguyen';
    public const USE_BENCHMARK = false;
    public const USE_DEBUG     = false;

    /**
     * Hàm lấy thông tin phiên bản Package
     *
     * @author  : 713uk13m <dev@nguyenanhung.com>
     * @time    : 10/13/18 15:12
     *
     * @return string Current Project Version, VD: 0.1.0
     */
    public function getVersion();
}
