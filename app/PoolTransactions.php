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

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoolTransactions extends Model
{
    /**
     * Customised name for created_at
     */
    public const CREATED_AT = "creation_date";

    /**
     * This model has custom timestamp fields and the default should not be used
     * @var bool
     */
    public $timestamps = false;

    /**
     * has one Parent PoolTransactions
     */
    public function pool(){
        return $this->hasOne(PoolSettings::class);
    }
}
