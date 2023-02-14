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
    const VERSION = '1.0.7';
    const LAST_MODIFIED = '2023-02-14';
    const AUTHOR_NAME = 'Hung Nguyen';
    const AUTHOR_EMAIL = 'dev@nguyenanhung.com';
    const PROJECT_NAME = 'Templates: Web Builder by Hung Nguyen';
    const USE_BENCHMARK = false;
    const USE_DEBUG = false;

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
