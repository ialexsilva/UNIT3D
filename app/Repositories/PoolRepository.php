<?php
/**
 * *
 *  * NOTICE OF LICENSE
 *  *
 *  * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 *  * The details is bundled with this project in the file LICENSE.txt.
 *  *
 *  * @project    UNIT3D
 *  * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 *  * @author     MrG01
 *
 */

/**
 * Created by PhpStorm.
 * User: g
 * Date: 2018/05/08
 * Time: 16:49
 */

namespace App\Repositories;

use App\PoolSettings;
use App\PoolTransactions;

class PoolRepository implements PoolInterface
{

    /**
     * @var Pool Transactions
     */
    private $transactions;

    /**
     * @var Pool Settings
     */
    private $settings;

    /**
     * PoolRepository constructor.
     * @param PoolTransactions $transactions
     * @param PoolSettings $settings
     */
    public function __construct(PoolTransactions $transactions, PoolSettings $settings)
    {
        $this->settings = $settings;
        $this->transactions = $transactions;
    }

    /**
     * Returns top 5 contributors to current pool
     */
    public function getCurrentPool()
    {
        // TODO: Implement getCurrentPool() method.
    }

    /**
     * Returns top 5 contributing users in total
     */
    public function getUserTotals()
    {
        // TODO: Implement getUserTotals() method.
    }
}