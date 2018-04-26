<?php
/**
 * NOTICE OF LICENSE
 *
 * UNIT3D is open-sourced software licensed under the GNU General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 * @author     HDVinnie
 */

namespace App\Http\Controllers;

use App\Report;
use App\Torrent;
use Illuminate\Http\Request;
use \Toastr;

class ReportController extends Controller
{

    /**
     * @var Report
     */
    private $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function postReport(Request $request)
    {
        $this->report->create([
            'type' => $request->get('type'),
            'reporter_id' => $request->get('reporter'),
            'reported_user' => $request->get('reported'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
            'solved' => 0
        ]);

        return response(['message' => 'Your report has been successfully submitted!'], 201);
    }
}
