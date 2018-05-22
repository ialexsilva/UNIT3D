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

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Repositories\PoolRepository;

class PoolController extends Controller
{
    /**
     * @var PoolRepository
     */
    private $pool;

    /**
     * PoolController constructor.
     * @param PoolRepository $pool
     */
    public function __construct(PoolRepository $pool)
    {
        $this->pool = $pool;
    }

    /**
     * @return
     */
    public function getCurrentPool()
    {
        return $this->pool->getCurrentPool();
    }

    /**
     * @return mixed
     */
    public function getTopUsers()
    {
        return $this->pool->getUserTotals();
    }

    public function addToPool(Request $request)
    {

    }

}
