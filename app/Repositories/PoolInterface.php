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

namespace App\Repositories;

use App\PoolTransactions;
use App\PoolSettings;

interface PoolInterface
{
    public function getCurrentPool();
    public function getUserTotals();


}