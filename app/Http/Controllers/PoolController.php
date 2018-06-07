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

namespace App\Http\Controllers;

class PoolController extends Controller
{
    /**
     * PoolController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPoolView(){
        return view("bonus.pool");
    }
}
